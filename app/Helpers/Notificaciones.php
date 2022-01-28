<?php


namespace App\Helpers;
use Request;
use App\tbl_notificacione as NotificacionesModel;
use App\log_actividade as LogActivityModel;
use App\User;
use Auth;


class Notificaciones
{


    public static function agregarLog($subject, $id_lead, $id_registro, $tabla)
    {
        $log = [];
        $log['accion'] = $subject;
        $log['url'] = Request::fullUrl();
        $log['metodo'] = Request::method();
        $log['ip'] = Request::ip();
        $log['agente'] = Request::header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        $log['id_lead'] = $id_lead;
        $log['id_registro'] = $id_registro;
        $log['tabla'] = $tabla;
        LogActivityModel::create($log);
    }


    public static function addNotificacion($destinatario, $id_emisor, $id_receptor, $notificacion, $id_venta, $url)
    {
        $log = [];
        $log['destinatario'] = $destinatario;
        $log['id_emisor'] = $id_emisor;
        $log['id_receptor'] = $id_receptor;
        $log['notificacion'] = $notificacion;
        $log['id_lead'] = auth()->check() ? Auth::user()->id : 1;
        $log['id_venta'] = $id_venta;
        $log['url'] = $url;
        NotificacionesModel::create($log);
        User::where('id',$id_receptor)->update(['visto'=>1,'actividades'=>1]);

    }

    public static function sendNotification($title, $body, $tipo, $id)
    {
        $tipo;
        $firebaseToken = User::where('id','=',$id)->whereNotNull('device_token')->pluck('device_token')->all();

        $SERVER_API_KEY = 'AAAAenenQEE:APA91bEBwRALcU4yEiCWXyeNn34oT470IYhOkd2sOnpd2p871Fu4qjomk46vaNhYtWfIfBMM3u7Kf5HEriFpKsqnmaLrGQQxjO5KOVCUOT_w4DoR6pzssx_SrboQsMWL2ZUNGL9-Kxj2';

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $title,
                "body" => $body,
                "icon" => 'https://fielgroup.com.mx/suzuki_admin/public/material/svg/logos/suzuki-logo-1.png'
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        curl_exec($ch);

        return response()->json([
            'status' => true,
        ], 200);

    }


}

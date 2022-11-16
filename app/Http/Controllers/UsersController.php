<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\cat_role;

use Auth;
use Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::check()){
            return view('pages.config.users.index', ['active' => 'usuarios']);
        }
    }

    public function index_perfil(){
        if(Auth::check()){
            return view('pages.config.perfil.index', ['active' => 'perfil']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $cadena = 'Usuario registrado | ';
        if($request->id){
            $cadena = 'Usuario editado | ';
        }
        $request->merge(['id_desarrollos' => 1]);

        if($request->password_plain) {
            $request->merge([
                'password' => Hash::make($request->password_plain),
            ]);
        }
        $user = User::updateOrCreate(
            [
                'id' => $request->id
            ],
            $request->except(['id'])
        );

        $user->roles()->attach(cat_role::where('id', $request->rol)->first());
        $cadena .= $request->nombre." ".$request->ap_paterno." ".$request->ap_materno." - Rol ".$request->rol." - Email ".$request->email." - Celular ".$request->celular;

        \Notificaciones::agregarLog($cadena, $user->id, "users");
        return response()->json(
            [
                'respuesta' => true,
                'mensaje' => "Accion realizada correctamente"
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return response()->json([
            'status' => true,
            'usuario' => User::find($id)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $user = User::withTrashed()->find($id);
        $user ->delete();
        \Notificaciones::agregarLog('Registro eliminado desde Mi empresa - Usuarios ', $id, "users");
        return response()->json([
            'status' => true,
        ], 200);
    }

    public function getUsuarios(){
        if($user = User::where('rol' ,'<>', 0)->get()){
            return response()->json([
                'data' => $user
            ]);
        }else{
            return response()->json([
                'status' => false,
            ], 200);
        }
    }
}

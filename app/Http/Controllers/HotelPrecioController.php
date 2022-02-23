<?php

namespace App\Http\Controllers;

use App\hotel_precio;
use Illuminate\Http\Request;

use Auth;
use DB;

class HotelPrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel.tipo_habitaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_p = hotel_precio::updateOrCreate(
            [
                'id' => $request->id
            ],
            $request->except(['id'])
        )->id;


        if ($request->id) {
            $mensaje = 'Registro actualizado correctamente';
            \Notificaciones::agregarLog('Contacto actualizado', $id_p, $id_p, 'pacientes');
        } else {
            $mensaje = 'Registro creado correctamente';
            \Notificaciones::agregarLog('Contacto registrado', $id_p, $id_p, 'pacientes');
        }


        return response()->json(
            [
                'respuesta' => true,
                'mensaje' => $mensaje
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotel_precio  $hotel_precio
     * @return \Illuminate\Http\Response
     */
    public function show(hotel_precio $hotel_precio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel_precio  $hotel_precio
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel_precio $hotel_precio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel_precio  $hotel_precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel_precio $hotel_precio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel_precio  $hotel_precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel_precio $hotel_precio)
    {
        $id_contacto = paciente::withTrashed()->find($id);
        $id_contacto ->delete();
       \Notificaciones::agregarLog('Tipo de habitacion eliminado correctamente', $id, $id, "tipo_habitacion");
        return response()->json([
            'status' => true,
        ], 200);
    }

    public function list(){

        return response()->json([
            'data' => hotel_precio::get()
        ]);
    }
}

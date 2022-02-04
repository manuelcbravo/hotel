<?php

namespace App\Http\Controllers;

use App\hotel_precio;
use Illuminate\Http\Request;

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
        //
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
        //
    }

    public function list(){
        
    }
}

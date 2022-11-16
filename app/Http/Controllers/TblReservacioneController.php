<?php

namespace App\Http\Controllers;

use App\Models\tbl_reservacione;
use Illuminate\Http\Request;

class TblReservacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.calendario.reservaciones.index',  ['active' => 'reservaciones']);
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
     * @param  \App\Models\tbl_reservacione  $tbl_reservacione
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_reservacione $tbl_reservacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_reservacione  $tbl_reservacione
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_reservacione $tbl_reservacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_reservacione  $tbl_reservacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_reservacione $tbl_reservacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_reservacione  $tbl_reservacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_reservacione $tbl_reservacione)
    {
        //
    }
}

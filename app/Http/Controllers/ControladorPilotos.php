<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ControladorPilotos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {

        return view ('piloto');
    }
    public function anadirP(Request $request)
    {
        $pilotos = new Piloto();
        $pilotos -> nombre = $request -> nombre;
        $pilotos -> fecha_nacimiento = $request -> fecha_nacimiento;
        $pilotos -> numero_licencia = $request -> numero_licencia;
        $pilotos -> victorias = $request -> victorias;
        $pilotos -> save();

        return view ('piloto', $pilotos);
    }
    public function anadirE()
    {
        return view ('escuderia');
    }
    public function lista(Request $request)
    {
        $pilotos = new Usuario(request()->all());
        return view ('lista', $pilotos);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorio = Directorio::all();
        return view('/Laumayer/Documentos/Directorio/index', compact('directorio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Laumayer/Documentos/Directorio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directorio = new Directorio();

        $directorio->nombre = $request->nombre;
        $directorio->cargo = $request->cargo;
        $directorio->extension = $request->extension;
        $directorio->celular = $request->celular;
        $directorio->email = $request->email;
        $directorio->centro_costos = $request->centro_costos;
        $directorio->subproceso = $request->subproceso;
        $directorio->estado = $request->estado;

        $directorio->save();

        return redirect()->route('directorio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Directorio $directorio)
    {
        return view('/Laumayer/Documentos/Directorio/show', compact('directorio'));
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

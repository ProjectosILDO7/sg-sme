<?php

namespace App\Http\Controllers;

use App\Models\Trabalhador;
use App\Http\Requests\StoreTrabalhadorRequest;
use App\Http\Requests\UpdateTrabalhadorRequest;

class TrabalhadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //$dados = response()->json(Trabalhador::all());
         //$dados=json_encode(Trabalhador::paginate(5));
         return view('/trabalhadores.index');
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
     * @param  \App\Http\Requests\StoreTrabalhadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrabalhadorRequest $request)
    {
        //
        $adicionar = Trabalhador::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabalhador  $trabalhador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabalhador $trabalhador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabalhador  $trabalhador
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabalhador $trabalhador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrabalhadorRequest  $request
     * @param  \App\Models\Trabalhador  $trabalhador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrabalhadorRequest $request, Trabalhador $trabalhador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabalhador  $trabalhador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabalhador $trabalhador)
    {
        //
    }
}

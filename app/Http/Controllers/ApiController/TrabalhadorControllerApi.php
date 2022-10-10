<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Trabalhador;
use App\Http\Requests\StoreTrabalhadorRequest;
use App\Http\Requests\UpdateTrabalhadorRequest;
use Illuminate\Http\Client\Request;

class TrabalhadorControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $dados=response()->json(Trabalhador::all());
        //$dados=json_encode(Trabalhador::paginate(5));
        //return view('/trabalhadores.index', compact('dados'));
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
        $NovoTrabalhador = new  Trabalhador;
        $NovoTrabalhador->nome = $request->nome;
        $NovoTrabalhador->nacionalidade = $request->nacionalidade;
        $NovoTrabalhador->num_passporte = $request->num_passporte;
        $NovoTrabalhador->num_registo = $request->num_registo;
        $NovoTrabalhador->data_emissao = $request->data_emissao;
        $NovoTrabalhador->data_caducidade = $request->data_caducidade;
        $NovoTrabalhador->residente = $request->residente;
        $NovoTrabalhador->save();
        
        return response()->json('success');
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

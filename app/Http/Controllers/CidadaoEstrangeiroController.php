<?php

namespace App\Http\Controllers;

use App\Models\CidadaoEstrangeiro;
use App\Http\Requests\StoreCidadaoEstrangeiroRequest;
use App\Http\Requests\UpdateCidadaoEstrangeiroRequest;

class CidadaoEstrangeiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/estrangeiros.index');
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
     * @param  \App\Http\Requests\StoreCidadaoEstrangeiroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCidadaoEstrangeiroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CidadaoEstrangeiro  $cidadaoEstrangeiro
     * @return \Illuminate\Http\Response
     */
    public function show(CidadaoEstrangeiro $cidadaoEstrangeiro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CidadaoEstrangeiro  $cidadaoEstrangeiro
     * @return \Illuminate\Http\Response
     */
    public function edit(CidadaoEstrangeiro $cidadaoEstrangeiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCidadaoEstrangeiroRequest  $request
     * @param  \App\Models\CidadaoEstrangeiro  $cidadaoEstrangeiro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCidadaoEstrangeiroRequest $request, CidadaoEstrangeiro $cidadaoEstrangeiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CidadaoEstrangeiro  $cidadaoEstrangeiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(CidadaoEstrangeiro $cidadaoEstrangeiro)
    {
        //
    }
}

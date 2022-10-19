<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Http\Requests\apiTrabalhadorRequest;
use App\Models\Trabalhador;
use Illuminate\Http\Request;

class ApiTrabalhadorController extends Controller
{
    //
    public function index()
    {
        //
        return $dados=response()->json(Trabalhador::orderBy('nome', 'asc')->get());
        //$dados=json_encode(Trabalhador::paginate(5));
        //return view('/trabalhadores.index', compact('dados'));
    }

    public function adicionarTrabalhador(apiTrabalhadorRequest $request){

        /*$NovoTrabalhador = new  Trabalhador;
        $NovoTrabalhador->nome = $request->nome;
        $NovoTrabalhador->nacionalidade = $request->nacionalidade;
        $NovoTrabalhador->num_passporte = $request->num_passporte;
        $NovoTrabalhador->num_registo = $request->num_registo;
        $NovoTrabalhador->data_emissao = $request->data_emissao;
        $NovoTrabalhador->data_caducidade = $request->data_caducidade;
        $NovoTrabalhador->residente = $request->residente;
        $NovoTrabalhador->save();*/
        Trabalhador::create($request->all());
        return response()->json('success');

    }

    public function formEditTrabalhador($id){
        return response()->json(Trabalhador::find($id));
    }

    public function updateEditTrabalhador(Request $request, $id){
        
        $trabalhadorUpdate = Trabalhador::find($id);
        $trabalhadorUpdate->update($request->all());
        $trabalhadorUpdate->save();
        return response()->json('success');
    }

    public function detalhesTrabalhador($id){
        return response()->json(Trabalhador::find($id));
    }

    public function apagarTrabalhador($id){
        $sms = Trabalhador::find($id)->delete();
        // return response()->json($sms);
        if($sms==true){
            return response()->json($sms);
        }else{
            return response()->json($sms);
        }
        
    }

}

<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Http\Requests\apiEstrangeiroRequest;
use App\Models\CidadaoEstrangeiro;
use Illuminate\Http\Request;

class ApiEstrangeirosController extends Controller
{
     //
     public function index()
     {
         //
         return $dados=response()->json(CidadaoEstrangeiro::orderBy('nome', 'asc')->get());
         //$dados=json_encode(Trabalhador::paginate(5));
         //return view('/trabalhadores.index', compact('dados'));
     }
 
     public function adicionarEstrangeiro(apiEstrangeiroRequest $request){
 
         /*$NovoTrabalhador = new  Trabalhador;
         $NovoTrabalhador->nome = $request->nome;
         $NovoTrabalhador->nacionalidade = $request->nacionalidade;
         $NovoTrabalhador->num_passporte = $request->num_passporte;
         $NovoTrabalhador->num_registo = $request->num_registo;
         $NovoTrabalhador->data_emissao = $request->data_emissao;
         $NovoTrabalhador->data_caducidade = $request->data_caducidade;
         $NovoTrabalhador->residente = $request->residente;
         $NovoTrabalhador->save();*/
         CidadaoEstrangeiro::create($request->all());
         
         return response()->json('success');
 
     }
 
     public function formEditEstrangeiro($id){
         return response()->json(CidadaoEstrangeiro::find($id));
     }
 
     public function updateEditEstrangeiros(Request $request, $id){    
        $CidadaoEstrangeiroUpdate = CidadaoEstrangeiro::find($id);
        $CidadaoEstrangeiroUpdate->update($request->all());
        $CidadaoEstrangeiroUpdate->save();
        return response()->json('success');
     }
 
     public function detalhesEstrangeiro($id){
         return response()->json(CidadaoEstrangeiro::find($id));
     }
 
     public function apagarEstrangeiro($id){
         $sms = CidadaoEstrangeiro::find($id)->delete();
         // return response()->json($sms);
         if($sms==true){
             return response()->json($sms);
         }else{
             return response()->json($sms);
         }
         
     }
}

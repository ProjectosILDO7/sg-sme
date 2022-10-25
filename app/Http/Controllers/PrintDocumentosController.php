<?php

namespace App\Http\Controllers;
use App\Models\CidadaoEstrangeiro;
use App\Models\Trabalhador;
//use Illuminate\Http\Request;
use PDF;

class PrintDocumentosController extends Controller
{
    //
    public function index(){

        return view('print/print');
    }

    public function pdfResidente(){
        $trabalhador = Trabalhador::where('residente', 'residente')->get();
        $pdf = PDF::LoadView('exportar/listaTrabalhadores', compact('trabalhador'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_trabalhadores_residente.pdf');

    }

    public function pdfNaoResidente(){
        $trabalhador = Trabalhador::where('residente', 'Não residente')->get();
        $pdf = PDF::LoadView('exportar/listaTrabalhadoresNaoResidente', compact('trabalhador'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_trabalhadores_residente.pdf');

    }
    
    public function pdfVistoPrevilegiado(){
        $dados = CidadaoEstrangeiro::where('visto', 'Previlegiado')->get();
        $pdf = PDF::LoadView('exportar/listaVistoPrevilegiado', compact('dados'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_visto_previlegiado.pdf');

    }

    public function pdfVistoNaoPrevilegiado(){
        $dados = CidadaoEstrangeiro::where('visto', 'Temporário')->get();
        $pdf = PDF::LoadView('exportar/listaVistoNaoPrevilegiado', compact('dados'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_visto_previlegiado.pdf');

    }

}

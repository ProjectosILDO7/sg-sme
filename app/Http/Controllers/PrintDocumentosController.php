<?php

namespace App\Http\Controllers;

use App\Exports\TrabalhadoresNaoResidenteExport;
use App\Exports\TrabalhadoresResidenteExport;
use App\Exports\VistoNaoPrevilegiadoExport;
use App\Exports\VistoPrevilegiadoExport;
use App\Models\CidadaoEstrangeiro;
use App\Models\Trabalhador;
use Maatwebsite\Excel\Facades\Excel;
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
        $pdf = PDF::LoadView('exportar/pdf/listaTrabalhadores', compact('trabalhador'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_trabalhadores_residente.pdf');

    }

    public function pdfNaoResidente(){
        $trabalhador = Trabalhador::where('residente', 'Não residente')->get();
        $pdf = PDF::LoadView('exportar/pdf/listaTrabalhadoresNaoResidente', compact('trabalhador'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_trabalhadores_residente.pdf');

    }
    
    public function pdfVistoPrevilegiado(){
        $dados = CidadaoEstrangeiro::where('visto', 'Previlegiado')->get();
        $pdf = PDF::LoadView('exportar/pdf/listaVistoPrevilegiado', compact('dados'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_visto_previlegiado.pdf');

    }

    public function pdfVistoNaoPrevilegiado(){
        $dados = CidadaoEstrangeiro::where('visto', 'Temporário')->get();
        $pdf = PDF::LoadView('exportar/pdf/listaVistoNaoPrevilegiado', compact('dados'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lista_de_visto_previlegiado.pdf');

    }

    public function excelExportTrabalhadorResidente(){
       return Excel::download(new TrabalhadoresResidenteExport, 'lista_trabalhador_residente.xlsx');
    }
    public function excelExportTrabalhadorNaoResidente(){
       return Excel::download(new TrabalhadoresNaoResidenteExport, 'lista_trabalhador_não_residente.xlsx');
    }
    public function excelExportVistoPrevilegiado(){
       return Excel::download(new VistoPrevilegiadoExport, 'lista_cidadao_visto_previlegiado.xlsx');
    }
    public function excelExportNaoPrevilegiado(){
       return Excel::download(new VistoNaoPrevilegiadoExport, 'lista_cidadao_visto_nao_previlegiado.xlsx');
    }

}

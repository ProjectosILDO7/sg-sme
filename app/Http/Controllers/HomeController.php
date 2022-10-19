<?php

namespace App\Http\Controllers;
use App\Models\Trabalhador;
use App\Models\CidadaoEstrangeiro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalTrabalhador=count(Trabalhador::all());
        $totalEstrangeiro=count(CidadaoEstrangeiro::all());
        $totalTrabalhadorResidente=count(Trabalhador::where('residente', 'Residente')->get());
        $totalTrabalhadorNãoResidente=count(Trabalhador::where('residente', 'Nao residente')->get());
        $totalEstrangeiroVistoPrevilegiado=count(CidadaoEstrangeiro::where('visto', 'Previlegiado')->get());
        $totalEstrangeiroVistoTemporario=count(CidadaoEstrangeiro::where('visto', 'Temporário')->get());

        // dados do gráfico do registo dos trabalhadores
        $chartTrabalhador = Trabalhador::select(DB::raw('COUNT(*) as contar'))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('contar');
        $meses = Trabalhador::select(DB::raw("Month(created_at) as meses"))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('meses');
    
        $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($meses as $index=> $meses){
            $data[$meses-1] = $chartTrabalhador[$index];
        }
        $graficoTrabalhador=json_encode($data);
       
        // dados do grafico dos estrangeiros
        $estrangeiro = CidadaoEstrangeiro::select(DB::raw('COUNT(*) as contar'))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('contar');
        $meses = CidadaoEstrangeiro::select(DB::raw("Month(created_at) as meses"))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('meses');
    
        $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($meses as $index=> $meses){
            $data[$meses-1] =$estrangeiro[$index];
        }

        $graficoEstrangeiros=json_encode($data);
        
        return view('home', compact(
            'totalTrabalhador',
            'totalEstrangeiro',
            'totalTrabalhadorResidente',
            'totalTrabalhadorNãoResidente',
            'totalEstrangeiroVistoPrevilegiado',
            'totalEstrangeiroVistoTemporario',
            'graficoTrabalhador',
            'graficoEstrangeiros',
        ));
    }

 
}

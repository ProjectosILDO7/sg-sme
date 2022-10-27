<?php

namespace App\Exports;

use App\Models\Trabalhador;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TrabalhadoresResidenteExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportar.excel.listaTrabalhadoresExcel', [
            'trabalhador' => Trabalhador::where('residente', 'residente')->orderBy('nome', 'asc')->get(),
        ]);
    }
}

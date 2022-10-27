<?php

namespace App\Exports;

use App\Models\CidadaoEstrangeiro;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class VistoPrevilegiadoExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportar.excel.listaVistoPrevilegiadoExcel', [
            'dados'=>CidadaoEstrangeiro::where('visto', 'Previlegiado')->orderBy('nome', 'asc')->get()
        ]);
    }
}

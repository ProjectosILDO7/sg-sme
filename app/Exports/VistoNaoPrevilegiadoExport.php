<?php

namespace App\Exports;

use App\Models\CidadaoEstrangeiro;
//use Facade\FlareClient\View;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class VistoNaoPrevilegiadoExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportar.excel.listaVistoNaoPrevilegiadoExcel', [
            'dados' => CidadaoEstrangeiro::where('visto', 'Temporário')->orderBy('nome', 'asc')->get(),
        ]);
    }
}

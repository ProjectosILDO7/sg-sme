<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintDocumentosController extends Controller
{
    //
    public function index(){
        return view('print/print');
    }
}

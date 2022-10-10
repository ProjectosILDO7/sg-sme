<?php

namespace App\Http\Controllers;


class PaginasIniciaisController extends Controller
{
    //
    public function paginaSobre(){
        return view('sobre');
    }

    public function paginaContacto(){
        return view('contacto');
    }
}

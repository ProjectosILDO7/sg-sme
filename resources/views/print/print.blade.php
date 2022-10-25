@extends('layouts.app')

@section('content')
    <pagina tamanho="8" titulo="Print">
        <doc-print 
            linkTrabalhadores="/printDocTrabResidente"
        ></doc-print>
    </pagina>
@endsection
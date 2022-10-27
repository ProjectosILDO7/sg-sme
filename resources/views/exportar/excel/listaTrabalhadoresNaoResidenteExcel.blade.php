<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Trabalhadores</title>
    {{-- {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    {{-- <div class="row">
        <div class="form-group col-12 mb-0">
            <img src="{{ asset('img/sme.jpg') }}" height="50" width="60" style="">
        </div>
    </div>
    <table class="table table-sm table-unborder">
        <tr>
            <td><span class="text-secondary small"><b>Serviço de Migração Estrangeira - SME</b></span></td>
            <td align="right"><span class="text-secondary small">Sistema de Gestão: <b>Cidadão não residentes</b></span></td>
        </tr>
    </table> --}}
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Cod.</th>
                <th>Nome</th>
                <th>Nacionalidade</th>
                <th>Nº de passaporte</th>
                <th>Nº de registo</th>
                <th>Data de emissão</th>
                <th>Status de residencia</th>
            </tr>
        </thead>

        <tbody>
            @foreach($trabalhador as $valor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $valor->nome }}</td>
                    <td>{{ $valor->nacionalidade }}</td>
                    <td>{{ $valor->num_passporte }}</td>
                    <td>{{ $valor->num_registo }}</td>
                    <td>{{ $valor->data_emissao }}</td>
                    <td>{{ $valor->residente }}</td>
                </tr>
            @endforeach
        </tbody>
        
        
    </table>
</body>
</html>
@extends('layouts.app')

@section('content')
    <div class="container">
    <pagina tamanho="6">

        @if($success ?? "")
            <div class="row mb-2">
                <div class="form-group col-md-12 text-md-center">
                    <span class="text-success">{{ $success ?? "" }}</span>
                </div>
            </div> 
        @endif
                
        <div class="card">
            
            <div class="card-header bg-success">
                <div class="row">
                    <div class="form-group col-sm-6 text-md-left text-md-left">
                        <i class="fa fa-user text-light"></i> <span class="text-light">Configurações de Utilizador</span>
                    </div>
                    <div class="form-group col-sm-6 text-md-end text-sm-end">
                        <i class="fa fa-lock text-light"></i>
                    </div>
                </div>
            </div>
            
            <div class="card-body">
                
                <div class="row">
                    <form method="post" accept-charset="UTF-8" action="{{ route('EditUserConfig', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group col-12">
                            <label for="name" class="font-secondary">Utilizador:</label>
                            <input type="text" name="name" class="form-control form-control-sm" value="{{ $user->name }}" class="@error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger small">{{  $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="email" class="font-secondary">E-mail:</label>
                            <input type="text" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ $user->email }}">
                            @error('email')
                                <span class="text-danger small">{{  $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="password" class="font-secondary">Alterar senha:</label>
                            <input type="password" name="password" class="form-control form-control-sm @error('password') is-invalid @enderror" value="">
                            @error('password')
                                <span class="text-danger small">{{  $message }}</span>
                            @enderror
                        </div>
<hr>
                        <div class="form-group col-12 text-md-center">
                            <button type="submit" class="btn btn-sm btn-block btn-success">
                                Alterar configurações de Utilizador
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </pagina>
        
    
    </div>
@endsection
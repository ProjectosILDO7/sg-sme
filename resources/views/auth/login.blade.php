@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center mt-4">
        <login tamanho="col-md-4" titulo="Login">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    
                    <div class="col-md-12">
                        <label for="email" class="col-form-label text-md-end">{{ __('Utilizador') }}</label>
                        <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    
                    <div class="col-md-12">
                        <label for="password" class="col-form-label text-md-end">{{ __('Senha') }}</label>
                        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 mt-2">
                    <div class="form-group col-md-5 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar-me') }}
                            </label>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="form-group col-md-7 d-flex justify-content-end">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Recuperar a senha') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div class="row mb-2">
                    <div class="col-md-12 text-md-end">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-sign-in"></i> {{ __('Entrar') }}
                        </button> 
                    </div>
                </div>
            </form>
        </login>
    </div>
</div>
@endsection

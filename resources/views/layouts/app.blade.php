<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SG - SME') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/> --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}"/>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .alingEsquerda{
            margin-right:4px; 
        }
        body {
            background-image: url('../img/background-login.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .textoResponsivo{
            font-size: clamp(0.75em, 1em + 3vw, 1em);
        }
        .corFundo{
            background: black;
        }
        
    </style>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.1/Chart.bundle.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
    
</head>
<body style="background-image: url('../img/background-login.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div id="app" class="textoResponsivo">
        
        <menu-topo 
            titulo="{{ asset('img/sme.png') }}" 
            toggle-Navegatio="{{ __('Toggle navigation') }}"
            url="{{ url('/') }}" 
            backgroundColor="bg-dark" 
            urlSobre="{{ url('/sobre') }}" 
            urlContacto="{{ url('/contacto') }}" 
            pgtrabalhadores="{{ url('/trabalhadores') }}"
            @auth()
              usuarioAdmin="{{ auth()->user()->admin }}" 
            @endauth
                
        >
            

            @guest

                {{-- @if (Route::has('login'))
                    <li class="nav-item alingEsquerda">
                         <a class="nav-link mt-0 btn btn-sm btn-light text-dark" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Entrar') }}</a>
                     </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-light text-dark" href="{{ route('register') }}"><i class="fas fa-user"></i> {{ __('Registrar-se') }}</a>
                    </li>
                @endif --}}

            @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light font-weight-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user-circle text-success"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('userConfig', auth()->user()->id) }}">
                            {{ __('Definição') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                
            @endguest

        </menu-topo>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        

        <main class="py-4">
            <br>
            @yield('content')
        </main>

        
        
    </div>


    <script>
        $(function(){
            const ctxLine = document.getElementById("lineGrafico").getContext('2d');
            const myChartLine = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ["sunday", "monday", "tuesday",
                "wednesday", "thursday", "friday", "saturday"],
                datasets: [{
                label: 'Last week',
                backgroundColor: 'rgba(161, 198, 247, 1)',
                borderColor: 'rgb(47, 128, 237)',
                data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
                }]
            },
            options: {
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true,
                    }
                }]
                }
            },
            });
        })
        
  </script>
  
  <script>
    $(function(){
        const ctx = document.getElementById("barraGrafico").getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ["rice", "yam", "tomato", "potato",
            "beans", "maize", "oil"],
            datasets: [{
                label: 'food Items',
                backgroundColor: 'rgba(161, 198, 247, 1)',
                borderColor: 'rgb(47, 128, 237)',
                data: [300, 400, 200, 500, 800, 900, 200],
            }]
            },
            options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                }
                }]
            }
            },
        });
    })
      
  </script>

</body>
<footer class="bg-white mb-0 mt-4 small">
    <div class="">
        <div class="form-group col-12 text-center">
            <p class="small text-secondary py-4">
                Todos os direitos reservados: S.G - S.M.E&copy;{{ @date('Y') }}
            </p>
        </div>
    </div>
</footer>
</html>

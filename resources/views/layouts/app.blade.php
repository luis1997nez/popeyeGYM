<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/bootstrap.css"rel="stylesheet" type="text/css">


    <title>{{ config('app.name', "GYM POPEYE") }}</title>

    <!-- Styles -->
    
    <link href="css/bootstrap.css"rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
    <img src="images/gym.png" width="40" height="40" class="d-inline-block align-top" alt="">

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('HBJKB', 'GYM POPEYE') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                
                     

                        @can('products.index') <!-- se agrega el metodo para el permiso del usuario -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">Cursos</a>
                            </li>
                        @endcan
                        @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Clientes</a>
                            </li>
                        @endcan
                        @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Inciar Sesión') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>
                            <li><a class="nav-link" href="{{ route('catalogo') }}">{{__('Clases')}}</a></li>
                            <li><a class="nav-link" href="{{ route('quienesomos') }}">Quienes Somos</a></li>
                            

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    <a class="dropdown-item" href="{{ url('/home') }}">
                                        {{ __('Realizar cita') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/catalogo') }}">
                                        {{ __('Catalogo') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/quienessomos') }}">
                                        {{ __('Quienes Somos') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- si tenemos datos en la variable info entonces se muestra -->
            @if(session('info'))

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">{{ session('info') }}</div>
                    </div>
                </div>
            </div>

            @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
<style>
           

           .full-height {
               height: 100vh;
           }

           .flex-center {
               align-items: center;
               display: flex;
               justify-content: center;
           }

           .position-ref {
               position: relative;
           }

           .top-right {
               position: absolute;
               right: 10px;
               top: 18px;
           }

           .content {
               text-align: center;
               
           }

           .title {
               font-size: 84px;
           }

           .links > a {
               color: #636b6f;
               padding: 0 25px;
               font-size: 12px;
               font-weight: 600;
               letter-spacing: .1rem;
               text-decoration: none;
               text-transform: uppercase;
           }

           .m-b-md {
               margin-bottom: 30px;
           }
           .contenido{
            background-image: url('images/gym/4.jpg');
            color:white;
            }
            .cardlalo{
            margin-left: 30px;
            margin-right: 40px;
            margin-bottom: 20px;
            }
            .card button{
            margin-left: 20%;
            
            }
              
   

 }
       </style>
</body>
</html>

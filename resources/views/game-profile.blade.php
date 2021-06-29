@extends('layouts/basicHead')

@section('tittle')
   <title>GameStrike</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/game-profile.css') }}">
@endsection

@section('content')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/') }}">Game Strike</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Categorias</a></li>
                        @if (Route::has('login'))   
                            @auth
                                <li class="nav-item">
                                    <form method="POST" name="logout" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="nav-link" href="javascript:document.logout.submit()">Log Out</a></li>
                                    </form>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="http://gamestrike.test/user/profile">Perfil</a></li> 
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign In</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead"style="position: relative;display: inline-block;overflow: hidden;width: 100%;">
            <img id="backImage" src="{{ asset($juego->image_route) }}"/>
            <!--     La imagen de fondo esta en el css  game-profile.css en la linea 10932 -->
                <div class="container px-4 px-lg-5 h-100">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-lg-8 align-self-end">
                            <h1 class="text-white font-weight-bold">{{$juego->name}}</h1>
                            <hr class="divider" />
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                            <p class="text-white-75 mb-5">Desarrolladora:<br>{{$juego->desarrolladora}}</p>
                            <p class="text-white-75 mb-5">Generos:<br>
                                @foreach($juego->generos as $genero)
                                    {{ $genero->name }} 
                                @endforeach
                            </p>
                            <p class="text-white-75 mb-5">Promedio:<br>{{$juego->resegnas->avg('calificacion')}}/10</p>
                            <p class="text-white-75 mb-5">Sinopisis:<br>{{$juego->sinopsis}}</p>
                            <!-- Boton de editar y eliminar para administrador -->
                            @auth
                                <form method="POST" action="{{ route('juego.delete', $juego) }}"> @csrf
                                    <button class="btn btn-secondary float">Eliminar</button>
                                </form>
                                <form method="GET" action="{{ route('juego.edit', $juego) }}"> @csrf
                                    <input type="hidden" name="id" value="{{ $juego->id }}">
                                    <button class="btn btn-secondary float">Editar</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
        </header>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Reseñas de los usuarios:</h2>
                        <hr class="divider" />
                        <hr>
                        <!-- Aqui iria el loop ------------------------------------------------------------------------------------ -->
                        @foreach($juego->resegnas as $resegna)

                            @if ($resegna->isDeleted === 0)
                                @auth
                                    <form method="POST" action="{{ route('resegna.delete') }}"> @csrf
                                        <input type="hidden" name="id" value="{{ $resegna->id }}">
                                        <button class="btn btn-secondary float-start">Eliminar</button>
                                    </form>
                                @endauth
                                <br><br>
                                <p class="text-muted mb-5">{{$resegna->user->name}}</p>
                                <p class="text-muted mb-5">{{$resegna->calificacion}}/10</p>
                                <p class="text-muted mb-5">{{$resegna->contenido}}</p>
                                <hr>
                            @endif

                        @endforeach
                        <!-- Aqui terminaria el loop ------------------------------------------------------------------------------ -->
                        @auth
                                <a class="btn btn-primary btn-xl" href="{{ route('formulario-reseña', $juego) }}">¡Crea tu propia reseña!</a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
        </footer>
    </body>

@endsection
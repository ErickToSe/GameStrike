@extends('layouts/basicHead')

@section('tittle')
   <title> <img>GameStrike</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/games.css') }}">
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
                        <li class="nav-item"><a class="nav-link" href="#categorias">Categorias</a></li>
                        @if (Route::has('login'))   
                            @auth
                                <form method="POST" name="logout" action="{{ route('logout') }}">
                                    @csrf
                                    <li class="nav-item"><a class="nav-link" href="javascript:document.logout.submit()">Log Out</a></li>
                                </form>
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
       <!-- Contact-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Todos los juegos:</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($juegos as $juego)
                        @if ($juego->isDeleted === 0)
                            <div class="col-lg-4 col-sm-6">
                                <form action="{{ route('game-profile', $juego) }}" method="GET">
                                    <button class="portfolio-box img-button img-size" type="submit">
                                        <img class="img-fluid img-size" src={{asset($juego->image_route)}} alt="Game_Image" />
                                        <div class="portfolio-box-caption">
                                            <div class="project-name">{{ $juego->name }}</div>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
       
        <section class="Todos-los-juegos" id="boton">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                    <br>
                        <form method="GET" action="{{ url('/')}}"> @csrf
                             <button class="btn btn-primary btn-xl" >Agregar juego</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - GameSrike</div></div>
        </footer>
    </body>

@endsection
@extends('layouts/basicHead')

@section('tittle')
   <title>Formulario</title>
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
                        @if (Route::has('login'))   
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/Perfil') }}">Log Out</a></li>
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
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">¡Empieza a hablar amigo!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Dejate llevar por los sentimiento encontrados sobre <b>{{ $juego->name }}!</b></p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="{{ route('resegna.store') }}" method="POST">
                            @csrf
                            <!-- Calificacion -->
                            <div class="form-floating mb-3">
                                <label for="calificacion">Califica el juego.</label>
                                <input type="range" min="0" max="10" step="1" list="calificacion" name="calificacion" id="calificacion">
                            </div>
                            <!-- Reseña -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="contenido" id="contenido" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="contenido">Reseña</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">La reseña es necesaria!</div>
                            </div>
                            <input type="hidden" name="juego_id" value="{{ $juego->id }}">
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl Enable" id="submitButton" type="submit">Subir reseña!</button></div>
                        </form>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Game Strike</div></div>
        </footer>
    </body>
@endsection
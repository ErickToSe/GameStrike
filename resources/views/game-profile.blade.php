@extends('layouts/basicHead')

@section('tittle')
   <title> <img>GameStrike</title>
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Game Strike</title>

        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/game-profile.css">
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Game Strike</a>
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
        <!-- Masthead-->
        <header class="masthead">
            <!--     La imagen de fondo esta en el css-->

            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">NOMBRE DEL JUEGO</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Aqui va nombre de la desarrolladora</p>
                        <p class="text-white-75 mb-5">Aqui va el genero</p>
                        <p class="text-white-75 mb-5">Aqui va el promedio de la calificacion</p>
                        <p class="text-white-75 mb-5">Sinopsis</p>
                        
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
                        <p class="text-muted mb-5">Esteban Quito</p>
                        <p class="text-muted mb-5">8/10</p>
                        <p class="text-muted mb-5">La verdad es que el juego me gusto mucho, ya que la musica, los sondios y la jugabilidad iban muy a la par. por lo que la experiencia fue muy buena.</p>
                        <hr>
                        <p class="text-muted mb-5">Rosa Melano</p>
                        <p class="text-muted mb-5">5/10</p>
                        <p class="text-muted mb-5">El juego no me gusto, esta supravalorado y es muy mindstream.</p>
                        <hr>
                        <p class="text-muted mb-5">Casimiro Miraflores</p>
                        <p class="text-muted mb-5">10/10</p>
                        <p class="text-muted mb-5">El juego es increible! Mirar para creer, yo critique mucho este juego pero cuando lo probe me cerro la boca.</p>
                        <hr>
                        <!-- Aqui terminaria el loop ------------------------------------------------------------------------------ -->

                        <button class="btn btn-primary btn-xl" href="">¡Crea tu propia reseña!</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

@endsection
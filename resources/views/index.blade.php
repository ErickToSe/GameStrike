@extends('layouts/basicHead')

@section('tittle')
   <title> <img>GameStrike</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- SimpleLightbox plugin JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
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
                        <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">¡Tu lugar favorito para dar tu opionion sobre videojuegos!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Cuando nadie te lo pidio</p>
                        <a class="btn btn-primary btn-xl" href="{{ route('register') }}">Crea una cuenta Gratis ¡YA!</a>
                    </div>
                </div>
            </div>
        </header>
       <!-- Contact-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Categorias:</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($allGeneros as $gen)
                        <div class="col-lg-4 col-sm-6">
                            <form action="{{ route('games', $gen) }}" method="GET">
                                <button class="portfolio-box img-button" type="submit">
                                    <img class="img-fluid" src="{{ $gen->image_path }}" alt="Game image" />
                                    <div class="portfolio-box-caption">
                                        <div class="project-category text-white-50">Categoria</div>
                                        <div class="project-name">{{ $gen->name }}</div>
                                    </div>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
       
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - GameStrike</div></div>
        </footer>
        
    </body>

@endsection
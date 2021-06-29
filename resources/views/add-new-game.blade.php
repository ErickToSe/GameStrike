@extends('layouts/basicHead')

@section('tittle')
   <title>Agregar nuevo juego</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-new-game.css') }}">
@endsection

@section('content')
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
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
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Vamos a agregar un nuevo juego</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">¡Llena el formulario para poder empezar a criticar!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- <form method="GET" action="{{ url('/formulario') }}"> -->
                        <form method="POST" action="{{ route('juego.store') }}" id="contactForm" enctype="multipart/form-data" > @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Ingresa el nombre del juego" data-sb-validations="required" />
                                <label for="name">Nombre del juego</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido</div>
                            </div>
                            <!-- Developer  input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="desarrolladora" name="desarrolladora" type="text" placeholder="Ingresa la desarrolladora aqui" data-sb-validations="required" />
                                <label for="desarrolladora">Desarrolladora</label>
                                <div class="invalid-feedback" data-sb-feedback="desarrolladora:required">La desarrolladora es nesesaria.</div>
                            </div>
                            <!-- Generos number input-->
                            <div class="form-floating mb-3">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Generos</div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Accion" name="Accion">
                                    <label class="form-check-label" for="Accion">
                                        Accion
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Aventura" name="Aventura">
                                    <label class="form-check-label" for="Aventura">
                                        Aventura
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Rol" name="Rol">
                                    <label class="form-check-label" for="Rol">
                                         Rol
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Simulación" name="Simulacion">
                                    <label class="form-check-label" for="Simulación">
                                        Simulación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Terror" name="Terror">
                                    <label class="form-check-label" for="Terror">
                                        Terror
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Plataformas" name="Plataformas">
                                    <label class="form-check-label" for="Plataformas">
                                        Plataformas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Disparos" name="Disparos">
                                    <label class="form-check-label" for="Disparos">
                                        Disparos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Peleas" name="Peleas">
                                    <label class="form-check-label" for="Peleas">
                                        Peleas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Musical" name="Musical">
                                    <label class="form-check-label" for="Musical">
                                        Musical
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Estrategia" name="Estrategia">
                                    <label class="form-check-label" for="Estrategia">
                                        Estrategia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Deportes" name="Deportes">
                                    <label class="form-check-label" for="Deportes">
                                        Deportes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Carreras" name="Carreras" >
                                    <label class="form-check-label" for="Carreras">
                                        Carreras
                                    </label>
                                </div>
                            </div>
                            <!-- Image input-->
                            <div class="form-floating mb-3">
                                <input type="file" name="image_route" id="image_route">
                            </div>
                            <!-- Overview input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="sinopsis" name="sinopsis" type="text" placeholder="Ingresa la sinopsis" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="sinopsis">Sinopsis</label>
                                <div class="invalid-feedback" data-sb-feedback="sinopsis:required">La sinopsis es OBLIGATORIA</div>
                            </div>
                           
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">¡En hora buena!¡ Has creado un juego para escribir reseñas que nadie pidio!</div>
                                </div>
                            </div>
                            
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">No se a podido subri la reseña!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Agregar juego</button></div>
                        </form>
                        <!-- </form> -->
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
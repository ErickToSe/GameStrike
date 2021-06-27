@extends('layouts/basicHead')

@section('tittle')
   <title> <img>Agregar nuevo juego</title>
@endsection

@section('OwnCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('css/add-new-game.css') }}">
@endsection

@section('content')
    <body>
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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Ingresa el nombre del juego" data-sb-validations="required" />
                                <label for="name">Nombre del juego</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido</div>
                            </div>
                            <!-- Developer  input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="developer" type="text" placeholder="Ingresa la desarrolladora aqui" data-sb-validations="required" />
                                <label for="developer">Desarrolladora</label>
                                <div class="invalid-feedback" data-sb-feedback="developer:required">La desarrolladora es nesesaria.</div>
                            </div>
                            <!-- Generos number input-->
                            <div class="form-floating mb-3">
                                
                            </div>
                            <!-- Image input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="image" type="text" placeholder="Ingresa la url de la imagen" data-sb-validations="required" />
                                <label for="image">URL de la imagen</label>
                                <div class="invalid-feedback" data-sb-feedback="image:required">La imagen es requerida</div>
                            </div>
                            <!-- Overview input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="overview" type="text" placeholder="Ingresa la reseña" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="overview">Reseña</label>
                                <div class="invalid-feedback" data-sb-feedback="overview:required">La reseña es OBLIGATORIA</div>
                            </div>
                           
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">¡En hora buena!¡ Has creado un juego para escribir reseñas que nadie pidio!</div>
                                </div>
                            </div>
                            
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">No se a podido subri la reseña!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Agregar juego</button></div>
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
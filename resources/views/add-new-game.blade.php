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
                        <form method="GET" action="{{ url('/formulario') }}">
                            <!-- Nombre del juego-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="name" type="text" placeholder="Escribe el nombre aqui..." style="height: 5rem" data-sb-validations="required"></textarea>
                                <label for="message">Nombre del juego</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El nombre es necesario</div>
                            </div>
                            <!-- Desarrolladora-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="developer" type="text" placeholder="Desarrolladora" style="height: 5rem" data-sb-validations="required"></textarea>
                                <label for="message">Desarrolladora</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">La desarrolladora es necesaria!</div>
                            </div>
                            <!-- Genero-->

                            <!-- Imagen-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="image" type="text" placeholder="Imagen" style="height: 5rem" data-sb-validations="required"></textarea>
                                <label for="message">Url de la imagen de portada</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">La imagen es necesaria!</div>
                            </div>
                            <!-- Sinopsis-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Reseña</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">La reseña es necesaria!</div>
                            </div>
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
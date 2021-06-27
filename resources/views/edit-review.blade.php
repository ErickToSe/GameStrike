@extends('layouts/basicHead')

@section('tittle')
   <title> <img>Editar juego</title>
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
                        <h2 class="mt-0">Editemos la reseña</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">¿¿Has cambiado de parecer?? vaya... Bueno empezemos entonces</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="editForm" data-sb-form-api-token="API_TOKEN">
                            
                            <div class="form-floating mb-3">
                                <p >Califica el juego</p><input type="range" min="0" max="10" list="calificacion">
                            </div>
                            <!-- Overview input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="overview" type="text" placeholder="Ingresa la reseña" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="overview">Reseña</label>
                                <div class="invalid-feedback" data-sb-feedback="overview:required">La reseña es OBLIGATORIA</div>
                            </div>
                           
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">¡En hora buena!¡Arreglase el desastre de otro usuario!</div>
                                </div>
                            </div>
                            
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">No se a podido modificar el juego</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Modificala!</button></div>
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
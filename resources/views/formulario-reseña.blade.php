@extends('layouts/basicHead')

@section('tittle')
   <title> <img>Formulario</title>
@endsection

@section('content')
    <body>
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">¡Empieza a hablar amigo!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Dejate llevar por los sentimiento encontrados sobre el juego!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form method="GET" action="{{ url('/formulario') }}">
                            <!-- Calificacion -->
                            <div class="form-floating mb-3">
                                <p >Califica el juego</p><input type="range" min="1" max="10" list="calificacion">
                            </div>
                            <!-- Reseña -->
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

        <detalist id="calificacion">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
            <option value="6">
            <option value="7">
            <option value="8">
            <option value="9">
            <option value="10">
         </detalist>

    
    </body>
@endsection
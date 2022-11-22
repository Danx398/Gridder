@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Postdata Te Amo</h1>
                <h3>Sinopsis: </h3>
                <p>Hay personas que esperan toda la vida para encontrar a su alma gemela, pero este no es el caso de Holly y Gerry. Novios desde el insti­tuto, se sentían como si siempre hubiesen estado juntos. Podían acabar las frases del otro, e incluso cuando discutían como sobre quién debía salir de la cama para apagar la luz cada noche, lo hacían riendo. Holly no sabía qué sería de ella sin Gerry. Nadie lo sabía. Y así fue como comenzó "La lista"... como una broma. En previsión de que pudiera sucederle algo malo, Gerry dejaría a Holly una lista de cosas que hacer para salir adelante día tras día.</p>
                <div class="d-flex justify-content-center mb-3 mt-2">
                    <iframe width="900" height="900" src="{{asset('files/pddTeamo.pdf')}}" frameborder="0"></iframe>
                </div>
            </div>
            
        </div>
    </div>
@endsection
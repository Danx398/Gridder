@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col text-light box bordered rounded m-3">
                <h1 class="text-center">Emma</h1>
                <h3>Sinopsis</h3>
                <p>Emma se enfrenta a un vacío en su vida y con un gran dilema: cómo ayudar a los demás a tener una vida tan perfecta como la suya. En contra del consejo de Knightley, busca posibles novios para su nueva amiga, Harriet Smith, una joven sencilla y modesta, alejada del estilo de vida de la alta sociedad.</p>
            </div>
            <div class="d-flex justify-content-center mb-3 mt-2">
                <iframe width="900" height="900" src="{{asset('files/amor/emma-jane-austen.pdf')}}" frameborder="0"></iframe>
            </div>
            
        </div>
    </div>
@endsection
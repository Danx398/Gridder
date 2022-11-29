@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col text-light box bordered rounded m-3">
                <h1 class="text-center">Manual Cuidados</h1>
                <h3>Sinopsis: </h3>
                <p></p>
            </div>
            <div class="d-flex justify-content-center mb-3 mt-2">
                <iframe width="900" height="900" src="{{asset('files/animales/enciclopedia_felina.pdf')}}" frameborder="0"></iframe>
            </div>
            
        </div>
    </div>
@endsection
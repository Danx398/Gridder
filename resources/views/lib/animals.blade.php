@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col text-light box bordered rounded m-3">
                <h1 class="text-center">Enciplopedia Felina</h1>
                <h3>Sinopsis: </h3>
                <p>Este libro, sabiendo lo difícil que es clasificarlos por su origen, se acerca a las razas distinguiéndolas por la apariencia física para que el lector encuentre con facilidad el gato que necesita y aprenda a cuidarlo.</p>
            </div>
            <div class="d-flex justify-content-center mb-3 mt-2">
                <iframe width="900" height="900" src="{{asset('files/animales/enciclopedia_felina.pdf')}}" frameborder="0"></iframe>
            </div>
            
        </div>
    </div>
@endsection
@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mt-2">
                    <img src="{{ asset('img/diario.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">El diario de Anne Frank</h5>
                        <p class="card-text">En los relatos, se cuenta la historia y vida de Ana Frank como adolescente y los dos años en que permaneció oculta junto a su familia de origen judío de los nazis en Ámsterdam, en plena Segunda Guerra Mundial, hasta que fueron descubiertos.</p>
                        <a href="{{route('anaFrank')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-2">
                    <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Daniel" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mt-2">
                    <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
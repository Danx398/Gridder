@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row mb-3 align-items-center">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs pe-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/diario.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <a href="{{route('anaFrank')}}" class="btn btn-outline-success d-flex justify-content-center mb-2 mt-5">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs px-3">
                <div class="card mt-3" >
                    <img src="{{asset('img/portadas/pddTeamo.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <a href="{{route('teamo')}}" class="btn btn-outline-success d-flex justify-content-center mb-2 mt-5">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/cienSoledad.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row mb-3"> --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/emma.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('emma')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/charlotte.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('charlotte')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/fierecilla.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('fierecilla')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row mb-3"> --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/animales_food.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('animals')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/manual_gatos.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row mb-3"> --}}
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        {{-- <div class="row mb-3"> --}}
            {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/emma.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/charlotte.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs ps-3">
                <div class="card mt-3">
                    <img src="{{ asset('img/portadas/fierecilla.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text mb-5"></p>
                        <a href="{{route('cienAnios')}}" class="btn btn-outline-success d-flex justify-content-center mb-2">Descubrelo</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col text-light">
            <h1 class="text-center">Cien años de Soledad</h1>
            <h3>Sinopsis</h3>
            <p>Entre la boda de José Arcadio Buendía con Amelia Iguarán hasta la maldición de Aureliano Babilonia transcurre todo un siglo. Cien años de soledad para una estirpe única, fantástica, capaz de fundar una ciudad tan especial como Macondo y de engendrar niños con cola de cerdo.</p>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <iframe width="900" height="900" src="{{asset('files/soledad.pdf')}}" frameborder="0"></iframe>
        </div>
    </div>
</div>
@endsection
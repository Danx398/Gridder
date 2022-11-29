@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col text-light box bordered rounded m-3">
                <h1 class="text-center">Jane Eyre</h1>
                <h3>Sinopsis</h3>
                <p>La historia es narrada por Jane Eyre quien a los diez años de edad es custodiada por su tía política, la señora Reed. El señor Reed, hermano de la madre de Jane, la toma a su cargo cuando queda huérfana, pero muriendo él mismo poco después, y a pesar de haber hecho prometer a su esposa que la criaría como a uno de sus propios hijos, Jane no ha conocido sino humillaciones y maltratos por parte de todos en la suntuosa mansión, Gateshead Hall.</p>
            </div>
            <div class="d-flex justify-content-center mb-3 mt-2">
                <iframe width="900" height="900" src="{{asset('files/amor/jane-eyre-charlotte-bronte.pdf')}}" frameborder="0"></iframe>
            </div>
            
        </div>
    </div>
@endsection
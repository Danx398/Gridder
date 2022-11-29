@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col text-light box bordered rounded m-3">
                <h1 class="Text-center mt-2">El diario de Ana Frank</h1>
                <h3>Sinopsis: </h3>
                <p>EL VIERNES 10 DE MAYO DE 1940 AL AMANECER, Hitler lanzó ochenta
                    divisiones que irrumpieron, simultáneamente, en Bélgica y
                    Holanda. Junto con las tropas, llegó la siniestra Gestapo para hacer
                    cumplir entre otras, las leyes raciales dictadas por el régimen nazi.
                    Los Frank, como otras familias judías alemanas, habían
                    emigrado a Holanda, en 1933, huyendo del antisemitismo. Se
                    instalaron en Amsterdam. A la llegada de los alemanes no pudieron
                    abandonar el país y, el lunes 6 de julio de 1942, se refugiaron en el
                    «anexo secreto», ubicado en las mismas oficinas de Otto Frank.
                    Hoy la casa es un museo.</p>
            </div>    
            <div class="d-flex justify-content-center mb-3">
                <iframe width="900" height="900" src="{{asset('files/diario.pdf')}}" frameborder="0"></iframe>
            </div>
        </div>
    </div>
@endsection
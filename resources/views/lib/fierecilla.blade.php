@include('../shared.navb')
@extends('./layouts.plantilla')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">La fierecilla domada</h1>
                <h3>Sinopsis</h3>
                <p>La obra se basa en el carácter díscolo y malhumorado de Catalina Minola, mujer que ahuyenta, no pocas veces, a golpes, a cuantos pretendientes se interesan por ella ante su padre. El asunto no tendría mayor transcendencia si no fuese porque, según la costumbre, el padre de Catalina, el rico Bautista Minola, se niega a entregar en matrimonio a su hija menor, Blanca, hasta que no haya casado a la mayor, para desconsuelo de los ambiciosos aspirantes a su mano, Hortensio, Gremio y Lucencio. La llegada a la ciudad de Petruchio, un joven ambicioso y despreocupado y su disposición a cortejar a Catalina proporcionan a los pretendientes de Blanca una esperanza para la que unen sus esfuerzos a los del ya casi desesperado Bautista.</p>
                <div class="d-flex justify-content-center mb-3 mt-2">
                    <iframe width="900" height="900" src="{{asset('files/amor/fierecilla_domada.pdf')}}" frameborder="0"></iframe>
                </div>
            </div>
            
        </div>
    </div>
@endsection
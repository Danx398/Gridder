@extends('./layouts.plantilla')

@section('contenido')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-4 shadow rounded mt-5 border">
                <h1 class="text-center mb-3 mt-3">INICIAR SESION</h1>
                <form action="{{route('logear')}}" method="post" autocomplete="off">
                    @csrf
                    <label for="user" class="text">Nombre de usuario</label>
                    <div class="input-group mt-1 mb-3">
                        <span class="input-group-text" for="name"><i class="fa-solid fa-user"></i></span>
                        <input required="" type="text" name="name" id="name" class="form-control" >
                    </div>
                    <label for="pass">Contraseña</label>
                    <div class="input-group mt-1 mb-3">
                        <span class="input-group-text" for="pass"><i class="fa-solid fa-key"></i></span>
                        <input required="" type="password" class="form-control" name="password" id="pasword">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class=" btn btn-outline-dark mb-3">Iniciar sesion</button>
                    </div>
                </form>
                <a class="d-flex justify-content-center mb-3" href="{{route('registro')}}">Registrarse</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
@extends('./layouts.plantilla')

@section('contenido')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card text-white" style="background-color: rgba(27, 26, 26, 0.815)">
            <div class="card-body p-5 text-center" style="box-shadow: 5px 5px 10px rgb(255, 255, 255);">
  
              <div class="mb-md-5 mt-md-4 pb-5">
                    
                <h2 class="fw-bold mb-2 text-uppercase">Inicio de sesion</h2>
                <br>
                <form action="{{route('logear')}}" method="post" autocomplete="off">
                    @csrf
                    <label for="user" class="text">Nombre de usuario</label>
                    <div class="input-group mt-1 mb-3">
                        <span class="input-group-text" for="name"><i class="fa-solid fa-user"></i></span>
                        <input required="" type="text" name="name" id="name" class="form-control" placeholder="Ej. Juan" value="{{ old("name") }}">
                    </div>
                    <label for="pass">Contraseña</label>
                    <div class="input-group mt-1 mb-3">
                        <span class="input-group-text" for="pass"><i class="fa-solid fa-key"></i></span>
                        <input required="" type="password" class="form-control" name="password" id="pasword" placeholder="*****" value="{{ old("password") }}">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class=" btn btn-outline-light mb-3">Iniciar sesion</button>
                    </div>
                </form>
                <a class="d-flex justify-content-center mb-3 text-light" href="{{route('registro')}}">Registrarse</a>
            </div>
            <div class="col"></div>
        </div>
    </div>                   
@endsection
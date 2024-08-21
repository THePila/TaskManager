@extends("layout.app")    

@section("content")
<div>
       {{-- este if muestra todos los errore que puede haber al logearnos --}}
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
       {{-- este fragmento de codigo crea los input adentro de un form para que la request lo pueda tomar y el form lo declaramos como un metodo get, este metodo lo que hace es mandar la informacion a la base de datos de forma publica--}}
        <div class="d-flex justify-content-center align-items-center vw-100 vh-100">
        <form method="GET">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">mantener sesion</label>
            </div>
            
            <button href="/dashBoard" class="btn btn-primary">iniciar sesion</button>
            <a href="/registro" class="btn btn-secondary">Registrarse</a>
          </form>
        </div>
    </div>
@endsection
@extends('app')
@section('content')
<h1><span class="glyphicon glyphicon-user"></span>Usuarios</h1>

  <div class="col-md-4">
  <div class="box-header with-border">
                  <h3 class="box-title">Registro de Usuario</h3>
                </div><!-- /.box-header -->
                <form role="form" action="/usuarios/create" method="post" id="form-users">

                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                 <strong>USUARIO AGREGADO CORRECTAMENTE</strong>
                </div>
                  <div class="box-body">
                  <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Ingrese su Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required >
                    </div>
                    <input type="hidden" name='_token' value='{{csrf_token()}}' id="token">
                  
                  
                  </div><!-- /.box-body -->

                  <div class="box-footer">

                    <button type="button" class="btn btn-primary" id="enviar">Guardar</button>

                  </div>
                </form>

  </div>              
           


@endsection
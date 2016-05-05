@extends('app')
@section('content')
<h1><span class="glyphicon glyphicon-time small"></span>Horarios</h1>

  <div class="col-md-4">
  <div class="box-header with-border">
                  <h3 class="box-title">Registro de Horarios</h3>
                </div><!-- /.box-header -->
                <form role="form" action="/usuarios/create" method="post" id="form-users">

                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                 <strong>USUARIO AGREGADO CORRECTAMENTE</strong>
                </div>
                  <div class="box-body" class="col-xs-6" >
                  <div class="form-group" >
                      <label for="name">Descripcion</label>
                      <input type="text" class="form-control" id="descrip" name="descrip" enable>
                    </div>

                    <div class="form-group "  >
                      <div class="col-xs-6 ">
                        <label for="entrada">Hrs de Entrada</label>
                      <input type="number" class="form-control small" id="entrada" placeholder="Horas de entrada" name="entrada">
                       </div>
                        <div class="col-xs-6">
                        <label for="entrada">Min</label>
                       <input type="number" class="form-control small" id="entrada_min" placeholder="Min" name="entrada_min">
                      
                    </div>

                    <div class="col-xs-6" >
                      <label for="salida">Hrs de salida</label>
                      <input type="number" class="form-control" id="salida" placeholder="Horas de Salida" name="salida" required >
                        </div>
                        <div class="col-xs-6">
                        <label for="entrada">Min</label>
                      <input type="number" class="form-control " id="salida_min" placeholder="Min" name="salida_min">

                      </div>
                        </div>

                    <input type="hidden" name='_token' value='{{csrf_token()}}' id="token">
                  
                  
                  </div><!-- /.box-body -->

                  <div class="box-footer" style="display:block">

                    <button type="button" class="btn btn-primary" id="enviar">Guardar</button>

                  </div>
                </form>

  </div>              
           


@endsection
@extends('app')
@section('content')
@include('horarios.horarios_modal',["titulo"=>"Registro de horarios","nuevo"=>true])
<script type="text/javascript">


</script>
 <h1>
           HORARIOS

          </h1>
          <div class="container-fluid">
              <div class="row">

                  <div class="col-md-2 ">
                      <a href="###" class=" btn btn-success" id="nuevohorario" data-toggle="modal" data-target="#ModalHorario"><span class="glyphicon glyphicon-plus"></span>Nuevo Horario</a>
                  </div>
                  <div class="col-md-8">
                      <div class="alert alert-success" role="alert" id="success"   style="display:none">Los Datos se han creado Exitosamente</div>
                  </div>
              </div>
          </div>
         
         
          <div class="box-body">
         
                  <table  id="horarios-table" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Descripcion</th>
                        <th>Hrs Entrada</th>
                        <th>Hrs Salida</th>
                          <th>Opciones</th>
                      
                      </tr>
                    </thead>
                    <tbody >
                    
              
                    
                    </tbody>
                    <tfoot>
                     
                    </tfoot>
                  </table>
                   
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->


@endsection

                  <script type="text/javascript">



                      function guardar(){
                          $("#success").fadeOut(100);
                          var route="/horarios/create";
                          var descrip=$("#descrip").val();
                          var entrada_hrs=$("#entrada").val();
                          var entrada_min=$("#entrada_min").val();
                          var salida_hrs=$("#salida").val();
                          var salida_min=$("#salida_min").val();
                          var token=$("#token").val();
                          $.ajax({
                              url:route,
                              type:"POST",
                              dataType:"json",
                              headers:{"X-CSRF-TOKEN":token},
                              data:{descrip:descrip,entrada:entrada_hrs,salida:salida_hrs},
                              success:function(response){

                                  $("#ModalHorario").modal('toggle');
                                  $("#success").fadeIn(1000);
                                  $("#success").fadeOut(3000);
                                  listarHorarios();

                              }




                          });

                      }


                      function listarHorarios(){

                          $("#horarios-table tbody").remove();

                          var  route="/horarios/listar";
                          $.get(route,function(response){

                              filas="";
                              $(response).each(function(key,value){


                                  filas+="<tr><td>"+value.descrip+"</td><td>"+value.entrada+"</td><td>"+value.salida+"</td><td><a href='#' class='btn btn-warning'  id='"+value.id+"' data-toggle='modal' data-target='#ModalHorario' onclick='abrirModalHorario(this.id);'> Actualizar</a><a href='#' id='"+value.id+"' onclick='eliminar(this.id);' class='btn btn-danger'> Eliminar</a></td></tr>";

                                  // console.log(value.name);
                              });

                              $("#horarios-table").append(filas);


                          });
                      }
                      function abrirModalHorario( id){

                          var route="/horarios/edit/"+id;
                          $.get(route,function(response){

                              $("#descrip").val(response.descrip);
                              $("#entrada").val(response.entrada);
                              $("#salida").val(response.salida);
                              $("#update").val(1);


                          });

                      }
                  </script>

              @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

            listarHorarios();
        });
    </script>
                  @endsection
@extends('app')
@section('content')
    @include('empleados.asignarHorarios_modal')
    @include('empleados.empleados_modal',["titulo"=>"Registro de empleado","nuevo"=>true])

    <script type="text/javascript">


    </script>
    <h1>
        Empleados

    </h1>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 ">
                <a href="###" class=" btn btn-success" id="nuevoEmpleado" data-toggle="modal" data-target="#ModalEmpleado"><span class="glyphicon glyphicon-plus"></span>Nuevo Empleado</a>
            </div>
            <div class="col-md-2 ">
                <a href="###" class=" btn btn-success" id="asignarHorarios" data-toggle="modal" data-target="#ModalAsignar"><span class="glyphicon glyphicon-time"></span>Asignar Horarios</a>
            </div>
            <div class="col-md-8">
                <div class="alert alert-success" role="alert" id="success"   style="display:none">Los Datos se han creado Exitosamente</div>
            </div>
        </div>
    </div>


    <div class="box-body">

        <table  id="empleados-table" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Direccion</th>
                <th>Foto</th>
                <th>Cargo</th>
                <th>Qr</th>
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
                var route="/empleados/create";
                var nombres=$("#nombres").val();
                var apellidos=$("#apellidos").val();
                var direccion=$("#direccion").val();
                var foto="";
                var cargo=$("#cargo").val();
                var qr=$("#qr").val();
                var token=$("#token").val();
                $.ajax({
                    url:route,
                    type:"POST",
                    dataType:"json",
                    headers:{"X-CSRF-TOKEN":token},
                    data:{nombres:nombres,apellidos:apellidos,direccion:direccion,foto:foto,cargo:cargo,qr:qr},
                    success:function(response){

                        $("#ModalEmpleado").modal('toggle');
                        $("#success").fadeIn(1000);
                        $("#success").fadeOut(3000);
                        listarEmpleados();

                    }



                });

            }


            function listarEmpleados(){

                $("#empleados-table tbody").remove();

                var  route="/empleados/listar";
                $.get(route,function(response){

                    filas="";
                    $(response).each(function(key,value){
                        filas+="<tr><td>"+value.nombres+" "+value.apellidos+"</td><td>"+value.direccion+"</td><td>"+value.foto+"</td><td>"+value.cargo+"</td><td>"+value.qr+"</td><td><a href='#' class='btn btn-warning'  id='"+value.id+"' data-toggle='modal' data-target='#ModalHorario' onclick='abrirModalHorario(this.id);'> Actualizar</a><a href='#' id='"+value.id+"' onclick='eliminar(this.id);' class='btn btn-danger'> Eliminar</a></td></tr>";

                        // console.log(value.name);
                    });

                    $("#empleados-table").append(filas);


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
                $(document).ready(function() {

                    listarEmpleados();

                    
                    $(function () {
                        $("#nombreEmpleado").autocomplete({
                            source: "empleados/autocompletar/",
                            minLength: 1,
                            select: seleccionado

                        }).data("ui-autocomplete")._renderItem = function (ul, item) {
                            return $("<li>")
                                    .data("ui-autocomplete-item", item)
                                    .append("<a><strong>" + item.nombres + " " + item.apellidos + "<strong></a></li>")
                                    .appendTo(ul);
                        };
                    });

                    function seleccionado(event, ui) {
                        $("#nombreEmpleado").val(ui.item.nombres + " " + ui.item.apellidos);
                        $("#idEmpleado").val(ui.item.id);

                       buscarHorariosEmpleado(ui.item.id);

                        return false;
                    }
                });

                       function  buscarHorariosEmpleado(id){
                       
                       var route="empleados/buscarHorarios/"+id;

                         $("#camposHorario tr").remove();
                        $.get(route,function(response){

                               $(response).each(function(key,value){
                        fila2="<tr><td>"+value.descrip+"</td><td>"+value.entrada+"</td><td>"+value.salida+"</td></tr>";

                          $("#camposHorario").append(fila2);
                    });
                               

                        });
                           


                       }




                    $("#registrarHorarioEmpleado").click(function () {
                        var empleado_id =$("#idEmpleado").val();
                        var horario_id = $("#horarios").val();
                        var token = $("#token").val();
                        var route = "empleadoHorario/create";
                        $.ajax({
                            url: route,
                            method: "POST",
                            headers: {"X-CSRF-TOKEN": token},
                            dataType: "json",
                            data: {horario_id: horario_id, empleado_id: empleado_id},
                            success: function (response) {
                                 alert("Horario registrado");
                                 buscarHorariosEmpleado(empleado_id);

                            }


                        });
                    });

            </script>
@endsection
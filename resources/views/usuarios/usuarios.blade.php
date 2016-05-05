@extends('app')
@section('content')
@include('includes.modal_user')
 <h1>
           Usuarios
            <small>Registro de usuarios</small>
          </h1>
          <div class="box-title">
          	 <a href="{{url('usuarios/add')}}" class=" btn btn-success"><span class="glyphicon glyphicon-plus"></span>Nuevo Usuario</a>
          </div>
         
         
          <div class="box-body">
         
                  <table  id="usuarios-table" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                    
              
                    
                    </tbody>
                    <tfoot>
                     
                    </tfoot>
                  </table>
                   
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
               
                </div><!-- /.box-header -->


  @endsection
  @section('scripts-datatables')
   
    <script type="text/javascript">
 

   $(document).ready(function(){

    listarUsuarios();


   });

       function listarUsuarios(){

       	$("#campos").remove();

        var  route="/usuarios/listar";
        $.get(route,function(response){

        	       filas="";       
                   $(response).each(function(key,value){

                    
                    
                    filas+="<tr><td>"+value.name+"</td><td>"+value.email+"</td><td><a href='#' class='btn btn-warning'  id='"+value.id+"' data-toggle='modal' data-target='#ModalUser' onclick='abrirModal(this.id);'> Actualizar</a><a href='#' id='"+value.id+"' onclick='eliminar(this.id);' class='btn btn-danger'> Eliminar</a></td></tr>";
  
                    // console.log(value.name);                    
                    });
                  
                   $("#usuarios-table tbody").append(filas);
                
               
                 });
                }
                
          function abrirModal(id){
           var route="/usuarios/edit/"+id;
           $.get(route,function(response){
             
               $("#name").val(response.name);
               $("#email").val(response.email);
               $("#password").val(response.password);
               $("#id").val(response.id);
             

           });

          }

             $("#actualizar").click(function(){

             
             var name=$("#name").val();
             var email=$("#email").val();
             var password=$("#password").val();
             var id=$("#id").val();
             var route="/usuarios/update/"+id;
             $.ajax({
               url:route,
               type:"GET",
               dataType:"json",
               headers:{"X-CSRF-TOKEN":token},

               data:{name:name,email:email,password:password},
               success:function(){
               	$("#usuarios-table tbody tr").remove();
                      listarUsuarios();
                 $("#ModalUser").modal('toggle');
              

               }

             });
           });

             function eliminar(id){
              var route="/usuarios/delete/"+id;
              var tokem=$("#token").val();
                $.ajax({
                	url:route,
                	type:"GET",
                	dataType:"json",
                	headers:{"X-CSRF-TOKEN":token},
                	success:function(){
                       $("#usuarios-table tbody tr").remove();
                     listarUsuarios();

                	}



                });
             }
    
        </script>


    </script>

        <script type="text/javascript">
      $(function () {
   
        $('#usuarios-table').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

     @endsection
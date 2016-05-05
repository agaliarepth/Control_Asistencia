<div class="modal fade" id="ModalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title" id="myModalLAbel">ACTUALIZAR USUARIO</h4>
		</div>
		<div class="modal-body">
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
                    <input type="hidden" name='id' id="id">

                  
                  </div><!-- /.box-body -->

                 
                </form>

		</div>
		<div class="modal-footer">
			<a href="###" class="btn btn-primary" id="actualizar" >ACTUALIZAR</a>
		</div>
			
		</div>


	</div>


</div>



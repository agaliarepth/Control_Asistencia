
<div class="modal fade" id="ModalEmpleado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"  style="border-bottom:1px solid #999;" id="myModalLabel">{{$titulo}}</h4>

               </div>

<div class="modal-body">
    <form role="form" action="#" method="post" id="form-users">


        <div class="box-body" class="col-xs-12" >
            <div class="form-group col-xs-6" >
                <label for="name">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" enable>
            </div>

            <div class="form-group col-xs-6" >
                <label for="name">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" enable>
            </div>
            <div class="form-group col-xs-12" >
                <label for="name">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" enable>
            </div>
            <div class="form-group "  >
                <div class="col-xs-12" >
                    <label for="entrada">Foto</label>
                <input type="file" class="form-control small" id="foto" placeholder="Horas de entrada" name="foto">
            </div>

                <div class="form-group "  >
            <div class="col-xs-6" >
                <label for="salida">Cargo que ocupa</label>
                <input type="input" class="form-control" id="cargo" placeholder="cargo" name="cargo" >
            </div>
              </div>
                <div class="form-group "  >
                    <div class="col-xs-6" >
                        <label for="salida">Codigo QR</label>
                        <input type="input" class="form-control" id="qr"  name="qr" required >
                    </div>
                </div>
        </div>

        <input type="hidden" name='_token' value='{{csrf_token()}}' id="token">
        <input type="hidden" name="update" id="update" value="0">

</div><!-- /.box-body -->


</form>
</div>
           <div class="modal-footer ">
    <div class="col-xs-3">
    <a href="###" class="btn btn-primary" id="nuevo" onclick="guardar();" >GUARDAR</a>
    </div>
    <div class="col-xs-3">
        <a href="###" class="btn btn-warning" id="nuevo"  >CANCELAR</a>
    </div>


</div>

</div>


</div>


</div>

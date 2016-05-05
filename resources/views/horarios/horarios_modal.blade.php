<div class="modal fade" id="ModalHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{$titulo}}</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="#" method="post" id="form-users">


                    <div class="box-body" class="col-xs-6" >
                        <div class="form-group" >
                            <label for="name">Descripcion</label>
                            <input type="text" class="form-control" id="descrip" name="descrip" enable>
                        </div>

                        <div class="form-group "  >
                            <div class="col-xs-6" >
                        <label for="entrada">Hrs de Entrada</label>
                            <input type="time" class="form-control small" id="entrada" placeholder="Horas de entrada" name="entrada">
                        </div>


                        <div class="col-xs-6" >
                            <label for="salida">Hrs de salida</label>
                            <input type="time" class="form-control" id="salida" placeholder="Horas de Salida" name="salida" required >
                        </div>

                    </div>

                    <input type="hidden" name='_token' value='{{csrf_token()}}' id="token">
                    <input type="hidden" name="update" id="update" value="0">

         


            </form>
            </div>
            <div class="modal-footer">

                <a href="###" class="btn btn-primary" id="nuevo" onclick="guardar();" >GUARDAR</a>

            

            </div>

        </div>


    </div>


</div>



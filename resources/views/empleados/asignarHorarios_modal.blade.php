<div class="modal fade" id="ModalAsignar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >


    <div class="modal-dialog"   role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"  style="border-bottom:1px solid #999;" id="myModalLabel">ASIGNAR HORARIOS</h4>

            </div>
<div class="modal-body">
    <form role="form">

    <div class="box-body" class="col-xs-10" >
            <div class="form-group col-xs-6" >
                <label for="name">Empleado</label>
                <input type="text" class="form-control" id="nombreEmpleado" name="nombres"  enable>
                <input type="hidden" class="form-control" id="idEmpleado" name="idEmpleado" enable>
            </div>
            <div class="form-group col-xs-6" >
                <label for="name">Horarios</label>
                <select  class="form-control" id="horarios" name="horarios">
                    @foreach($horarios as $row)
                    <option value="{{$row->id}}">{{$row->descrip}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group col-xs-12" >
                <input type="hidden" name='_token' value='{{csrf_token()}}' id="token">

                <a href="###" class="btn btn-primary" id="registrarHorarioEmpleado"  >GUARDAR</a>
            </div>
            </div>

    </form>
    <div class="separator"></div>
    <table class="table table-bordered" >
        <thead>
            <tr>
                <th>Horario</th>
                <th>Entrada</th>
                <th>Salida</th>

            </tr>
        </thead>
        <tbody id='camposHorario' >




        </tbody>


    </table>

</div>
            </div>
        </div>
    </div>

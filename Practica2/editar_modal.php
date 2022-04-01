<div class="modal fade" id="edit_<?php echo $row->codigo;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center" id="myModalLabel">Editar materia</h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editar.php?cod=<?=$row->nombre?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$row->nombre?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="tarea">Tarea:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" min="0" max="10" class="form-control" name="tarea" id="tarea" value="<?=$row->tarea?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="investigacion">Investigacion:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10" class="form-control" name="investigacion" id="investigacion" value="<?=$row->investigacion?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="examen" >Examen:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10" step="0.1" class="form-control" name="examen" id="examen" value="<?=$row->examen?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Editar</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
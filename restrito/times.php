<?php

$acao = $_GET['acao'];

include 'header.php';

if($acao == 'add'){
	echo '
	<h1>Adicionar Time</h1>
	<form id="add-time" action="'.$siteurl.'/restrito/timessubmit.php">
	<div class="form-group clearfix">
		<label for="time" class="col-lg-3 control-label">Time</label>
		<div class="col-lg-9">
			<input placeholder="Nome do Time" name="time" id="time" class="form-control" type="text" required>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label for="logo" class="col-lg-3 control-label">Logo</label>
		<div class="col-lg-9">
			<input placeholder="URL do logo do time" name="logo" id="logo" class="form-control" type="text">
		</div>
	</div>

	<div class="form-group clearfix">
		<label for="grupo" class="col-lg-3 control-label">Grupo</label>
		<div class="col-lg-9">
			<select name="grupo" id="grupo" class="form-control">
				<option value="a">A</option>
				<option value="b">B</option>
			</select>
		</div>
	</div>

	<div class="form-group clearfix">
		<label for="abr" class="col-lg-3 control-label">Abreviação</label>
		<div class="col-lg-9">
			<input placeholder="Abreviação do time" name="abr" id="abr" class="form-control" type="text" required>
		</div>
	</div>
	
	<a class="btn btn-default" data-dismiss="modal" href="'.$siteurl.'/restrito">Cancelar</a>
	
	<button type="submit" class="btn btn-primary">Enviar</button>
	
	</form>
	';
} else if($acao == '') {
	echo '<h1>Selecione um submenu no link "Gerenciar Times"</h1>';
}

include 'footer.php';

?>
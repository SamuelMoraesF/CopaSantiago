<?php

$idurl = $_GET['id'];

include 'header.php';

$sqlart = "SELECT * FROM `times` WHERE `id` = ".$idurl;
			
$queryart = mysql_query($sqlart);
		
$sqlart = mysql_fetch_array($queryart);

echo '
<h1>Editar Time</h1>
<form id="add-time" action="'.$siteurl.'/restrito/timessubmitedit.php">
<div class="form-group clearfix">
	<label for="time" class="col-lg-3 control-label">Time</label>
	<div class="col-lg-9">
		<input placeholder="Nome do Time" name="time" value="'.$sqlart["time"].'" id="time" class="form-control" type="text" required>
	</div>
</div>

<div class="form-group clearfix">
	<label for="logo" class="col-lg-3 control-label">Logo</label>
	<div class="col-lg-9">
		<input placeholder="URL do logo do time" name="logo" value="'.$sqlart["logo"].'" id="logo" class="form-control" type="text">
	</div>
</div>
<div class="form-group clearfix">
	<label for="grupo" class="col-lg-3 control-label">Grupo</label>
	<div class="col-lg-9">
		<select name="grupo" id="grupo" class="form-control">
			<option value="a">A</option>
			<option selected="selected" value="'.$sqlart["grupo"].'">'.$sqlart["grupo"].' - Default</option>
			<option value="b">B</option>
		</select>
	</div>
</div>
<div class="form-group clearfix">
	<label for="abr" class="col-lg-3 control-label">Abreviação</label>
	<div class="col-lg-9">
		<input placeholder="Abreviação do time" value="'.$sqlart["abr"].'" name="abr" id="abr" class="form-control" type="text" required>
	</div>
</div>

<input type="hidden" name="idedit" value="'.$idurl.'">

<a class="btn btn-default" data-dismiss="modal" href="'.$siteurl.'/restrito">Cancelar</a>

<button type="submit" class="btn btn-primary">Enviar</button>

</form>
';

include 'footer.php';

?>
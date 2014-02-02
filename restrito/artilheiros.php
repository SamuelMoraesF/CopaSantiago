<?php

$acao = $_GET['acao'];

include 'header.php';

if($acao == 'add'){
	echo '
	<h1>Adicionar Artilheiro</h1>
	<form id="add-time" action="'.$siteurl.'/restrito/artilheirossubmit.php">
	<div class="form-group clearfix">
		<label for="artilheiro" class="col-lg-3 control-label">Artilheiro</label>
		<div class="col-lg-9">
			<input placeholder="Nome do Artilheiro" name="artilheiro" id="artilheiro" class="form-control" type="text" required>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label for="gols" class="col-lg-3 control-label">Gols</label>
		<div class="col-lg-9">
			<input placeholder="Número de gols" name="gols" id="gols" class="form-control" type="text" required>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label for="time" class="col-lg-3 control-label">Time</label>
		<div class="col-lg-9">
			<select name="time" id="time" class="form-control">';

		
				$sql = "SELECT * FROM `times`";
				
				$query = mysql_query($sql);
				
				while($sql = mysql_fetch_array($query)){
					$time = $sql["time"];
					$id = $sql["id"];
					echo '<option value="'.$id.'">'.$time.'</option>';

				}
		
echo '
			</select>
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
<?php

$acao = $_GET['acao'];

$idurl = $_GET['id'];

include 'header.php';

$sqlart = "SELECT * FROM `jogos` WHERE `id` = ".$idurl;
			
$queryart = mysql_query($sqlart);
		
$sqlart = mysql_fetch_array($queryart);

if($acao == 'edit'){
	echo '
	<h1>Editar Jogo</h1>
	<form id="add-time" action="'.$siteurl.'/restrito/jogossubmitedit.php">

	<div class="form-group clearfix">
		<label for="time1" class="col-lg-3 control-label">Time 1</label>
		<div class="col-lg-9">
			<select name="time1" id="time1" class="form-control">';

				$sql = "SELECT * FROM `times` WHERE `id` = ".$sqlart['time1'];
				
				$query = mysql_query($sql);
				
				$sql = mysql_fetch_array($query);

				echo '<option value="'.$sql['id'].'">'.$sql['time'].'</option>';
		
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
	
		<div class="form-group clearfix">
		<label for="time2" class="col-lg-3 control-label">Time 2</label>
		<div class="col-lg-9">
			<select name="time2" id="time2" class="form-control">';

		
				$sql = "SELECT * FROM `times` WHERE `id` = ".$sqlart['time2'];
				
				$query = mysql_query($sql);
				
				$sql = mysql_fetch_array($query);

				echo '<option value="'.$sql['id'].'">'.$sql['time'].'</option>';

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
	
	<div class="form-group clearfix">
	
	<label for="datadia" class="col-lg-3 control-label">Data</label>
	
		<div class="col-lg-9">
		
		<input type="text" value="'.substr($sqlart['quando'], 6, 8).'" name="datadia" id="datadia" class="form-control" placeholder="Insira o Dia" style="margin-bottom:10px;" required>
		
		<input type="text" value="'.substr($sqlart['quando'], -4, 2).'" name="datames" id="datames" class="form-control" placeholder="Insira o Mês" style="margin-bottom:10px;" required>
		
		<input type="text" value="'.substr($sqlart['quando'], 0, 4).'" name="dataano" id="dataano" class="form-control" placeholder="Insira o Ano" style="margin-bottom:10px;" required>
		
		</div>
	
	</div>
	
	<div class="form-group clearfix">
	
	<label for="hora" class="col-lg-3 control-label">Horário</label>
	
		<div class="col-lg-9">
		
		<input type="text" value="'.substr($sqlart['hora'], 0, 2).'" name="hora" id="hora" class="form-control" placeholder="Insira a Hora" style="margin-bottom:10px;" required>
		
		<input type="text" value="'.substr($sqlart['hora'], 2, 4).'" name="minuto" id="minuto" class="form-control" placeholder="Insira os minutos" style="margin-bottom:10px;" required>
		
		</div>
	
	</div>
	
	<div class="form-group clearfix">
		<label for="tipo" class="col-lg-3 control-label">Tipo</label>
		<div class="col-lg-9">
			<select name="tipo" id="tipo" class="form-control">
				<option selected="selected" value="'.$sqlart['tipo'].'">Manter o valor anterior</option>
				<option value="0">Normal</option>
				<option value="4">Quartas-de-final</option>
				<option value="2">Semifinal</option>
				<option value="1">Final</option>
			</select>
		</div>
	</div>
	<input type="hidden" name="idedit" value="'.$idurl.'">
	
	
	<a class="btn btn-default" data-dismiss="modal" href="'.$siteurl.'/restrito">Cancelar</a>
	
	<button type="submit" class="btn btn-primary">Enviar</button>
	
	</form>
	';
} else if($acao == '') {
	echo '<h1>Selecione um submenu no link "Gerenciar Jogos"</h1>';
}

include 'footer.php';

?>
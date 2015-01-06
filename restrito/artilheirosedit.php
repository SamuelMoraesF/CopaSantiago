<?php

$idurl = $_GET['id'];

include 'header.php';

$sqlart = "SELECT * FROM `artilheiro` WHERE `id` = ".$idurl;
			
$queryart = mysql_query($sqlart);
		
$sqlart = mysql_fetch_array($queryart);

	echo '
	<h1>Editar Artilheiro</h1>
	<form id="add-time" action="'.$siteurl.'/restrito/artilheirossubmitedit.php">

	<div class="form-group clearfix">
	
	<label for="artilheiro" class="col-lg-3 control-label">Artilheiro</label>
	
		<div class="col-lg-9">
		<input type="text" name="artilheiro" value="'.$sqlart["artilheiro"].'" id="artilheiro" class="form-control" placeholder="Nome do artilheiro" required>
		
		</div>
	
	</div>
	
	<div class="form-group clearfix">
		<label for="time" class="col-lg-3 control-label">Time</label>
		<div class="col-lg-9">
			<select name="time" id="time" class="form-control">';

				$sql = "SELECT * FROM `times` WHERE `id` = ".$sqlart["time"];
				
				$query = mysql_query($sql);
				
				$sql = mysql_fetch_array($query);

				echo '<option value="'.$sql["id"].'">'.$sql["time"].'</option>';

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
	
	<label for="gols" class="col-lg-3 control-label">Gols</label>
	
		<div class="col-lg-9">
		<input type="text" value="'.$sqlart["gols"].'" name="gols" id="gols" class="form-control" placeholder="Número de gols do artilheiro" required>
		
		</div>
	
	</div>
	

	<input type="hidden" name="idedit" value="'.$idurl.'">
	
	
	<a class="btn btn-default" data-dismiss="modal" href="'.$siteurl.'/restrito">Cancelar</a>
	
	<button type="submit" class="btn btn-primary">Enviar</button>
	
	</form>
	';

include 'footer.php';

?>
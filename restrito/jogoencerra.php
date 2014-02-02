<?php

$id = $_GET['id'];

include 'header.php';

$sql = "SELECT * FROM `jogos` WHERE `id` =".$id." LIMIT 0 , 1";
				
$query = mysql_query($sql);
		
$sqldata = mysql_fetch_array($query);

$time1 = $sqldata["time1"];

$time2 = $sqldata["time2"];


$sqltime1data = "SELECT * FROM `times` WHERE `id` =".$time1." LIMIT 0 , 1";
				
$querytime1data = mysql_query($sqltime1data);
		
$sqltime1datainfo = mysql_fetch_array($querytime1data);

$logotime1 = $sqltime1datainfo["logo"];

$nometime1 = $sqltime1datainfo["time"];


$sqltime2data = "SELECT * FROM `times` WHERE `id` =".$time2." LIMIT 0 , 1";
				
$querytime2data = mysql_query($sqltime2data);
		
$sqltime2datainfo = mysql_fetch_array($querytime2data);

$logotime2 = $sqltime2datainfo["logo"];

$nometime2 = $sqltime2datainfo["time"];



	echo '
	<h1>Encerrar Jogo</h1>
	<form id="add-time" action="'.$siteurl.'/restrito/jogoencerrasubmit.php">
	
	<div class="form-group clearfix">
		<label for="gol1" class="col-lg-3 control-label">Gols do '.$nometime1.'</label>
		<div class="col-lg-9">
			<input placeholder="Número de gols do '.$nometime1.'" name="gol1" id="gol1" class="form-control" type="text" required>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label for="gol2" class="col-lg-3 control-label">Gols do '.$nometime2.'</label>
		<div class="col-lg-9">
			<input placeholder="Número de gols do '.$nometime2.'" name="gol2" id="gol2" class="form-control" type="text" required>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label for="pro1" class="col-lg-2 control-label">Gols pró do '.$nometime1.'</label>
		<div class="col-lg-4">
			<input placeholder="Número de gols pró do '.$nometime1.'" name="pro1" id="pro1" class="form-control" type="text" required>
		</div>
		
		<label for="contra1" class="col-lg-2 control-label">Gols contra do '.$nometime1.'</label>
		<div class="col-lg-4">
			<input placeholder="Número de gols contra do '.$nometime1.'" name="contra1" id="contra1" class="form-control" type="text" required>
		</div>
		
	</div>
	
	<div class="form-group clearfix">
		<label for="pro2" class="col-lg-2 control-label">Gols pró do '.$nometime2.'</label>
		<div class="col-lg-4">
			<input placeholder="Número de gols pró do '.$nometime2.'" name="pro2" id="pro2" class="form-control" type="text" required>
		</div>
		
		<label for="contra2" class="col-lg-2 control-label">Gols contra do '.$nometime2.'</label>
		<div class="col-lg-4">
			<input placeholder="Número de gols contra do '.$nometime2.'" name="contra2" id="contra2" class="form-control" type="text" required>
		</div>
		
	</div>
	
	<input type="hidden" value="'.$id.'" name="id">
	
	<a class="btn btn-default" data-dismiss="modal" href="'.$siteurl.'/restrito">Cancelar</a>
	
	<button type="submit" class="btn btn-primary">Enviar</button>
	
	</form>
	';
include 'footer.php';

?>
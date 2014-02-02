<?php

$time1 = $_GET['time1'];

$time2 = $_GET['time2'];

$datadia = $_GET['datadia'];

$hora = $_GET['hora'];

$minuto = $_GET['minuto'];

$quantasdia = strlen($datadia);

$datames = $_GET['datames'];

$quantasmes = strlen($datames);

$quantashora = strlen($hora);

$quantasminuto = strlen($minuto);

$dataano = $_GET['dataano'];

$tipo = $_GET['tipo'];

$zero = 0;

if ($quantashora == '1'){
$hora = "0".$hora;
}

if ($quantasminuto == '1'){
$minuto = "0".$minuto;
}

if ($quantasdia == '1'){
$datadia = "0".$datadia;
}

if ($quantasmes == '1'){
$datames = "0".$datames;
}

$data = $dataano.$datames.$datadia;

$horario = $hora.$minuto;

include 'header.php';

if (($time1 != "") && ($time2 != "") && ($data != "")) {

	$sql = "INSERT INTO `nova99_K0fnE`.`jogos` (`id`, `time1`, `time2`, `gol1`, `gol2`, `empate`, `pontos1`, `pontos2`, `quando`, `hora`, `aconteceu`, `pro1`, `contra1`, `pro2`, `contra2`, `tipo`) VALUES (NULL, '".$time1."', '".$time2."', '0', '0', '0', '0', '0', '".$data."', '".$horario."', '0', '0', '0', '0', '0', '".$tipo."');";

	mysql_query($sql);

}

$sqltime1 = "SELECT * FROM `times` WHERE `id` =".$time1." LIMIT 0 , 1";				
$querytime1 = mysql_query($sqltime1);
$sqltime1 = mysql_fetch_array($querytime1);

$time1name = $sqltime1["time"];

$sqltime2 = "SELECT * FROM `times` WHERE `id` =".$time2." LIMIT 0 , 1";				
$querytime2 = mysql_query($sqltime2);
$sqltime2 = mysql_fetch_array($querytime2);
				
$time2name = $sqltime2["time"];

echo '<div class="jumbotron"><h1>Jogo Adicionado</h1>
<p>O seguinte jogo foi adicionado:</br></br>
<b>Time 1:</b> '.$time1.' - '.$time1name.'</br>
<b>Time 2:</b> '.$time2.' - '.$time2name.'</br>
<b>Data:</b> '.$datadia.'/'.$datames.'/'.$dataano.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
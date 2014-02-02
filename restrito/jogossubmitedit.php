<?php

$time1 = $_GET['time1'];

$idedit = $_GET['idedit'];

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

//$sql = "UPDATE `nova99_K0fnE`.`jogos` SET `time1` = '".$time1."', `time2` = '".$time2."', `quando` = '".$data."', `hora` = '".$horario."', `tipo` = '".$tipo."' WHERE `jogos`.`id` =".$idedit.";";

$sql = "UPDATE `nova99_K0fnE`.`jogos` SET `time1` = '{$time1}', `time2` = '{$time2}', `quando` = '{$data}', `hora` = '{$horario}', `tipo` = '{$tipo}' WHERE `jogos`.`id` ={$idedit};";

mysql_query($sql);


$sqltime1 = "SELECT * FROM `times` WHERE `id` =".$time1." LIMIT 0 , 1";				
$querytime1 = mysql_query($sqltime1);
$sqltime1 = mysql_fetch_array($querytime1);

$time1name = $sqltime1["time"];

$sqltime2 = "SELECT * FROM `times` WHERE `id` =".$time2." LIMIT 0 , 1";				
$querytime2 = mysql_query($sqltime2);
$sqltime2 = mysql_fetch_array($querytime2);
				
$time2name = $sqltime2["time"];

echo '<div class="jumbotron"><h1>Jogo Editado</h1>
<p>O seguinte jogo foi editado:</br></br>
<b>Time 1:</b> '.$time1.' - '.$time1name.'</br>
<b>Time 2:</b> '.$time2.' - '.$time2name.'</br>
<b>Data:</b> '.$datadia.'/'.$datames.'/'.$dataano.'</br>

</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
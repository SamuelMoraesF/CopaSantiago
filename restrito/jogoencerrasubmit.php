<?php

$gol1 = $_GET['gol1'];

$gol2 = $_GET['gol2'];

$id = $_GET['id'];

$pro1 = $_GET['pro1'];

$contra1 = $_GET['contra1'];

$contra2 = $_GET['contra2'];

$pro2 = $_GET['pro2'];

if($gol1 == $gol2){
	$empate = '1';
	$pontos1 = '1';
	$pontos2 = '1';
} else if ($gol1 > $gol2){
	$pontos1 = '3';
	$pontos2 = '0';
	$empate = '0';
} else if ($gol1 < $gol2){
	$pontos1 = '0';
	$pontos2 = '3';
	$empate = '0';
}

include 'header.php';




//$sql = "UPDATE `nova99_K0fnE`.`jogos` SET `gol1` = `".$gol1."`, `gol2` = `".$gol2."`, `empate` = `".$empate."`, `pontos1` = `".$pontos1."`, `pontos2` = `".$pontos2."`, `aconteceu` = `1`, `pro1` = `".$pro1."`, `contra1` = `".$contra1."`, `pro2` = `".$pro2."`, `contra2` = `".$contra2."` WHERE `jogos`.`id` =".$id.";";

$sql = "UPDATE `nova99_K0fnE`.`jogos` SET `gol1` = '{$gol1}', `gol2` = '{$gol2}', `empate` = '{$empate}', `pontos1` = '{$pontos1}', `pontos2` = '{$pontos2}', `aconteceu` = '1', `pro1` = '{$pro1}', `contra1` = '{$contra1}', `pro2` = '{$pro2}', `contra2` = '{$contra2}' WHERE `jogos`.`id` = {$id};";

mysql_query($sql) or die(mysql_error());




echo '<div class="jumbotron"><h1>Jogo Encerrado</h1>
<p>O jogo foi encerrado com estas informações:</br></br>
<b>Gols time 1:</b> '.$gol1.'</br>
<b>Gols time 2:</b> '.$gol2.'</br>
<b>Pontos time 1:</b> '.$pontos1.'</br>
<b>Pontos time 2:</b> '.$pontos2.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';


include 'footer.php';

?>
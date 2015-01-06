<?php

$idedit = $_GET['idedit'];

$time = $_GET['time'];

$logo = $_GET['logo'];

$grupo = $_GET['grupo'];

$abr = $_GET['abr'];

$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $time);

$zero = 0;

include 'header.php';

//$sql = "UPDATE `nova99_K0fnE`.`jogos` SET `time1` = '".$time1."', `time2` = '".$time2."', `quando` = '".$data."', `hora` = '".$horario."', `tipo` = '".$tipo."' WHERE `jogos`.`id` =".$idedit.";";

$sql = "UPDATE `".$dbname."`.`times` SET `time` = '{$time}', `logo` = '{$logo}', `slug` = '{$slug}', `grupo` = '{$grupo}', `abr` = '{$abr}' WHERE `times`.`id` ={$idedit};";

mysql_query($sql);

echo '<div class="jumbotron"><h1>Jogo Editado</h1>
<p>O seguinte time foi editado:</br></br>
<b>Time: </b> '.$time.' - '.$idedit.'</br>
<b>Logo: </b> <img style="height:50px;" src="'.$logo.'"></br>
<b>Grupo: </b> '.$grupo.'</br>
<b>Abr: </b> '.$abr.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
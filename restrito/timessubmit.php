<?php

$time = $_GET['time'];

$logo = $_GET['logo'];

$grupo = $_GET['grupo'];

$abr = $_GET['abr'];

$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $time);

include 'header.php';

$sql = "INSERT INTO `".$dbname."`.`times` (`id`, `time`, `logo`, `slug`, `grupo`, `abr`) VALUES (NULL, '".$time."', 'logo', 'sld', 'aa', 'abr');";

mysql_query($sql);

echo '<div class="jumbotron"><h1>Time Adicionado</h1>
<p>O seguinte time foi adicionado:</br></br>
<b>Time:</b> '.$time.'</br>
<b>Logo:</b> '.$logo.'</br>
<b>Grupo:</b> '.$grupo.'</br>
<b>Slug:</b> '.$slug.'</br>
<b>Abreviatura:</b> '.$abr.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
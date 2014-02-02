<?php

$artilheiro = $_GET['artilheiro'];

$gols = $_GET['gols'];

$time = $_GET['time'];

include 'header.php';

if (($artilheiro != "") && ($gols != "") && ($time != "")) {

	$sql = "INSERT INTO `nova99_K0fnE`.`artilheiro` ( `id` , `artilheiro` , `gols` , `time` ) VALUES ( NULL , '".$artilheiro."', '".$gols."', '".$time."' );";

	mysql_query($sql);

}

echo '<div class="jumbotron"><h1>Artilheiro Adicionado</h1>
<p>Os seguintes dados foram inseridos:</br></br>
<b>Artilheiro:</b> '.$artilheiro.'</br>
<b>Gols:</b> '.$gols.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
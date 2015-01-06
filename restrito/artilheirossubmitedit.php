<?php

$artilheiro = $_GET['artilheiro'];

$gols = $_GET['gols'];

$time = $_GET['time'];

$id = $_GET['idedit'];

include 'header.php';

$sql = "UPDATE `".$dbname."`.`artilheiro` SET `artilheiro` = '{$artilheiro}', `gols` = '{$gols}', `time` = '{$time}' WHERE `artilheiro`.`id` = {$id};";

//$sql = "UPDATE `".$dbname."`.`artilheiro` SET `artilheiro` = '{$artilheiro}', `gols` = '{$gols}', `time` = '{$time}' WHERE artilheiro`.`id` ={$id};";

mysql_query($sql);

echo '<div class="jumbotron"><h1>Artilheiro editado</h1>
<p>Os seguintes dados foram inseridos:</br></br>
<b>Artilheiro:</b> '.$artilheiro.'</br>
<b>Gols:</b> '.$gols.'</br>
</p>
<p><a class="btn btn-primary btn-lg" role="button" href="'.$siteurl.'/restrito">Retornar</a></p>
</div>
';

include 'footer.php';

?>
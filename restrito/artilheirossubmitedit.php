<?php

$artilheiro = $_GET['artilheiro'];

$gols = $_GET['gols'];

$time = $_GET['time'];

$id = $_GET['id'];

include 'header.php';

$sql = "UPDATE `nova99_K0fnE`.`artilheiro` SET `id` = NULL ,`artilheiro` = '{$artilheiro}', `gols` = '{$gols}', `time` = '{$time}' WHERE artilheiro`.`id` ={$id};";

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
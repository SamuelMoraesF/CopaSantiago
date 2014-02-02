<?php

include '../config.php';

$id = $_GET['id'];

if($id != "") {

$sql = "DELETE FROM `nova99_K0fnE`.`artilheiro` WHERE `artilheiro`.`id` = ".$id." LIMIT 1;";

mysql_query($sql);

header ("location: ".$siteurl."/restrito/artilheiroslista.php");

}



?>
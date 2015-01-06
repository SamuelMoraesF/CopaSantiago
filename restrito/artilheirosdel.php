<?php

include '../config.php';

$id = $_GET['id'];

if($id != "") {

$sql = "DELETE FROM `".$dbname."`.`artilheiro` WHERE `artilheiro`.`id` = ".$id." LIMIT 1;";

mysql_query($sql);

header ("location: ".$siteurl."/restrito/artilheiroslista.php");

}



?>
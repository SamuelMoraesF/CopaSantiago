<?php

include '../config.php';

$id = $_GET['id'];

if($id != "") {

$sql = "DELETE FROM `".$dbname."`.`jogos` WHERE `jogos`.`id` = ".$id." LIMIT 1;";

mysql_query($sql);

header ("location: ".$siteurl."/restrito/jogoslista.php");

}



?>
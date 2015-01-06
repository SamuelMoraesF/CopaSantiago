<?php

include '../config.php';

$id = $_GET['id'];

//$sql = "DELETE FROM `".$dbname."`.`times` WHERE `times`.`id` = '.$id.'";

$sql = "DELETE FROM `".$dbname."`.`times` WHERE `times`.`id` = ".$id;

mysql_query($sql);

header ("location: ".$siteurl."/restrito/timeslista.php");

?>
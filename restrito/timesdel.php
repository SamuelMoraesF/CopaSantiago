<?php

include '../config.php';

$id = $_GET['id'];

if($id != "") {

$sql = 'DELETE FROM `nova99_K0fnE`.`times` WHERE `times`.`id` = '.$id;

mysql_query($sql);

header ("location: ".$siteurl."/restrito/timeslista.php");

}



?>
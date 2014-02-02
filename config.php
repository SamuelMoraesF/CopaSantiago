<?php

$userdb = ''; //Usuário do banco de dados

$userpassword = ''; //Senha do usuário do banco de dados

$dbhost = 'localhost'; //Host do Banco de dados

$dbname = ''; //Nome do banco de dados

$sitetitle = 'Copa Santiago'; //Nome a ser exibido no título do site

$siteurl = 'http://exemplo.com/copa'; //Endereço da instalação sem / no final

$conecta = mysql_connect($dbhost, $userdb, $userpassword) or print (mysql_error());

mysql_select_db($dbname, $conecta) or print(mysql_error());

mysql_set_charset('utf8');

?>

<?php
define('LOCALHOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD',"");
define('DB_NAME','databasename');

$link=mysql_connect (constant('LOCALHOST'), constant('DB_USER'),constant('DB_PASSWORD')) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db(constant('DB_NAME'),$link);
?>

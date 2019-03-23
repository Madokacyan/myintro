<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DC = "localhost";
$database_DC = "dc";
$username_DC = "madoka";
$password_DC = "lindawu";
$DC = mysql_pconnect($hostname_DC, $username_DC, $password_DC) or trigger_error(mysql_error(),E_USER_ERROR); 

$charset=mysql_query("SET NAMES utf8;"); 
$charset=mysql_query("SET CHARACTER_SET_CLIENT=utf8;"); 
$charset=mysql_query("SET CHARACTER_SET_RESULTS=utf8;");

?>
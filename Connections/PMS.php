<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_PMS = "localhost";
$database_PMS = "property";
$username_PMS = "root";
$password_PMS = "root";
$PMS=new mysqli($hostname_PMS,$username_PMS, $password_PMS,$database_PMS) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
define('WEBBASE_URL', 'http://localhost/portfolio_project');

$hostname_conn_database = "localhost";
$database_conn_database = "portfolio";
$username_conn_database = "root";
$password_conn_database = "";
$conn_database = mysql_pconnect($hostname_conn_database, $username_conn_database, $password_conn_database) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_query("SET NAMES utf8"); 

?>
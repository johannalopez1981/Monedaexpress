<?php
session_start();
$servername = "as-reporteseguridad-dev-mysqldbserver.mysql.database.azure.com";
$server_user = "Svr-mysqldb-QA@as-reporteseguridad-dev-mysqldbserver";
$server_pass = '$Exadmin1';
$dbname = "monedaexpress";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
<?php
$host="localhost";
$user="root";
$pass="admin";
$db="dbssisdm";
//$host="localhost";
//$user="jagart_jagarti";
//$pass="tons1975";
//$db="jagart_jagarti";
$koneksi=mysql_connect($host,$user,$pass);

mysql_select_db($db,$koneksi);

?>
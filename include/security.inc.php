<?php
session_start();
$nama=$_SESSION['nama'];


if (empty($nama)) {
	header("location: index.php?habis");
}
?>
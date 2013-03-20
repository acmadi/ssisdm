<?php
	try {
		$dbh = new PDO("mysql:host=localhost;dbname=tbicoi_dbusg", 'tbicoi_usg', 'usg1P@ssword'); // connect to mysql database		
	} catch(PDOException $e) {
		echo $e->getMessage(); // db conx error
		exit;
	}
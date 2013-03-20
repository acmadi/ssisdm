<?php
	session_start();
	include "./include/conn.php";
	if(isset($_SESSION['info_login']))
		unset($_SESSION['info_login']);

if (ISSET($_POST['txtUsername']) && ISSET($_POST['txtPassword']) )
{
	$username = $_POST['txtUsername'];
	$password = md5($_POST['txtPassword']);
	$sql = "select * from peg_personal where username = '$username' ";
    
	$result = mysql_query($sql);
		
	if ($rs = mysql_fetch_array($result))
	{
			$password2 = $rs['password'];
	
			if ($password == $password2)
			{
				 // mysql_query("insert into online values(null,'".$rs['nrp']."','".$rs['nama']."',0) on duplicate key update beat = 0");
				  $_SESSION['nama'] = $rs['nama'];
			      $_SESSION['namapt'] = "PT. Swadharma Sarana Informatika";
				
					header("location: index2.php");
                       
			}
			else
			{
				$_SESSION['nama'] = 'Login or Password is not correct';
				header("location: index.php?paswordsalah");
			}
	}

	else
	{
		$_SESSION['nama'] = 'Login or Password is not correct'.$sql;
		header("location: index.php?cc");
	}

}
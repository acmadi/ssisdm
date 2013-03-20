<?php
	session_start();
	include "./include/conn.php";
	if(isset($_SESSION['info_login']))
		unset($_SESSION['info_login']);

if (ISSET($_POST['txtUsername']) && ISSET($_POST['txtPassword']) )
{
	$username = $_POST['txtUsername'];
	$password = md5($_POST['txtPassword']);
	$sql = "select * from view_emp_pegawai where username = '$username' ";
    
	$result = mysql_query($sql);
		
	if ($rs = mysql_fetch_array($result))
	{
			$password2 = $rs['password'];
	
			if ($password == $password2)
			{
				 // mysql_query("insert into online values(null,'".$rs['nrp']."','".$rs['nama']."',0) on duplicate key update beat = 0");
				  $_SESSION['nama'] = $rs['namal'];
				  $_SESSION['otoritas_sdmpusat'] = $rs['otoritas_sdmpusat'];
				  $_SESSION['unit_bisnis_id'] = $rs['unit_bisnis_id'];
				  $_SESSION['unit_bisnis'] = $rs['unit_bisnis'];
				  $_SESSION['lokasi'] = $rs['lokasi_id2']; 
				  $_SESSION['lokasi_kerja'] = $rs['lokasi_kerja']; 
			      $_SESSION['namapt'] = "PT. Swadharma Sarana informatika ( SSI )";
				
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
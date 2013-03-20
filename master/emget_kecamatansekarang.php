<?php
include "../include/conn.php";
if (isSet($_POST['kecamatanBS'])) 
{  
	$kecamatanB = $_POST['kecamatanBS'];
	$kabupatensekarang= substr($_POST['kabupatensekarang'],0,4);
	$sql ="SELECT * FROM ref_kota  where left(kode,4) = '".$propinsisekarang."' and tingkat=3 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,4,2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$kabupatensekarang."0".$kodebaru."00";
	} else
	{
	$kodebaru=$kabupatensekarang.$kodebaru."00";
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kecamatanB','3')";
	mysql_query($sqlnew);
				
	$q=$kabupatensekarang;
	$query_a="select * from ref_kota where  left(kode,4) LIKE '$q' and tingkat=3 order by nm_kota";
} 
else 
{   if (isSet($_POST['kabupatensekarang'])) 
	{  
	$kabupatensekarang = $_POST['kabupatensekarang'];
	}else
	{
	$kabupatensekarang = $_GET['kabupatensekarang'];
	}

	$q=substr($kabupatensekarang,0,4);
	$query_a="select * from ref_kota where  left(kode,4) LIKE '$q' and tingkat=3 order by nm_kota";
	$kodekec=substr($kabupatensekarang,0,6);
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kecamatansekarang" id="kecamatansekarang" onChange="getkelurahansekarang()" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kec=$row_a['kode'];
			$kec=substr($kec,0,6);
		?>		<option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kec, $kodekec))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

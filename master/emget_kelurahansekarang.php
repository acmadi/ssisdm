<?php
include "../include/conn.php";
if (isSet($_POST['kelurahanBS'])) 
{  
	$kelurahanB = $_POST['kelurahanBS'];
	$kecamatansekarang= substr($_POST['kecamatansekarang'],0,6);
	$sql ="SELECT * FROM ref_kota  where left(kode,6) = '".$kecamatansekarang."' and tingkat=4 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,-2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$kecamatansekarang."0".$kodebaru;
	} else
	{
	$kodebaru=$kecamatansekarang.$kodebaru;
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kelurahanB','4')";
	mysql_query($sqlnew);
				
	$q=$kecamatansekarang;
	$query_a="select * from ref_kota where  left(kode,6) LIKE '$q' and tingkat=4 order by nm_kota";
} 
else 
{  
	
	if (isSet($_POST['kecamatansekarang'])) 
	{  
	$kecamatansekarang = $_POST['kecamatansekarang'];
	}else
	{
	$kecamatansekarang = $_GET['kecamatansekarang'];
	}
	$q=substr($kecamatansekarang,0,6);
	$query_a="select * from ref_kota where  left(kode,6) LIKE '$q' and tingkat=4 order by nm_kota";
	$kodekel=$kecamatansekarang;
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kelurahansekarang" id="kelurahansekarang" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kel=$row_a['kode'];
		?>		<option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kel, $kodekel))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

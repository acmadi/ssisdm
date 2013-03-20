<?php
include "../include/conn.php";
if (isSet($_POST['kelurahanB'])) 
{  
	$kelurahanB = $_POST['kelurahanB'];
	$kecamatanasal= substr($_POST['kecamatanasal'],0,6);
	$sql ="SELECT * FROM ref_kota  where left(kode,6) = '".$kecamatanasal."' and tingkat=4 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,-2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$kecamatanasal."0".$kodebaru;
	} else
	{
	$kodebaru=$kecamatanasal.$kodebaru;
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kelurahanB','4')";
	mysql_query($sqlnew);
				
	$q=$kecamatanasal;
	$query_a="select * from ref_kota where  left(kode,6) LIKE '$q' and tingkat=4 order by nm_kota";
} 
else 
{  
	if (isSet($_POST['kecamatanasal'])) 
	{  
	$kecamatanasal = $_POST['kecamatanasal'];
	}else
	{
	$kecamatanasal = $_GET['kecamatanasal'];
	}
	
	$q=substr($kecamatanasal,0,6);
	$query_a="select * from ref_kota where  left(kode,6) LIKE '$q' and tingkat=4 order by nm_kota";
	$kodekel=$kecamatanasal;
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kelurahanasal" id="kelurahanasal" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kel=$row_a['kode'];
		?>		<option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kel, $kodekel))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

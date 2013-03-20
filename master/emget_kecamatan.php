<?php
include "../include/conn.php";
if (isSet($_POST['kecamatanB'])) 
{  
	$kecamatanB = $_POST['kecamatanB'];
	$kabupatenasal= substr($_POST['kabupatenasal'],0,4);
	$sql ="SELECT * FROM ref_kota  where left(kode,4) = '".$propinsiasal."' and tingkat=3 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,4,2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$kabupatenasal."0".$kodebaru."00";
	} else
	{
	$kodebaru=$kabupatenasal.$kodebaru."00";
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kecamatanB','3')";
	mysql_query($sqlnew);
				
	$q=$kabupatenasal;
	$query_a="select * from ref_kota where  left(kode,4) LIKE '$q' and tingkat=3 order by nm_kota";
} 
else 
{  
	if (isSet($_POST['kabupatenasal'])) 
	{  
	$kabupatenasal = $_POST['kabupatenasal'];
	}else
	{
	$kabupatenasal = $_GET['kabupatenasal'];
	}
	$q=substr($kabupatenasal,0,4);
	$query_a="select * from ref_kota where  left(kode,4) LIKE '$q' and tingkat=3 order by nm_kota";
	$kodekec=substr($kabupatenasal,0,6);
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kecamatanasal" id="kecamatanasal" onChange="getkelurahanasal()" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kec=$row_a['kode'];
			$kec=substr($kec,0,6);
		?>		<option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kec, $kodekec))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

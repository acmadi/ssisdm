<?php
include "../include/conn.php";

if (isSet($_POST['kabupatenBS'])) 
{  
	$kabupatenB = $_POST['kabupatenBS'];
	$propinsisekarang= substr($_POST['propinsisekarang'],0,2);
	$sql ="SELECT * FROM ref_kota  where left(kode,2) = '".$propinsisekarang."' and tingkat=2 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,2,2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$propinsisekarang."0".$kodebaru."0000";
	} else
	{
	$kodebaru=$propinsisekarang.$kodebaru."0000";
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kabupatenB','2')";
	mysql_query($sqlnew);
				
	$q=$propinsisekarang;
	$query_a="select * from ref_kota where  left(kode,2) LIKE '$q' and tingkat=2 order by nm_kota";
} 
else
{  
	$propinsisekarang = $_POST['propinsisekarang'];
	$q=substr($propinsisekarang,0,2);
	$query_a="select * from ref_kota where  left(kode,2) LIKE '$q' and tingkat=2 order by nm_kota";
	$kodekab=substr($propinsisekarang,0,4);
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kabupatensekarang" id="kabupatensekarang" onChange="getkecamatansekarang()" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kab=$row_a['kode'];
			$kab=substr($kab,0,4);
		?>		<option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kab, $kodekab))) {echo "SELECTED";} ?>  >
		<?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

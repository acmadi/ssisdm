<?php
include "../include/conn.php";

if (isSet($_POST['kabupatenB'])) 
{  
	$kabupatenB = $_POST['kabupatenB'];
	$propinsiasal= substr($_POST['propinsiasal'],0,2);
	$sql ="SELECT * FROM ref_kota  where left(kode,2) = '".$propinsiasal."' and tingkat=2 order by kode desc limit 1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$kode=$row ['kode'];
	if ($kode=="")
	{$kodebaru=0;} else { $kodebaru=substr($kode,2,2);   }
	$kodebaru=$kodebaru+1;
	if ($kodebaru<10)
	{
	$kodebaru=$propinsiasal."0".$kodebaru."0000";
	} else
	{
	$kodebaru=$propinsiasal.$kodebaru."0000";
	}
	$sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES ('$kodebaru','$kabupatenB','2')";
	mysql_query($sqlnew);
				
	$q=$propinsiasal;
	$query_a="select * from ref_kota where  left(kode,2) LIKE '$q' and tingkat=2 order by nm_kota";
} 
else
{  
	$propinsiasal = $_POST['propinsiasal'];
	$q=substr($propinsiasal,0,2);
	$query_a="select * from ref_kota where  left(kode,2) LIKE '$q' and tingkat=2 order by nm_kota";
}      
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="kabupatenasal" id="kabupatenasal" onChange="getkecamatanasal()" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['kode']?>"  ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>

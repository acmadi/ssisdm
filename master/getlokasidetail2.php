<?php
include "../include/conn.php";

if (isSet($_POST['lokasi_id'])) 
{  

	$lokasi = $_POST['lokasi_id'];
	$q=substr($lokasi,0,2);
	$query_a="select * from lokasi_kerja where  left(lokasi,2) LIKE '$q' and level=2 order by lokasi_kerja";
    $result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="lokasi_id2" id="lokasi_id2" >
<option value="">[Pilih]</option>
<?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$lokasia=$row_a['lokasi'];
		?>		<option value="<?php echo $row_a['lokasi']?>"  <?php if (!(strcmp($lokasia, $lokasi))) {echo "SELECTED";} ?>><?php echo $row_a['lokasi_kerja']?></option>
<?php   }   ?>
</select>
<?php   }   ?>
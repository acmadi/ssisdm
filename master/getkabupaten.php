<?php
include "../include/conn.php";
if (isSet($_POST['propinsi'])) 
{  $propinsi=$_POST['propinsi'];}  
$kodepropinsi=substr($propinsi,0,2);
$query_a="select * from ref_kota where left(kode,2)='$kodepropinsi' and tingkat=2 order by nm_kota " ;
$kodekab=substr($propinsi,0,4);

?>
<select name="kabupaten" id="kabupaten"  onChange="getkecamatanbaru()">
<option value="">[Pilih]</option>
        <?php 		
     		
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$kab=$row_a['kode'];
			$kab=substr($kab,0,4);
		?>		<option value="<?php echo $row_a['kode'];?>" <?php if (!(strcmp($kab, $kodekab))) {echo "SELECTED";} ?>  >
										<?php echo $row_a['nm_kota']; ?></option>
		<?php   }   ?>
</select>

<?php
include "../include/conn.php";
if (isSet($_POST['status_kerja_id'])) 
{  $status_kerja_id=$_POST['status_kerja_id'];}  
if (isSet($_POST['peg_id'])) 
{  $peg_id=$_POST['peg_id'];
	$query_a="select * from peg_personal where  peg_id='$peg_id' limit 1  " ;
	$result_a=mysql_query($query_a) or (mysql_error()) ;
	$row_a=mysql_fetch_array($result_a);
    $periode_kontrak=$row_a['periode_kontrak'];
	$rollover=$row_a['rollover'];
} 


if ($status_kerja_id==2)
{
$query_a="select * from periode_kontrak where aktif=1 order by periode_kontrak_id " ;


?>
<table width="100%">
<tr><td width="24%">Periode Kontrak </td><td>
<select name="periode_kontrak" id="periode_kontrak"  >
<option value="">[Pilih]</option>
        <?php 		
     		
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['periode_kontrak'];?>" 						
											<?php if (!(strcmp($row_a['periode_kontrak'], $periode_kontrak))) {echo "SELECTED";} ?>>
										<?php echo $row_a['periode_kontrak']; ?></option>
		<?php   }   ?>
</select>
</td></tr>
<tr><td width="24%">Perpanjang otomatis </td><td>
<select name="rollover" id="rollover"  >
<option value="">[Pilih]</option>				
										<option value="Y"<?php if (!(strcmp(Y, $rollover))) {echo "SELECTED";} ?>>Y</option>
										<option value="N"<?php if (!(strcmp(N, $rollover))) {echo "SELECTED";} ?>>N</option>
									</select>
       
</select>
</td></tr>
</table >

<?php

}?>

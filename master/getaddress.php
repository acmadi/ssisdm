<?php
include "../include/conn.php";
if (isSet($_POST['costumerId'])) 
{  
	$costumerId=$_POST['costumerId'];
	$query_cek = "SELECT kodeposId,kd_kota FROM view_mastercostumer WHERE costumerId = '$costumerId'  ";
    $resultno=mysql_query($query_cek) or (mysql_error()) ;
	$row_no = mysql_fetch_assoc($resultno);
	$kodeposId=$row_no["kodeposId"] ;	
	$kd_kota=$row_no["kd_kota"] ;	
	$query_a="select * from ref_kodepos where  kd_kota LIKE '$kd_kota%' order by ket";
} else
{
  if(isSet($_GET['kd_kota'])) 
	{
	$kd_kota = $_GET['kd_kota'];
	$query_a="select * from ref_kodepos where    kd_kota LIKE '%$kd_kota%' " ;
	}else
	{
	$kd_kota = $_POST['kd_kota'];
	$cariaddress = $_POST['cariaddress'];
	$query_a="select * from ref_kodepos where    kd_kota LIKE '%$kd_kota%'  and ket LIKE '%$cariaddress%' " ;
	}
}
  

			?>
<select name="kodeposId" id="kodeposId"  >
<option value="">[Pilih]</option>
        <?php 		
     		
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['id'];?>" 						
											<?php if (!(strcmp($row_a['id'], $kodeposId))) {echo "SELECTED";} ?>>
											<?php echo $row_a['ket']; ?>|<?php echo $row_a['kdpos']; ?></option>
		<?php   }   ?>
</select>


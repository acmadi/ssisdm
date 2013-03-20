<?php
include "../include/conn.php";
if (isSet($_POST['supplierId'])) 
{  
	$supplierId=$_POST['supplierId'];
	$query_cek = "SELECT kd_kota FROM view_mastersupplier WHERE supplierId = '$supplierId'  ";
    $resultno=mysql_query($query_cek) or (mysql_error()) ;
	$row_no = mysql_fetch_assoc($resultno);
	$kd_kota=$row_no["kd_kota"] ;	
	$query_a="select * from ref_kota where  kd_kota LIKE '$kd_kota%' order by nm_kota";
} else
{
	if (isSet($_POST['carikota'])) 
    {  
	$carikota = $_POST['carikota'];
	$query_a="select * from ref_kota where  nm_kota LIKE '$carikota%' order by nm_kota";
	}else
	{
	$nm_kotaB= $_POST['nm_kotaB'];
	    if ($nm_kotaB<>"")
		{
		$query_cek = "SELECT kd_kota FROM ref_kota order by kd_kota desc  ";
		$resultno=mysql_query($query_cek) or (mysql_error()) ;
		$row_no = mysql_fetch_assoc($resultno);
		$kd_kota=$row_no["kd_kota"] ;	
		$kd_kota=$kd_kota+1;
		         $sql = "insert into  ref_kota set  ";
				$sql .= "kd_kota='$kd_kota',";
				$sql .= "nm_kota='$nm_kotaB'";
				mysql_query($sql) ;
		}		      
	                   $query_a="select * from ref_kota  order by nm_kota";
	}
}

$result_a=mysql_query($query_a) or (mysql_error()) ;

?>
<select  name="kd_kota" id="kd_kota" onChange="getaddress()" >
        <option value="">[Select]</option>
        <?php 		 
		  	
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['kd_kota']?>" <?php if (!(strcmp($row_a['kd_kota'], $kd_kota))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
		<?php   }   ?>
</select>

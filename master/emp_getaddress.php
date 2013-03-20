<?php
include "../include/conn.php";
if (isSet($_POST['peg_id'])) 
{  
	$peg_id=$_POST['peg_id'];
	$query_cek = "SELECT kodeposId,kd_kota FROM view_emp_pegawai WHERE peg_id = '$peg_id'  ";
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
	     if(isSet($_POST['kdposB'])) 
	    {
					$kdposB = $_POST['kdposB'];  
					$ketB = $_POST['ketB'];
					if ($kdposB<>"" and $ketB<>"" )
					{
					
					$sql = "insert into  ref_kodepos set  ";
					$sql .= "kd_kota='$kd_kota',";
					$sql .= "ket='$ketB',";
					$sql .= "kdpos='$kdposB' ";
				    mysql_query($sql) ;
				    $kodeposId = mysql_insert_id();
					$query_a="select * from ref_kodepos where    kd_kota LIKE '%$kd_kota%'   " ;
					}
		}
		else
		{
		$cariaddress = $_POST['cariaddress'];
		$query_a="select * from ref_kodepos where    kd_kota LIKE '%$kd_kota%'  and ket LIKE '%$cariaddress%' " ;
	    }
	}
}
  

			?>
<select name="kodeposId" id="kodeposId"  >
<option value="">[Select]</option>
        <?php 		
     		
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['id'];?>" 						
											<?php if (!(strcmp($row_a['id'], $kodeposId))) {echo "SELECTED";} ?>>
											<?php echo $row_a['ket']; ?>|<?php echo $row_a['kdpos']; ?></option>
		<?php   }   ?>
</select>


<?php
include "../include/conn.php";
include "../include/common.php";
if (isSet($_POST['namal'])) 
{  

	$namal = $_POST['namal'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tgl_lahir=date2datesql($tgl_lahir);
    $namal =addslashes($namal);
	$query_a="select * from peg_personal where  namal ='$namal' and tgl_lahir='$tgl_lahir' order by namal";
    $result_a=mysql_query($query_a) or (mysql_error()) ;
	   if (mysql_num_rows($result_a) == 1)
	{
 while($row_a=mysql_fetch_array($result_a)) 	{
?>
<a href="employee_master_calon.php?peg_id=<?php echo $row_a['peg_id']?>" target="new">Detail</a><br>
<?php   } }else{  ?>
Data Tidak Ada di Database
<?php  } }   ?>
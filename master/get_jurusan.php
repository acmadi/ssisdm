<?php
include "../include/conn.php";
include "../include/conn.php";
if (isSet($_POST['jurusanB'])) 
{  
	$jurusanB = $_POST['jurusanB'];
	
	$sql ="SELECT jurusan_id FROM ref_jurusan  where jurusan = '".$jurusanB."' ";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$jurusan_id=$row ['jurusan_id'];
	if ($jurusan_id=="")
	
	$sqlnew ="INSERT INTO ref_jurusan (jurusan) VALUES ('$jurusanB')";
	mysql_query($sqlnew);
	
}  

$query_a="select * from ref_jurusan  order by jurusan";
$result_a=mysql_query($query_a) or (mysql_error()) ;

?>
<select name="jurusan_id" id="jurusan_id" onKeyPress="return focusNext('thn_mulai', event)" >
<?php
$query_aj="select * from ref_jurusan  order by jurusan_id" ;
?>
<option value="">[Pilih Jurusan]</option>
<?php 		
$result_aj=mysql_query($query_aj) or (mysql_error()) ;
while($row_a1j=mysql_fetch_array($result_aj)) 	{
$jurusan=$row_a1j['jurusan'];
?>
<option value="<?php echo $row_a1j['jurusan_id'];?>"  <?php if (!(strcmp($jurusan, $jurusanB))) {echo "SELECTED";} ?>><?php echo $row_a1j['jurusan']; ?></option>
<?php   }   ?>
</select>
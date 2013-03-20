<?php  
include "../include/conn.php";
if (isSet($_POST['bahasa'])) 
{
$codetrx= $_POST['codetrx'];
$bahasa=$_POST["bahasa"] ;	
$tulis=$_POST["tulis"] ;	
$baca=$_POST["baca"] ;	
$bicara=$_POST["bicara"] ;	
$dengar=$_POST["dengar"] ;	

    if ($bahasa<>"")
	{
        $sql = "insert into  pendidikan_bahasa set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "bahasa='$bahasa',";
		$sql .= "tulis='$tulis',";
		$sql .= "baca='$baca',";
		$sql .= "bicara='$bicara',";
        $sql .= "dengar='$dengar' ";
	
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['bahasa_id'])) 
        {
		$bahasa_id= $_GET['bahasa_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  pendidikan_bahasa where  bahasa_id='$bahasa_id' ";
				$pesan="Hapus Berhasil";
				
			
	            mysql_query($sql) ;
		}else
		{
		$codetrx= $_POST['codetrx'];
		}
		 
}

?><center><font color="FFFFFF"><?php echo $pesan;?></font></center>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8">
<td ><strong><center>bahasa</center></strong></td>
<td ><strong><center>tulis</center></strong></td>
<td ><strong><center>baca</center></strong></td>
<td ><strong><center>bicara</center></strong></td>
<td ><strong><center>dengar</center></strong></td>

<td ><strong><center>Batal</center></strong></td>


<?php 
     $query_cek = "SELECT * FROM pendidikan_bahasa WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$bahasa=$row_a['bahasa'];		
	$tulis=$row_a['tulis'];	if ($tulis==0) {$tulis="Pasif";} else { $tulis="Aktif";}
	$baca=$row_a['baca'];	if ($baca==0) {$baca="Pasif";} else { $baca="Aktif";}
	$bicara=$row_a['bicara'];	if ($bicara==0) {$bicara="Pasif";} else { $bicara="Aktif";}
	$dengar=$row_a['dengar'];	if ($dengar==0) {$dengar="Pasif";} else { $dengar="Aktif";}		
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $bahasa;?> </td>
<td><?php echo $tulis;?> </td>
<td><?php echo $baca;?> </td>
<td><?php echo $bicara;?> </td>
<td><?php echo $dengar;?> </td>

<td><input type="checkbox" value="<?php echo $row_a['bahasa_id']?>" onclick="hapuspendidikanbhs(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

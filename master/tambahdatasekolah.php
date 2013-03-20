<?php  
include "../include/conn.php";
if (isSet($_POST['level_pendidikan'])) 
{
$codetrx= $_POST['codetrx'];
$level_pendidikan=$_POST["level_pendidikan"] ;	
$institusi=$_POST["institusi"] ;	
$lokasi=$_POST["lokasi"] ;	
$jurusan_id=$_POST["jurusan_id"] ;	
$ipk=$_POST["ipk"] ;	
$thn_mulai=$_POST["thn_mulai"] ;
$thn_selesai=$_POST["thn_selesai"] ;
    if ($level_pendidikan<>"")
	{
        $sql = "insert into  pendidikan set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "institusi='$institusi',";
		$sql .= "lokasi='$lokasi',";
		$sql .= "jurusan_id='$jurusan_id',";
		$sql .= "ipk='$ipk',";
		$sql .= "thn_mulai='$thn_mulai',";
		$sql .= "thn_selesai='$thn_selesai',";
        $sql .= "level_pendidikan='$level_pendidikan' ";
	
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['pendidikan_id'])) 
        {
		$pendidikan_id= $_GET['pendidikan_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  pendidikan where  pendidikan_id='$pendidikan_id' ";
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
<td ><strong><center>Tingkat</center></strong></td>
<td ><strong><center>Nama Sekolah</center></strong></td>
<td ><strong><center>Lokasi Sekolah</center></strong></td>
<td ><strong><center>Jurusan</center></strong></td>
<td ><strong><center>Th Mulai</center></strong></td>
<td ><strong><center>Th Selesai</center></strong></td>
<td ><strong><center>IPK/Nilai</center></strong></td>
<td ><strong><center>Batal</center></strong></td>


<?php 
     $query_cek = "SELECT * FROM view_pendidikan WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { $jmldata++;
			
			
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $row_a['level_pendidikandef'];?> </td>
<td><?php echo $row_a['institusi'];?> </td>
<td><?php echo $row_a['lokasi'];?> </td>
<td><?php echo $row_a['jurusan'];?> </td>
<td><?php echo $row_a['thn_mulai'];?> </td>
<td><?php echo $row_a['thn_selesai'];?> </td>
<td><?php echo $row_a['ipk'];?> </td>
<td><input type="checkbox" value="<?php echo $row_a['pendidikan_id']?>" onclick="hapuspendidikanformal(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

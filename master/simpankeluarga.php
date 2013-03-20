<?php  
include "../include/conn.php";
if (isSet($_POST['jenishub_id'])) 
{
$codetrx= $_POST['codetrx'];
$jenishub_id= $_POST['jenishub_id'];
$genderkel= $_POST['genderkel'];
$level_pendidikan_kel= $_POST['level_pendidikan_kel'];
$usia = $_POST['usia'];
$pekerjaan= $_POST['pekerjaan'];
$perusahaan= $_POST['perusahaan'];
$nama_kel= $_POST['nama_kel'];
$nama_kel =addslashes($nama_kel);
        $sql = "insert into  keluarga set  ";
		$sql .= "codetrx='$codetrx',";
        $sql .= "jenishub_id='$jenishub_id',";
		$sql .= "nama='$nama_kel',";
		$sql .= "level_pendidikan_kel='$level_pendidikan_kel',";
		$sql .= "usia='$usia',";
		$sql .= "genderkel='$genderkel',";
		$sql .= "pekerjaan='$pekerjaan',";
   $sql .= "perusahaan='$perusahaan'";
		
        mysql_query($sql) ;
		
}else 
{
        
		if (isSet($_GET['keluarga_id'])) 
        {
		$keluarga_id= $_GET['keluarga_id'];
		$codetrx= $_GET['codetrx'];
		
		
		$sql = "delete from  keluarga where  keluarga_id='$keluarga_id' ";
		mysql_query($sql) ;
	   }else {
	   $codetrx= $_POST['codetrx'];
		}
	
}

?>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr >
<td width="5%">Hubungan</td>
<td width="25%">Nama </td>
<td width="5%">L/P </td>
<td width="5%">Usia</td>
<td width="25%">Pendidikan </td>
<td width="30%">Pekerjaan</td>
<td width="30%">Perusahaan</td>
<td width="3%">Batal</td>

<?php
     $query_cek = "SELECT * FROM view_keluarga WHERE codetrx='$codetrx'   order by usia desc";

     $result_cek = mysql_query($query_cek);

	  while($row_a=mysql_fetch_array($result_cek)) 
			 { 
			 ?>
			 <tr >
			 <td><?php echo $row_a['jenishub']?>&nbsp; </td>
			 <td><?php echo $row_a['nama']?> &nbsp; </td> 
			 <td><?php echo $row_a['genderkel']?>&nbsp; </td>
			 <td><?php echo $row_a['usia']?>&nbsp; </td>
			 <td><?php echo $row_a['level_pendidikan']?>&nbsp; </td>
			 <td><?php echo $row_a['pekerjaan']?>&nbsp; </td>
			 <td><?php echo $row_a['perusahaan']?>&nbsp; </td>
			 <td><input type="checkbox" value="<?php echo $row_a['keluarga_id']?>" onclick="hapuskeluarga(this.value)"> </td>
			
			 </tr>
			<?php 
	
		
			}
       ?>
	   
			 
			 </table>

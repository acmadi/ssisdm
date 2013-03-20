<?php  
include "../include/conn.php";
if (isSet($_POST['jenis'])) 
{
$codetrx= $_POST['codetrx'];
$jenis=$_POST["jenis"] ;	
$tahun=$_POST["tahun"] ;	
$lama=$_POST["lama"] ;	
$nama_lembaga=$_POST["nama_lembaga"] ;	
$biaya=$_POST["biaya"] ;	

    if ($jenis<>"")
	{
        $sql = "insert into  pendidikannonf set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "jenis='$jenis',";
		$sql .= "tahun='$tahun',";
		$sql .= "lama='$lama',";
		$sql .= "nama_lembaga='$nama_lembaga',";
        $sql .= "biaya='$biaya' ";
	
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['pendidikannonf_id'])) 
        {
		$pendidikannonf_id= $_GET['pendidikannonf_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  pendidikannonf where  pendidikannonf_id='$pendidikannonf_id' ";
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
<td ><strong><center>jenis</center></strong></td>
<td ><strong><center>tahun</center></strong></td>
<td ><strong><center>lama</center></strong></td>
<td ><strong><center>nama lembaga</center></strong></td>
<td ><strong><center>biaya</center></strong></td>

<td ><strong><center>Batal</center></strong></td>


<?php 
     $query_cek = "SELECT * FROM pendidikannonf WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { $jmldata++;
			
			
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $row_a['jenis'];?> </td>
<td><?php echo $row_a['tahun'];?> </td>
<td><?php echo $row_a['lama'];?> </td>
<td><?php echo $row_a['nama_lembaga'];?> </td>
<td><?php echo $row_a['biaya'];?> </td>

<td><input type="checkbox" value="<?php echo $row_a['pendidikannonf_id']?>" onclick="hapuspendidikannonformal(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

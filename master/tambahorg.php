<?php  
include "../include/conn.php";
include "../include/common.php";

if (isSet($_POST['nama_organisasi'])) 
{
$codetrx= $_POST['codetrx'];
$nama_organisasi=$_POST["nama_organisasi"] ;	
$jenis_organisasi=$_POST["jenis_organisasi"] ;	
$th_organisasi=$_POST["th_organisasi"] ;	
$jabatan_organisasi=$_POST["jabatan_organisasi"] ;	

    if ($nama_organisasi<>"")
	{
        $sql = "insert into  organisasi set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "nama_organisasi='$nama_organisasi',";
		$sql .= "jenis_organisasi='$jenis_organisasi',";
		$sql .= "th_organisasi='$th_organisasi',";
		$sql .= "jabatan_organisasi='$jabatan_organisasi' ";
      
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['organisasi_id'])) 
        {
		$organisasi_id= $_GET['organisasi_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  organisasi where  organisasi_id='$organisasi_id' ";
				$pesan="Hapus Berhasil";
				
			
	            mysql_query($sql) ;
		}else
		{
		$codetrx= $_POST['codetrx'];
		}
		 
}

?>
<center><font color="000000"><?php echo $pesan;?></font></center>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8"><td ><strong>nama organisasi</strong></td><td ><strong>jenis organisasi </strong></td><td ><strong>Th organisasi </strong></td><td ><strong>Jabatan</strong></td><td ><strong>Batal</strong></td></tr>

<?php 
     $query_cek = "SELECT * FROM organisasi WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$nama_organisasi=$row_a['nama_organisasi'];
	$jenis_organisasi=$row_a['jenis_organisasi'];
	$th_organisasi=$row_a['th_organisasi'];
	$jabatan_organisasi=$row_a['jabatan_organisasi'];

	
?>
<tr ><td ><?php echo $nama_organisasi;?></td><td ><?php echo $jenis_organisasi;?></td><td ><?php echo $th_organisasi;?></td><td ><?php echo $jabatan_organisasi;?></td>
<td><input type="checkbox" value="<?php echo $row_a['organisasi_id']?>" onclick="hapusorg(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

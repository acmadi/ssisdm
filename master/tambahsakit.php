<?php  
include "../include/conn.php";
include "../include/common.php";

if (isSet($_POST['th_sakit'])) 
{
$codetrx= $_POST['codetrx'];
$th_sakit=$_POST["th_sakit"] ;	
$lama_sakit=$_POST["lama_sakit"] ;	
$penyakit=$_POST["penyakit"] ;	
$rs=$_POST["rs"] ;	

    if ($th_sakit<>"")
	{
        $sql = "insert into  sakit set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "th_sakit='$th_sakit',";
		$sql .= "lama_sakit='$lama_sakit',";
		$sql .= "penyakit='$penyakit',";
		$sql .= "rs='$rs' ";
      
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['sakit_id'])) 
        {
		$sakit_id= $_GET['sakit_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  sakit where  sakit_id='$sakit_id' ";
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
<tr bgcolor="#D8FFA8"><td ><strong>Th Sakit</strong></td>
<td ><strong>lama sakit</strong></td>
<td ><strong>penyakit</strong></td>
<td ><strong>RS</strong></td>
<td ><strong>Batal</strong></td></tr>

<?php 
     $query_cek = "SELECT * FROM sakit WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$th_sakit=$row_a['th_sakit'];
	$lama_sakit=$row_a['lama_sakit'];
	$penyakit=$row_a['penyakit'];
	$rs=$row_a['rs'];

	
?>
<tr ><td ><?php echo $th_sakit;?></td>
<td ><?php echo $lama_sakit;?></td>
<td ><?php echo $penyakit;?></td>
<td ><?php echo $rs;?></td>
<td><input type="checkbox" value="<?php echo $row_a['sakit_id']?>" onclick="hapussakit(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

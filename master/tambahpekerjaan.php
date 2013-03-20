<?php  
include "../include/conn.php";
include "../include/common.php";

if (isSet($_POST['perusahaan_riwayat'])) 
{
$codetrx= $_POST['codetrx'];
$perusahaan_riwayat=$_POST["perusahaan_riwayat"] ;	
$alamatp=$_POST["alamatp"] ;	
$telpp=$_POST["telpp"] ;	
$bidang_usaha=$_POST["bidang_usaha"] ;	
$type_usaha=$_POST["type_usaha"] ;	
$jabatan_terakhir=$_POST["jabatan_terakhir"] ;	
$alasan_keluar=$_POST["alasan_keluar"] ;	
$tgl_masuk=$_POST["tgl_masuk"] ;	
$tgl_masuk=date2datesql($tgl_masuk);
$tgl_keluar=$_POST["tgl_keluar"] ;	
$tgl_keluar=date2datesql($tgl_keluar);
    if ($perusahaan_riwayat<>"")
	{
        $sql = "insert into  pengalamankerja set  ";
		$sql .= "codetrx='$codetrx',";
		$sql .= "perusahaan_riwayat='$perusahaan_riwayat',";
		$sql .= "alamatp='$alamatp',";
		$sql .= "telpp='$telpp',";
		$sql .= "bidang_usaha='$bidang_usaha',";
        $sql .= "type_usaha='$type_usaha', ";
	    $sql .= "jabatan_terakhir='$jabatan_terakhir', ";
		$sql .= "tgl_masuk='$tgl_masuk', ";
		$sql .= "tgl_keluar='$tgl_keluar', ";
		$sql .= "jabatan_akhir='$jabatan_akhir', ";
		$sql .= "alasan_keluar='$alasan_keluar'  ";
        mysql_query($sql) ;
		$pesan="Tambah Berhasil";
	}
}else 
{
        
		if (isSet($_GET['pengalaman_kerja_id'])) 
        {
		$pengalaman_kerja_id= $_GET['pengalaman_kerja_id'];
		$codetrx= $_GET['codetrx'];	
		
				$sql = "delete from  pengalamankerja where  pengalaman_kerja_id='$pengalaman_kerja_id' ";
				$pesan="Hapus Berhasil";
				
			
	            mysql_query($sql) ;
		}else
		{
		$codetrx= $_POST['codetrx'];
		}
		 
}

?>
<center><font color="FFFFFF"><?php echo $pesan;?></font></center>
<?php 
     $query_cek = "SELECT * FROM pengalamankerja WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$perusahaan_riwayat=$row_a['perusahaan_riwayat'];
	$alamatp=$row_a['alamatp'];
	$telpp=$row_a['telpp'];
	$bidang_usaha=$row_a['bidang_usaha'];
	$type_usaha=$row_a['type_usaha'];
	$jabatan_terakhir=$row_a['jabatan_terakhir'];
	$tgl_masuk=$row_a['tgl_masuk'];
	$tgl_masuk=datedatesql($tgl_masuk);
	$tgl_keluar=$row_a['tgl_keluar'];
	$tgl_keluar=datedatesql($tgl_keluar);
	$jabatan_akhir=$row_a['jabatan_akhir'];
	$alasan_keluar=$row_a['alasan_keluar'];
	
?>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8"><td ><strong>perusahaan</strong></td><td ><?php echo $perusahaan_riwayat;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>alamat</strong></td><td ><?php echo $alamatp;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>Telepon</strong></td><td ><?php echo $telpp;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>bidang usaha</strong></td><td ><?php echo $bidang_usaha;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>type usaha</strong></td><td ><?php echo $type_usaha;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>jabatan terakhir</strong></td><td ><?php echo $jabatan_terakhir;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>tgl masuk</strong></td><td ><?php echo $tgl_masuk;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>tgl keluar</strong></td><td ><?php echo $tgl_keluar;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>jabatan akhir</strong></td><td ><?php echo $jabatan_akhir;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>alasan keluar</strong></td><td ><?php echo $alasan_keluar;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>Batal</strong></td>
<td><input type="checkbox" value="<?php echo $row_a['pengalaman_kerja_id']?>" onclick="hapuspekerjaan(this.value)"> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

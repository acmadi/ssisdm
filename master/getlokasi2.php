<?php
include "../include/conn.php";
  if(isSet($_POST['lokasi'])) 
	{
      $lokasi=$_POST["lokasi"];
	  
	}else
	{
	  $lokasi=$_POST["lokasi2"];
	  $lokasi_kerja=$_POST["lokasi_kerja"];
	  $alamat=$_POST["alamat"];
	  $aktif=$_POST["aktif"];
	           $sqlnew ="INSERT INTO lokasi_kerja (lokasi,lokasi_kerja,alamat,level,aktif) VALUES 
				('$lokasi','$lokasi_kerja','$alamat','2','$aktif')";
				$qrnew = mysql_query($sqlnew);
				
				if($qrnew)
				{   
					$ppesan="Berhasil simpan  ".$lokasi_kerja."   " ;
			    }else
		        {    $ppesan="Gagal simpan  ".$lokasi_kerja."   " ;
			    }
	}
$q=substr($lokasi,0,2);
$sql ="SELECT * FROM lokasi_kerja  where left(lokasi,2) = '".$q."' and Level=2 order by lokasi";
$result = mysql_query($sql);

?>
<center><?php echo $pesan;?></center>
<table  border="1" cellspacing="1" cellpadding="1">
<tr>
<td>kode Lokasi</td>
<td>Lokasi</td>
<td>Alamat</td>
<td>Status</td>
</tr>
<?php
if (mysql_num_rows($result) >=1)
{
while($row = mysql_fetch_array($result))
{  
$aktif=$row['aktif'];
						if ($aktif==1)
						{
						$status="Aktif";
						}else
						{
						$status="Tidak Aktif";
						}
?> 

<tr><td><?php echo $row['lokasi'];?></td>
<td><?php echo $row['lokasi_kerja'];?></td>
<td><?php echo $row['alamat'];?></td>
<td ><?php echo $status; ?></td>	
</tr>

<?php
$tambah=substr($row['lokasi'],-2)+1;

}
}else
{
$tambah=1;
}
if ($tambah<10)
{
$lokasibaru=$q."0".$tambah;
} else
{
$lokasibaru=$q.$tambah;
}
?>
<tr>
<td><input type="text" name="lokasi2" id="lokasi2" value="<?php echo $lokasibaru;?>" readonly> </td>
<td><input type="text" name="lokasi_kerja" id="lokasi_kerja" size="30" maxlengtg="250"><font color="red">*</font></td>
<td><input type="text" name="alamat" id="alamat" size="30" maxlengtg="250"><font color="red">*</font></td>
 <td ><select name="aktif" id="aktif" >
<option value="1" >Ya</option>
<option value="0">Tidak</option>
</select><font color="red">*</font>
			</td>  
</tr>
</table>

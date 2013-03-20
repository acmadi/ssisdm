<?php
include "../include/conn.php";
$lokasi=$_POST["lokasi"];
$q1=$lokasi;
if ($q1<>"")
{
 $q=substr($lokasi,0,2);
$sql ="SELECT * FROM lokasi_kerja  where left(lokasi,2) like '%".$q."%' and Level=2 order by lokasi";
$result = mysql_query($sql);?>
<tr><td>kode Lokasi</td><td>Lokasi</td><td>Alamat</td></tr>
<table width="700" border="1" cellspacing="0" cellpadding="0">
<?php
while($row = mysql_fetch_array($result))
{  
?> 

<tr><td><?php echo $row['lokasi'];?></td><td><?php echo $row['lokasi_kerja'];?></td></tr>


<?php
$tambah=substr($row['lokasi'],-2)+1;
}
if ($tambah<10)
{
$lokasibaru=$q1."0".$tambah;
} else
{
$lokasibaru=$q1.$tambah;
}
?>
<tr><td><?php echo $lokasibaru;?>
<input type="hidden" name="lokasi2" id="lokasi2" value="<?php echo $Kodelokasi;?>"> </td>
<td><input type="text" name="lokasi_kerja" id="lokasi_kerja" size="30" maxlengtg="250"></td>
<td><input type="text" name="alamat" id="alamat" size="30" maxlengtg="250"></td>
</tr>





</table>
<?php
}
?>
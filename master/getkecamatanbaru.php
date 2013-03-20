<?php
include "../include/conn.php";
  if(isSet($_GET['kabupaten'])) 
	{
      $kabupaten=$_GET["kabupaten"];
	  $q=substr($kabupaten,0,4);
	}else
	{
	  $kode3=$_POST["kode3"];
	  $nm_kota=$_POST["nm_kota"];
	  $kabupaten=$_POST["kabupaten"];
	  $q=substr($kabupaten,0,4);
	           $sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES 
				('$kode3','$nm_kota','3')";
				$qrnew = mysql_query($sqlnew);
				
				if($qrnew)
				{   
					$ppesan="Berhasil simpan  ".$nm_kota."   " ;
			    }else
		        {    $ppesan="Gagal simpan  ".$nm_kota."   " ;
			    }
	}

$sql ="SELECT * FROM ref_kota  where left(kode,4) = '".$q."' and tingkat=3 order by kode";
$result = mysql_query($sql);

?>
<center><?php echo $pesan;?></center>
<table  border="1" cellspacing="1" cellpadding="1">
<tr>
<td>kode</td>
<td>Kecamatan</td>

</tr>
<?php
if (mysql_num_rows($result) >=1)
{
while($row = mysql_fetch_array($result))
{  

?> 

<tr><td><?php echo $row['kode'];?></td>
<td><?php echo $row['nm_kota'];?></td>

</tr>

<?php
$tambah=substr($row['kode'],4,2)+1;

}
}else
{
$tambah=1;
}
if ($tambah<10)
{
$lokasibaru=$q."0".$tambah."00";
} else
{
$lokasibaru=$q.$tambah."00";
}
?>
<tr>
<td><input type="text" name="kode3" id="kode3" value="<?php echo $lokasibaru;?>" readonly> </td>
<td><input type="text" name="nm_kota" id="nm_kota" size="30" ><font color="red">*</font></td>

</tr>
</table>

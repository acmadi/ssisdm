<?php
include "../include/conn.php";
  if(isSet($_POST['propinsi'])) 
	{
      $propinsi=$_POST["propinsi"];
	  $q=substr($propinsi,0,2);
	}else
	{
	  $kode2=$_POST["kode2"];
	  $nm_kota=$_POST["nm_kota"];
	  $q=substr($kode2,0,2);
	           $sqlnew ="INSERT INTO ref_kota (kode,nm_kota,tingkat) VALUES 
				('$kode2','$nm_kota','2')";
				$qrnew = mysql_query($sqlnew);
				
				if($qrnew)
				{   
					$ppesan="Berhasil simpan  ".$nm_kota."   " ;
			    }else
		        {    $ppesan="Gagal simpan  ".$nm_kota."   " ;
			    }
	}

$sql ="SELECT * FROM ref_kota  where left(kode,2) = '".$q."' and tingkat=2 order by kode";
$result = mysql_query($sql);

?>
<center><?php echo $pesan;?></center>
<table  border="1" cellspacing="1" cellpadding="1">
<tr>
<td>kode</td>
<td>kota</td>

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
$tambah=substr($row['kode'],2,2)+1;

}
}else
{
$tambah=1;
}
if ($tambah<10)
{
$lokasibaru=$q."0".$tambah."0000";
} else
{
$lokasibaru=$q.$tambah."0000";
}
?>
<tr>
<td><input type="text" name="kode2" id="kode2" value="<?php echo $lokasibaru;?>" readonly> </td>
<td><input type="text" name="nm_kota" id="nm_kota" size="30" ><font color="red">*</font></td>

</tr>
</table>

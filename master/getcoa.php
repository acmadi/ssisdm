<?php
include "../include/conn.php";
$Coa=$_POST["Coa"];
$q1=$Coa;
if ($Coa<>"")
{
 $q=substr($Coa,0,1);
$sql ="SELECT KodeCoa,NamaCoa FROM acc_tablecoa  where left(KodeCoa,1) like '%".$q."%' and Level=2 order by KodeCoa";

$result = mysql_query($sql);?>
<table width="700" border="1" cellspacing="0" cellpadding="0">
<?php
while($row = mysql_fetch_array($result))
{  
?> 

<tr><td><?php echo $row['KodeCoa'];?></td><td><?php echo $row['NamaCoa'];?></td></tr>


<?php
$tambah=substr($row['KodeCoa'],1,1)+1;

}
if ($tambah<10)
{
$kodecoabaru=substr($q1,0,1).$tambah.substr($q1,2,5)
?>
<tr><td><?php echo $kodecoabaru;?><input type="hidden" name="KodeCoa" value="<?php echo $kodecoabaru;?>"> </td><td><input type="text" name="NamaCoa" size="100" maxlengtg="250"></td></tr>
<?php }else
{?>
<font color="red">Sorry.Your account is Limited</font>
<?php }?>


</table>
<?php
}
?>
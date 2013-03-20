<?php
include "../include/conn.php";
$Coa=$_POST["Coa"];
$KodeCoa=$_POST["KodeCoa"];
$NamaCoa=$_POST["NamaCoa"];



          $sqlcek = "SELECT KodeCoa FROM acc_tablecoa   WHERE KodeCoa='$KodeCoa'";
		  $qr= mysql_query($sqlcek);
		  if(mysql_num_rows($qr) == "0")
		{
		    	
			 
			
				$sqlnew ="INSERT INTO acc_tablecoa (KodeCoa,NamaCoa,Level) VALUES 
				('$KodeCoa','$NamaCoa','2')";
				$qrnew = mysql_query($sqlnew);
				
				if($qrnew)
				{   
					$ppesan="Sucess ".$KodeCoa."   " ;
			    }else
		        {    $ppesan="Fail ".$KodeCoa." " ;
			    }
	

        }    else
		{    $ppesan="Sory ".$KodeCoa." exist" ; }
   // }
?>
 <?php 
	 if (strlen($ppesan)>1) 
{?>
	 <center> <font color="red"><?php echo  $ppesan;?></font></center> 
      
	 <?php }?>
 
<table width="700" border="1" cellspacing="0" cellpadding="0">

<?php
$q1=substr($Coa,0,1);
$sql ="SELECT KodeCoa,NamaCoa FROM acc_tablecoa  where left(KodeCoa,1) like '%".$q1."%' and Level=2 order by KodeCoa";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{  
?> 

<tr><td><?php echo $row['KodeCoa'];?></td><td><?php echo $row['NamaCoa'];?></td></tr>


<?php


$tambah=substr($row['KodeCoa'],1,1)+1;

}
if ($tambah<10)
{
$kodecoabaru=substr($q1,0,1).$tambah.substr($Coa,2,5)
?>
<tr><td><?php echo $kodecoabaru;?><input type="hidden" name="KodeCoa" value="<?php echo $kodecoabaru;?>"> </td><td><input type="text" name="NamaCoa" size="100" maxlengtg="250"></td></tr>
<?php }else
{?>
<font color=red>Sory coa limited</font>
<?php }?>
</table>

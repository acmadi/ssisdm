<?php
include "atas.php";

?>
<script>    
$(document).ready(function(){
   cekgrafik();
  cekgrafik2();
  cekgrafik3();
});

function cekgrafik()
{
  
 
   $.ajax({
    type:"POST",
    url:"getgrafik.php",    
  data: '' ,          
    success: function (html){                 
      $('#tampilkangrafik').html(html);
    }  
   });
}
function cekgrafik2()
{
  
 
   $.ajax({
    type:"POST",
    url:"getgrafik2.php",    
  data: '' ,          
    success: function (html){                 
      $('#tampilkangrafik2').html(html);
    }  
   });
}

function cekgrafik3()
{
  
 
   $.ajax({
    type:"POST",
    url:"getgrafik3.php",    
  data: '' ,          
    success: function (html){                 
      $('#tampilkangrafik3').html(html);
    }  
   });
}
</script>
</head>

<form id="formb" name="formb"  >
	<center>
		<table   width="100%" border="1">
	
	 	
        <tr >
    	<td >
		<div id="tampilkangrafik"></div>
		</td>
        </tr>  
		
	 	
        <tr >
    	<td >
		<div id="tampilkangrafik2"></div>
		</td>
        </tr>  
		  <tr >
    	<td >
		<div id="tampilkangrafik3"></div>
		</td>
        </tr> 
		</table>
	</center>		
<center>

		 <?php 	
            $tglsekarang=date('Y-m-d');		 
     		$query_a="select * from view_emp_pegawai where tgl_akhir <='$tglsekarang'  and perpanjang='Y' " ;
			
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
			$npp=$row_a['npp'];
			$peg_id2=$row_a['peg_id2']; 
			$peg_id=$row_a['peg_id']; 
			$kontrak_id=$row_a['kontrak_id'];
			$kontrak_ke=$row_a['kontrak_ke'];
			$periode_kontrak=$row_a['periode_kontrak_trx'];
			$jabatan_id=$row_a['jabatan_id'];
			$lokasi_id2=$row_a['lokasi_id2'];
			$unit_bisnis_id=$row_a['unit_bisnis_id'];
			$pangkat_id=$row_a['pangkat_id'];
			$tgl_akhir=$row_a['tgl_akhir'];
			
$tgl_awal1=add_datetgl(datedatesql($tgl_akhir),1);
$tgl_akhir1=add_date($tgl_awal1,$periode_kontrak);
    $thsekarang=date('Y');	
    $query_cek = "SELECT nokontrak_SK FROM peg_dinas WHERE year(tgl_awal) = '$thsekarang' and aktif=1 order by nokontrak_SK desc limit 1 ";
   
	$resultno=mysql_query($query_cek) or (mysql_error()) ;
	$row_no = mysql_fetch_assoc($resultno);
	$nokontrak=substr($row_no["nokontrak_SK"],-4) ;	
	if (empty($nokontrak)) $nokontrak=0;
	$nokontrak=$nokontrak+1;
	if ($nokontrak<10)
		{$nokontrak="000".$nokontrak;}
	elseif ($nokontrak<100)
		{$nokontrak="00".$nokontrak;}
	elseif ($nokontrak<1000)
		{$nokontrak="0".$nokontrak;}
	else
		 {$nokontrak=$nokontrak;}
	$nokontrak="SDM".$thsekarang.$nokontrak;
	
	mysql_query("update  peg_dinas set aktif=0 WHERE peg_id2 = '$peg_id2'  ");
	$query_cek = "SELECT kontrak_ke FROM peg_dinas WHERE peg_id2 = '$peg_id2' order by kontrak_ke desc limit 1 ";
    $resultno=mysql_query($query_cek) or (mysql_error()) ;
	$row_no = mysql_fetch_assoc($resultno);
	$kontrak_ke=$row_no["kontrak_ke"] ;	
	if (empty($kontrak_ke)) $kontrak_ke=0;
	$kontrak_ke=$kontrak_ke+1;
	$tgl_awal1=date2datesql($tgl_awal1);
	$tgl_akhir1=date2datesql($tgl_akhir1);
	$sql2 = "insert into  peg_dinas set  ";
	$sql2 .= "peg_id='$peg_id',"; 
	$sql2 .= "npp='$npp',"; 
	$sql2 .= "nokontrak_SK='$nokontrak',"; 
	$sql2 .= "periode_kontrak_trx='$periode_kontrak',";
	$sql2 .= "kontrak_ke='$kontrak_ke',";  
	$sql2 .= "jabatan_id='$jabatan_id',";  
	$sql2 .= "unit_bisnis_id='$unit_bisnis_id',";  
	$sql2 .= "lokasi_id2='$lokasi_id2',";  
	$sql2 .= "pangkat_id='$pangkat_id',";  
	$sql2 .= "tgl_awal='$tgl_awal1',";
	$sql2 .= "tgl_akhir='$tgl_akhir1' ";
	//echo $sql2;
	mysql_query($sql2) ;
	}							
		?>		

</form>
															
<?php
include "bawah.php";
?>
	

<?php
include "../include/conn.php";
include "../include/common.php";
if ($_POST['tgl_awal']<>"")
{
$tgl_awal=$_POST['tgl_awal'];
$periode_kontrak=$_POST['periode_kontrak'];
$tglawal1=substr($tgl_awal,-4)."-".substr($tgl_awal,3,2)."-".substr($tgl_awal,0,2);
$tgl_akhir=add_date($tglawal1,$periode_kontrak);
//$tgl_akhir = date('d-M-Y', strtotime(date("Y-m-d", strtotime($tgl_awal)) . " +".$periode_kontrak." month"));
}

if ($_POST['peg_id']<>"")
{
$peg_id=$_POST['peg_id'];
} 
if($peg_id){
	   $query = mysql_query('SELECT * FROM view_emp_pegawai WHERE peg_id = "'.$peg_id.'" order by kontrak_id desc limit 1');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		  $tgl_akhir= datedatesql(@$data->tgl_akhir);
	
		  }
}
?>
<input type="text" name="tgl_akhir" id="tgl_akhir"    size="10" value="<?php echo $tgl_akhir;?>"/><font color="red">*</font></td>			

  
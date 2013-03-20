<?php
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$namapt=$_SESSION['namapt'];
$file_js 	= "../plugin/table/all.js";
$file_css 	= "../plugin/table/all.css";
$nama=$_SESSION['nama'];
$otoritas_sdmpusat=$_SESSION['otoritas_sdmpusat'] ;
$unit_bisnis_id=$_SESSION['unit_bisnis_id'] ;
$lokasi_id=$_SESSION['lokasi_id'] ;
?>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../script.js"></script>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<script type="text/javascript">
$('document').ready(function(){
	updatestatus();
	scrollalert();
});
function updatestatus(){
	//Show number of loaded items
	var totalItems=$('#content p').length;
	$('#status').text('Loaded '+totalItems+' Items');
}
function scrollalert(){
	var scrolltop=$('#scrollbox').attr('scrollTop');
	var scrollheight=$('#scrollbox').attr('scrollHeight');
	var windowheight=$('#scrollbox').attr('clientHeight');
	var scrolloffset=20;
	if(scrolltop>=(scrollheight-(windowheight+scrolloffset)))
	{
		//fetch new items
		$('#status').text('Loading more items...');
		$.get('new-items.html', '', function(newitems){
			$('#content').append(newitems);
			updatestatus();
		});
	}
	setTimeout('scrollalert();', 1500);
}
</script>
<style type="text/css" >
	#container{ width:1100px; margin:0px auto; padding:40px 0; }
	#scrollbox{ width:1100px; height:500px;  overflow:auto; overflow-x:auto; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>
<div id="sub-header">		
	<div class="container">				
		<div class="grid grid_24">
			<h2>Data  Pegawai Kontrak</h2>
		</div> <!-- .grid -->			
	</div> <!-- .container -->
</div> <!-- #sub-header -->
<form method="post" action="employee_kontrak.php" id="contactform">
	<table align="center">
	<?php
		if (isset($_POST['unit_bisnis_id'])) 
						{$unit_bisnis_idcari=$_POST['unit_bisnis_id'];}
							
						?>
						<tr>
							<td>Unit Bisnis</td><td>
									<select name="unit_bisnis_id" >
									<option value="">Semua</option>
										<?php
										 $query_a="select * from unit_bisnis where  aktif=1 order by unit_bisnis_id  " ;
										 $result_a=mysql_query($query_a) or (mysql_error()) ;
											while($row_a=mysql_fetch_array($result_a)) 	{?>
										<option value="<?php echo $row_a['unit_bisnis_id'];?>"					
																<?php if (!(strcmp($row_a['unit_bisnis_id'], $unit_bisnis_idcari))) {echo "SELECTED";} ?>>
																<?php echo $row_a['unit_bisnis']; ?></option>
										<?php  
										   }
										?>
									</select>
									
							
							</td>
						</tr>
			
					<tr>
							<td colspan="2"><input type="submit" 	name="cari" value="cari" /></td>	
					</table>
</form>					
	<div id="scrollbox" >
		<div id="content" >
			<table class="data display datatable" width="200%">
	           <thead>
		                        <tr>
					           <th >Nama  </th>
							   <th>Alamat Asal</th>
								<th>Alamat Sekarang</th>
								<th>Tempat Lahir </th>
								<th>Tanggal Lahir	 </th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Status Pernikahan</th>
							    <th>Npp</th>
								 <th>Pangkat</th>
								<th>Unit Bisnis </th>
								<th>Lokasi Kerja </th>
								<th>No Kontrak </th>
								<th>Kontrak ke </th>
								<th>Tgl Awal</th>
								<th>Tgl Akhir </th>
						         <th>Photo</th>
							    <th>Detail</th>
							
								
								
		</tr>
	</thead>
	<tbody>				
						<?php
					
						
						$view = mysql_query("SELECT * FROM view_emp_pegawai where
                         unit_bisnis_id		LIKE '%$unit_bisnis_idcari%' 
					    and status_kerja_id=5
						");
						while($data=mysql_fetch_array($view))
						{ 
						  $kode_asal=$data['kode_asal'];
						  $query = mysql_query('SELECT nm_kota as propinsiasal FROM ref_kota WHERE left(kode,2) = "'.substr($kode_asal,0,2).'" ');
	                      $data2 = mysql_fetch_object($query);
		                  $propinsiasal=@$data2->propinsiasal;
						  $query3 = mysql_query('SELECT nm_kota as kabasal FROM ref_kota WHERE left(kode,4) = "'.substr($kode_asal,0,4).'" ');
	                      $data3 = mysql_fetch_object($query3);
		                  $kabasal=@$data3->kabasal;
						  $query4 = mysql_query('SELECT nm_kota as kecasal FROM ref_kota WHERE left(kode,6) = "'.substr($kode_asal,0,6).'" ');
	                      $data4 = mysql_fetch_object($query4);
		                  $kecasal=@$data4->kecasal;
						  
						  $kode_sekarang=$data['kode_sekarang'];
						  $query = mysql_query('SELECT nm_kota as propisekarang FROM ref_kota WHERE left(kode,2) = "'.substr($kode_sekarang,0,2).'" ');
	                      $data2 = mysql_fetch_object($query);
		                  $propisekarang=@$data2->propisekarang;
						  $query3 = mysql_query('SELECT nm_kota as kabsekarang FROM ref_kota WHERE left(kode,4) = "'.substr($kode_sekarang,0,4).'" ');
	                      $data3 = mysql_fetch_object($query3);
		                  $kabsekarang=@$data3->kabsekarang;
						  $query4 = mysql_query('SELECT nm_kota as kecekarang FROM ref_kota WHERE left(kode,6) = "'.substr($kode_sekarang,0,6).'" ');
	                      $data4 = mysql_fetch_object($query4);
		                  $kecekarang=@$data4->kecekarang;
						//view ?>
		<tr>
				              <td align="left"><?php echo $data['namal'] ?></td>
							  	<td align="left"><?php echo $data['alamat_asal'] ?>
								&nbsp;<?php echo $data['nm_kota_asal'] ?>
								&nbsp;<?php echo $kecasal; ?>
								&nbsp;<?php echo $kabasal; ?>
								&nbsp;<?php echo $propinsiasal; ?> </td>
				               <td align="left"><?php echo $data['alamat_sekarang'] ?>
								&nbsp;<?php echo $data['nm_kota_asal'] ?>
								&nbsp;<?php echo $kecekarang; ?>
								&nbsp;<?php echo $kabsekarang; ?>
								&nbsp;<?php echo $propisekarang; ?> </td>
         						<td align="left"><?php echo $data['tempat_lahir'] ?></td>
         						<td align="left"><?php echo datedatesql($data['tgl_lahir']) ?></td>
								<td align="left"><?php echo $data['gender'] ?></td>
							
							
								<td align="left"><?php echo $data['agama'] ?></td>
							
								<td align="left"><?php echo $data['telp'] ?></td>
								<td align="left"><?php echo $data['email'] ?></td>
								<td align="left"><?php echo $data['status_nikah'] ?></td>
				
								<td align="left"><?php echo $data['npp'] ?></td>
						        <td align="left"><?php echo $data['pangkat'] ?></td>
								<td align="left"><?php echo $data['unit_bisnis'] ?></td>
								<td align="left"><?php echo $data['lokasi_kerja'] ?></td>
								<td align="left"><?php echo $data['nokontrak_SK'] ?></td>
							   <td align="left"><?php echo $data['kontrak_ke'] ?></td>
								<td align="left"><?php echo datedatesql($data['tgl_awal']) ?></td>
							   	<td align="left"><?php echo datedatesql($data['tgl_akhir']) ?></td>
							
								
								<td align="left"><img src="../images/photo/<?php echo $data['photo'] ?>" width="100" height="100"></td>
								<td align="left">
								<a href="employee_master_peg1.php?width=770&height=430&peg_id=<?php echo $data['peg_id'];?>&acc=Edit" ><img src="../images/ico/page_edit.png" width="10" height="10">Detail</a>
								</td>
								
								
								
							
								
		</tr>								
						<?php } ?>			
	</tbody>
   </table>
		</div>
	</div>
	


<img src="../images/excel.jpg">
<a href="employee_master_excel.php" title="employee Excell">Export</a>
</img>
<script src="<?php echo $file_js;?>"></script>
<script type="text/javascript">	
$(function () { 	
	ReadyMade.init ({ theme: '' });	
});
</script>
 

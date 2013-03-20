<?php
$posisi=2;
include "../atas.php";
$file_css 	= "../plugin/table/all.css";
$nama=$_SESSION['nama'];
?>
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
			<h2>Data Calon Karyawan </h2>
		</div> <!-- .grid -->			
	</div> <!-- .container -->
</div> <!-- #sub-header -->
<form method="post" action="employee_master.php" id="contactform">
	<table align="center">
	<?php
		if (isset($_POST['ub'])) 
						{$ub=$_POST['ub'];}
							if (isset($_POST['st'])) 
						{$st=$_POST['st'];}
						?>
						<tr>
							<td>Unit Bisnis</td><td>
									<select name="ub" >
									<option value="">Semua</option>
										<?php
										 $query_a="select * from unit_bisnis where  aktif=1 order by unit_bisnis_id  " ;
										 $result_a=mysql_query($query_a) or (mysql_error()) ;
											while($row_a=mysql_fetch_array($result_a)) 	{?>
										<option value="<?php echo $row_a['unit_bisnis'];?>"					
																<?php if (!(strcmp($row_a['unit_bisnis'], $ub))) {echo "SELECTED";} ?>>
																<?php echo $row_a['unit_bisnis']; ?></option>
										<?php  
										   }
										?>
									</select>
									
							
							</td>
						</tr>
						<tr>
							<td>Status Pegawai</td><td>
									<select name="st" >
									<option value="">Semua</option>
										<?php
										 $query_a="select * from status_kerja where  aktif=1 order by status_kerja_id  " ;
										 $result_a=mysql_query($query_a) or (mysql_error()) ;
											while($row_a=mysql_fetch_array($result_a)) 	{?>
										<option value="<?php echo $row_a['status_kerja'];?>"						
																<?php if (!(strcmp($row_a['status_kerja'], $st))) {echo "SELECTED";} ?>>
																<?php echo $row_a['status_kerja']; ?></option>
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
			<table class="data display datatable" width="2000">
	           <thead>
		<tr>
					           <th>Nama  </th>
							   <th>Alamat </th>
								<th>Kota/Kode Pos</th>
								<th>Tempat Lahir </th>
								<th>Tanggal Lahir	 </th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								
								<th>Telepon</th>
								<th>Email</th>
								<th>Status Pernikahan</th>
							
								<th>Keterangan</th>
								<th>NPP</th>
								<th>Jabatan</th>
								
								<th>Pangkat</th>
								<th>Unit Bisnis/Departemen</th>
								<th>Lokasi Kerja</th>
								<th>Status</th>
								<th>Kontrak Ke</th>
								<th>No Kontrak</th>
								<th>Tgl Awal</th>
								<th>Tgl Akhir</th>
								
								<th>Photo</th>
							    <th>Detail</th>
								<th>Edit</th>
								
		</tr>
	</thead>
	<tbody>				
						<?php
					
						
						$view = mysql_query("SELECT * FROM view_emp_pegawai where (kontrakaktif<>0 or isNull(kontrakaktif)=true)
                        and (unit_bisnis		LIKE '%$ub%' and status_kerja		LIKE '%$st%' )
						");
						while($data=mysql_fetch_array($view))
						{ //view ?>
		<tr>
				              <td align="left"><?php echo $data['nama'] ?></td>
							  	<td align="left"><?php echo $data['alamat_asal'] ?></td>
								<td align="left"><?php echo $data['nm_kota'] ?>-<?php echo $data['kdpos'] ?> </td>
         						<td align="left"><?php echo $data['tempat_lahir'] ?></td>
         						<td align="left"><?php echo datedatesql($data['tgl_lahir']) ?></td>
								<td align="left"><?php echo $data['gender'] ?></td>
							
							
								<td align="left"><?php echo $data['agama'] ?></td>
							
								<td align="left"><?php echo $data['telp'] ?></td>
								<td align="left"><?php echo $data['email'] ?></td>
								<td align="left"><?php echo $data['status_nikah'] ?></td>
				
								<td align="left"><?php echo $data['narasi'] ?></td>
								<td align="left"><?php echo $data['npp'] ?></td>
								<td align="left"><?php echo $data['jabatan'] ?></td>
								<td align="left"><?php echo $data['pangkat'] ?></td>
								<td align="left"><?php echo $data['unit_bisnis'] ?></td>
								<td align="left"><?php echo $data['lokasi_kerja'] ?></td>
								<td align="left"><?php echo $data['status_kerja'] ?></td>
									<td align="left"><?php echo $data['kontrak_ke'] ?></td>
								<td align="left"><?php echo $data['nokontrak'] ?></td>
								<td align="left"><?php echo datedatesql($data['tgl_awal']) ?></td>
								<td align="left"><?php echo datedatesql($data['tgl_akhir']) ?></td>
								
								<td align="left"><img src="../images/photo/<?php echo $data['photo'] ?>" width="100" height="100"></td>
								<td align="left">
								<a href="employee_master_det.php?width=770&height=430&peg_id=<?php echo $data['peg_id'];?>&acc=Edit" ><img src="../images/ico/page_edit.png" width="10" height="10">Detail</a>
								</td>
								<td align="left">
								<a href="employee_master_add.php?width=770&height=430&peg_id=<?php echo $data['peg_id'];?>&acc=Edit" ><img src="../images/ico/page_edit.png" width="10" height="10">Edit</a>
								</td>
								
         					
								
							
								
		</tr>								
						<?php } ?>			
	</tbody>
   </table>
		</div>
	</div>
	


<img src="../images/excel.jpg">
<a href="employee_master_excel.php" title="employee Excell">Export</a>
</img>|<img src="../images/ico/table_add.png">
<a href="employee_master_add.php?acc=Add" title="Tambah data Pegawai">Tambah data</a>
</img>
<script src="<?php echo $file_js;?>"></script>
<script type="text/javascript">	
$(function () { 	
	ReadyMade.init ({ theme: '' });	
});
</script>
 
<?php
include "../bawah.php";
?>
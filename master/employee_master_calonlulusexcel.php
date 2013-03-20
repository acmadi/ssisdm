<?php
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$namapt=$_SESSION['namapt'];
$nama=$_SESSION['nama'];
$otoritas_sdmpusat=$_SESSION['otoritas_sdmpusat'] ;
$unit_bisnis_id=$_SESSION['unit_bisnis_id'] ;
$lokasi_id=$_SESSION['lokasi_id'] ;
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=DataColonPegawailulus.xls");
?>

			<table >
	      
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
							    <th>Keterangan</th>
								<th>Unit Bisnis Melamar</th>
								<th>Lokasi Kerja Melamar</th>
								<th>Status</th>
								<th>Tanggal Melamar</th>
					
								
		</tr>
	</thead>
	<tbody>				
						<?php
					
						
						$view = mysql_query("SELECT * FROM view_emp_pegawaicalon where
                         unit_bisnis_idmelamar		LIKE '%$unit_bisnis_idmelamar%' 
					    and status_kerja_id=2
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
				
								<td align="left"><?php echo $data['narasi'] ?></td>
						
								<td align="left"><?php echo $data['unit_bisnismelamar'] ?></td>
								<td align="left"><?php echo $data['lokasi_kerjamelamar'] ?></td>
								<td align="left"><?php echo $data['status_kerja'] ?></td>
							
								<td align="left"><?php echo datedatesql($data['tgl_melamar']) ?></td>
							
								
								
         					
								
							
								
		</tr>								
						<?php } ?>			

   </table>
	
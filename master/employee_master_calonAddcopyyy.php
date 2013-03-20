<?php
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$namapt=$_SESSION['namapt'];
$file_css 	= "../plugin/table/all.css";
$nama=$_SESSION['nama'];
?>
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
   <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../script.js"></script>
	<!--tab menu end-->
	<link type="text/css" href="../plugin/ui/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
	<script type="text/javascript" src="../plugin/ui/jquery-ui-1.8.16.custom.min.js"></script>
	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
	<!--tab menu end-->		
<script>    
$(document).ready(function(){
  
});

</script>
<script language="JavaScript" src="../js/calendar_eu.js"></script>
<link rel="stylesheet" href="../css/calendar.css">
<script language="JavaScript" src="getaddress.js"></script>  
<script language="JavaScript" src="gettgl_akhir.js"></script>  
<script type="text/javascript" src="../js/jquery.watermark.min.js"></script>  
<script type="text/javascript">
$(document).ready(function(){
   $("#carikota").watermark("Cari Kota..."); 
     $("#cariaddress").watermark("Cari Alamat...");  
	 $("#nm_kotaB").watermark("Kota Baru...");
	 $("#kdposB").watermark("Kode Pos Baru...");
	  $("#ketB").watermark("Alamat Baru...");
	 cekkota();
	 cekpos();
	
       $('#carikota').keyup(function()
			  {
                var carikota = $('#carikota').val(); 
		
			   $.ajax({
				type:"POST",
				url:"employee_get_kota.php",    
				data: "carikota=" + carikota ,        
				success: function (html) {                 
				  $('#hasilcarikota').html(html);
                                                   }  
                      });
              });
			  
	       $('#cariaddress').keyup(function()
			  {
                var cariaddress = $('#cariaddress').val(); 
				var carikota = $('#carikota').val(); 
			
		             var kd_kota= $('#kd_kota').val(); 
					 
				
			   $.ajax({
				type:"POST",
				url:"employee_getaddress.php",    
				data: 'kd_kota=' + kd_kota+ '&cariaddress='+ cariaddress ,        
				success: function (html) {                 
				  $('#addressnya').html(html);
                                                   }  
                      });
              });
 	
     $('#tambahnm_kotaB').click(function()
	{
	    var nm_kotaB = $('#nm_kotaB').val(); 
		if (nm_kotaB.length == 0) {
					alert("Pilih Kota!");
					document.formData.nm_kotaB.focus();
					return false;
		}
        $.ajax({
		type:"POST",
		url:"employee_get_kota.php",    
		data: "nm_kotaB=" + nm_kotaB,      
		success: function (html){                 
		$('#hasilcarikota').html(html);
		}  
		});
	});	
	$('#tambahkdposB').click(function()
	{
	    var kd_kota = $('#kd_kota').val(); 
		var kdposB = $('#kdposB').val(); 
		var ketB = $('#ketB').val(); 
		if (kd_kota.length == 0) {
					alert("Pilih Kode Pos!");
					document.formData.kd_kota.focus();
					return false;
		}
		if (kdposB.length == 0) {
					alert("Pilih Kode Pos!");
					document.formData.kdposB.focus();
					return false;
		}
	  if (ketB.length == 0) {
					alert("Pilih Amalat/ Daerah!");
					document.formData.ketB.focus();
					return false;
		}
        $.ajax({
		type:"POST",  
		url:"employee_getaddress.php",    
		data: "kdposB=" + kdposB+ '&kd_kota=' + kd_kota+ '&ketB=' + ketB,      
		success: function (html){                 
		$('#addressnya').html(html);
		}  
		});
	});	
	 
	  $('#tambahpendidikan').click(function()
	{
	    var codetrx = $('#codetrx').val(); 
		var level_pendidikan = $('#level_pendidikan').val(); 
		var institusi = $('#institusi').val(); 
		var lokasi = $('#lokasi').val(); 
		var jurusan_id = $('#jurusan_id').val(); 
		var thn_mulai = $('#thn_mulai').val(); 
		var thn_selesai = $('#thn_selesai').val(); 
		var ipk = $('#ipk').val(); 
	var nama = document.formData.nama.value;
    if (nama.length == 0) {
		alert("nama tidak boleh kosong");
		document.formData.nama.focus();
		return false;
   	}
     if (level_pendidikan.length == 0) {
					alert("Anda harus memasukan tingkat pendidikan !");
					document.formData.level_pendidikan.focus();
					return false;
		}
		  if (institusi.length == 0) {
					alert("Anda harus memasukan institusi !");
					document.formData.institusi.focus();
					return false;
		}
		  if (jurusan_id.length == 0) {
					alert("Anda harus Memasukan jurusan!");
					document.formData.jurusan_id.focus();
					return false;
		}
		  if (ipk.length == 0) {
					alert("Anda harus ipk !");
					document.formData.ipk.focus();
					return false;
		}
		if (thn_mulai.length == 0) {
					alert("Anda harus thn mulai !");
					document.formData.thn_mulai.focus();
					return false;
		}
		if (thn_selesai.length == 0) {
					alert("Anda harus thn selesai !");
					document.formData.thn_selesai.focus();
					return false;
		}
		$.ajax({
		type:"POST",
		url:"tambahdatasekolah.php",    
		data: "codetrx=" + codetrx+ "&level_pendidikan=" + level_pendidikan+ "&institusi=" + institusi+ "&jurusan_id=" + jurusan_id+ "&ipk=" + ipk+ "&nama=" + nama+ "&lokasi=" + lokasi+ "&thn_mulai=" + thn_mulai+ "&thn_selesai=" + thn_selesai,         
		success: function (html){                 
		$('#hasilsimpanpendidikan').html(html);
		}  
		});
	});
	
   });
function focusNext(elemName, evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode :
        ((evt.which) ? evt.which : evt.keyCode);
    if (charCode == 13) {
		document.getElementById(elemName).focus();
		return false;
    } 
    return true;
} 
function cekkota()
{
  var peg_id = document.formData.peg_id.value;
  
  $.ajax({
    type:"POST",
    url:"get_kota.php",    
  data: 'peg_id=' + peg_id,          
    success: function (html){                 
      $('#hasilcarikota').html(html);
    }  
   });

} 	 
function cekpos()
{
  var peg_id = document.formData.peg_id.value;
  
  $.ajax({
    type:"POST",
    url:"getaddress.php",    
  data: 'peg_id=' + peg_id,          
    success: function (html){                 
      $('#addressnya').html(html);
    }  
   });

} 


function cek() 
      {
   var nama = document.formData.nama.value;
    if (nama.length == 0) {
		alert("nama tidak boleh kosong");
		document.formData.nama.focus();
		return false;
   	}
	var alamat_asal = document.formData.alamat_asal.value;
    if (alamat_asal.length == 0) {
		alert("alamat asal tidak boleh kosong");
		document.formData.alamat_asal.focus();
		return false;
   	}
		var tempat_lahir = document.formData.tempat_lahir.value;
    if (tempat_lahir.length == 0) {
		alert("tempat lahir tidak boleh kosong");
		document.formData.tempat_lahir.focus();
		return false;
   	}
		var tgl_lahir = document.formData.tgl_lahir.value;
    if (tgl_lahir.length == 0) {
		alert("tgl lahir tidak boleh kosong");
		document.formData.tgl_lahir.focus();
		return false;
   	}
		var gender = document.formData.gender.value;
    if (gender.length == 0) {
		alert("Jenis Kelamin tidak boleh kosong");
		document.formData.gender.focus();
		return false;
   	}
	var telp = document.formData.telp.value;
    if (telp.length == 0) {
		alert("telp tidak boleh kosong");
		document.formData.telp.focus();
		return false;
   	}	
	var email = document.formData.email.value;
    if (email.length == 0) {
		alert("email tidak boleh kosong");
		document.formData.email.focus();
		return false;
   	}	
	var status_nikah = document.formData.status_nikah.value;
    if (status_nikah.length == 0) {
		alert("status nikah tidak boleh kosong");
		document.formData.status_nikah.focus();
		return false;
   	}	
	var aktif = document.formData.aktif.value;
    if (aktif.length == 0) {
		alert("status aktif tidak boleh kosong");
		document.formData.aktif.focus();
		return false;
   	}	
	var npp = document.formData.npp.value;
    if (npp.length == 0) {
		alert(" npp tidak boleh kosong");
		document.formData.npp.focus();
		return false;
   	}	
	var pangkat_id = document.formData.pangkat_id.value;
    if (pangkat_id.length == 0) {
		alert(" pangkat tidak boleh kosong");
		document.formData.pangkat_id.focus();
		return false;
   	}	
	var jabatan_id = document.formData.jabatan_id.value;
    if (jabatan_id.length == 0) {
		alert(" jabatan tidak boleh kosong");
		document.formData.jabatan_id.focus();
		return false;
   	}	
	var unit_bisnis_id = document.formData.unit_bisnis_id.value;
    if (unit_bisnis_id.length == 0) {
		alert(" unit bisnis tidak boleh kosong");
		document.formData.unit_bisnis_id.focus();
		return false;
   	}	
	var lokasi_id = document.formData.lokasi_id.value;
    if (lokasi_id.length == 0) {
		alert(" lokasi  tidak boleh kosong");
		document.formData.lokasi_id.focus();
		return false;
   	}	
	
	var tgl_masuk = document.formData.tgl_masuk.value;
    if (tgl_masuk.length == 0) {
		alert(" tgl Masuk  tidak boleh kosong");
		document.formData.tgl_masuk.focus();
		return false;
   	}	
	var status_kerja_id = document.formData.status_kerja_id.value;
    if (status_kerja_id.length == 0) {
		alert(" status kerja  tidak boleh kosong");
		document.formData.status_kerja_id.focus();
		return false;
   	} 
	if (status_kerja_id== 2) {
	    var tgl_awal = document.formData.tgl_awal.value;
		if (tgl_awal.length == 0) {
			alert(" tgl awal  tidak boleh kosong");
			document.formData.tgl_awal.focus();
			return false;
		}	
	     var periode_kontrak = document.formData.periode_kontrak.value;
		 if (periode_kontrak.length == 0) {
		alert("periode kontrak  tidak boleh kosong");
		document.formData.periode_kontrak.focus();
		return false;
   	      } 
		   var tgl_akhir = document.formData.tgl_akhir.value;
		 if (tgl_akhir.length == 0) {
		alert("tgl akhir  tidak boleh kosong");
		document.formData.tgl_akhir.focus();
		return false;
   	      } 
		 var rollover = document.formData.rollover.value;
		 if (rollover.length == 0) {
		alert("rollover  tidak boleh kosong");
		document.formData.rollover.focus();
		return false;
   	      } 
		  
		  
   	} 
    if (confirm("Yakin Simpan Data ?"))
	{
	return true;
	}
	else
	{
	return false;
	}
}

</script>
</head>
<?php
	$acc = $_GET['acc'];
	if($peg_id){

	   $query = mysql_query('SELECT * FROM view_emp_pegawai WHERE peg_id = "'.$peg_id.'" and ( kontrakaktif<>0  or isnull(kontrakaktif)=true) ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>


<form  name="formData" action="employee_master_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="peg_id" value="<?php echo $peg_id;?>">
<input type="hidden" name="peg_id2" value="<?php echo @$data->peg_id2; ?>">
<input type="hidden" name="acc" value="<?php echo $acc;?>">
<div id="tabs">
 <ul>
		<li><a href="#tabs-1">Data Pribadi</a></li>
		<li><a href="#tabs-2">Data Pendidikan</a></li>
		<li><a href="#tabs-3">Data Keluarga</a></li>
</ul>
<div id="tabs-1">
<center>
<table id="table" width="100%" >
<?php 
		$length = 10;
						 $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
						 $string = '';
						 
						 for ($p = 0; $p < $length; $p++) {
						   $string .= $characters[mt_rand(0, strlen($characters))];
						 }
						?>
<tr><td colspan="2"><font color="red">* Wajib di isi</font></td> </tr>
<tr><td>Kode Transaksi</td><td><input type="text" name="codetrx"  id="codetrx" size="50" value="<?php echo $string;?>" readonly></td></tr>
<tr><td>Nama</td><td > <input type="text" name="nama" id="nama" onKeyPress="return focusNext('alamat_asal',event)"  size="50" maxlength="128" value="<?php echo @$data->nama;?>"/><font color="red">*</font></td></tr>
<tr><td>Alamat</td><td > <input type="text" name="alamat_asal" id="alamat_asal" onKeyPress="return focusNext('carikota',event)"  size="50" maxlength="128" value="<?php echo @$data->alamat_asal;?>"/><font color="red">*</font></td></tr>
<tr>
        	<td>Kota</td>
            <td > <input type="text" id="carikota" name="carikota" /><div id="hasilcarikota"></div>
		 |<input type="text" name="nm_kotaB" id="nm_kotaB" />
				   <input type="button" name="tambahnm_kotaB" id="tambahnm_kotaB"  value="Tambah Kota"  />
				
			
	
			</td>
        </tr>
		<tr>
        	<td>Kode Pos</td>
            <td >
			<input type="text" id="cariaddress" name="cariaddress" />
			<div id="addressnya"></div>
			 |<input type="text" name="kdposB" id="kdposB" />/<input type="text" name="ketB" id="ketB" />
				   <input type="button" name="tambahkdposB" id="tambahkdposB"  value="Tambah Kode Pos"  />
		
			
			</td>
        </tr>
		<tr>
        	<td>Tempat/ Tanggal Lahir</td>
            <td > <input type="text" name="tempat_lahir" id="tempat_lahir"  onKeyPress="return focusNext('tgl_lahir',event)"  size="32" maxlength="128" value="<?php echo @$data->tempat_lahir;?>"/>/
			<input type="text" name="tgl_lahir" id="tgl_lahir"  onKeyPress="return focusNext('gender',event)"  size="10" value="<?php echo datedatesql(@$data->tgl_lahir);?>"/><font color="red">*</font>
			<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'formData',
		// input name
		'controlname': 'tgl_lahir'
	});

	</script>
			
			</td>
        </tr>
		<tr>
		<td>Jenis Kelamin </td>
		<td><select name="gender" id="gender" onKeyPress="return focusNext('agama_id',event)">
									   <option value="">Pilihan</option>		
										<option value="M"<?php if (!(strcmp(M, $data->gender))) {echo "SELECTED";} ?>>Laki Laki</option>
										<option value="F"<?php if (!(strcmp(F, $data->gender))) {echo "SELECTED";} ?>>Perempuan</option>
									</select><font color="red">*</font>
		</td>
		</tr>
<tr>
		<td>Agama </td>
		<td><select name="agama_id" id="agama_id"  onKeyPress="return focusNext('telp',event)">
   <option value="">Pilihan</option>
        <?php 		
     		$query_a="select * from agama   " ;
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['agama_id'];?>" 						
											<?php if (!(strcmp($row_a['agama_id'], $data->agama_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['agama']; ?></option>
		<?php   }   ?>
</select>
		</td>
		</tr>
		<tr>
        	<td>Telepon</td>
            <td > <input type="text" name="telp" id="telp" onKeyPress="return focusNext('email',event)"  size="50" maxlength="128" value="<?php echo @$data->telp;?>"/> <font color="red">*</font></td>
        </tr>
		<tr>
        	<td>Email</td>
            <td > <input type="text" name="email" id="email" onKeyPress="return focusNext('status_nikah',event)"  size="50" maxlength="128" value="<?php echo @$data->email;?>"/> <font color="red">*</font></td>
        </tr>
		<tr>
		<td>Status Nikah</td>
		<td><select name="status_nikah" id="status_nikah" onKeyPress="return focusNext('tanggungan',event)">
										<option value="">[Pilih]</option>				
										<option value="M"<?php if (!(strcmp(M, $data->status_nikah))) {echo "SELECTED";} ?>>Nikah</option>
										<option value="N"<?php if (!(strcmp(N, $data->status_nikah))) {echo "SELECTED";} ?>>Belum Nikah/ Duda/ Janda</option>
									</select><font color="red">*</font>
		</td>
		</tr>
			<tr>
        	<td>Tanggungan</td>
            <td > <input type="text" name="tanggungan" id="tanggungan" onKeyPress="return focusNext('username',event)"  size="4" maxlength="1" value="<?php echo @$data->tanggungan;?>"/></td>
        </tr>


	
	
		
		<tr>
        	<td>Photo</td> 
            <td > <img src="../images/photo/<?php echo @$data->photo;?>" width="100" height="100"></td>
        </tr>
		<tr>
        	<td>Photo Upload</td> <input type="hidden" name="namafilelama" value="<?php echo @$data->photo;?>">
            <td > <input type="file" name="fupload" size="32"><font color="red">*</font> </td>
        </tr>
	

		
		<tr>
        	<td>Tanggal  Melamar</td>
            <td > 
			<input type="text" name="tgl_masuk" id="tgl_masuk"  onKeyPress="return focusNext('npp',event)"  size="10" value="<?php echo datedatesql(@$data->tgl_masuk);?>"/><font color="red">*</font>
			<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'formData',
		// input name
		'controlname': 'tgl_masuk'
	});

	</script>
			
			</td>
        </tr>
	 


			<tr>
        	<td>Unit Bisnis / Departemen</td>

			<td>
            	<select name="unit_bisnis_id" id="unit_bisnis_id" onKeyPress="return focusNext('lokasi_id',event)" >
                      <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM unit_bisnis    where  aktif=1 order by unit_bisnis_id" ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{?>
					<option value="<?php echo $row_a['unit_bisnis_id'];?>" 						
											<?php if (!(strcmp($row_a['unit_bisnis_id'], @$data->unit_bisnis_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['unit_bisnis']; ?></option>
					<?php  
					   }
					?>
		        </select><font color="red">*</font>
            	</td>
		
        </tr>
		<tr>
        	<td>Lokasi Penempatan</td>

			<td>
            	<select name="lokasi_id" id="lokasi_id" onKeyPress="return focusNext('tmt_tglmasuk',event)" >
                      <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM lokasi_kerja    where  aktif=1 order by lokasi_id" ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{?>
					<option value="<?php echo $row_a['lokasi_id'];?>" 						
											<?php if (!(strcmp($row_a['lokasi_id'], @$data->lokasi_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['lokasi_kerja']; ?></option>
					<?php  
					   }
					?>
		        </select><font color="red">*</font>
            	</td>
		
        </tr>


	
<tr>
        	<td>Keterangan</td> 
            <td > <textarea name="narasi" id="narasi" cols="40" rows="3"><?php echo @$data->narasi;?></textarea></td>
        </tr>
				<tr>
        	<td>Status Calon Pegawai</td>

			<td>
            	<select name="status_kerja_id" id="status_kerja_id" onKeyPress="return focusNext('periode_kontrak',event)" >
                     <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM status_kerja   where  aktif=1  and  flagStatus=0 ORDER BY status_kerja_id" ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{?>
					<option value="<?php echo $row_a['status_kerja_id'];?>" 						
											<?php if (!(strcmp($row_a['status_kerja_id'], @$data->status_kerja_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['status_kerja']; ?></option>
					<?php  
					   }
					?>
		        </select><font color="red">*</font>
            	</td>
		
        </tr>
    <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">| <input type="submit" name="submit" value="Simpan">	
    </td>
	</tr>





</table>
</center>

	</div>
	
	<div id="tabs-2">
	<center>
<table border="1" width="100%" cellpadding="0" cellspacing="0" align="center">
<tr><td>Tingkat pendidikan</td>
<td>
<select name="level_pendidikan" id="level_pendidikan" onKeyPress="return focusNext('institusi', event)" >
<?php
$query_a="select * from ref_level_pendidikan  order by level_pendidikan_id" ;
?>
<option value="">[Pilih level pendidikan]</option>
<?php 		
$result_a=mysql_query($query_a) or (mysql_error()) ;
while($row_a1=mysql_fetch_array($result_a)) 	{
?>
<option value="<?php echo $row_a1['level_pendidikan_id'];?>"><?php echo $row_a1['level_pendidikan']; ?></option>
<?php   }   ?>
</select>
</td>
<tr><td>Nama Sekolah</td><td><input type="text" name="institusi" id="institusi"  onKeyPress="return focusNext('lokasi',event)"  size="50"/></td></tr>
<tr><td>Lokasi Sekolah</td><td ><input type="text" name="lokasi" id="lokasi"  onKeyPress="return focusNext('jurusan',event)"  size="50"/></td></tr>
<tr><td >Jurusan</td><td>
<select name="jurusan_id" id="jurusan_id" onKeyPress="return focusNext('thn_mulai', event)" >
<?php
$query_aj="select * from ref_jurusan  order by jurusan_id" ;
?>
<option value="">[Pilih Jurusan]</option>
<?php 		
$result_aj=mysql_query($query_aj) or (mysql_error()) ;
while($row_a1j=mysql_fetch_array($result_aj)) 	{
?>
<option value="<?php echo $row_a1j['jurusan_id'];?>"><?php echo $row_a1j['jurusan']; ?></option>
<?php   }   ?>
</select>
</td></tr>
<tr><td >Th Mulai-Selesai</td><td ><input type="text" name="thn_mulai" id="thn_mulai"  onKeyPress="return focusNext('thn_selesai',event)"  size="5"/>s/d <input type="text" name="thn_selesai" id="thn_selesai"  onKeyPress="return focusNext('ipk',event)"  size="5"/></td></tr>
<tr><td>IPK/NEM</td><td><input type="text" name="ipk" id="ipk"  onKeyPress="return focusNext('tambahpendidikan',event)"  size="5"/></td></tr>
<tr>
<td colspan="2"><input type="button" name="tambahpendidikan" id="tambahpendidikan"  value="Tambah Data"  /></td>
</tr>
<tr>
<td colspan="2"><div id="hasilsimpanpendidikan"></div> </td></tr>
 </table>	





	</center>
	</div>
	
	
<div id="tabs-3">
	<table   width="100%" border="0">
	<tr>
		</tr>
	</table>
	
</div>	
<div id="tabs-4">
	<table   width="60%" border="0">	
	<tr>
		</tr>
	</table>
</div>	
	
<div id="tabs-5">
	<table style="text-align:left;border:none;background-color:#FFFFFF;height: 5em;width: 12em;-moz-border-radius: 1em 1em 1em 1em;border-radius: 1em 1em 1em 1em;">
		<tr>
	
	</tr>
    </table>
</div>
    	
	



</div>


</from>
</body>
</html>
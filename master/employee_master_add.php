<?php $posisi=2;
include "../atas.php";
			
 if(isSet($_GET['peg_id'])) 
	{
	$peg_id = $_GET['peg_id'];
	}else
	{
	$peg_id = $_POST['peg_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $peg_id = $_POST['peg_id'];
		$peg_id2 = $_POST['peg_id2'];
		$nama = $_POST['nama'];	
		$tempat_lahir = $_POST['tempat_lahir'];	
		$tgl_lahir= $_POST['tgl_lahir'];	 
		$tgl_lahir=date2datesql($tgl_lahir);
		$gender= $_POST['gender'];	
		$agama_id = $_POST['agama_id'];	
		$alamat_asal = $_POST['alamat_asal'];	
		$aktif = $_POST['aktif'];	
		$kd_kota = $_POST['kd_kota'];	
		$kodeposId = $_POST['kodeposId'];
		$telp = $_POST['telp'];
		$email = $_POST['email'];
		$status_nikah = $_POST['status_nikah'];
		$tanggungan = $_POST['tanggungan'];
		$narasi = $_POST['narasi'];
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (!empty($password))
        {
		$password= md5($_POST['password']);	
		$password1 = md5($_POST['password1']);	
		}
	    	
		$npp = $_POST['npp'];
		$jabatan_id = $_POST['jabatan_id'];
		$lokasi_id = $_POST['lokasi_id'];
		$unit_bisnis_id = $_POST['unit_bisnis_id'];
        $pangkat_id = $_POST['pangkat_id'];
		$tgl_awal = $_POST['tgl_awal'];
		$tgl_awal=date2datesql($tgl_awal); 
		$tgl_masuk = $_POST['tgl_masuk'];
		$tgl_masuk=date2datesql($tgl_masuk);
		$narasi1 = $_POST['narasi1'];
		$nokontrak= $_POST['nokontrak'];
		$tgl_akhir= $_POST['tgl_akhir'];
		$status_kerja_id= $_POST['status_kerja_id'];
		$tgl_akhir=date2datesql($tgl_akhir);
		$periode_kontrak= $_POST['periode_kontrak'];
		if ($acc=="Add")
		{
		                      $lokasi_file = $_FILES["fupload"]["tmp_name"];
							  $tipe_file      = $_FILES["fupload"]["type"];
							  $nama_file   = $_FILES["fupload"]["name"]; 
                     
							if (!empty($lokasi_file)){
								 $vdir_upload = "../images/photo/";
								 $vfile_upload = $vdir_upload . $nama_file;
								 move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);	
								 }	
	    $sql = "insert into  peg_personal set  ";
        $sql .= "nama='$nama',";
		$sql .= "tempat_lahir='$tempat_lahir',"; 
        $sql .= "tgl_lahir='$tgl_lahir',"; 
		$sql .= "gender='$gender',"; 
		$sql .= "agama_id='$agama_id',";
		$sql .= "alamat_asal='$alamat_asal',";
	    $sql .= "aktif='$aktif',";
		$sql .= "kd_kota='$kd_kota',";
		$sql .= "kodeposId='$kodeposId',";
		$sql .= "telp='$telp',";
		$sql .= "email='$email',";
		$sql .= "status_nikah='$status_nikah',";
		$sql .= "tanggungan='$tanggungan',";
		$sql .= "narasi='$narasi',";
		$sql .= "periode_kontrak='$periode_kontrak',"; 
		$sql .= "status_kerja_id='$status_kerja_id',";  
		$sql .= "tgl_masuk='$tgl_masuk',"; 
		if (!empty($password)){
		$sql .= "password='$password',";
		}
		if (!empty($username)){
		$sql .= "username='$username',";
		}
		$sql .= "photo='$nama_file '  ";
		$result = mysql_query($sql) ;
		$lastID = mysql_insert_id();
		                    $sql1 = "insert into  peg_dinas set  ";
							$sql1 .= "peg_id='$lastID',";
							$sql1 .= "npp='$npp',"; 
							$sql1 .= "jabatan_id='$jabatan_id',"; 
							$sql1 .= "lokasi_id='$lokasi_id',"; 
							$sql1 .= "unit_bisnis_id='$unit_bisnis_id',";
							$sql1 .= "pangkat_id='$pangkat_id',";
							$sql1 .= "tmt_tglmasuk='$tgl_awal',";
							$sql1 .= "narasi='$narasi1' ";
							mysql_query($sql1) ;
							echo $sql1 ;
							$lastID2 = mysql_insert_id();
							if ($status_kerja_id==2)
							{
							    $tahun=substr($tgl_awal,0,4);
							     $query_cek = "SELECT nokontrak FROM kontrak WHERE year(tgl_awal) = '$tahun' order by nokontrak desc limit 1 ";
                                 $resultno=mysql_query($query_cek) or (mysql_error()) ;
								$row_no = mysql_fetch_assoc($resultno);
								$nokontrak=substr($row_no["nokontrak"],-4) ;	
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
								
	                            $nokontrak="SDM".$tahun.$nokontrak;
								
								$query_cek = "SELECT kontrak_ke FROM kontrak WHERE peg_id2 = '$lastID2' order by kontrak_ke desc limit 1 ";
                                 $resultno=mysql_query($query_cek) or (mysql_error()) ;
								$row_no = mysql_fetch_assoc($resultno);
								$kontrak_ke=$row_no["kontrak_ke"] ;	
								 if (empty($kontrak_ke)) $kontrak_ke=0;
								$kontrak_ke=$kontrak_ke+1;
								
								$sql2 = "insert into  kontrak set  ";
								$sql2 .= "peg_id2='$lastID2',";
								$sql2 .= "periode_kontrak_trx='$periode_kontrak',";
								$sql2 .= "nokontrak='$nokontrak',"; 
							    $sql2 .= "kontrak_ke='$kontrak_ke',";  
							    $sql2 .= "tgl_awal='$tgl_awal',";
								$sql2 .= "tgl_akhir='$tgl_akhir' ";
								mysql_query($sql2) ;
							}	
        }
		else
		{      
		            $lokasi_file = $_FILES['fupload']['tmp_name'];
				   $tipe_file      = $_FILES['fupload']['type'];
				   $nama_file   = $_FILES['fupload']['name'];   
	    $sql = "Update  peg_personal set  ";
       $sql .= "nama='$nama',";
		$sql .= "tempat_lahir='$tempat_lahir',"; 
        $sql .= "tgl_lahir='$tgl_lahir',"; 
		$sql .= "gender='$gender',"; 
		 $sql .= "tgl_masuk='$tgl_masuk',"; 
		$sql .= "agama_id='$agama_id',";
		$sql .= "alamat_asal='$alamat_asal',";
		$sql .= "aktif='$aktif',";
		$sql .= "kd_kota='$kd_kota',";
		$sql .= "kodeposId='$kodeposId',";
		$sql .= "telp='$telp',";
		$sql .= "email='$email',";
		$sql .= "status_nikah='$status_nikah',";
		$sql .= "tanggungan='$tanggungan',";
		$sql .= "periode_kontrak='$periode_kontrak',"; 
			if (!empty($lokasi_file)){
			$sql .= "photo='$nama_file ',  ";
		}
		
		if (!empty($password)){
		$sql .= "password='$password',";
		}
		if (!empty($username)){
		$sql .= "username='$username',";
		}
		$sql .= "narasi='$narasi' ";
        $sql .= "where peg_id='$peg_id' ";
		$result = mysql_query($sql) ;
		                    $sql1 = "update  peg_dinas set  ";
							$sql1 .= "peg_id='$peg_id',";
							$sql1 .= "npp='$npp',"; 
							$sql1 .= "jabatan_id='$jabatan_id',"; 
							$sql1 .= "lokasi_id='$lokasi_id',"; 
							$sql1 .= "unit_bisnis_id='$unit_bisnis_id',";
							$sql1 .= "pangkat_id='$pangkat_id',";
							$sql1 .= "tmt_tglmasuk='$tgl_awal',";
							$sql1 .= "narasi='$narasi1' ";
							$sql1 .= "where peg_id2='$peg_id2' ";
							mysql_query($sql1) ;
							//echo $sql1;
		}
		if (!empty($lokasi_file)){
					 //unlink("../images/ttd/$_POST[namafilelama]");  
					 $vdir_upload = "../images/photo/";
                     $vfile_upload = $vdir_upload . $nama_file;
					 move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);	
					  }
					  
					       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: employee_master.php");
		} 
		else 
		{?>
			<script language="JavaScript">
				alert("Process fails");
			</script>
		<?php  }
   }
?>

<body >
</head>
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
	 cekstatuspeg();
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
	 $('#status_kerja_id').change(function() {
         
          var status_kerja_id = document.formData.status_kerja_id.value;
		

		   $.ajax({
			type:"POST",
			url:"getstatus_kerja.php",    
		    data: 'status_kerja_id=' + status_kerja_id,   	
			success: function (html){                 
			  $('#hasilstatus_kerja_id').html(html);
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
function cekstatuspeg()
{
  var peg_id = document.formData.peg_id.value;
 var status_kerja_id = document.formData.status_kerja_id.value;
   $.ajax({
    type:"POST",
    url:"getstatus_kerja.php",    
  data: 'peg_id=' + peg_id+ '&status_kerja_id=' + status_kerja_id,          
    success: function (html){                 
      $('#hasilstatus_kerja_id').html(html);
    }  
   });
   if (status_kerja_id==2)
   {
   cektglakhir()
   }
} 
function cektglakhir()
{
  var peg_id = document.formData.peg_id.value;

   $.ajax({
    type:"POST",
    url:"gettgl_akhir.php",    
  data: 'peg_id=' + peg_id,          
    success: function (html){                 
      $('#divtgl_akhir').html(html);
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
<body >
<?php
	$acc = $_GET['acc'];
	if($peg_id){

	   $query = mysql_query('SELECT * FROM view_emp_pegawai WHERE peg_id = "'.$peg_id.'" and ( kontrakaktif<>0  or isnull(kontrakaktif)=true) ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Data Pegawai</h2></center>

<form  name="formData" action="employee_master_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="peg_id" value="<?php echo $peg_id;?>">
<input type="hidden" name="peg_id2" value="<?php echo @$data->peg_id2; ?>">
<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

           <tr>
        	<td colspan="2"><h3>1. Data Pribadi Karyawan</h3><font color="red">* Wajib di isi</font></td>
        </tr>
        <tr>
        	<td>Nama</td>
            <td > <input type="text" name="nama" id="nama" onKeyPress="return focusNext('alamat_asal',event)"  size="50" maxlength="128" value="<?php echo @$data->nama;?>"/><font color="red">*</font></td>
        </tr>
		<tr>
        	<td><label for="supplier">Alamat</label></td>
            <td > <input type="text" name="alamat_asal" id="alamat_asal" onKeyPress="return focusNext('carikota',event)"  size="50" maxlength="128" value="<?php echo @$data->alamat_asal;?>"/><font color="red">*</font></td>
        </tr>
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
        	<td>Login</td>
            <td ><input type="text" name="username" id="username" onKeyPress="return focusNext('password',event)"  size="32" maxlength="128" value="<?php echo @$data->username;?>"/></td>
        </tr>
		<tr>
        	<td>Password</td>
            <td ><input type="password" name="password" id="password" onKeyPress="return focusNext('password1',event)"  size="32" maxlength="128" /></td>
        </tr>
		<tr>
        	<td>Password</td>
            <td ><input type="password" name="password1" id="password1" onKeyPress="return focusNext('ttd',event)"  size="32" maxlength="128"  /></td>
        </tr>
			<tr>
        	<td>Status Pegawai</td>

			<td>
            	<select name="status_kerja_id" id="status_kerja_id" onKeyPress="return focusNext('periode_kontrak',event)" >
                     <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM status_kerja   where  aktif=1  ORDER BY status_kerja_id" ;
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
			<div id="hasilstatus_kerja_id"></div>
			</td>
		</tr>
		
		<tr>
        	<td>Photo</td> 
            <td > <img src="../images/photo/<?php echo @$data->photo;?>" width="100" height="100"></td>
        </tr>
		<tr>
        	<td>Photo Upload</td> <input type="hidden" name="namafilelama" value="<?php echo @$data->photo;?>">
            <td > <input type="file" name="fupload" size="32"> </td>
        </tr>
		</tr>
			<td>Aktif</td>
	         <td ><select name="aktif" id="aktif" >
										<option value="1" <?php if (!(strcmp(1, @$data->aktif))) {echo "SELECTED";} ?>>Yes</option>
										<option value="0" <?php if (!(strcmp(0, @$data->aktif))) {echo "SELECTED";} ?>>No</option>
									</select><font color="red">*</font>
			</td>
		</tr>
		<tr>
        	<td>Keterangan</td> 
            <td > <textarea name="narasi" id="narasi" cols="40" rows="3"><?php echo @$data->narasi;?></textarea></td>
        </tr>
		<tr>
        	<td colspan="2"><h3>2. Data Kedinasan Karyawan</h3></td>
        </tr>
		<tr>
        	<td>Tanggal  Masuk</td>
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
        	<td>NPP</td>
            <td > <input type="text" name="npp" id="npp" onKeyPress="return focusNext('pangkat_id',event)"  size="50" maxlength="128" value="<?php echo @$data->npp;?>"/><font color="red">*</font></td>
        </tr>
		<tr>
        	<td>Pangkat</td>

			<td>
            	<select name="pangkat_id" id="pangkat_id" onKeyPress="return focusNext('jabatan_id',event)" >
                     <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM pangkat    where  aktif=1 order by pangkat_id " ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{?>
					<option value="<?php echo $row_a['pangkat_id'];?>" 						
											<?php if (!(strcmp($row_a['pangkat_id'], @$data->pangkat_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['pangkat']; ?></option>
					<?php  
					   }
					?>
		        </select><font color="red">*</font>
            	</td>
			
        </tr>
		<tr>
        	<td>Jabatan</td>

			<td>
            	<select name="jabatan_id" id="jabatan_id" onKeyPress="return focusNext('unit_bisnis_id',event)" >
                <option value="">Pilihan</option>
					<?php
		  	         $query_a="select * FROM jabatan    where  aktif=1 order by jabatan_id" ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{?>
					<option value="<?php echo $row_a['jabatan_id'];?>" 						
											<?php if (!(strcmp($row_a['jabatan_id'], @$data->jabatan_id))) {echo "SELECTED";} ?>>
											<?php echo $row_a['jabatan']; ?></option>
					<?php  
					   }
					?>
		        </select><font color="red">*</font>
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
        	<td>Tanggal  Awal Kontrak</td>
            <td > 
			<input type="text" name="tgl_awal" id="tgl_awal"  onKeyPress="return focusNext('status_kerja_id',event)"  size="10" value="<?php echo datedatesql(@$data->tgl_awal);?>"/><font color="red">*</font>
			<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'formData',
		// input name
		'controlname': 'tgl_awal'
	});

	</script><input type="button" name="ambiltgkakhir" id="ambiltgkakhir" value="Cari Tanggal Akhir Kontrak" onClick="gettgl_akhir()">
			
			</td>
        </tr>
			<tr>
        	<td>Tanggal  Akhir Kontrak</td>
            <td > 
			<div id="divtgl_akhir"></div>
			
			</td>
        </tr>
<tr>
        	<td>Keterangan</td> 
            <td > <textarea name="narasi1" id="narasi1" cols="40" rows="3"><?php echo @$data->narasi2;?></textarea></td>
        </tr>
    <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">| <input type="submit" name="submit" value="Simpan">	
    </td>
	</tr>





</table>
</center>
</form>
<?php
include "../bawah.php";
?>

<?php
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$namapt=$_SESSION['namapt'];
$file_css 	= "../plugin/table/all.css";
$file_js 	= "../plugin/table/all.js";
$file_img 	= "../plugin/table/green.jpg";
$nama=$_SESSION['nama'];
$otoritas_sdmpusat=$_SESSION['otoritas_sdmpusat'] ;
$unit_bisnis_id=$_SESSION['unit_bisnis_id'] ;
$lokasi=$_SESSION['lokasi'] ;
$unit_bisnis=$_SESSION['unit_bisnis'] ;
$lokasi_kerja=$_SESSION['lokasi_kerja'] ;
if(isSet($_GET['peg_id'])) 
	{
	$peg_id = $_GET['peg_id'];
	}else
	{
	$peg_id = $_POST['peg_id'];
	}
if(isSet($_GET['acc'])) 
	{
	$acc = $_GET['acc'];
	}else
	{
	$acc = $_POST['acc'];
	}	


?><link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="../css/demo.css" type="text/css" media="screen" />
   <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
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
<script language="javascript" src="../js/fungsi.js"></script>
<script language="JavaScript" src="getkecamatanasal.js"></script>  
<script language="JavaScript" src="getkelurahanasal.js"></script>  
<script language="JavaScript" src="getkecamatansekarang.js"></script>  
<script language="JavaScript" src="getkelurahansekarang.js"></script>   
<script language="JavaScript" src="hapuskeluarga.js"></script>  
<script language="JavaScript" src="hapuspendidikanformal.js"></script>  
<script language="JavaScript" src="hapuspendidikannonformal.js"></script>   
<script language="JavaScript" src="hapuspendidikanbhs.js"></script> 
<script language="JavaScript" src="hapuspekerjaan.js"></script> 
<script language="JavaScript" src="hapusorg.js"></script> 
<script language="JavaScript" src="hapussakit.js"></script> 
<script language="JavaScript" src="gettgl_akhir.js"></script>  
<script type="text/javascript" src="../js/jquery.watermark.min.js"></script>  
<script type="text/javascript">
$(document).ready(function(){
cekjurusan();
ceklokasimelamar();
cekkabupatenasal();
cekkecamatanasal();
cekkelurahanasal(); 
cekkabupatensekarang();
cekkecamatansekarang();
cekkelurahansekarang();
ceklokasimelamardet(); 
cekkeluarga();
cekpendidikanf();
cekpendidikannf();
cekbahasa();
cekpekerjaan();
cekorg();
ceksakit();
function ceksakit()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahsakit.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpantambahsakit').html(html); 
    }  
   });
}
}
function cekorg()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahorg.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpantambahorg').html(html); 
    }  
   });
}
}
function cekpekerjaan()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahpekerjaan.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpantambahpekerjaan').html(html); 
    }  
   });
}
}
function cekbahasa()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahdatasekolahbhs.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpanpendidikanbhs').html(html); 
    }  
   });
}
}
function cekpendidikannf()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahdatasekolahnf.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpanpendidikannf').html(html); 
    }  
   });
}
}
function cekpendidikanf()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"tambahdatasekolah.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpanpendidikan').html(html); 
    }  
   });
}
}
function cekkeluarga()
{
var codetrx= $('#codetrx').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"simpankeluarga.php",    
  data: "codetrx=" + codetrx ,         
   success: function (html){                 
     $('#hasilsimpankeluarga').html(html); 
    }  
   });
}
}
function ceklokasimelamardet()
{
var lokasimelamar= $('#lokasimelamar').val(); 

var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"getlokasidetail.php",    
  data: "lokasimelamar=" + lokasimelamar ,         
   success: function (html){                 
     $('#getlokasidetail').html(html);
    }  
   });
}
}
function cekkabupatensekarang()
{
var propinsis= $('#kode_sekarang').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"emget_kabupatensekarang.php",    
  data: "propinsisekarang=" + propinsis ,         
   success: function (html){                 
     $('#getkabupatensekarang').html(html);
    }  
   });
}
}
function cekkecamatansekarang()
{
var kabupatensekarang= $('#kode_sekarang').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"emget_kecamatansekarang.php",    
  data: "kabupatensekarang=" + kabupatensekarang ,         
   success: function (html){                 
     $('#getkecamatansekarang').html(html);
    }  
   });
}
} 
function cekkabupatenasal()
{
var propinsi= $('#kode_asal').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"getkabupaten.php",    
  data: "propinsi=" + propinsi ,         
   success: function (html){                 
     $('#getkabupatenasal').html(html);
    }  
   });
}
} 
function cekkecamatanasal()
{
var kabupatenasal= $('#kode_asal').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"emget_kecamatan.php",    
  data: "kabupatenasal=" + kabupatenasal ,         
   success: function (html){                 
     $('#getkecamatanasal').html(html);
    }  
   });
}
} 
function cekkelurahansekarang()
{
var kecamatansekarang= $('#kode_sekarang').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"emget_kelurahansekarang.php",    
  data: "kecamatansekarang=" + kecamatansekarang ,         
   success: function (html){                 
     $('#getkelurahansekarang').html(html);
    }  
   });
}
} 
function cekkelurahanasal()
{
var kecamatanasal= $('#kode_asal').val(); 
var acc= $('#acc').val(); 
if (acc=="Edit")
{
 $.ajax({
    type:"POST",
   url:"emget_kelurahan.php",    
  data: "kecamatanasal=" + kecamatanasal ,         
   success: function (html){                 
     $('#getkelurahanasal').html(html);
    }  
   });
}
} 
function cekjurusan()
{
 $.ajax({
    type:"POST",
   url:"get_jurusan.php",    
  data: '',          
   success: function (html){                 
     $('#get_jurusan').html(html);
    }  
   });

} 
function ceklokasimelamar()
{
  var lokasimelamar = $('#lokasimelamar').val(); 
  // alert (lokasimelamar);
  $.ajax({
    type:"POST",
   url:"getlokasidetail.php",    
 data: "lokasimelamar=" + lokasimelamar ,        
    success: function (html){                 
      $('#getlokasidetail').html(html);
    }  
  });
} 
$('#TambahjurusanB').click(function()
	{

		  var jurusanB = $('#jurusanB').val(); 
		if (jurusanB.length == 0) {
					alert("jurusan Baru Tidak Boleh Kosong!");
					document.formData.jurusanB.focus();
					return false;
		}
	
        document.formData.jurusanB.value="";
        $.ajax({
		type:"POST",  
		url:"get_jurusan.php",    
		data: "jurusanB=" + jurusanB,      
		success: function (html){                 
		$('#get_jurusan').html(html);
		}  
		});
	});	
	
    $('#propinsiasal').change(function() 
	 {
        var propinsiasal = $('#propinsiasal').val(); 
        $.ajax({
				type:"POST",
				url:"emget_kabupaten.php",    
				data: "propinsiasal=" + propinsiasal ,        
				success: function (html) {                 
				  $('#getkabupatenasal').html(html);
                                                   }  
                      });
     }); 
	     $('#lokasimelamar').change(function() 
	 {
        var lokasimelamar = $('#lokasimelamar').val(); 
        $.ajax({
				type:"POST",
				url:"getlokasidetail.php",    
				data: "lokasimelamar=" + lokasimelamar ,        
				success: function (html) {                 
				  $('#getlokasidetail').html(html);
                                                   }  
                      });
     });
    $('#propinsisekarang').change(function() 
	 {
        var propinsisekarang = $('#propinsisekarang').val(); 
        $.ajax({
				type:"POST",
				url:"emget_kabupatensekarang.php",    
				data: "propinsisekarang=" + propinsisekarang ,        
				success: function (html) {                 
				  $('#getkabupatensekarang').html(html);
                                                   }  
                      });
     });
$('#tambahpendidikan').click(function()
	{
	    var codetrx = $('#codetrx').val(); 
		var level_pendidikan = $('#level_pendidikan').val(); 
		var institusi = $('#institusi').val(); 
		var lokasi = $('#lokasisekolah').val(); 
		var jurusan_id = $('#jurusan_id').val(); 
		var thn_mulai = $('#thn_mulai').val(); 
		var thn_selesai = $('#thn_selesai').val(); 
		var ipk = $('#ipk').val(); 

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
		data: "codetrx=" + codetrx+ "&level_pendidikan=" + level_pendidikan+ "&institusi=" + institusi+ "&jurusan_id=" + jurusan_id+ "&ipk=" + ipk+ "&lokasi=" + lokasi+ "&thn_mulai=" + thn_mulai+ "&thn_selesai=" + thn_selesai,         
		success: function (html){                 
		$('#hasilsimpanpendidikan').html(html);
		}  
		});
	});
	
	$('#tambahpendidikannf').click(function()
	{
	    var codetrx = $('#codetrx').val(); 
		var jenis = $('#jenis').val(); 
		var tahun = $('#tahun').val(); 
		var lama = $('#lama').val(); 
		var nama_lembaga = $('#nama_lembaga').val(); 
		var biaya = $('#biaya').val(); 
	

     if (jenis.length == 0) {
					alert("Anda harus memasukan jenis pendidikan !");
					document.formData.jenis.focus();
					return false;
		}
		  if (tahun.length == 0) {
					alert("Anda harus memasukan tahun !");
					document.formData.tahun.focus();
					return false;
		}
		 
		if (lama.length == 0) {
					alert("Anda harus lama !");
					document.formData.lama.focus();
					return false;
		}
		if (nama_lembaga.length == 0) {
					alert("Anda harus nama_lembaga!");
					document.formData.nama_lembaga.focus();
					return false;
		}
		$.ajax({
		type:"POST",
		url:"tambahdatasekolahnf.php",    
		data: "codetrx=" + codetrx+ "&jenis=" + jenis+ "&tahun=" + tahun+ "&lama=" + lama+ "&nama_lembaga=" + nama_lembaga+ "&biaya=" + biaya,         
		success: function (html){                 
		$('#hasilsimpanpendidikannf').html(html);
		}  
		});
	}); 
		$('#tambahpendidikanbhs').click(function()
	{
	    var codetrx = $('#codetrx').val(); 
		var bahasa = $('#bahasa').val(); 
		var tulis = $('#tulis').val(); 
		var baca = $('#baca').val(); 
		var bicara = $('#bicara').val(); 
		var dengar = $('#dengar').val(); 
	

     if (bahasa.length == 0) {
					alert("Anda harus memasukan bahasa !");
					document.formData.bahasa.focus();
					return false;
		}
		  if (tulis.length == 0) {
					alert("kemampuan tulis tidak boleh kosong!");
					document.formData.tulis.focus();
					return false;
		}
		 
		if (baca.length == 0) {
					alert("kemampuan baca tidak boleh kosong !");
					document.formData.baca.focus();
					return false;
		}
		if (bicara.length == 0) {
					alert("kemampuan bicara tidak boleh kosong!");
					document.formData.bicara.focus();
					return false;
		} 
			if (dengar.length == 0) {
					alert("kemampuan dengar tidak boleh kosong!");
					document.formData.dengar.focus();
					return false;
		} 
		$.ajax({
		type:"POST",
		url:"tambahdatasekolahbhs.php",    
		data: "codetrx=" + codetrx+ "&bahasa=" + bahasa+ "&tulis=" + tulis+ "&baca=" + baca+ "&bicara=" + bicara+ "&dengar=" + dengar,         
		success: function (html){                 
		$('#hasilsimpanpendidikanbhs').html(html);
		}  
		});
	});
		$('#tambahkabupaten').click(function()
	{
	    var propinsiasal = $('#propinsiasal').val(); 
		if (propinsiasal.length == 0) {
					alert("propinsi Tidak Boleh Kosong!");
					document.formData.propinsiasal.focus();
					return false;
		}
		var kabupatenB = $('#kabupatenB').val(); 
		if (kabupatenB.length == 0) {
					alert("Kabupaten Tidak Boleh Kosong!");
					document.formData.kabupatenB.focus();
					return false;
		}
        document.formData.kabupatenB.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kabupaten.php",    
		data: "kabupatenB=" + kabupatenB+ "&propinsiasal=" + propinsiasal,      
		success: function (html){                 
		$('#getkabupatenasal').html(html);
		}  
		});
	});	
	$('#tambahkecamatan').click(function()
	{

		  var kabupatenasal = $('#kabupatenasal').val(); 
		if (kabupatenasal.length == 0) {
					alert("kabupaten Tidak Boleh Kosong!");
					document.formData.kabupatenasal.focus();
					return false;
		}
		var kecamatanB = $('#kecamatanB').val(); 
		if (kecamatanB.length == 0) {
					alert("kecamatan Tidak Boleh Kosong!");
					document.formData.kecamatanB.focus();
					return false;
		}
        document.formData.kecamatanB.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kecamatan.php",    
		data: "kecamatanB=" + kecamatanB+ "&kabupatenasal=" + kabupatenasal,      
		success: function (html){                 
		$('#getkecamatanasal').html(html);
		}  
		});
	});	
	$('#tambahkelurahan').click(function()
	{

		  var kecamatanasal = $('#kecamatanasal').val(); 
		if (kecamatanasal.length == 0) {
					alert("kecamatan Tidak Boleh Kosong!");
					document.formData.kecamatanasal.focus();
					return false;
		}
		var kelurahanB = $('#kelurahanB').val(); 
		if (kelurahanB.length == 0) {
					alert("kelurahan Tidak Boleh Kosong!");
					document.formData.kelurahanB.focus();
					return false;
		}
        document.formData.kelurahanB.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kelurahan.php",    
		data: "kelurahanB=" + kelurahanB+ "&kecamatanasal=" + kecamatanasal,      
		success: function (html){                 
		$('#getkelurahanasal').html(html);
		}  
		});
	});	
	
	$('#tambahkabupatenS').click(function()
	{
	    var propinsisekarang = $('#propinsisekarang').val(); 
		if (propinsisekarang.length == 0) {
					alert("propinsi Tidak Boleh Kosong!");
					document.formData.propinsisekarang.focus();
					return false;
		}
		var kabupatenBS = $('#kabupatenBS').val(); 
		if (kabupatenBS.length == 0) {
					alert("Kabupaten Tidak Boleh Kosong!");
					document.formData.kabupatenBS.focus();
					return false;
		}
        document.formData.kabupatenBS.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kabupatensekarang.php",    
		data: "kabupatenBS=" + kabupatenBS+ "&propinsisekarang=" + propinsisekarang,      
		success: function (html){                 
		$('#getkabupatensekarang').html(html);
		}  
		});
	});	
$('#tambahkecamatanS').click(function()
	{

		  var kabupatensekarang = $('#kabupatensekarang').val(); 
		if (kabupatensekarang.length == 0) {
					alert("kabupaten Tidak Boleh Kosong!");
					document.formData.kabupatensekarang.focus();
					return false;
		}
		var kecamatanBS = $('#kecamatanBS').val(); 
		if (kecamatanBS.length == 0) {
					alert("kecamatan Tidak Boleh Kosong!");
					document.formData.kecamatanBS.focus();
					return false;
		}
        document.formData.kecamatanBS.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kecamatansekarang.php",    
		data: "kecamatanBS=" + kecamatanBS+ "&kabupatensekarang=" + kabupatensekarang,      
		success: function (html){                 
		$('#getkecamatansekarang').html(html);
		}  
		});
	});	
	$('#tambahkelurahanS').click(function()
	{

		  var kecamatansekarang = $('#kecamatansekarang').val(); 
		if (kecamatansekarang.length == 0) {
					alert("kecamatan Tidak Boleh Kosong!");
					document.formData.kecamatansekarang.focus();
					return false;
		}
		var kelurahanBS = $('#kelurahanBS').val(); 
		if (kelurahanBS.length == 0) {
					alert("kelurahan Tidak Boleh Kosong!");
					document.formData.kelurahanBS.focus();
					return false;
		}
        document.formData.kelurahanBS.value="";
        $.ajax({
		type:"POST",  
		url:"emget_kelurahansekarang.php",    
		data: "kelurahanBS=" + kelurahanBS+ "&kecamatansekarang=" + kecamatansekarang,      
		success: function (html){                 
		$('#getkelurahansekarang').html(html);
		}  
		});
	});	
	
	$('#cekdata').click(function()
	{

		  var namal = $('#namal').val(); 
		if (namal.length == 0) {
					alert("nama lengkap Tidak Boleh Kosong!");
					document.formData.namal.focus();
					return false;
		}
		var tgl_lahir = $('#tgl_lahir').val(); 
		if (tgl_lahir.length == 0) {
					alert("tgl lahir Tidak Boleh Kosong!");
					document.formData.tgl_lahir.focus();
					return false;
		}
       
        $.ajax({
		type:"POST",  
		url:"cekdata.php",    
		data: "namal=" + namal+ "&tgl_lahir=" + tgl_lahir,      
		success: function (html){                 
		$('#getcekdata').html(html);
		}  
		});
	});	
	$('#tambahkeluarga').click(function()
	{
     var codetrx = $('#codetrx').val(); 
      var jenishub_id = $('#jenishub_id').val(); 
		if (jenishub_id.length == 0) {
					alert("Hubungan keluarga Boleh Kosong!");
					document.formData.jenishub_id.focus();
					return false;
		} 
		 var nama_kel = $('#nama_kel').val(); 
		if (nama_kel.length == 0) {
					alert("Nama keluarga Boleh Kosong!");
					document.formData.nama_kel.focus();
					return false;
		}
       var genderkel = $('#genderkel').val(); 
		if (genderkel.length == 0) {
					alert("Jenis kelamin keluarga   Boleh Kosong!");
					document.formData.genderkel.focus();
					return false;
		}
		
		 var usia = $('#usia').val(); 
		if (usia.length == 0) {
					alert("usia  keluarga   Boleh Kosong!");
					document.formData.usia.focus();
					return false;
		}
		 var genderkel = $('#genderkel').val(); 
		if (genderkel.length == 0) {
					alert("Jenis kelamin keluarga   Boleh Kosong!");
					document.formData.genderkel.focus();
					return false;
		}
		var pekerjaan = $('#pekerjaan').val(); 
		var perusahaan = $('#perusahaan').val(); 
		document.formData.jenishub_id.value="";
		document.formData.nama_kel.value="";
		document.formData.genderkel.value="";
		document.formData.level_pendidikan_kel.value="";
		document.formData.usia.value="";
		document.formData.perusahaan.value="";
		document.formData.pekerjaan.value="";
        $.ajax({
		type:"POST",  
		url:"simpankeluarga.php",    
		data: "codetrx=" + codetrx+ "&jenishub_id=" + jenishub_id+ "&genderkel=" + genderkel+ "&level_pendidikan_kel=" + level_pendidikan_kel+ "&usia=" + usia+ "&pekerjaan=" + pekerjaan+ "&perusahaan=" + perusahaan+ "&nama_kel=" + nama_kel,      
		success: function (html){                 
		$('#hasilsimpankeluarga').html(html);
		}  
		});       
	}); 
    
	$('#tambahpekerjaan').click(function()
	{
     var codetrx = $('#codetrx').val(); 
      var perusahaan_riwayat = $('#perusahaan_riwayat').val(); 
		if (perusahaan_riwayat.length == 0) {
					alert("perusahaan  Tidak Boleh Kosong!");
					document.formData.perusahaan_riwayat.focus();
					return false;
		} 
		 var alamatp = $('#alamatp').val(); 
		if (alamatp.length == 0) {
					alert("alamat perusahaan Tidak Boleh Kosong!");
					document.formData.alamatp.focus();
					return false;
		}
		 var telpp = $('#telpp').val(); 
		if (telpp.length == 0) {
					alert("Telpon perusahaan Tidak Boleh Kosong!");
					document.formData.telpp.focus();
					return false;
		}
       var bidang_usaha = $('#bidang_usaha').val(); 
		if (bidang_usaha.length == 0) {
					alert("bidang usaha tidak   Boleh Kosong!");
					document.formData.bidang_usaha.focus();
					return false;
		}
		 var type_usaha = $('#type_usaha').val(); 
		if (type_usaha.length == 0) {
					alert("type usaha Tidak   Boleh Kosong!");
					document.formData.type_usaha.focus();
					return false;
		}
		 var jabatan_terakhir = $('#jabatan_terakhir').val(); 
		if (jabatan_terakhir.length == 0) {
					alert("jabatan terakhir  Tidak   Boleh Kosong!");
					document.formData.jabatan_terakhir.focus();
					return false;
		}
		 var alasan_keluar = $('#alasan_keluar').val(); 
		if (alasan_keluar.length == 0) {
					alert("alasan keluar   Tidak Boleh Kosong!");
					document.formData.alasan_keluar.focus();
					return false;
		}
		var tgl_masuk = $('#tgl_masuk').val(); 
		if (tgl_masuk.length == 0) {
					alert("tgl masuk   Tidak Boleh Kosong!");
					document.formData.tgl_masuk.focus();
					return false;
		}
		var tgl_keluar = $('#tgl_keluar').val(); 
		if (tgl_keluar.length == 0) {
					alert("tgl keluar   Tidak Boleh Kosong!");
					document.formData.tgl_keluar.focus();
					return false;
		}
		document.formData.tgl_keluar.value="";
		document.formData.tgl_masuk.value="";
		document.formData.alasan_keluar.value="";
		document.formData.jabatan_terakhir.value="";
		document.formData.type_usaha.value="";
		document.formData.bidang_usaha.value="";
		document.formData.telpp.value="";
		document.formData.alamatp.value="";
		document.formData.perusahaan_riwayat.value="";
		
        $.ajax({
		type:"POST",  
		url:"tambahpekerjaan.php",    
		data: "codetrx=" + codetrx+ "&perusahaan_riwayat=" + perusahaan_riwayat+ "&alamatp=" + alamatp+ "&telpp=" + telpp+ "&bidang_usaha=" + bidang_usaha+ "&type_usaha=" + type_usaha+ "&jabatan_terakhir=" + jabatan_terakhir+ "&alasan_keluar=" + alasan_keluar+ "&tgl_masuk=" + tgl_masuk+ "&tgl_keluar=" + tgl_keluar,      
		success: function (html){                 
		$('#hasilsimpantambahpekerjaan').html(html);
		}  
		});       
	}); 
	  
	  	$('#tambahorg').click(function()
	{
     var codetrx = $('#codetrx').val(); 
      var nama_organisasi = $('#nama_organisasi').val(); 
		if (nama_organisasi.length == 0) {
					alert("nama_ organisasi  Tidak Boleh Kosong!");
					document.formData.nama_organisasi.focus();
					return false;
		} 
		 var jenis_organisasi = $('#jenis_organisasi').val(); 
		if (jenis_organisasi.length == 0) {
					alert("jenis organisasi Tidak Boleh Kosong!");
					document.formData.jenis_organisasi.focus();
					return false;
		}
		 var th_organisasi = $('#th_organisasi').val(); 
		if (th_organisasi.length == 0) {
					alert("th organisasi Tidak Boleh Kosong!");
					document.formData.th_organisasi.focus();
					return false;
		}
       var jabatan_organisasi = $('#jabatan_organisasi').val(); 
		if (jabatan_organisasi.length == 0) {
					alert("jabatan organisasi tidak   Boleh Kosong!");
					document.formData.jabatan_organisasi.focus();
					return false;
		}
		document.formData.jabatan_organisasi.value="";
		document.formData.th_organisasi.value="";
		document.formData.jenis_organisasi.value="";
		document.formData.nama_organisasi.value="";
        $.ajax({
		type:"POST",  
		url:"tambahorg.php",    
		data: "codetrx=" + codetrx+ "&nama_organisasi=" + nama_organisasi+ "&jenis_organisasi=" + jenis_organisasi+ "&th_organisasi=" + th_organisasi+ "&jabatan_organisasi=" + jabatan_organisasi,      
		success: function (html){                 
		$('#hasilsimpantambahorg').html(html);
		}  
		});       
	}); 
	
	  	$('#tambahsakit').click(function()
	{
     var codetrx = $('#codetrx').val(); 
      var th_sakit = $('#th_sakit').val(); 
		if (th_sakit.length == 0) {
					alert("th sakit  Tidak Boleh Kosong!");
					document.formData.th_sakit.focus();
					return false;
		} 
		 var lama_sakit = $('#lama_sakit').val(); 
		if (lama_sakit.length == 0) {
					alert("lama sakit Tidak Boleh Kosong!");
					document.formData.lama_sakit.focus();
					return false;
		}
		 var penyakit = $('#penyakit').val(); 
		if (penyakit.length == 0) {
					alert("penyakit Tidak Boleh Kosong!");
					document.formData.penyakit.focus();
					return false;
		}
       var rs = $('#rs').val(); 
		if (rs.length == 0) {
					alert("rs tidak   Boleh Kosong!");
					document.formData.rs.focus();
					return false;
		}
		document.formData.rs.value="";
		document.formData.penyakit.value="";
		document.formData.lama_sakit.value="";
		document.formData.th_sakit.value="";
		 $.ajax({
		type:"POST",  
		url:"tambahsakit.php",    
		data: "codetrx=" + codetrx+ "&th_sakit=" + th_sakit+ "&lama_sakit=" + lama_sakit+ "&penyakit=" + penyakit+ "&rs=" + rs,      
		success: function (html){                 
		$('#hasilsimpantambahsakit').html(html);
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



function cek() 
      {
   var namal = document.formData.namal.value;
    if (namal.length == 0) {
		alert("nama tidak boleh kosong");
		document.formData.namal.focus();
		return false;
   	}
		var gender = document.formData.gender.value;
    if (gender.length == 0) {
		alert("Jenis Kelamin tidak boleh kosong");
		document.formData.gender.focus();
		return false;
   	}
	var golongan_darah = document.formData.golongan_darah.value;
    if (golongan_darah.length == 0) {
		alert("golongan darah tidak boleh kosong");
		document.formData.golongan_darah.focus();
		return false;
   	} 
	var alamat_asal = document.formData.alamat_asal.value;
    if (alamat_asal.length == 0) {
		alert("alamat asal tidak boleh kosong");
		document.formData.alamat_asal.focus();
		return false;
   	} 
		var strumah_asal = document.formData.strumah_asal.value;
    if (strumah_asal.length == 0) {
		alert("status rumah asal tidak boleh kosong");
		document.formData.strumah_asal.focus();
		return false;
   	} 
		var alamat_sekarang = document.formData.alamat_sekarang.value;
    if (alamat_sekarang.length == 0) {
		alert("alamat sekarang asal tidak boleh kosong");
		document.formData.alamat_sekarang.focus();
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
		var tanggungan = document.formData.tanggungan.value;
    if (tanggungan.length == 0) {
		alert("tanggungan tidak boleh kosong");
		document.formData.tanggungan.focus();
		return false;
   	} 
    var acc= $('#acc').val(); 
	if (acc=="Add")
	{	
	var fupload = document.formData.fupload.value;
    if (fupload.length == 0) {
		alert("Photo tidak boleh kosong");
		document.formData.fupload.focus();
		return false;
   	}
	}
	var tgl_melamar = document.formData.tgl_melamar.value;
    if (tgl_melamar.length == 0) {
		alert(" tgl melamar tidak boleh kosong");
		document.formData.tgl_melamar.focus();
		return false;
   	}	

	var unit_bisnis_idmelamar = document.formData.unit_bisnis_idmelamar.value;
    if (unit_bisnis_idmelamar.length == 0) {
		alert(" unit bisnis melamar tidak boleh kosong");
		document.formData.unit_bisnis_idmelamar.focus();
		return false;
   	}	
	var lokasimelamar = document.formData.lokasimelamar.value;
    if (lokasimelamar.length == 0) {
		alert(" lokasimelamar  tidak boleh kosong");
		document.formData.lokasimelamar.focus();
		return false;
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

	   $query = mysql_query('SELECT * FROM view_emp_pegawaicalon WHERE peg_id = "'.$peg_id.'" ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    $kode_asal=@$data->kode_asal;
			$kode_sekarang=@$data->kode_sekarang; 
			$codetrx=@$data->codetrx;
	   }else 
	      die('Tidak Ada data');
	}?>


<form  name="formData" action="employee_master_calonAdd.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="peg_id" id="peg_id" value="<?php echo $peg_id;?>">
<input type="hidden" name="peg_id2" id="peg_id2" value="<?php echo @$data->peg_id2; ?>">
<input type="hidden" name="acc" id="acc" value="<?php echo $acc;?>">

<div id="tabs">
 <ul>
		<li><a href="#tabs-1">Data Pribadi</a></li>
		<li><a href="#tabs-2">Data Keluarga</a></li>
		<li><a href="#tabs-3">Data Pendidikan</a></li>
		<li><a href="#tabs-4">Data Pekerjaan</a></li>
		<li><a href="#tabs-5">Data Kegiatan </a></li>
		<li><a href="#tabs-6">Data Keterangan </a></li>
		<li><a href="#tabs-7">Data Pertanyaan</a></li>
		
</ul>
<div id="tabs-1">
<center>
<table  >
<?php 
if ($acc=="Add")
{
		$length = 10;
						 $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
						 $string = '';
						 
						 for ($p = 0; $p < $length; $p++) {
						   $string .= $characters[mt_rand(0, strlen($characters))];
						 }
?>
<input type="hidden" name="codetrx"  id="codetrx"  value="<?php echo $string;?>" >
<?php
} else {
?>
<input type="hidden" name="codetrx"  id="codetrx"  value="<?php echo $codetrx;?>" >
<?php
} 
?>
<tr><td>Nama Lengkap</td><td > <?php echo @$data->namal;?></td></tr>
<tr><td>Nama Panggilan</td><td >  <?php echo @$data->namap;?></td></tr>
<tr>
<td>Jenis Kelamin </td>
<td><select name="gender" id="gender">
									   <option value="">Pilihan</option>		
										<option value="M"<?php if (!(strcmp(M, $data->gender))) {echo "SELECTED";} ?>>Laki Laki</option>
										<option value="F"<?php if (!(strcmp(F, $data->gender))) {echo "SELECTED";} ?>>Perempuan</option>
									</select>
</td>
</tr>
<tr><td>Tinggi Badan</td><td > <?php echo @$data->tinggi;?> Cm</td></tr>
<tr><td>Berat Badan</td><td >  <?php echo @$data->berat;?> Kg</td></tr>
<tr>
<td>Golongan Darah </td>
<td><select name="golongan_darah" id="golongan_darah" onKeyPress="return focusNext('alamat_asal',event)">
									   <option value="">Pilihan</option>		
										<option value="A"<?php if (!(strcmp(A, $data->golongan_darah))) {echo "SELECTED";} ?>>A</option>
										<option value="B"<?php if (!(strcmp(B, $data->golongan_darah))) {echo "SELECTED";} ?>>B</option>
									   <option value="AB"<?php if (!(strcmp(AB, $data->golongan_darah))) {echo "SELECTED";} ?>>AB</option>
									   <option value="O"<?php if (!(strcmp(O, $data->golongan_darah))) {echo "SELECTED";} ?>>O</option>
</select>
</td>
</tr>
<tr>
<td>Alamat Asal</td><td ><?php echo @$data->alamat_asal;?></td></tr>
<tr>
<td>Propinsi Asal</td>
<td >
<input type="hidden" name="kode_asal"  id="kode_asal"  value="<?php echo $kode_asal;?>" >
<input type="hidden" name="kode_sekarang"  id="kode_sekarang"  value="<?php echo $kode_sekarang;?>" >

<?php
$propinsi=substr($kode_asal,0,2);
$query_a="select * from ref_kota where   tingkat=1 order by nm_kota";
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="propinsiasal" id="propinsiasal"  >
<option value="">[Pilih]</option>
<?php 		 
while($row_a=mysql_fetch_array($result_a)) 	{
$kode=$row_a['kode'];
$kode=substr($kode,0,2);
?><option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kode, $propinsi))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>
 </td>
</tr>
<tr>
<td >Kabupaten Asal</td>
<td > <div id="getkabupatenasal"></div></td>
</tr>

</tr>
<td >Kecamatan Asal</td>
<td > <div id="getkecamatanasal"></div></td>
</tr>
</tr>
<td >Kelurahan Asal</td>
<td > <div id="getkelurahanasal"></div></td>
</tr>
<tr>
<td>Telepon Rumah Asal</td><td ><?php echo @$data->telp_asal;?></td></tr>
<tr>
<td>Status Rumah Asal </td>
		<td><select name="strumah_asal" id="strumah_asal"  onKeyPress="return focusNext('kodepos_asal',event)">
   <option value="">Pilihan</option>
        <?php 		$strumah_asal=@$data->strumah_asal;
     		$query_a="select * from status_rumah   " ;
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['status_rumah_id'];?>" 						
											<?php if (!(strcmp($row_a['status_rumah_id'], $strumah_asal))) {echo "SELECTED";} ?>>
											<?php echo $row_a['status_rumah']; ?></option>
		<?php   }   ?>
</select><font color="red">*</font>
		</td>
		</tr>
<tr>
<td>kode Pos Asal</td><td > <?php echo @$data->kodepos_asal;?></td></tr>
<tr>
<td>Alamat Sekarang</td><td > <?php echo @$data->alamat_sekarang;?></td></tr>
<tr>
<td>Propinsi Sekarang</td>
<td ><?php
$propinsis=substr($kode_sekarang,0,2);
$query_a="select * from ref_kota where   tingkat=1 order by nm_kota";
$result_a=mysql_query($query_a) or (mysql_error()) ;
?>
<select  name="propinsisekarang" id="propinsisekarang"  >
<option value="">[Pilih]</option>
<?php 		 
while($row_a=mysql_fetch_array($result_a)) 	{
$kodes=$row_a['kode'];
$kodes=substr($kodes,0,2);
?><option value="<?php echo $row_a['kode']?>" <?php if (!(strcmp($kodes, $propinsis))) {echo "SELECTED";} ?> ><?php echo $row_a['nm_kota']?></option>
<?php   }   ?>
</select>
 </td>
</tr>
<tr>
<td >Kabupaten Sekarang</td>
<td > <div id="getkabupatensekarang"></div></td>
</tr>

</tr>
<td >Kecamatan Sekarang</td>
<td > <div id="getkecamatansekarang"></div></td>
</tr>

</tr>
<td >Kelurahan Sekarang</td>
<td > <div id="getkelurahansekarang"></div></td>
</tr>

<tr>
<td>Telepon Rumah Sekarang</td><td > <?php echo @$data->telp_sekarang;?></td></tr>
<tr>
<td>Status Rumah Sekarang </td>
		<td><select name="strumah_sekarang" id="strumah_sekarang"  onKeyPress="return focusNext('kodepos_sekarang',event)">
   <option value="">Pilihan</option>
        <?php 		$strumah_sekarang=@$data->strumah_sekarang;
     		$query_a="select * from status_rumah   " ;
		  	
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>		<option value="<?php echo $row_a['status_rumah_id'];?>" 						
											<?php if (!(strcmp($row_a['status_rumah_id'], $strumah_sekarang))) {echo "SELECTED";} ?>>
											<?php echo $row_a['status_rumah']; ?></option>
		<?php   }   ?>
</select>
		</td>
		</tr>
<tr>
<td>kode Pos Sekarang</td><td > <?php echo @$data->kodepos_sekarang;?></td></tr>
		<tr>
        	<td>Tempat/ Tanggal Lahir</td>
            <td > <?php echo @$data->tempat_lahir;?>/
			<?php echo datedatesql(@$data->tgl_lahir);?>
			
			</td>
        </tr>

<tr>
		<td>Agama </td>
		<td><select name="agama_id" id="agama_id"  onKeyPress="return focusNext('hp',event)">
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
        	<td>HP </td>
            <td > <?php echo @$data->hp;?>></td>
        </tr>
		<tr>
        	<td>Telepon </td>
            <td > <?php echo @$data->telp;?></td>
        </tr>
		<tr>
        	<td>Email</td>
            <td > <?php echo @$data->email;?></td>
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
            <td > <?php echo @$data->tanggungan;?></td>
        </tr>
      <tr>
        	<td>Suku Bangsa</td>
            <td > <?php echo @$data->suku;?></td>
        </tr>
		<tr>
		<td>Warga Negara 	<?php  $warga=@$data->warga;?>	</td>
		<td><select name="warga" id="warga" onKeyPress="return focusNext('fupload',event)">
										<option value="">[Pilih]</option>		
										<option value="1"<?php if (!(strcmp(1, $warga))) {echo "SELECTED";} ?>>WNI</option>
										<option value="2"<?php if (!(strcmp(2, $warga))) {echo "SELECTED";} ?>>WNA</option>
									</select>
		</td>
		</tr>

	
	
		
		<tr>
        	<td>Photo</td> 
            <td > <img src="../images/photo/<?php echo @$data->photo;?>" width="100" height="100"></td>
        </tr>
		
	

		
		<tr>
        	<td>Tanggal  Melamar</td>
            <td > 
			<?php echo datedatesql(@$data->tgl_melamar);?>

			
			</td>
        </tr>
	 


			<tr>
        	<td>Unit Bisnis / Departemen Melamar </td>

			<td>
	
				<?php echo $unit_bisnis;?>
			
            	</td>
		
        </tr>
		<tr>
        	<td>Lokasi Melamar <?php //echo $lokasi;
			$lokasia=substr($lokasi,0,2);
			
			?></td>

			<td>
	<?php if ($otoritas_sdmpusat==1)
			{?>
            	<select name="lokasimelamar" id="lokasimelamar" onKeyPress="return focusNext('narasi',event)" >
                      <option value="">Pilihan</option>
					<?php
					
		  	         $query_a="select * FROM lokasi_kerja    where  aktif=1 and level=1 order by lokasi_kerja" ;
		  	         $result_a=mysql_query($query_a) or (mysql_error()) ;
						while($row_a=mysql_fetch_array($result_a)) 	{
						$lokasi=$row_a['lokasi'];
						$lokasi=substr($lokasi,0,2);
						?>
					<option value="<?php echo $row_a['lokasi'];?>" 	
                    <?php if ($acc<>"Add") {?>						
											<?php if (!(strcmp($lokasi, $lokasia))) {echo "SELECTED";} ?>
					<?php }?>>
											<?php echo $row_a['lokasi_kerja']; ?></option>
					<?php  
					   }
					?>
		        </select>
				<?php
				} else {?>
				<input type="hidden" name="lokasimelamar" id="lokasimelamar" value="<?php echo $lokasi;?>"> <?php echo $lokasi_kerja;?>
				<?php }?>
				<font color="red">*</font>
            	</td>
		
        </tr>
          	<tr>
        	<td>Lokasi Melamar Detail</td>

			<td>
     <div id="getlokasidetail"></div>
            	</td>
		
        </tr>

	
<tr>
        	<td>Keterangan</td> 
            <td > <?php echo @$data->narasi;?></td>
        </tr>
			
		
      
  




</table>
</center>
</div>
<div id="tabs-2">
<center>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr >
<td width="5%">Hubungan</td>
<td width="25%">Nama </td>
<td width="5%">L/P </td>
<td width="5%">Usia</td>
<td width="25%">Pendidikan </td>
<td width="30%">Pekerjaan</td>
<td width="30%">Perusahaan</td>


<?php
     $query_cek = "SELECT * FROM view_keluarga WHERE codetrx='$codetrx'   order by usia desc";

     $result_cek = mysql_query($query_cek);

	  while($row_a=mysql_fetch_array($result_cek)) 
			 { 
			 ?>
			 <tr >
			 <td><?php echo $row_a['jenishub']?>&nbsp; </td>
			 <td><?php echo $row_a['nama']?> &nbsp; </td> 
			 <td><?php echo $row_a['genderkel']?>&nbsp; </td>
			 <td><?php echo $row_a['usia']?>&nbsp; </td>
			 <td><?php echo $row_a['level_pendidikan']?>&nbsp; </td>
			 <td><?php echo $row_a['pekerjaan']?>&nbsp; </td>
			 <td><?php echo $row_a['perusahaan']?>&nbsp; </td>
			
			 </tr>
			<?php 
	
		
			}
       ?>
	   
			 
			 </table>



</center>
</div>
	
	
<div id="tabs-3">
1. Formal
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8">
<td ><strong><center>Tingkat</center></strong></td>
<td ><strong><center>Nama Sekolah</center></strong></td>
<td ><strong><center>Lokasi Sekolah</center></strong></td>
<td ><strong><center>Jurusan</center></strong></td>
<td ><strong><center>Th Mulai</center></strong></td>
<td ><strong><center>Th Selesai</center></strong></td>
<td ><strong><center>IPK/Nilai</center></strong></td>



<?php 
     $query_cek = "SELECT * FROM view_pendidikan WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { $jmldata++;
			
			
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $row_a['level_pendidikandef'];?> </td>
<td><?php echo $row_a['institusi'];?> </td>
<td><?php echo $row_a['lokasi'];?> </td>
<td><?php echo $row_a['jurusan'];?> </td>
<td><?php echo $row_a['thn_mulai'];?> </td>
<td><?php echo $row_a['thn_selesai'];?> </td>
<td><?php echo $row_a['ipk'];?> </td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>
2. Non Formal
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8">
<td ><strong><center>jenis</center></strong></td>
<td ><strong><center>tahun</center></strong></td>
<td ><strong><center>lama</center></strong></td>
<td ><strong><center>nama lembaga</center></strong></td>
<td ><strong><center>biaya</center></strong></td>




<?php 
     $query_cek = "SELECT * FROM pendidikannonf WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { $jmldata++;
			
			
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $row_a['jenis'];?> </td>
<td><?php echo $row_a['tahun'];?> </td>
<td><?php echo $row_a['lama'];?> </td>
<td><?php echo $row_a['nama_lembaga'];?> </td>
<td><?php echo $row_a['biaya'];?> </td>

		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>
3. Bahasa
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8">
<td ><strong><center>bahasa</center></strong></td>
<td ><strong><center>tulis</center></strong></td>
<td ><strong><center>baca</center></strong></td>
<td ><strong><center>bicara</center></strong></td>
<td ><strong><center>dengar</center></strong></td>




<?php 
     $query_cek = "SELECT * FROM pendidikan_bahasa WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$bahasa=$row_a['bahasa'];		
	$tulis=$row_a['tulis'];	if ($tulis==0) {$tulis="Pasif";} else { $tulis="Aktif";}
	$baca=$row_a['baca'];	if ($baca==0) {$baca="Pasif";} else { $baca="Aktif";}
	$bicara=$row_a['bicara'];	if ($bicara==0) {$bicara="Pasif";} else { $bicara="Aktif";}
	$dengar=$row_a['dengar'];	if ($dengar==0) {$dengar="Pasif";} else { $dengar="Aktif";}		
			 ?>
<tr bgcolor="#D8FFA8" >
<td><?php echo $bahasa;?> </td>
<td><?php echo $tulis;?> </td>
<td><?php echo $baca;?> </td>
<td><?php echo $bicara;?> </td>
<td><?php echo $dengar;?> </td>

		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>
	


	
</div>	
<div id="tabs-4">
	1. Riwayat pekerjaan
<?php 
     $query_cek = "SELECT * FROM pengalamankerja WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$perusahaan_riwayat=$row_a['perusahaan_riwayat'];
	$alamatp=$row_a['alamatp'];
	$telpp=$row_a['telpp'];
	$bidang_usaha=$row_a['bidang_usaha'];
	$type_usaha=$row_a['type_usaha'];
	$jabatan_terakhir=$row_a['jabatan_terakhir'];
	$tgl_masuk=$row_a['tgl_masuk'];
	$tgl_masuk=datedatesql($tgl_masuk);
	$tgl_keluar=$row_a['tgl_keluar'];
	$tgl_keluar=datedatesql($tgl_keluar);
	$jabatan_akhir=$row_a['jabatan_akhir'];
	$alasan_keluar=$row_a['alasan_keluar'];
	
?>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8"><td ><strong>perusahaan</strong></td><td ><?php echo $perusahaan_riwayat;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>alamat</strong></td><td ><?php echo $alamatp;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>Telepon</strong></td><td ><?php echo $telpp;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>bidang usaha</strong></td><td ><?php echo $bidang_usaha;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>type usaha</strong></td><td ><?php echo $type_usaha;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>jabatan terakhir</strong></td><td ><?php echo $jabatan_terakhir;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>tgl masuk</strong></td><td ><?php echo $tgl_masuk;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>tgl keluar</strong></td><td ><?php echo $tgl_keluar;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>jabatan akhir</strong></td><td ><?php echo $jabatan_akhir;?></td></tr>
<tr bgcolor="#D8FFA8"><td ><strong>alasan keluar</strong></td><td ><?php echo $alasan_keluar;?></td></tr>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">

<tr><td>2.Prestasi/Penghargaan yang pernah diperoleh selama bekerja</td>
<td><?php echo @$data->prestasi;?>
<tr><td>3.Jabatan Yang Dilamar</td>
<td><?php echo @$data->jabatandilamar;?>
<tr><td>4.Gaji yang diharapkan (uang makan & Transfortasi sudah kena Pajak) Rp</td>
<td><?php echo number_format(@$data->gajidiharapkan, 2, ',', '.'); ?> 
	
<tr><td>5.Tunjangan yang diharapkan </td>
<td><?php echo @$data->tunjangandiharapkan;?>

</table>	
</div>	
	
<div id="tabs-5">
<table border="1" width="100%" cellpadding="0" cellspacing="0" align="center">
<tr><td>1. Hobi / kegemaran</td>
<td><?php echo @$data->hobi;?></td></tr>
<tr><td colspan="2">2. Pengalaman meminmpin dan Organisasi yang Masih atau yang pernah diikuti:</td></tr>
</table>
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8"><td ><strong>nama organisasi</strong></td><td ><strong>jenis organisasi </strong></td><td ><strong>Th organisasi </strong></td><td ><strong>Jabatan</strong></td></tr>

<?php 
     $query_cek = "SELECT * FROM organisasi WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$nama_organisasi=$row_a['nama_organisasi'];
	$jenis_organisasi=$row_a['jenis_organisasi'];
	$th_organisasi=$row_a['th_organisasi'];
	$jabatan_organisasi=$row_a['jabatan_organisasi'];

	
?>
<tr ><td ><?php echo $nama_organisasi;?></td><td ><?php echo $jenis_organisasi;?></td><td ><?php echo $th_organisasi;?></td><td ><?php echo $jabatan_organisasi;?></td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>

</div>
<div id="tabs-6">
1. sakit berat yang di rawat di Rumah sakit atau sakit yang lama sembuh nya
<table border="1" width="100%" cellpadding="1" cellspacing="1" align="center">
<tr bgcolor="#D8FFA8"><td ><strong>Th Sakit</strong></td>
<td ><strong>lama sakit</strong></td>
<td ><strong>penyakit</strong></td>
<td ><strong>RS</strong></td>
</tr>

<?php 
     $query_cek = "SELECT * FROM sakit WHERE codetrx='$codetrx'   ";

     $result_cek = mysql_query($query_cek);
	while($row_a=mysql_fetch_array($result_cek)) 
			 { 
	$th_sakit=$row_a['th_sakit'];
	$lama_sakit=$row_a['lama_sakit'];
	$penyakit=$row_a['penyakit'];
	$rs=$row_a['rs'];

	
?>
<tr ><td ><?php echo $th_sakit;?></td>
<td ><?php echo $lama_sakit;?></td>
<td ><?php echo $penyakit;?></td>
<td ><?php echo $rs;?></td>
		    
			 
			 </tr>
			<?php 
			
			}
       ?>
			 </table>
<table border="1" width="100%" cellpadding="0" cellspacing="0" align="center">
<tr><td>
2. Nama Rekomendasi </td><td><input type="text" name="rekomendasi" id="rekomendasi" value="<?php echo @$data->rekomendasi;?>"  onKeyPress="return focusNext('',event)"  size="50"/></td></tr>
</table>
</div>    	
<div id="tabs-7">
<table border="1" width="100%" cellpadding="0" cellspacing="0" align="center">
<tr><td>
1. Apakah sdr Mempunyai family/temen yang pernah atau saat ini sedang bekerja di  <?php echo $_SESSION['namapt'];?>? kalau ada jelaskan nama,bagian dan tempat kerjanya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->family;?></td></tr>
<tr><td>
2. Apa motivasi sodara ingin bekerja di  <?php echo $_SESSION['namapt'];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->motivasi;?></td></tr>
<tr><td>
3. Bila diterima di  <?php echo $_SESSION['namapt'];?>.apakah sdr bersedia ditempatkan disetiap unit yang ada di  <?php echo $_SESSION['namapt'];?></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->penempatan_unit;?></td></tr>
<tr><td>
4. Bila diterima di  <?php echo $_SESSION['namapt'];?>.apakah sdr bersedia ditempatkan diseluruh wilayah RI? Alasan nya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->penempatan_ri;?></td></tr>
<tr><td>
5. Bila diterima di  <?php echo $_SESSION['namapt'];?>.apakah sdr bersedia menjalani kontrak 3-12 bulan tanpa terputus? Alasannya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->bersedia_kontrak;?></td></tr>
<tr><td>
6. Apabila mengundurkan diri sebelum berakhirnya kontrak kerja,Apakah sdr Bersedia membayar ganti rugi kepada Perusahaan sebesar 1 (satu) kali gaji dikalikan masa kontrak kerja? Alasan nya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->bersedia_ganti;?></td></tr>
<tr><td>
7. Apabila  sdr ditempatkan diluar kota penerimaan,namun tidak disediakan perumahaan,apakah sdr masih bersedia? Alasannya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->bersedia_tanparumah;?></td></tr>
<tr><td>
8. Sebutkan hal-hal yang menjadi kelebihan dan kekurangan yang ada pada diri sdr</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->kelebihan_kekurangan;?></td></tr>
<tr><td>
9. Keterampilan apa yang sdr tawarkan kepada kami?</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;"<?php echo @$data->keterampilan;?></td></tr>
<tr><td>
10. Apa yang akan sdr lakukan bila menemukan tindak kecurangan/penyimpangan dalam bekerja</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->tidak_kecurangan;?></td></tr>
<tr><td>
11. Apakah sdr bersedia bekerja shifting dan melebihi waktu yang ditentukan? jika tidak kemukankan alasan nya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->bersedia_shifting;?></td></tr>
<tr><td>
12. Apakah sdr bersedia bekerja pada hari raya keagamaan/ hari libur nasional?  jika tidak kemukankan alasan nya</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$data->bekerja_harilibur;?></td></tr>
  <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">
    </td>
	</tr>

</table>	
</div>	



</div>


</from>
</body>
</html>
<?php 
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";		
$file_js 	= "../plugin/table/all.js";	
?>
<body >
</head>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$('#lokasi').change(function() {
         var lokasi = document.formData.lokasi.value;
	
     $.ajax({
			type:"POST",
			url:"getlokasi2.php",    
		    data: 'lokasi=' + lokasi,   	
			success: function (html){                 
			  $('#kdlokasi').html(html);
			    }  
   });
  });	     
  
 $('#tambahlokasi').click(function()
				{
				
			  
				var lokasi2 = document.formData.lokasi2.value;
	            var lokasi_kerja =document.formData.lokasi_kerja.value;
               var alamat =document.formData.alamat.value;
               var aktif =document.formData.aktif.value;
				if (lokasi_kerja.length == 0) {
					alert("lokasi  kerja tidak Boleh kosong");
					document.formData.lokasi_kerja.focus();
					return false;
				}
				if (alamat.length == 0) {
					alert("alamat  kerja tidak Boleh kosong");
					document.formData.alamat.focus();
					return false;
				}
				if (aktif.length == 0) {
					alert("Status aktif  kerja tidak Boleh kosong");
					document.formData.aktif.focus();
					return false;
				}
				$.ajax({
			    type:"POST",
                url:"getlokasi2.php",    
                data: "lokasi2=" + lokasi2+ "&lokasi_kerja=" + lokasi_kerja+ "&alamat=" + alamat+ "&aktif=" + aktif, 
                success: function (html){                 
               $('#kdlokasi').html(html);
					}  
					});
				});	
	
		
}); 
</script>
<body >

<center><h2> Parameter Lokasi Kerja Level 2</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form name="formData" id="formData"  >
<table width="700" border="1" cellspacing="0" cellpadding="0">
<tr> <td  class="left">Lokasi kerja level 1</td>
	<td class="right">
			
<select name="lokasi"  id="lokasi" > 
			<option value=""> Pilih</option>			
			
<?php 

           $sql = "SELECT * FROM lokasi_kerja  where level=1  order by lokasi";
         
		
 $hasil=mysql_query($sql);
 while ($baris=mysql_fetch_array($hasil))
 {		
?>
<option value="<?php echo $baris["lokasi"];?>"><?php echo $baris["lokasi_kerja"];?></option>
<?php }?>
</select>		
			</td>
    </tr>
<tr> <td colspan="2" > <div  id="kdlokasi"></div><td></tr>
<tr><td colspan="2" class="left"><input  type="button" value="Kembali" onclick="self.history.back()">| <input type="button" name="tambahlokasi" id="tambahlokasi" value="[ Simpan ]" > </td></tr>
</table>
</form>

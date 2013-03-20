<?php 
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";		
$file_js 	= "../plugin/table/all.js";
 if(isSet($_GET['kecamatan'])) 
	{
$kecamatan=$_GET['kecamatan'];
}	
?>
<body >
</head>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
cekkelurahan();
     
  
 $('#tambahkelurahan').click(function()
				{
				
			  
				var kode4 = document.formData.kode4.value;
	            var nm_kota =document.formData.nm_kota.value;
             
				if (nm_kota.length == 0) {
					alert("Kelurahan tidak Boleh kosong");
					document.formData.nm_kota.focus();
					return false;
				}
				
				$.ajax({
			    type:"POST",
                url:"getkota4.php",    
                data: "kode4=" + kode4+ "&nm_kota=" + nm_kota, 
                success: function (html){                 
               $('#hasilkelurahan').html(html);
					}  
					});
				});	
	
		
}); 
function cekkelurahan()
{
  var kecamatan = document.formData.kecamatan.value;

  $.ajax({
    type:"POST",
    url:"getkota4.php",    
  data: 'kecamatan=' + kecamatan,          
    success: function (html){                 
      $('#hasilkelurahan').html(html);
    }  
   });

} 	 
</script>
<body >

<center><h2> Parameter Kelurahan</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form name="formData" id="formData"  >
<input type="hidden" name="kecamatan" id="kecamatan" value="<?php echo $kecamatan;?>">

<tr> <td colspan="2" > <div  id="hasilkelurahan"></div><td></tr>
<tr><td colspan="2" class="left"><input  type="button" value="Kembali" onclick="self.history.back()">| <input type="button" name="tambahkelurahan" id="tambahkelurahan" value="[ Simpan ]" > </td></tr>
</table>
</form>

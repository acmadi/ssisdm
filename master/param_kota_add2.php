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
$('#propinsi').change(function() {
         var propinsi = document.formData.propinsi.value;
	
     $.ajax({
			type:"POST",
			url:"getkota2.php",    
		    data: 'propinsi=' + propinsi,   	
			success: function (html){                 
			  $('#kdkota').html(html);
			    }  
   });
  });	     
  
 $('#tambahkota').click(function()
				{
				
			  
				var kode2 = document.formData.kode2.value;
	            var nm_kota =document.formData.nm_kota.value;
             
				if (nm_kota.length == 0) {
					alert("Kota tidak Boleh kosong");
					document.formData.nm_kota.focus();
					return false;
				}
				
				$.ajax({
			    type:"POST",
                url:"getkota2.php",    
                data: "kode2=" + kode2+ "&nm_kota=" + nm_kota, 
                success: function (html){                 
               $('#kdkota').html(html);
					}  
					});
				});	
	
		
}); 
</script>
<body >

<center><h2> Parameter Kota</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form name="formData" id="formData"  >
<table width="700" border="1" cellspacing="0" cellpadding="0">
<tr> <td  class="left">Propinsi</td>
	<td class="right">
			
<select name="propinsi"  id="propinsi" > 
			<option value=""> Pilih</option>			
			
<?php 

           $sql = "SELECT * FROM ref_kota  where tingkat=1  order by nm_kota";
         
		
 $hasil=mysql_query($sql);
 while ($baris=mysql_fetch_array($hasil))
 {		
?>
<option value="<?php echo $baris["kode"];?>"><?php echo $baris["nm_kota"];?></option>
<?php }?>
</select>		
			</td>
    </tr>
<tr> <td colspan="2" > <div  id="kdkota"></div><td></tr>
<tr><td colspan="2" class="left"><input  type="button" value="Kembali" onclick="self.history.back()">| <input type="button" name="tambahkota" id="tambahkota" value="[ Simpan ]" > </td></tr>
</table>
</form>

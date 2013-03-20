<?php
$posisi=2;
include "../atas.php";

//include "../include/conn.php";
//include "../include/security.inc.php";
//include "../include/conn.php";
//include "../include/common.php";
//include "../include/variables.php";


$file_css 	= "../plugin/table/all.css";
$file_js 	= "../plugin/table/all.js";
$file_img 	= "../plugin/table/green.jpg";
$nrp=$_SESSION['nrp'];

?>
<script type="text/javascript">
$(document).ready(function(){

 $('#Coa').change(function() {
         
          var Coa = document.formData.Coa.value;
          alert (Coa);
		   $.ajax({
			type:"POST",
			url:"getcoa.php",    
		    data: 'Coa=' + Coa,   	
			success: function (html){                 
			  $('#KdCoa').html(html);
			    }  
   });
  });	     
  
 $('#tambahcoa').click(function()
				{
				
			    var Coa = document.formData.Coa.value;
				var KodeCoa = document.formData.KodeCoa.value;
	            var NamaCoa =document.formData.NamaCoa.value;

               
				if (NamaCoa.length == 0) {
					alert("Coa Name Please");
					document.formData.NamaCoa.focus();
					return false;
				}
				
	
		       $.ajax({
			    type:"POST",
                url:"SaveCoalevel2.php",    
                data: "Coa=" + Coa+ "&KodeCoa=" + KodeCoa+ "&NamaCoa=" + NamaCoa,    
                success: function (html){                 
               $('#KdCoa').html(html);
					}  
					});
				});	
	
		
}); 
</script>
  <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../script.js"></script>

<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<div id="wrapper" class="">		
		<div id="sub-header">		
			<div class="container">				
				<div class="grid grid_24">
					<h2>Add Master Coa Level 2  </h2>
				</div> <!-- .grid -->			
			</div> <!-- .container -->
		</div> <!-- #sub-header -->
	

		<div id="content" class="">				
			<div class="container">	
				<div class="grid grid_24">
				
              	
			<form name="formData" id="formData"  >
<table width="700" border="0" cellspacing="0" cellpadding="0">
<tr> <td  class="left">Level 1 Coa Code</td>
	<td class="right">
			
<select name="Coa"  id="Coa" > 
			<option value=""> select</option>			
			
<?php 

           $sql = "SELECT KodeCoa, CONCAT(KodeCoa,' - ',NamaCoa) as test FROM acc_tablecoa  where Level=1  order by KodeCoa";
         
		
 $hasil=mysql_query($sql);
 while ($baris=mysql_fetch_array($hasil))
 {		
?>
<option value="<?php echo $baris["KodeCoa"];?>"><?php echo $baris["test"];?></option>
<?php }?>
</select>		
			</td>
    </tr>
<tr>
			
          <td colspan="2" class="left"> 

			
		
	        <div  id="KdCoa"></div>
			
    </tr>


	
	
<tr>
			
          <td colspan="2" class="left"><input  type="button" value="Kembali" onclick="self.history.back()">| <input type="button" name="tambahcoa" id="tambahcoa" value="[ Save ]" class="btnform" onclick="showSaveCoa2()"> </td>

			
    </tr>


		
	</table>
	   
</form>

					
						
						
						
					
				</div> <!-- .grid -->			
			</div> <!-- .container -->
		</div> <!-- #content -->	
	</div>
<!-- #wrapper -->



<?php
include "../bawah.php";
?>
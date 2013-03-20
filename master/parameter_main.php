<?php
include "../atas.php";
$file_css 	= "../plugin/table/all.css";
$nama=$_SESSION['nama'];

?>
 <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="..js/script.js"></script>
   <!--fancybox start-->
	<script type="text/javascript" src="../plugin/fancybox/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="../plugin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../plugin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="../plugin/fancybox/style.css" />
<!--<script type="text/javascript" src="notifikasigrafik.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function() {	
        $("#ajax5").fancybox(); // ajax
            $("#ifra01").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra02").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra03").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra04").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra05").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			
		
		});
	</script>
	<!--fancybox end-->


<div id="sub-header">		
	<div class="container">				
		<div class="grid grid_24">
			<h2>Parameter SDM</h2>
		</div> <!-- .grid -->			
	</div> <!-- .container -->
</div> <!-- #sub-header -->
<form method="post" action="parameter_main.php" id="contactform">
	<center>		
<table   width="30%" border="0">
	<tr>
	<td><a class="addspeech" id="ifra01" title="PARAMETER UNIT BISNIS" href="param_ub.php" ><img src="../images/ub.jpg" ></a></td>
    <td><a class="addspeech" id="ifra02" title="PARAMETER LOKASI KERJA" href="param_lokasikerja.php" ><img src="../images/lokasikerja.jpg" ></a></td>
	<td><a class="addspeech" id="ifra03" title="PARAMETER JABATAN" href="param_jabatan.php" ><img src="../images/jabatan.jpg" ></a></td>
		</tr>
		<tr>
	<td><a class="addspeech" id="ifra04" title="PARAMETER KOTA" href="param_kota.php" ><img src="../images/kota.jpg" ></a></td>
    <td><a class="addspeech" id="ifra05" title="PARAMETER JURUSAN" href="param_jurusan.php" ><img src="../images/jurusan.jpg" ></a></td>
    	
		</tr>
	</table>
</center>	

	



</form> 
<?php
include "../bawah.php";
?>
<?php
$posisi=2;
include "../atas.php";
$file_css 	= "../plugin/table/all.css";

$nama=$_SESSION['nama'];

?>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
   <!--fancybox start-->
	<script type="text/javascript" src="plugin/fancybox/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="plugin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="plugin/fancybox/style.css" />
<!--<script type="text/javascript" src="notifikasigrafik.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function() {	
        $("#ajax3").fancybox(); // ajax
            $("#ifra01").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra02").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra03").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			
		
		});
	</script>
	<!--fancybox end-->


<div id="sub-header">		
	<div class="container">				
		<div class="grid grid_24">
			<h2>Data Pegawai </h2>
		</div> <!-- .grid -->			
	</div> <!-- .container -->
</div> <!-- #sub-header -->
<form method="post" action="employee_master.php" id="contactform">
			
<table   width="100%" border="0">
	<tr>
	<td><a class="addspeech" id="ifra01" title="DATA CALON KARYAWAN" href="employee_master.php" ><img src="images/kontrak.jpg" ></a></td>
    <td><a class="addspeech" id="ifra02" title="Data Pegawai" href="kpp/trx_kpp.php" ><img src="images/kpp.jpg" ></a></td>
	<td><a class="addspeech" id="ifra03" title="Data Pegawai KELUAR" href="perintahm/perintah.php?flagProses=M" ><img src="images/peintahM.jpg" ></a></td>
		</tr>
	</table>


	



</form> 
<?php
include "../bawah.php";
?>
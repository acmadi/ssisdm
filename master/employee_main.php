<?php
$posisi=2;
include "../atas.php";
$file_css 	= "../plugin/table/all.css";

$nama=$_SESSION['nama'];

?>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
   <!--fancybox start-->
	<script type="text/javascript" src="../plugin/fancybox/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="../plugin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../plugin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="../plugin/fancybox/style.css" />
<!--<script type="text/javascript" src="notifikasigrafik.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function() {	
        $("#ajax7").fancybox(); // ajax
            $("#ifra01").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra02").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra03").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra04").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra05").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra06").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra07").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			
		
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
	<center>		
<table   width="30%" >
	<tr>
	<td></td>
   <td></td>
    
	<td><a class="addspeech" id="ifra01" title="PEGAWAI TETAP" href="employee_tetap.php" ><img src="../images/tetap.jpg" ></a></td>
	<td rowspan="3"><a class="addspeech" id="ifra02" title="PEGAWAI KELUAR" href="employee_keluar.php" ><img src="../images/pegawaikeluar.jpg" ></a></td>
	</tr>
	<tr>
	<td><a class="addspeech" id="ifra03" title="CALON PEGAWAI" href="employee_master_calon.php" ><img src="../images/calonpegawai.jpg" ></a></td>
   <td><a class="addspeech" id="ifra04" title="LULUS INTERVIEW" href="employee_master_calonlulus.php" ><img src="../images/interview.jpg" ></a></td>
    
	<td><a class="addspeech" id="ifra05" title="PEGAWAI KONTRAK" href="employee_kontrak.php" ><img src="../images/kontrak.jpg" ></a></td>
	
	</tr>
	<tr>
	<td><a class="addspeech" id="ifra06" title="TIDAK LULUS INTERVIEW" href="employee_master_calontlulus.php" ><img src="../images/interviewtl.jpg" ></a></td>
   <td></td>
    
	<td><a class="addspeech" id="ifra07" title="PEGAWAI KONTRAK ULANG" href="employee_master_kontrakulang.php" ><img src="../images/kontrakulang.jpg" ></a></td>

	</tr>
	</table>
</center>	

	



</form> 
<?php
include "../bawah.php";
?>
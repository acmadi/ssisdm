<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>-</title>
   <script type="text/javascript" src="./js/jquery.js"></script>
   <!--text start-->
	<link href="plugin/text/color.css" rel="stylesheet" type="text/css" />
	<link href="plugin/text/noscript.css" rel="stylesheet" type="text/css" id="noscript" media="screen,all"  />
	<!--text end-->
   <!--fancybox start-->
	<script type="text/javascript" src="plugin/fancybox/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="plugin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="plugin/fancybox/style.css" />
	<script type="text/javascript">
		$(document).ready(function() {	
        $("#ajax30").fancybox(); // ajax
            $("#ifra01").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra02").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra03").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra04").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra05").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra06").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra07").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra08").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra09").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra10").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });			
			$("#ifra11").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra12").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra13").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra14").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra15").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra16").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
		    $("#ifra17").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra18").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });			
			$("#ifra19").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra20").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra21").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra22").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra23").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
			$("#ifra24").fancybox({ 'width': '100%','height': '100%','autoScale': true,'transitionIn': 'elastic','transitionOut': 'none','type': 'iframe' });
		
		
		});
	</script>
		<link rel="stylesheet" href="css/superfish.css" media="screen">
		<script src="js/jquery-1.9.0.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<!--tab menu end-->
	<link type="text/css" href="plugin/ui/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
	<script type="text/javascript" src="plugin/ui/jquery-ui-1.8.16.custom.min.js"></script>
	<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
	<!--tab menu end-->		
<script>    
$(document).ready(function(){
   cekgrafikpenerimaan();
 
});
function cekgrafikpenerimaan()
{
  
  var tninventori = document.formb.tninventori.value;
   $.ajax({
    type:"POST",
    url:"getgrafikpenerimaan.php",    
  data: 'tninventori=' + tninventori,          
    success: function (html){                 
      $('#tampilkangrafikpenerimaan').html(html);
    }  
   });
}




</script>
</head>
<body >
<form id="formb" name="formb"  >

<div id="tabs">
  <ul>
		<li><a href="#tabs-1">KONTROL </a></li>
		<li><a href="#tabs-2">MASTER </a></li>
		<li><a href="#tabs-3">LOGISTIK</a></li>
		<li><a href="#tabs-4">MARKETING</a></li>

 </ul>
 
	<div id="tabs-1">
		<ul class="sf-menu" id="example">
			<li class="current">
				<a href="followed.html">menu item 1</a>
				<ul>
					<li>
						<a href="followed.html">menu item that is quite long</a>
					</li>
					<li class="current">
						<a href="followed.html">menu item</a>
						<ul>
							<li class="current"><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="followed.html">menu item 2</a>
			</li>
			<li>
				<a href="followed.html">menu item 3</a>
				<ul>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">short</a></li>
							<li><a href="followed.html">short</a></li>
							<li><a href="followed.html">short</a></li>
							<li><a href="followed.html">short</a></li>
							<li><a href="followed.html">short</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
					<li>
						<a href="followed.html">menu item</a>
						<ul>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
							<li><a href="followed.html">menu item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="followed.html">menu item 4</a>
			</li>	
		</ul>
	<center>
		<table   width="100%" border="1">
		<tr >
		 <td colspan="2"><center>Grafik   Inventori</center></td>
        </tr >
		 <tr >
    	<td align="right"><strong>Year </strong></td>
        <td ><input type="text" name="tninventori" id="tninventori" size="5" maxlength="4"  /><input type="button" name="Cek" id="Cek" value="Cek" class="but"  onclick="cekgrafikpenerimaan()" /> </td>
        </tr>  	
        <tr >
    	<td colspan="2">
		<div id="tampilkangrafikpenerimaan"></div>
		</td>
        </tr>  
		</table>
		</center>
	</div>
	
	<div id="tabs-2">
	<center>
		<table border="1" width="100%" cellpadding="0" cellspacing="0" align="center">
	
		<tr ><td><a class="addspeech" id="ifra01" title="Employee Data" href="master/master_pegawai.php" >1. Employee Master</a></td></tr>
		<tr ><td><a class="addspeech" id="ifra02" title="Position Data" href="master/master_jabatan.php" >&nbsp;&nbsp;&nbsp;1.1. Position Parameter</a></td></tr>
		<tr ><td><a class="addspeech" id="ifra03" title="Departement Data" href="master/master_departemen.php" >&nbsp;&nbsp;&nbsp;1.2. Departement Parameter</a></td></tr>
		
		<tr ><td><a class="addspeech" id="ifra04" title="Goods " href="master/master_barang.php" >2. Material Master</a></td></tr>
		<tr ><td><a class="addspeech" id="ifra05" title="Parameter set of goods" href="master/parameter_satuan.php" >&nbsp;&nbsp;&nbsp;2.2.  set of Material Parameter</a></td></tr>
		<tr ><td><a class="addspeech" id="ifra06" title="Parameter of goods brand"  href="master/parameter_merek.php" >&nbsp;&nbsp;&nbsp;2.3. Brand of Material Parameter</a></td></tr>
		<tr ><td><a class="addspeech" id="ifra07" title="Parameter of goods group" href="master/parameter_kelompok.php" >&nbsp;&nbsp;&nbsp;2.4. Group of Material Parameter</a></td></tr>
    	<tr ><td><a class="addspeech" id="ifra09" title="Supplier Data" href="master/master_supplier.php" >3. Supllier Master </a></td></tr>
		<tr ><td><a class="addspeech" id="ifra10" title="Customer Data" href="master/master_customer.php" >4. Customer Master </a></td></tr>
		<tr ><td><a class="addspeech" id="ifra11" title="Product Data" href="master/master_product.php" >5. Product Master </a></td></tr>
      	<tr ><td><a class="addspeech" id="ifra12" title="Parameter Type of Product" href="master/param_type_product.php" >&nbsp;&nbsp;&nbsp;1.1. Type Product Parameter</a></td></tr>
	
		</table>
		</center>
	</div>
	
	
<div id="tabs-3"><center>
	<table   width="30%" border="0">
	<tr><td width="30%"></td><td width="30%"><a class="addspeech" id="ifra13" title="MATERIAL REQUESTION" href="trxlogistik/permintaanbarang.php" ><img src="images/rsp.jpg" /></img></a></td><td width="30%"></td> </tr>
	<tr><td width="30%"></td><td width="30%"><a class="addspeech" id="ifra14" title="VERIFICATION" href="trxlogistik/permintaanbarangverifikasi.php" ><img src="images/verifikasi.jpg" /></img></a></td><td width="30%"></td> </tr>
	<tr><td width="30%"><a class="addspeech" id="ifra15" title="RETURN" href="trxlogistik/return.php" ><img src="images/return.jpg" /></img></a></td><td width="30%"><a class="addspeech" id="ifra16" title="WAREHOUSE" href="trxlogistik/gudang.php" ><img src="images/warehouse.jpg" /></img></a></td><td width="30%"><a class="addspeech" id="ifra17" title="PURCHASING ORDER" href="trxlogistik/po.php" ><img src="images/po.jpg" /></img></a></td> </tr>
	<tr><td width="30%" rowspan="3"><img src="images/panah.jpg" /></img></a> </td><td width="30%"><img src="images/alailable.jpg" /></img></td><td width="30%"><a class="addspeech" id="ifra18" title="OUT OF STOCK" href="trxlogistik/oos.php" ><img src="images/oos.jpg" /></img></a></td> </tr>
	
	<tr><td width="30%"><a class="addspeech" id="ifra19" title="ONTRANSIT LIST" href="trxlogistik/sot.php" ><img src="images/delivery.jpg" /></img></a></td><td width="30%"></td> </tr>
	<tr><td width="30%"><a class="addspeech" id="ifra20" title="MATERIAL USE" href="trxlogistik/use.php" ><img src="images/use.jpg" /></img></a></td><td width="30%"></td> </tr>
	
	
	

	</table>
	</center>
</div>	
	
<div id="tabs-4">
	<table style="text-align:left;border:none;background-color:#FFFFFF;height: 5em;width: 12em;-moz-border-radius: 1em 1em 1em 1em;border-radius: 1em 1em 1em 1em;">
	
	</table>
</div>	
	




</div>
<hr>
<table align="center" border="0" width:"800px">
		<tr>
			
			<td >
				
                    Name: <?php echo $_SESSION['nama'];?><br />
                    Employee Number: <?php echo $_SESSION['nrp'];?><br />
        			
					<a href="logout.php" class="addspeech"  title="click to exit" 
					onclick="return confirm('Sure exit??')"><span style="color:#FF0000;">Exit</span></a>
			</td>
		</tr>
</table>
</from>
</body>
</html>
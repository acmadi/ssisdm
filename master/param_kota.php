<?php
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$namapt=$_SESSION['namapt'];
$file_js 	= "../plugin/table/all.js";
$file_css 	= "../plugin/table/all.css";
$nama=$_SESSION['nama'];

?>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../script.js"></script>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />

<script type="text/javascript">
$('document').ready(function(){
	updatestatus();
	scrollalert();
});
function updatestatus(){
	//Show number of loaded items
	var totalItems=$('#content p').length;
	$('#status').text('Loaded '+totalItems+' Items');
}
function scrollalert(){
	var scrolltop=$('#scrollbox').attr('scrollTop');
	var scrollheight=$('#scrollbox').attr('scrollHeight');
	var windowheight=$('#scrollbox').attr('clientHeight');
	var scrolloffset=20;
	if(scrolltop>=(scrollheight-(windowheight+scrolloffset)))
	{
		//fetch new items
		$('#status').text('Loading more items...');
		$.get('new-items.html', '', function(newitems){
			$('#content').append(newitems);
			updatestatus();
		});
	}
	setTimeout('scrollalert();', 1500);
}
</script>
<style type="text/css" >
	#container{ width:1100px; margin:0px auto; padding:40px 0; }
	#scrollbox{ width:1100px; height:500px;  overflow:auto; overflow-x:auto; border:1px solid #f2f2f2; }
	#container > p{ background:#eee; color:#666; font-family:Arial, sans-serif; font-size:0.75em; padding:5px; margin:0; text-align:right;}
</style>
<div id="sub-header">		
	<div class="container">				
		<div class="grid grid_24">
			<h2>Parameter Kota-Propinsi</h2>
		</div> <!-- .grid -->			
	</div> <!-- .container -->
</div> <!-- #sub-header -->
		
	<div id="scrollbox" >
		<div id="content" >
			<table class="data display datatable" width="2000">
	           <thead>
		<tr><th>No</th>
					           <th>Propinsi-Kabupaten-kecamatan-Kelurahan</th>
							   
								
								
								
								<th>Edit</th>
								
		</tr>
	</thead>
	<tbody>				
						<?php $x=0;
$view = mysql_query("SELECT * FROM ref_kota order by kode");
						while($data=mysql_fetch_array($view))
						{ $x++;
						
						$level=$data['tingkat'];
					    $kode=$data['kode'];
						?>
		<tr>
		<td align="left"><?php echo $x; ?></td>
		<?php
		if ($level==1)
		{?>
				              <td align="left"><?php echo $data['nm_kota']; ?></td>
		<?php
		} elseif ($level==2) {?>
		                      <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nm_kota']; ?></td>
			<?php
		}elseif ($level==3) 
		{      $kodea=substr($kode,0,4);
		       $sql = "SELECT kode FROM ref_kota  where left(kode,4)='$kodea'   and tingkat=3 order by kode desc limit 1";
               $hasil=mysql_query($sql);
               $baris=mysql_fetch_array($hasil);
			   $kodekab=$baris['kode'];
		?>
		                      <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nm_kota']; ?>
							<?php if ($kodekab==$kode) {?>

<img src="../images/ico/table_add.png">
<a href="param_kota_add4.php?kecamatan=<?php echo  $kodekab;?>" title="Tambah Kelurahan">Tambah Kelurahan</a>
</img>
<?php }?>  
							  
							  </td>
			<?php
		}else {?>
		                      <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nm_kota']; ?></td>
			<?php
		} ?> 
		                         
								<td align="left">
								<a href="param_kota_edit.php?width=770&height=430&lokasi_id=<?php echo $data['lokasi_id'];?>&acc=Edit" ><img src="../images/ico/page_edit.png" width="10" height="10">Edit</a>
								</td>
		</tr>	
		

			
						<?php  
						}?>
				
	</tbody>
   </table>
		</div>
	</div>
	
<img src="../images/ico/table_add.png">
<a href="param_kota_add.php?acc=Add" title="Tambah Proponsi">Tambah Proponsi</a>
</img>
<img src="../images/ico/table_add.png">
<a href="param_kota_add2.php?acc=Add" title="Tambah Kabupaten">Tambah Kabupaten</a>
</img>
<img src="../images/ico/table_add.png">
<a href="param_kota_add3.php?acc=Add" title="Tambah Kecamatan">Tambah Kecamatan</a>
</img>

<script src="<?php echo $file_js;?>"></script>
<script type="text/javascript">	
$(function () { 	
	ReadyMade.init ({ theme: '' });	
});
</script>
 

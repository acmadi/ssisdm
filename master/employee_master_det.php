<?php $posisi=2;
include "../atas.php";

 if(isSet($_GET['peg_id'])) 
	{
	$peg_id = $_GET['peg_id'];
	}else
	{
	$peg_id = $_POST['peg_id'];
	}

?>

<body >
</head>

<body >
<?php
	$acc = $_GET['acc'];
	if($peg_id){
	   $query = mysql_query('SELECT * FROM view_emp_pegawai WHERE peg_id = "'.$peg_id.'" and ( kontrakaktif<>0  or isnull(kontrakaktif)=true) ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('-');
	}?>
<center><h2> Data Employee</h2></center>



<center>
<table id="table" width="100%" >

       <tr>
        	<td colspan="2"><h3>1. Data Pribadi Karyawan</h3></td>
        </tr>
        <tr>
        	<td>Name</td>
            <td ><?php echo @$data->nama;?></td>
        </tr>
		<tr>
        	<td><label for="supplier">Address</label></td>
            <td >  <?php echo @$data->alamat_asal;?></td>
        </tr>
		<tr>
        	<td>City</td>
            <td > <?php echo @$data->nm_kota;?>
				
			
	
			</td>
        </tr>
		<tr>
        	<td> Zip code</td>
            <td ><?php echo @$data->kdpos;?>
			
			</td>
        </tr>
		<tr>
        	<td>Birth / Date  Place</td>
            <td > <?php echo @$data->tempat_lahir;?>/
			<?php echo datedatesql(@$data->tgl_lahir);?>
		
			
			</td>
        </tr>
		<tr>
		<td>Gender </td>
		<td>	<?php echo $data->gender; ?>
									
		</td>
		</tr>
<tr>
		<td>Religion </td>
		<td><?php echo $data->agama; ?>
		</td>
		</tr>
		<tr>
        	<td>Phone</td>
            <td > <?php echo @$data->telp;?></td>
        </tr>
		<tr>
        	<td>Email</td>
            <td ><?php echo @$data->email;?></td>
        </tr>
		<tr>
		<td>Marries Status/Child</td>
		<td><?php echo $data->status_nikah;?>/
		<?php echo @$data->tanggungan;?>
		</td>
		</tr>
		

		<tr>
        	<td>Photo</td> 
            <td > <img src="../images/photo/<?php echo @$data->photo;?>" width="100" height="100"></td>
        </tr>
	<tr>
        	<td>Status Pegawai</td>

			<td><?php echo @$data->status_kerja; ?>
											
            	</td>
		</tr><tr>
			<td>Active</td>
	         <td ><?php $aktif=@$data->aktif;
			 if ($aktif==1)
			 {
			 $aktif="Aktif";
			 }else
			 {
			 $aktif="Tidak Aktif";
			 }
			 echo $aktif;
			 ?>
			</td>
		</tr>
    
<?pphp
	if($peg_id){
	   $query = mysql_query('SELECT * FROM view_peg_dinas WHERE peg_id = "'.$peg_id.'" order by peg_id2 desc limit 1');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('-');
	}?>

<tr>
        	<td>Pangkat</td>
            <td ><?php echo @$data->pangkat;?></td>
        </tr>
<tr>
        	<td>Jabatan</td>
            <td ><?php echo @$data->jabatan;?></td>
        </tr>

</table>






<center>
<table id="table" width="100%" >


       <tr>
        	<td colspan="5"><h3>2. Data Kedinasan</h3></td>
        </tr>
			<tr>
					           <th>Kontrak ke  </th>
							   <th>No Kontrak </th>
								<th>Peiode Kontrak (bulan)</th>
								<th>Tanggal Awal </th>
								<th>Tanggal Akhir	 </th>
								
								
								
							
								
		</tr>	
		
		 <?php 		
     		$query_a="select * from view_peg_dinas where peg_id = '$peg_id'   " ;
		  	//echo $query_a;
		  	$result_a=mysql_query($query_a) or (mysql_error()) ;
		  	while($row_a=mysql_fetch_array($result_a)) 	{
		?>
		<tr>		
		<td><?php echo $row_a['kontrak_ke']; ?></td>
		<td><?php echo $row_a['nokontrak']; ?></th>
		<td><?php echo $row_a['periode_kontrak_trx']; ?></th>
			<td><?php echo datedatesql($row_a['tgl_awal']); ?></th>
			<td><?php echo datedatesql($row_a['tgl_akhir']); ?></th>
								
		</tr>	
		<?php   }   ?>
</table>
</center>
</form>
<?php
include "../bawah.php";
?>

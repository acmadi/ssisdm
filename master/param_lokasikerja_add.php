<?php $posisi=2;
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";			
 if(isSet($_GET['lokasi_id'])) 
	{
	$lokasi_id = $_GET['lokasi_id'];
	}else
	{
	$lokasi_id = $_POST['lokasi_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $lokasi_kerja = $_POST['lokasi_kerja'];
		$alamat = $_POST['alamat'];
		$aktif = $_POST['aktif'];
		$level = 1;
		if ($acc=="Add")
		{ 
		$sql ="SELECT lokasi FROM lokasi_kerja  where  level=1 order by lokasi desc  limit 1";
        $result = mysql_query($sql);
		$row = mysql_fetch_array($result);
        $lokasi=substr($row['lokasi'],0,2)+1;
		 if ($lokasi<10)
		{									
		$lokasi="0".$lokasi;
		}
			else
		{
		$lokasi=$lokasi;
        }
        $lokasi=$lokasi."00";

		$sql = "insert into  lokasi_kerja set  ";
        $sql .= "lokasi_kerja='$lokasi_kerja',";
	    $sql .= "lokasi='$lokasi',";
		$sql .= "level='$level',";
		$sql .= "aktif='$aktif' "; 
        $result = mysql_query($sql) ;
	    }
		else
		{      
		$sql = "Update  lokasi_kerja set  ";
        $sql .= "lokasi_kerja='$lokasi_kerja',";
	
		$sql .= "level='$level',";
		$sql .= "aktif='$aktif' "; 
        $sql .= "where lokasi_id='$lokasi_id' ";
		$result = mysql_query($sql) ;
		}
		
					       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: param_lokasikerja.php");
		} 
		else 
		{?>
			<script language="JavaScript">
				alert("Proses gagal");
			</script>
		<?php  }
   }
?>

<body >
</head>
  
<script type="text/javascript">
$(document).ready(function(){
  
	
	
   });
function focusNext(elemName, evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode :
        ((evt.which) ? evt.which : evt.keyCode);
    if (charCode == 13) {
		document.getElementById(elemName).focus();
		return false;
    } 
    return true;
} 


function cek() 
      {
   var lokasi_kerja = document.formData.lokasi_kerja.value;
    if (lokasi_kerja.length == 0) {
		alert("unit bisnis tidak boleh kosong");
		document.formData.lokasi_kerja.focus();
		return false;
   	}
	
	var aktif = document.formData.aktif.value;
    if (aktif.length == 0) {
		alert("Status Aktif tidak boleh kosong");
		document.formData.aktif.focus();
		return false;
   	}
	
	
		  
		  
   	
    if (confirm("Yakin Simpan Data ?"))
	{
	return true;
	}
	else
	{
	return false;
	}
}

</script>
<body >
<?php
	$acc = $_GET['acc'];
	if($lokasi_id){

	   $query = mysql_query('SELECT * FROM lokasi_kerja WHERE lokasi_id = "'.$lokasi_id.'"  ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Parameter Lokasi Kerja Level 1</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form  name="formData" action="param_lokasikerja_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="lokasi_id" value="<?php echo $lokasi_id;?>">

<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

   
        <tr>
        	<td>Lokasi Kerja</td>
            <td > <input type="text" name="lokasi_kerja" id="lokasi_kerja" onKeyPress="return focusNext('aktif',event)"  size="50" maxlength="128" value="<?php echo @$data->lokasi_kerja;?>"/><font color="red">*</font></td>
        </tr>
		
		</tr>
			<td>Aktif</td>
	         <td ><select name="aktif" id="aktif" >
										<option value="1" <?php if (!(strcmp(1, @$data->aktif))) {echo "SELECTED";} ?>>Yes</option>
										<option value="0" <?php if (!(strcmp(0, @$data->aktif))) {echo "SELECTED";} ?>>No</option>
									</select><font color="red">*</font>
			</td>
		</tr>
		
		
    <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">| <input type="submit" name="submit" value="Simpan">	
    </td>
	</tr>





</table>
</center>
</form>


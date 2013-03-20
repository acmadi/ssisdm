<?php $posisi=2;
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";			
 if(isSet($_GET['jabatan_id'])) 
	{
	$jabatan_id = $_GET['jabatan_id'];
	}else
	{
	$jabatan_id = $_POST['jabatan_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $jabatan = $_POST['jabatan'];
		$aktif = $_POST['aktif'];
		if ($acc=="Add")
		{
		$sql = "insert into  jabatan set  ";
        $sql .= "jabatan='$jabatan',";
		$sql .= "aktif='$aktif' "; 
        $result = mysql_query($sql) ;
	
							
							
							
        }
		else
		{      
		$sql = "Update  jabatan set  ";
        $sql .= "jabatan='$jabatan',";
		$sql .= "aktif='$aktif' "; 
        $sql .= "where jabatan_id='$jabatan_id' ";
		$result = mysql_query($sql) ;
		}
		
					       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: param_jabatan.php");
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
   var jabatan = document.formData.jabatan.value;
    if (jabatan.length == 0) {
		alert("jabatan tidak boleh kosong");
		document.formData.jabatan.focus();
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
	if($jabatan_id){

	   $query = mysql_query('SELECT * FROM jabatan WHERE jabatan_id = "'.$jabatan_id.'"  ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Parameter Jabatan</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form  name="formData" action="param_jabatan_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="jabatan_id" value="<?php echo $jabatan_id;?>">

<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

   
        <tr>
        	<td>Jabatan</td>
            <td > <input type="text" name="jabatan" id="jabatan" onKeyPress="return focusNext('aktif',event)"  size="50" maxlength="128" value="<?php echo @$data->jabatan;?>"/><font color="red">*</font></td>
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


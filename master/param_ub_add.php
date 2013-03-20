<?php $posisi=2;
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";			
 if(isSet($_GET['unit_bisnis_id'])) 
	{
	$unit_bisnis_id = $_GET['unit_bisnis_id'];
	}else
	{
	$unit_bisnis_id = $_POST['unit_bisnis_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $unit_bisnis = $_POST['unit_bisnis'];
		$aktif = $_POST['aktif'];
		if ($acc=="Add")
		{
		$sql = "insert into  unit_bisnis set  ";
        $sql .= "unit_bisnis='$unit_bisnis',";
		$sql .= "aktif='$aktif' "; 
        $result = mysql_query($sql) ;
	
							
							
							
        }
		else
		{      
		$sql = "Update  unit_bisnis set  ";
        $sql .= "unit_bisnis='$unit_bisnis',";
		$sql .= "aktif='$aktif' "; 
        $sql .= "where unit_bisnis_id='$unit_bisnis_id' ";
		$result = mysql_query($sql) ;
		}
		
					       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: param_ub.php");
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
   var unit_bisnis = document.formData.unit_bisnis.value;
    if (unit_bisnis.length == 0) {
		alert("unit bisnis tidak boleh kosong");
		document.formData.unit_bisnis.focus();
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
	if($unit_bisnis_id){

	   $query = mysql_query('SELECT * FROM unit_bisnis WHERE unit_bisnis_id = "'.$unit_bisnis_id.'"  ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Parameter Unit Bisnis</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form  name="formData" action="param_ub_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="unit_bisnis_id" value="<?php echo $unit_bisnis_id;?>">

<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

   
        <tr>
        	<td>Unit Bisnis</td>
            <td > <input type="text" name="unit_bisnis" id="unit_bisnis" onKeyPress="return focusNext('aktif',event)"  size="50" maxlength="128" value="<?php echo @$data->unit_bisnis;?>"/><font color="red">*</font></td>
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


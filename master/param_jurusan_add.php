<?php $posisi=2;
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";			
 if(isSet($_GET['jurusan_id'])) 
	{
	$jurusan_id = $_GET['jurusan_id'];
	}else
	{
	$jurusan_id = $_POST['jurusan_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $jurusan = $_POST['jurusan'];
		$aktif = $_POST['aktif'];
		if ($acc=="Add")
		{
		$sql = "insert into  ref_jurusan set  ";
        $sql .= "jurusan='$jurusan'";

        $result = mysql_query($sql) ;
	
							
							
							
        }
		else
		{      
		$sql = "Update  ref_jurusan set  ";
        $sql .= "jurusan='$jurusan'";
	
        $sql .= "where jurusan_id='$jurusan_id' ";
		$result = mysql_query($sql) ;
		}
		
		echo $sql;			       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: param_jurusan.php");
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
   var jurusan = document.formData.jurusan.value;
    if (jurusan.length == 0) {
		alert("jurusan tidak boleh kosong");
		document.formData.jurusan.focus();
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
	if($jurusan_id){

	   $query = mysql_query('SELECT * FROM ref_jurusan WHERE jurusan_id = "'.$jurusan_id.'"  ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Parameter Jurusan</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form  name="formData" action="param_jurusan_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="jurusan_id" value="<?php echo $jurusan_id;?>">

<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

   
        <tr>
        	<td>Unit Bisnis</td>
            <td > <input type="text" name="jurusan" id="jurusan" onKeyPress="return focusNext('aktif',event)"  size="50" maxlength="128" value="<?php echo @$data->jurusan;?>"/><font color="red">*</font></td>
        </tr>
		
		
		
    <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">| <input type="submit" name="submit" value="Simpan">	
    </td>
	</tr>





</table>
</center>
</form>


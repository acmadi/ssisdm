<?php 
include "../include/security.inc.php";
include "../include/conn.php";
include "../include/common.php";
include "../include/variables.php";
$file_css 	= "../plugin/table/all.css";			
 if(isSet($_GET['kota_id'])) 
	{
	$kota_id = $_GET['kota_id'];
	}else
	{
	$kota_id = $_POST['kota_id'];
	}
if ($_POST['submit']<>"")
 {      
        $acc= $_POST['acc'];
        $nm_kota = $_POST['nm_kota'];
	
		$tingkat = 1;
		if ($acc=="Add")
		{ 
		$sql ="SELECT kode FROM ref_kota  where  tingkat=1 order by kode desc  limit 1";
        $result = mysql_query($sql);
		$row = mysql_fetch_array($result);
        $kode=substr($row['kode'],0,2)+1;
		 if ($kode<10)
		{									
		$kode="0".$kode;
		}
			else
		{
		$kode=$kode;
        }
        $kode=$kode."000000";

		$sql = "insert into  ref_kota set  ";
        $sql .= "kode='$kode',";
	    $sql .= "nm_kota='$nm_kota',";
		$sql .= "tingkat='$tingkat' ";
		$result = mysql_query($sql) ;
	    }
		else
		{      
		$sql = "Update  ref_kota set  ";
        $sql .= "nm_kota='$nm_kota',";
	    $sql .= "tingkat='$tingkat' ";
        $sql .= "where kota_id='$kota_id' ";
		$result = mysql_query($sql) ;
		}
		
					       
					  
		if($result) 
		{   
		//echo "<META HTTP-EQUIV = 'Refresh' Content = '1; URL =employee_master.php '>";
		header("location: param_kota.php");
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
   var nm_kota = document.formData.nm_kota.value;
    if (nm_kota.length == 0) {
		alert("nama kota tidak boleh kosong");
		document.formData.nm_kota.focus();
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
	if($kota_id){

	   $query = mysql_query('SELECT * FROM nm_kota WHERE kota_id = "'.$kota_id.'"  ');
	   if($query && mysql_num_rows($query) == 1){
	      $data = mysql_fetch_object($query);
		    
	   }else 
	      die('Tidak Ada data');
	}?>
<center><h2> Parameter Propinsi</h2></center>
<link rel="stylesheet" href="<?php echo $file_css;?>" type="text/css" media="screen" title="no title" />
<form  name="formData" action="param_kota_add.php" method="post" onSubmit="return cek();" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="kota_id" value="<?php echo $kota_id;?>">

<input type="hidden" name="acc" value="<?php echo $acc;?>">
<center>
<table id="table" width="100%" >

   
        <tr>
        	<td>Nama Propinsi</td>
            <td > <input type="text" name="nm_kota" id="nm_kota" onKeyPress="return focusNext('submit',event)"  size="50" maxlength="128" value="<?php echo @$data->nm_kota;?>"/><font color="red">*</font></td>
        </tr>
		
	
		
		
    <tr>
    <td colspan="2">   
    <input  type="button" value="Kembali" onclick="self.history.back()">| <input type="submit" name="submit" value="Simpan">	
    </td>
	</tr>





</table>
</center>
</form>


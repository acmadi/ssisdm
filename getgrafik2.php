<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
include "include/FusionCharts.php";
?>
<SCRIPT LANGUAGE="Javascript" SRC="js/FusionCharts.js"></SCRIPT>
<?php
    $thpengeluaran = $_POST['thpengeluaran'];
    if ($thpengeluaran=="")  
   {
	$thpengeluaran = date("Y");	
	}

$strXML2="";
$strXML2 = "<chart caption='Grafik  Komposisi Pegawai per status Pegawai' shownames='1' showvalues='1' decimals='0' numberPrefix=''>";
$strXML2 .= "<categories>";
$sql = "select * from status_kerja where  aktif=1 and flagStatus=1  order by status_kerja_id";

$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
    $status_kerja= $rows['status_kerja'];
	$strXML2 .= "<category label='" . $status_kerja . "' />";

}
$strXML2 .= "</categories>";
$strXML2 .= "<dataset seriesName='Status Pegawai'   showValues='1'>";
$sql = "select * from status_kerja where  aktif=1 and flagStatus=1 order by status_kerja_id ";
$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
$status_kerja_id= $rows['status_kerja_id'];
$strQuery2 = "select count(distinct(peg_id)) as nilai FROM view_emp_pegawai   where  aktif=1 and  status_kerja_id='$status_kerja_id' "; 

$rsdb = mysql_query($strQuery2);
$rowsb = mysql_fetch_assoc($rsdb);
$nilai=$rowsb['nilai'];
				       
							
             
							$strXML2 .= "<set value='" .$nilai. "' />";
    
}
 $strXML2 .= "</dataset>";
 $strXML2 .= "</chart>";
 echo renderChart("include/MSColumn3D.swf", "", $strXML2, "xxxx", 900, 300, false, false);

?>
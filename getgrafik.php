<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
include "include/FusionCharts.php";
?>
<SCRIPT LANGUAGE="Javascript" SRC="js/FusionCharts.js"></SCRIPT>
<?php


$strXML1="";
$strXML1 = "<chart caption='Grafik  Komposisi Pegawai per Unit Bisnis' shownames='1' showvalues='1' decimals='0' numberPrefix=''>";
$strXML1 .= "<categories>";
$sql = "select * from unit_bisnis where  aktif=1 order by unit_bisnis_id";

$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
    $unit_bisnis= $rows['unit_bisnis'];
	$strXML1 .= "<category label='" . $unit_bisnis . "' />";

}
$strXML1 .= "</categories>";
$strXML1 .= "<dataset seriesName='Unit Bisnis'   showValues='1'>";
$sql = "select * from unit_bisnis where  aktif=1 order by unit_bisnis_id ";
$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
$unit_bisnis_id= $rows['unit_bisnis_id'];
$strQuery2 = "select count(distinct(peg_id)) as nilai FROM view_emp_pegawai   where  aktif=1  and unit_bisnis_id='$unit_bisnis_id'  "; 

$rsdb = mysql_query($strQuery2);
$rowsb = mysql_fetch_assoc($rsdb);
$nilai=$rowsb['nilai'];
				       
							
             
							$strXML1 .= "<set value='" .$nilai. "' />";
    
}
 $strXML1 .= "</dataset>";
 $strXML1 .= "</chart>";
 echo renderChart("include/MSColumn3D.swf", "", $strXML1, "astudentz", 900, 300, false, false);

?>
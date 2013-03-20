<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
include "include/FusionCharts.php";
?>
<SCRIPT LANGUAGE="Javascript" SRC="js/FusionCharts.js"></SCRIPT>
<?php


$strXML3="";
$strXML3 = "<chart caption='Grafik  Komposisi Pegawai per Unit Bisnis dan status Pegawai' shownames='1' showvalues='1' decimals='0' numberPrefix=''>";
$strXML3 .= "<categories>";
$sql = "select * from unit_bisnis where  aktif=1  order by unit_bisnis_id";

$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
    $unit_bisnis= $rows['unit_bisnis'];
	$strXML3 .= "<category label='" . $unit_bisnis . "' />";

}
$strXML3 .= "</categories>";

$sql = "select * from status_kerja where  aktif=1 and flagStatus=1 order by status_kerja_id ";
$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
$status_kerja= $rows['status_kerja'];
$status_kerja_id= $rows['status_kerja_id'];
  $strXML3 .= "<dataset seriesName='" . $status_kerja . "'   showValues='1'>";
	$sql2 = "select * from unit_bisnis where  aktif=1  order by unit_bisnis_id";
	$rsd2 = mysql_query($sql2);
	while ($rows2 = mysql_fetch_assoc($rsd2))
	{
	$unit_bisnis_id= $rows2['unit_bisnis_id'];
			$strQuery3 = "select count(distinct(peg_id)) as nilai FROM view_emp_pegawai   where  aktif=1 and  status_kerja_id='$status_kerja_id' and unit_bisnis_id='$unit_bisnis_id' "; 
			$rsdb3 = mysql_query($strQuery3);
			$rowsb3 = mysql_fetch_assoc($rsdb3);
			$nilai=$rowsb3['nilai'];
			$strXML3 .= "<set value='" .$nilai. "' />";
    }   
 $strXML3 .= "</dataset>";
}

 $strXML3 .= "</chart>";
 echo renderChart("include/MSColumn3D.swf", "", $strXML3, "vvv", 900, 300, false, false);

?>
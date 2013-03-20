<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
include "include/FusionCharts.php";
?>
<SCRIPT LANGUAGE="Javascript" SRC="js/FusionCharts.js"></SCRIPT>
<?php
    $tninventori = $_POST['tninventori'];
    if ($tninventori=="")  
   {
	$tninventori = date("Y");	
	}


$strXML = "<chart caption='Grafik Inventori " .$tninventori. "' shownames='1' showvalues='0' decimals='0' numberPrefix=''>";
$strXML .= "<categories>";
$sql = "select * from masterprosesinventori order by prosesId";

$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
    $proses= $rows['proses'];
	$strXML .= "<category label='" . $proses . "' />";

}
$strXML .= "</categories>";
$strXML .= "<dataset seriesName='" .$tninventori. "'   showValues='1'>";
$sql = "select * from masterprosesinventori  order by prosesId ";
$rsd = mysql_query($sql);
while ($rows = mysql_fetch_assoc($rsd))
{
$prosesId= $rows['prosesId'];
                            if ($prosesId==1)
							{
                            $strQuery2 = "select count(permintaanbarangId) as nilai FROM trxpermintaanbarang   where substr(dateCreated,1,4)='$tninventori'   ";
				            }
							else
							{
							$strQuery2 = "select count(permintaanbarangId) as nilai FROM trxpermintaanbarang   where substr(dateCreated,1,4)='2020'   ";
							}
							$rsdb = mysql_query($strQuery2);
							$rowsb = mysql_fetch_assoc($rsdb);
							$nilai=$rowsb['nilai'];
                    
							$strXML .= "<set value='" .$nilai. "' />";

}
 $strXML .= "</dataset>";
 $strXML .= "</chart>";
 echo renderChart("include/MSColumn3D.swf", "", $strXML, "astudent", 1100, 300, false, false);

?>
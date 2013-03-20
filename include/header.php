<?php
$orgId=$_SESSION['orgId'];
if (substr($orgId,0,1)=="2") {$logo_header="tbi_logo.jpg";
$heading = "The British Institute";
}//tbi

if ($orgId=="120") {$logo_header="uniprep_logo.png";
$heading = "An Outstanding Preparation Program <br /> for Australia's Best University";
}// uniprep

if (substr($orgId,0,2)=="16") {$logo_header="utc_logo.jpg";
$heading = "UniSadhuGuna Testing Center<br /> ";
}// utc

if (substr($orgId,0,2)=="14") {$logo_header="uic_logo.jpg";
$heading = "UniSadhuGuna International College<br /> ";
}// utc
?>
<div id="header">

	<div class="xrounded">
   	<b class="xtop">
	    <b class="xb1 color_white"></b><b class="xb2 color_white"></b>
	    <b class="xb3 color_white"></b>
	    <b class="xb4 color_white"></b>
   	</b>
   	<div class="xboxcontent" style="height: 65px; background-color: #D2A8CC;">
   		<img src="../../images/logo/<?php echo $logo_header; ?>" style="float: left; margin-left: 20px; margin-top: 2px; height: 60px"/>
   		<div style="float: left; margin-top: 15px;padding-left: 10px;"><?php echo $heading ?></div>
		</div>

    <b class="xbottom">
        <b class="xb4 color_white"></b><b class="xb3 color_white"></b>
        <b class="xb2 color_white"></b><b class="xb1 color_white"></b>
    </b>
  </div>
</div> <!-- end #header -->


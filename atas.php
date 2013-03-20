<?php
include "include/security.inc.php";
include "include/conn.php";
include "include/common.php";
include "include/variables.php";
$namapt=$_SESSION['namapt'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $namapt;?></title>
	<?php 
if ($posisi==2)
{?>
	 <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
   <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../script.js"></script>
<?php
} else
{
?>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
   <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
<?php
} 
?>	


   <style type="text/css">
.art-post .layout-item-0 { padding-right: 3px;padding-left: 3px; }
   .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
   .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
   </style>

</head>
<body>
<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
<ul class="art-hmenu">
<?php
include "menu.php";

?>
</ul>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
							<div class="art-box art-post">
								<div class="art-box-body art-post-body">
									<div class="art-post-inner art-article">
											<h2 class="art-postheader"><?php echo $namapt;?></h2>
											<div class="art-postcontent">
												<div class="art-content-layout">
														<div class="art-content-layout-row">
															<div class="art-layout-cell layout-item-0" style="width: 100%;">
<div id="nav">
<ul>
<?php
	$orgId=$_SESSION['orgId'];
	if ($orgId=="120") {							// Unpirep
?>
  <li><a href="../uniprep/uniprep_index.php">Home</a></li>
  <li><a href="../uniprep/master_data.php">Master Data</a></li>
  <li><a href="../../logout.php">Logout</a></li>
<?php
	}
	if ($orgId=="140" or $orgId=="141") {		// UIC Bussiness dan UIC Design
?>
 <li><a href="../uic/uic_index.php">Home</a></li>
  <li><a href="../uic/uic_master_data.php">Master Data</a></li>
  <li><a href="../../logout.php">Logout</a></li>
<?php
	}
	if ($orgId=="161") {		// UTC Exams
?>
 <li><a href="../utce/utcexam_index.php">Home</a></li>
  <li><a href="../utce/utce_master_data.php">Master Data</a></li>
  <li><a href="../../logout.php">Logout</a></li>
<?php
	}
	if ($orgId=="162") {		// UTC Testing
?>
 <li><a href="../utct/utctest_index.php">Home</a></li>
  <li><a href="../utct/utct_master_data.php">Master Data</a></li>
  <li><a href="../../logout.php">Logout</a></li>
<?php
	}
?>
</ul>
<script language="javascript">setPage()</script>	
<div id='login-wrap'>
	<img id='login-img' src="../../images/ico/login.png" width="25" height='25' />
	<div id='login-info'><?php echo $_SESSION['Name'] ?></div>
</div>
</div> <!-- end #nav -->
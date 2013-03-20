<?php
$get_match = trim($_GET['sql_match_type']);

// make sure $get_data has a value
if(!empty($get_data)) {
	// build the like clause value
	switch ($get_match) {
		case "ends":
		  $like_value = '%'.$get_data;
		  break;
		case "contains":
		  $like_value = '%'.$get_data.'%';
		  break;
		default: // starts
		  $like_value = $get_data.'%';
	}
} else {
	echo "0";
	exit;
}
<?php
$uid =base64_decode($_GET['uid']);
// Establishing DB connection
	require_once"libraries/dbconnect.php";
	require_once"libraries/curd.php";
	$res=delete_query('subcat_tbl','subcat_id',$uid);
	if($res)
	{
		header("location:displaycategories.php");
	}
	else{
		echo "Not deleted";
	}


?>
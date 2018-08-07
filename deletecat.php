<?php
$uid =base64_decode($_GET['uid']);
// Establishing DB connection
	require_once"libraries/dbconnect.php";
	require_once"libraries/curd.php";
	$res=delete_query('category_tbl','cat_id',$uid);
	if($res)
	{
		header("location:displaycategory.php");
	}
	else{
		echo "Not deleted";
	}


?>
<?php

$uid=base64_decode( $_GET['uid']);
require_once"libraries/dbconnect.php";

//update Query
extract($_POST);
if(isset($update))
{


	/*$file_tmp=$_FILES['simage']['tmp_name'];
    $file_name=$_FILES['simage']['name'];
    $file_size=$_FILES['simage']['size'];

    $ext=strtolower(end(explode(".",$file_name)));
    $allowed_types=array('jpg','jpeg','png','gif');

    if (!in_array($ext, $allowed_types))
    {
        $err_msg="Invalid file";
    }    
        if ($file_size>2097152) 
        {
            $err_msg="File size is less than 20 MB";
        }
    
    if(empty($err_msg))
    {
        $move=move_uploaded_file($file_tmp, "upload/".$file_name);
        
            if ($move) 
            {
                echo "Inserted";
            }
            else
            {
                echo "Not Inserted";
            }
    }
    else{
        $err_msg="before qry";
   }
*/


	$update_qry ="update subcat_tbl set subcat_name='$sname',subcat_prio='$spriority' where subcat_id='$uid'";
	
	$res=mysql_query($update_qry);
	if($res)
	{
		header("location:displaycategories.php");
	}
	else{
		echo "Not Updated";
	}
}

//Getting the existing data info
$sql_get ="select * from subcat_tbl where subcat_id='$uid'";
//$sql_get ="select cat_name,cat_img, cat_priority from category_tbl where cat_id='$uid'";


$ret=mysql_query($sql_get) or die($sql_get."<br/><br/>".mysql_error());
$row=mysql_fetch_assoc($ret);

?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style type="text/css">
		.ac{
		border: 2px solid black;
			padding: 15px;
			height: 300px;
			width: 350px;
			background-color: lightgray;
			position: relative;
            top: 150px;
            left: 300px;
		}
	</style>
</head> 
</html>
<form method="post" action="" enctype="multipart/form-data">
<body>

	<div class="ac">
		<p></p><br>
Add Subcategory:<input type="text" name="sname" value="<?php echo $row['subcat_name'];?>"><br><br>
 <!--Image:<input type="file" name="simage" value="<?php echo $row['subcat_img'];?>"/><br/><br/>-->
Subcat Priority:<input type="text" name="spriority" value="<?php echo $row['subcat_prio'];?>"><br><br>

		
		<input type="submit" name="update" value="update">
	</div>
</body>

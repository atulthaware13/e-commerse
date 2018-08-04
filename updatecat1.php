<?php

$uid=base64_decode( $_GET['uid']);
require_once"libraries/dbconnect.php";

//update Query
extract($_POST);
if(isset($update))
{


	/*$file_tmp=$_FILES['image']['tmp_name'];
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];

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
        $move=move_uploaded_file($file_tmp, "uploads/".$file_name);
        
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


	$update_qry ="update category_tbl set cat_name='$cname',cat_priority='$cpriority' where cat_id='$uid'";
	
	$res=mysql_query($update_qry);
	if($res)
	{
		header("location:displaycategory.php");
	}
	else{
		echo "Not Updated";
	}
}

//Getting the existing data info
$sql_get ="select cat_name,cat_img, cat_priority from category_tbl where cat_id='$uid'";
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
<form method="post" action=""  enctype="multipart/form-data">
<body>

	<div class="ac">
		<p></p><br>
		Add Catagory:<input type="text" name="cname" value="<?php echo $row['cat_name'];?>"/><br/><br/><br/>
		 <!--Image:<input type="file" name="cimage" value="<?php echo $row['cat_img'];?>"/><br/><br/> --> 
		Cat Priority:<input type="text" name="cpriority" value="<?php echo $row['cat_priority'];?>"><br/><br/>
		<input type="submit" name="update" value="update">
	</div>
</body>

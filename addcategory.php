<?php
extract($_POST);
require_once"libraries/dbconnect.php";
if(isset($Add)){
	if(empty($cat) || empty($catprio) || empty($_FILES['image']))
{
   echo "Mandatory fields are empty";
   exit();
}
 else
    {
      require_once"libraries/curd.php";
    $data1=check_duplicate('category_tbl','cat_name',$cat);
   if(($data1)==false)
   {
       if(isset($_FILES['image'])){
          $file_tmp=$_FILES['image']['tmp_name'];
          $file_name=$_FILES['image']['name'];
          $file_size=$_FILES['image']['size'];
          $ext=explode(".",$file_name);
          $ext=end($ext);
          $allowed_type=array('PNG','jpg','jpeg','gif','png','JPG','JPEG');
      if(!in_array($ext,$allowed_type)){
        $err_msg="Invalid File";
      }
       if($file_size>2097152){
        $err_msg="File size not more than 2MB";
      }
       if(empty($err_msg)){
        $move=move_uploaded_file($file_tmp, "upload/".$file_name);
      if($move)
         echo "File is Inserted<br/>";
     }
      else{
         echo "Not inserted";
      }
   }
      else{
        echo $err_msg;
      }
      require_once"libraries/curd.php";
      $data=array(
       'cat_name'=>$cat,
       'cat_img'=>$file_name,
       'cat_priority'=>$catprio,
       'cat_status'=>1
      );
      $resp=insert_query('category_tbl',$data,$conn);	
				if($resp==true){
						 
						 header("location:displaycategory.php");	
				}
				else{
					echo "Error:Product Not Inserted ";
				}
	       }
	       else{
	       	?>
	       	
	       	<div style="position:absolute;color:red;left:430px;top:200px"><?php echo "Product Already Exits";?></div>
            <?php
	       }
       }
   }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once"header.php";?>
	<?php require_once"sidebar1.php";?>
      <form method="post" action=" " enctype="multipart/form-data">
			<body>
				<div class="container-fluid">
					<div class="clearfix">
					<div class="row" style="position: absolute;left: 380px; top:200px; border: 1px solid ;width: 350px;height: 190px;padding-top: 20px;padding-left: 20px;">
				          	Category Name:&nbsp;<input type="text" name="cat"><br><br>
                    Category Priority:&nbsp;<input type="text" name="catprio"><br><br>
                    Category Image:<input type="file" name="image">
					<input type="submit" class="add" name="Add" value="ADD">
				   </div>
				   </div>
				</div>

			</body>
		</form>
</body>
</html>
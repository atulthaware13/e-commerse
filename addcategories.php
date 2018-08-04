<?php
extract($_POST);
require_once"libraries/dbconnect.php";
if(isset($Add)){
  if(empty($subcat) || empty($subcatprio) || empty($_FILES['image']))
{
   echo "Mandatory fields are empty";
   exit();
}
 else
    {
    require_once"libraries/curd.php";
    $data1=check_duplicate('subcat_tbl','subcat_name',$subcat);
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
        $move=move_uploaded_file($file_tmp, "img/".$file_name);
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
       'subcat_name'=>$subcat,
       'subcat_img'=>$file_name,
       'subcat_prio'=>$subcatprio,
       'subcat_status'=>$product,
       'subcat_status'=>1
      );
      $resp=insert_query('subcat_tbl',$data); 
        if($resp==true){
             
             header("location:displaycategories.php");  
        }
        else{
          echo "Error:Product Not Inserted ";
        }
         }
         else{
          ?>
          
          <div style="position:absolute;color:red;left:430px;top:200px"><?php echo "Sub Category Already Exits";?></div>
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
     <form action=" " method="post" enctype="multipart/form-data">
                <div class="container-fluid">
                    <div class="clearfix">
                
                    <div class="row" style="position: absolute;left: 450px; top:220px; border: 1px solid ;width: 350px;height:265px;padding-top: 20px;padding-left: 20px;">
                    &nbsp; &nbsp; &nbsp;Category Name:&nbsp;<select name="product">
                       &nbsp;<option value="">-Select Category-</option>
                          <?php
                                require_once "libraries/dbconnect.php";
                                $sql_qry ="select * from category_tbl";
                                $resultset =mysql_query($sql_qry);
                                while($rows=mysql_fetch_assoc($resultset))
                                {
                             
                                 ?>
                                    <option 
                                       value="<?php 
                                       echo $rows['cat_id']; //<option value="1">Electronics</option>
                                           ?>">
                                        <?php
                                          echo UCfirst($rows['cat_name']);
                                        ?>
                                   </option>

                                <?php

                                 }

                                ?>
                        </select><br><br>
                        Add Sub Category:&nbsp;<input type="text" name="subcat"><br><br>
                        Sub-Category Priority:&nbsp;<input type="text" name="subcatprio"><br><br>
                        Sub-Category Image:<input type="file" name="image">
                    <input type="submit" class="add" name="Add" value="ADD SUB">
                   </form>
                </div>
            </div>
        </div>
   

</body>
</html>
<?php
require_once"libraries/dbconnect.php";
require_once"libraries/curd.php";
extract($_POST);
if(isset($submit_file)){
	if(empty($prodtitle) || empty($prodmrp) ||empty($prodsp) || empty($textarea) || empty($prodbrand) || empty($_FILES['image'])) 
{
   echo "Mandatory fields are empty";
   exit();
}
 else
  $file_tmp=$_FILES['image']['tmp_name'][$i];
  $file_name=$_FILES['image']['name'][$i];
  $file_size=$_FILES['image']['size'][$i];
    {
    $data1=check_duplicate('product_tbl','prod_title',$prodtitle);
   if(($data1)==false)
   {
       if(isset($_FILES['image'])){
          $j = 0;     // Variable for indexing uploaded image.
    // Declaring Path for uploaded images.
for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
// Loop to get individual element from the array
$validextensions = array('PNG','jpg','jpeg','gif','png','JPG','JPEG');      
// Extensions which are allowed.
$file_name=$_FILES['image']['name'][$i];
$ext = explode(".", $file_name);  
 // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = "product/".$_FILES['image']['name'][$i]; 
//$target_path = $target_path. "." . $ext[count($ext) - 1];     
// Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES['image']['size'][$i] <= 2097152)     // Approx. 2MB files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['image']['tmp_name'][$i], $target_path)) {
// If file moved to uploads folder.
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}
}
      
     //$file_name=$_FILES['image']['name'][$i];
      //$file_temp=$_FILES['image']['tmp_name'][$i];
      $prod_disc=(($prodmrp-$prodsp)/$prodmrp)*100;
      $data=array(
       'cat_id'=>$category,	
       'subcat_id'=>$subcategory,
       'prod_title'=>$prodtitle,
       'prod_mrp'=>$prodmrp,
       'prod_sp'=>$prodsp,
       'prod_disc'=>$prod_disc,
       'prod_desc'=>$textarea,
       'prod_brand'=>$prodbrand,
       'prod_img'=>$file_name
      );
      $resp=insert_query('product_tbl',$data);
      if($resp==true){
      $last_insrt=mysql_insert_id();
         if(!empty($_FILES['image']['name'])){
              $count=count($_FILES['image']['name']);
                for($i=0;$i<$count;$i++){
                  if((!empty($file_name)))
                  $data=array(
                 'img_name'=>$_FILES['image']['name'][$i],
                 'prod_id'=>$last_insrt
                );
	 					    $sql_inser=insert_query('product_img_tbl',$data); 
   				          if($sql_inser==true){
   				        	header("location:displayproduct.php");
   				        	echo "<br>";	
  				 			}
              }
            }
  				 			else{
  				 				echo "Product Images Not inserted";
  				 			}
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
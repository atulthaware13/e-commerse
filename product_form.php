<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>Product form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form"/>
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='product_cs.css' type='text/css' />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="product.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 4; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<li><input type="file" name="image[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><span style="color:red">Remove</span></a></li>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('li').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
 <!--Ajax code for Category-->
<script type="text/javascript">
    function ajax_category(){
      var cid=document.getElementById('category').value;
      if(window.XMLHttpRequest)//Stage 1
        var obj=new XMLHttpRequest;
      else
        var obj=new ActiveXobject("Microsoft.XMLHTTP");
      obj.open("get","getcategory.php?cid="+cid,true);//Stage 2
      obj.send();//Stage 3
      obj.onreadystatechange=function(){
        if(obj.readyState==4)
          document.getElementById('result').innerHTML=obj.responseText;
      }
    }

</script>

<script type="text/javascript">
    var res=true;
    function validation(){

      var category= document.getElementById('category').value;
    var subcategory= document.getElementById('subcategory').value;
    var prodtitle= document.getElementById('prod_ttl').value;
    var prodmrp= document.getElementById('prod_mrp').value;
    var prodsp= document.getElementById('prod_sp').value;
    var prodbrand= document.getElementById('prod_brand').value;     
    var proddesc= document.getElementById('prod_des').value;
    



           //Category Validation

      if( category == "" ){
        document.getElementById('cat_err').innerHTML = " ** Please fill the Category ";
        res=false;
      }
      if(( category.length < 3) || (category.length > 20)){
        document.getElementById('cat_err').innerHTML = " ** Please fill the Category between 3 and 20";
        res=false;
      }

      if(!isNaN(category)){
        document.getElementById('cat_err').innerHTML = " ** Please enter Character";
        res=false;
      }

            //Sub Category Validation

      if( subcategory == "" ){
        document.getElementById('subcat_err').innerHTML = " ** please fill the Sub-category ";
        res=false;
      }

      if((subcategory.length < 3) || (subcategory.length > 20)){
        document.getElementById('subcat_err').innerHTML = " ** please fill the Subcategory between 3 and 20";
        res=false;
      }


           if(!isNaN(subcategory)){
        document.getElementById('subcat_err').innerHTML = " ** Please enter Character";
        res=false;
      }

           //Product Title Validation
           if( prodtitle == "" ){
        document.getElementById('prdttl_err').innerHTML = " ** please fill the Title ";
        res=false;
      }

      if((prodtitle.length < 3) || (prodtitle.length > 20)){

	  document.getElementById('prdttl_err').innerHTML = " ** Please fill the Title between 3 and 20";
        res=false;
      }


           if(!isNaN(prodtitle)){
        document.getElementById('prdttl_err').innerHTML = " ** Please enter Title";
        res=false;
      }
             
             //Product MRP validation

      if( prodmrp == "" ){
        document.getElementById('prdmrp_err').innerHTML = " ** Please fill the MRP ";
        res=false;
      }

      if(isNaN(prodmrp)){
        document.getElementById('prdmrp_err').innerHTML = " ** MRP should conatins only digits ";
        res=false;
      }


       //Product SP validation

      if( prodsp == "" ){
        document.getElementById('prdsp_err').innerHTML = " ** Please fill the MRP ";
        res=false;
      }

      if(isNaN(prodsp)){
        document.getElementById('prdsp_err').innerHTML = " ** MRP should conatins only digits ";
        res=false;
      }


           
       //Product Description validation

      if( proddesc == "" ){
        document.getElementById('prddesc_err').innerHTML = " ** Please fill the Description ";
        res=false;
      }

            //Product BRand validation
      if( prodbrand == "" ){
        document.getElementById('prdbrnd_err').innerHTML = " ** Please fill the Brand Name ";
        res=false;
      }

      return res;
    }

  </script>
   
  </head>
<body>
  <div style="position:absolute;top:100px;left:360px; width:650px;height:630px;border: 1px solid;">
    <h1 style="text-align:center;text-decoration: underline;">PRODUCT-DETAILS FORM</h1>
     <form name='registration' action="productfileupload.php"  method="post" enctype="multipart/form-data" onsubmit="return validation()"/>

    <ul>
      <!--Displaying Category Name in Select Box-->
  <li><label for="userid">Category-NM:</label></li>
  <li>
  <select name="category" id="category" onchange="ajax_category();">
    <option value="">-Select Category-</option>
      <?php
        require_once"libraries/dbconnect.php";
        require_once"libraries/curd.php";
        $res=select_all('category_tbl');
        if($res)
        while($rows=mysql_fetch_assoc($res))
        {

        ?>1
        <option value="<?php echo $rows['cat_id'];?>">
          <?php echo UCfirst($rows['cat_name']);?>
        </option>

        <?php

        }

     ?>
      </select></li><span style="color:red" id="cat_err"></span>
      <li><label>SubCat-NM:</label></li>
      <li>
      <span id="result" name="subcategory">
      <!--Displaying Sub-Category in Select box-->
      <select name="subcategory" id="subcategory">
      <option value="">--Select Sub-Category--</option>
        </select>
        </span>
        </li><span style="color:red" id="subcat_err"></span>
      <li><label for="Product Title" >Product Title:</label></li>
      <li><input type="text" id="prodtitlt" placeholder="Product Title" name="prodtitle" size="10" /></li>&nbsp;&nbsp;&nbsp;<span style="color:red" id="prdttl_err"></span>
      <li><label for="M.R. Price" >Product M.R.P</label></li>
      <li><input type="text" placeholder="M.R.P in Rs" name="prodmrp" size="15" id="prodmrp" /></li>&nbsp;&nbsp;&nbsp;<span style="color:red" id="prdmrp_err"></span>
      <li><label for="Selling Price">Product S.P:</label></li>
      <li><input type="text" name="prodsp" placeholder="S.P in Rs " id="prodsp" size="15" /></li>&nbsp;&nbsp;&nbsp;<span id="prdsp_err"></span>
      <li><label for="Product Discription">Product Desc:</label></li>
      <li><textarea style="margin:10px" id="proddesc" name="textarea" placeholder="Enter Product Description "></textarea>&nbsp;&nbsp;&nbsp;<span style="color:red" id="prddesc_err"></span></li>
      <li ><label style="margin:10px">Brand:</label></li>
      <li><input type="text" placeholder="Product Brand" id="prodbrand" name="prodbrand" size="15" /></li>&nbsp;&nbsp;&nbsp;<span style="color:red" id="prdbrnd_err"></span>
    
      <li><label >Product-Img</label></li>
      <div style="position:absolute;left:159px;top:444px">
      <li class="field_wrapper"><input  type="file" name="image[]" multiple />
            <a href="javascript:void(0);" class="add_button" title="Add field"><span style="color:green;font-size: 15px">Add More</span></a></li>
      </div>
      <div style="position: absolute;left:110px;top:565px">
      <li><input type="submit" name="submit_file" value="ADD PRODUCT" /></li>
        </div>
      </ul>
    </form>
  </div>
 
	<?php require_once"header.php";?>
  <?php require_once"sidebar1.php";?>
</body>
</html>
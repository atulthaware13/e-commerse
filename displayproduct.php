
<?php
require_once"libraries/dbconnect.php";
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valuetosearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM product_tbl WHERE CONCAT('prod_title','prod_mrp','prod_sp','prod_desc','prod_brand','best_seller','prod_img') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM product_tbl";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysql_connect("localhost", "root", "");
    $query= mysql_select_db("myshoppy_new");
    $filter_Result = mysql_query($query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>TRP3</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">  
    <!-- animation CSS -->
    <script src="product.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery.min.js"></script>
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
     <link href="css/style1.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
<script type="text/javascript">
        
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
     
</head>

<body>
   
    <!-- Preloader 
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>-->
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
               <div class="top-left-part text-center"><a class="logo" href="index.html">
                  
                    <span class="dark-logo text-center" style="font-size: 30px; display: inline;">E-shopper</span>
                    <b class="hidden"><img src="assests/admin/plugins/images/pixeladmin-logo.png" alt="home" class="dark-logo"><img src="../plugins/images/pixeladmin-logo-dark.png" alt="home" class="light-logo"></b>

                <span class="hidden" style="display: inline;"><img src="assests/admin/plugins/images/pixeladmin-text.png" alt="home" class="dark-logo"><img src="../plugins/images/pixeladmin-text-dark.png" alt="home" class="light-logo"></span></a></div>
                <ul class="nav navbar-top-links navbar-right hidden-xs">
                 
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                
                </ul>
                <ul class="nav navbar-top-links navbar-left">
                       <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs m-r-10">
                            <input type="text" name="search" id="search" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
          
                 
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
               <!-- <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                     
                            <li role="separator" class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>-->
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                  
                     <li><a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon=></i> <span class="hide-menu">Dashboard</span></a></li>
                      <li> <a href="displaycategory.php" class="waves-effect"><i class="ti-layout"></i> 
                        <span class="hide-menu"> Categories</span></a> 
                      </li>
                      
                      <li> 
                        <a href="displaycategories.php" class="waves-effect">
                        <i class="ti-layout"></i> 
                        <span class="hide-menu">Sub Categories</span></a> 
                      </li>
                      
                      <li> 
                        <a href="slider.php" class="waves-effect">
                        <i class="ti-layout"></i> 
                        <span class="hide-menu">Slider</span></a> 
                      </li>
                      
                    <li> <a href="displayproduct.php" class="waves-effect"><i class="ti-money"></i> <span class="hide-menu">Product</span></a></li>   
                    <li> <a href="product_form.php" class="waves-effect"><i class="ti-user"></i><span class="hide-menu">Add Product</span></a></li> 
                    <li> <a href="reports.html" class="waves-effect"><i data-icon="" class="ti-bag"></i> <span class="hide-menu">Reports</span></a></li> 
                    <li> <a href="changepassword.html" class="waves-effect"><i class="ti-unlock"></i> <span class="hide-menu">Change Password</span></a></li>
            
                    <li><a href="logout.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
              
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Products</h4>
                    </div>
               </div>
                <!-- /.row -->
      
    <form action=" " method="post">
                <!--/.row -->
                <div class="row">
                       <div class="white-box">
                    <div class="col-md-12 ">
                          <form class="floating-labels">
                    <div class="col-md-6">
                      <div class="well well-lg well-padd m-b-0">
                      <!--  <div class="form-group col-md-4 m-t-n-15">
                                            <input type="text" class="form-control" id="input1" required=""><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Category</label>
                                        </div>
                             <div class="form-group col-md-3 m-t-n-15">
                                            <input type="text" class="form-control" id="input2" required=""><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input2">Price</label>
                                        </div>
                            <div class="form-group col-md-4 m-t-n-15">
                                            <input type="text" class="form-control" id="input3" required=""><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input3">Priority </label>
                                        </div>-->
                            <div class="col-md-1  m-t-n-15">
                                <button class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad">
                                   &nbsp;&nbsp;<a class="fa fa-plus" href="product_form.php">Add Product</a> 
                                    <!--  -->
                                </button>
                            </div>

                     </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group well sea-padd m-b-0">
                             <div class="input-group">
                                                <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control font12" placeholder="Search">
                                                <span class="input-group-addon"><i class="fa fa-search"></i></span> </div>
                                            </div>
                        
                       
                        </div>
                           <div class="col-md-3 sea-padd well m-b-0">
                            <select class="form-control font12 yes-bod">
                                <option>Active</option> <option>InActive</option>
                                <option>Delete</option>

                            </select>
                           </div>
                </form>
                  <div class="clearfix">&nbsp;</div>
                         <div class="table-responsive col-md-12">
                                <table  class="table table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center" >Product Title</th>
                                            <th class="text-center">Product-MRP(In RS)</th>
                                            <th class="text-center">Product-SP(In Rs)</th>
                                            <th class="text-center">Product-DESC</th>
                                            <th class="text-center">Product-Brand</th>
                                            <th class="text-center">Best-Seller</th>
                                            <th class="text-center">Product-IMG</th>
                                             <th class="text-center">Product-Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
        <?php
        //Establishing DB connection
        require_once"libraries/dbconnect.php";
        require_once"libraries/curd.php";
        $res=select_query('product_tbl','prod_id',10);
            if($res)
             {
                $i =1;
                while($row=mysql_fetch_assoc($res))
             {
            ?>
<tr>
    
   
     <td class="text-center"><?php echo $i; ?></td>
    <td><span id="table" class="text-muted"> <?php echo ucfirst($row['prod_title']) ?></span></td>
    <td class="text-center"><?php echo $row['prod_mrp']; ?></td>
    <td class="text-center"><?php echo $row['prod_sp']?></td>
    <td class="text-center"><?php echo ucfirst($row['prod_desc'])?></td>
    <td class="text-center"><?php echo ucfirst($row['prod_brand'])?></td>
    <td class="text-center"><?php echo ucfirst($row['best_seller'])?></td>
    <td class="text-center"><img src="product/<?php echo $row['prod_img']?>" width=50px; height=60px;/></td>
    <td class="text-center"> 
    <i >
    <a class="fa fa-edit text-primary" href="?uid=<?php echo base64_encode($row['subcat_id']);?>">Active</a>
    </i>
    <i >
    <a class="fa fa-trash text-danger" href="?uid=<?php echo base64_encode($row['subcat_id']); ?>">Un-Active</a>
    </i>
    </td>
    <td >
    <i><a class="fa fa-edit text-primary" href="updatebs.php?uid=<?php echo base64_encode($row['prod_id']);?>">BS</a></i> 
    <i >
    <i >
    <a class="fa fa-edit text-primary" href="updateproduct.php?uid=<?php echo base64_encode($row['prod_id']);?>">Update</a>
    </i>
    <i >
    <a class="fa fa-trash text-danger" href="deleteproduct.php?uid=<?php echo base64_encode($row['prod_id']); ?>">Delete</a>
    </i>
    </td>
</tr>

    <?php
         $i++;
        }
    }

    else
        {
        ?>
        <tr><td colspan="9"><p style="color:red"> No Record Found in DB..!!</p></td></tr>
        <?php
        }
    ?>  
    </div>      
                                    </tbody>
                                </table>
                         </form>
                            </div>
                        </div>
                           <div class="clearfix">&nbsp;</div>
                    </div>
                </div>
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> © 2018 CA All Rights Reserved | Designed by<a href="#"> Richlabz IT Solutions Pvt.Ltd</a></footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

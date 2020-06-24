<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php




session_start();



if(isset($_SESSION['uname']) && isset($_SESSION['password']))
{
   
 //  echo "Hiii".$_SESSION['uname']."your password is".$_SESSION['password'];
}
else
{
    header("location:index.php?msg=invalid");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

  <style>
    [type="date"] {
      background: url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
      display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
      opacity: 100;
    }
  </style>


</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          Logo
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="Dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>View Orders</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="CreateOrder.php">
              <i class="material-icons">content_paste</i>
              <p>Create Order</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ClientBulkOrder.php">
              <i class="material-icons">library_books</i>
              <p>Bulk Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">bubble_chart</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="MyProfile.php">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>

          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="upgrade.php">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Create Order</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Application</h4>
                </div>
                <div class="card-body">
                  <form id="ajax" enctype="multipart/form-data"  method="POST">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" name="First Name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="Middle Name" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="Last Name" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alias Name</label>
                          <input name="Alias Name" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="Middle Name" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="Last Name" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Enter Email ID</label>
                          <input name="Enter Email ID" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Internal Reference ID</label>
                          <input name="Internal Reference ID" type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Joining Location</label>
                          <input name="Joining Location" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <input type="date" name="dateofbirth" id="dateofbirth" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="margin-top:8%;">Select LOB/Vertical/Division</label>
                          <!--<input type="select" class="form-control">-->

                          <!--<select class="form-control" id="exampleFormControlSelect1"type="select"style="color:white;background-color:#202940;">
                         <option>Select LOB/Vertical/Division</option>
                         </select>-->
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;margin-top:9%;">
                            <option>Select LOB/Vertical/Division</option>
                          </select>


                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Additional Comments</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Type Text Here...</label>
                            <textarea name='Additional Comments' class="form-control" rows="4"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Package Details-->

                    <div class="card-header card-header-primary" style="margin-top:3%;">
                      <h4 class="card-title" style="color:white;">Package Details</h4>
                    </div>


                    <div class="row" style="margin-left:1%;margin-top:2%;">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;">
                            <option>Select Country</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Package</label>
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;">
                            <option>Select Package</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <!--Package Details Closes Here-->

                    <!--Service  Details-->

                    <div class="card-header card-header-primary" style="margin-top:3%;">
                      <h4 class="card-title" style="color:white;">Service Details</h4>
                    </div>


                    <div class="row" style="margin-left:1%;margin-top:2%;">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;">
                            <option>Select Country</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Service Type</label>
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;">
                            <option>Service Type</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Service Service</label>
                          <select class="browser-default custom-select" type="select" id="exampleFormControlSelect1"
                            style="color:#202940;">
                            <option>Select Service</option>
                          </select>
                        </div>
                      </div>

                    </div>

                    <!--Second Row Of Service Details Part-->

                    <div class="col-md-4">
                      <div class="form-group" style="margin-left:3%;margin-top:6%;">
                        <label class="bmd-label-floating">Source Name</label>
                        <div class="d-flex flex-row">
                          <input name="Source Name" type="text" class="form-control">
                          <i class="fa fa-plus-circle" style="font-size:35px;color:#8e3a9b"></i>

                        </div>

                      </div>
                    </div>



                    <!--Service Details Closes Here-->

                    <!--Upload Document-->

                    <div class="card-header card-header-primary" style="margin-top:3%;">
                      <h4 class="card-title" style="color:white;">Upload Documents</h4>
                    </div>


                    <div class="row" style="margin-left:1%;margin-top:2%;">
                      <div class="col-md-4">

                        <h5 style="color:white;">Upload Document Here</h5>

                        <div class="row" style="margin-left:1%;">

                          <p style="margin-top:3.5%;">Choose File 1</p>


                    <div class="form-group" style="margin-left:2%;">
                    <label for="exampleFormControlFile1" style="border: 1px solid white;padding:3px;">Upload
                     File</label>
                    <input type="file" name='file1' class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </div>

                    <div class="row" id="chooseone"style="margin-left:1%;display:none;">
                    <p style="margin-top:3.5%;">Choose File 2</p> 
                    <div class="form-group"style="margin-left:2%;">
                    <label for="exampleFormControlFile1"style="border: 1px solid white;padding:3px;">Upload File</label>
                    <input type="file"id="choosefileone" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </div>
                 
                     <!--Add Another Icon Part starts Here-->

                    <div class="d-flex flex-row"id="chooseanother"style="margin-left:2.2%;">
                    <i class="fa fa-plus-circle" style="font-size:35px;color:#8e3a9b"onclick="myfunction()"></i>
                    <p style="margin-top:3%;margin-left:3%;">Add Another</p>
                     </div>
 
                   <!--Add Another Icon Part closes Here-->

                      </div>



                      <!--File Format Part of Upload Document Starts Here-->

                      <div class="col-md-4">

                        <h5 style="color:white;">File Formats</h5>

                        <div class="row" style="margin-left:2%;margin-top:2%;">

                          <i class="fa fa-file-word-o" style="font-size:40px;color:red;"></i>

                          <i class="fa fa-file-excel-o" style="font-size:40px;margin-left:2%;color:red;"></i>

                          <i class="fa fa-file-powerpoint-o" style="font-size:40px;margin-left:2%;color:red;"></i>

                        </div>

                        <div class="row" style="margin-left:2%;margin-top:5%;">

                          <i class="fa fa-file-pdf-o" style="font-size:40px;color:red;"></i>
                          <!--<img src="images/wod.jpg">-->

                        </div>

                      </div>
                      <!--File Format part Closes Here-->

                      <!--Document List View Starts Here-->

                      <div class="col-md-4">


                        <div class="form-group">
                          <label for="exampleFormControlSelect5" style="color:white;margin-top:1%;">
                            <h5>Document List View</h5>
                          </label>
                          <select multiple class="form-control" size='8' id="exampleFormControlSelect5"
                            style="height:100%;margin-bottom:4%;">
                            <option style="margin-top:9%;">Document 1.xls</option>
                            <option style="margin-top:3%;">Document 2.png</option>
                            <option style="margin-top:3%;">Document 3.docs</option>
                            <option style="margin-top:3%;">Document 4.rtf</option>
                            <option style="margin-top:3%">Document 5.pdf</option>
                          </select>
                        </div>

                      </div>
                      <!--Document List View part Closes Here-->
                    </div>
                    <!--Main Row Of Upload Documents Closes Here-->

                    <!--Add Another Icon Part starts Here-->

                  

                    <!--Add Another Icon Part Closes Here-->

                    <div class="d-flex flex-row-reverse" style="margin-top:2%;">

                      <div class="checkbox checkbox-square checkbox-red" style="margin-top:0.7%;">
                        <input class="form-check-input" type="checkbox" name='checkbox' value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Rush Order
                        </label>
                      </div>

                      <p style="margin-right:5%;margin-top:0.5%;">In Case Of Insufficiency Contact?</p>

                    </div>

                    <div class="d-flex flex-row-reverse" style="margin-top:1%;">

                      <div class="checkbox checkbox-circle checkbox-red" style="margin-right:11%;">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2"
                          value="option1" style="border:5px solid red;">
                        <label class="form-check-label" for="exampleRadios2">
                          Employee
                        </label>
                      </div>

                      <div class="checkbox checkbox-circle checkbox-red" style="margin-right:5%;">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1"
                          value="option2">
                        <label class="form-check-label" for="exampleRadios1">
                          Client
                        </label>
                      </div>

                    </div>



                    <div class="d-flex flex-row-reverse" style="margin-top:2%;">

                      <button type="submit" class="btn btn-primary pull right" style="margin-left:2%;">Cancel</button>
                      <div class="clearfix"></div>

                      <button type="submit" class="btn btn-primary" style="margin-left:2%;">Ok</button>
                      <div class="clearfix"></div>

                      <button type="submit" class="btn btn-primary" style="margin-left:2%;">Preview</button>
                      <div class="clearfix"></div>

                    </div>



                    <!--Upload Document Closes Here-->



                    <!--<button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>-->
                  </form>
                </div>


              </div>
            </div>

            <!--<footer class="footer">
              <div class="container-fluid">
                <nav class="float-left">
                  <ul>
                    <li>
                      <a href="https://www.creative-tim.com">
                        Creative Tim
                      </a>
                    </li>
                    <li>
                      <a href="https://creative-tim.com/presentation">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="http://blog.creative-tim.com">
                        Blog
                      </a>
                    </li>
                    <li>
                      <a href="https://www.creative-tim.com/license">
                        Licenses
                      </a>
                    </li>
                  </ul>
                </nav>
                <div class="copyright float-right" id="date">
                  , made with <i class="material-icons">favorite</i> by
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
              </div>
            </footer>-->
            <script>
              const x = new Date().getFullYear();
              let date = document.getElementById('date');
              date.innerHTML = '&copy; ' + x + date.innerHTML;
            </script>
          </div>
        </div>
        <!--<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> 
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.php" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>-->
        <!--   Core JS Files   -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap-material-design.min.js"></script>
        <script src="https://unpkg.com/default-passive-events"></script>
        <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="assets/demo/demo.js"></script>
        <script src="createorder.js">

  


        </script>
</body>

</html>
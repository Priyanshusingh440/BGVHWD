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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Add Client
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
    name="viewport" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/3aaaecc22c.js" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

  <!--Switching modes-->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="dark-edition">
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"> <a class="navbar-brand" href="#">
          <img src="assets/img/logo.png" width="100%" height="100%" style="margin-left: 2%;" alt="">
        </a></div>
      <!--Side Bar-->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./adminDashboard_sidebar.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#client" class="nav-link" data-toggle="collapse"><i class="material-icons">person</i>
              <p>Client</p>
            </a>
            <div class="collapse" id="client">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./addClient.php">Add Client</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./modifyClient.php">Modify Client</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./vieworder.php">View Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./assignService.php">Assign Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./LOB.php">LOB</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./createPackage.php">Assign Package</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item">
            <a href="#services" class="nav-link" data-toggle="collapse">
              <i class="material-icons">supervisor_account</i>
              <p>Services</p>
            </a>
            <div class="collapse" id="services">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./serviceType.php">Add Service Type</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./createService.php">Add Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./service.php
                    ">Modify Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./package.php">Create/Modilfy Package </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./#">Auto SLA </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./vieworder.php">View Order</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <i class="material-icons">bubble_chart</i> -->
          <li class="navbar-item">
            <a href="#master" class="nav-link" data-toggle="collapse">
              <i class="material-icons">library_books</i>
              <p>Master</p>
            </a>

            <div class="collapse" id="master">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./mandatoryDocuments.php">Mandatory Documents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./standardMacro.php">Standard Macro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./#">Auto SLA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./reportColor.php">Report Color Code</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./reportConfig.php">Report Configuration Master</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./#">Insufficient Emial Triggers</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item">
            <a href="#user" class="nav-link" data-toggle="collapse"><i class="material-icons">account_circle</i>
              <p>User</p>
            </a>
            <div class="collapse" id="user">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./AddEmployeeOffQc.php">ADD/OF/QC</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./viewAllOFQC.php">View All OF QC</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item">
            <a href="#settings" class="nav-link" data-toggle="collapse"><i class="material-icons">settings</i>
              <p>Settings </p>
            </a>
            <div class="collapse" id="settings">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./mandatoryFieldManager.php">Mandatory Fiends Manager</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./EmailTrigger.php">Email Trigger Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" name href="./ServiceWiseDocument.php">Service Wise Documents</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar-item">
            <a href="#calendar" class="nav-link" data-toggle="collapse"><i class="material-icons">calendar_today</i>
              <p>calendar</p>
            </a>
            <div class="collapse" id="calendar">
              <ul class="list-unstyled nav">
                <li class="nav-item">
                  <a class="nav-link" name href="./ViewAttendence.php">View calendar</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!--Side Bar End-->
    </div>
    <div class="main-panel mainP">
      <!--toggle button-->
      <div class="toggle-container" style="margin-bottom: 10%; position: fixed;z-index: 100; top: 8.5%; right: 0;">
        <input type="checkbox" id="switch" name="theme">
        <label id="toggleButton" for="switch">Toggle</label>
      </div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" style="padding: 0; margin: 0;" id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper" style="height: 70px;">
            <a class="navbar-brand" href="javascript:void(0)" style="color: white;">Settings</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." />
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i style="color: white;" class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style="color: white;" class="material-icons">notifications</i>
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
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i style="color: white;" class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                  <div class="ripple-container"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="MyProfile.php">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="API/db_logout.php">Log out</a>
                </div>
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
                  <h4 class="card-title">Servicewise Document Settings</h4>
                </div>
                <div class="card-body">
                  <form id="ajax">
                    <div class="row justify-content-around">
                      <div class="form-group col-md-5">
                        <select style="margin-top: 1.5%; margin-top: 2%;" class="browser-default custom-select" type="select" id="" name="" style="color:#202940;" required>
                          <option value="">Select Services</option>
                          <option value="">India Address Verification</option>
                        </select>
                      </div>
                      <div class="form-group col-md-5">
                        <select style="margin-top: 1.5%; margin-top: 2%;" class="browser-default custom-select" type="select" id="" name="" style="color:#202940;" required>
                          <option value="">Birth Certificate</option>
                          <option value="">Adhar Card</option>
                          <option value="">Last Name</option>
                          <option value="">12th Marks Sheet</option>
                          <option value="">10th Marks Sheet</option>
                          <option value="">Pan Card</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group shadow-textarea" style="margin-top:6% !important; margin-bottom: 2%;width: 90%; margin: auto;">
                      <label for="Email">Preview</label><br>
                      <div id="previewDiv" style="width: 100%; height: 140px; border: 1px solid rgba(128, 128, 128, 0.671); border-radius: 5px; ">
                      </div>
                    </div>

                    <div class="row justify-content-end" style="margin-right: 5%;margin-top: 1%;">
                      <button type="submit" class="btn btn-primary mx-2">
                        Okay
                      </button>

                      <button type="button" class="btn btn-primary">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
                <!-- table -->
                <div class="col-md-11" style="margin: auto;">
                  <div class="row">
                    <table class="table table-hover" style="margin-top: 1%; text-align: center;">
                      <thead class="text-primary" style="background-color: rgba(0, 0, 0, 0.836) !important;">
                        <th>Sr.No</th>
                        <th>Services</th>
                        <th>Documents List</th>
                        <th></th>
                      </thead>
                      <tbody id="table-body">
                        <tr>
                          <td class="tdth">1</td>
                          <td class="tdth">
                            <p>Indian Address Verification</p>
                          </td>
                          <td class="tdth">Light Bill, Pan Card, Adhar Card</td>

                          <td class="text-primary">
                            <button style="margin-left: 10%;" id="btn1" type="button" class="btn btn-primary btn-sm togglebtn AllTds ">
                              <i class="fa fa-trash tdth" aria-hidden="true"></i>
                            </button>
                        </tr>
                        <tr>
                          <td class="tdth"></td>
                          <td class="tdth"></td>
                          <td class="tdth"></td>
                          <td class="text-primary">
                            <button style="margin-left: 10%;" type="button" id="btn2" class="btn btn-primary btn-sm togglebtn AllTds">
                              <i class="fa fa-trash tdth" aria-hidden="true"></i>
                            </button>
                        </tr>
                        <tr>
                          <td class="tdth"></td>
                          <td class="tdth"></td>
                          <td class="tdth"></td>
                          <td class="text-primary">
                            <button type="button" style="margin-left: 10%;" id="btn3" class="btn btn-primary btn-sm togglebtn AllTds">
                              <i class="fa fa-trash tdth" aria-hidden="true"></i>
                            </button>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-primary">
                            <button type="button" style="margin-left: 10%;" id="btn4" class="btn btn-primary btn-sm togglebtn AllTds">
                              <i class="fa fa-trash tdth" aria-hidden="true"></i>
                            </button>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- table end -->


              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById("date");
        date.innerHTML = "&copy; " + x + date.innerHTML;
      </script>
    </div>
  </div>
  <!--mode changing-->
  <script>
     $(".hidediv").hide()
    $(function() {
      $(".togglebtn").click(function() {
        $(".hidediv").fadeToggle("slow");
      })
    })


  </script>
  <script>
    let darkmode = localStorage.getItem("darkmode");
    const darkmodetoggle = document.querySelector('input[name=theme]');

    const enabledarkmode = () => {
      document.documentElement.setAttribute('data-theme', 'dark')
      localStorage.setItem("darkmode", "enabled");
    }


    const disabledarkmode = () => {
      document.documentElement.setAttribute('data-theme', 'light')
      localStorage.setItem("darkmode", null);
    }


    if (darkmode === "enabled") {
      enabledarkmode();
    }


    darkmodetoggle.addEventListener("change", () => {
      darkmode = localStorage.getItem("darkmode");
      if (darkmode !== "enabled") {
        trans()
        enabledarkmode();
      } else {
        trans()
        disabledarkmode();
      }
    })

    let trans = () => {
      document.documentElement.classList.add('transition');
      window.setTimeout(() => {
        document.documentElement.classList.remove('transition');
      }, 1000)
    }
  </script>
  <!--mode change end-->
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
  <script type="text/javascript" src="data2.js"></script>
  <script>
    function formReset() {
      document.getElementById("ajax").reset();
    }
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $(".sidebar");

        $sidebar_img_container = $sidebar.find(".sidebar-background");

        $full_page = $(".full-page");

        $sidebar_responsive = $("body > .navbar-collapse");

        window_width = $(window).width();

        $(".fixed-plugin a").click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass("switch-trigger")) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $(".fixed-plugin .active-color span").click(function() {
          $full_page_background = $(".full-page-background");

          $(this).siblings().removeClass("active");
          $(this).addClass("active");

          var new_color = $(this).data("color");

          if ($sidebar.length != 0) {
            $sidebar.attr("data-color", new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr("filter-color", new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr("data-color", new_color);
          }
        });

        $(".fixed-plugin .background-color .badge").click(function() {
          $(this).siblings().removeClass("active");
          $(this).addClass("active");

          var new_color = $(this).data("background-color");

          if ($sidebar.length != 0) {
            $sidebar.attr("data-background-color", new_color);
          }
        });

        $(".fixed-plugin .img-holder").click(function() {
          $full_page_background = $(".full-page-background");

          $(this).parent("li").siblings().removeClass("active");
          $(this).parent("li").addClass("active");

          var new_image = $(this).find("img").attr("src");

          if (
            $sidebar_img_container.length != 0 &&
            $(".switch-sidebar-image input:checked").length != 0
          ) {
            $sidebar_img_container.fadeOut("fast", function() {
              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $sidebar_img_container.fadeIn("fast");
            });
          }

          if (
            $full_page_background.length != 0 &&
            $(".switch-sidebar-image input:checked").length != 0
          ) {
            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .data("src");

            $full_page_background.fadeOut("fast", function() {
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
              $full_page_background.fadeIn("fast");
            });
          }

          if ($(".switch-sidebar-image input:checked").length == 0) {
            var new_image = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .attr("src");
            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .data("src");

            $sidebar_img_container.css(
              "background-image",
              'url("' + new_image + '")'
            );
            $full_page_background.css(
              "background-image",
              'url("' + new_image_full_page + '")'
            );
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css(
              "background-image",
              'url("' + new_image + '")'
            );
          }
        });

        $(".switch-sidebar-image input").change(function() {
          $full_page_background = $(".full-page-background");

          $input = $(this);

          if ($input.is(":checked")) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn("fast");
              $sidebar.attr("data-image", "#");
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn("fast");
              $full_page.attr("data-image", "#");
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr("data-image");
              $sidebar_img_container.fadeOut("fast");
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr("data-image", "#");
              $full_page_background.fadeOut("fast");
            }

            background_image = false;
          }
        });

        $(".switch-sidebar-mini input").change(function() {
          $body = $("body");

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $("body").removeClass("sidebar-mini");
            md.misc.sidebar_mini_active = false;

            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
          } else {
            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
              "destroy"
            );

            setTimeout(function() {
              $("body").addClass("sidebar-mini");

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event("resize"));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });
      });
    });

    $("form").submit(function(event) {
      var formdata = $("form").serializeArray();
      var data = {};
      $(formdata).each(function(index, obj) {
        data[obj.name] = obj.value;
      });

      //console.log(data);
      fetch('./API/createPackage.php', {
        method: 'post',
        body: JSON.stringify(data)
      }).then(function(res) {
        //console.log(res.text());
        formReset();
      }).catch(err => {
        //console.log(err);
        return err;
      })
      event.preventDefault();
    });
    $.ajax;
  </script>
</body>

</html>
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
        View Attendence
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

    <!--pop ups-->
    <link rel="stylesheet" href="popup.css">
    <style>
        .ApprovedBtn {
            background-color: white;
            border-radius: 4px;
            background-color: #601A75;
            border: 1px solid #601A75;
            color: white;
            padding: 4px 8px 4px 8px;
            cursor: pointer;
        }
    </style>
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
                                    <a class="nav-link" href="./vieworder2.php">View Order</a>
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
                                    <a class="nav-link" href="./vieworder2.php">View Order</a>
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
                        <a href="#user" class="nav-link" data-toggle="collapse"><i
                                class="material-icons">account_circle</i>
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
                        <a href="#settings" class="nav-link" data-toggle="collapse"><i
                                class="material-icons">settings</i>
                            <p>Settings</p>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="list-unstyled nav">
                                <li class="nav-item">
                                    <a class="nav-link" name href="./settings1.php">Mandatory Fields Manager</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" name href="./settings2.php">Email Trigger Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" name href="./settings3.php">Servicewise Document</a>
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
            <div class="toggle-container"
                style="margin-bottom: 10%; position: fixed;z-index: 100; top: 8.5%; right: 0;">
                <input type="checkbox" id="switch" name="theme">
                <label id="toggleButton" for="switch">Toggle</label>
            </div>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example"
                style="padding: 0; margin: 0;">
                <div class="container-fluid">
                    <div class="navbar-wrapper" style="height: 70px;">
                        <a class="navbar-brand" href="javascript:void(0)" style="color: white;">View Attendence</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input
                  type="text"
                  value=""
                  class="form-control"
                  placeholder="Search..."
                />
                <button
                  type="submit"
                  class="btn btn-default btn-round btn-just-icon"
                >
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
                                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i style="color: white;" class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your
                                        email</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <h4 id="viewAttendence" style="font-size: 16px;" class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    <form id="ajax">
                                        <!--First row-->
                                        <div class="row">
                                            <div class="col-md-2" style="padding-right: 0;">
                                                <label style="margin-top:18px" for="viewType">Search Emploee :</label>
                                            </div>
                                            <div class="col-md-3" style="padding-left: 0;">
                                                <div class="form-group">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--First row ends-->
                                    </form>
                                </div>
                                <!--Card Body Close-->
                                <!--Tablecard Body-->
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table table-hover" style="margin-top: 4%;">
                                        <thead class="text-primary "
                                            style="background-color: rgba(15, 13, 13, 0.856) !important;">
                                            <th>
                                                ID No
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Emp Type
                                            </th>
                                            <th>
                                                Today Status
                                            </th>
                                            <th>
                                                Entry Time
                                            </th>
                                            <th>
                                                Approve Status
                                            </th>
                                            <th>

                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tablehead1">
                                                    1
                                                </td>
                                                <td class="tablehead1">
                                                    Vishwas
                                                </td>
                                                <td class="tablehead1">
                                                    QC
                                                </td>
                                                <td class="tablehead1">
                                                    Prseent
                                                </td>
                                                <td class="tablehead1">
                                                    10:54:10 AM
                                                </td>
                                                <td class="tablehead1">
                                                    <button class="ApprovedBtn"><a class="Approve">Approve</a></button>
                                                </td>
                                                <td class="text-primary tablehead1">
                                                    <div class="box">
                                                        <a href="./ViewEacEmp.php"
                                                            class="button btn btn-primary btn-sm">View</a>
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td class="tablehead1">
                                                    2
                                                </td>
                                                <td class="tablehead1">
                                                    Robert
                                                </td>
                                                <td class="tablehead1">
                                                    OF
                                                </td>
                                                <td class="tablehead1">
                                                    Sick Leave
                                                </td>
                                                <td class="tablehead1">
                                                    10:54:10 AM
                                                </td>
                                                <td class="tablehead1">
                                                    <button class="ApprovedBtn"><a class="Approve">Approve</a></button>
                                                </td>
                                                <td class="text-primary tablehead1">
                                                    <div class="box">
                                                        <a href="./ViewEacEmp.php"
                                                            class="button btn btn-primary btn-sm">View</a>
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td class="tablehead1">
                                                    3
                                                </td>
                                                <td class="tablehead1">
                                                    Shan
                                                </td>
                                                <td class="tablehead1">
                                                    OF
                                                </td>
                                                <td class="tablehead1">
                                                    Present
                                                </td>
                                                <td class="tablehead1">
                                                    10:50:10 AM
                                                </td>
                                                <td class="tablehead1">
                                                    <button class="ApprovedBtn"><a class="Approve">Approve</a></button>
                                                </td>
                                                <td class="text-primary tablehead1">
                                                    <div class="box">
                                                        <a href="./ViewEacEmp.php"
                                                            class="button btn btn-primary btn-sm">View</a>
                                                    </div>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--tabel Card Bod Ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                const today = new Date().toDateString();
                document.getElementById("viewAttendence").innerHTML = today

                console.log(new Date().toLocaleTimeString())
                console.log(new Date().getFullYear())

                //Approve status
                let approved = document.querySelectorAll(".Approve");
                let ApprovedBtn = document.querySelectorAll(".ApprovedBtn");

                approved.forEach((ele) => {
                    ele.addEventListener("click", function (event) {
                        let element = event.currentTarget;
                        if (element.textContent === "Approve") {
                            element.innerText = "Approved"
                            element.style.color = "green"
                        } else if (element.textContent === "Approved") {
                            element.innerText = "Approve"
                            element.style.color = "white"
                        }


                    })
                })



                //  approved.addEventListener("click", ()=>{
                // if(approved.textContent === "Approve"){
                //     approved.innerText="Approved"
                //     ApprovedBtn.style.backgroundColor="green"
                // }else
                // if(approved.textContent === "Approved"){
                //     approved.innerText="Approve"
                //     ApprovedBtn.style.backgroundColor="#601A75"
                // }

                //  })
            </script>

            <!--mode changing-->
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
            <script src="data.js"></script>
</body>

</html>
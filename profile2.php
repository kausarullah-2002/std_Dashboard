<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="./css/style.css">
    

    <style>
            nav{
                position: relative;
            }
            .logodesigness{
                position: absolute;
                background-color: green;
                width: 100%;
                height: auto;
                padding: 5px;
            }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                
            </a>
            <div class="logodesigness"><img src="./images/3.png" alt=""></div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link text-dark" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <li style="background-color:#043C8B" class="nav-item active">
                <a class="nav-link text-dark" href="profile.html">
                    <i class="fas fa-fw fa-cog text-light"></i>
                    <span style="color: antiquewhite;">Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="course.html">
                    <i class="fas fa-fw fa-wrench text-dark"></i>
                    <span>Courses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="payment.html">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Payment</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="test.html">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Admission Test</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="charts.html">
                    <i class="fas fa-fw fa-chart-area text-dark"></i>
                    <span>Interview</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="tables.html">
                    <i class="fas fa-fw fa-table text-dark"></i>
                    <span>Status</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-success" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <h1> Dashboard </h1>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="./images/profile.jpeg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <section class="course">
                    <br>
                    <h1>Personal Information</h1>

                        <form action="formCheck.php" method="POST" ctype="multipart/form-data">
                            <?php if(isset($_GET['error'])) {  ?>
                                    
                                    <p class="error">
                                        <?php echo $_GET["error"]?>
                                    </p>
                                <?php  } ?>                    
                        
                        <div class="row">
                        <div class="course-col">
                            <input type="text"  placeholder="Full Name" name="fullname" >
                            <input type="text"  placeholder="Father Name" name="fathername">
                            <input type="text"  placeholder="Email" name="stdemail">
                            <input type="text"  placeholder="Contact" name="contact">
                            <input type="text"  placeholder="CNIC Number" name="stdCNIC">
                        </div>



                        <div id="disabled" class="course-col">

                            <input type="text"  placeholder="Father CNIC Number" name="fCNIC">
                            <input type="text"  placeholder="Age" name="age">
                            <input type="text"  placeholder="Gender" name="gender">
                            <input type="text"  placeholder="City" name="city">
                            <input type="text"  placeholder="Address" name="address">
                        </div>

                    </div>
                        
                    <!-- <a id="but" href="profile.html"><button type="button" class="btn btn-primary">Edit</button></a> -->
                    <br>
                    <br>
                    <h1>Education Information</h1>
                    <div class="row">
                    <div class="course-col">
                        <input type="text"  placeholder="Select Qualification" name="educationInformation">
                    </div>
                </div>
                <h1>Upload Documents</h1>
                <div class="row">
                <div class="course-col">
                    Upload CNIC (FRONT)
                <input class="form-control" type="file" placeholder="Upload CNIC(Front)" name="stdFrontCNIC">
                Upload CNIC (BACK)
                <input class="form-control" type="file" placeholder="Upload CNIC (Back)" name="stdBackCNIC">
                Upload Father CNIC (FRONT)
                <input class="form-control" type="file" placeholder="Father CNIC (Front)" name="FFrontCNIC">
                Upload Father CNIC (BACK)
                <input class="form-control" type="file" placeholder="Father CNIC (Back)" name="FBackCNIC">
                Upload Metric Marksheet (FRONT)
                <input class="form-control" type="file" placeholder="Upload Matric Marksheet(Front)" name="marksheetFront">
                Upload Metric Marksheet (BACK)
                <input class="form-control" type="file" placeholder="Upload Matric Marksheet(Back)" name="marksheetBack">

                </div>
            </div>


            <a id="butt" href="profile2.php"> <input type="submit" class="btn btn-primary" value="Save"></a>
            </form>
            <br><br>
            </section>



            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
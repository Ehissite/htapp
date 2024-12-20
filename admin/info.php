<?php 

session_start(); 
include "database.php";
include "query.php";

if($data != 1) 
{
     header("Location: onboarding"); //Do not allow him to access.
     exit;
}

$userid = $_SESSION['id'];
?>


<?php
if (!isset($_SESSION['id'])) {         // condition Check: if session is not set. 
  $http = $_SERVER['REQUEST_URI'];
  header("location: ../auth-admin?2jhYuhiudvdvsjskGHKnhgKHSGFSFHOpkjgFSRSYBSFVSFhjdkdosgsgvsvcagagGGFSGFSFSHSJ=$http");   // if not set the user is sendback to login page.
}
?>


<?php
if (isset($_POST['signout'])) {
  session_destroy();            //  destroys session 
  header('location: home');
}
?>
<?php if (isset($_GET['id'])){
    $get_products = "select * from inquiry where id = '$_GET[id]'";

    $run_products = mysqli_query($conn,$get_products);

    $row_products=mysqli_fetch_array($run_products);

    $iid = $row_products['id'];
    $iname = $row_products['name'];
    $iemail = $row_products['email'];
    $isubject = $row_products['subject'];
    $imessage = $row_products['message'];
    $idate = $row_products['date'];
    
  } ?>
<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/project-ticket-details.html  07 Jan 2020 03:41:12 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="../images/icons/logo.png" type="image/x-icon"/>

<title><?=$appname?> - Info</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css"/>
<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/85aef59da1.js" crossorigin="anonymous"></script>
<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>
</head>

<body class="font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
<?php include 'headertop.php'; ?>

    <?php include 'set.php'; ?>

    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="index-2.html"><img src="assets/images/themes/default.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="project-dark/index.html"><img src="assets/images/themes/dark.png" class="img-fluid" /></a>
                    </li>                    
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="project-rtl/index.html"><img src="assets/images/themes/rtl.png" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Soccer<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card-body">
            <a href="page-profile.html"><img class="card-profile-img" src="assets/images/sm/avatar1.jpg" alt=""></a>
            <h6 class="mb-0">Peter Richards</h6>
            <span>peter.richard@gmail.com</span>
            <div class="d-flex align-items-baseline mt-3">
                <h3 class="mb-0 mr-2">9.8</h3>
                <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
            </div>
            <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-indigo" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6 class="text-uppercase font-10 mt-1">Performance Score</h6>
            <hr>
            <p>Activity</p>
            <ul class="new_timeline">
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:00am</div>
                    <div class="desc">
                        <h3>Attendance</h3>
                        <h4>Computer Class</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:30am</div>
                    <div class="desc">
                        <h3>Added an interest</h3>
                        <h4>“Volunteer Activities”</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">12:00pm</div>
                    <div class="desc">
                        <h3>Developer Team</h3>
                        <h4>Hangouts</h4>
                        <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:00pm</div>
                    <div class="desc">
                        <h3>Responded to need</h3>
                        <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                    </div>
                </li>
                <li>
                    <div class="bullet orange"></div>
                    <div class="time">1:30pm</div>
                    <div class="desc">
                        <h3>Lunch Break</h3>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:38pm</div>
                    <div class="desc">
                        <h3>Finish</h3>
                        <h4>Go to Home</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<?php include 'header.php' ?>

    <?php include 'sidebar.php' ?>

        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card c_grid c_yellow">
                            <div class="card-body text-center">
                            
                                <h6 class="mt-3 mb-0"><?=$iname?></h6>
                                <span><a href="mailto:<?=$iemail?>"><?=$email?></a></span>
                                
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Inquiry</h3>
                               
                            </div>
                            <div class="card-body">
                                <div class="timeline_item ">
                                    <img class="tl_avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                    <span><a href="javascript:void(0);"><?=$iname?> <small class="float-right text-right"><?=$idate?></small></span>
                                    <h6 class="font600" style="color:black;"><?=$isubject?></h6>
                                    <div class="msg">
                                        <p style="color:black;"><?=$imessage?></p>
                                        <!-- <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a>
                                        <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                        <div class="collapse p-4 section-gray mt-2" id="collapseExample">
                                            <form class="well">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                <li>
                                                    <div class="avatar_img">
                                                        <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg" alt="">
                                                    </div>
                                                    <div class="comment_body">
                                                        <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                        <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/summernote.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>

</html>
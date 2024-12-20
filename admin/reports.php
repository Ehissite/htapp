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
 <?php if (isset($_GET['userid'])) 
  {
    if ($conn->query("delete from userdata where userid = '$_GET[userid]'"))
    {
        $sql = "update user set data=0 where userid ='$_GET[userid]'"; 
        $result = $conn->query($sql); 

      header("location: reports");
    }
  } ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="../images/icons/logo.png" type="image/x-icon"/>

<title><?=$appname?> - Reports</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="assets/plugins/dropify/css/dropify.min.css">
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
<!-- Overlay For Sidebars -->

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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <ul class="nav nav-tabs b-none">
                                        <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i>Reports</a></li>
                                    </ul>
                                    <div class="d-flex align-items-center sort_stat">
                                        <!-- <div class="d-flex">
                                            <span class="bh_income">2,5,1,8,3,6,7,5,3,6,7,5</span>
                                            <div class="ml-2">
                                                <p class="mb-0 font-11">MY INCOME</p>
                                                <h5 class="font-16 mb-0">$5,510</h5>
                                            </div>
                                        </div> 
                                        <div class="d-flex ml-3">
                                            <span class="bh_traffic">5,8,9,10,5,2,5,8,9,10</span> 
                                            <div class="ml-2">
                                                <p class="mb-0 font-11">SITE TRAFFIC</p>
                                                <h5 class="font-16 mb-0">53% Up</h5>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="table-responsive" id="users">
                                    <table class="table table-hover table-vcenter text-nowrap table_custom border-style list">
                                        <tbody>
                                        <?php

                                    $get_products = "select * from userdata where userid !='$user_id'";

                                    $run_products = mysqli_query($conn,$get_products);

                                    while($row_products=mysqli_fetch_array($run_products)){

                                    $userdataid = $row_products['userid'];
                                    $fullname = $row_products['fullname'];
                                    $udob = $row_products['dob'];
                                    $contact = $row_products['contact'];
                                    $uemail = $row_products['email'];
                                    $street = $row_products['street'];
                                    $state = $row_products['state'];
                                    $postcode = $row_products['postcode'];
                                    $cartype = $row_products['cartype'];
                                    $makeyear = $row_products['makeyear'];
                                    $ownershipstatus = $row_products['ownershipstatus'];
                                    $batteryrange = $row_products['batteryrange'];
                                    $chargingstationtype = $row_products['chargingstationtype'];
                                    $homechargingaccess = $row_products['homechargingaccess'];
                                    $specify = $row_products['specify'];
                                    $officechargingaccess = $row_products['officechargingaccess'];
                                    $oftencharge = $row_products['oftencharge'];
                                    $charginglocation = $row_products['charginglocation'];
                                    $hometype = $row_products['hometype'];
                                    $homeownership = $row_products['homeownership'];
                                    $electricityprovider = $row_products['electricityprovider'];
                                    $subscriber = $row_products['subscriber'];
                                    $avgdistance = $row_products['avgdistance'];
                                    $vehicleuse = $row_products['vehicleuse'];
                                    $challenges = $row_products['challenges'];
                                    $greentech = $row_products['greentech'];
                                    $subscription = $row_products['subscription'];
                                    $communicationmethod = $row_products['communicationmethod'];
                                    $consent = $row_products['consent'];
                                    $newsletter = $row_products['newsletter'];

                                    ?>
                                            <tr class="">
                                                <td class="width35 hidden-xs">
                                                    <a href="report-details?userid=<?=$userdataid ?>" class="mail-star"><i class="fa fa-star"></i></a>
                                                </td>
                                                <td>
                                                    <div><a href="report-details?userid=<?=$userdataid ?>"><?=$fullname?></a></div>
                                                    <div class="text-muted"><a href="report-details?userid=<?=$userdataid ?>"><?=$phone?></a></div>
                                                </td>
                                                <td class="hidden-xs">
                                                    <div class="text-muted"><a href="report-details?userid=<?=$userdataid ?>"><?=$uemail?></a></div>
                                                </td>
                                                <td class="hidden-sm">
                                                    <div class="text-muted"><?=$street?></div>                                                
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-sm btn-link" href="tel:<?=$phone?>" data-toggle="tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                                                    <a class="btn btn-sm btn-link" href="mailto:<?=$uemail?>" data-toggle="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="" href="reports?userid=<?=$userdataid ?>" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="section-body">
            
        </div>
    </div>
</div>


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/sweetalert.bundle.js"></script>
<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/sweetalert.js"></script>
<script>
$(function() {
    "use strict";
    
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });
});
</script>
</body>

<!-- soccer/project/app-contact.html  07 Jan 2020 03:40:35 GMT -->
</html>
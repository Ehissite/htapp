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

<?php if (isset($_GET['userid'])){
    $get_products = "select * from userdata where userid = '$_GET[userid]'";

    $run_products = mysqli_query($conn,$get_products);

    $row_products=mysqli_fetch_array($run_products);

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
  } ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="../images/icons/logo.png" type="image/x-icon"/>

<title><?=$appname?> - Reports (<?=$fullname?>)</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/85aef59da1.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css"/>
<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

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
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?=$fullname?></h5>
                                <p class="card-text"><?=$street?></p>
                                
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?=$uemail?></li>
                                <li class="list-group-item"><?=$phone?></li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-12">
                        
                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            
                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa-regular fa-window-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa-solid fa-xmark"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$fullname?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$udob?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Phone text (+44)</label>
                                                    <input type="email" class="form-control" disabled=""  value="<?=$phone?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$uemail?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$street?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$state?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Postal Code</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$postcode?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Car Type/Model</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$cartype?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Vehicle Make/Year</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$makeyear?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Car Ownership Status</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$ownershipstatus?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Battery Range (if EV)</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$batteryrange?> Miles/Km">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Charging Station Type Used Most</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$chargingstationtype?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Do you have Home Charging Access?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$homechargingaccess?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">If Yes, Specify</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$specify?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Do you have Office Charging Access?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$officechargingaccess?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">How often do you charge externally?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$oftencharge?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Usual Charging Location</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$charginglocation?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Home Type</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$hometype?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Home Ownership Status</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$homeownership?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Current Electricity Provider</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$electricityprovider?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Are you a Green Energy Subscriber?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$subscriber?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Average Weekly Distance Driven</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$avgdistance?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Primary Vehicle Use</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$vehicleuse?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Current EV charging challenges?</label>
                                                    <input type="text" class="form-control"  value="<?=$challenges?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Are you interested in Green Tech Solutions?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$greentech?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Subscription Preference</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$subscription?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Preferred Communication Method</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$communicationmethod?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Data Consent Agreement</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$consent?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Would you subscribe to our newsletter?</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?=$newsletter?>">
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
        </div>
        
    </div>
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/fullcalendar.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/calendar.js"></script>
<script src="assets/js/chart/knobjs.js"></script>
</body>

</html>
<?php session_start();       // Start the session ?>    
<?php include "database.php" ?>
<?php include "query.php" ?>
<?php

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
<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="../images/icons/logo.png" type="image/x-icon"/>

<title><?=$appname?> - Account</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
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
                <!-- <ul class="list-group list-unstyled">
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
                </ul> -->
            </div>
        </div>
    </div>

    <!-- <div class="user_div">
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
    </div> -->

    <?php include 'header.php' ?>

    <?php include 'sidebar.php' ?>

        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between">
                            <ul class="nav nav-tabs page-header-tab">
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#User_Settings">Account Information</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Update">Update Information</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions">Roles & Permissions</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Email_Settings">Email</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Invoice_Settings">Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Notifications">Notifications </a></li> -->
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Change_Password">Change Password </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane" id="User_Settings">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Account Settings</h3>
                                        <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa-regular fa-window-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>First Name <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="<?=$firstname?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input class="form-control" type="text" value="<?=$lastname?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                                        <input class="form-control" value="<?=$phone?>" type="text" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" style="resize:none;" readonly aria-label="With textarea"><?=$street?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?=$email?>" type="email" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>UserID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icon-globe"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?=$user_id?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>                        
                            </div>
                            <div class="tab-pane" id="Update">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Account Informations</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa-solid fa-bars"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa-solid fa-list"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="row">

                                            <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" style="resize:none;" name="address" aria-label="With textarea"><?=$address?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select name="country" class="form-control">
                                                            <option value="USA" selected="selected">USA</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="India">India</option>
                                                            <option value="French">French</option>
                                                            <option value="China">China</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label>State</label>
                                                        <input class="form-control" name="state"  type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="gender" class="form-control">
                                                            <option value="1" selected="selected">Male</option>
                                                            <option value="0">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input class="form-control" name="dob" value="" type="date">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-12 text-right m-t-20">
                                                    <button type="submit" name="UpdateInfo" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>                    
                            </div>
                            <?php

                                        if (isset($_POST['UpdateInfo']))
                                        {
                                            $address = trim(stripslashes(htmlspecialchars($_POST['address'])));
                                            $country = trim(stripslashes(htmlspecialchars($_POST['country'])));
                                            $state = trim(stripslashes(htmlspecialchars($_POST['state'])));
                                            $gender = trim(stripslashes(htmlspecialchars($_POST['gender'])));
                                            $dob = trim(stripslashes(htmlspecialchars($_POST['dob'])));
                                            

                                            
                                                $sql = "update user set address='$address', country='$country', state='$state', gender='$gender', dob='$dob'  where userid='$user_id'"; 
                                                $result = $conn->query($sql); 
                                                if ($result) {
                                                    echo "
                                                    <script>
                                                        alert('Success! Account Informations updated');
                                                        window.location.href = 'account';
                                                    </script>
                                                    ";
                                                }
                                            
                                        }

                                    ?>
                            <div class="tab-pane" id="Roles_Permissions">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Roles & Permissions</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa-solid fa-bars"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa-solid fa-list"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group mb-3 tp-setting">
                                            <li class="list-group-item">
                                                Anyone seeing my profile page
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone send me a message
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone posts a comment on my post
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone invite me to group
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked='' />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>                    
                            </div>
                            <div class="tab-pane" id="Email_Settings">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">SMTP Email Settings</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="fancy-radio custom-color-green"><input name="gender3" value="PHP Mail" type="radio" checked><span><i></i>PHP Mail</span></label>
                                                <label class="fancy-radio custom-color-green"><input name="gender3" value="SMTP" type="radio"><span><i></i>SMTP</span></label>
                                            </div>							
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email From Address</label>
                                                        <input class="form-control" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Emails From Name</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP HOST</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP USER</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP PASSWORD</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP PORT</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP Security</label>
                                                        <select class="form-control">
                                                            <option>None</option>
                                                            <option>SSL</option>
                                                            <option>TLS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>SMTP Authentication Domain</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 m-t-20 text-right">
                                                    <button type="button" class="btn btn-primary">SAVE</button>
                                                </div>
                                            </div>                            
                                        </form>
                                    </div>
                                </div>                    
                            </div>
                            <div class="tab-pane" id="Invoice_Settings">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Invoice Settings</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Invoice prefix</label>
                                                        <input class="form-control" type="email">
                                                    </div>                           
                                                    <input type="file" class="dropify">
                                                    <small class="text-danger">Recommended image size is 200px x 40px</small>
                                                </div>
                                                <div class="col-sm-12 m-t-20 text-right">
                                                    <button type="button" class="btn btn-primary">SAVE</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>                                       
                            </div>
                            <div class="tab-pane" id="Notifications">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Notifications Settings</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Anyone send me a message
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone seeing my profile page
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked="" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone posts a comment on my post
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked=""/>
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone send me a message
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Anyone seeing my profile page
                                                <div class="float-right">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active show" id="Change_Password">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Change Password</h3>
                                        <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa-solid fa-compress"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa-regular fa-window-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa-solid fa-xmark"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row clearfix">
                                                                          
                                            <div class="col-lg-12 col-md-12">
                                                <form method="post">
                                                <h6>Current Password</h6>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="<?=$passcode?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="cnewpassword" placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 m-t-20 text-right">
                                                <button type="submit" name="editPassword" class="btn btn-danger">Edit Password</button> &nbsp;
                                            </div>
                                        </form>

                                        <?php

                                        if (isset($_POST['editPassword']))
                                        {
                                            $newpassword = trim(stripslashes(htmlspecialchars(md5($_POST['newpassword']))));
                                            $cnewpassword = trim(stripslashes(htmlspecialchars(md5($_POST['cnewpassword']))));
                                            $passcode = $_POST['newpassword'];

                                            if ($newpassword == $cnewpassword) {
                                                $sql = "update user set password='$newpassword', passcode='$passcode' where userid='$user_id' and type='admin'"; 
                                                $result = $conn->query($sql); 
                                                if ($result) {
                                                    echo "
                                                    <script>
                                                        alert('Success! Password updated');
                                                        window.location.href = 'account';
                                                    </script>
                                                    ";
                                                }
                                            }else{
                                                echo "
                                                <script>
                                                    alert('Passwords do not match!');
                                                    window.location.href = 'account';
                                                </script>
                                                ";
                                                die();
                                            }
                                        }
                        
                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="templateshub.net">Templates Hub</a>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div> -->
    </div>    
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>
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

<!-- soccer/project/app-setting.html  07 Jan 2020 03:41:29 GMT -->
</html>
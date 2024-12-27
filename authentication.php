
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Create Account</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/icons/logo.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
<style>
  @media (min-width: 320px) and (max-width: 1024px) {
  .img-fluid{display: none; }
}
</style>
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include ("database.php");

if (isset($_POST['authUser']))
{
   
    $firstname = trim(stripslashes(htmlspecialchars($_POST['firstname'])));
    $lastname = trim(stripslashes(htmlspecialchars($_POST['lastname'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $password = trim(stripslashes(htmlspecialchars(md5($_POST['password']))));
    $passcode = trim(stripslashes(htmlspecialchars($_POST['password'])));
    $confirmpassword = trim(stripslashes(htmlspecialchars(md5($_POST['confirmpassword']))));
    $date = date("Y-m-d");

    $user_ip = getenv('REMOTE_ADDR');
    // $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=31.12.127.255"));

    $country = $geo["geoplugin_countryName"];
    $state = $geo["geoplugin_region"];
    $currency = $geo["geoplugin_countryCode"];
    $timezone = $geo["geoplugin_timezone"];
    $exchange = $geo["geoplugin_currencyConverter"];
    $symbol = $geo["geoplugin_currencySymbol"];

    // gender
    // password
    // passcode
    // address
    // date
    // contact
    // country
    // state

    if ($password == $confirmpassword){

    }else{
      echo "
            <script>
                alert('passwords do not match!');
                window.location.href = 'authentication';
            </script>
            ";

            die();
    }

    $nameexists = $conn->query("select * from user where email='$email'");

    if ($nameexists->num_rows > 0) {

      echo "
            <script>
                alert('Sorry! user already exists');
                window.location.href = 'login';
            </script>
            ";

            die();
    }else{  

      $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'flyehizz@gmail.com';
        $mail->Password = 'oypv hdbi avha dheq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('flyehizz@gmail.com');

        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = 'Hurray! Your registration was successful';

        // $mail->Body = 'Your Registration to Hues and Tartans was successful, kindly ensure you fill out the survey form: ' . $firstname; 
        $mail->Body = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Hues and Tartans</title>
  </head>
  
  <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
  style="margin: 0pt auto; padding: 0px; background:#F4F7FA;">
    <table id="main" width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"
    bgcolor="#F4F7FA">
      <tbody>
        <tr>
          <td valign="top">
            <table class="innermain" cellpadding="0" width="580" cellspacing="0" border="0"
            bgcolor="#F4F7FA" align="center" style="margin:0 auto; table-layout: fixed;">
              <tbody>
                <!-- START of MAIL Content -->
                <tr>
                  <td colspan="4">
                    <!-- Logo start here -->
                    <table class="logo" width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                        <tr>
                          
                        </tr>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Logo end here -->
                    <!-- Main CONTENT -->
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
                    style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                      <tbody>
                        <tr>
                          <td height="40"></td>
                        </tr>
                        <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
                          <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                              <tbody>
                                <tr>
                                  <td align="center" valign="bottom" colspan="2" cellpadding="3">
                                    <img alt="Coinbase" width="80" src="https://huesandtartans.com/images/icons/logo.png"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td height="30" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:22px;line-height: 24px;">
          Successful Registration
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td height="1" bgcolor="#DAE1E9"></td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
          Hello '.$firstname.' Your Registration to Hues and Tartans was successful, kindly ensure you fill out the survey form
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td valign="top" width="48%" align="center"> <span>
          <a href="https://huesandtartans.com/login" style="display:block; padding:15px 25px; background-color:#0087D1; color:#ffffff; border-radius:3px; text-decoration:none;">Sign in</a>
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center">
                                    <img src="https://s3.amazonaws.com/app-public/Coinbase-notification/hr.png" width="54"
                                    height="2" border="0">
                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center">
                                    <p style="color:#a2a2a2; font-size:12px; line-height:17px; font-style:italic;">Welcome to Hues and Tartants, we are glad to have you onboard.</p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td height="60"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Main CONTENT end here -->
                    <!-- PROMO column start here -->
                    
                    <!-- PROMO column end here -->
                    <!-- FOOTER start here -->
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <tr>
                          <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                          <td valign="top" align="center"> <span style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#9EB0C9; font-size:10px;">&copy;
                            <a href="https://huesandtartans.com/" target="_blank" style="color:#9EB0C9 !important; text-decoration:none;">Hues and Tartans</a> 2025
                          </span>

                          </td>
                        </tr>
                        <tr>
                          <td height="50">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- FOOTER end here -->
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>

</html>'; 

        $mail->send();

      $seedd = str_split('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
    
     ); // and any other characters
    shuffle($seedd); // probably optional since array_is randomized; this may be redundant
    $userid = '';
    foreach (array_rand($seedd, 20) as $kk) $userid .= $seedd[$kk]; 

     
        $bv = $conn->query("insert into user (userid,firstname,lastname,email,password,passcode,date,country,state,timezone,ip,type,count) values ('$userid','$firstname','$lastname','$email','$password','$passcode','$date','$country','$state','$timezone','$user_ip','user','1')"); 

          if($bv){
            echo "
            <script>
                alert('Hurray! Account registration was successful');
                window.location.href = 'login';
            </script>
            ";
          }
      }
      
  }

 ?>

<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="images/power.png"
							alt="desk-image"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="home"><img style="width: 50px;" src="images/icons/logo.png" alt=""></a>
						</div>
						<!-- <div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div> -->
						<form method="post">
							<!-- Username -->
							<input class="form-control main" type="text" name="firstname" placeholder="First Name" required>
							<input class="form-control main" type="text" name="lastname" placeholder="Last Name" required>
							<!-- Email -->
							<input class="form-control main" type="email" name="email" placeholder="Email Address" required>
							<!-- Password -->
							<input class="form-control main" type="password" name="password" placeholder="Password" required>
							<input class="form-control main" type="password" name="confirmpassword" placeholder="Confirm Password" required>
							<!-- Submit Button -->
							<button type="submit" name="authUser" class="btn btn-success">sign up</button>
						</form>
						<div class="new-acount">
							<p>By clicking “Sign Up” I agree to <a href="">Terms of Conditions.</a></p>
							<p>Anready have an account? <a href="login">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sign Up  ====-->


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>
  
  <script src="js/script.js"></script>
</body>

</html>

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
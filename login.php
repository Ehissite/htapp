<?php
     session_start();
     include ("database.php");

  if (isset($_POST['authLogin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $query = "SELECT * from user WHERE email = '$email' AND password = '$password' AND type = 'user' ";
    $user = mysqli_query($conn, $query);

    if (!$user) {
      die('query Failed' . mysqli_error($conn));
    }

    while ($userData = mysqli_fetch_array($user)) {

      $user_id = $userData['id'];
      $userid = $userData['userid'];
      $user_email = $userData['email'];
      $user_password = $userData['password'];
      $user_balance = $userData['balance'];
      $country = $userData['country'];
      $address = $userData['address'];
      $state = $userData['state'];
      
    }
    if ($user_email == $email  &&  $user_password == $password) {

      $_SESSION['id'] = $user_id;       // Storing the value in session
      $_SESSION['userid'] = $userid;       // Storing the value in session
      $_SESSION['email'] = $user_email; // Storing the value in session
      $_SESSION['balance'] = $user_balance; // Storing the value in session
      $_SESSION['country'] = $country; // Storing the value in session
      $_SESSION['address'] = $address; // Storing the value in session
      $_SESSION['state'] = $state; // Storing the value in session

      
      
      //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION

      $url = htmlspecialchars($_GET['2jhYuhiudvdvsjskGHKnhgKHSGFSFHOpkjgFSRSYBSFVSFhjdkdosgsgvsvcagagGGFSGFSFSHSJ']);
      if (isset($_GET['2jhYuhiudvdvsjskGHKnhgKHSGFSFHOpkjgFSRSYBSFVSFhjdkdosgsgvsvcagagGGFSGFSFSHSJ'])) {
        header('location:' .$url);
      }else{
            // $sql = "update user set online=1 where token ='{$_SESSION[user_token]}'"; 
            // $result = $conn->query($sql); 
        header('location: dashboard');
      }
      
    } else {
      header('location: login');
    }
  }

      ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Hue and Tartan - Login</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Hue and Tartan">
  <meta name="generator" content="Hue and Tartan - Login">

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


<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="images/invest.png"
							alt="desk-image"></div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="home"><img style="width: 100px;" src="images/icons/logo.png" alt=""></a>
						</div>
						<div class="title-text">
							<h3>Sign in to To Your Account</h3>
						</div>
						<form method="post">
							<!-- Username -->
							<input class="form-control main" type="text" name="email" placeholder="Email" required>
							<!-- Password -->
							<input class="form-control main" type="password" name="password" placeholder="Password" required>
							<!-- Submit Button -->
              <button type="submit" name="authLogin" class="btn btn-success">Login</button>
						</form>
						<div class="new-acount">
							<!-- <a href="contact.html">Forget your password?</a> -->
							<p>Don't Have an account? <a href="authentication"> SIGN UP</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


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
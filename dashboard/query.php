<?php 
            
    if (isset($_SESSION['id']))
  {
    $get_rate = "select * from user where id='$_SESSION[id]'";

    $run_rate = mysqli_query($conn,$get_rate);

    $row_rate = mysqli_fetch_array($run_rate);

    $user_id = $row_rate['userid'];
    $firstname = $row_rate['firstname'];
    $lastname = $row_rate['lastname'];
    $balance = $row_rate['balance'];
    $email = $row_rate['email'];
    $image = $row_rate['profile_pic'];
    $contact = $row_rate['contact'];
    $address = $row_rate['address'];
    $state = $row_rate['state'];
    $country = $row_rate['country'];
    $gender = $row_rate['gender'];
    $passcode = $row_rate['passcode'];
    $dob = $row_rate['dob'];
    $online = $row_rate['online'];
    $data = $row_rate['data'];
    
    $get_app = "select * from app";

    $run_app = mysqli_query($conn,$get_app);

    $row_app = mysqli_fetch_array($run_app);

    $appname = $row_app['appname'];

    if ($data == 0) {
      
    }else{
      $get_data = "select * from userdata where userid='$user_id'";

      $run_data = mysqli_query($conn,$get_data);
  
      $row_data = mysqli_fetch_array($run_data);
  
      $fullname = $row_data['fullname'];
      $phone = $row_data['contact'];
      $uemail = $row_data['email'];
      $street = $row_data['street'];
      $ustate = $row_data['state'];
      $subscriber = $row_data['subscriber'];
      $cartype = $row_data['cartype'];
    }

  
     if ($gender == 1) {
       $gender = "Male";
     }else{
      $gender = "Female";
     }
   }

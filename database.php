<?php 
    $host= 'localhost';
    $user= 'root';
    $password = "";
    $database = 'htdb';

    $conn = mysqli_connect($host,$user,$password,$database);

    if (!$conn) {                                             
        die("Connection failed: " . mysqli_connect_error());     
      }

      // $uid = '';
    // if(isset($_SESSION['id']))
    // $uid = $_SESSION['id'];
    // if(isset($_SESSION['cashId']))
    // $uid = $_SESSION['cashId'];
    // if(isset($_SESSION['managerId']))
    // $uid = $_SESSION['managerId'];
    // $userData = [];
    // if(!empty($uid)){
    //   $ar = $conn->query("select * from userAccounts,branch where id = '{$uid}' AND userAccounts.branch = branch.branchId");
    //   $userData = $ar->fetch_assoc();
    // }


?>
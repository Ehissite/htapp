
<?php 

session_start(); 
include "database.php";
include "query.php";

if($data == 1) 
{
     header("Location: ./"); //Do not allow him to access.
     exit;
}

$userid = $_SESSION['id'];
?>


<?php
if (!isset($_SESSION['id'])) {         // condition Check: if session is not set. 
  $http = $_SERVER['REQUEST_URI'];
  header("location: ../login?2jhYuhiudvdvsjskGHKnhgKHSGFSFHOpkjgFSRSYBSFVSFhjdkdosgsgvsvcagagGGFSGFSFSHSJ=$http");   // if not set the user is sendback to login page.
}
?>


<?php
if (isset($_POST['signout'])) {
  session_destroy();            //  destroys session 
  header('location: home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Onboarding</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }

  .formbold-steps {
    padding-bottom: 18px;
    margin-bottom: 35px;
    border-bottom: 1px solid #DDE3EC;
  }
  .formbold-steps ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    gap: 40px;
  }
  .formbold-steps li {
    display: flex;
    align-items: center;
    gap: 14px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-steps li span {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #DDE3EC;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-steps li.active {
    color: #07074D;;
  }
  .formbold-steps li.active span {
    background: #6A64F1;
    color: #FFFFFF;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 22px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #DDE3EC;
    background: #FFFFFF;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-confirm {
    border-bottom: 1px solid #DDE3EC;
    padding-bottom: 35px;
  }
  .formbold-form-confirm p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-bottom: 22px;
    width: 75%;
  }
  .formbold-form-confirm > div {
    display: flex;
    gap: 15px;
  }

  .formbold-confirm-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #FFFFFF;
    border: 0.5px solid #DDE3EC;
    border-radius: 5px;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    cursor: pointer;
    padding: 10px 20px;
    transition: all .3s ease-in-out;
  }
  .formbold-confirm-btn {
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
  }
  .formbold-confirm-btn.active {
    background: #6A64F1;
    color: #FFFFFF;
  }

  .formbold-form-step-1,
  .formbold-form-step-2,
  .formbold-form-step-3 {
    display: none;
  }
  .formbold-form-step-1.active,
  .formbold-form-step-2.active,
  .formbold-form-step-3.active {
    display: block;
  }

  .formbold-form-btn-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 25px;
    margin-top: 25px;
  }
  .formbold-back-btn {
    cursor: pointer;
    background: #FFFFFF;
    border: none;
    color: #07074D;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    display: none;
  }
  .formbold-back-btn.active {
    display: block;
  }
  .formbold-btn {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 16px;
    border-radius: 5px;
    padding: 10px 25px;
    border: none;
    font-weight: 500;
    background-color: #6A64F1;
    color: white;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

</style>
</head>
<body>
<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form method="POST">
        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu1 active">
                    <span>1</span>
                    Personal Information
                </li>
                <li class="formbold-step-menu2">
                    <span>2</span>
                    Vehicle Information
                </li>
                <li class="formbold-step-menu3">
                    <span>3</span>
                    Charging Setup
                </li>
            </ul>
        </div>

        <div class="formbold-form-step-1 active">
          <h4>PERSONAL INFORMATION</h4><br>
          <div class="formbold-input">
            <div>
                <label for="firstname" class="formbold-form-label"> Full Name</label>
                <input
                type="text"
                name="fullname"
                placeholder="Enter Full Name"
                id="firstname"
                class="formbold-form-input"
                />
            </div>
          </div><br>
  
          <div class="formbold-input">
              <div>
                  <label for="dob" class="formbold-form-label"> Date of Birth </label>
                  <input 
                  type="date" 
                  name="dob" 
                  id="dob" 
                  class="formbold-form-input"
                  />
              </div><br>
              <div>
                  <label for="email" class="formbold-form-label"> Phone Number (+44)</label>
                  <input
                  type="text"
                  name="contact"
                  placeholder="+44"
                  value="+44"
                  id="email"
                  class="formbold-form-input"
                  />
              </div><br>
              <div>
                  <label for="email" class="formbold-form-label"> Email</label>
                  <input
                  type="email"
                  name="email"
                  placeholder="Enter Email Address"
                  id="email"
                  class="formbold-form-input"
                  />
              </div>
          </div>
  
          <br><br>
          <h5>Residential Address</h5><br>
      
          <div>
              <label for="address" class="formbold-form-label"> Street </label>
              <textarea
              type="text"
              name="street"
              id="address"
              placeholder="Enter Street Address"
              class="formbold-form-input"
              /></textarea>
          </div><br>

          <div>
              <label for="address" class="formbold-form-label"> City/State </label>
              <input
              type="text"
              name="state"
              id="address"
              placeholder="Enter State"
              class="formbold-form-input"
              />
          </div><br>

          <div>
              <label for="address" class="formbold-form-label"> Post Code </label>
              <input
              type="text"
              name="postcode"
              id="address"
              placeholder="Enter Post Code"
              class="formbold-form-input"
              />
          </div><br>

          <br><br>
          <h5>VEHICLE INFORMATION</h5><br>

          <div>
              <label for="address" class="formbold-form-label"> Car Type/Model </label>
              <input
              type="text"
              name="cartype"
              id="address"
              placeholder="Enter Car Model"
              class="formbold-form-input"
              />
          </div><br>
          
          <div>
              <label for="address" class="formbold-form-label"> Vehicle Make/Year </label>
              <input
              type="text"
              name="makeyear"
              placeholder="e.g 2024"
              id="address"
              class="formbold-form-input"
              required />
          </div><br>

          <div>
              <label for="address" class="formbold-form-label"> Car Ownership Status </label>
              <select class="formbold-form-input" name="ownershipstatus">
                <option value="Owned">Owned</option>
                <option value="Leased">Leased</option>
              </select>
          </div><br>

          <div>
              <label for="address" class="formbold-form-label"> Battery Range (if EV) </label>
              <input
              type="number"
              name="batteryrange"
              placeholder="Miles/Km"
              id="address"
              class="formbold-form-input"
               required />
          </div><br>

          <div>
                <label for="address" class="formbold-form-label"> Charging Station Type Used Most</label>
                <input type="radio" value="Home Charging" name="chargingstationtype">&nbsp;&nbsp; Home Charging <br><br>
                <input type="radio" value="Office Charging" name="chargingstationtype">&nbsp;&nbsp; Office Charging <br><br>
                <input type="radio" value="Public Stations" name="chargingstationtype">&nbsp;&nbsp; Public Stations <br>
            </div>

        </div>

        <div class="formbold-form-step-2">
          <h5>CHARGING SETUP</h5><br>

            <div>
                <label for="address" class="formbold-form-label"> Do you have Home Charging Access?</label>
                <input type="radio" value="Yes" name="homechargingaccess">&nbsp;&nbsp; Yes <br><br>
                <input type="radio" value="No" name="homechargingaccess">&nbsp;&nbsp; No <br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> If Yes, Specify</label>
                <input type="radio" value="Wallbox" name="specify">&nbsp;&nbsp; Wallbox <br><br>
                <input type="radio" value="Standard Outlet" name="specify">&nbsp;&nbsp; Standard Outlet <br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> Do you have Office Charging Access?</label>
                <input type="radio" value="Yes" name="officechargingaccess">&nbsp;&nbsp; Yes <br><br>
                <input type="radio" value="No" name="officechargingaccess">&nbsp;&nbsp; No <br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> How often do you charge externally (public/fast charge)?</label>
                <input type="radio" value="Daily" name="oftencharge">&nbsp;&nbsp; Daily <br><br>
                <input type="radio" value="Weekly" name="oftencharge">&nbsp;&nbsp; Weekly<br><br>
                <input type="radio" value="Monthly" name="oftencharge">&nbsp;&nbsp; Monthly<br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> Usual Charging Location</label>
                <input type="radio" value="Home" name="charginglocation">&nbsp;&nbsp; Home <br><br>
                <input type="radio" value="Work" name="charginglocation">&nbsp;&nbsp; Work<br><br>
                <input type="radio" value="Fastcharginghubs" name="charginglocation">&nbsp;&nbsp; Fast-Charging Hubs<br>
            </div>

            <br><br>
            <h5>HOME & ENERGY DETAILS</h5>

            <br>
            <div>
                <label for="address" class="formbold-form-label"> Home Type</label>
                <input type="radio" value="Detached House" name="hometype">&nbsp;&nbsp; Detached House <br><br>
                <input type="radio" value="Semi Detached" name="hometype">&nbsp;&nbsp; Semi-Detached<br><br>
                <input type="radio" value="Apartment" name="hometype">&nbsp;&nbsp; Apartment<br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> Home Ownership Status</label>
                <input type="radio" value="Owned" name="homeownership">&nbsp;&nbsp; Owned <br><br>
                <input type="radio" value="Rented" name="homeownership">&nbsp;&nbsp; Rented<br><br>
            </div>
            <br>
            <div>
              <label for="address" class="formbold-form-label"> Current Electricity Provider </label>
              <input
              type="text"
              name="electricityprovider"
              placeholder="Enter Electricity Provider"
              id="address"
              class="formbold-form-input"
              />
          </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> Are you a Green Energy Subscriber?</label>
                <input type="radio" value="Yes" name="subscriber">&nbsp;&nbsp; Yes <br><br>
                <input type="radio" value="No" name="subscriber">&nbsp;&nbsp; No<br><br>
            </div>


        </div>

        <div class="formbold-form-step-3">
            <h5>VEHICLE USAGE INSIGHTS</h5><br>

            <div>
              <label for="address" class="formbold-form-label"> Average Weekly Distance Driven </label>
              <input
              type="number"
              name="avgdistance"
              placeholder="Km/Miles"
              id="address"
              class="formbold-form-input"
              />
          </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> Primary Vehicle Use</label>
                <input type="radio" value="Personal" name="vehicleuse">&nbsp;&nbsp; Personal <br><br>
                <input type="radio" value="Commercial" name="vehicleuse">&nbsp;&nbsp; Commercial<br><br>
            </div>
            <br>
            <div>
                <label for="address" class="formbold-form-label"> What are your current EV charging challenges?</label>
                <textarea class="formbold-form-input" type="text"  name="challenges"></textarea><br><br>
            </div>

            <h5>Subscriptions and Preferences</h5><br><br>

            <div>
                <label for="address" class="formbold-form-label"> Are you interested in Green Tech Solutions (e.g Solar Charging)?.</label>
                <input type="radio" value="Yes" name="greentech">&nbsp;&nbsp; Yes <br><br>
                <input type="radio" value="No" name="greentech">&nbsp;&nbsp; No<br><br>
            </div><br>

            <div>
                <label for="address" class="formbold-form-label"> Subscription Preference</label>
                <input type="radio" value="Free Trial" name="subscription">&nbsp;&nbsp; Free Trial <br><br>
                <input type="radio" value="monthly Plan" name="subscription">&nbsp;&nbsp; monthly Plan<br><br>
                <input type="radio" value="Annual Plan" name="subscription">&nbsp;&nbsp; Annual Plan<br><br>
            </div><br>

            <div>
                <label for="address" class="formbold-form-label">Preferred Communication Method</label>
                <input type="radio" value="Email" name="communicationmethod">&nbsp;&nbsp; Email <br><br>
                <input type="radio" value="SMS" name="communicationmethod">&nbsp;&nbsp; SMS<br><br>
                <input type="radio" value="Phone Call" name="communicationmethod">&nbsp;&nbsp; Phone Call<br><br>
            </div><br>

            <h5>CONSENT AND AGREEMENTS</h5><br>

            <div>
                <label for="address" class="formbold-form-label">Data Consent Agreement</label>
                <input type="radio" value="i agree" name="consent">&nbsp;&nbsp; I consent to the collection and processing of my personal data for service and analytics purposes, in accordance
                with applicable privacy laws. <br><br>
            </div><br>

            <div>
                <label for="address" class="formbold-form-label">Would you like to subscribe to our newsletter for updates and offers?</label>
                <input type="radio" value="Yes" name="newsletter">&nbsp;&nbsp; Yes <br><br>
                <input type="radio" value="No" name="newsletter">&nbsp;&nbsp; No<br><br>
            </div><br>

            <div>
              <button name="SurveyMonk" class="formbold-confirm-btn active">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC"/>
                <g clip-path="url(#clip0_1667_1314)">
                <path d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z" fill="#536387"/>
                </g>
                <defs>
                <clipPath id="clip0_1667_1314">
                <rect width="14" height="14" fill="white" transform="translate(4 4)"/>
                </clipPath>
                </defs>
                </svg>
                Submit form
              </button>
            </div>
          </div>


          <?php 

            if (isset($_POST['SurveyMonk'])) {
          
            $fullname = trim(stripslashes(htmlspecialchars($_POST['fullname'])));
            $dob = trim(stripslashes(htmlspecialchars($_POST['dob'])));
            $ucontact = trim(stripslashes(htmlspecialchars($_POST['contact'])));
            $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
            $street = trim(stripslashes(htmlspecialchars($_POST['street'])));
            $state = trim(stripslashes(htmlspecialchars($_POST['state'])));
            $postcode = trim(stripslashes(htmlspecialchars($_POST['postcode'])));
            $cartype = trim(stripslashes(htmlspecialchars($_POST['cartype'])));
            $makeyear = trim(stripslashes(htmlspecialchars($_POST['makeyear'])));
            $ownershipstatus = trim(stripslashes(htmlspecialchars($_POST['ownershipstatus'])));
            $batteryrange = trim(stripslashes(htmlspecialchars($_POST['batteryrange'])));
            $chargingstationtype = trim(stripslashes(htmlspecialchars($_POST['chargingstationtype'])));
            $homechargingaccess = trim(stripslashes(htmlspecialchars($_POST['homechargingaccess'])));
            $specify = trim(stripslashes(htmlspecialchars($_POST['specify'])));
            $officechargingaccess = trim(stripslashes(htmlspecialchars($_POST['officechargingaccess'])));
            $oftencharge = trim(stripslashes(htmlspecialchars($_POST['oftencharge'])));
            $charginglocation = trim(stripslashes(htmlspecialchars($_POST['charginglocation'])));
            $hometype = trim(stripslashes(htmlspecialchars($_POST['hometype'])));
            $homeownership = trim(stripslashes(htmlspecialchars($_POST['homeownership'])));
            $electricityprovider = trim(stripslashes(htmlspecialchars($_POST['electricityprovider'])));
            $subscriber = trim(stripslashes(htmlspecialchars($_POST['subscriber'])));
            $avgdistance = trim(stripslashes(htmlspecialchars($_POST['avgdistance'])));
            $vehicleuse = trim(stripslashes(htmlspecialchars($_POST['vehicleuse'])));
            $challenges = trim(stripslashes(htmlspecialchars($_POST['challenges'])));
            $greentech = trim(stripslashes(htmlspecialchars($_POST['greentech'])));
            $subscription = trim(stripslashes(htmlspecialchars($_POST['subscription'])));
            $communicationmethod = trim(stripslashes(htmlspecialchars($_POST['communicationmethod'])));
            $consent = trim(stripslashes(htmlspecialchars($_POST['consent'])));
            $newsletter = trim(stripslashes(htmlspecialchars($_POST['newsletter'])));

            if (!preg_match('/^[A-Za-z0-9 ]+$/', $fullname))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $street))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $state))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $postcode))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $cartype))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $makeyear))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $electricityprovider))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }
            if (!preg_match('/^[A-Za-z0-9 ]+$/', $challenges))
            {
              echo "
              <script>
                  alert('Only Alphanumeric Characters is allowed');
                  window.location.href = 'onboarding';
              </script>
              ";
              die();
            }

            if (is_numeric($makeyear)) {
              
            }else{
              echo "
                  <script>
                      alert('Vehicle Make Year must be Numeric');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($ucontact)) {
              echo "
                  <script>
                      alert('Empty Phone Number');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($makeyear)) {
              echo "
                  <script>
                      alert('Empty Vehicle Make Year');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (filter_var($fullname, FILTER_VALIDATE_EMAIL)) {
              echo "
                  <script>
                      alert('Sorry input a valid Name');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
          } 
            if (empty($fullname)) {
              echo "
                  <script>
                      alert('Empty full name');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($email)) {
              echo "
                  <script>
                      alert('Empty Email');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($street)) {
              echo "
                  <script>
                      alert('Empty Street');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($state)) {
              echo "
                  <script>
                      alert('Empty State');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($postcode)) {
              echo "
                  <script>
                      alert('Empty Postcode');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($cartype)) {
              echo "
                  <script>
                      alert('Empty Car Model');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($batteryrange)) {
              echo "
                  <script>
                      alert('Empty Battery Range');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($chargingstationtype)) {
              echo "
                  <script>
                      alert('Empty Charging Station Type');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($homechargingaccess)) {
              echo "
                  <script>
                      alert('Empty Home Charging Access');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($specify)) {
              echo "
                  <script>
                      alert('Specify  Home Charging Access');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($officechargingaccess)) {
              echo "
                  <script>
                      alert('Empty Office Charging Access');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($oftencharge)) {
              echo "
                  <script>
                      alert('Empty How often do you charge externally');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($charginglocation)) {
              echo "
                  <script>
                      alert('Empty Charging Location');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($hometype)) {
              echo "
                  <script>
                      alert('Empty Home Type');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($homeownership)) {
              echo "
                  <script>
                      alert('Empty Home Ownership Status');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($electricityprovider)) {
              echo "
                  <script>
                      alert('Empty Electricity Provider');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($subscriber)) {
              echo "
                  <script>
                      alert('Empty Subscriber');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($avgdistance)) {
              echo "
                  <script>
                      alert('Empty Average Weekly Distance Driven');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($vehicleuse)) {
              echo "
                  <script>
                      alert('Empty Primary Vehicle Use');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($challenges)) {
              echo "
                  <script>
                      alert('Empty current EV charging challenges');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($greentech)) {
              echo "
                  <script>
                      alert('Empty Green Tech');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($subscription)) {
              echo "
                  <script>
                      alert('Empty Subscription');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($communicationmethod)) {
              echo "
                  <script>
                      alert('Empty Communication Method');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($consent)) {
              echo "
                  <script>
                      alert('Empty Consent');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
            if (empty($newsletter)) {
              echo "
                  <script>
                      alert('Empty Newsletter');
                      window.location.href = 'onboarding';
                  </script>
                  ";
                  die();
            }
          

                $bv = $conn->query("insert into userdata (userid,fullname,dob,contact,email,street,state,postcode,cartype,makeyear,ownershipstatus,batteryrange,chargingstationtype,homechargingaccess,specify,officechargingaccess,oftencharge,charginglocation,hometype,homeownership,electricityprovider,subscriber,avgdistance,vehicleuse,challenges,greentech,subscription,communicationmethod,consent,newsletter,count) values ('$user_id','$fullname','$dob','$ucontact','$email','$street','$state','$postcode','$cartype','$makeyear','$ownershipstatus','$batteryrange','$chargingstationtype','$homechargingaccess','$specify','$officechargingaccess','$oftencharge','$charginglocation','$hometype','$homeownership','$electricityprovider','$subscriber','$avgdistance','$vehicleuse','$challenges','$greentech','$subscription','$communicationmethod','$consent','$newsletter','1')"); 

                if($bv){

                  $sql = "update user set data='1' where userid='$user_id'"; 
                  $result = $conn->query($sql); 
                  echo "
                  <script>
                      alert('Successful');
                      window.location.href = './';
                  </script>
                  ";
                }

            }

          ?>


        <div class="formbold-form-btn-wrapper">
          <button class="formbold-back-btn">
            Back
          </button>

          <button class="formbold-btn">
              Next Step
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1675_1807)">
              <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_1675_1807">
              <rect width="16" height="16" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </button>
        </div>
    </form>
  </div>
</div>

<script>
  const stepMenuOne = document.querySelector('.formbold-step-menu1')
  const stepMenuTwo = document.querySelector('.formbold-step-menu2')
  const stepMenuThree = document.querySelector('.formbold-step-menu3')

  const stepOne = document.querySelector('.formbold-form-step-1')
  const stepTwo = document.querySelector('.formbold-form-step-2')
  const stepThree = document.querySelector('.formbold-form-step-3')

  const formSubmitBtn = document.querySelector('.formbold-btn')
  const formBackBtn = document.querySelector('.formbold-back-btn')

  formSubmitBtn.addEventListener("click", function(event){
    event.preventDefault()
    if(stepMenuOne.className == 'formbold-step-menu1 active') {
        event.preventDefault()

        stepMenuOne.classList.remove('active')
        stepMenuTwo.classList.add('active')

        stepOne.classList.remove('active')
        stepTwo.classList.add('active')

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')

          formBackBtn.classList.remove('active')

        })

      } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
        event.preventDefault()

        stepMenuTwo.classList.remove('active')
        stepMenuThree.classList.add('active')

        stepTwo.classList.remove('active')
        stepThree.classList.add('active')

        formBackBtn.classList.remove('active')
        // formSubmitBtn.textContent = 'Submit'
      } else if(stepMenuThree.className == 'formbold-step-menu3 active') {
        document.querySelector('form').submit()
      }
  })  
</script>
</body>
</html>



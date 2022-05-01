<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Canteen Management System - Home</title>
<link rel="icon" href="assets/img/Fevicon.png" type="image/png">
<link rel="stylesheet" href="assets/css/popup.css" />
<link rel="stylesheet" href="assets/css/pagespeed.css">
   
</head>
<body>
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
			$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
            $user_name=$_POST['YourName'];
            $email_id=$_POST['EmailID'];
            $phone_number=$_POST['PhoneNumber'];
            $login_id=$_POST['RegUsername'];
            $login_pwd=$_POST['RegPassword'];
      
			if (empty($_POST["YourName"])) {
				echo '<script>alert("Name is required")</script>';
			}   
			else if (!preg_match ("/^[a-zA-z]*$/", $_POST["YourName"]) ) {  
				echo '<script>alert("Only alphabets and whitespace are allowed.")</script>';
			}
			else if (empty($_POST["EmailID"])) {
				echo '<script>alert("EmailID is required")</script>';
			}   
			else if (!preg_match ($pattern, $_POST["EmailID"]) ){  
				echo '<script>alert("Email is not valid.")</script>';
			}
			else if (empty($_POST["PhoneNumber"])) {
				echo '<script>alert("Mobile number is required")</script>';
			}  
			else if ( strlen ($_POST["PhoneNumber"]) < 10 && strlen ($_POST["PhoneNumber"]) > 10) {  
				echo '<script>alert("Mobile number must have 10 digits.")</script>';
			}  
			else if (empty($_POST["RegUsername"])) {
				echo '<script>alert("Register number is required")</script>';
			}   
			else if ( substr ($_POST["RegUsername"],0,2) != "RA") {  
				echo '<script>alert("Register number must have start with RA.")</script>';
			}  
			else if (empty($_POST["RegPassword"])) {
				echo '<script>alert("Password is required")</script>';
			}  
			else if ( strlen ($_POST["RegPassword"]) < 8) {  
				echo '<script>alert("Password must have minimum 8 digits.")</script>';
			}  
			else{
					$q="insert into usermaster(UserName, EmailID,MobileNumber,LoginID,LoginPwd) values('$user_name','$email_id','$phone_number','$login_id','$login_pwd')";
					mysqli_query($con1,$q);
					header("Location: login.php");	
			}
        }
    ?>

<section class="bg-lightGray section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 col-xl-2"> </div>
      <div class="col-md-6 offset-xl-2 col-xl-5">
        <div class="search-wrapper">
          <h3>Registration details</h3>
        <form method="post" action="register.php" class="search-form">
                <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#fff;">Name</label>
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Name" id="YourName" name="YourName">
                        <div class="input-group-append"> <span class="input-group-text"><i class="ti-user"></i></span> </div>
                    </div>
                </div>
                <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#fff;">Email ID</label>
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="EmailID" name="EmailID">
                        <div class="input-group-append"> <span class="input-group-text"><i class="ti-email"></i></span> </div>
                    </div>
                </div>
                <div class="form-group">
				<label  class="input-group" style="text-align:left;color:#fff;">Mobile Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Phone Number" id="PhoneNumber" name="PhoneNumber">
                        <div class="input-group-append"> <span class="input-group-text"><i class="ti-headphone-alt"></i></span> </div>
                    </div>
                </div>
                <div class="form-group">
				<label  class="input-group" style="text-align:left;color:#fff;">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Register Number" id="RegUsername" name="RegUsername">
                        <div class="input-group-append"> <span class="input-group-text"><i class="ti-headphone-alt"></i></span> </div>
                    </div>
                </div>
                <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#fff;">Password</label>
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Password" id="RegPassword" name="RegPassword">
                        <div class="input-group-append"> <span class="input-group-text"><i class="ti-headphone-alt"></i></span> </div>
                    </div>
                </div>
                <div class="form-group form-group-position">
					 <input class="button border-0" type="submit" id="btn" name="btn" value="Register"> 
                </div>
            </form>
        </div>
      </div>
	        <div class="col-md-3 col-xl-3 mb-4 mb-md-0"> </div>

    </div>
  </div>
</section>
</body>
</html>

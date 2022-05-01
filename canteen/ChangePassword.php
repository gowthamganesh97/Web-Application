<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canteen Management System - Change Password</title>
    <link rel="icon" href="assets/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/popup.css" />
    <link rel="stylesheet" href="assets/css/pagespeed.css">
</head>
<body>
<?php
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NewPassword"])) {
   echo '<script>alert("Password is required")</script>';
  }  
  else if ( strlen ($_POST["NewPassword"]) < 8) {  
             echo '<script>alert("Password must have minimum 8 digits.")</script>';
}  
  else if ( $_POST["ConfirmPassword"] != $_POST["NewPassword"]) {  
             echo '<script>alert("Password does not match.")</script>';
}  
else{
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
                        <h3>Change Password</h3>
                        <form class="search-form" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Enter new password" id="NewPassword" name="NewPassword">
                                    <div class="input-group-append"> <span class="input-group-text"><i class="ti-user"></i></span> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter confirm password" id="ConfirmPassword" name="ConfirmPassword">
                                    <div class="input-group-append"> <span class="input-group-text"><i class="ti-headphone-alt"></i></span> </div>
                                </div>
                            </div>
                            <div class="form-group form-group-position">
                                <button class="button border-0" type="submit">Submit</button>
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

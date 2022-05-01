<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canteen Management System - Forget Password</title>
    <link rel="icon" href="assets/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/popup.css" />
    <link rel="stylesheet" href="assets/css/pagespeed.css">
</head>
<body>
<?php
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["EmailID"])) {
   echo '<script>alert("EmailID is required")</script>';
  }   
else if (!preg_match ($pattern, $_POST["EmailID"]) ){  
           echo '<script>alert("Email is not valid.")</script>';
}
else{
header("Location: ChangePassword.php");	
}
}

?>

    <section class="bg-lightGray section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2 col-xl-2"> </div>
                <div class="col-md-6 offset-xl-2 col-xl-5">
                    <div class="search-wrapper">
                        <h3>Forget Password</h3>
                        <form class="search-form"  method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter mail id" id="EmailID" name="EmailID">
                                    <div class="input-group-append"> <span class="input-group-text"><i class="ti-user"></i></span> </div>
                                </div>
                            </div>
                            <div class="form-group form-group-position">
                                <button type="submit" class="button border-0">Submit</button>
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

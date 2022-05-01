<?php
    include("connect.php");
  
    $q= "select * from usermaster";
        $query=mysqli_query($con1,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canteen Management System - Cart</title>
    <link rel="icon" href="assets/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/popup.css" />
    <link rel="stylesheet" href="assets/css/pagespeed.css">
</head>
<body>
    <section class="bg-lightGray section-padding">
        <div class="container">
		 <h3>User List</h3>
            <div class="row">
			<table class="table-bordered">
			<thead>
			<tr>
			<th> Name </th>
			<th> Email Id </th>
			<th> Mobile Number </th>
			<th> Register Number </th>
			<th> Password </th>
			</tr>
			</thead>
			
			<tbody>
			<?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
			<tr>
			<th>  <?php echo $qq['UserName']; ?> </th>
			<th>  <?php echo $qq['EmailID']; ?></th>
			<th>  <?php echo $qq['MobileNumber']; ?> </th>
			<th>  <?php echo $qq['LoginID']; ?> </th>
			<th>  <?php echo $qq['LoginPwd']; ?> </th>
			</tr>
			 <?php
            }
            ?>
			</tbody>
			
			
			</table>
			
            </div>
        </div>
  </section>
</body>
</html>

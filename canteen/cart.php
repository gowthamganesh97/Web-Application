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
		 <h3>Snacks</h3>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#000;">Snacks Name</label>
                   </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#000;">Price</label>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
 				<label  class="input-group" style="text-align:left;color:#000;">Qty</label>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Samosa" id="Snacks1" name="Snacks1" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="10.00" id="Price1" name="Price1"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice1" name="TotalPrice1">
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Biscuit" id="Snacks2" name="Snacks2" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="5.00" id="Price2" name="Price2"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice2" name="TotalPrice2">
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tea" id="Snacks3" name="Snacks3" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="10.00" id="Price3" name="Price3"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice3" name="TotalPrice3">
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Coffee" id="Snacks4" name="Snacks4" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="15.00" id="Price4" name="Price4"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice4" name="TotalPrice4">
                    </div>
                </div>
            </div>
        </div>
           
 <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Milk" id="Snacks5" name="Snacks5" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="10.00" id="Price5" name="Price5"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice5" name="TotalPrice5">
                    </div>
                </div>
            </div>
        </div>
         
 <h3>Lunch</h3>
		 <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Meals" id="Snacks6" name="Snacks6" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="75.00" id="Price6" name="Price6"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice6" name="TotalPrice6">
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Veg Rice" id="Snacks7" name="Snacks7" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="60.00" id="Price7" name="Price7"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice7" name="TotalPrice7">
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Curd Rice" id="Snacks8" name="Snacks8" readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="40.00" id="Price8" name="Price8"  readonly="readonly">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        	<input type="button" value="-" class="minus form-control"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text form-control" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus form-control">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Price" id="TotalPrice8" name="TotalPrice8">
                    </div>
                </div>
            </div>
        </div>
		<hr/>
		 <div class="row">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        Total
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Total Qty" id="SubTotalQty" name="SubTotalQty">
                    </div>
                </div>
            </div>
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Total Price" id="SubTotalPrice" name="SubTotalPrice">
                    </div>
                </div>
            </div>
        </div>
		<hr/>
		 <div class="row mt-10">
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                    </div>
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                   
                </div>
            </div>
				<div class="col-lg-3">
			 <div class="form-group">
                  
                </div>
            </div>
			<div class="col-lg-3">
			 <div class="form-group">
                   <div class="input-group">
                         <input class="button border-0" type="submit" name="submit" value="Order Now"> 
                    </div>
                </div>
            </div>
        </div>
  </section>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>payment page</title>
<link href="style.css" rel="stylesheet">
</head>
<body>


<h2>Checkout Form</h2>
<p>Please fill this form for further process.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="saveinfo.php">
      
        <div class="row">
          <div class="box1">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="john">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john5478@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="pramones pr.00">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Lithuania">

            <div class="row">
              <div class="box1">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="LT">
              </div>
              <div class="box1">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="box1">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="box1">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2050">
              </div>
              <div class="box1">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="152">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="box2">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <!--<p><a href="#">Product 1</a> <span class="price">$</span></p>-->
      <?php
        $dictionary = array(
		"flatWhite" => $_POST['flatWhite'],
		"coffee" => 5
        );    
        $add=0;
		foreach($dictionary as $drinkName => $val) {
			echo "$drinkName = $val<br>";
			$add=$val+$add;
		  }
      
       
	   echo "$add";
      
      echo '<hr>';
      echo "<p>Total <span class='price' style='color:green'><b>$add</b></span></p>";
	  ?>
    </div>
  </div>
</div>


</html>
  
</body>
</html>



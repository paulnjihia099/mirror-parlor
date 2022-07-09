<?php  
include('../path.php');
include(ROOT_PATH . '/app/controllers/users.php'); 
?>
<!DOCTYPE html>
<html>
<head>

<title>THE MIRROR PARLOR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../assets/css/index.css">

<style>
body {
  font-family: Arial;
  font-size: 17px;
  
  ;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.cont {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: none;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: none;
  border-radius: 3px;
}
input[type=Tel] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: none;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<!-- header -->
<?php include('../app/helpers/header.php'); ?>

<h2 class="text-center p-2"> Checkout Form</h2>

<div class="row">
  <div class="col-75">
    <div class="cont ml-2 mb-3">
      <form action="">
      
        <div class="row">
          <div class="col-50 ">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Brian Daniel" required class="border-0">
            <label for="phone"> <i class="fa-solid fa-phone"></i> Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="+254 700000000" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="brian@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Street name, Appartment, House No. ">
            <label for="city"><i class="fa fa-institution"></i> County</label>
            <input type="text" id="city" name="city" placeholder="Nairobi" aria-required="true">
            
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Payment Forms</label>
            <div class="icon-container">
              <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
              
              <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
              <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
              <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
              <img src="../assets/photos/mpesa-removebg-preview.png" alt=""  style="height: 40px; width: 40px; ">
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Brian Daniel">
            <label for="num">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="November">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="556">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="PLACE ORDER" class="btn" style="font-size: 20px;">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container bg-light p-3">
      <div class="bg-secondary rounded p-2 mb-3">
        <h4 class="text-warning">Cart <span class="price text-warning" ><i class="fa fa-shopping-cart" ></i> <b>4</b></span></h4>
      </div>
      
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div><br><br>
    <div class="container bg-light p-3">
      <div class="bg-secondary p-2 text-center mb-3 rounded">
        <h4 class="text-warning">MPESA PAYMENT <span class="price text-warning" > <i class="fa-solid fa-file-invoice-dollar"></i></span></h4>
      </div>
      
      <p>1. Lipa na Mpesa paybill</p>
      <p>2. Enter business no: 000000</p>
      <p >3. Account: Your Name (customers' Name)</p>
      <p>4. Forward the message to 07********</p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

<!-- footer -->
<?php include("../app/helpers/footer.php"); ?>
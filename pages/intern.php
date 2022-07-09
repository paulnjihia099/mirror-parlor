<?php 
  include('../path.php');
  include(ROOT_PATH . '/app/controllers/internship.php');
?>
<!DOCTYPE html>

<html lang="en">

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
</head>
<style>
    body {
      font-family: Arial;
      font-size: 17px;
      background: linear-gradient(to bottom, white, rgb(192,192,192));
    }
    .wenno{
        width: 70%;
        margin-left: 17%;
    }
    * {
      box-sizing: border-box;
    }
    
    .row {
      display: -ms-flexbox; 
      display: flex;
      -ms-flex-wrap: wrap; 
      flex-wrap: wrap;
      margin: 0 -16px;
    }
    
    .col-25 {
      -ms-flex: 25%;
      flex: 25%;
    }
    
    .col-50 {
      -ms-flex: 50%; 
      flex: 50%;
    }
    
    .col-75 {
      -ms-flex: 75%; 
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
      border: 1px solid lightgrey;
      border-radius: 3px;
    }
    
    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    input[type=email] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    input[type=tel] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .textarea{
      width: auto;
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
    
    
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }
    </style>
<body>
    
    <!-- header -->
    <?php include('../app/helpers/header.php'); ?>

<div class="wenno">

    <h2 class="text-center p-2"> Internship Application</h2>

<div class="row">
  <div class="col-12">
    <div class="cont ml-2 mb-3">
      <form action="intern.php" method='post' enctype='multipart/form-data'>
      
        <div class="row">
          <div class="col-50 ">
            <h3>Personal Information</h3>
            <!-- success -->
            <?php include(ROOT_PATH . '/app/includes/successmsg.php') ?>
            <!-- success -->
            <!-- errors -->
            <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
            <!-- errors -->
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" value="<?php echo $fullname ?>" placeholder="Brian Daniel">

            <label for="phone" > <i class="fa-solid fa-phone mr-2" ></i>Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $phone ?>" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" placeholder="+254 700000000" >

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="brian@example.com">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $address ?>" placeholder="Street name, Appartment, House No. ">

            <label for="city"><i class="fa fa-institution"></i> County</label>
            <input type="text" id="city" name="county" value="<?php echo $county ?>" placeholder="Nairobi">

            <p class="ml-2"> <i class="fa-solid fa-venus-mars"></i> Gender</p>
            <input type="radio" name="gender" value="male" class="mb-3"> Male
            <input type="radio" name="gender" value="female" class="mb-3 ml-5"> Female
            <br> <br>
          
          <label for="result" class="mb-3"><i class="fa-solid fa-file"></i> Why do you want an intern from us?</label>
        <textarea id="message" name='message'  rows="8" placeholder="My shoes are too tight, and I have forgotten how to dance." class="mb-3 textarea"><?php echo $message ?></textarea>

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Upload CV</label>
          <input type="file" name='cv' class="form-control" id="inputGroupFile01">
        </div>

        <button onclick="document.location='home.html'" class="text-center mt-5 ml-5 rounded btn " style="font-size: 15px; width: 80px; height: 48px; font-weight: bold;">BACK</button>
        <button type="submit" name='btnSubmit' class=" text-center mt-5 btn rounded " style="font-size: 15px; width: 80px; height: 48px; font-weight: bolder;">SUBMIT</button>
</div>
    


</body>
</html>


    
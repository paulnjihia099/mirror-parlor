<?php 
    include('path.php');
    include(ROOT_PATH . '/app/controllers/users.php');
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
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body{
        background: linear-gradient(to bottom, white, rgb(192,192,192));
    }

</style>
<body>

    
    <!-- header -->
    <?php include('app/helpers/header.php'); ?>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            
            <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

            
            <div class="carousel-inner">
             
                <div class="carousel-item active">
                   
                    <img class="d-block w-100" src="assets/photos/waxing1.jpg" alt="Los Angeles" style="width:100%; height: 90vh;">
                    
                </div>

                <div class="carousel-item">
                    <img src="assets/photos/nails.jpg" alt="Chicago" style="width:100%; height: 90vh;">
                </div>

                <div class="carousel-item">
                    <img src="assets/photos/pexels-max-vakhtbovych-6899550.jpg" alt="New york" style="width:100%; height: 90vh;">
                </div>
            </div>
            <div class="clean">
                    <!-- success -->
             <?php include(ROOT_PATH . '/app/includes/successmsg.php') ?>
            <!-- success -->
                <h1 class="text-center" style="font-size: 80px;">The <span style="color: rgb(55, 0, 255); font-weight: bolder;">Beauty</span> Experts</h1>
            <p class="text-center" style="font-size: 25px;">We treat your <span style="color: rgb(17, 0, 255); font-weight: bold;">Skin, Body and Hair</span> with the care and <br> attention <span style="color: rgb(68, 0, 255); font-weight: bolder;">they deserve.</span></p>
            
            </div>
            
           
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="jumbotron shadow-4-strong">
            <div class="row">
              <div class="col-sm-4">
                  <img src="assets/photos/hairdressing3.jpg" alt="" style="border-radius: 100%; width: 300px; height:300px;">
              </div>
              <div class="col-sm-8">
                <h3>Quality experts' touch at it's best!!</h3><br>
                <h5>Why we are the best?</h5>
                <p>~ We don't compromise on quality</p>
                <p>~ Affordable prices</p>
                <p>~ Highly trained employees</p>
                <p>~ Timely services</p>
                <p>~ Quality customer service is our priority</p><br>
                <button class=" btn btn-primary text-center"><a href="pages/shop.html" class="text-white">SHOP NOW</a></button>
                <button class="btn btn-primary text-center"> <a href="pages/about.html" class="text-white">ABOUT US</a></button>
              </div>
            </div>

        </div>

    </div>

    <h4 class="text-center ">Opening Hours</h4>
    <hr style="width: 150px; height: 5px; background-color: blue">
    <ul class="text-center">
        <li style="list-style: none;">Mon ~ Saturday  |  8:00am ~ 9:00pm</li>
    </ul> <br>

    <!-- footer -->
    <?php include("app/helpers/footer.php"); ?>
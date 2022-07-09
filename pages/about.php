<?php 
include('../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABOUT US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<style>
    html,
    body{
        margin: 0px;
        padding: 0px;
        width: 100%;
        background: linear-gradient(to bottom, white, rgb(192,192,192));
    }
    .about-section{
      height: 180px;
      background-color: #faf7ff;
background-image: url("data:image/svg+xml,%3Csvg width='42' height='44' viewBox='0 0 42 44' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='Page-1' fill='none' fill-rule='evenodd'%3E%3Cg id='brick-wall' fill='%23636bb0' fill-opacity='0.13'%3E%3Cpath d='M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .jumbotron{
        background-color: #ebe7ef;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233d6cb8' fill-opacity='0.12'%3E%3Cpath d='M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 1.4l2.83 2.83 1.41-1.41L1.41 0H0v1.41zM38.59 40l-2.83-2.83 1.41-1.41L40 38.59V40h-1.41zM40 1.41l-2.83 2.83-1.41-1.41L38.59 0H40v1.41zM20 18.6l2.83-2.83 1.41 1.41L21.41 20l2.83 2.83-1.41 1.41L20 21.41l-2.83 2.83-1.41-1.41L18.59 20l-2.83-2.83 1.41-1.41L20 18.59z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .contactform{
        width: 30%;
    }

</style>

<body>

    <!-- header -->
    <?php include('../app/helpers/header.php'); ?>

    
        
    
        <div class="about-section mt-2 text-center" >
            <h1 class="mt-2 mb-2">About Us</h1>
            <hr style="width: 100px; height: 5px; background-color: red; border-radius: 20px;" class="text-center mb-3">
            <p class="text1">Feel <span class="typed1">the Beauty in Us</span></p>
            
          </div>
         
          <h2 class="font-weight-bolder mt-4 mb-0" style="text-align:center">Our Team</h2>
          <hr style="width: 100px; height: 5px; background-color: red; border-radius: 20px;" class="text-center">

          <div class="row px-3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 py-2 ML-2">
                <div class="card">
                        
                    <img class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-mdb-ripple-color="light" src="../assets/photos/hair2.jpg" alt="MIRROR PARLOR" style="height: 150px; width: 100%" class="card-img-top img-fluid">
                    
                    <div class="card-body" >
                        <div class="card-title">
                            <h2>Brian Daniel</h2>
                            <div class="title">Barber</div>
                        </div>
                        <div class="card-text">
                            He offers the best hair cutsyou could ever find. Quality at it's best.
                        </div>
                        <button class="btn-primary btn mt-2">Contact</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 py-2">
                <div class="card">
                    <img class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-mdb-ripple-color="light" src="../assets/photos/hair2.jpg" alt="MIRROR PARLOR" style="height: 150px; width: 100%" class="card-img-top img-fluid">
                    <div class="card-body" >
                        <div class="card-title">
                            <h2>Dorothy Hansen</h2>
                            <div class="title">Saloonist</div>
                        </div>
                        <div class="card-text">
                            she cares for your hair at a fair price. She has a splendid heart.
                        </div>
                        <button class="btn-primary btn mt-2">Contact</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 py-2">
                <div class="card">
                    <img class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-mdb-ripple-color="light" src="../assets/photos/hair2.jpg" alt="MIRROR PARLOR" style="height: 150px; width: 100%" class="card-img-top img-fluid">
                    <div class="card-body" >
                        <div class="card-title">
                            <h2>Steve Hawk</h2>
                            <div class="title">Beauty Therapist</div>
                        </div>
                        <div class="card-text">
                            He accounts for every coin to make beauty an appreciated art.
                        </div>
                        <button class="btn-primary btn mt-2">Contact</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 py-2">
                <div class="card">
                    <img class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-mdb-ripple-color="light" src="../assets/photos/hair2.jpg" alt="MIRROR PARLOR" style="height: 150px; width: 100%" class="card-img-top img-fluid">
                    <div class="card-body" >
                        <div class="card-title">
                            <h2>Harriet Job</h2>
                            <div class="title">Shop Attendant</div>
                        </div>
                        <div class="card-text">
                            She has a vast experience and cares about customer loyalty.
                        </div>
                        <button class="btn-primary btn mt-2">Contact</button>
                    </div>
                </div>
            </div>
          </div>
          
           
         
          </div><br>

          <div class="container">
              <div class="jumbotron ">
                  <div class="row">
                    <div class="col-sm-6">
                        <img src="../assets/photos/EDITED.jpg" alt="" style="border-radius: 100%; width: 300px; height:300px;">
                    </div>
                    <div class="col-sm-6">
                        <h6 class="text-center pb-3">Dr. Humphrey Dream ~ founder of Mirror beauty Parlor</h6>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, non?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corporis non architecto animi tenetur, quas dicta blanditiis et repellat nobis incidunt recusandae porro molestias facilis autem unde possimus iure eligendi?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio, expedita minima ratione non, nobis eos deserunt atque ut pariatur quisquam ab beatae perspiciatis? Aliquam laboriosam odit minus molestias ipsa impedit?
                    </div>
                  </div>

              </div>

          </div>
          

          <div class="container-fluid text-center">
            <h2>SERVICES</h2>
            <h4>What we offer</h4>
            <br>
            <div class="row mb-5">
              <div class="col-sm-4">
                <img src="../assets/photos/hair cut.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Barbering</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart"></span>
                <img src="../assets/photos/scrubbing.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Holistic Therapy</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock"></span>
                <img src="../assets/photos/istockphoto-171351926-170667a.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Nail Technology</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
              </div>
              <br>
            <div class="row">
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf"></span>
                <img src="../assets/photos/twist1.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Hair Dressing</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate"></span>
                <img src="../assets/photos/facial.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Beauty Therapy</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench"></span>
                <img src="../assets/photos/hair dressing1.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                <h4>Cosmetology</h4>
                <p>Lorem ipsum dolor sit amet..</p>
              </div>
            </div>
              <br>
             <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench"></span>
                    <img src="../assets/photos/istockphoto-171351926-170667a.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                    <h4>Tutors Training</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                  </div>
                  <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench"></span>
                    <img src="../assets/photos/massage2.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                    <h4>Massage</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                  </div>
                  <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench"></span>
                    <img src="../assets/photos/pexels-karolina-grabowska-4397841.jpg" alt="" class="img-fluid img-thumbnail w-50 border-0 rounded">
                    <h4>BodyShaping and Fitness</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                  </div>
             </div>
            </div>
          </div>


          <div class="container-fluid bg-grey">
            <div class="row mb-4 mt-5 ml-2">
              <div class="col-lg-4 bg-image hover-overlay">
                  
                    
                        <img src="../assets/photos/interior1.jpg" alt="" class="img-fluid rounded"> 
                       
                <div
                        class="mask"
                        style="
                        background: linear-gradient(
                            45deg,
                            rgba(29, 236, 197, 0.5),
                            rgba(91, 14, 214, 0.5) 100%
                        );
                        "
                    ></div>
              </div>
              <div class="col-lg-8 ">
                <h2 style="padding: 7px;" class="text-center">Our Values</h2>
                <hr style="width: 140px; background-color: red; height: 10px; margin-left: 42%; border-radius: 5PX;" class="text-center">
                <h4><strong>MISSION:</strong> </h4> <br> <p>Our mission is to create a collaborative space where stylists work to make a life, not just a living.</p>
                <h4><strong>VISION:</strong> </h4> <br> <p>Our vision is to create a better life to people by bringing blending art and beauty.</p>
              </div>
            </div>
          </div>
          <div class="container py-4">

            <h3 class="text-center" style="font-weight: bold;">Contact Us</h3>
            <hr style="height: 5px; width: 100px; background-color: blue; margin-left: 44% ;"  >
            <hr style="height: 5px; width: 100px; background-color: blue; margin-left: 48%;"" >
          <form class="contact-form" style="width: 50% ; align-items: center; margin-left: 30%" >

            <div class="mb-3">
              <label class="form-label" for="name">Name</label>
              <input class="form-control border-0 shadow" id="name" type="text" placeholder="Name" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
            </div>
           
            <div class="mb-3">
              <label class="form-label" for="emailAddress">Email Address</label>
              <input class="form-control border-0 shadow" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
              <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
              <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            </div>
        
            <div class="mb-3">
              <label class="form-label" for="message">Message</label>
              <textarea class="form-control" name="message" id="message" type="text"  style="height: 10rem;" data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
            </div>
        
            <div class="d-grid">
              <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
            </div>
        
          </form>
        
        </div>

        <script src="typed.js"></script>
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message');
    </script>
       

<!-- footer -->
<?php include("../app/helpers/footer.php"); ?>
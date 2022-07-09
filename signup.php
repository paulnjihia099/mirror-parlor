<?php 
    include('path.php');
    include(ROOT_PATH . '/app/controllers/users.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   
    
    .flower{
        
        position: relative;
        height: auto;
        width: 420px;
        left: 35%;
        margin-top: 5%;
        padding: 10px;
        margin-bottom: 10%;
        
    }

    .hop{
        background: rgb(31, 75, 158);
     
    }


</style>
<body>
   
    <form action="signup.php" method="post" class="container rounded ">

        <div class="flower shadow-lg rounded">
        <h6 class='text-center'>WELCOME TO MIRROR PARLOR</h6>
         <!-- errors -->
         <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
            <!-- errors -->
            <img src="assets/photos/mobile.png" alt="" class="img-fluid rounded" >

            <div>
                <label for="email" class="mr-3" style="font-size: 15px;">Username:</label>
                <input type="text" name="username" value="<?php echo $username ?>" class="shadow p-2 mb-2 bg-light rounded border-0" placeholder="DanielB254">
                <hr class="mb-2">
                <label for="email" class="mr-5" style="font-size: 15px;">Email:</label>
                <input type="Email" name="email" value="<?php echo $email ?>" class="shadow p-2 mb-2 bg-light rounded border-0" placeholder="Danielbrian@gmail.com">
                <hr class="mb-2">
                <label for="email" class="mr-3" style="font-size: 15px;">Password:</label>
                <input type="password" name="password" value="<?php echo $password ?>" class="shadow p-2 mb-2 bg-light rounded border-0"placeholder="Password">
                <hr class="mb-2">
                <label for="email" class="mr-3" style="font-size: 15px;">Confirm <br> Password:</label>
                <input type="password" name="confPassword" value="<?php echo $confPassword ?>" class="shadow p-2 mb-3 bg-light rounded border-0"placeholder="Confirm Password">

            </div>
            <div class="mb-5 mr-3 ">
                <button class=" hop text-center p-2 float-right rounded border-0 " type="submit" name="submitup">Sign up</button>
            </div><br>
                    <p class="text-center"> Already a member? <a href="signin.php">Sign in.</a> </p>
        </div>
        
        
    </form>
</body>
</html>
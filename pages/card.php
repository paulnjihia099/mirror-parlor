<?php 
    include('../path.php');
    include(ROOT_PATH . '/app/database/db.php');

    $user_id = $_SESSION['id'];
    $card_id = getProductFromCart($user_id);
    //show($card_id);

    
    
    
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
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<style>
    .fold{
        background: rgb(199, 195, 195);
        width: 80%;
        margin-left: 10%;
        margin-top: 5%;
        margin-bottom: 5%;
        border-radius: 5px;
        box-shadow: 2px 2px 2px;
        margin: none;
        
    }

    .full{
        width: 50px;
    }

    .click-here{
        font-size: 25px;
    }
    .cart-img{
        width: 200px;
        height: 200px;
        border-radius: 15px;
    }

    .foam{
        background: rgb(160, 152, 152);
        height: 40vh;
        width: 23%;
        margin-left: 50%;
        margin-bottom: 5%;
        box-shadow: 2px 2px 2px;
        margin: none;
    }
</style>

<body>


   <!-- header -->
   <?php include('../app/helpers/header.php'); ?>

    <div>
        <h5 class="text-center mt-3" style="font-size: 30px; font-weight: 20px;" >CART</h5>
    </div>
        
    <div class="fold">
        <div class="d-flex justify-content-around bg-secondary mb-3 p-3 rounded-top">
           <h4>Product</h4>
           <h4>Price</h4>
           <h4>Quantity</h4>
           <h4>Action</h4>
            </div>
            <?php if(count(getProductFromCart($_SESSION['id'])) > 0): ?>
                <?php foreach($card_id as $card): ?>
                    <div class="row pb-3">
                        <div class="col-sm-3">
                        <div class="row ml-2">
                            <div class="col-sm-6">
                                <img src="<?php echo BASE_URL . '/assets/photos/' . $card['product_image'] ?>" alt="" class="img-fluid rounded-top rounded-bottom">        
                            </div>
                            <div class="col-sm-6">
                                <a href="#" ><?php echo $card['product_name'] ?></a>        
                            </div>
                        </div>
                        </div>

                        <div class="col-sm-3">
                        <div class="text-center">
                            $<?php echo $card['product_price'] ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="text-center">
                            <input type="number" min="0" class="full">
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="text-center">
                            <a href='card.php' class="text-danger">Delete</a>
                        </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center">
                <img src="<?php echo BASE_URL . '/assets/photos/empty_cart.png' ?>" alt="" class="img-fluid cart-img">
                <div class=" my-4 click-here">Your Cart is Empty <a href="shop.php">Click here</a> to Shop</div>
                </div>
            <?php endif; ?>    

            
       </div>
    </div>
 
    <div>
        <h5 class="text-center mt-3" style="font-size: 30px; font-weight: 20px; margin-left: 15%;" >CART TOTALS</h5>
    </div>

    <div class="foam rounded">
        <div class="row p-2">
            <div class="col-sm-6 ">
                <p style="font-size: 24px;">Subtotal</p>
            </div>
            <div class="col-sm-6 ">
                <p style="font-size: 25px; margin-left: 20px;">$0</p>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-sm-6  ">
                <p style="font-size: 23px;" required>shipping </p>
            </div>
            <div class="col-sm-6 ">
                <input type="text" style="width: 90%; border: none; margin-top: 10px; border-radius: 3px;">
            </div>
        </div>
       

        <button onclick="document.location='checkout.php'" class="text-center mt-5 ml-5 rounded font-weight-bold">PROCEED TO CHECKOUT</button>
    </div>

    
    <!-- footer -->
<?php include("../app/helpers/footer.php"); ?>
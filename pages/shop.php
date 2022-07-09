<?php 
  include('../path.php');
  include(ROOT_PATH . '/app/controllers/products.php');

  
  //show($cart_data);
    

  if (isset($_POST['btnAddCart'])) {
    unset($_POST['btnAddCart']);

    $product_array_id = selectOne('cart', ['product_id' => $_POST['product_id']]);

    //show($product_array_id);
    if (in_array($_POST['product_id'], $product_array_id)) {
      
      echo "<script>alert('Product is already added in the cart....!')</script>";
      echo "<script>window.location = 'shop.php'</script>";
    }else

      $cart_id = create('cart', $_POST);

      if ($cart_id) {
        header('location:' . $_SERVER['PHP_SELF']);
      }
    };
  
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<style>
  body{
    background: linear-gradient(to bottom, white, rgb(192,192,192));
  }
  .beef{
    position: relative;
    float: right; 
  }

  .cati{
    font-size: 30px;
  }
</style>
<body>

  
    <!-- header -->
   <?php include('../app/helpers/header.php'); ?>

     

         <br><div class="row" >
       <div class="col-sm-11">
       <h3 class=" text-center">Shop With US</h3>
           <hr style="width: 100px; height: 3px; background-color: red;">
        </div>
          
        <div>

         <div class="container-fluid">
         <a href="card.php"  class="me text-dark beef  "><i class="fas fa-shopping-cart cati" > <span class="rounded-pill text-info mr-5"><?php echo count(getProductFromCart($_SESSION['id'])) ?></span></i></a>
            <div class="row mb-5 ml-5">
                <?php foreach($product_data as $product): ?>
                  <div class="col-12 col-md-4 col-lg-3 pt-5">
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo BASE_URL . '/assets/photos/' . $product['product_image'] ?>" alt="Card image cap" style="height: 190px; width: 100%" class="card-img-top img-fluid">
                        <div class="card-body">
                          <h5 class="card-title" style="color: black;"><?php echo $product['product_name'] ?></h5>
                          <p class="card-text">$<?php echo $product['product_price'] ?></p>
                          <span class="card-text"><i class="fa-solid fa-star text-warning"></i></span>
                          <span class="card-text"><i class="fa-solid fa-star text-warning"></i></span>
                          <span class="card-text"><i class="fa-solid fa-star text-warning"></i></span>
                          <span class="card-text"><i class="fa-solid fa-star text-warning"></i></span>
                          <span class="card-text"><i class="fa-solid fa-star-half-stroke text-warning"></i></span><br> <br>
                          <form action='shop.php?id=<?php echo $product['id'] ?>' method='post'>
                            <input type="hidden" name='user_id' value='<?php echo $_SESSION['id'] ?>'>
                            <input type="hidden" name='product_id' value='<?php echo $product['id'] ?>'>
                            <button type='submit' name='btnAddCart' class="btn btn-primary">Add to cart</button>
                          </form>
                          
                        </div>
                      </div>
                </div>
                <?php endforeach; ?>  
            </div>
         </div>           

        <!-- footer -->
<?php include("../app/helpers/footer.php"); ?>
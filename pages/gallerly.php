<?php 
include('../path.php');
include(ROOT_PATH . '/app/controllers/gallerly.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GALLERLY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<style>
    body{
        background: linear-gradient(to bottom, white, rgb(192,192,192));
    }
</style>
<body>

        <!-- header -->
        <?php include('../app/helpers/header.php'); ?>

        <div class="container">
          
            <h2 class="font-weight-bolder mt-4 mb-0" style="text-align:center">Image Gallerly</h2>
          <hr style="width: 100px; height: 5px; background-color: red; border-radius: 20px;" class="text-center">
           
            <div class="row py-3" >
                <?php foreach($gal_data as $gal): ?>
                <div class="col-sm-4 mb-2">
                    <div class="thumbnail">
                           
                        <img class="bg-image hover-overlay ripple shadow-1-strong rounded"
                        data-mdb-ripple-color="light" src="<?php echo BASE_URL . '/assets/photos/' . $gal['gal_img'] ?>" alt="Lights" style="width:100%">
                        <div class="card-img-overlay overlay-yellow text-white d-flex justify-content-center align-items-end mb-2 pb-0 bg-primary text-center" style="opacity: 0.5; width: 200px; height: 50px; left: 22%; top: 75%;">
                            <p style="font-weight: bold; line-height: 20px; font-style: italic; font-size: 20px;"><?php echo $gal['gal_description'] ?></p>
                        </div>
                        
                        </a>
                    </div> 
                </div>
                <?php endforeach; ?>
            </div>
        </div>



        <!-- footer -->
        <?php include("../app/helpers/footer.php"); ?>

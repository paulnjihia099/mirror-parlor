<?php  
    include('../../path.php');
    include(ROOT_PATH . '/app/controllers/gallerly.php');
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

</head>
<style>
    html,
    body{
        height: 100vh;
        padding: 0px;
        margin: 0px;
    }
    .wrapper{
        display: flex;
        flex-direction: row;
        height: calc(100% - 105px);
        height: 100%;
    }
    .sidebar{ 
        flex: 2;
        background-color: gray;
        font-size: 20px;
        font-weight: 500;
        display: block;
    }
    .sidebar li{
        padding: 18px;
        list-style: none;
        border-bottom: 1px solid #000;
        transition: all 0.5s ease;
    }
    .sidebar li:hover{
        background: rgb(44, 43, 43);
        transition: all 0.5s ease;
        cursor: pointer;
    }
    .sidebar li a{
        color: #fff;
        text-decoration: none;
    }
    
    .mainbar{
        flex: 8;
        padding: 40px 100px 100px;
        height: 100%;
        overflow-y: scroll;
    }
    
</style>

<body>

<?php include(ROOT_PATH . '/app/helpers/adminheader.php') ?>

   <div class="wrapper">   
       
   <?php include(ROOT_PATH . '/app/helpers/adminsidebar.php') ?>
        
        <div class="mainbar">
            <h3 class="text-center pb-3">Edit Images</h3>
            <button class="btn btn-primary mt-3 mb-5 mr-2"> <a href="admingallerlyadd.php" class="text-white">ADD</a>  </button>
            <button class="btn btn-primary mt-3 mb-5" ><a href="index.php" class="text-white">Manage</a>  </button>

              <div class="container col-sm-12">
                <form action="adminimgedit.php" method="post" enctype="multipart/form-data" class="mb-5">
                    <!-- errors -->
                    <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
                    <!-- errors -->
                    <input class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="mb-2">
                        <label for="">Gallerly Image</label>
                        <input class="form-control" type="file" name="gal_img" value="<?php echo $gal_img ?>" id="formFile" onchange="preview()">
                    </div>
                    <div class="mb-2">
                        <label for="">Image Description</label>
                        <input class="form-control" type="text" name="gal_description" value="<?php echo $gal_description ?>" placeholder="Add image description" id="formFile" onchange="preview()">
                    </div>

                    <button onclick="clearImage()" class="btn btn-primary mt-3">Remove</button>
                    <button onclick="upload()" type="submit" name="editGal" class="btn btn-primary mt-3">Edit</button>
                </form>
                <img id="frame" src="" class="img-fluid" />
            </div>
    
            <script>
                function preview() {
                    frame.src = URL.createObjectURL(event.target.files[0]);
                }
                function clearImage() {
                    document.getElementById('formFile').value = null;
                    frame.src = "";
                }
            </script>
        </div>
    </div>
   
</body>
</html>

   

<?php  
        include('../../path.php');
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
            <h3 class="text-center pb-3">ADD PRODUCTS</h3>
            <button class="btn btn-primary mt-3 mb-5 mr-2"> <a href="adminshop.php" class= "text-white">ADD</a>  </button>
            <button class="btn btn-primary mt-3 mb-5" ><a href="index.php" class="text-white">manage</a>  </button>
            
            <div class="jumbotron">
            <label for="customFile" class="formlabel">1. Product Image</label>
            <input class="form-control pb-3 mb-3" type="file" id="customFile" style="width: 250px;">
            <label for="cname">2. Product Name</label><br>
            <input type="text" id="cname" name="cardname" placeholder="Braids" class="border-0 shadow p-2 mb-3" style="width: 250px;"><br>
            <label for="Dname">3. Product Price</label><br>
            <input type="text" id="Dname" name="cardname" placeholder="$200" class="border-0 shadow p-2 mb-3" style="width: 250px;"><br>
            <button class="btn btn-primary mt-3 mb-5 mr-2">  OK </button>
        </div>
            

        </div>
    </div>
    
  
   
</body>
</html>

   

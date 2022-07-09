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
            <h3 class="text-center pb-3">Manage video</h3>
            <button class="btn btn-primary mt-3 mb-5 mr-2"> <a href="adminmoreadd.php" class="text-white">ADD</a>  </button>
            <button class="btn btn-primary mt-3 mb-5" ><a href="adminmoreedit.php" class="text-white">EDIT</a>  </button>
            <table class="table table-hover table-striped caption-top">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Video</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>https://www.youtube.com/embed/zpOULjyy-n8?rel=0</td>
                                     
                    <td><span> <a href="#.html" class="text-primary">Edit</a> </span>  |   <span> <a href="#" class="text-warning">Delete</a> </span></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>https://www.youtube.com/embed/zpOULjyy-n8?rel=0</td>
                                        
                    <td><span> <a href="#.html" class="text-primary">Edit</a> </span>  |   <span> <a href="#" class="text-warning">Delete</a> </span></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>https://www.youtube.com/embed/zpOULjyy-n8?rel=0</td>
                                        
                    <td><span> <a href="#.html" class="text-primary">Edit</a> </span>  |   <span> <a href="#" class="text-warning">Delete</a> </span></td>
                  </tr>
                </tbody>
              
          </table>
    </div>
 
</body>
</html>

   

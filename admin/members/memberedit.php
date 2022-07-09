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
            <h3 class="text-center pb-3">Edit Member</h3>
            <span><a href="newmember.php" class="btn btn-primary mt-3 mb-5 mr-2 text-white">ADD</a></span>
            <span><a href="index.php" class="btn btn-primary mt-3 mb-5 text-white">Manage</a></span>
            <form action='memberedit.php' method='post' class="container rounded ">
                <!-- errors -->
                <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
                <!-- errors -->
               <div class="mb-3">
                    <input type="hidden" name='id' value='<?php echo $id ?>'>
               </div>
               <div class="mb-3">
                    <label for="email" class="mr-5 mt-3" style="font-size: 20px;">Email:</label>
                    <input type="Email" name='email' value='<?php echo $email ?>' class="shadow p-2 mb-2 bg-light rounded border-0 form-control" placeholder='Enter email address'>
               </div>
               <div class="mb-3">
                    <label for="username" class="mr-5 mt-3" style="font-size: 20px;">Username:</label>
                    <input type="text" name='username' value='<?php echo $username ?>' class="shadow p-2 mb-2 bg-light rounded border-0 form-control" placeholder='Enter username'>
               </div>
                <div class="mb-3">
                    <label for="email" class="mr-3" style="font-size: 20px;">Password:</label>
                    <input type="password" name='password' value='<?php echo $password ?>' class="shadow p-2 mb-5 bg-light rounded border-0 form-control" placeholder='Enter password'>
                </div>
                <div class="mb-3">
                    <label for="email" class="mr-3" style="font-size: 20px;">Confirm Password:</label>
                    <input type="password" name='confPassword'  class="shadow p-2 mb-5 bg-light rounded border-0 form-control" placeholder='Confirm password'>
                </div>
                <?php if(isset($admin) && $admin == 1): ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name='admin' checked>
                            Admin
                    </div>
                <?php else: ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name='admin'>
                            Admin
                    </div>
                <?php endif; ?>
                <div class="mb-5 ">
                    <button type='submit' name='btnOk' class=" hop text-center p-2 float-right rounded border-0 btn bg-primary">Edit</button>
                </div>
            </form>
            
        </div>
    </div>
   
</body>
</html>

   

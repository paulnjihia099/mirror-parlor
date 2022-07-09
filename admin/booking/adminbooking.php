<?php  
  include('../../path.php');
  include(ROOT_PATH . '/app/controllers/customers.php');
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
        padding: 40px 40px 40px;
        height: 100%;
        overflow-y: scroll;
    }

  
</style>

<body>

<?php include(ROOT_PATH . '/app/helpers/adminheader.php') ?>

   <div class="wrapper">   
       
   <?php include(ROOT_PATH . '/app/helpers/adminsidebar.php') ?>

        <div class="mainbar">
            <h3 class="text-center pb-3">Bookings</h3>
            <!-- success -->
            <?php include(ROOT_PATH . '/app/includes/successmsg.php') ?>
            <!-- success -->
            <table class="table table-hover table-striped caption-top">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Payment</th>
                    <th scope="col">County</th>
                    <th scope="col">Service</th>
                    <th scope="col">Service +</th>
                    <th scope="col">Time(from)</th>
                    <th scope="col">Time(TO)</th>
                    <th scope="col">Day</th>
                    <th scope="col">Age</th>
                    <th scope="col" colspan='3'>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach($customer_data as $key => $cust): ?>
                    <tr>
                      <th scope="row"><?php echo $key + 1 ?></th>
                      <td><?php echo $cust['gender'] ?></td>
                      <td><?php echo $cust['paid'] ?></td>
                      <td><?php echo $cust['county'] ?></td>
                      <td><?php echo $cust['service'] ?></td>
                      <td><?php echo $cust['add_service'] ?></td>
                      <td><?php echo $cust['fromm'] ?></td>
                      <td><?php echo $cust['too'] ?></td>
                      <td><?php echo $cust['day'] ?></td>
                      <td>
                        <?php echo 'Kids = ' . $cust['kids'] ?><div class="mb-2"></div>
                        <?php echo 'Adult = ' . $cust['adult'] ?><div class="mb-2"></div>
                        <?php echo 'Seniors = ' . $cust['seniors'] ?>
                      </td>
                      <td><a href="editbooking.php?id=<?php echo $cust['id'] ?>" class="text-primary">Edit</a></td>
                      <?php if($cust['activation']): ?> 
                        <td><a href="adminbooking.php?activate=0&a_id=<?php echo $cust['id'] ?>" class="text-warning">Accepted</a></td> 
                      <?php else: ?>
                        <td><a href="adminbooking.php?activate=1&a_id=<?php echo $cust['id'] ?>" class="text-info">Pending</a></td>
                      <?php endif; ?>
                      <td> <a href="adminbooking.php?delete_id=<?php echo $cust['id'] ?>" class="text-warning">Delete</a></td>
                    </tr>
                  <?php endforeach; ?>
                  
                </tbody>
              
          </table>
        </div>
    
           
        </div>
        
    </div>
    
    
 
   
</body>
</html>

   

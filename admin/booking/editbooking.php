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
            <span><a href="adminbooking.php" class="btn btn-primary mt-3 mb-5 text-white">Manage</a></span>
            <h3 class="text-center pb-3">Edit Bookings</h3>

            <form action="editbooking.php" method="post">
                <!-- errors -->
                <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
                <!-- errors -->
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="id" value='<?php echo $id ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="user_id" value='<?php echo $user_id ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="gender" value='<?php echo $gender ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="paid" value='<?php echo $paid ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="county" value='<?php echo $county ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="service" value='<?php echo $service ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="add_service" value='<?php echo $add_service ?>'>
                </div>
                <div class="mb-2">
                    <label for="from" class='form-label'>From:</label>
                    <select class="browser-default custom-select mb-4" name="fromm" id="select">
                        <option value="" disabled="" selected=""><?php echo $from ?></option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                        <option value="6:00 PM">6:00 PM</option>
                        <option value="7:00 PM">7:00 PM</option>
                        <option value="8:00 PM">8:00 PM</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="from" class='form-label'>To:</label>
                    <select class="browser-default custom-select mb-4" name="too" id="select">
                        <option value="" disabled="" selected=""><?php echo $to ?></option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                        <option value="6:00 PM">6:00 PM</option>
                        <option value="7:00 PM">7:00 PM</option>
                        <option value="8:00 PM">8:00 PM</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="from" class='form-label'>Day:</label>
                    <select class="browser-default custom-select mb-4" name="day"  id="select">
                        <option value="" disabled="" selected=""><?php echo $day ?></option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="kids" value='<?php echo $kids ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="adult" value='<?php echo $adult ?>'>
                </div>
                <div class="mb-2">
                    <input type="hidden" class='form-control' name="seniors" value='<?php echo $seniors ?>'>
                </div>
                <?php if(isset($activated) && $activated == 1): ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name='activation' checked>
                        Accept
                    </div>
                <?php else: ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name='activation'>
                        Accept
                    </div>
                <?php endif; ?>
                <button type='submit' name='btnEditBooking' class='btn btn-primary'>Update Bookings</button>
            </form>
            
        </div>
    
           
        </div>
        
    </div>
    
    
 
   
</body>
</html>

   

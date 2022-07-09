<?php 
    include('../path.php');
    include(ROOT_PATH . '/app/controllers/customers.php');

    $view = selectOne('customers', ['user_id' => $_SESSION['id']]);
    //show($view);
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/customer.css">
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

    

<div class="card shadow mb-5 bg-white rounded mt-3">
    
    <div class="card-body">
        
        <form action='customer.php' method='post'>
            <p class="card-title text-center shadow mt-2 rounded">MIRROR PARLOR SERVICE BOOKING FORM</p>
            <!-- success -->
            <?php include(ROOT_PATH . '/app/includes/successmsg.php') ?>
            <!-- success -->
            <div class="icons text-center">
                <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> </div>
            <hr>
            <p class="searchText"><strong>Book a Slot With Us</strong></p>

            <?php if($view['activation'] == 1): ?>
                <div class="alert alert-info" role='alert'>
                    Hello <?php echo $_SESSION['username'] ?>, you are scheduled on <?php echo $view['day'] ?> from <?php echo $view['fromm'] ?> to <?php echo $view['too'] ?>. You will also be notified via phone.
                </div>
            <?php else: ?>
                <!-- errors -->
                <?php include(ROOT_PATH . '/app/includes/errormsg.php') ?>
                <!-- errors -->
            <?php endif; ?>

            <div class="row mb-3 mt-3"> <label class="radiobtn">
                <input type="radio" name="gender" value="male">Male</label> <label class="radiobtn">
                <input type="radio" name="gender" value="female">Female</label> 
            </div>
    
            <div class="row">
                <div class="col-sm-6"> 
                    <select class="browser-default custom-select mb-4" name="paid" id="select">
                        <option value="" disabled="" selected="">Paid</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        
                    </select> 
                </div>
                <div class="col-sm-6"> 
                    <select class="browser-default custom-select mb-4" name="county" id="select">
                        <option value="" disabled="" selected="" >County</option>
                        <option value="Kiambu">Kiambu</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Murang'a">Murang'a</option>
                    </select> 
                </div>
            </div>
    
            <div class="row">
                <div class="col-sm-6"> 
                    <div> <select class="browser-default custom-select mb-4" name="service" id="select">
                    <option value="" disabled="" selected="" >Type of service</option>
                    <option value="Massage">Massage</option>
                    <option value="Hair dressing">Hair dressing</option>
                    <option value="Pedicure">Pedicure</option>
                    <option value="Manicure">Manicure</option>
                    <option value="Gel polish">Gel polish</option>
                    <option value="Facial">Facial</option>
                    <option value="Scrubbing">Scrubbing</option>
                </select> </div></div>
                <div class="col-sm-6"> 
                    <input placeholder="&#xf073; Additional service" name="add_service" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                </div>
            </div>
            <div><p style="font-weight: bold" >Time Available</p></div>
            <div class="row mt-4">
                <div class="col-sm-4"> 
                    <select class="browser-default custom-select mb-4" name="fromm" id="select">
                        <option value="" disabled="" selected="">FROM</option>
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
                    </select> </div>
                <div class="col-sm-4"> 
                    <select class="browser-default custom-select mb-4" name="too" id="select">
                        <option value="" disabled="" selected="">TO</option>
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
                    <div class="col-sm-4">
                        <select class="browser-default custom-select mb-4" name="day" id="select">
                            <option value="" disabled="" selected="">Day</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            </select>
                    </div>
            </div>
            <div><p style="font-weight: bold" >Age</p></div>
            <div class="row">
                <div class="col-sm-4"> 
                    <select class="browser-default custom-select mb-4" name="kids" id="select">
                        <option value="" disabled="" selected="">Kids(0-14yrs)</option>
                        <option value="none">None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>
                <div class="col-sm-4"> 
                    <select class="browser-default custom-select mb-4" name="adult" id="select">
                        <option value="" disabled="" selected="">Adults(15-64yrs)</option>
                        <option value="none">None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> </div>
                <div class="col-sm-4"> 
                    <select class="browser-default custom-select mb-4" name="seniors" id="select">
                        <option value="" disabled="" selected="">Seniors(65+)</option>
                        <option value="none">None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>
            </div> 
            <button type='submit' name='btnCustomer' class="btn btn-primary float-right mt-5 rounded" >BOOK</button>
        </form>
    </div>
</div>
        

<!-- footer -->
<?php include("../app/helpers/footer.php"); ?>
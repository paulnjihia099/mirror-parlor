<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/includes/validations.php');

    $table = 'customers';
    $customer_data = selectAll($table);
    $errors = array();
    $id = '';
    $user_id = '';
    $gender = '';
    $paid = '';
    $county = '';
    $service = '';
    $add_service = '';
    $from = '';
    $to = '';
    $day = '';
    $kids = '';
    $adult = '';
    $seniors = '';
    $activated = '';

    if (isset($_POST['btnCustomer'])) {
        $errors = validateCustomers($_POST);

        if (count($errors) === 0) {
            $_POST['user_id'] = $_SESSION['id'];
            $_POST['admin_id'] = 5;
            $_POST['activation'] = 0;
            unset($_POST['btnCustomer']);
            //show($_POST);

            $cust_id = create($table, $_POST);
            $_SESSION['message'] = "You have booked a session";
            header('location:' . BASE_URL . '/pages/customer.php');
            exit();
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $user_id = $user['user_id'];
        $gender = $user['gender'];
        $paid = $user['paid'];
        $county = $user['county'];
        $service = $user['service'];
        $add_service = $user['add_service'];
        $from = $user['fromm'];
        $to = $user['too'];
        $day = $user['day'];
        $kids = $user['kids'];
        $adult = $user['adult'];
        $seniors = $user['seniors'];
    }

    if (isset($_POST['btnEditBooking'])) {
        $errors = editCustomer($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            $_POST['admin_id'] = $_SESSION['id'];
            $_POST['activation'] = isset($_POST['activation'])? 1 : 0;
            unset($_POST['btnEditBooking'], $_POST['id']);
            //show($_POST);
            $cust_id = update($table, $id, $_POST);
            $_SESSION['message'] = "You have updated a booking session";
            header('location:' . BASE_URL . '/admin/booking/adminbooking.php');
            exit();
            //show($_POST);
        }else {
            $from = $_POST['fromm'];
            $to = $_POST['too'];
            $day = $_POST['day'];
            $activated = isset($_POST['activation'])? 1 : 0;
        }
    }

    if (isset($_GET['activate']) && $_GET['a_id']) {
        $activate = $_GET['activate'];
        $a_id = $_GET['a_id'];
        //show($activate);

        $cust_id = update($table, $a_id, ['activation' => $activate]);
        //show($cust_id);
        $_SESSION['message'] = "You have accepted a booking session";
        header('location:' . BASE_URL . '/admin/booking/adminbooking.php');
        exit();
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $user = delete($table, $id);
        $_SESSION['message'] = "Booking session has been deleted";
        header('location:' . BASE_URL . '/admin/booking/adminbooking.php');
        exit();
    }
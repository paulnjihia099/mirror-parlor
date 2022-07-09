<?php

    function validateSignUp($user){
        $errors = array();

        if (empty($user['username'])) {
            array_push($errors, "Username is required");
        }
        if (empty($user['email'])) {
            array_push($errors, "Email is required");
        }
        if (empty($user['password'])) {
            array_push($errors, "Password is required");
        }
        if ($user['password'] !== $user['confPassword']) {
            array_push($errors, "Password does not match");
        }

        $emailconf = selectOne('users', ['email' => $user['email']]);
        if (isset($emailconf)) {
            array_push($errors, "Email already exists");
        }

        return $errors;
    }

    function validateLogin($user){
        $errors = array();

        if (empty($user['email'])) {
            array_push($errors, "Email is required");
        }
        if (empty($user['password'])) {
            array_push($errors, "Password is required");
        }

        return $errors;
    }

    // validate products **************************************************************
    function validateProducts($user){
        $errors = array();

        if (empty($user['product_name'])) {
            array_push($errors, "Product name is required");
        }
        if (empty($user['product_price'])) {
            array_push($errors, "Product price is required");
        }

        return $errors;
    }

    // validate customers **********************************************************
    function validateCustomers($user){
        $errors = array();

        if (empty($_POST['gender'])) {
            array_push($errors, "Gender is required");
        }
        if (empty($_POST['paid'])) {
            array_push($errors, "Paid is required");
        }
        if (empty($_POST['county'])) {
            array_push($errors, "County is required");
        }
        if (empty($_POST['service'])) {
            array_push($errors, "Service is required");
        }
        // if (empty($_POST['add_service'])) {
        //     array_push($errors, "Add service is required");
        // }
        if (empty($_POST['fromm'])) {
            array_push($errors, "From is required");
        }
        if (empty($_POST['too'])) {
            array_push($errors, "To is required");
        }
        if (empty($_POST['day'])) {
            array_push($errors, "Day is required");
        }
        if (empty($_POST['kids'])) {
            array_push($errors, "Kids is required");
        }
        if (empty($_POST['adult'])) {
            array_push($errors, "Adult is required");
        }
        if (empty($_POST['seniors'])) {
            array_push($errors, "Seniors is required");
        }

        return $errors;
    }

    function editCustomer($user){
        $errors = array();

        if (empty($_POST['fromm'])) {
            array_push($errors, "From is required");
        }
        if (empty($_POST['too'])) {
            array_push($errors, "To is required");
        }
        if (empty($_POST['day'])) {
            array_push($errors, "Day is required");
        }

        return $errors;
    }

    // validated intern ********************************************************
    function validateIntern($user){
        $errors = array();

        if (empty($_POST['fullname'])) {
            array_push($errors, "Full name is required");
        }
        if (empty($_POST['phone'])) {
            array_push($errors, "Phone is required");
        }
        if (empty($_POST['email'])) {
            array_push($errors, "Email is required");
        }
        if (empty($_POST['address'])) {
            array_push($errors, "Address is required");
        }
        if (empty($_POST['county'])) {
            array_push($errors, "County is required");
        }
        if (empty($_POST['gender'])) {
            array_push($errors, "Gender is required");
        }
        if (empty($_POST['message'])) {
            array_push($errors, "Message is required");
        }

        return $errors;
    }
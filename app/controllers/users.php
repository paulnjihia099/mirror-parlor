<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/includes/validations.php');

    $table = 'users';
    $users_data = selectAll($table);
    $errors = array();
    $email = '';
    $username = '';
    $password = '';
    $confPassword = '';
    $admin = '';
    $id = '';

    function loginUser($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = "You have logged in successfully";

        if ($_SESSION['admin']) {
            header('location:' . BASE_URL . '/admin/admin.php');
        }else {
            header('location:' . BASE_URL . '/index.php');
        }
        
        exit();
    }

    if (isset($_POST['submitup']) || isset($_POST['btnAdd'])) {
        $errors = validateSignUp($_POST);

        if (count($errors) === 0) {
            unset($_POST['submitup'], $_POST['btnAdd'], $_POST['confPassword']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if (isset($_POST['admin'])) {
                $_POST['admin'] = 1;
                $users_id = create($table, $_POST);
                $_SESSION['message'] = 'Member has been successfully added';
                header('location:' . BASE_URL . '/admin/members/index.php');
            } else {
                $_POST['admin'] = 0;
                $users_id = create($table, $_POST);
            }
            
            if ($_SESSION['admin']) {
                header('location:' . BASE_URL . '/admin/members/index.php');
            } else {
                header('location:' . BASE_URL . '/signin.php');
            }

        }else {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confPassword = $_POST['confPassword'];
            $admin = isset($_POST['admin'])? 1 : 0;
        }
    }

    if (isset($_POST['signin'])) {
        $errors = validateLogin($_POST);

        if (count($errors) === 0) {
            $user = selectOne($table, ['email' => $_POST['email']]);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);
            }else {
                array_push($errors, "Wrong Credentiols");
            }
        }else {
            $email = $_POST['email'];
            $password = $_POST['password'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $email = $user['email'];
        $username = $user['username'];
        $password = $user['password'];
        $admin = isset($user['admin'])? 1 : 0;
    }

    if (isset($_POST['btnOk'])) {
        $errors = validateSignUp($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnOk'], $_POST['confPassword'], $_POST['id']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['admin'] = isset($_POST['admin'])? 1 : 0;
            //show($_POST);
            $user_id = update($table, $id, $_POST);
            $_SESSION['message'] = 'Details updated successfully';
            header('location:' . BASE_URL . '/admin/members/index.php');
            exit();
        }else {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confPassword = $_POST['confPassword'];
            $admin = isset($_POST['admin'])? 1 : 0;
        }
    }
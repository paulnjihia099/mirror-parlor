<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/includes/validations.php');


    $table = 'internship';
    $intern_data = selectAll($table);
    $errors = array();
    $id = '';
    $fullname = '';
    $phone = '';
    $email = '';
    $address = '';
    $county = '';
    $gender = '';
    $message = '';


    if (isset($_POST['btnSubmit'])) {
        $errors = validateIntern($_POST);

        if (!empty($_FILES['cv']['name'])) {
            $cv =  time() . '_' . $_FILES['cv']['name'];
            $destination = ROOT_PATH . '/assets/photos/cvs/' . $cv;

            $upload = move_uploaded_file($_FILES['cv']['tmp_name'], $destination);

            if ($upload) {
                $_POST['cv'] = $cv;
            }else {
                array_push($errors, "Failed to upload your cv");
            }
        }else {
            array_push($errors, "Your cv required");
        }

        if (count($errors) === 0) {
            unset($_POST['btnSubmit']);

            $intern_id = create($table, $_POST);
            $_SESSION['message'] = 'Your details have been submitted successfully. we will email you back. Thank you!';
            header('location:' . BASE_URL . '/pages/intern.php');
            exit();
        }else {
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $county = $_POST['county'];
            $message = $_POST['message'];
        }
    }


    if (isset($_GET['accept']) && isset($_GET['a_id'])) {
        $accept = $_GET['accept'];
        $a_id = $_GET['a_id'];
        //show($accept);

        $intern_id = update($table, $a_id, ['accept' => $accept]);
        //show($intern_id);
        $_SESSION['message'] = "Intern status has been updated";
        header('location:' . BASE_URL . '/admin/internship/index.php');
        exit();
    }

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $intern = delete($table, $id);
        $_SESSION['message'] = "Intern data has been deleted";
        header('location:' . BASE_URL . '/admin/internship/index.php');
        exit();
    }
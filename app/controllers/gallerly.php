<?php

    include(ROOT_PATH . '/app/database/db.php');

    $table = 'gallerly';
    $gal_data = selectAll($table);
    $errors = array();
    $id = '';
    $gal_img = '';
    $gal_description = '';

    function galvalid($user){
        global $errors;

        if (empty($_POST['gal_description'])) {
            array_push($errors, "Image descripion is required");
        }

      
        if (!empty($_FILES['gal_img']['name'])) {
            $galName = time() . '_' . $_FILES['gal_img']['name'];

            $dest = ROOT_PATH . '/assets/photos/' . $galName;

            $moveImg = move_uploaded_file($_FILES['gal_img']['tmp_name'], $dest);

            if ($moveImg) {
                $_POST['gal_img'] = $galName;
            }else {
                array_push($errors, "Failed to upload image");
            }
        }else {
            array_push($errors, "Gallerly image is required");
        }
        

        return $errors;
    }

    if (isset($_POST['upload'])) {
        $errors = galvalid($_POST);

        if (count($errors) === 0) {
            unset($_POST['upload']);
            $_POST['admin_id'] = $_SESSION['id'];
            //show($_POST);

            $gal = create($table, $_POST);
            $_SESSION['message'] = "Image uploaded to the Gallerly";
            header('location:' . BASE_URL . '/admin/gallerly/index.php');
            exit();
        }else {
            $gal_img = $_POST['gal_img'];
            $gal_description = $_POST['gal_description'];
        }
    }

    if (isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
        $id = $user['id'];
        $gal_img = $user['gal_img'];
        $gal_description = $user['gal_description'];
    }

    if (isset($_POST['editGal'])) {
        $errors = galvalid($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['editGal'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];
            //show($_POST);
            $gal = update($table, $id, $_POST);
            $_SESSION['message'] = "Gallerly successfully edited";
            header('location:' . BASE_URL . '/admin/gallerly/index.php');
            exit();
        }else {
            $gal_img = $_POST['gal_img'];
            $gal_description = $_POST['gal_description'];
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $user = delete($table, $id);
        $_SESSION['message'] = "Gallerly successfully deleted";
        header('location:' . BASE_URL . '/admin/gallerly/index.php');
        exit();
    }
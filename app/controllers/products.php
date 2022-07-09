<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/includes/validations.php');

    $table = 'products';
    $product_data = selectAll($table);
    $errors = array();
    $product_name = '';
    $product_price = '';
    $id = '';
    $product_image = '';

    if (isset($_POST['btnAddprod'])) {
        $errors = validateProducts($_POST);

        if (!empty($_FILES['product_image']['name'])) {
            $image_name = time() . '_' . $_FILES['product_image']['name'];
            $destination = ROOT_PATH . '/assets/photos/' . $image_name;

            $upload_image = move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);

            if ($upload_image) {
                $_POST['product_image'] = $image_name;
            } else {
                array_push($errors, "Failed to upload image");
            }
        }else {
            array_push($errors, "Product image is required");
        }

        if (count($errors) === 0) {
            unset($_POST['btnAddprod']);
            $_POST['admin_id'] = $_SESSION['id'];

            $prod_id = create($table, $_POST);
            $_SESSION['message'] = 'Product have been add';
            header('location:' . BASE_URL . '/admin/product/index.php');
            exit();
        }else {
            $product_price = $_POST['product_price'];
            $product_name = $_POST['product_name'];
        }
    }

    if (isset($_GET['id'])) {
        $product = selectOne($table, ['id' => $_GET['id']]);

        $id = $product['id'];
        $product_price = $product['product_price'];
        $product_name = $product['product_name'];
        $product_image = $product['product_image'];
    }

    if (isset($_POST['btnEditprod'])) {
        $errors = validateProducts($_POST);

        if (!empty($_FILES['product_image']['name'])) {
            $image_name = time() . '_' . $_FILES['product_image']['name'];
            $destination = ROOT_PATH . '/assets/photos/' . $image_name;

            $upload_image = move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);

            if ($upload_image) {
                $_POST['product_image'] = $image_name;
            } else {
                array_push($errors, "Failed to upload image");
            }
        }else {
            array_push($errors, "Product image is required");
        }

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['btnEditprod'], $_POST['id']);
            $_POST['admin_id'] = $_SESSION['id'];

            $prod_id = update($table, $id, $_POST);
            $_SESSION['message'] = 'Product have been updated';
            header('location:' . BASE_URL . '/admin/product/index.php');
            exit();
        }else {
            $product_price = $_POST['product_price'];
            $product_name = $_POST['product_name'];
            //$product_image = $_POST['product_image'];
        }
    }
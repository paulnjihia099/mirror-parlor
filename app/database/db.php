<?php
    session_start();
    require('connect.php');

    function show($content){
        echo '<pre>', print_r($content, true), '</pre>';
        die();
    }

    function executeQuery($sql, $data){
        global $conn;
        $stml = $conn->prepare($sql);
        $types = array_values($data);
        $values = str_repeat('s', count($types));
        $stml->bind_param($values, ...$types);
        $stml->execute();
        return $stml;
    }

    function selectAll($table, $conditions = []){
        global $conn;

        $sql = "SELECT * FROM $table";
        if (empty($conditions)) {
            $stml = $conn->prepare($sql);
            $stml->execute();
            $records = $stml->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else{
            $i=0;
            foreach ($conditions as $key => $value) {
                if ($i === 0) {
                    $sql = $sql . " WHERE $key = ?";
                }else {
                    $sql = $sql . " AND $key = ?";
                }
                $i++;
            }

            $stml = executeQuery($sql, $conditions);
            $records = $stml->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }

    function selectOne($table, $conditions){
        global $conn;

        $sql = "SELECT * FROM $table";

        $i=0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            }else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";

        $stml = executeQuery($sql, $conditions);
        $records = $stml->get_result()->fetch_assoc();
        return $records;
    }

    function create($table, $data){
        global $conn;

        $sql = "INSERT INTO $table SET";

        $i=0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else {
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        //show($sql);

        $stml = executeQuery($sql, $data);
        $records = $stml->insert_id;
        return $records;
    }

    function update($table, $id, $data){
        global $conn;

        $sql = "UPDATE $table SET";

        $i=0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else {
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }

        $sql = $sql . " WHERE id = ?";
        $data['id'] = $id;

        $stml = executeQuery($sql, $data);
        $records = $stml->affected_rows;
        return $records;
    }

    function delete($table, $id){
        global $conn;

        $sql = "DELETE FROM $table WHERE id = ?";

        $stml = executeQuery($sql, ['id' => $id]);
        return $stml->affected_rows;
    }


    function getProductFromCart($user_id){
        global $conn;

        $sql = "SELECT p.*, c.id FROM products AS p JOIN cart AS c ON p.id=c.product_id WHERE c.user_id=?";
        //show($sql);

        $stml = executeQuery($sql, ['user_id' => $user_id]);
        $records = $stml->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

    $data = getProductFromCart(8);
    //show($data);

  


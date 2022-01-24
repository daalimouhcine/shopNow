<?php

    if (isset($_COOKIE['typ'])) {
        require 'connect.php';

        $updateId = $_COOKIE['updateId'];
        $updateType = $_COOKIE['typ'];

        $updateQuery = 'UPDATE product SET price = :newPrice WHERE id = :updateId';

        $updateStatement = $connect->prepare($updateQuery);

        header('Location:./');
        
    }

?>
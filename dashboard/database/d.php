<?php

    if (isset($_COOKIE['deleteId'])) {
        $deleteId = $_COOKIE['deleteId'];

        require 'connect.php';

        $deleteQuery = "DELETE FROM product WHERE id = :selectedId";
        $deleteStatement = $connect->prepare($deleteQuery);
        $deleteStatement->execute([
            ':selectedId' => $deleteId
        ]);

        setcookie('deleteId', '', time()-3600, '/');

        header('Location:./');

    }

?>
<?php

    if (isset($_COOKIE["id"])) {
        $selectDeleteId = $_COOKIE["id"];

        require "connect.php";

        $deleteQuery = "DELETE FROM product WHERE id = :deleteId";
        $deleteStatement = $connect->prepare($deleteQuery);
        $deleteStatement->execute([
            ':deleteId' => $selectDeleteId
        ]);

        setcookie('id', '', time() - 3600, '/');
    }

?>
<?php

    require 'connect.php';

    $readQuery = 'SELECT * FROM product';
    $readStatement = $connect->prepare($readQuery);
    $readStatement->execute();
    $products = $readStatement->fetchAll(PDO::FETCH_ASSOC);

?>
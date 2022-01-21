<?php 

    require "connect.php";
    
    $selectQuery = "SELECT * FROM product";
    $selectStatement = $connect->prepare($selectQuery);
    $selectStatement->execute();

    $products = $selectStatement->fetchAll(PDO::FETCH_ASSOC);

?> 
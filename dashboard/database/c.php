<?php

   if (isset($_POST["submit"])) {
        require "connect.php";

        $pName = $_POST['productName'];
        $pPrice = $_POST['productPrice'];
        $pQty = $_POST['productQty'];

        $createQuery = "INSERT INTO product( name, price, qty ) Value( :name, :price, :qty)";
        $createStatement = $connect->prepare($createQuery);
        $createStatement->execute([
            ':name' => $pName,
            ':price' => $pPrice,
            ':qty' => $pQty
        ]);

   }

?> 
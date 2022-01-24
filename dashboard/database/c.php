<?php

    if (isset($_POST['submit'])) {
        $pName = $_POST['productName'];
        $pPrice = $_POST['productPrice'];
        $pQty = $_POST['productQty'];

        require 'connect.php';
    
        $createQuery = 'INSERT INTO product( name, price, qty ) VALUES( :name, :price, :qty)';
        $createStatement = $connect->prepare($createQuery);
        $createStatement->execute([
            ':name' => $pName,
            ':price' => $pPrice,
            ':qty' => $pQty
        ]);

    }    


?>
<?php

    require 'database/c.php';
    require 'database/r.php';

    echo "
            <iframe name='hidden-frame' class='hidden-frame'></iframe>
            <section class='sect1'>
                <form action='addproduct.php' method='POST' target='hidden-frame' class='form__add'>
                    <input type='text' name='productName' placeholder='Product Name' class='input'>
                    <input type='number' name='productPrice' placeholder='Price' class='input'>
                    <input type='number' name='productQty' placeholder='Quantity' class='input'>
                    <input type='text' name='productCategorie' placeholder='Categorie' class='input'>
                    
                    <input type='submit' name='submit' value='Add Product' class='btn__form1'>
                    
                </form>
            </section>
            <section class='sect2'>
                <div class='group1'>
    
                    <div class='s__group1'>
                        <div class='table__a' id='add-table__a'>Product</div>
                        <div class='table__a' id='add-table__a'>Price</div>
                        <div class='table__a' id='add-table__a'>Quantity</div>
                        <div class='table__a' id='add-table__a'>Categories</div>
                    </div>
        ";

    if ($products) {


            foreach ($products as $product) {
                echo "
                    <div class='s__group2'>
                        <div class='table__n'>$product[name]</div>
                        <div class='table__n'>$product[price]</div>
                        <div class='table__n'>$product[qty]</div>
                        <div class='table__n'>Phones</div>
                    </div>
                ";
            }

            
        }
        
    echo "
                </div>
            </section>
        ";

    $connect = null;

?>
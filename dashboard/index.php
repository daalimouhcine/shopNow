<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNow |                 
        <?php        
            if (isset($_POST["dashboard"])) {
                echo $_POST["dashboard"];
            } elseif (isset($_POST["view"])) {
                echo $_POST["view"];
            } elseif (isset($_POST["add"])) {
                echo $_POST["add"];
            } elseif (isset($_POST["modify"])) {
                echo $_POST["modify"];
            } elseif (isset($_POST["delete"])) {
                echo $_POST["delete"];
            } else {
                echo "Dashboard";
            }
        ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/graphs.css">
    <link rel="stylesheet" href="styles/getall.css">

    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png">
</head>
<body>
    <aside>
        <div class="title-con">
            <h1 class="Dashboard">
                <?php        
                    if (isset($_POST["dashboard"])) {
                        echo $_POST["dashboard"];
                    } elseif (isset($_POST["view"])) {
                        echo $_POST["view"];
                    } elseif (isset($_POST["add"])) {
                        echo $_POST["add"];
                    } elseif (isset($_POST["modify"])) {
                        echo $_POST["modify"];
                    } elseif (isset($_POST["delete"])) {
                        echo $_POST["delete"];
                    } else {
                        echo "Dashboard";
                    }
                ?>
            </h1>
    
            <button class="hmb__menu" id="hmb__menu">
                <i class="fas fa-arrow-left" id="arrow" title="Hide and Show side bar"></i>
            </button>
        </div>

        <form method="POST">
            <ul class="my__nav" id="my__nav">       
                <label for="dashboard">
                     <li class="<?php echo !isset($_POST["view"]) && !isset($_POST["add"]) && !isset($_POST["modify"]) && !isset($_POST["delete"]) ? "on-page" : "" ?>" data-link="dashboard" onclick="selectLink(this)">
                        <img src="imgs/home.png" alt="dashboard home icon" class="icons">
                        <input type="submit" value="Dashboard" id="dashboard" name="dashboard" class="link">
                    </li>
                </label>
                <label for="view">
                    <li class="<?php echo isset($_POST["view"]) ? ' on-page' : '' ?>" data-link="view">
                        <img src="imgs/view.png" alt="view all products icon" class="icons">
                        <input type="submit" value="View Products" id="view" name="view" class="link">
                    </li>
                </label>
                <label for="add">
                    <li class="<?php echo isset($_POST["add"]) ? "on-page" : "" ?>" data-link="add">
                        <img src="imgs/add-product.png" alt="add product icon" class="icons">
                        <input type="submit" value="Add Products" id="add" name="add" class="link">
                    </li>
                </label>
                <label for="modify">
                    <li class="<?php echo isset($_POST["modify"]) ? "on-page" : "" ?>" data-link="modify">
                        <img src="imgs/modify.png" alt="modify icon" class="icons">
                        <input type="submit" value="Modify Products" id="modify" name="modify" class="link">
                    </li>
                </label>
                <label for="delete">
                     <li class="<?php echo isset($_POST["delete"]) ? "on-page" : "" ?>" data-link="delete">
                        <img src="imgs/delete.png" alt="delete icon" class="icons">
                        <input type="submit" value="Delete Products" id="delete" name="delete" class="link">
                    </li>
                </label>
            </ul>
        </form>
        <div class="end-container">
            <div id="logout-bt">
                <img src="imgs/logout.png" alt="logout icon" class="logout-icons">
                <a href="../login/index.php" class="logout-link">Logout</a>
            </div>
            <p class="copyright"> Copyright © 2022 ShopNow. All rights reserved. </p>
        </div>
    </aside>
    
    <main>
        <?php
            
            if (isset($_POST["dashboard"])) {
                include "charts.php";
            } elseif (isset($_POST["view"])) {
                include "getall.php";
            } elseif (isset($_POST["add"])) {
                include "addproduct.php";
            } elseif (isset($_POST["modify"])) {
                include "edit.php";
            } elseif (isset($_POST["delete"])) {
                include "delete.php";
            } else {
                include "charts.php";
            }
        ?>
    </main>
    

    <script src="scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="scripts/graph.js"></script>
</body>
</html>

<?php isset($_COOKIE['currentPage']) ? $pageCookie = $_COOKIE["currentPage"] : ''; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNow | <?= isset($_COOKIE['currentPage']) ? $pageCookie : 'Dashboard' ?> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/graphs.css">
    <link rel="stylesheet" href="styles/getall.css">
    <link rel="stylesheet" href="styles/style.css">

    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png">
</head>

<body>
    <aside>
        <div class="title-con">
            <h1 class="Dashboard">
                <?= isset($_COOKIE['currentPage']) ? $pageCookie : 'Dashboard' ?>
            </h1>

            <button class="hmb__menu" id="hmb__menu">
                <i class="fas fa-arrow-left" id="arrow" title="Hide and Show side bar"></i>
            </button>
        </div>

        <form action="" method="GET">
            <ul class="my__nav" id="my__nav">
                <li class="<?= $pageCookie == 'Dashboard' ? 'on-page' : ''; ?>" data-link="dashboard" onclick="selectLink(this)">
                    <img src="imgs/home.png" alt="dashboard home icon" class="icons">
                    <a href="#" class="link">Dashboard</a>
                </li>
                    <li class="<?= $pageCookie == 'View Products' ? 'on-page' : ''; ?>" data-link="view">
                    <img src="imgs/view.png" alt="view all products icon" class="icons">
                    <a href="#" class="link">View Products</a>
                </li>
                <li class="<?= $pageCookie == 'Add Products' ? 'on-page' : ''; ?>" data-link="add">
                    <img src="imgs/add-product.png" alt="add product icon" class="icons">
                    <a href="#" class="link">Add Products</a>
                </li>
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
            if(isset($_COOKIE['currentPage'])) {
                if ($pageCookie == "Dashboard") {
                    include "charts.php";
    
                } elseif ($pageCookie == "View Products") {
                    include "getall.php";
    
                } elseif ($pageCookie == "Add Products") {
                    include "addproduct.php";
    
                } elseif ($pageCookie == "Modify Products") {
                    include "update.php";
    
                } elseif ($pageCookie == "Delete Products") {
                    include "delete.php";
    
                }

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
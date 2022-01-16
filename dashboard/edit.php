<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">    

    <link href="https://unpkg.com/pattern.css" rel="stylesheet">
    <link rel="shortcut icon" href="../login/images/logo.png">
</head>
<body>
    <aside>
        <div class="title-con">
            <h1 class="Dashboard">Edit Product</h1>
    
            <button class="hmb__menu" id="hmb__menu">
                <i class="fas fa-arrow-left" id="arrow" title="Hide and Show side bar"></i>
            </button>
        </div>

        <ul class="my__nav" id="my__nav">       
            <li class="on-page">
                <img src="imgs/home.png" alt="dashboard home icon" class="icons">
                <a href="index.php" class="link on-page">Dashboard</a>
            </li>
            <li>
                <img src="imgs/view.png" alt="view all products icon" class="icons">
                <a href="getall.php" class="link">View Products</a>
            </li>
            <li>
                <img src="imgs/add-product.png" alt="add product icon" class="icons">
                <a href="addproduct.php" class="link">Add Products</a>
            </li>
            <li>
                <img src="imgs/modify.png" alt="modify icon" class="icons">
                <a href="edit.php" class="link">Modify Products</a>
            </li>
            <li>
                <img src="imgs/delete.png" alt="delete icon" class="icons">
                <a href="#" class="link">Delete Products</a>
            </li>
        </ul>
        <div class="end-container">
            <div id="logout-bt">
                <img src="imgs/logout.png" alt="logout icon" class="logout-icons">
                <a href="#" class="logout-link">Logout</a>
            </div>
            <p class="copyright"> Copyright © 2022 ShopNow. All rights reserved. </p>
        </div>
    </aside>

    <main style="margin-top: 20rem;">
    
    <section class="sect1">
        
        <form action="" method="get" class="form__add">
            <input type="text" placeholder="Product Name" class="input">
            <input type="number" placeholder="Price" class="input">
            <input type="number" placeholder="Quantity" class="input">
            <input type="text" placeholder="Categorie" class="input">
            
            <input type="submit" value="Edit Product" class="btn__form1">
            
        </form>

    </main>



    <script src="scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="scripts/graph.js"></script>
</body>
</html>

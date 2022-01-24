

<?php

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        require "../dashboard/database/connect.php";
        
        $readQuery = "SELECT * FROM employee WHERE email =? AND password = ?";
        $readStatement = $connect->prepare($readQuery);
        $readStatement->execute(array($_POST['email'], $_POST['password']));
        // $employees = $readStatement->fetchALL(PDO::FETCH_ASSOC);
        $loginCount = $readStatement->rowCount();

        if($loginCount>0) {
            header('Location:../dashboard/index.php');

        } else {
            header('Location:index.php?class=error');
            
        }
        
    }

?>
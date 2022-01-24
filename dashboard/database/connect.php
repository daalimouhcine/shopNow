<?php 
    try {
        $connect = new PDO("mysql:host=localhost;dbname=shopnow", "root", "");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Connection Failed:' . $e->getMessage();
        
    }

?>
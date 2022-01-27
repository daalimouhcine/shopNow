<?php 
    try {
        $conn = new PDO("mysql:host=localhost;dbname=shopnow", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Connection Failed:' . $e->getMessage();
        
    }

?>


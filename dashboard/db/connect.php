<?php 

    $servername = "localhost";
    $username = "mouhcine";
    $password  = "369852741dadA";

    try {
        $connect = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);

          // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
?>
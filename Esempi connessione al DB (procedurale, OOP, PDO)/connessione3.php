<?php
    // connessione con PDO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connessione riuscita con PDO!";
    } catch (PDOException $e) {
        die("Connessione fallita: " . $e->getMessage());
    }
    
?>

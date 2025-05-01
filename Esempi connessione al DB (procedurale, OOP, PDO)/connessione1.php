<?php
    //approccio procedurale
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    } else {
        echo "Connessione riuscita con approccio procedurale!";
    }
?>

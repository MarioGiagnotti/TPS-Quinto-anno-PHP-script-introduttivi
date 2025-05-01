<!DOCTYPE html>
<html>
    <head>   
        <title>Conversione km-miglia</title>
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
            lunghezza in km: <input type="text" name="km">      
            <input type="submit" name="invia" value="Converti">   
        </form> 
        <?php
            if (isset($_POST['invia'])) {
            echo "<h3>kilometri " . $_POST["km"]. "</h3>";
                echo "corrispondono a ";
                echo "<h3> miglia ";
                $miglia = $_POST["km"] /1.6093;
                echo ($miglia) . "</h3>";
            }
        ?>
    </body>
</html>
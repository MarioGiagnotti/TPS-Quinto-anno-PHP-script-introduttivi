<!DOCTYPE html> 
<html> 
    <head>  
        <title>Array e tipi</title>
    </head> 
    <body>  
        <h2>Array: tipi e valori</h2>   
        <hr> 
        <?php
            $dati = array(30, "Roma", 12.7, true, null);
            echo 'var_dump($dati[0]) = '; 
            echo var_dump($dati[0]) . '<br>';
            echo 'var_dump($dati[1]) = '; 
            echo var_dump($dati[1]) . '<br>';
            echo 'var_dump($dati[2]) = '; 
            echo var_dump($dati[2]) . '<br>';
            echo 'var_dump($dati[3]) = '; 
            echo var_dump($dati[3]) . '<br>';
            echo 'var_dump($dati[4]) = '; 
            echo var_dump($dati[4]) . '<br>';
            echo '<hr>';
            echo 'count($dati) = '; 
            echo count($dati) . '<br>';
        ?>
    </body> 
</html>
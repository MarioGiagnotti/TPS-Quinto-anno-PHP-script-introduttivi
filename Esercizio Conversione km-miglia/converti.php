<!DOCTYPE html>
<html>
    <head>   
        <title>Conversione km-miglia</title>
    </head>
    <body>   
        <h3><?php echo $_POST["km"]." "; ?>kilometri </h3>   
        corrispondono a   
        <h3>
            <?php
                /** il valore dei km e' ricevuto* come parametro dalla pagina HTML* 1 miglio = 1,609344 kilometri*/
                $miglia = $_POST["km"] /1.6093;
                echo ($miglia). " ";            
            ?> 
        Miglia  
        </h3>
    </body>
</html>
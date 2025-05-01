<!DOCTYPE html>
<html>
    <head>   
        <title>Server</title>
    </head>
    <body>   
        Il tuo indirizzo IP :<?php echo $_SERVER['REMOTE_ADDR'] . "<br>" ?>   
        Il tuo browser Web :<?php echo $_SERVER['HTTP_USER_AGENT'] . "<br>" ?>  
        Il tuo server Web :<?php echo ($_SERVER['SERVER_SOFTWARE']) . "<br>" ?>   
        Il tuo server :<?php echo $_SERVER['SERVER_NAME'] . "<br>" ?>
    </body>
</html>
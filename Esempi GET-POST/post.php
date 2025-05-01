<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['lastname'])) {
        echo "<h1>Benvenuto ".$_POST['name']." ".$_POST['lastname']."</h1><br>";  
        var_dump($_POST);
    }  
} else {
?>
<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="lastname">
    <input type="submit" name="submit">
</form>
<?php 
}
?>
<?php 

session_start();

?>

<h1>

    La tua password generata su un altra pagina: <br>

    <?php echo $_SESSION['password'] ?>
</h1>
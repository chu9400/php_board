<?php
    session_start();
    require_once('config.php');
    require_once('functions.php');

    ensure_user_is_authenticated();

    echo $_SESSION['email'];
    include('header.php');
?>

    <a href="logout.php">logout</a>

<?php 
    include('footer.php');
?>
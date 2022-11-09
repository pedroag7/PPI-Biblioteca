<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../loginpage/index.php');
    session_destroy();
?>
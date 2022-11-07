<?php
   session_start();
    if (isset($_POST['submit'])){
        include_once("../php/conexao.php");

        $email = $_POST['email'];
        $password $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = $email and senha = $password";

        $result = strcon->query($sql);

        if(mysqli_num_rows($result) < 1){
            header('Location: ../loginpage/index.php')
            unset($_SESSION['email'] = $email);
            unset($_SESSION['senha'] = $password);
        }
        else{
            header('Location: ../index.html');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            
        }

    } 
    else{
        header('Location: ../loginpage/index.php');
    }

?>

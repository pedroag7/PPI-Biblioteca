<?php
   session_start();
    if (isset($_POST['submit']) && !empty ($_POST['email']) && !empty($_POST['password'])){
        
        include_once('../php/conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$password'";

        $result = $strcon->query($sql);

        if(mysqli_num_rows($result) < 1){
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../loginpage/index.php');
        }
        else{
            header('Location: ../index.php');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            
        }

    } 
    else{
        header('Location: ../loginpage/index.php');
    }

?>

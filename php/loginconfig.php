<?php
   
    if (isset($_POST['submit']) && !empty ($_POST['email']) && !empty($_POST['password'])){
        
        include_once('../php/conexao.php');
        $email = mysqli_real_escape_string($strcon,$_POST['email']);
        $password = mysqli_real_escape_string($strcon,$_POST['password']);

        $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$password'";
        $result = $strcon->query($sql);

        if(mysqli_num_rows($result) < 1){
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../login/index.php');
        }
        else{
            $usuario = $result->fetch_assoc();
            session_start();
            $_SESSION['email'] = $usuario['email'];
            //$_SESSION['senha'] = $password;
            $_SESSION['name'] = $usuario['nameUser'];
            $_SESSION['id'] = $usuario['id'];

            header('Location: ../index.php');
          
            
        }

    } 
    else{
        header('Location: ../login/index.php');
    }

?>

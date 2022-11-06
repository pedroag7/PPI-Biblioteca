<?php 
    session_start();
    include("conexao.php");

    $name =  $_POST['nome'];
    $lastname =  $_POST['sobrenome'];
    $course =  $_POST['course'];
    $registration =  $_POST['registration'];
    $catuser = $_POST['catuser'];
    $cpf =  $_POST['cpf'];
    $email  =  $_POST['email'];
    $password =  md5($_POST['password']);

    $sql = "select count(*) as total from users where cpf = '$cpf'";
    $result = mysqli_query($strcon, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION ['user_exists'] = true;
        header('Location:../cadastrousuario/index.php');  
        exit;
    }

    $sql = "INSERT INTO users (nameUser, lastname, course, registration, catUser, cpf, email, senha) 
    VALUES ('$name', '$lastname', '$course', '$registration', '$catuser', '$cpf', '$email', '$password')";

    if($strcon->query($sql) === TRUE){
        $_SESSION['status_registration'] = true;
    }

    $strcon->close();

    header('Location:../cadastrousuario/index.php');
    exit;
    
?>
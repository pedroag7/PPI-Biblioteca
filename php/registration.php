<?php 
    session_start();
    include("conexao.php");

    $name = mysqli_real_escape_string($strcon, trim($_POST['nome']));
    $lastname = mysqli_real_escape_string($strcon, trim($_POST['sobrenome']));
    $course = mysqli_real_escape_string($strcon, trim($_POST['course']));
    $registration = mysqli_real_escape_string($strcon, trim($_POST['registration']));
    $catuser = mysqli_real_escape_string($strcon, trim($_POST['catuser']));
    $cpf = mysqli_real_escape_string($strcon, trim($_POST['cpf']));
    $email  = mysqli_real_escape_string($strcon, trim($_POST['email']));
    $password = mysqli_real_escape_string($strcon, trim(md5($_POST['password'])));

    $sql = "select count(*) as total from users where cpf = '$cpf'";
    $result = mysqli_query($strcon, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION ['user_exists'] = true;
        header('Location:../cadastrousuario/index.php');  
        exit;
    }

    $sql = " INSERT INTO users (nameUser, lastname, course, registration, catUser, cpf, email, senha) 
    VALUES ('$name', '$lastname', '$course', '$registration', '$catuser', '$cpf', '$email', '$password', NOW())";    
    if($strcon->query($sql) === TRUE){
        $_SESSION['status_registration'] = true;
    }

    $strcon->close();

    header('Location:../cadastrousuario/index.php');
    exit;
    
?>
<?php
include("conexao.php");
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($strcon, $_POST['nome']);
    $lastname = mysqli_real_escape_string($strcon, $_POST['sobrenome']);
    $course = mysqli_real_escape_string($strcon, $_POST['course']);
    $registration = mysqli_real_escape_string($strcon, $_POST['matricula']);
    $catuser = mysqli_real_escape_string($strcon, $_POST['catuser']);
    $cpf = mysqli_real_escape_string($strcon, $_POST['cpf']);
    $email = mysqli_real_escape_string($strcon, $_POST['email']);
    $password = mysqli_real_escape_string($strcon, $_POST['password']);

    $sql = "select count(*) as total from users where cpf = '$cpf'";
    $result = mysqli_query($strcon, $sql);
    $row = mysqli_fetch_assoc($result);
    $sqlinsert = mysqli_query($strcon, "INSERT INTO users (nameUser, lastname, course, registration, catUser, cpf, email, senha) VALUES ('$name', '$lastname', '$course', '$registration', '$catuser', '$cpf', '$email', '$password')");
    
    if ($row['total'] == 1) {
        $_SESSION['user_exists'] == true;
        header('Location: ../login/index.php');
        
    }

    if ($strcon->query($sql) === TRUE) {
        $_SESSION['user_registration'] = true;
    }

    $strcon->close();

    header('Location: ../login/index.php');
   

}

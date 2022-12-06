<?php
include_once('conexao.php');
    if (isset($_POST['update'])) {
        $iduser = $_POST['id'];
        $name = mysqli_real_escape_string($strcon, $_POST['nome']);
        $lastname = mysqli_real_escape_string($strcon, $_POST['sobrenome']);
        $course = mysqli_real_escape_string($strcon, $_POST['course']);
        $registration = mysqli_real_escape_string($strcon, $_POST['matricula']);
        $catuser = mysqli_real_escape_string($strcon, $_POST['catuser']);
        $cpf = mysqli_real_escape_string($strcon, $_POST['cpf']);
        $email = mysqli_real_escape_string($strcon, $_POST['email']);
        $password = mysqli_real_escape_string($strcon, $_POST['password']);
        $level = $_POST['level']; 

        $sqlinsert = mysqli_query($strcon, "UPDATE users SET nameUser='$name', lastname='$lastname', course='$course', registration='$registration', catUser='$catuser', cpf='$cpf', email='$email', senha='$password', userLevel='$level'  WHERE idUser='$iduser'");



        $strcon->close();

        header('Location: ../listuser/index.php');
    }


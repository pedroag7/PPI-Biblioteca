<?php 
    include("conexao.php");
    if(isset($_POST['submit'])){
        $name = $_POST['nome'];
        $lastname = $_POST['sobrenome'];
        $course = $_POST['course'];
        $registration = $_POST['matricula'];
        $catuser = $_POST['catuser'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($strcon, "INSERT INTO users (nameUser, lastname, course, registration, catUser, cpf, email, senha) VALUES ('$name', '$lastname', '$course', '$registration', '$catuser', '$cpf', '$email', '$password')");

        header('Location: ../cadastrousuario/index.php');
    }   
    
?>
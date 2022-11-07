<?php
    $servername = "localhost";
    $database = "biblioteca";
    $username = "root";
    $password = "";

    //criar conexao
    $strcon = mysqli_connect($servername, $username, $password,$database);

    //verificar conexao
        if(!$strcon) {
            die("Falha de conexao" . mysqli_connect_error());
        }

        
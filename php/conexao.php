<?php
    $servername = "localhost:3312";
    $database = "biblioteca";
    $username = "root";
    $password = "pedro1009";

    //criar conexao
    $strcon = mysqli_connect($servername, $username, $password,$database);

    //verificar conexao
        if(!$strcon) {
            die("Falha de conexao" . mysqli_connect_error());
        }

        
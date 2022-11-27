<?php
include_once('conexao.php');
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $typecollection = mysqli_real_escape_string($strcon, $_POST['tipoacervo']);
        $cod = mysqli_real_escape_string($strcon, $_POST['codAcervo']);
        $cdu = mysqli_real_escape_string($strcon, $_POST['classCdu']);
        

        $sqlinsert = mysqli_query($strcon, "UPDATE collection SET typeCollection='$typecollection', codCollection='$cod', classCDU='$cdu'  WHERE idCollection='$id'");



        $strcon->close();

        header('Location: ../listcollection/index.php');
    }


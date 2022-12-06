<?php
    require_once("./conexao.php");
    if (isset($_POST['submit'])) {
        $comment = mysqli_real_escape_string($strcon, $_POST['comment']);
        $idUser = $_POST['idUser'];
        $idObra = $_POST['idObra'];

        $sqlquery = mysqli_query($strcon, "INSERT INTO comment (comment, idUser, idObra) VALUES ('$comment', '$idUser', '$idObra')");
        header('Location: ../livro/index.php?id='.$idObra.'');
    }

?>
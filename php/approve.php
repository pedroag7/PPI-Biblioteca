<?php
    if (!empty($_GET['id'])) {
        include_once('./conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM comment WHERE idComment=$id";
        $result = $strcon->query($sql);
      
        if ($result->num_rows > 0) {
            $sqlinsert = mysqli_query($strcon, "UPDATE comment SET approved='1'   WHERE idComment='$id'");
            header('Location: ../comments/index.php');
         
        } else{
          header('Location: ../comments/index.php');
        }
    }
?>
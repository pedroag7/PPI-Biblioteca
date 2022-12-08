<?php
    if (!empty($_GET['id'])) {
        include_once('./conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM comment WHERE idComment=$id";
        $result = $strcon->query($sql);
      
        if ($result->num_rows > 0) {
            $sqldelete = mysqli_query($strcon, "DELETE FROM comment WHERE idComment='$id'");
            header('Location: ../comments/index.php');
         
        } else{
          header('Location: ../comments/index.php');
        }
    }
?>
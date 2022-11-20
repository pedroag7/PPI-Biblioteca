<?php
    if (!empty($_GET['id'])) {
        include_once('./conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE idUser=$id";
        $result = $strcon->query($sql);
      
        if ($result->num_rows > 0) {
            $sqldelete = mysqli_query($strcon, "DELETE FROM users WHERE idUser='$id'");
            header('Location: ../listuser/index.php');
         
        } else{
          header('Location: ../listuser/index.php');
        }
    }
?>
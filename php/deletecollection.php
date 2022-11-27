<?php
    if (!empty($_GET['id'])) {
        require_once('./conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM collection WHERE idCollection=$id";
        $result = $strcon->query($sql);
      
        if ($result->num_rows > 0) {
            $sqldelete = mysqli_query($strcon, "DELETE FROM collection WHERE idCollection='$id'");
            header('Location: ../listcollection/index.php');
         
        } else{
          header('Location: ../listcollection/index.php');
        }
    }
?>
<?php
    if (!empty($_GET['id'])) {
        include_once('./conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM obra WHERE idObra=$id";
        $result = $strcon->query($sql);
      
        if ($result->num_rows > 0) {
            $sqldelete = mysqli_query($strcon, "DELETE FROM obra WHERE idObra='$id'");
            header('Location: ../editbook/index.php');
         
        } else{
          header('Location: ../editbook/index.php');
        }
    }
?>
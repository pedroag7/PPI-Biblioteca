<?php
    session_start();
    include_once('conexao.php');
    
    if (isset($_POST['submit'])) {
        //$category_collection['category_collection'];
        $typecollection = mysqli_real_escape_string($strcon, $_POST['tipoacervo']);
        $codecollection = mysqli_real_escape_string($strcon,$_POST['codAcervo']);
        $cdu = mysqli_real_escape_string($strcon,$_POST['classCdu']);
    
        $sql = "select count(*) as total from collection where codCollection = '$codecollection'";
        $result = mysqli_query($strcon, $sql);
        $row = mysqli_fetch_assoc($result);
    
        if ($row['total'] == 1) {
            $_SESSION['collection_exists'] = true;
            header('Location:../createcollection/index.php');
            exit;
        }
    
        $sqlinsert = mysqli_query($strcon, " INSERT INTO collection (typeCollection, codCollection, classCdu) 
         VALUES ('$typecollection','$codecollection','$cdu')");
    
        if ($strcon->query($sql) === TRUE) {
            $_SESSION['status_collection'] = true;
        }
    
        $strcon->close();
    
        header('Location:../createcollection/index.php');
        exit;
    }
    
?>
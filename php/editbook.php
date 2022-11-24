<?php
    include_once('conexao.php');
    require_once $_SERVER['DOCUMENT_ROOT'] . "/ppi-biblioteca/php/imgFunc.php";
    if (isset($_POST['update'])) {
        $idObra = $_POST['id'];
        $title = mysqli_real_escape_string($strcon, $_POST['title']);
        $subtitle = $_POST['subtitle'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $publishyear = $_POST['publishyear'];
        $company  = $_POST['company'];
        $codbook = $_POST['codbook'];
        $translator = $_POST['translator'];
        $publishlocal = $_POST['publishlocal'];
        $isbn = $_POST['isbn'];
        $path_cover = $_FILES["imagem"]["cover"];
        $descphysic = $_POST['descphysic'];
        $disponibility = $_POST['disponibility'];
        $synopses = $_POST['synopses'];
    
        if(!$path_cover = img($_FILES['imagem'], "cover")){
            die("Arquivo Invalido");
        }

        $sqlinsert = mysqli_query($strcon, "UPDATE obra SET title='$title', subtitle='$subtitle', author='$author', category='$category', publicationDate='$publishyear', publishCompany='$company', codObra='$codbook', translator='$translator', publishLocation='$publishlocal', seriesISBN='$isbn', cover='$path_cover', physicalDescription='$descphysic', disponibility='$disponibility', synopses='$synopses'   WHERE idObra='$idObra'");



        $strcon->close();

        header('Location: ../editbook/index.php');
    }


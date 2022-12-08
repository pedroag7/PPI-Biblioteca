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
        $descphysic = $_POST['descphysic'];
        $disponibility = $_POST['disponibility'];
        $synopses = $_POST['synopses'];
        
        function saveCover()
        {
            $file = $_FILES['imagem']['name'];
            $path = pathinfo($file);
            $ext = $path['extension'];
            $temp_name = $_FILES['imagem']['tmp_name'];
            $permanent_name = uniqid() . "." . $ext;
            $store_at = getcwd() . '/../img/covers/' . $permanent_name;
            move_uploaded_file($temp_name, $store_at);
            $cover = '../img/covers/' . $permanent_name;
            return $cover;
        }

        $cover = saveCover();

        $sqlinsert = mysqli_query($strcon, "UPDATE obra SET title='$title', subtitle='$subtitle', author='$author', category='$category', publicationDate='$publishyear', publishCompany='$company', codObra='$codbook', translator='$translator', publishLocation='$publishlocal', seriesISBN='$isbn', cover='$cover', physicalDescription='$descphysic', disponibility='$disponibility', synopses='$synopses'   WHERE idObra='$idObra'");



        $strcon->close();

        header('Location: ../editbook/index.php');
    }


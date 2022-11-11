<?php
session_start();
include_once('conexao.php');
require_once $_SERVER['DOCUMENT_ROOT'] . "/ppi-biblioteca/php/imgFunc.php";


if (isset($_POST['submit'])) {
    //$category_collection['category_collection'];
    $title = $_POST['title'];
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

   

    $sql = "select count(*) as total from obra where seriesISBN = '$isbn'";
    $result = mysqli_query($strcon, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['book_exist'] = true;
        header('Location:../cadastrarlivro/index.php');
        exit;
    }

    $sqlinsert = mysqli_query($strcon, " INSERT INTO obra (title, subtitle, author, category, publicationDate, publishCompany, codObra, translator, publishLocation, seriesISBN, cover, physicalDescription, disponibility, synopses) 
     VALUES ('$title', '$subtitle', '$author', '$category', '$publishyear', '$company',
     '$codbook', '$translator', '$publishlocal', '$isbn', '$path_cover', '$descphysic', '$disponibility', '$synopses')");

    if (move_uploaded_file($filename, $folder)) {
        echo "funfou";
    } else {
        echo "nao funfou";
    }


    if ($strcon->query($sql) === TRUE) {
        $_SESSION['status_registration'] = true;
    }

    $strcon->close();

    header('Location:../cadastrarLivro/index.php');
    exit;
}

<?php
session_start();
include_once('conexao.php');

if (isset($_POST['submit'])) {
    $category_collection['category_collection'];
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
    $cover = $_FILES["cover"]["name"];
    $filename = $_FILES["cover"]["tmp_name"];
    $descphysic = $_POST['descphysic'];
    $disponibility = $_POST['disponibility'];
    $synopses = $_POST['synopses'];

    $folder = "../img/covers" .$cover;

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
     '$codbook', '$translator', '$publishlocal', '$isbn', '$cover', '$descphysic', '$disponibility', '$synopses')");

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

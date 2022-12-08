<?php
session_start();
include_once('conexao.php');



if (isset($_POST['submit'])) {
    //$category_collection['category_collection'];
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
    //$path_cover = $_FILES["imagem"]["cover"];
    $descphysic = $_POST['descphysic'];
    $disponibility = $_POST['disponi'];
    $synopses = $_POST['synopses'];

        // Handle Cover by tobias
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

    /*if(!$path_cover = img($_FILES['imagem'], "cover")){
        die("Arquivo Invalido");
    }*/

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

    if ($strcon->query($sql) === TRUE) {
        $_SESSION['status_registration'] = true;
    }

    $strcon->close();

    header('Location:../cadastrarLivro/index.php');
    exit;
}

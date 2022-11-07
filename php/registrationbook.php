<?php 
    session_start();
    include("conexao.php");

    //$category_collection = mysqli_real_escape_string($strcon, trim($_POST['category_collection']));
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
    $cover = $_POST['cover'];
    $descphysic = $_POST['descphysic'];
    $disponibility = $_POST['disponibility'];
    $synopses = $_POST['synopses'];

    
    $sql = "select count(*) as total from obra where seriesISBN = '$isbn'";
    $result = mysqli_query($strcon, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION ['book_exist'] = true;
        header('Location:../cadastrarlivro/index.php');  
        exit;
    }

    $sql = " INSERT INTO obra (title, subtitle, author, category, publicationDate, publishCompany, codObra, translator, publishLocation,
     seriesISBN, cover, physicalDescription, disponibility, synopses) 
     VALUES ('$title', '$subtitle', '$author', '$category', '$publishyear', '$company',
     '$codbook', '$translator', '$publishlocal', '$isbn', '$cover', '$descphysic', '$disponibility', '$synopses')"; 

    if($strcon->query($sql) === TRUE){
        $_SESSION['status_registration'] = true;
    }

    $strcon->close();

    header('Location:../cadastrousuario/index.php');
    exit;
    
?>
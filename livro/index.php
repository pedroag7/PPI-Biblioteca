<?php
require_once("../php/protect.php");
if (!empty($_GET['id'])) {
    include_once('../php/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM obra WHERE idObra=$id";
    $result = $strcon->query($sql);

    if ($result->num_rows > 0) {
        while ($obra_data = mysqli_fetch_assoc($result)) {
            $id = $obra_data['idObra'];
            $title = $obra_data['title'];
            $subtitle = $obra_data['subtitle'];
            $autor = $obra_data['author'];
            $category = $obra_data['category'];
            $cover = $obra_data['cover'];
            $company = $obra_data['publishCompany'];
            $translator = $obra_data['translator'];
            $desc = $obra_data['physicalDescription'];
            $disponi = $obra_data['disponibility'];
            $synopses = $obra_data['synopses'];
        }
    } else {
        header('Location: ../index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <title> <?php echo $title ?></title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['"Roboto"', 'sans-serif']
                    }
                }
            }
        }
    </script>

</head>

<body class="font-roboto">
    <div class=" max-w-screen-7xl min-h-screen bg-white ">

    <header class="w-full bg-green-600 p-3 drop-shadow shadow-sm text-white ">
      <div class="max-w-screen-xl  mx-auto flex justify-between gap-x-2 drop-shadow">
        <h1 class=" w-7 ">
          <a href=""><img src="../img/logo.png" class="drop-shadow"></a>
        </h1>

        <nav>
          <ul class=" flex gap-x-1  font-roboto">
            <form class="flex items-center mx-auto" method="GET" action="../search/index.php">
              <label for="buscar" class="sr-only">Pesquisar</label>
              <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 pt-0.5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input type="search"  id="buscar" name="search"  class="bg-gray-50 mt-0.5 h-8 border border-slate-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 block w-full pl-10 p-2.5 placeholder:italic placeholder:text-slate-400 shadow-sm ease-in duration-150 focus:scale-105 " placeholder="Pesquisar livro" required="">
              </div>
              <button type="submit" name="submit" class="p-1.5 ml-2 mt-0.5 text-sm font-medium text-white bg-gray-50 rounded-lg border border-slate-300   focus:ring-1 focus:outline-none focus:ring-sky-500 drop-shadow ease-in duration-150 hover:scale-105  ">
                <svg class="w-5 h-5 text-gray-900 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
              </button>
            </form>

            <div class="flex">
              <li class=""><a href="../index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                  </svg></a></li>

              <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" flex-inline text-white  font-medium rounded-lg text-sm  text-center  items-center ease-in duration-150  " type="button"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow " data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 572px);">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                  <li>
                  <a href="./profile/index.php?id=<?php echo $_SESSION['id']?>" class="block py-2 px-4 hover:bg-gray-100 ">Perfil</a>
                  </li>
                  <?php 
                 if ($_SESSION['userLevel'] == 'administrator') {
                  echo "<li>
                  <a href=\"../controlpanel/index.php\" class=\"block py-2 px-4 hover:bg-gray-100 \">Painel de controle</a>
                </li>" ;  
              } 
                 ?> 
                  <?php 
                 if ($_SESSION['userLevel'] == 'administrator' or $_SESSION['userLevel'] == 'moderator' ) {
                  echo "<li>
                  <a href=\"../comments/index.php\" class=\"block py-2 px-4 hover:bg-gray-100 \">Aprovar Comentarios</a>
                </li>" ;  
              } 
                 ?> 
                  <li>
                    <a href="../php/logout.php" class="block py-2 px-4 hover:bg-gray-100 ">Sair</a>
                  </li>
                
                </ul>
              </div>
            </div>

          </ul>
        </nav>
      </div>
    </header>


        <div class=" px-3 pt-5 md:max-w-screen-xl  mx-auto text-gray-500 divide-y ">
            <div class=" mx-auto  item-center flex">
                <div class="mx-auto flex pt-8 pb-2  text-right">
                    <img src="<?php echo $cover; ?>" alt="Livro Duna" class=" md:mr-8 mr-4 rounded-lg drop-shadow md:w-48 md:h-72 w-32 h-48 object-cover">
                    <div class="text-left md:max-w-2xl max-w-md  md:break-words	 md:text-2sm tex-xs pt-1 ">
                        <h1 class=" md:text-4xl text-2xl break-words text-slate-800 uppercase"><?php echo $title. " ". $subtitle; ?></h1>

                        <p class="break-words  "><?php echo $synopses; ?> </p>
                        <br>

                        <p class="italic"> Disponibilidade: <strong> <?php echo $disponi; ?> </strong> </p>
                        <p class="italic"> Autor: <strong> <?php echo $autor; ?> </strong></p>
                        <p class="italic"> Numero de paginas: <strong> <?php echo $desc; ?> </strong> </p>
                        <p class="italic"> Editora: <strong> <?php echo $company; ?> </strong> </p>
                        <p class="italic"> Tradutora: <strong> <?php echo $translator; ?> </strong> </p>
                    </div>

                </div>
            </div>

            <div>
                <form class=" mt-4 p-2 md:mx-60 " action="../php/comments.php" method="POST">
                    <div class="mb-4bg-gray-50 rounded-lg border  border-gray-200 drop-shadow shadow-md ">
                        <div class="py-2 px-4  bg-white rounded-t-lg ">
                            <label for="comment" class="sr-only">Comente Aqui</label>
                            <textarea id="comment" name="comment" rows="4" class="px-0 w-full   text-sm text-gray-900 bg-white border-0 " placeholder="Deixe seu comentario aqui!" required=""></textarea>
                        </div>
                        <div class="py-2 px-3 border-t ">
                            <input type="hidden" name="idUser" value="<?php echo ($_SESSION['id']);  ?>">
                            <input type="hidden" name="idObra" value="<?php echo $id?>">
                            <button type="submit" name="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-green-500 rounded-lg focus:ring-2 focus:ring-green-200  ease-in duration-150 hover:bg-green-700 ">
                                Postar Comentario
                            </button>

                        </div>
                    </div>
                </form>
            </div>

            <?php
            include_once("../php/conexao.php");
            $id = $_GET['id'];
            $sqlinner = "SELECT * FROM comment INNER JOIN obra ON comment.idObra = obra.idObra INNER JOIN users ON comment.idUser = users.idUser WHERE approved = '1' AND comment.idObra='$id'";

            $resultt = $strcon->query($sqlinner);
  
            if ($resultt->num_rows > 0) {
  
              while ($comment_data = mysqli_fetch_assoc($resultt)) {
                $user = $comment_data['nameUser'];
                $comment = $comment_data['comment'];
  
                echo "<div class=\"mt-4 p-2 md:mx-60\">
                <div class=\"mb-4bg-gray-50 rounded-lg border  border-gray-200 drop-shadow shadow-md \">
                            <div class=\"py-2 px-4  bg-white rounded-t-lg \">
                            <div class=\"py-2 px-3 border-b \">
                                <h1 class=\"inline-flex items-center  text-md font-medium text-center text-green-600  \">
                                    $user
                                </h1>
                            </div>
                                <label for=\"comment\" class=\"sr-only\">Comentario</label>
                                <h1> $comment</h1>
                            </div>
                        </div>
                </div>";
              }
            }
            
            ?>


        </div>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
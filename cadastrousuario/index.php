<?php

include("../php/conexao.php");
require_once("../php/protect.php");
include("../php/registration.php");
if ($_SESSION['userLevel'] != 'administrator') {
  header('Location: ../index.php');   
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="swiper.js"></script>
  <title>Cadastro de usuario</title>
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

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
  <div class="w-full min-h-screen bg-white ">
    <!-- Header -->
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

    <!-- Main -->
    <div class="p-3  pt-4 max-w-screen-xl mx-auto text-gray-500 ">

      <h1 class="text-2xl pb-2 text-center italic "> Cadastro de usuarios </h1>
      
      <div>
      
      
      </div> 
     

      
      <div>
      <?php if($_SESSION['user_exists'] ){
          echo ('<h1 class="text-red-500 mx-auto text-3xl text-center bold uppercase drop-shadow">CPF ja cadastrado no sistema!</h1>');
        }
        ?>
      </div>
      

      <form action="../php/registration.php" method="POST"  class="border pl-4 pb-4 text-black border-1 rounded-lg shadow-sm w-9/12 items-center m-auto pt-2.5 ">
        <div class="grid justify-center gap-6 mb-6 md:grid-cols-2 w-9/12 m-auto">
          <div>
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 ">Nome</label>
            <input type="text" id="nome" name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow " placeholder="George" required="">
          </div>
          <div>
            <label for="sobrenome" class="block mb-2 text-sm font-medium  ">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow " placeholder="Gon??alves" required="">
          </div>
          <div>

            <label for="curso" class="block mb-2 text-sm font-medium text-gray-900 ">Curso</label>
            <select id="curso" name="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow ease-in duration-150 ">
            <option value="TecInfo">Tec Informatica</option>
                      <option value="TecAdm">Tec Administra??ao</option>
                      <option value="TecAgro">Tec Agro</option>
                      <option value="bComputa??ao">Bacharelado Ciencia Da Computa????o</option>
                      <option value="bMedVet">Bacharelado Medicina Veterinaria</option>
                      <option value="lMatematica">Licenciatura Matematica</option>
                      <option value="bAdm">Bacharelado ADM</option>
            </select>
          </div>

          <div>
            <label for="matricula" class=" block mb-2 text-sm font-medium text-gray-900">Matricula/SIAP</label>
            <input type="number" id="matricula" name="matricula" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow  " placeholder="2022704477" required="">
          </div>
          <div>
            <label for="catU" class="block mb-2 text-sm font-medium text-gray-900 ">Categoria de usuario</label>
            <select id="catUser" name="catuser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow ">
              <option selected>Escolha uma categoria</option>
              <option value="SV">Servidor</option>
              <option value="AL">Aluno</option>
            </select>
          </div>
          <div>

            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 ">CPF</label>
            <input type="number" id="cpf" pattern="[0-9]{11}" name="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow " placeholder="12345678911" required=""  maxlength="11">
          </div>
        </div>

        <div class="mb-6 w-9/12 m-auto">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
          <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow " placeholder="george@aluno.iffar.edu.br" required="">
        </div>

        <div class="mb-6 w-9/12 m-auto">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Senha</label>
          <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow " placeholder="???????????????????????????" required="">
        </div>

        <div class="flex items-start mb-6 w-9/12 m-auto">
          <button type="submit" id="submit" name="submit" class="text-white bg-green-500 justify-center hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow-sm shadow-green-400/50 justify-center ease-in-out duration-200 ">Cadastrar</button>
      </form>


    </div>



  </div>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
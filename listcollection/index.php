<?php
require_once('../php/conexao.php');
require_once("./php/protect.php");
$sql = "SELECT * FROM collection ORDER BY typeCollection DESC";
$result = $strcon->query($sql)

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="swiper.js"></script>
    <title>Lista de acervos</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
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
    <div class="w-full min-h-screen bg-white ">

        <header class="w-full bg-green-600 p-3 drop-shadow shadow-sm  text-white ">
            <div class="max-w-screen-xl w-full mx-auto flex justify-between  gap-x-2 drop-shadow ">
                <h1 class=" w-7 ">
                    <a href=""> <img src="../img/logo.png" class="drop-shadow"></a>
                </h1>
                <nav>
                    <ul class=" flex gap-x-1  font-roboto">
                        <form class="flex items-center" method="GET" action="">
                            <label for="buscar" class="sr-only">Pesquisar</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 pt-0.5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="search" id="buscar" class="bg-gray-50 mt-0.5 h-8 border border-slate-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 block w-full pl-10 p-2.5 placeholder:italic placeholder:text-slate-400 shadow-sm ease-in duration-150 focus:scale-105 " placeholder="Pesquisar livro" required="">
                            </div>
                            <button type="submit" class="p-1.5 ml-2 mt-0.5 text-sm font-medium text-white bg-gray-50 rounded-lg border border-slate-300   focus:ring-1 focus:outline-none focus:ring-sky-500 drop-shadow ease-in duration-150 hover:scale-110  ">
                                <svg class="w-5 h-5 text-gray-900 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                        <div class="flex">
                            <li class=""><a href="/ppi-biblioteca/index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
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
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Perfil</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </ul>
                </nav>
            </div>
        </header>

        <div class="p-3  pt-10 max-w-screen-xl mx-auto text-gray-500 ">
            <div class=" m-auto m-0 ">

                <div class="overflow-x-auto  shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 ">

                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Tipo de coleção
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Codigo Coleçao
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Classificaçao CDU
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Id Coleção
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Editar
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Deletar
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($collection_data = mysqli_fetch_assoc($result)) {
                                echo ('<tr class="bg-white border-b  ">' .
                                    '<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap flex ">' .
                                    '<span class="my-auto"> ' . $collection_data['typeCollection'] . '</span>' .
                                    '</th>' .
                                    '<td class="py-4 px-6">' .
                                    $collection_data['codCollection'] .
                                    '</td>' .
                                    '.<td class="py-4 px-6">'
                                    . $collection_data['classCDU'] .
                                    '</td>'
                                    . 
                                    '<td class="py-4 px-6">'
                                    . $collection_data['idCollection']
                                    . '</td>' .
                                    '<td class="py-4 px-4">' .
                                    '<a href="./edit.php?id=' . $collection_data['idCollection'] . '"
                                        class=" flex  rounded-lg  text-center  hover:bg-green-600 hover:text-white duration-200 ease-in-out font-medium text-green-600 hover:underline  "><svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-6 w-6 " fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></a>' .
                                    '</td>' . 
                                    '<td class="py-4 px-4">' .
                                    '<a href="../php/deletecollection.php?id=' . $collection_data['idCollection'] . '"
                                        class=" flex  rounded-lg  text-center  hover:bg-red-600 hover:text-white duration-200 ease-in-out font-medium text-red-600 hover:underline  "><svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-6 w-6" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="currentColor" d="M216 48h-40v-8a24.1 24.1 0 0 0-24-24h-48a24.1 24.1 0 0 0-24 24v8H40a8 8 0 0 0 0 16h8v144a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V64h8a8 8 0 0 0 0-16ZM96 40a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm96 168H64V64h128Zm-80-104v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Zm48 0v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Z"/></svg> </a>' .
                                    '</td>'.
                                    '</tr>"');
                            }
                            ?>
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
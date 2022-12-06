<?php
    require_once("../php/protect.php");
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

<body>
    <div class="w-full min-h-screen bg-white font-roboto ">

        <!---Header-->
        <header class="w-full bg-green-600 p-3 drop-shadow-sm text-white ">
            <div class="max-w-screen-xl mx-auto w-full flex justify-between drop-shadow gap-x-2">
                <h1 class=" w-7 ">
                    <a href=""> <img src="./img/logo.png" class="drop-shadow"></a>
                </h1>
                <nav>
                    <ul class=" flex gap-x-1  font-roboto">

                        <form class="flex items-center">
                            <label for="buscar" class="sr-only">Pesquisar</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 pt-0.5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="search" id="buscar"
                                    class="bg-gray-50 mt-0.5 h-8 border border-slate-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 block w-full pl-10 p-2.5 placeholder:italic placeholder:text-slate-400 shadow-sm ease-in duration-150 focus:scale-105 "
                                    placeholder="Pesquisar livro" required="">
                            </div>

                            <button type="submit"
                                class="p-1.5 ml-2 mt-0.5 text-sm font-medium text-white bg-gray-50 rounded-lg border border-slate-300 ease-in duration-100 hover:scale-110  focus:ring-1 focus:outline-none focus:ring-sky-500 drop-shadow ">
                                <svg class="w-5 h-5 text-gray-900 " fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                        <div class="flex">

                            <li class=""><a href="/ppi-biblioteca/index.php"> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="50" height="32" fill="currentColor" class="bi bi-house"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd"
                                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg></a></li>

                            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                                class=" flex-inline text-white  font-medium rounded-lg text-sm  text-center  items-center "
                                type="button"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="32"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow "
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 572px);">
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
        <!-- Main -->

        <div class="p-3  pt-4 max-w-screen-xl mx-auto text-gray-500 ">
            <h1 class="text-2xl pb-2 text-center italic ">Painel de controle</h1>

            <div class=" grid justify-center gap-6 mt-2 mb-6 md:grid-cols-4 w-9/12 mx-auto ">

                <div>
                    <label for="cadLivro" class="sr-only">Cadastro de Obras</label>
                    <a href="../cadastrarLivro/index.php"><button
                            class="uppercase bg-green-600 text-white ring text-sm rounded-md  p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50 "
                            id="cadLivro">Cadastro de Obras
                            <svg xmlns="http://www.w3.org/2000/svg" class="m-auto" width="4rem" height="4rem"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="#fefefe"
                                    d="M19 2.01H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.998 5 19.815 5 19.01c0-.101.009-.191.024-.273c.112-.575.583-.717.987-.727H20c.018 0 .031-.009.049-.01H21V4.01c0-1.103-.897-2-2-2zm0 14H5v-11c0-.806.55-.988 1-1h7v7l2-1l2 1v-7h2v12z" />
                            </svg></button></a>
                </div>

                <div>
                    <label for="cadUsers" class="sr-only">Cadastro de Usuarios</label>
                    <a href="../cadastrousuario/index.php"><button
                            class="uppercase bg-green-600 text-white text-sm  rounded-md ring p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50 "
                            id="cadUsers">Cadastro de Usuarios
                            <svg xmlns="http://www.w3.org/2000/svg" class="m-auto" width="4rem" height="4rem"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                <path fill="#fefefe"
                                    d="M16 8a5 5 0 1 0 5 5a5 5 0 0 0-5-5Zm0 8a3 3 0 1 1 3-3a3.003 3.003 0 0 1-3 3Z" />
                                <path fill="#fefefe"
                                    d="M16 2a14 14 0 1 0 14 14A14.016 14.016 0 0 0 16 2Zm-6 24.377V25a3.003 3.003 0 0 1 3-3h6a3.003 3.003 0 0 1 3 3v1.377a11.899 11.899 0 0 1-12 0Zm13.992-1.451A5.002 5.002 0 0 0 19 20h-6a5.002 5.002 0 0 0-4.992 4.926a12 12 0 1 1 15.985 0Z" />
                            </svg>
                        </button></a>
                </div>

                <div>
                    <label for="cadAcervo" class="sr-only">Cadastro de Acervo</label>
                    <a href="../createcollection/"><button
                            class="uppercase bg-green-600 text-sm text-white rounded-md ring p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50">
                            Cadastro De Acervo <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" class="m-auto"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <path fill="#fefefe"
                                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
                                </svg> </button></a>
                </div>

                <div>
                    <label for="listUsers" class="sr-only">Listagem e edição de usuarios</label>
                    <a href="../listuser/index.php"><button
                            class="uppercase text-sm bg-green-600 text-white  rounded-md ring p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50 "
                            id="listUsers">Listagem e edição de usuarios
                            <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" class="mx-auto" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="currentColor" d="M144 80a8 8 0 0 1 8-8h96a8 8 0 0 1 0 16h-96a8 8 0 0 1-8-8Zm104 40h-96a8 8 0 0 0 0 16h96a8 8 0 0 0 0-16Zm0 48h-72a8 8 0 0 0 0 16h72a8 8 0 0 0 0-16Zm-98.3 22a7.9 7.9 0 0 1-5.7 9.7l-2 .3a8.1 8.1 0 0 1-7.8-6a56 56 0 0 0-108.4 0a8 8 0 0 1-9.8 5.7a7.9 7.9 0 0 1-5.7-9.7a72 72 0 0 1 40.6-47.9a48 48 0 1 1 58.2 0a72 72 0 0 1 40.6 47.9ZM80 136a32 32 0 1 0-32-32a32.1 32.1 0 0 0 32 32Z"/></svg>
                        </button></a>
                </div>

                <div>
                    <label for="cadLivro" class="sr-only">Listagem e ediçao de Obras</label>
                    <a href="../editbook/index.php"><button
                            class="uppercase bg-green-600 text-sm text-white ring  rounded-md  p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50 "
                            id="cadLivro">Listagem e ediçao de Obras
                            <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" class="mx-auto" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10 14h4v-2h-4Zm0-3h8V9h-8Zm0-3h8V6h-8ZM8 18q-.825 0-1.412-.587Q6 16.825 6 16V4q0-.825.588-1.413Q7.175 2 8 2h12q.825 0 1.413.587Q22 3.175 22 4v12q0 .825-.587 1.413Q20.825 18 20 18Zm0-2h12V4H8v12Zm-4 6q-.825 0-1.412-.587Q2 20.825 2 20V6h2v14h14v2ZM8 4v12V4Z"/></svg></button></a>
                </div>

                <div>
                    <label for="cadAcervo" class="sr-only">Listagem e ediçao de acervos</label>
                    <a href="../listcollection/index.php"><button
                            class="uppercase bg-green-600 text-sm text-white rounded-md ring p-9 transform ease-in-out duration-200 hover:scale-105 shadow-lg shadow-green-400/50">
                            Listagem e ediçao de acervos <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" class="mx-auto" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M8.42 10.61a2.1 2.1 0 1 1 2.97 2.97L5.95 19L2 20l.99-3.95l5.43-5.44Z"/><path d="M2 11.5V5c0-1.1.9-2 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H20a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-9.5"/></g></svg></a>
                </div>

            </div>



        </div>



    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
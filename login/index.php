<?php
include_once("../php/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="styles.css">




    <title>Biblioteca IFFAR</title>



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

<body class=" font-roboto bg-gradient-to-r min-h-screen from-emerald-500 via-green-500 to-green-500 relative flex  ">

    <div>
        <img src="img2.png" alt="Logo IFF" class=" flex  absolute right-16 mr-56 mt-32 h-52 w-40 2xl:mt-52 2xl:mr-96 ">
    </div>
    <div class=" bg-slate-50 mt-16 my-auto 2xl:mt-36 ml-32 2xl:ml-48  border-1 rounded-xl px-16 py-32  ">

        <h2 class=" text-center text-5xl font-bold font-thin  tracking-tight text-black">Seja Bem Vindo</h2>
        <p class="mt-2  text-center italic text-sm text-gray-600">
            Biblioteca Institucional do Instituto Federal Farroupilha
        </p>

        <form class=" space-y-6   " action="../php/loginconfig.php" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md ">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="text" required class=" block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Email">
                </div>
                <br>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-80 appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Senha">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm">
                <a href="./signup.php" class="font-medium text-green-600 hover:text-green-500">Cadastre se aqui!</a>
                </div>

                <div class="text-sm">
                    <a href="./forgotpass.php" class="font-medium text-red-600 hover:text-red-500">Esqueceu sua senha?</a>
                </div>
            </div>

            <div>
               
            </div>

            <div>
                <button type="submit" name="submit" class="group relative flex w-80 justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2  duration-300 shadow-md shadow-green-400/50 ">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/lock-closed -->
                        <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Fazer Login
                </button>
            </div>
        </form>
    </div>

</body>

</html>
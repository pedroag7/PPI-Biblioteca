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

<body class=" font-roboto  bg-gradient-to-r min-h-screen from-emerald-500 via-green-500 to-green-500 md:relative md:flex   ">

    <div class="md:absolute md:right-16 flex my-auto">
        <img src="img2.png" alt="Logo IFF" class="  md:visible md:mr-56 md:mt-32 md:h-52 md:w-40 2xl:mt-52 2xl:mr-96   h-20  w-16 ">
        <h2 class="  text-xl my-auto  italic font-thin text-right tracking-tight text-slate-50 md:hidden "> Instituto Federal Farroupilha </h2>
    </div>
    
    <div class=" bg-white md:mt-auto md:my-auto 2xl:mt-36 md:ml-32 2xl:ml-48 rounded-xl md:px-16 md:py-16 py-4 px-4 m-auto mt-2   ">

        <h2 class=" text-center text-5xl font-bold font-thin mx-auto tracking-tight text-black">Cadastre-se</h2>
        <p class="mt-2  text-center italic text-sm text-gray-600"> Realize seu cadastro para utilizar o nosso sistema!</p>

        <form class="space-y-6 " action="../php/signup.php" method="POST">
            <div class="space-y-2.5 mt-2 rounded-md ">
                <div>
                    <label for="nome" class="sr-only">Nome</label>
                    <input id="nome" name="nome" type="text" required class=" block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Nome">
                </div>
                <div>
                    <label for="sobrenome" class="sr-only">Sobrenome</label>
                    <input id="sobrenome" name="sobrenome" type="text" required class=" block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Sobrenome">
                </div>

                <div>
                    <label for="catUser" class="block text-sm text-gray-900 sr-only ">Categoria de usuario</label>
                    <select id="catUser" name="catuser" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 block w-80  px-3 py-2 drop-shadow ">
                      <option selected>Servidor ou aluno</option>
                      <option value="SV">Servidor</option>
                      <option value="AL">Aluno</option>
                    </select>
                  </div>

                <div>
                    <label for="curso" class="block text-sm  text-gray-900 sr-only ">Curso</label>
                    <select id="curso" name="course" required="" class="bg-gray-white border border-gray-300 text-gray-500 text-sm rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 block w-80 px-3 py-2 drop-shadow ease-in duration-150 ">
                      <option selected>Escolha seu curso</option>
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
                    <label for="matricula" class="sr-only">Matricula</label>
                    <input id="matricula" name="matricula" type="text" required class=" block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Matricula/SIAP">
                </div>
                <div>
                    <label for="CPF" class="sr-only">CPF</label>
                    <input id="CPF" name="cpf" type="number" required class=" block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="CPF">
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email"  required="" class="block w-80 appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Email">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-80 appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow italic" placeholder="Senha">
                </div>
                
            </div>


            <div>
                <button type="submit" name="submit" class="group relative flex w-80 justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2  duration-300 shadow-md shadow-green-400/50 ">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/lock-closed -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.912 12H4L2.023 4.135A.662.662 0 0 1 2 3.995c-.022-.721.772-1.221 1.46-.891L22 12L3.46 20.896c-.68.327-1.464-.159-1.46-.867a.66.66 0 0 1 .033-.186L3.5 15"/></svg>
                    </span>
                    Cadastre-se
                </button>
               
                
            </div>
        </form>
    </div>

</body>

</html>

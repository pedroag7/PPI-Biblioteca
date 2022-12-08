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
    
    <div class=" bg-white md:mt-auto md:my-auto 2xl:mt-36 md:ml-32 2xl:ml-48 rounded-xl md:px-16 md:py-24 py-4 px-4 mx-auto mt-2   ">

        <h2 class=" text-center text-5xl font-bold font-thin mx-auto tracking-tight text-black">Esqueceu sua senha?</h2>
        <p class="mt-2  text-center italic text-sm text-gray-600">Contate a CTI do campus para realizar a troca</p>
        <p class="mt-2  text-center italic text-sm text-gray-600">Email: cti.fw@iffarroupilha.edu.br</p>

       
    </div>

</body>

</html>

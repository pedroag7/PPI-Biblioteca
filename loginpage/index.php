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
   

    <title>Biblioteca IFFAR</title>
    
    <style>
        <?php include 'style.css'; ?>
    </style>
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

<body class=" font-roboto">

    <div class="pt-32 sm:pl-32 lg:pl-48">
        <div class=" md:flex-inline ">
            <img src="img2.png" alt="Logo IFF" class=" absolute block sm:flex-inline right-64 space-y-16 h-48 w-36 ">

        </div>

        <div class=" w-80 space-y-8">
            <div>

                <h2 class=" text-center text-5xl font-bold tracking-tight text-black">Seja Bem Vindo</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Biblioteca Institucional
                </p>

            </div>

            <form class="mt-4 space-y-6 border-1" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="usuario" class="sr-only">Usuario</label>
                        <input id="usuario" name="usuario" type="text" required class="relative block w-80 appearance-none
                          rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 
                          focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow" placeholder="Login">
                    </div>
                    <br>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-80 appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-green-500 focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow" placeholder="Senha">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Lembrar-me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Esqueceu sua senha?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-80 justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2  duration-300 shadow-md shadow-green-400/50 ">
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
    </div>
    </div>


</body>

</html>
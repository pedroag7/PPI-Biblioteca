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


</head>

<body>
  <div class="w-full min-h-screen bg-white ">

    <header class="w-full bg-green-500 p-3 drop-shadow-sm	text-white ">
      <div class="max-w-screen-xl mx-auto flex justify-between drop-shadow">
        <h1 class=" w-8 ">
          <a href=""> <img src="img/logo.png" class="drop-shadow"></a>
        </h1>
        <nav>
          <ul class=" flex gap-x-1  font-roboto">

            <form class="flex items-center">
              <label for="buscar" class="sr-only">Pesquisar</label>
              <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 pt-0.5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <input type="text" id="buscar" class="bg-gray-50 mt-0.5 h-8 border border-slate-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 block w-full pl-10 p-2.5 placeholder:italic placeholder:text-slate-400 shadow-sm " placeholder="Pesquisar livro" required="">
              </div>
              <button type="submit" class="p-1.5 ml-2 mt-0.5 text-sm font-medium text-white bg-gray-50 rounded-lg border border-slate-300 hover:bg-sky-500  focus:ring-1 focus:outline-none focus:ring-sky-500 drop-shadow ">
                <svg class="w-5 h-5 text-gray-900 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
              </button>
            </form>

            <li class=""><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg></a></li>

            <li class=" "><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg> </a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="p-3  pt-8 max-w-screen-xl mx-auto text-gray-500 ">

      <form class="  border pl-4 pb-4 text-black border-1 rounded-lg shadow-sm w-9/12 items-center m-auto pt-2.5 ">
        <div class="grid justify-center gap-6 mb-6 md:grid-cols-2 w-9/12 m-auto">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nome</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow " placeholder="John" required="">
          </div>
          <div>
            <label for="last_name" class="block mb-2 text-sm font-medium  ">Sobrenome</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow " placeholder="Doe" required="">
          </div>
          <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">Curso</label>
            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow  " placeholder="T34" required="">
          </div>
          <div>
            <label for="matricula" class=" block mb-2 text-sm font-medium text-gray-900">Matricula/SAP</label>
            <input type=" number" id="matricula" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow  " placeholder="2022704477" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
          </div>
          <div>
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Categoria de usuario</label>
          <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 drop-shadow ">
            <option selected>Escolha uma categoria</option>
            <option value="US">Professor</option>
            <option value="CA">Aluno</option>
          </select>
          </div>
          <div>
            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">CPF</label>
            <input type="number" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow " placeholder="42350567811" required="">
          </div>
        </div>
        <div class="mb-6 w-9/12 m-auto">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
          <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow " placeholder="george@aluno.iffar.edu.br" required="">
        </div>
        <div class="mb-6 w-9/12 m-auto">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Senha</label>
          <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow " placeholder="•••••••••" required="">
        </div>
        <div class="mb-6 w-9/12 m-auto">
          <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirmar Senha</label>
          <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 drop-shadow" placeholder="•••••••••" required="">
        </div>
        <div class="flex items-start mb-6 w-9/12 m-auto">
          <div class="flex items-center h-5  ">
            <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 drop-shadow " required="">
          </div>
          <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400"><a href="#" class="text-blue-600 hover:underline "></a>.</label>
        </div>
        <button type="submit" class="text-white bg-green-500 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow-sm shadow-green-400/50 ">Enviar</button>
      </form>


    </div>



  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <div class="w-full min-h-screen bg-white ">

    <header class="w-full bg-green-500 p-3 drop-shadow-sm	text-white ">
      <div class="max-w-screen-xl mx-auto flex justify-between drop-shadow">
        <h1 class=" w-8 ">
          <a href=""><img src="logo.png" class="drop-shadow"></a>
        </h1>
        <nav>
          <ul class=" flex gap-x-1  font-roboto">
            <div class="">
              <form action="" method="GET" class="border-2 w-68 h-10 flex rounded-lg drop-shadow">

                <input id="search" name="search" type="text"  class=" ml-2 mt-1 w-48 h-7 text-sm rounded-lg border border-gray-300 
                text-gray-900 placeholder-gray-500 placeholder-bg-gray-100 focus:z-10 focus:border-green-500
                 focus:outline-none focus:ring-green-500 sm:text-sm drop-shadow" placeholder=" Buscar livro ">
                <button id="submit" type="submit" class=" pl-9" value="Buscar"> <i> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg> </i></button>
              </form>
            </div>
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
  </div>

</body>

</html>
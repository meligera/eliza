<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Eliza Makes</title>

    </head>
    <body class="text-gray-600">

  <div class="grid md:grid-cols-3">
    <div class="md:col-span-1">
      <nav>
        <div>
          <h1 class="font-bold uppercase p-4 border-b border-gray-100">
            <a href="/">Eliza Makes</a>
          </h1>
        </div>
        <ul>
          <li class="text-gray-700 font-bold">
            <a href="#">
              <span>Главная</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Обо мне</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Контакты</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  
    <main class="px-16 py-6 md:col-span-2 bg-gray-100">
      <div class="flex justify-center md:justify-end">
        <a href="#" class="text-primary">Войти</a>
        <a href="#" class="text-primary ml-2">Зарегистрироваться</a>
      </div>

      <header>
        <h2 class="text-gray-700 text-6xl font-semibold">Уроки DIY</h2>
        <h3 class="text-2xl font-semibold">Для начинающих</h3>
      </header>

      <div>
        <h4 class="font-bold pb-2 mt-12 border-b border-gray-200">Последние работы</h4>
  
        <div class="mt-8 grid lg:grid-cols-3 gap-10">
          <!-- cards go here -->
          <div class="card"> 
            <img src="img/snowman.jpeg" alt="snowman" class="h-32 sm:h-48 w-full object-cover">
            <div class="m-4">
              <span class="font-bold">Снеговик Паша</span>
              <span class="block text-gray-500 text-sm">Елизавета Мамренко</span>
            </div>
            <div class="badge">
              <span>25 mins</span>
            </div>
          </div>
          <div class="card"> 
            <img src="img/polarbear.jpeg" alt="polarbear" class="h-32 sm:h-48 w-full object-cover">
            <div class="m-4">
              <span class="font-bold">Арктический миша</span>
              <span class="block text-gray-500 text-sm">Елизавета Мамренко</span>
            </div>
            <div class="badge">
              <span>25 mins</span>
            </div>
          </div>
          <div class="card"> 
            <img src="img/doll.jpeg" alt="doll" class="h-32 sm:h-48 w-full object-cover">
            <div class="m-4">
              <span class="font-bold">Кукла-симпотяга</span>
              <span class="block text-gray-500 text-sm">Елизавета Мамренко</span>
            </div>
            <div class="badge">
              <span>25 mins</span>
            </div>
          </div>
          <div class="card"> 
            <img src="img/santa.jpeg" alt="santa" class="h-32 sm:h-48 w-full object-cover">
            <div class="m-4">
              <span class="font-bold">Дед Мороз</span>
              <span class="block text-gray-500 text-sm">Елизавета Мамренко</span>
            </div>
            <div class="badge">
              <span>25 mins</span>
            </div>
          </div>
        </div>

        <h4 class="font-bold pb-2 mt-12 border-b border-gray-200">Самое популярное</h4>

        <div class="mt-8">
          <!-- cards go here -->
        </div>
      </div>

      <div class="mt-12 flex justify-center">
        <div class="bg-secondary-100 text-secondary-200">Загрузить далее</div>
      </div>    
    </main>
  </div>

</body>
</html>

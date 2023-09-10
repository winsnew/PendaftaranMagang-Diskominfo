<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="antialiased">
    <nav class="sticky top-0 z-10 bg-red-500 border-red-500 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="https://diskominfo.semarangkota.go.id//uploads/infoumum/20200117084655-2020-01-17infoumum084654.png" class="h-10 mr-10 ml-5" alt="Flowbite Logo" />
            <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            @if (Route::has('login'))
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-red-500 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @auth    
                    <li>
                        <a href="{{ url('/dashboard') }}" class="block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-amber-300 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                                @else
                                <li>
                                    <a href="/" class="block px-0 py-2 text-white hover:bg-yellow-300 dark:hover:bg-gray-600 dark:hover:text-white">Beranda</a>
                                </li>
                                <li>
                                    <a href="/galeri" class="block px-0 py-2 text-white hover:bg-yellow-300 dark:hover:bg-gray-600 dark:hover:text-white">Galeri</a>
                                </li>
                                <li>
                                    <a href="/kontak" class="block px-0 py-2 text-white hover:bg-yellow-300 dark:hover:bg-gray-600 dark:hover:text-white">Kontak</a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}" class="block px-0 py-2 text-white hover:bg-yellow-300 dark:hover:bg-gray-600 dark:hover:text-white">Masuk</a>
                                </li>
                                <li>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="block pr-3 pl-0 py-2 text-white hover:bg-yellow-300 dark:hover:bg-gray-600 dark:hover:text-white">Daftar</a>
                                    @endif

                                </li>

                            </ul>
                            @endauth
                    </li>
                </ul>
            </div>
            @endif
        </div>
        </div>
    </nav>
    <section class="background-radial-gradient mb-40">
  <!-- Jumbotron -->
  <div class=" bg-red-600 px-6 py-16 text-center md:px-12 lg:text-left">
    <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <div class="mt-8 lg:mt-0">
          <h6 class="mt-0 mb-8 text-1xl tracking-tight md:text-2xl xl:text-3xl text-[hsl(218,81%,95%)]">
            Diskominfo<span class="text-yellow-300">/Galeri</span>
          </h6>
          <h2 class="mt-0 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl text-[hsl(218,81%,95%)]">
            Galeri Magang
          </h2>
        </div>
        <div class="mb-12 lg:mb-0">
          <img src="images/magang2.png"
            class="w-full rounded-lg " alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <style>
        .zoom:hover img {
          transform: scale(1.1);
        }
      </style>
      <h2 class="mb-12 text-center text-3xl font-bold">Galeri</h2>
      <div class="grid gap-6 lg:grid-cols-3">
        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://www.sampoernauniversity.ac.id/wp-content/uploads/2023/02/Screenshot-2023-02-20-235729a.png"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small
                      >Posting <u>1.09.2023</u> oleh Admin</small
                    >
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>

        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://diskominfo.kalteng.go.id/files/berita/14092022035751_0.png"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small>Posting <u>12.01.2023</u> oleh Admin</small>
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>

        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://bengkuluutarakab.go.id/wp-content/uploads/5c227137-9c6d-4272-8a56-ffa44a4f09b8.jpg"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small
                      >Posting <u>10.01.2023</u> oleh Admin</small
                    >
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>

        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://sumbarprov.go.id/images/2021/08/Mahasiswa.jpeg"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small>Posting <u>09.01.2023</u> oleh Admin</small>
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>

        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://palopopos.fajar.co.id/wp-content/uploads/2022/07/Tugas-III-Salman-dan-Zulfadli-foto.jpeg"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small>Posting <u>07.01.2022</u> oleh Admin</small>
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>

        <div
          class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
          data-te-ripple-init
          data-te-ripple-color="light">
          <img
            src="https://jatengprov.go.id/wp-content/uploads/2019/01/pkl-1024x683.jpg"
            class="w-full align-middle transition duration-300 ease-linear" />
          <a href="#!">
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
              <div class="flex h-full items-end justify-start">
                <div class="m-6 text-white">
                  <p>
                    <small>Posting <u>04.01.2022</u> oleh Admin</small>
                  </p>
                </div>
              </div>
            </div>
            <div
              class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
          </a>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
<!-- Footer container -->
<footer
  class="bg-red-600 text-center text-white dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
  <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Tailwind Elements section -->
      <div class="">
          <a href="/" class="flex items-center mb-4">
            <img src="https://diskominfo.semarangkota.go.id//uploads/infoumum/20200117084655-2020-01-17infoumum084654.png" class="h-14 mr-3" alt="FlowBite Logo" />
          </a>
        <p class="mb-4 flex items-center justify-center md:justify-start" >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
            <path
              d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
          </svg>
          Sekayu, Kec. Semarang 
          <br>Tengah, Kota Semarang, 
          <br>Jawa Tengah 50132
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start" >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path
              d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
          </svg>
          diskominfo@semarangkota.go.id
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
              clip-rule="evenodd" />
          </svg>
          (024)3549446
        </p>
      </div>
      <!-- Link section -->
      <div class="">
      <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Link Terkait
        </h6>
        <a clas="hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200" href="https://semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          Semarang Kota
        </p></a>
        <a href="https://smartcity.semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          SmartCity
        </p></a>
        <a href="https://diskominfo.semarangkota.go.id/tel:112">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          Call Center 112
        </p></a>
        <a href="https://p3m.semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          P3M
        </p></a>
        <a href="https://opendata.semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          Open Data
        </p></a>
        <a href="https://ppid.semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          PPID
        </p></a>
        <a href="https://pip.semarangkota.go.id/">
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg class="w-5 h-5 mr-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
          PIP
        </p></a>
      </div>
      <!-- Contact section -->
      <div class="mb-4 flex  justify-center font-semibold uppercase md:justify-start">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2176680560888!2d110.4114584147208!3d-6.983619694954946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4fd277d06b%3A0x4056bfa9e8303c06!2sDinas%20Kominfo%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1579572986664!5m2!1sid!2sid" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
  </div>
  <div
    class="flex items-center justify-center border-b-2 bg-gray-900 border-gray-800 p-6 dark:border-gray-800">
    <div class="flex justify-center">
      <a href="#!" class="mr-6 text-white dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-white dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-white dark:text-neutral-200">
        <svg class="h-4 w-4 text-white aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
        </svg>
      </a>
      <a href="#!" class="mr-6 text-white dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>
      <a href="#!" class="mr-6 text-white dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </a>
    </div>
  </div>
  <!--Copyright section-->
  <div class="bg-gray-900 p-6 text-center dark:bg-neutral-700">
    <span>© 2023 Copyright:</span>
    <a
      class="font-semibold text-white dark:text-neutral-400"
      href="/"
      >Dinas Kominfo Kota Semarang</a>
  </div>
</footer>
</body>
</html>
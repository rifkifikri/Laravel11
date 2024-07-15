<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Installation Tailwind-->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
</head>
<body class="h-full">
   <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">

    <x-navbar></x-navbar>
    <!-- variabel $title dan $nyut merupakan variabel kiriman dari halaman home dan blog untuk menampilkan data setiap halaman yang berbeda. jika variabel disini ada maka diseluruh halaman yang menggunakan layout juga harus terdapat x-slot untuk menampilkan data tersebut -->
    <x-header>{{$title}}</x-header:title>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
     {{ $slot }}
     {{$nyut}}
    </div>
  </main>
</div>

</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <style>
    .scroll-bar-w-0::-webkit-scrollbar {
  width: 0px;
}

  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>
<body>
        <main >
            {{ $slot}}
        </main>
</body>
</html>
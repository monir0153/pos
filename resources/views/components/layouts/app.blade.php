
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    .scroll-bar-w-0::-webkit-scrollbar {
  width: 0px;
}

  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>
<body>
        <main >
            {{ $slot}}
        </main>
</body>
</html>
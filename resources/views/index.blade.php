<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lara Auth</title>
  
  @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">

<nav>
  <x-layout>

  </x-layout>    
</nav>

  <h1>Welcome to Lara Auth</h1>
  <p>A Simple Laravel Authentication System.</p>

  {{-- <a href="/ninjas" class="btn mt-4 inline-block">
    Find Ninjas!
  </a> --}}
</body>
</html>
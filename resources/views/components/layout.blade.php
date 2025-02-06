<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lara Auth</title>

  @vite('resources/css/app.css')
</head>
<body>
  @if (session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
      {{ session('success') }}
    </div>
  @endif
  
  <header>
    <nav>
      <h1>
        <a href="/">Lara Auth</a>
      </h1>
      @guest
        <a href="{{ route('show.register') }}" class="btn">Register</a>
        <a href="{{ route('show.login') }}" class="btn">Login</a>
      @endguest

      @auth
        <span class="border-r-2 pr-2">
          Welcome, {{ Auth::user()->name}}
        </span>
        <form action=" {{ route('logout') }} " method="post" class="m-0">
          <button class="btn">Logout</button>
        </form>
      @endauth
    </nav>
  </header>

  <main class="container">
     
  </main>

</body>
</html>
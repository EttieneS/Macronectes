<!doctype html>

<title> Mimus Video Vault </title>
<link rel="stylesheet" href="/app.css">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark @if(auth()->check()) bg-dark @else bg-info @endif">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
           <span class="navbar-toggler-icon"></span>
       </button>
    </nav>
</header>

<body>
    @yield('content')
</body>

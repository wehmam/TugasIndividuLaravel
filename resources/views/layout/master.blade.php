<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/contact">Imam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/">Home</a>
            <a class="nav-item nav-link" href="/produk">Product</a>
            <a class="nav-item nav-link" href="/contact">Pricing</a>
          </div>
        </div>
      </nav>
    
    @yield('konten')

    <script src="/bootstrap/jquery-3.4.1.min.js"></script>
    <script src="/bootstrap/popper.min.js"></script>
    <script src="/bootstrap/bootstrap.min.js"></script>
    @yield('query')
    
</body>
</html>
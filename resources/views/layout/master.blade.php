<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="/src/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink mb-5" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger font-weight-bold text-white" href="#page-top">Imam Maulana Ashari</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bold text-white" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bold text-white" href="/produk">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger font-weight-bold text-white" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    @yield('konten')

   
    <script src="bootstrap/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script>
     $(window).scroll(function(){
    var y = $(window).scrollTop();

    if(y >=800){
      $('.navbar')
      .fadeOut(1000).css({
        'backgroundColor' : 'transparent'
      })
    }else{
      $('.navbar').fadeIn(1000)
    }
  })
    </script>
    @yield('query')
    
</body>
</html>
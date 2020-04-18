@extends('layout.master')

@section('title','Home')
    

@section('konten') 
    <section style="overflow-x:hidden;">
        <div class="row MB-5" style="">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="/img/1.jpg" class="d-block w-100 mx-auto" style="height:100vh" alt="...">
                          <div class="carousel-caption d-none d-md-block m-5">
                            <h1 class="text-white font-weight-bold display-1">Imam Maulana Ashari</h1>
                            <h1 class="font-italic">Fullstack Web Developer</h1>
                            <a href="#about" id="about" class="btn btn-danger">About ME</a>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <div class="container MT-5" style="height:100vh">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                <h1 id="about" >About me</h1>
                <hr class="w-50" style="border:1px solid #dedede">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                <img src="/img/1.jpg" class="img-fluid rounded-circle w-50" alt="">
                <h1 class="mt-5">Imam Maulana Ashari</h1>
                <h5 class="text-muted">Fullstack Web Developer</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="card-deck">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/img/1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/img/1.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/img/1.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('query')
    <script>
        $(document).ready(function(){
          $('#about').click(function(){
            $('html,body').animate({
              scrollTop: $($(this).attr('href') ).offset().top
            },1000);return false;
          })
        })
    </script>
@endsection
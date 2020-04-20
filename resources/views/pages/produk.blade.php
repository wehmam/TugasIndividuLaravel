@extends('layout.master')

@section('title','Product')
    

@section('konten') 
    <section style="overflow-x:hidden;height:100vh;background:url(/img/4.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:fixed" >
        <div class="container" style="margin-top:500px">
            <div class="row text-center mt-5">
                <div class="col-md-12 mt-5">
                    <h1 class="text-white font-weight-bold mt-5 display-1 text-uppercase">Product</h1>
                    <h2 class="font-weight-bold text-white">Love each other</h2>
                    <a href="#To" id="To" class="btn btn-danger font-weight-bold mt-3 w-25">Our Product</a>
                </div>
            </div>
        </div>  
    </section>
   

    
        <div class="container-fluid" style="height:100vh">
            <div class="row">
                <div class="col-md-12">

                    <nav>
                        <div class="nav nav-tabs justify-content-center mt-5" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Car</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Spareparts</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rims</a>
                        </div>
                      </nav>
                    
                    <div class="tab-content" id="nav-tabContent">
                    
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-center font-weight-bold text-uppercase" id="To">Car</h1>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 mt-5">
                                    @for($i=1;$i <= 6;$i++)
                                        <div class="col mb-4 mt-3">
                                            <div class="card">
                                            <img src="/img/car_img/{{ $i }}.jpg" class="card-img-top img-fluid" style="height: 250px"   alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Konten {{ $i }}</h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-center font-weight-bold text-uppercase">SparePart</h1>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mt-5">
                                    @for($i=1;$i <= 6;$i++)
                                        <div class="col mb-4 mt-3">
                                            <div class="card">
                                            <img src="/img/{{ $i }}.jpg" class="card-img-top img-fluid" style="height: 400px"  alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Konten {{ $i }}</h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-center font-weight-bold text-uppercase">Rims</h1>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mt-5">
                                    @for($i=1;$i <= 6;$i++)
                                        <div class="col mb-4 mt-3">
                                            <div class="card">
                                            <img src="/img/{{ $i }}.jpg" class="card-img-top img-fluid" style="height: 400px"  alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Konten {{ $i }}</h5>
                                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                      
                    </div>

                </div>
            </div>
        </div>





    
          
        </div>
    </div>
@endsection
@section('query')
    <script>
        $(document).ready(function(){
          $('#To').click(function(){
            $('html,body').animate({
              scrollTop: $($(this).attr('href') ).offset().top
            },1000);return false;
          })
        })
    </script>
@endsection
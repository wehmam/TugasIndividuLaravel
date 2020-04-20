@include('includes.header')
    

<section style="overflow-x:hidden;height:100vh;background:url(/img/1.jpg);background-size:cover;background-repeat:no-repeat;background-attachment:fixed" >
    <div class="container" style="margin-top:500px">
        <div class="row text-center mt-5">
            <div class="col-md-12 mt-5">
                <h1 class="text-white font-weight-bold mt-5 display-1 text-uppercase">Contact US</h1>
                <h2 class="font-weight-bold text-white">Love each other</h2>
                <a href="#About" id="prdct" class="btn btn-danger font-weight-bold mt-3 w-25">Our Product</a>
            </div>
        </div>
    </div>  
</section>

<div class="container-fluid" style="height:100vh;">
    <div class="row mt-5">
        <div class="col-md-12 mt-5 text-center">
            <h1 id="About" class="font-weight-bold">Contact us</h1>
            <hr class="w-25" style="border:1px solid black">
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
@include('includes.footer')
<script>
    $(document).ready(function(){
      $('#prdct').click(function(){
        $('html,body').animate({
          scrollTop: $($(this).attr('href') ).offset().top
        },1000);return false;
      })
    })
</script>
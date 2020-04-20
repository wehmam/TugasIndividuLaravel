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

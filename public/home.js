$(window).scroll(function(){
    var y = $(window).scrollTop();

    if(y >=10){
      $('#navbar').css({
        'backgroundColor' : 'red'
      })
    }else{
      $('#navbar').css({
        // 'backgroundColor' : 'transparent'
      })
    }
  })
//jQuery no conflict wrapper
jQuery(document).ready(function($){
    
//Fixes the bootstrap mobile menu icon not toggling correctly
$(".navbar-toggle").click(function(event) {
    $(".navbar-collapse").toggle('in');
});

  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
  
    

});





    
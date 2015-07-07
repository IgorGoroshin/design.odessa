  $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "slide",  // slide or fade
          controlsContainer: ".flex-container" // the container that holds the flexslider
    });
  });
  
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});
$(function(){
    $('#block img').adipoli({
        'overlayText' : '<b>overLayText</b>',
        'startEffect' : 'transparent',
        'hoverEffect' : 'normal'
    });
});
$(function(){
    $('#adipoli img').adipoli({
        'overlayText' : '<b>site engine powered by ImagesModel web studio copyright Ihor Horoshyn</b>',
        'startEffect' : 'transparent',
        'hoverEffect' : 'normal'
    });
});
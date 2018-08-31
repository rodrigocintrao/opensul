function anchorSlide() {
    var $doc = $('html, body');
    $('.header a').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 800);
        return false;
    });
    }
  
function sliders() {
    $(".slider").slick({
      autoplay: true,
      pauseOnFocus: false,
      autoplaySpeed: 5000
    });
  
    $(".slider-represented").slick({
      speed: 300,
      autoplay: true,
      pauseOnFocus: false,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }
        ]
    });
}
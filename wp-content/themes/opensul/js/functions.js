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

function posicionaMenu() {

  var windowsWidth = $(window).outerWidth();
  var subMenus = $('.sub-menu');
  var subMenu = $(subMenus[0]);
  var subMenuWidth = subMenu.outerWidth();
  
  var leftValue = (windowsWidth - subMenuWidth)/2;

  if(windowsWidth >= 1000){
    subMenu.css('left',leftValue);
  } else {
    subMenu.css('left',0);
  }
}

function mostraOcultaMenu() {
  var windowsWidth = $(window).outerWidth();
  var subMenus = $('.sub-menu');
  var subMenu = $(subMenus[0]);

  var itemMenuPai = $('.nav>li');

  if(windowsWidth >= 767) {

    itemMenuPai.on('mouseover', function(){
      $(this).children('.sub-menu').stop().fadeIn(300);
    });
  
    itemMenuPai.on('mouseout', function(){
      $(this).children('.sub-menu').stop().fadeOut(300);
    });
  } else {

    itemMenuPai.off('mouseover');
  
    itemMenuPai.off('mouseout');

    var linkPrevSubMenu = subMenu.prev('a');
    $(linkPrevSubMenu).on('click', function(e){
        e.preventDefault();
      });

    $(itemMenuPai).children('a').on('click', function(){
      $(this).next('.sub-menu').toggle();
    });
  }
}

function fixarMenu() {

  if($(window).outerWidth() >= 768){
    var corpoSite = $('body');
    var alturaMenu = $('.header-nav').outerHeight();
    var $meuMenu = $('.header-nav'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {
        if (alturaMenu <= $(window).scrollTop()) {
            $meuMenu.addClass('fixar-menu');
            corpoSite.css('padding-top',alturaMenu);
        } else {
            $meuMenu.removeClass('fixar-menu');
            corpoSite.css('padding-top',0);
        }
    });
  } else {
    $(document).off('scroll');
  }
}

function executaMenuResize() {
  $(window).resize(function(){
    posicionaMenu();
    mostraOcultaMenu();
    fixarMenu();
  });
}

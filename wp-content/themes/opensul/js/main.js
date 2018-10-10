$(function(){

  mostraOcultaMenu();
  posicionaMenu();
  executaMenuResize();
  
  App.init();

});

var App = function() {

  return { init: init };

  function init() {

    anchorSlide();
    sliders();

    new WOW().init();
    
  }

}();

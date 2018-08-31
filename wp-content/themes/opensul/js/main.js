$(function(){

  App.init();

});

var App = function() {

  return { init: init };

  function init() {
    new WOW().init();
    anchorSlide();
    sliders();
  }

}();

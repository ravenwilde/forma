$(document).ready(function(){
  $('.js-menu-trigger').on('click touchstart', function(e){
    $('.js-menu').toggleClass('is-visible');
    $('.js-menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });

  $('.js-menu-screen').on('click touchstart', function(e){
    $('.js-menu').toggleClass('is-visible');
    $('.js-menu-screen').toggleClass('is-visible');
    e.preventDefault();
  });
});

$(document).ready(function() {
  //var expanderTrigger = document.getElementById("js-expander-trigger");
  //var expanderContent = document.getElementById("js-expander-content");

  var expanderTrigger = $(".expander-trigger");
  var expanderContent = $(".expander-content");

  expanderTrigger.click(function(){
    $(this).toggleClass("expander-hidden");
  });
});
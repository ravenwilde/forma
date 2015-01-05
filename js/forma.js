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

(function (jQuery) {
  jQuery.mark = {
    jump: function (options) {
      var defaults = {
        selector: 'a.scroll-on-page-link'
      };
      if (typeof options == 'string') defaults.selector = options;
      var options = jQuery.extend(defaults, options);
      return jQuery(options.selector).click(function (e) {
        var jumpobj = jQuery(this);
        var target = jumpobj.attr('href');
        var thespeed = 600;
        var offset = jQuery(target).offset().top;
        jQuery('html,body').animate({
          scrollTop: offset
        }, thespeed, 'swing')
        e.preventDefault();
      })
    }
  }
})(jQuery);


jQuery(function(){  
  jQuery.mark.jump();
});

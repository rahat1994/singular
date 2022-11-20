  $(document).ready(function() { 

   
//Aimation Script
 $('body').waypoint(function() {
    new WOW().init();
  },
  {
    offset: '100%',
  });

  //Back Top Script
  var backtop = $('.singular-back-top');
  var position = backtop.offset().top;
  $(window).scroll(function() {
    var windowposition = $(window).scrollTop();
    if(windowposition + $(window).height() == $(document).height()) {
      backtop.removeClass('active');
    }
    else if (windowposition > 150) {
      backtop.addClass('active');
    }
    else {
      backtop.removeClass('active');
    }
  });
  jQuery('.singular-back-top a').click(function () {
    jQuery('body,html').animate ({
      scrollTop: 0
    }, 2000);
    return false;
  });

   //mobile footer menu Script
   var windowWidth = $(window).width();
    if(windowWidth<=767){
  $('footer .footer-menu').click( function() {
    $(this).toggleClass('block-menu').siblings().removeClass('block-menu').children('ul').slideUp();
    $(this).children('ul').slideToggle();
    });
}

//mobile User Order Script
var windowWidth = $(window).width();
if(windowWidth<=767){
    $('.user-login').insertBefore('.first');
    }

//mobile User Order Script
    $(".navbar-toggler").click(function(){
      $("body").toggleClass("overflow");
    });

//Toggle Script
    $(".navbar-toggler").click(function(){
      $(".navbar-collapse").toggle();
    });

     // Add slideDown animation to Bootstrap dropdown when expanding.
  $('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });

//Preloader Script
  $(window).load(function() {
    $('.singular-preloader').fadeOut(500);
  });
    

});

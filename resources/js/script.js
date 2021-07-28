$(document).ready(function() {

    $(".js--section-about").waypoint(function(direction) {
        if(direction == "down"){
            $("nav").addClass('sticky');
        } else{
            $("nav").removeClass('sticky');
        }
          },{
            offset: '60px;'
          });

    $(".js--order").click(function () {
        $("html, body").animate(
          {
            scrollTop: $(".js--product-section").offset().top
          },
          1000
        );
    });

    /* Navigation scroll */
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });

      $(".js--wp-1").waypoint(function(){
        $(".js--wp-1").addClass("animated fadeInUp");
      },
      {
        offset: "50%"
      });

      $(".js--wp-2").waypoint(function(){
        $(".js--wp-2").addClass("animated fadeInLeft");
      },
      {
        offset: "50%"
      });
});
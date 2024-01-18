jQuery(document).ready(function($) {
    // Smooth scroll to top
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 2000);
        return false;
    });

    // Show/hide the scroll-to-top button based on scroll position
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
});


//footer link
jQuery(document).ready(function($) {
   // Smooth scroll to menu anchor links
   $('a.scroll-link[href^="#"]').on('click', function(event) {
       var target = $($(this).attr('href'));
       if (target.length) {
           event.preventDefault();
           $('html, body').animate({
               scrollTop: target.offset().top
           }, 1500);
       }
   });
});

 
 //Navbar Menu
 $(document).ready(function () {
    // Smooth scroll on click for navigation links in the navbar
    $('nav a.nav-link').on('click', function (event) {
      if (this.hash !== '') {
        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1200, function () {
          window.location.hash = hash;
        });
      }
    });
  });

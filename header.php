<!doctype html>
<html class="no-js" lang="zxx" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php
          bloginfo('name');
          if (wp_title('', false)) {
            echo ' |';
          } else {
            echo bloginfo('description');
          }
          wp_title('');
          ?></title>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= get_bloginfo('name'); ?></title>
  <!-- AOS Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Model Viewer -->
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>

  <!-- Latest jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-dT9xobUJTDuH9eexQ+Us9ByBF0rHfD5cxUtd2dtA6VHJ8r62F0b4BFq/9H2F6uGyU2D3FojW9mALmoW/m9I53w==" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e6535bfde2.js" crossorigin="anonymous"></script>

  <!-- typing  -->
  <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js" type="module"></script>

  <style>
    /* #Nav_id {
      background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/background/background.jpg');

      background-size: cover;

      background-position: center center;
     
    } */


    section#testimonials {
      /* background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/background/bn17.jpg');
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      height: 700px; */
      background-color: rgba(0, 0, 0, 0.8);
    }
    /* .cta {
          background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/background/Parallax.jpg');
          background-size: cover;
          padding: 80px 0;
        } */
    #cta {
      background-image: url('<?php echo get_template_directory_uri() ?>/black_bubble.jpg');
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      padding: 100px 0;
    }

    section#hero {
      background-image: url('<?php echo get_template_directory_uri() ?>/black-smooth-textured-paper-background.jpg');
      background-attachment: fixed;
      /* background-position: center; */
      background-size: cover;
      padding: 130px 0;
}
  </style>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- ======= Header ======= -->
  
  

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="Nav_id">
  <div class="container-fluid">
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    if (has_custom_logo()) {
      echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '"><img id="logo" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" height="30"></a>';
    } else {
      echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '"><h1>' . get_bloginfo('name') . '</h1></a>';
    }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary', // Use the 'primary' menu location
        'menu_class' => 'navbar-nav', // Apply the Bootstrap navbar classes
        'container' => false, // Remove the outer <div> container
        'items_wrap' => '<ul id="%1$s" class="%2$s me-auto my-2 my-lg-0 navbar-nav-scroll">%3$s</ul>', // Customize the menu wrapper
        'fallback_cb' => false, // Do not fallback to wp_page_menu if there's no menu
      ));
      ?>
    </div>
  </div>
</nav>






  <script>
    // Add the 'active' class to the current section in view
    $(document).ready(function() {
      $(window).scroll(function() {
        var scrollPos = $(document).scrollTop();
        $('nav ul.navbar-nav li a').each(function() {
          var currLink = $(this);
          var refElement = $(currLink.attr('href'));
          if (
            refElement.position().top <= scrollPos + 100 &&
            refElement.position().top + refElement.height() > scrollPos
          ) {
            $('nav ul.navbar-nav li').removeClass('active');
            currLink.parent().addClass('active');
          } else {
            currLink.parent().removeClass('active');
          }
        });
      });
    });


    // Sticky 
    // JavaScript for sticky navbar with smooth transition
  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('Nav_id');
    if (window.scrollY > 50) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });
  </script>

<style>
  /* CSS for changing navbar color and applying transition */
  #Nav_id {
    transition: background-color 0.5s ease, padding 0.5s ease;
  }
  .navbar-light.fixed-top {
    background-color: transparent !important;
    padding: 20px 0 !important; /* Initial padding */
    transition: background-color 0.5s ease, padding 0.5s ease;
  }
  .navbar-light.fixed-top.navbar-scrolled {
    background-color: white !important;
    padding: 10px 0 !important; /* Adjusted padding */
  }

  .navbar-light.fixed-top.navbar-scrolled a{
    color: black !important;
  }
  .navbar-light.fixed-top.navbar-scrolled a:hover{
    color: #000000;
      background-color: #f5c615;
      /* border: 0.4px solid; */
  }
  .navbar-light .navbar-nav .nav-link {
    color: rgb(255 255 255);
}
  .navbar-light.fixed-top {
   color: white !important;;
  }

  ul#menu-menu-1 {
    display: flex;
    align-items: center;
}
</style>
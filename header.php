<!doctype html>
<html class="no-js" lang="zxx" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>" >
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo ' |';
        } else {
            echo bloginfo('description');
        } wp_title('');
        ?></title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=get_bloginfo( 'name' );?></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

            <!-- Model_Viewer  -->
            <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
          header.fixed-top {
          background-image: url('<?php echo get_template_directory_uri()?>/assets/img/background/background.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
          background-size: cover; /* Ensures the background image covers the entire header */
          background-position: center center; /* Center the background image */
        }


        section#testimonials {
          background-image: url('<?php echo get_template_directory_uri()?>/assets/img/background/team_bg.jpg');
          background-position: 100% 100%;
          background-size: cover;
          background-attachment: fixed;
          height: 700px;
        }

        /* .cta {
          background-image: url('<?php echo get_template_directory_uri()?>/assets/img/background/Parallax.jpg');
          background-size: cover;
          padding: 80px 0;
        } */
        #cta {
          background-image: url('<?php echo get_template_directory_uri()?>/assets/img/background/Parallax.jpg');
          background-attachment: fixed;
          background-position: center;
          background-size: cover;
          padding: 100px 0; /* Adjust padding as needed */
        }
        </style>
        

        <?php wp_head();?>
</head>
<body <?php body_class();?>>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
        }?>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li class="drop-down"><a href="#about">About</a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing">Pricing</a></li>

          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div> -->

    </div>
  </header><!-- End Header -->
      
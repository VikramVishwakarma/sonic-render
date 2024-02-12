<?php
get_header();
// template name:home
?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="container">
    <div class="row" id='home'>
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div class="des">
          <h1>We are 3d-designer Sonic Render</h1>
          <h2>"Unleash Your Creativity with Sonic Render 3D Design!"</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" id="model1" data-aos="fade-left">
        <!-- <img src="assets/img/hero-img.png"  alt=""> -->
        <model-viewer src="<?php echo get_template_directory_uri() ?>/Sneaker_360_Scan_PP.glb ?>" camera-controls auto-rotate style="width: 600px; height: 400px;" exposure="1.0" shadow-intensity="1.5" shadow-offset="5" background-color="#f0f0f0" shadow-softness="0.5" loading="lazy">
        </model-viewer>
      </div>
    </div>
  </div>
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>
</section><!-- End Hero -->


<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0" id='about'>
            <h3>Learn more about us</h3>
            <p class="font-italic">
              We design your Imagination.
            </p>
            <!-- <ul>
                <li><i class="icofont-check-circled"></i> 3D Assets</li>
                <li><i class="icofont-check-circled"></i> AR / VR</li>
                <li><i class="icofont-check-circled"></i> 2D to 3D</li>
                <li><i class="icofont-check-circled"></i> 3D Scan</li>
              </ul> -->
            <p>
              Welcome to our 3D design agency! We are a team of highly skilled and creative professionals who specialize in creating stunning 3D designs for a wide range of industries and clients.
              We are experts in using the latest industry software and techniques to create highly detailed and realistic 3D models. We offer a range of 3D design services, including product
              visualization, architectural visualization, character design, and more.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>We are Designer</h3>
          <p> Our portfolio showcases our team's expertise and creativity, highlighting our commitment to delivering high-quality 3D assets, immersive AR/VR experiences, and cutting-edge 3D scanning services.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#portfolio">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>SERVICES</h2>
        <p>As a provider of 3D services, our team offers a range of specialized services related to
          3D computer graphics, modeling, and design. Our services include 3D asset creation, animation,
          virtual and augmented reality development, 3D scanning, and architectural visualization.
          We work closely with our clients to understand their specific needs and provide tailored
          solutions that meet their project requirements. Our team is committed to delivering high-quality
          services that bring their ideas to life, whether it's for gaming, film and animation, product
          design, or other applications.</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
          <div class="icon-box icon-box-pink">
            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/3D Asset.png" alt=""></div>
            <h4 class="title"><a href="">3D Assets</a></h4>
            <p class="description">A digital file containing a three-dimensional object or model used in computer graphics, such as video games, virtual reality, or film and animation projects.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/AR VR.png" alt=""></div>
            <h4 class="title"><a href="">AR / VR</a></h4>
            <p class="description">Computer technologies that create immersive digital experiences, either by enhancing the real world (AR) or simulating a virtual environment (VR)</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box icon-box-green">
            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/2d.png" alt=""></div>
            <h4 class="title"><a href="">2D to 3D</a></h4>
            <p class="description">Transforming a two-dimensional image or object into a three-dimensional model using specialized software or hardware.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box icon-box-blue">
            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/3D Scan.png" alt=""></div>
            <h4 class="title"><a href="">3D Scan</a></h4>
            <p class="description">"Creating a digital 3D model of real-world objects or environments using specialized hardware and software."</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>What we do</h2>
      </div>


      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>3D Models</h4>
                <p>Portray real-world and conceptual visuals for art, entertainment, simulation and drafting.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>3D Characters</h4>
                <p>Creates a three-dimensional digital representation of a surface or an object.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>AR | VR | XR | MR</h4>
                <p>Real and/or virtual environments or interactions generated by tech.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
              <a class="nav-link" data-toggle="tab" href="#tab-4">
                <h4>3D Scan</h4>
                <p>Creating high-precision 3D models of real-world objects</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
              <a class="nav-link" data-toggle="tab" href="#tab-5">
                <h4>Brand Design</h4>
                <p>Creating a visual identity for a company or product</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <div class="card-container">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/Final.png" alt="Image Description">
                  </div>

                  <ul class="horizontal-list">
                    <li>Furniture Modeling</li>
                    <li>Product Modeling</li>
                    <li>Kitchen Appliances</li>
                    <li>Low Poly Modeling</li>
                    <li>High Poly Baking</li>
                    <li>Cosmetic</li>
                  </ul>
                </div>

              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <div class="card-container">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/tbrender_edited.jpg" alt="Image Description">
                  </div>

                  <ul class="horizontal-list">
                    <li>Animation ready 3D Model</li>
                    <li>Game Ready Character</li>
                    <li>Low Poly Model</li>
                    <li>NFT Characters</li>
                    <li>PBR Texturing</li>
                    <li>Anime Characters</li>
                    <li>Animals</li>
                    <li>2D to 3D</li>
                  </ul>
                </div>
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <div class="card-container">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/Untitled_00000_edited.png" alt="Image Description">
                  </div>

                  <ul class="horizontal-list">
                    <li>3D Model WebAR</li>
                    <li>NFT</li>
                    <li>Fashion</li>
                    <li>Architectural</li>
                    <li>VR Ready Game Assets</li>
                    <li>AR Ready 3D Models</li>
                    <li>PBR Models</li>
                  </ul>
                </div>
              </figure>
            </div>
            <div class="tab-pane" id="tab-4">
              <figure>
                <div class="card-container">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/Skull copy.png" alt="Image Description">
                  </div>

                  <ul class="horizontal-list">
                    <li>Shoes Scans PP</li>
                    <li>Shoes re-topology</li>
                    <li>Human Scan PP</li>
                    <li>Furniture Scan PP</li>
                    <li>3D Print Ready Models</li>
                    <li>3D Game Ready Models</li>
                  </ul>
                </div>
              </figure>
            </div>

            <div class="tab-pane" id="tab-5">
              <figure>
                <div class="card-container">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services/Stationery_Mockup_1K.png" alt="Image Description">
                  </div>

                  <ul class="horizontal-list">
                    <li>Logo Designing</li>
                    <li>Mock-up</li>
                    <li>Cloth Design</li>
                    <li>Flyers</li>
                    <li>Brochure Design</li>
                    <li>Visiting Card</li>
                    <li>Book Cover</li>
                  </ul>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>OUR WORK</h2>
        <p>Our portfolio showcases our team's expertise and creativity, highlighting our commitment to delivering high-quality 3D assets, immersive AR/VR experiences, and cutting-edge 3D scanning services.</p>
      </div>

      <div class="row">
        <div class="container mt-4">
          <!-- Bootstrap Tabs for Categories -->
          <ul class="nav nav-tabs" id="categoryTabs" data-aos="fade-up">
            <li class="nav-item">
              <a class="nav-link active" id="allModelsTab" data-toggle="tab" href="#allModels">All Models</a>
            </li>
            <?php
            $theme_dir = get_template_directory(); // Get the absolute path to the theme directory
            if (is_dir($theme_dir . '/model/')) {
              $sub_folders = array_diff(scandir($theme_dir . '/model/'), array('.', '..'));

              foreach ($sub_folders as $sub_folder) {
            ?>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#<?php echo $sub_folder; ?>"><?php echo $sub_folder; ?></a>
                </li>
            <?php
              }
            }
            ?>
          </ul>

          <!-- Bootstrap Tab Content -->
          <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="allModels">
              <!-- Display three models from each sub-folder in "All Models" tab -->
              <?php
              displayModels('all', 2);
              ?>
            </div>
            <?php
            foreach ($sub_folders as $sub_folder) {
            ?>
              <div class="tab-pane fade" id="<?php echo $sub_folder; ?>">
                <!-- Display all models from the specific sub-folder -->
                <?php
                displayModels($sub_folder);
                ?>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Modal Container -->
      <div class="modal fade" id="allModelsModal" tabindex="-1" role="dialog" aria-labelledby="allModelsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="close">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-8">
                  <!-- Large left side container for the model -->
                
                  <div class="box">
                  <div id="modal_model_container">
                    <!-- Model viewer will be dynamically added here -->
                  </div>
                  <div class="modal-title"></div>
                    <p>3D Model</p>
                    
                  </div>
                  
                    <div class="tag-section">
                    <ul class="tag-list">
                    <img class="tag" src="<?php echo get_template_directory_uri() ?>/assets/img/tag.png" alt="">Tag :</img>
                    <li>Animation ready 3D Model</li>
                    <li>Game Ready Character</li>
                    <li>Low Poly Model</li>
                    <li>NFT Characters</li>
                    <li>PBR Texturing</li>
                    <li>Anime Characters</li>
                    <li>Animals</li>
                    <li>2D to 3D</li>
                  </ul>
                    </div>
                    
                </div>
                <div class="col-lg-3">
                  <!-- Right side container for displaying models -->
                  <div class="row">
                    <!-- Display at least four models here -->
                   <div class="four-models">
                   <?php
                    // Assuming you want to display at least four models here
                    displayModelsInModal(4);
                    ?>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <?php
      // Function to display models from any folder in the modal
      function displayModelsInModal($maxModels)
      {
          global $theme_dir;
      
          $model_folder = $theme_dir . '/model/';
      
          if (is_dir($model_folder)) {
              $sub_folders = array_diff(scandir($model_folder), array('.', '..'));
      
              $modelsCount = 0;
      
              foreach ($sub_folders as $sub_folder) {
                  $sub_folder_path = $model_folder . $sub_folder;
      
                  if (is_dir($sub_folder_path)) {
                      $sub_folder_files = array_diff(scandir($sub_folder_path), array('.', '..'));
      
                      foreach ($sub_folder_files as $index => $sub_model_file) {
                          $sub_model_path = $sub_folder_path . '/' . $sub_model_file;
      
                          if (is_file($sub_model_path) && (strtolower(pathinfo($sub_model_file, PATHINFO_EXTENSION)) === 'obj' || strtolower(pathinfo($sub_model_file, PATHINFO_EXTENSION)) === 'glb')) {
                              ?>
                              <div class="col-md-6 col-lg-12 pt-2 ml-3">
                                  <div class="card common-card" style="border: 1px solid #ccc; border-radius: 8px; overflow: hidden; width: 100%;">
                                      <img id="model_img" class="card-img-top custom-image common-model" data-aos="fade-up" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpeg" alt="A 2D image" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);" />
                                      <div class="card-body">
                                          <model-viewer class="custom-model common-model model-container" alt="A 3D model" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); display: none;" data-rotate-y="0deg" data-src="<?php echo esc_url(get_template_directory_uri() . '/model/' . $sub_folder . '/' . $sub_model_file); ?>" loading="lazy">
                                          </model-viewer>
                                          <div class="loading-spinner" id="loadingSpinner_<?php echo $sub_folder . '_' . $index; ?>">
                                              <img src="<?php echo esc_url(get_template_directory_uri() . '/Double Ring.gif'); ?>" alt="Loading Spinner" style="width: 100%;" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              $modelsCount++;
      
                              if ($modelsCount >= $maxModels) {
                                  return; // Stop displaying models once the limit is reached
                              }
                          }
                      }
                  }
              }
          }
      }
      
?>

      <?php
      function displayModels($selectedCategory, $maxModels = null)
      {
        global $theme_dir;
      ?>
        <div class="row" id="modelRow">
          <?php
          if (is_dir($theme_dir . '/model/')) {
            $sub_folders = array_diff(scandir($theme_dir . '/model/'), array('.', '..'));

            foreach ($sub_folders as $sub_folder) {
              $sub_folder_path = $theme_dir . '/model/' . $sub_folder;

              if (is_dir($sub_folder_path)) {
                $sub_folder_files = array_diff(scandir($sub_folder_path), array('.', '..'));

                $modelsCount = 0;

                foreach ($sub_folder_files as $index => $sub_model_file) {
                  $sub_model_path = $sub_folder_path . '/' . $sub_model_file;

                  if (is_file($sub_model_path) && (strtolower(pathinfo($sub_model_file, PATHINFO_EXTENSION)) === 'obj' || strtolower(pathinfo($sub_model_file, PATHINFO_EXTENSION)) === 'glb')) {
                    if ($selectedCategory === 'all' || $selectedCategory === $sub_folder) {
          ?>
                      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card common-card" data-toggle="modal" data-target="#allModelsModal" data-model-src="<?php echo esc_url(get_template_directory_uri() . '/model/' . $sub_folder . '/' . $sub_model_file); ?>">
                          <img class="card-img-top custom-image common-model" data-aos="fade-up" src="<?php echo get_template_directory_uri() ?>/assets/img/logo2.jpeg" alt="A 2D image" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);" />
                          <model-viewer class="card-img-top custom-model common-model model-container" alt="A 3D model" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); display: none;" data-rotate-y="0deg" data-src="<?php echo esc_url(get_template_directory_uri() . '/model/' . $sub_folder . '/' . $sub_model_file); ?>" loading="lazy">
                          </model-viewer>
                          <div class="loading-spinner" id="loadingSpinner_<?php echo $sub_folder . '_' . $index; ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/Double Ring.gif'); ?>" alt="Loading Spinner" />
                          </div>
                        </div>
                      </div>
          <?php
                      $modelsCount++;

                      if ($maxModels !== null && $modelsCount >= $maxModels) {
                        break;
                      }
                    }
                  }
                }
              }
            }
          }
          ?>
        </div>
      <?php
      }
      ?>


    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>TEAMS</h2>
        <h2 id="who">Who we are</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial-item">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-1.jpg" class="img-fluid" id="team" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/Inshant.jpg" class="img-fluid" id="team" alt=""></div>
            <div class="member-info">
              <h4>Inshant</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/Suraj.jpg" class="img-fluid" id="team" alt=""></div>
            <div class="member-info">
              <h4>Suraj</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="testimonial-item">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/Pritam.jpg" class="img-fluid" id="team" alt=""></div>
            <div class="member-info">
              <h4>Pritam</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="testimonial-item">
          <div class="member" data-aos="zoom-in">
            <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/Vishwajeet.png" class="img-fluid" id="team" alt=""></div>
            <div class="member-info">
              <h4>Vishwajeet</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Testimonials Section -->




  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Second Floor, MuranKalan Ramgarh, Jharkhand, India 829122</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>Sales@cgbug.in</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p> (+91)-9771577184</p>
            </div>

            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14623.42959934772!2d85.5236051!3d23.6094466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4f79cdec66099%3A0x12c6fb98097ed32d!2sCGBUG%20Studio!5e0!3m2!1sen!2sin!4v1705403365003!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->



</main><!-- End #main -->
<?php get_footer(); ?>
<script>
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('.menu a');

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const currentSectionId = entry.target.getAttribute('id');
        navLinks.forEach((link) => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${currentSectionId}`) {
            link.classList.add('active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach((section) => {
    observer.observe(section);
  });
</script>
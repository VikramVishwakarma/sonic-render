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
        <model-viewer src="<?php echo get_template_directory_uri() ?>/Sneaker_360_Scan_PP.glb" camera-controls auto-rotate style="width: 600px; height: 400px;" exposure="1.0" shadow-intensity="1.5" shadow-offset="5" background-color="#f0f0f0" shadow-softness="0.5" loading="lazy" poster="<?php echo get_template_directory_uri() ?>/forerunner_car_poster.jpg">
        </model-viewer>


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

  <!-- ======= Team Section ======= -->
  <!-- <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
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

        </div>

      </div>
    </section> -->
  <!-- End Team Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>OUR WORK</h2>
        <p>Our portfolio showcases our team's expertise and creativity, highlighting our commitment to delivering high-quality 3D assets, immersive AR/VR experiences, and cutting-edge 3D scanning services.</p>
      </div>

      <div class="row">
        <div class="container mt-4">
          <div class="row" id="modelRow">
            <?php
            $upload_dir = wp_upload_dir();
            $user_dirname = $upload_dir['basedir'] . '/model/';

            if (is_dir($user_dirname)) {
              $model_files = scandir($user_dirname);
              $model_files = array_diff($model_files, array('.', '..'));

              foreach ($model_files as $index => $model_file) {
                $model_path = $user_dirname . $model_file;

                if (is_file($model_path)) {
            ?>
                  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card" id="filter-app">
                      <!-- Add model-viewer with a common class for styling -->
                      <!-- <model-viewer class="card-img-top custom-model common-model model-container" src="<?php echo esc_url($upload_dir['baseurl'] . '/model/' . $model_file); ?>" alt="A 3D model" onmouseover="startRotation(this)" onmouseout="stopRotation(this)" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);"></model-viewer> -->

                      <div class="card-body">
                        <!-- Add a button for linking -->
                        <a href="#" class="btn btn-transparent-bg btn-icon" data-toggle="modal" data-target="#modelModal_<?php echo $index; ?>">
                          <i class="fas fa-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="modelModal_<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="modelModalLabel_<?php echo $index; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modelModalLabel_<?php echo $index; ?>">3D Model Viewer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <!-- Render 4 models to the right -->
                              <div class="col-lg-8">
                                <!-- Model Viewer -->
                                <model-viewer src="<?php echo esc_url($upload_dir['baseurl'] . '/model/' . $model_file); ?>" camera-controls auto-rotate id="modal_model" style="width: 100%; height: 400px;" exposure="1.0" shadow-intensity="1.5" background-color="#f0f0f0" shadow-softness="0.5" loading="lazy" poster="<?php echo get_template_directory_uri() ?>/forerunner_car_poster.jpg">
                                </model-viewer>
                              </div>

                              <!-- Heading and description at the bottom -->
                              <div class="col-lg-4" id="modal_info">
                                <h4>Model Information</h4>
                                <p>This is a brief description of the 3D model. You can add more details here.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



            <?php
                }
              }
            }
            ?>
          </div>
        </div>
      </div>

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



  <!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="250">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo" data-aos="zoom-in" data-aos-delay="350">
            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="client-logo">
            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Clients Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- <section id="pricing" class="pricing section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="box" data-aos="zoom-in">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
            <h3>Business</h3>
            <h4><sup>$</sup>19<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <h3>Developer</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span class="advanced">Advanced</span>
            <h3>Ultimate</h3>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Pricing Section -->

  <!-- ======= F.A.Q Section ======= -->
  <!-- <section id="faq" class="faq">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div>

      <ul class="faq-list">

        <li data-aos="fade-up">
          <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse show" data-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
          <div id="faq3" class="collapse" data-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
          <div id="faq4" class="collapse" data-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
          <div id="faq5" class="collapse" data-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
          <div id="faq6" class="collapse" data-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section> -->
  <!-- End Frequently Asked Questions Section -->

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



  //model-viewer move on mouse hover
  function startRotation(modelViewer) {
    // Add class to trigger rotation
    modelViewer.classList.add('rotate-on-hover');
  }

  function stopRotation(modelViewer) {
    // Remove class to stop rotation
    modelViewer.classList.remove('rotate-on-hover');
  }

  // Add JavaScript to rotate only when the model has the 'rotate-on-hover' class
  const modelRow = document.getElementById('modelRow');

  modelRow.addEventListener('mousemove', function(event) {
    const modelViewers = modelRow.querySelectorAll('.rotate-on-hover');

    modelViewers.forEach(modelViewer => {
      const boundingRect = modelViewer.getBoundingClientRect();
      const offsetX = event.clientX - boundingRect.left;
      const percentageX = (offsetX / boundingRect.width) * 100;

      // Adjust the rotation speed by changing the multiplier (e.g., 1 for normal speed)
      const rotationSpeed = 1;

      modelViewer.cameraOrbit = `${percentageX * rotationSpeed}deg auto auto`;
    });
  });
</script>
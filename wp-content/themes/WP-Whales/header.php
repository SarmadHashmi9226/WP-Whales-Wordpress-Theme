<head>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  
    <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>

    <section class="container-fluid sec">
      <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid col-lg-3">
          <a class="navbar-brand" href="#">
          <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/src/images/Logo.png" alt="WP Whales Logo">
          </a>
        </div>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-7" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
  
            <li class="nav-item dropdown position-static">
              <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                Services
              </a>
  
              <!-- Mega Dropdown Menu -->
              <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                <div class="container">
                  <div class="row my-4">
  
                    <!-- Column 1 -->
                    <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
                      <div class="pt-2">
                        <div class="d-flex align-items-center">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Services Icon" class="Vector-mega">
                          <p class="services"><strong>All Services</strong></p>
                        </div>
  
                        <div class="d-flex ">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line-1.svg" alt="Separator line" class="img-fluid vertical-line position-absolute" />
                        </div>
  
                        <div class="mt-20">
                          <div class="quote">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/images/quote.svg" alt="Quote" class="img-fluid" />
                          </div>
                          <p class="quote-text">
                            We were live and our platform was having difficulty supporting a simultaneous number of users.
                            They saved the day with their solid grip on architecture level solutions.
                          </p>
                        </div>
  
                        <div class="d-flex info align-items-center mt-4">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/image -mega.svg" alt="Client Image" class="image-mega">
                          <div class="ms-3">
                            <h5 class="mb-0">Reva McPollom</h5>
                            <small class="text-muted">Lessonbee Founder</small>
                          </div>
                        </div>
                      </div>
                    </div>
  
                    <!-- Column 2 -->
                    <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
                      <div class="pt-2">
                        <a href="#" class="text-body">
                          <div class="row mb-4 border-bottom pb-2">
                            <div class="col-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
                            </div>
                            <div class="col-10">
                              <p class="mb-2 development"><strong>Development</strong></p>
                              <ul class="list-unstyled mega-list">
                                <li>Plugin</li>
                                <li>Web Application</li>
                                <li>Web Development</li>
                              </ul>
                            </div>
                          </div>
  
                          <div class="row mb-4 border-bottom pb-2">
                            <div class="col-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
                            </div>
                            <div class="col-10">
                              <p class="mb-2 development"><strong>Integrations & Migrations</strong></p>
                              <ul class="list-unstyled mega-list">
                                <li>AI Integrations</li>
                                <li>Migrations</li>
                                <li>Headless & Rest APIs</li>
                              </ul>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
  
                    <!-- Column 3 -->
                    <div class="col-md-6 col-xl-3 mb-3 mb-md-0">
                      <div class="row mb-4 border-bottom pb-2">
                        <div class="col-2">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
                        </div>
                        <div class="col-10">
                          <p class="mb-2 development"><strong>Customization</strong></p>
                          <ul class="list-unstyled mega-list">
                            <li>Plugin</li>
                            <li>Web Application</li>
                            <li>Web App Development</li>
                          </ul>
                        </div>
                      </div>
  
                      <div class="row mb-4 border-bottom pb-2">
                        <div class="col-2">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
                        </div>
                        <div class="col-10">
                          <p class="mb-2 development"><strong>White Label Services</strong></p>
                          <ul class="list-unstyled mega-list">
                            <li>White Label Services</li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                    <!-- Column 4 -->
                    <div class="col-md-6 col-xl-3">
                      <div class="row mb-4 border-bottom pb-2">
                        <div class="col-2">
                          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
                        </div>
                        <div class="col-10">
                          <p class="mb-2 development"><strong>Maintenance & Security</strong></p>
                          <ul class="list-unstyled mega-list">
                            <li>Maintenance</li>
                            <li>Performance Troubleshooting</li>
                            <li>Security Enhancements</li>
                          </ul>
                        </div>
                      </div>
                    </div>
  
                  </div>
                </div>
              </div>
            </li>
  
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Industries We Serve</a></li>
            <li class="nav-item">  <a class="nav-link" href="<?php echo get_permalink( get_page_by_path( 'case-studies' ) ); ?>">Case Studies</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blogs</a></li>
          </ul>
        </div>
  
        <div class="btn btn-nav ">
          <a href="#" class="nav-button">
            Get Started <i class="fas fa-circle default-icon"></i>
            <i class="fas fa-arrow-right hover-icon"></i>
          </a>
        </div>
      </nav>
    </section>
<?php wp_head(); ?>
  </head>
  <body>
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
      <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
        <?php 
        if ( has_custom_logo() ) {
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          echo '<img class="main-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
          echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
        }
        ?>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse col-7" id="navbarSupportedContent">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary_menu',
          'container' => false,
          'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
          'walker' => new WP_Bootstrap5_Mega_Menu_Walker(), 
      ]);
      ?>
    </div>

    <div class="btn btn-nav">
      <a href="#" class="nav-button">
        Get Started <i class="fas fa-circle default-icon"></i> <i class="fas fa-arrow-right hover-icon"></i>
      </a>
    </div>
  </nav>
</section>

<?php wp_head(); ?>
  </head>
  <body>
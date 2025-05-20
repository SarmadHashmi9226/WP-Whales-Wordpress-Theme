<?php
/**
 * Main Template file
 */

 get_header();
 
 ?>
 <!--Header cover-->
 <section class ="container-fluid main-header sec">
       <h1 class="main-header-title">
         <span class="main-header-title-span"
           >Driving Business Growth with Scalable</span>
         <br />
         WordPress Solutions <br />
       </h1>
        <div class="btn btn-main-header">
         <a href="#" class="nav-button"
           >Get Started <i class="fas fa-circle default-icon"></i>
           <i class="fas fa-arrow-right hover-icon"></i></a>
       </div>
       <div class="clients-container">
         <p class="clients-title">CLIENTS</p>
         <div class="clients-logo">
           <img
             class="clients-logo-single"
             src="<?php echo get_template_directory_uri(); ?>/src/images/client-1.png"
             alt="clients-logo"
           />
           <img
             class="clients-logo-single"
             src="<?php echo get_template_directory_uri(); ?>/src/images/client-2.png"
             alt="clients-logo"
           />
           <img
             class="clients-logo-single"
             src="<?php echo get_template_directory_uri(); ?>/src/images/client-3.png"
             alt="clients-logo"
           />
           <img
             class="clients-logo-single"
             src="<?php echo get_template_directory_uri(); ?>/src/images/client-4.png"
             alt="clients-logo"
           />
           <img
             class="clients-logo-single"
             src="<?php echo get_template_directory_uri(); ?>/src/images/client-5.png"
             alt="clients-logo"
           />
         </div>
     </div>
   
 </section>
     <!--Services-->
     <section class="container-fluid sec">
       <h2>What would you like to get done?</h2>
     
       <!-- Slick Carousel Wrapper -->
       <div class="slick-services">
    <?php
    $args = array(
        'post_type'      => 'services',
        'posts_per_page' => -1
    );
    $services = new WP_Query($args);

    if ($services->have_posts()) :
        while ($services->have_posts()) : $services->the_post();

            // Get ACF fields
            $hover_title       = get_field('hover_title');
            $hover_description = get_field('hover_description');
            $hover_list_text   = get_field('hover_list');
            $hover_list        = [];

            if (!empty($hover_list_text) && is_string($hover_list_text)) {
                $hover_list = preg_split('/\r\n|\r|\n/', $hover_list_text, -1, PREG_SPLIT_NO_EMPTY);
                $hover_list = array_map('trim', $hover_list); 
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="service-icon" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                    <?php endif; ?>

                    <h3><?php the_title(); ?></h3>
                    <p class="service-content"><?php the_content(); ?></p>

                    <div class="extra-content">
                        <?php if ($hover_title) : ?>
                            <h3 class="extra"><?php echo esc_html($hover_title); ?></h3>
                        <?php endif; ?>

                        <?php if ($hover_description) : ?>
                            <p class="extra-p service-content"><?php echo esc_html($hover_description); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($hover_list)) : ?>
                            <ul class="service-list">
                                <?php foreach ($hover_list as $item) : ?>
                                    <li><?php echo esc_html($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="btn btn-large">
                            <a href="#" class="nav-button">
                                Learn More
                                <i class="fas fa-circle default-icon"></i>
                                <i class="fas fa-arrow-right hover-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No services found.</p>';
    endif;
    ?>
</div>

     
       <!-- Custom Arrows -->
       <div class="row">
         <div class="arrow-btn-container">
           <button class="arrow-btn" id="customPrev">
             <i class="fa-solid fa-angle-left"></i>
           </button>
           <button class="arrow-btn" id="customNext">
             <i class="fa-solid fa-angle-right"></i>
           </button>
         </div>
       </div>
     </section>
     
 
     <!--Case Study-->
     <section class="container-fluid sec">
  <h2>Case Studies</h2>

  <div class="case-studies-slider">
    <?php
    $args = array(
        'post_type' => 'case_study',
        'posts_per_page' => -1
    );
    $case_query = new WP_Query($args);

    if ($case_query->have_posts()) :
        while ($case_query->have_posts()) : $case_query->the_post();
            $logo = get_field('case_image', get_the_ID());
            $hover_text = get_field('hover_description');
            $testimonial_link = get_field('testimonial_link');
            ?>
            <div class="case-study-item"> 
                <div class="card-case container-hover">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                    <?php endif; ?>
                    <div class="hover-overlay">
                        <div class="hover-text">
                            <p><?php echo esc_html($hover_text); ?></p>
                            <?php if ($testimonial_link): ?>
                                <a href="<?php echo esc_url($testimonial_link); ?>" class="btn btn-light mt-2">
                                    <i class="fa fa-caret-right me-2 pt-1"></i> View Testimonial
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if ($logo): ?>
                    <img class="case-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>

  <div class="btn btn-secondary btn-case-study mt-4">
    <a href="<?php echo get_post_type_archive_link('case_study'); ?>" class="nav-button">
      View All Case Studies <i class="fas fa-circle default-icon"></i> <i class="fas fa-arrow-right hover-icon"></i>
    </a>
  </div>
</section>


 
 <!-- Problem Section -->
 <section class="container-fluid sec">
     <h2 class="problem-title">The Problems</h2>
     <p class="problem-subtitle">DOES THIS SOUND LIKE YOU?</p>
 
   <div class="row">
     <div class="problem-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/Alert.svg" alt="Alert Icon" />
       <p class="problem-statement-text">
         Struggling to make your website stand out with pre-made templates
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="problem-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick.svg" alt="Tick Icon" />
       <p class="problem-statement-text">
         Expert Developers who deliver quality, not shortcuts
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="problem-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/Alert.svg" alt="Alert Icon" />
       <p class="problem-statement-text">
         Disappointed with past freelance projects that fell short.
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="problem-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/Alert.svg" alt="Alert Icon" />
       <p class="problem-statement-text">
         Losing customers due to slow, outdated, or poorly designed sites
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="problem-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/Alert.svg" alt="Alert Icon" />
       <p class="problem-statement-text">
         Unsure how to create a fast, functional, and mobile-friendly website
       </p>
     </div>
   </div>
 </section>
 
  <!-- The Solution -->
 <section class="container-fluid sec">
     <h2 class="problem-title">The Solutions</h2>
     <p class="problem-subtitle">WHAT YOU NEED IS!</p>
 
   <div class="row">
     <div class="solution-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick.svg" alt="Tick Icon" />
       <p class="problem-statement-text">
         A custom-built website designed for your unique needs
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="solution-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick.svg" alt="Tick Icon" />
       <p class="problem-statement-text">
         Expert developers who deliver quality, not shortcuts
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="solution-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick.svg" alt="Tick Icon" />
       <p class="problem-statement-text">
         Speed, SEO, and mobile optimization for better results
       </p>
     </div>
   </div>
 
   <div class="row">
     <div class="solution-statement">
       <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick.svg" alt="Tick Icon" />
       <p class="problem-statement-text">
         Seamless integrations to boost business efficiency.
       </p>
     </div>
   </div>
 
   <div class="btn btn-problem-solution">
     <a href="#" class="nav-button">
       Get in touch now <i class="fas fa-circle default-icon"></i>
       <i class="fas fa-arrow-right hover-icon"></i>
     </a>
   </div>
 </section>
 
     <!--Engagement Model-->
 
     <section class="engagement-model-container">
       <h2 class="engagement-model-title">Engagement Model</h2>
       <div class="engagement-model-container-inner">
         <div class="model-block-container">
 
           <div class="model-block model-left">
             <h3 class="model-block-title">Flexible</h3>
             <div class="model-block-text-container">
               <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick black engagemnt.svg" alt="icon" />
               <p class="model-block-text">
                 Adapts to changing project requirements, with costs based on actual
                 time and resources used, allowing for ongoing development
               </p>
           </div>
         </div>
         <div class="model-block orange-model-block">
           <h3 class="model-block-title">Fixed Price</h3>
           <div class="model-block-text-container">
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick white engagemnt.svg" alt="icon" />
           <p class="model-block-text">
               A set price for the project based on agreed requirements, providing
               clear costs and deliverables for transparency.
             </p>
           </div>
         </div>
         <div class="model-block model-right">
           <h3 class="model-block-title">Dedicated</h3>
           <div class="model-block-text-container">
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/tick black engagemnt.svg" alt="icon" />
           <p class="model-block-text">
               A focused team working exclusively on your project for a set period, enabling deeper collaboration, faster turnaround, and a stronger alignment with your long-term goals.
             </p>
           </div>
         </div>
       </div>
       <div class="btn btn-engagement ">
           <a href="#" class="nav-button"
             >Engage to Create Something Amazing <i class="fas fa-circle default-icon"></i>
           <i class="fas fa-arrow-right hover-icon"></i></a>
         </div>
     </section>
     <!--Engagement Model Small-->
     <section class="container-fluid sec">
  <div class="row">
    <h2 class="enagage-title">Engagement Models</h2>
  </div>
  <div class="my-2"> 
    <div class="row g-2"> 
      <?php
        $args = [
          'post_type' => 'engagement_model',
          'posts_per_page' => 3,
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
      ?>
        <div class="col-sm-6 col-md-4"> 
          <div class="card-model">
            <div class="card-body-model">
              <?php if (has_post_thumbnail()): ?>
                <img
                  class="engagement-icon"
                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                  alt="<?php the_title_attribute(); ?>"
                />
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      <?php
          endwhile;
          wp_reset_postdata();
        else:
      ?>
        <p>No engagement models found.</p>
      <?php endif; ?>
    </div>
  </div>

  <div class="btn btn-engagement-model mt-4">
    <a href="#" class="nav-button">
      Engage to Create Something Amazing
      <i class="fas fa-circle default-icon"></i>
      <i class="fas fa-arrow-right hover-icon"></i>
    </a>
  </div>
</section>

     <!--Why Us-->
 <section class="container-fluid sec">
     <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 choose-us">
             <h2>Why Choose WP Whales</h2>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="btn btn-learn">
           <a href="#" class="nav-button"
             >Learn More About Us <i class="fas fa-circle default-icon"></i>
           <i class="fas fa-arrow-right hover-icon"></i></a>
         </div>
     </div>
 
   <div class="container py-5 content-wrapper">
     <!-- Vertical red line in the center -->
     <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line-vert.svg" alt="Vertical Line" class="red-line-vertical">
 
     <div class="row">
       <!-- Left Column -->
       <div class="col-md-6">
         <div class="feature-box">
           <div class="d-flex">
             <img src="<?php echo get_template_directory_uri(); ?>/src/images/illustratons.svg" class="icon-img me-3" alt="icon1">
             <div>
               <div class="feature-title">We Don’t Overpromise</div>
               <p class="text-muted1 overpromise">We only commit to what we’re confident we can deliver, prioritizing transparency and honesty over empty promises.</p>
             </div>
           </div>
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line left.svg" class="red-line-horizontal" alt="Red Line">
         </div>
 
         <div class="feature-box">
           <div class="d-flex ">
             <img src="<?php echo get_template_directory_uri(); ?>/src/images/illustratons-l-b.svg" class="icon-img me-3" alt="icon2">
             <div>
               <div class="feature-title">We don’t come cheap</div>
               <p class="text-muted1 ">We value quality and know its worth. Our services are designed to provide exceptional value, ensuring you get the results you pay for.</p>
             </div>
           </div>
         </div>
       </div>
 
       <!-- Right Column -->
       <div class="col-md-6">
         <div class="feature-box cheap">
           <div class="d-flex">
             <img src="<?php echo get_template_directory_uri(); ?>/src/images/illustratons-r.svg" class="icon-img me-3" alt="icon3">
             <div>
               <div class="feature-title">We’re Masters, Not Jacks-of-all-trades</div>
               <p class="text-muted1 master">We are experts in PHP, Laravel, and WordPress CMS, delivering high-quality and customized solutions tailored to your needs.</p>
             </div>
           </div>
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line right.svg" class="red-line-horizontal" alt="Red Line">
         </div>
 
         <div class="feature-box">
           <div class="d-flex">
             <img src="<?php echo get_template_directory_uri(); ?>/src/images/goal-r-b.svg" class="icon-img me-3" alt="icon4">
             <div>
               <div class="feature-title">We’re Realistic</div>
               <p class="text-muted1 realistic">Expect clear, achievable goals, and honest timelines from us. While we love to push boundaries, we’ll never sell you on a fantasy.</p>
             
           </div>
         </div>
       </div>
     </div>
   </div>
    </div>
 </section>
     <!--Buzz-->
 
     <?php
$args = [
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
];
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
  <section class="container-fluid sec">
    <div class="mb-4 buzz-info">
      <h2 class="buzz-title">The buzz is real!</h2>
      <p class="text-muted buzz-sub-title">Here’s what our clients are saying about us</p>
    </div>

    <div class="testimonial-slider">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="card-buzz d-flex">
          <div class="buzz-content">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid mb-3', 'alt' => get_the_title()]); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/src/images/buzz.svg" class="img-fluid mb-3" alt="Default Buzz Person" />
            <?php endif; ?>
            <p class="buzz-name mb-1"><?php the_title(); ?></p>
            <p class="text-muted buzz-designation mb-0"><?php echo esc_html(get_field('client_designation')); ?></p>
          </div>
          <div class="col-md-8 buzz-text">
            <div class="d-flex">
              <img class="buzz-quote me-3" src="<?php echo get_template_directory_uri(); ?>/src/images/buzz-quote.svg" alt="buzz-quote" />
              <div>
                <p class="buzz-quote-text"><?php echo esc_html(get_field('content')); ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="step-indicator"></div>

  </section>

<?php
wp_reset_postdata();
endif;
?>

 <!-- Our Pojects-->
 <section class="container-fluid sec">
  <div class="d-flex">
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 project-info">
      <p class="project-title">Our Projects</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 ms-2">
      <div class="btn btn-learn">
        <a href="#" class="nav-button">
          View Projects
          <i class="fas fa-circle default-icon ms-2"></i>
          <i class="fas fa-arrow-right hover-icon"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="row g-2">
    <?php
    $projects = new WP_Query([
      'post_type' => 'project',
      'posts_per_page' => 3,
    ]);

    if ($projects->have_posts()):
      while ($projects->have_posts()): $projects->the_post();
        $bg_img = get_field('background_image');
        $fg_img = get_field('foreground_image');
    ?>
      <div class="col-sm-6 col-md-4">
        <div class="card-project">
          <div class="card-body-project">
            <?php if ($bg_img): ?>
              <img src="<?php echo esc_url($bg_img); ?>" alt="bg" />
            <?php endif; ?>
            <div class="foreground-image">
              <?php if ($fg_img): ?>
                <img src="<?php echo esc_url($fg_img); ?>" alt="fg" />
              <?php endif; ?>
            </div>
            <div class="slider-handle"><div class="slider-dot"></div></div>
          </div>
        </div>
        <p class="coffee mt-3"><?php the_title(); ?></p>
        <p class="coffee-text mt-2"><?php the_excerpt(); ?></p>
      </div>
    <?php
      endwhile;
      wp_reset_postdata();
    else:
    ?>
      <p>No projects found.</p>
    <?php endif; ?>
  </div>
</section>

 
     <!--Reviews-->
   <section class="container-fluid sec">
        <p class="reviews">Starts Speaks for Us</p>
     <div class="row mt-3">
       <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card review">
           <p class="review-title">Trust Piolt</p>
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/stars.svg" alt="stars" class="stars" />
        </div>
       </div>
        <div class="card review">
           <p class="review-title">Clutch</p>
           <img src="<?php echo get_template_directory_uri(); ?>/src/images/stars-5.svg" alt="stars" class="stars" />
        </div>
     </div>
     </section>
     <!--Contact-->
     <section class="container-fluid sec">
      <div class="container discuss-container">
       <div class="row text-center">
         <div class="col-lg-12 col-md-6 col-sm-12">
             <p class="discuss-title">Let's discuss Your Project</p>
         </div>
       </div>
       <div class="row discuss-row">
         <p class="discuss-text mt-5">I want to</p>
         <div class="d-flex">
         <button class="dicuss-buttons">kickstart a design project</button>
         <button class="dicuss-buttons">Dedicated Team</button>
         <button class="dicuss-buttons">Update my Website</button>
         <button class="dicuss-buttons">Designing</button>
         </div>
       </div>
       <div class="row discuss-row">
         <p class="discuss-text mt-3">Expertise I need</p>
         <div class="d-flex">
         <button class="dicuss-buttons">Web Development</button>
         <button class="dicuss-buttons">Project & Legacy System Redesign</button>
         <button class="dicuss-buttons">CRM Development</button>
         </div>
      </div>
      <form>
       <div class="row mb-3 mt-5">
         <div class="col-md-6 mb-3">
           <input type="text" class="form-control" placeholder="Your Name">
         </div>
         <div class="col-md-6 mb-3">
           <input type="email" class="form-control" placeholder="Work Email">
         </div>
         <div class="col-md-6 mb-3">
           <input type="text" class="form-control" placeholder="Your Company">
         </div>
         <div class="col-md-6 mb-3">
           <input type="text" class="form-control" placeholder="Contact No.">
         </div>
         <div class="col-12 mb-3">
           <textarea class="form-control" placeholder="Message"></textarea>
         </div>
           <a href="#" class="nav-button btn-discuss"
             >Send<i class="fas fa-circle default-icon"></i>
           <i class="fas fa-arrow-right hover-icon"></i></a>
         
         </div>
       </div>
     </form>
   </section>
 
 <!--Blog & Updates-->
 <section class="container-fluid sec mb-5">
   <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12">
       <p class="blogs-title">Blogs & Updates</p>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
       <div class="btn btn-learn">
         <a href="#" class="nav-button">View All Blogs
           <i class="fas fa-circle default-icon"></i>
           <i class="fas fa-arrow-right hover-icon"></i>
         </a>
         <button class="btn-blogs" id="prevSlide">
           <i class="fa-solid fa-angle-left"></i>
         </button>
         <button class="btn-blogs" id="nextSlide">
           <i class="fa-solid fa-angle-right"></i>
         </button>
       </div>
     </div>
   </div>
 
   <div class="container mt-5">
   <div class="blogs-slider">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1, 
    );

    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()) :
      while ($blog_query->have_posts()) : $blog_query->the_post();
        $image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : get_template_directory_uri() . '/src/images/blog1.svg';
  ?>
        <div class="d-flex flex-column blogs">
        <div class="card blog">
          <img src="<?php echo esc_url($image); ?>" class="card-img-blog" alt="<?php the_title_attribute(); ?>" />
        </div>
        <h5 class="card-title mt-3">
        <a href="<?php the_permalink(); ?>">
          <?php echo wp_trim_words(get_the_title(), 12, '...'); ?>
        </a>
      </h5>

    </div>
  <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No blog posts found.</p>';
    endif;
  ?>
</div>

   </div>
 </section>

 
 <?php get_footer( );?>
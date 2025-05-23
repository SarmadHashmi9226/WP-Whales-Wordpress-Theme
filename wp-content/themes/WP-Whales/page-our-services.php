<?php
/**
 *  Services template
 */

 get_header();
 ?>

 <!-- File PAth on Header breadcrumb-->
 
 <nav aria-label="breadcrumb" class="bg-light py-2 px-3">
  <ol class="breadcrumb mb-0 ms-5">
    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>

    <?php
    global $post;

    if ( is_page() && !is_front_page() ) {
        // For hierarchical pages
        $ancestors = get_post_ancestors($post);
        $ancestors = array_reverse($ancestors);

        foreach ( $ancestors as $ancestor_id ) {
            echo '<li class="breadcrumb-item"><a href="' . get_permalink($ancestor_id) . '">' . get_the_title($ancestor_id) . '</a></li>';
        }

        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

    } elseif ( is_singular('services') ) {
        // For single CPT item
        echo '<li class="breadcrumb-item"><a href="' . get_post_type_archive_link('services') . '">Services</a></li>';
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

    } elseif ( is_post_type_archive('services') ) {
        // CPT archive
        echo '<li class="breadcrumb-item active" aria-current="page">Services</li>';

    } elseif ( is_single() ) {
        // Regular post
        echo '<li class="breadcrumb-item"><a href="' . get_permalink( get_option('page_for_posts') ) . '">Blog</a></li>';
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';

    } elseif ( is_category() || is_tag() ) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . single_term_title('', false) . '</li>';

    } elseif ( is_search() ) {
        echo '<li class="breadcrumb-item active" aria-current="page">Search results for "' . get_search_query() . '"</li>';

    } elseif ( is_404() ) {
        echo '<li class="breadcrumb-item active" aria-current="page">404 Not Found</li>';
    }
    ?>
  </ol>
</nav>

    <!--Header cover-->
 <section class="case-cover-container d-flex justify-content-center align-items-center flex-wrap">
  <div class="col-5 col-md-5">
    <div class="container ">
      <div class="left-cover mt-5">
      <h2 class="cover-case">MVP Development</h2>
      <p class="cover-text">Bringing something new to life can be challenging. But with WP Whale's MVP Development Services. 
        You can make your dream a reality with no paroblems. Our unique strategy promises to be a game changer for your business.
      </p>
      </div>
       <div class="btn mt-4 mb-5">
          <a href="#" class="nav-button"
            >Visit Athlete Ocean Site <i class="fas fa-circle default-icon"></i>
          <i class="fas fa-arrow-right hover-icon"></i></a>
        </div>
    </div>
  </div>
  <div class="col-7 col-md-7">
    <img class="laptop" src="<?php echo get_template_directory_uri(); ?>/src/images/Laptop-mock.svg" alt="laptop">
  </div>
 </section>

<!-- Sidebar-->
<div class="d-flex mt-5">
  <!-- Sidebar -->
  <?php get_sidebar( 'services' );?>

  <!-- All Main Content Wrapper -->
  <div class="container-fluid">
    <!-- How It Works Section -->
    <div class="col-md-10">
      <h2 class="overview-project"><?php the_field('how_it_works_heading'); ?></h2>
      <p class="overview-text"><?php the_field('how_it_works_description'); ?></p>

      <div class="container d-flex mt-5">
        <div class="col-4 me-5">
          <img class="work-img" src="<?php echo get_template_directory_uri(); ?>/src/images/work.svg" alt="img" />
        </div>
        <div class="col-8">
          <?php for($i = 1; $i <= 5; $i++): 
            $title = get_field("how_step_{$i}_title");
            $desc = get_field("how_step_{$i}_description");
            $icon = get_field("how_step_{$i}_icon"); 
            if($title): ?>
              <div class="d-flex justify-content-between <?php echo $desc ? '' : 'align-items-center'; ?> mt-4">
                <div class="d-flex <?php echo $desc ? '' : 'align-items-center'; ?> gap-2">
                  <div class="image me-3 mt-1">
                    <?php if($icon): ?>
                      <img class="tick-img" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                    <?php else: ?>
                      <img class="tick-img" src="<?php echo get_template_directory_uri(); ?>/src/images/tick-2.svg" alt="img" />
                    <?php endif; ?>
                  </div>
                  <div class="goal ms-2">
                    <div class="d-flex justify-content-between">
                      <p class="sub-title-overview"><?php echo esc_html($title); ?></p>
                      <?php if($desc): ?>
                        <i class="fa fa-chevron-down mt-3 service-arrow toggle-arrow" data-id="step-<?php echo $i; ?>"></i>
                      <?php endif; ?>
                    </div>
                    <?php if($desc): ?>
                      <p class="overview-text step-content d-none" id="step-<?php echo $i; ?>"><?php echo esc_html($desc); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif;
          endfor; ?>
        </div>
      </div>
    </div>

    <!-- Why We Best?-->
    <?php $mvp_best_page = get_page_by_path('services-best-company'); ?>
    <section class="container-fluid sec mt-5">
  <div class="col-10">
    <h2 class="overview-project"><?php the_field('mvp_why_heading',$mvp_best_page->ID); ?></h2>
    <p class="overview-text"><?php the_field('mvp_why_description',$mvp_best_page->ID); ?></p>

    <div class="container">
      <div class="row">
        <?php for ($i = 1; $i <= 3; $i++) :
          $img = get_field("mvp_top_{$i}_img",$mvp_best_page->ID);
          $title = get_field("mvp_top_{$i}_title",$mvp_best_page->ID);
          $content = get_field("mvp_top_{$i}_content",$mvp_best_page->ID);
        ?>
        <div class="col-sm mt-5 d-flex flex-column align-items-center text-center">
          <?php if ($img): ?>
            <img src="<?php echo esc_url($img['url']); ?>" alt="img">
          <?php endif; ?>
          <p class="mvp-subtitle mt-2"><?php echo esc_html($title); ?></p>
          <p class="mvp-content"><?php echo esc_html($content); ?></p>
        </div>
        <?php endfor; ?>
      </div>

      <div class="row">
        <?php for ($i = 1; $i <= 3; $i++) :
          $img = get_field("mvp_card_{$i}_img",$mvp_best_page->ID);
          $title = get_field("mvp_card_{$i}_title",$mvp_best_page->ID);
          $content = get_field("mvp_card_{$i}_content",$mvp_best_page->ID);
        ?>
        <div class="col-md-4 mt-5 d-flex flex-row g-2">
          <div class="card-mvp me-4">
            <?php if ($img): ?>
              <img src="<?php echo esc_url($img['url']); ?>" alt="img">
            <?php endif; ?>
            <span class="mvp-subtitle-2 ms-1"><?php echo esc_html($title); ?></span>
            <p class="mvp-content ms-5"><?php echo esc_html($content); ?></p>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>

    <div class="container-fluid black mt-5">
      <div class="row">
        <p class="black-content">By choosing us you are teaming with specialists who are committed to turning your concept into a believable, competitive product. </p>
        <div class="btn ms-4 d-flex flex-start mt-3">
          <a href="#" class="nav-button">
            Get in touch now <i class="fas fa-circle default-icon"></i>
            <i class="fas fa-arrow-right hover-icon"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Development Process -->
    <?php $mvp_process_page = get_page_by_path('mvp-development-process'); ?>
    <section class="container-fluid sec">
  <div class="col-md-10">
    <h2 class="overview-project"><?php the_field('mvp_section_title',$mvp_process_page->ID); ?></h2>
    <p class="overview-text"><?php the_field('mvp_section_description',$mvp_process_page->ID); ?></p>

    <div class="container my-5">

      <?php
      // Loop through each step (1 to 4)
      for ($i = 1; $i <= 4; $i++) :
        $icon = get_field("mvp_step_{$i}_icon",$mvp_process_page->ID);
        $title = get_field("mvp_step_{$i}_title",$mvp_process_page->ID);
        $desc = get_field("mvp_step_{$i}_description",$mvp_process_page->ID);

        if ($title && $desc) :
      ?>
      <div class="row feature-item">
        <div class="col-auto">
          <?php if ($icon): ?>
            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($title); ?>" class="feature-icon">
          <?php endif; ?>
        </div>
        <div class="col">
          <h6 class="process-title"><?php echo esc_html($title); ?></h6>
          <p class="process-content mb-0"><?php echo esc_html($desc); ?></p>

          <?php if ($i == 4): ?>
            <p class="process-line mt-5"><?php the_field('mvp_section_conclusion',$mvp_process_page->ID); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php
        endif;
      endfor;
      ?>

    </div>
  </div>
</section>


    <!--Discussion cover-->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <div class="container-fluid black mt-5">
          <div class="row">
            <p class="discuss-text ms-4">Best MVP Development Agency for <span style="color: #ee4c2b;">Startups</span></p>
            <p class="black-content-2 ">Every startup needs speed, creativity and cost efficiency to thrive. That is where WP Whales is an excellent choice for new innovators seeking MVP development services.  Our strategies are customized to your unique demands giving you the ultimate advantage over your rivals.
      </p>
            <div class="discuss-link ms-5 d-flex flex-start mt-3">
              <a href="#" class="nav-button"
                >Let's Discuss your Project <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow" />
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits -->
     <?php
    $benefits_page = get_page_by_path('services-benefits');
    ?>
    <section class="container-fluid sec">
  <div class="col-md-10">
    <h2 class="overview-project"><?php the_field('section_title',$benefits_page->ID); ?></h2>
    <p class="overview-text"><?php the_field('section_description',$benefits_page->ID); ?></p>

    <?php
    // Loop through benefit 1 to 7
    for ($i = 1; $i <= 7; $i++) :
      $title = get_field("benefit_{$i}_title",$benefits_page->ID);
      $desc = get_field("benefit_{$i}_description",$benefits_page->ID);
      if ($title && $desc) :
    ?>
      <div class="d-flex mt-4">
        <img class="benefits-img mb-1" src="<?php echo get_template_directory_uri(); ?>/src/images/benefits.svg" alt="img">
        <h6 class="process-title ms-3"><?php echo esc_html($title); ?></h6>
      </div>
      <p class="process-content mb-0"><?php echo esc_html($desc); ?></p>
    <?php endif; endfor; ?>

    <div class="mt-4">
      <p class="process-content mb-0"><?php the_field('closing_paragraph',$benefits_page->ID); ?></p>
    </div>
  </div>
</section>


    <!-- Why Choose us?-->
    <?php 
$mvp_page = get_page_by_path('service-why-choose-us');
?>

<section class="container-fluid sec">
  <div class="col-md-10">
    <h2 class="overview-project"><?php the_field('section_title', $mvp_page->ID); ?></h2>
    <p class="overview-text"><?php the_field('section_description', $mvp_page->ID); ?></p>

    <div class="mt-4">
      <h6 class="process-title"><?php the_field('why_title', $mvp_page->ID); ?></h6>
    </div>

    <div class="row choice mt-3">
      <div class="col-md-4 card-choice">
        <div class="p-4 h-100 rounded-3 card-choose">
          <h6 class="process-title"><?php the_field('feature_1_title', $mvp_page->ID); ?></h6>
          <p class="mb-0 process-content"><?php the_field('feature_1_description', $mvp_page->ID); ?></p>
        </div>
      </div>

      <div class="col-md-4 card-choice">
        <div class="p-4 h-100 rounded-3 card-choose">
          <h6 class="process-title"><?php the_field('feature_2_title', $mvp_page->ID); ?></h6>
          <p class="mb-0 process-content"><?php the_field('feature_2_description', $mvp_page->ID); ?></p>
        </div>
      </div>

      <div class="col-md-4 card-choice">
        <div class="p-4 h-100 rounded-3 card-choose">
          <h6 class="process-title"><?php the_field('feature_3_title', $mvp_page->ID); ?></h6>
          <p class="mb-0 process-content"><?php the_field('feature_3_description', $mvp_page->ID); ?></p>
        </div>
      </div>
    </div>

    <p class="mb-0 process-content mt-3"><?php the_field('closing_line', $mvp_page->ID); ?></p>
  </div>
</section>


    <!--Cover Image with 2 columns-->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <div class="container">
          <div class="col-12 cover-img  rounded-4 p-4">
            <div class="row-1 services-row g-5 align-items-center"> 
              <div class="col-lg-6">
                <p class="solutions-title">Reach Your Ideal Customers with Our Tailored MVP Solutions</p>
                <div class="mt-4">
                  <p class="solution-text">
                    Every firm is unique as are its clients. That is why we offer tailored MVP solutions that cater to your
                    target audience's interests and issues. With our backing you can create a product that truly communicates
                    with your people.
                  </p>
                </div>
                <div class="btn mt-4 solution-btn">
                  <a href="#" class="nav-button">
                    Get in touch now <i class="fas fa-circle default-icon"></i>
                    <i class="fas fa-arrow-right hover-icon"></i>
                  </a>
                </div>
              </div>
              <div class="col"></div>
              <div class="col-lg-5">
                <p class="solution-subtitle">Our Package Includes:</p>
                <ul class="ps-3 solution-list">
                  <li>Custom MVP solutions for accomplishing particular company goals.</li>
                  <li>User-centric design to improve attraction and participation.</li>
                  <li>Data-driven decision making to improve your MVP based on feedback.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Success Measures -->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <h2 class="overview-project">How We Accurately Measure the Success of Your MVP</h2>
        <p class="overview-text">Monitoring the performance of your MVP is crucial for its existence.
          At WP Whales we use accurate data driven statistics to figure out its effectiveness and future releases
        </p>
        <div class="container py-5 content-wrapper">
          <!-- Vertical red line in the center -->
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line-vert.svg" alt="Vertical Line" class="red-line-vertical">
      
          <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
              <div class="feature-box">
                <div class="d-flex">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/images/success-mvp.svg" class="icon-img me-3" alt="icon1">
                  <div>
                    <div class="feature-title">User Engagement</div>
                    <p class="text-muted1 overpromise">Takes care of how people interact with your product.</p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line left.svg" class="red-line-horizontal" alt="Red Line">
              </div>
      
              <div class="feature-box">
                <div class="d-flex ">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/images/success-mvp-2.svg" class="icon-img me-3" alt="icon2">
                  <div>
                    <div class="feature-title">Engagement Rates</div>
                    <p class="text-muted1 ">Enhance the user loyalty and satisfaction.</p>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Right Column -->
            <div class="col-md-6">
              <div class="feature-box cheap-2">
                <div class="d-flex">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/images/success-mvp-3.svg" class="icon-img me-3" alt="icon3">
                  <div>
                    <div class="feature-title">Sales and Profits</div>
                    <p class="text-muted1 master">Financial results and future developments.</p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/Line right.svg" class="red-line-horizontal-2" alt="Red Line">
              </div>
      
              <div class="feature-box">
                <div class="d-flex">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/images/success-mvp-4.svg" class="icon-img me-3" alt="icon4">
                  <div>
                    <div class="feature-title">Feedback Circuits</div>
                    <p class="text-muted1 realistic">Collecting customer reviews to change and improve features.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="mb-0 process-content mt-5">These observations will help your MVP grow into a fully functioning business.</p>
      </div>
    </section>

    <!-- Guarantee Results -->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <h2 class="overview-project">WP Whales guarantees the following key MVP Results</h2>
        <p class="overview-text">By choosing us you are guaranteed:</p>

        <div class="d-flex mt-5">
          <img class="benefits-img mb-1" src="<?php echo get_template_directory_uri(); ?>/src/images/benefits.svg" alt="img">
          <h6 class="process-title ms-3">A fully working MVP that satisfies your objectives</h6>
        </div>

        <div class="d-flex mt-3">
          <img class="benefits-img mb-1" src="<?php echo get_template_directory_uri(); ?>/src/images/benefits.svg" alt="img">
          <h6 class="process-title ms-3">A swift and effective design procedure</h6>
        </div>

        <div class="d-flex mt-3">
          <img class="benefits-img mb-1" src="<?php echo get_template_directory_uri(); ?>/src/images/benefits.svg" alt="img">
          <h6 class="process-title ms-3">Access to useful data to help your product achieve success</h6>
        </div>
        <div class="mt-4">
          <p class="mb-0 process-content ">Our dedication to excellence guarantees that your MVP sets an environment for long term prosperity.
          </p>
        </div>
      </div>
    </section>

    <!-- Cover image with 2 columns -2-->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <div class="container">
          <div class="col-12 cover-img rounded-4 p-4">
            <div class="row-1 services-row g-5 align-items-center"> 
              <div class="col-lg-6">
                <p class="solutions-title">WP Whales Provides MVP Development Services To</p>
                <div class="mt-4">
                  <p class="solution-text">
                    Our services cover an array of clients. No matter your industry or project scope. We can deliver solutions that will change everything.
                  </p>
                </div>
                <div class="btn mt-4 solution-btn">
                  <a href="#" class="nav-button">
                    Get in touch now <i class="fas fa-circle default-icon"></i>
                    <i class="fas fa-arrow-right hover-icon"></i>
                  </a>
                </div>
              </div>
              <div class="col"></div>
              <div class="col-lg-5">
                <ul class="ps-3 solution-list">
                  <li>Enabling entrepreneurs to bring their unique concepts to life.</li>
                  <li>Helping emerging businesses find their target market.</li>
                  <li>Supporting existing organizations with MVP guidance and growth.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tech Stack -->
    <section class="container-fluid sec">
  <div class="col-md-10">
    <h2 class="overview-project">The Tech Stack We Use for MVP Development</h2>
    <p class="overview-text">
      The right tools are essential for building a high quality MVP. WP Whales employs a cutting edge tech stack to ensure every product is efficient, scalable and future proof.
    </p>

    <div class="container mt-5">

    <?php
    // Get all tech_stack posts
    $all_posts = get_posts([
      'post_type' => 'tech_stack',
      'posts_per_page' => -1,
      'post_status' => 'publish',
    ]);

    $grouped = [];
    foreach ($all_posts as $post) {
      $category = get_field('category', $post->ID);
      if (!$category) {
        $category = 'Uncategorized';
      }
      if (!isset($grouped[$category])) {
        $grouped[$category] = [];
      }
      $grouped[$category][] = $post;
    }

    foreach ($grouped as $category_name => $posts): ?>

      <div class="d-flex align-items-center mb-4 <?php echo ($category_name !== array_key_first($grouped)) ? 'mt-5' : ''; ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/src/images/programming.svg'); ?>" alt="icon" class="me-2" style="width: 24px;">
        <h5 class="mb-0 fw-bold"><?php echo esc_html($category_name); ?></h5>
      </div>

      <div class="row g-3">
        <?php foreach ($posts as $post):
          $icon = get_field('icon', $post->ID);
          $title = get_the_title($post);
          ?>
          <div class="col-6 col-md-3 col-lg-2">
            <div class="p-3 programming-card text-center rounded-3 shadow-sm">
              <?php if ($icon): ?>
                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($title); ?>" style="width: 40px;">
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/src/images/default-icon.svg'); ?>" alt="default icon" style="width: 40px;">
              <?php endif; ?>
              <p class="mt-2 mb-0 programming-subtitle"><?php echo esc_html($title); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    <?php endforeach; ?>

      <div class="mt-4">
        <p class="mb-0 process-content ">This robust stack allows us to create custom MVP solutions tailored to your needs.</p>
      </div>
    </div>
  </div>
</section>


    <!--Last Section-->
    <section class="container-fluid sec">
      <div class="col-md-10">
        <div class="col-7">
          <p class="ready-title">So are you Ready to transform your idea into a reality?</p>
        </div>
        <div class="mt-3 mb-5">
          <p class="ready-content">Partner with WP Whales for world class MVP development services that deliver results</p>
        </div>
      </div>
    </section>
  </div>
</div>
 <?php get_footer( );?>
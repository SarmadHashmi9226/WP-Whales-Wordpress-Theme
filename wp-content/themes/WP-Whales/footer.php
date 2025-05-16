<?php
/**
 * footer template
 */
?>
<footer class="container-fluid footer-sec ">
 <div class="row gy-4">
      
      <!-- Newsletter Section -->
      <div class="col-md-4 ">
        <h6 class="text-uppercase newsletter">What’s new at</h6>
        <h4 class="fw-bold newsletter-subtitle">WP WHALES</h4>
        <p class="small newsletter">Get the latest news about software development and Family Guy.</p>
        
        <form class="d-flex mb-2">
          <input type="email" class="form-control rounded-0 form-email mt-3" placeholder="Email Address">
          <button class="btn1 email-btn mt-3 " type="submit">
            <span class=" input-arrow"><i class="fa-solid fa-arrow-right"></i> </span>
          </button>
        </form>

        <div class="form-check mb-3 mt-3 ">
          <input class="form-check-input " type="checkbox" id="marketingCheck">
          <label class="form-check-label small checkbox-text newsletter" for="marketingCheck">
            I agree to receive marketing emails
          </label>
        </div>

        <!-- Contact & Location Info -->
        <div class="mt-4 d-flex">
          <div class="col-md-5">
          <div class="row1">
          <p class="mb-1 newsletter-headings">Contact us</p>
          <p class="small mb-1 mt-2 newsletter">admin@wpwhales.io</p>
          <p class="small mb-3 newsletter">+44 7909 074261</p>
          </div>
          </div>
          <div class="col-md-5">
          <div class="row1">
          <p class="mb-1 newsletter-headings">Office Location</p>
          <p class="small mb-0 mt-2">Chestnut Grove,</p>
          <p class="small mb-0">London W5 4JT,</p>
          <p class="small">United Kingdom</p>
          </div>
          </div>
          <!-- Social Icons -->
          <div class="col-md-3">
           <div class="row1">
          <p class="newsletter-headings">Follow Us</p>
          <div class="d-flex mt-2 gap-3">
            <i class="bi bi-instagram fs-5"></i>
            <i class="bi bi-dribbble fs-5"></i>
            <i class="bi bi-linkedin fs-5"></i>
            <i class="bi bi-behance fs-5"></i>
          </div>
          </div>
          </div>
        </div>
      </div>

      <!-- Company -->
      <div class="col-md-3">
        <p class=" mb-3 company ms-5">Company</p>
        <ul class="list-unstyled small ms-5">
          <li class="mb-2 company-li">Home  <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">Partnerships  <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">About Us  <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-md-3">
        <h6 class=" mb-3 company">Services</h6>
        <ul class="list-unstyled small">
          <li class="mb-2 company-li">WordPress Web Development <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i> </li>
          <li class="mb-2 company-li">Custom Web Development <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">Web Design <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">MVP Development <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">CRM Development <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">Digital Transformation <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">QA Testing and Automation <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="col-md-2">
        <h6 class="company mb-3">Resources</h6>
        <ul class="list-unstyled small">
          <li class="mb-2 company-li">Projects <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
          <li class="mb-2 company-li">Blogs <img src="<?php echo get_template_directory_uri(); ?>/src/images/arrow-up-right.svg" alt="arrow"/><i class="fa-solid fa-arrow-right"></i></li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center mt-4  small copyright-footer">
      All Rights Reserved. WP Whales
    </div>
  </div>
</footer>
<!-- jQuery (FULL version) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- TouchSwipe Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
<!-- Swiper JS  -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!--Slick-JS-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php wp_footer(); ?>
  </body>
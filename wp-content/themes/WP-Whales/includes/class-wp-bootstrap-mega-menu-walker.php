<?php
class WP_Bootstrap5_Mega_Menu_Walker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset($args->mega_menu) && $args->mega_menu ) {
            return;
        }

        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth === 0) ? 'dropdown-menu' : 'dropdown-menu dropdown-submenu';
        $output .= "\n$indent<ul class=\"$submenu_class\" aria-labelledby=\"navbarDropdown\">\n";
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset($args->mega_menu) && $args->mega_menu ) {
            return;
        }
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $li_classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes = array();

        $is_mega_menu = in_array('mega-menu', $li_classes);
        
        if ($depth === 0) {
            $classes[] = 'nav-item';
            if (in_array('menu-item-has-children', $li_classes)) {
                $classes[] = 'dropdown';
            }
        } else {
            $classes[] = 'dropdown-item';
        }

        if (in_array('current-menu-item', $li_classes) || in_array('current_page_item', $li_classes)) {
            $classes[] = 'active';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

        if ($depth === 0 && in_array('menu-item-has-children', $li_classes)) {
            $atts['href'] = ! empty( $item->url ) ? $item->url : '#';
            $atts['class'] = 'nav-link dropdown-toggle';
            $atts['id'] = 'navbarDropdown'; 
            $atts['role'] = 'button';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
        } elseif ($depth === 0) {
            $atts['class'] = 'nav-link';
            $atts['href'] = ! empty( $item->url ) ? $item->url : '#';
        } else {
            $atts['href'] = ! empty( $item->url ) ? $item->url : '#';
        }

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        // Get the icon class from attr_title
        $icon_html = '';
        if ( ! empty( $item->attr_title ) ) {
            $icon_class = esc_attr( $item->attr_title );
            $icon_html = '<i class="' . $icon_class . ' ms-2"></i>';
        }

        // Mega Menu Section
        if ($is_mega_menu && $depth === 0) {
            $output .= '<a' . $attributes . '>'  . $title . $icon_html . '</a>';

            $output .= '
            <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown" style="width: 100%; left: 0; right: 0;">
              <div class="container">
                <div class="row my-4">

                  <!-- Column 1 -->
                  <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
                    <div class="pt-2">
                      <div class="d-flex align-items-center">
                        <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Services Icon" class="Vector-mega">
                        <p class="services"><strong>All Services</strong></p>
                      </div>

                      <div class="d-flex ">
                        <img src="' . get_template_directory_uri() . '/src/images/Line-1.svg" alt="Separator line" class="img-fluid vertical-line position-absolute" />
                      </div>

                      <div class="mt-20">
                        <div class="quote">
                          <img src="' . get_template_directory_uri() . '/src/images/quote.svg" alt="Quote" class="img-fluid" />
                        </div>
                        <p class="quote-text">
                          We were live and our platform was having difficulty supporting a simultaneous number of users.
                          They saved the day with their solid grip on architecture level solutions.
                        </p>
                      </div>

                      <div class="d-flex info align-items-center mt-4">
                        <img src="' . get_template_directory_uri() . '/src/images/image -mega.svg" alt="Client Image" class="image-mega">
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
                            <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
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
                            <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
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
                        <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
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
                        <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
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
                        <img src="' . get_template_directory_uri() . '/src/images/Vector-mega.svg" alt="Vector Icon" class="Vector-mega">
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
            </div>';

            return;
        }

        // Default item output
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after . $icon_html;
        $item_output .= '</a>';
        $item_output .= $args->after;


        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

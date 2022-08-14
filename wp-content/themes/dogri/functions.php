<?php


function dogri_files() {
    wp_enqueue_style( 'masterialize_css', get_template_directory_uri() . '/css/materialize.min.css',false,'1.0','all');
    wp_enqueue_style('ayush_main_styles', get_stylesheet_uri());
    wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'masterialize_js', get_template_directory_uri() . '/js/materialize.min.js', array ( 'jquery' ), 1.0, true);
}
add_action('wp_enqueue_scripts', 'dogri_files');

function dogri_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );

    register_nav_menu('primary', 'primary');
}
add_action( 'after_setup_theme', 'dogri_setup');

function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		//echo '<pre>'; print_r($menu_items); die;
        $menu_list = '<ul class="right hide-on-med-and-down">';
        $menucount = 1;
		$bool = true;
        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                 
                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '" >' . $submenu->title . '</a></li>';
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                     
                    $menu_list .= '<li>';
                    $menu_list .= '<a class="dropdown-trigger" href="#" data-target="dropdown1"><span>'.$menu_item->title.'</span> <i class="material-icons right">arrow_drop_down</i></a>';
                     
                    $menu_list .= '<ul id="dropdown1" class="dropdown-content">' ."\n";
                    $menu_list .= implode( $menu_array );
                    $menu_list .= '</ul>';
                     
                } else {
                    // echo "<pre>"; print_r($menu_item); 
                    $menu_list .= '<li>';
                    $menu_list .= '<a class="nav-link scrollto active" href="'.$menu_item->url.'">' . $menu_item->title . '</a>';
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>';
			
			$menucount++;
        }
  
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    return $menu_list;
}

function mobile_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
		//echo '<pre>'; print_r($menu_items); die;
        $menu_list = '<ul class="sidenav" id="mobile-demo">';
        $menucount = 1;
		$bool = true;
        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                 
                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '" >' . $submenu->title . '</a></li>';
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                     
                    $menu_list .= '<li class="first_post" onclick="menus()">';
                    $menu_list .= '<a class="dropdown-trigger1" href="#" data-target="dropdown2"><span>'.$menu_item->title.'</span> <i class="material-icons right">arrow_drop_down</i></a>';
                     
                    $menu_list .= '<ul id="dropdown2" class="dropdown-content">' ."\n";
                    $menu_list .= implode( $menu_array );
                    $menu_list .= '</ul>';
                     
                } else {
                    // echo "<pre>"; print_r($menu_item); 
                    $menu_list .= '<li>';
                    $menu_list .= '<a class="nav-link scrollto active" href="'.$menu_item->url.'">' . $menu_item->title . '</a>';
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>';
			
			$menucount++;
        }
  
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    return $menu_list;
}

//feature image

function featured_image() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'featured_image');

require get_template_directory() . '/inc/customizer.php';
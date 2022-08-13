<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo the_title()?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    
<nav>
    <div class="nav-wrapper">
        <!-- logo image -->
    <?php if( has_custom_logo() ):  ?>
        <?php 
            // Get Custom Logo URL for image
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $custom_logo_url = $custom_logo_data[0];
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
        </a>
        <?php else: ?>

        <!-- Get Custom Logo Text -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>
        <!-- <p><?php bloginfo( 'description' ); ?></p> -->

      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <?php echo create_bootstrap_menu('primary'); ?>
        
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>

    </div>
  </nav>
        
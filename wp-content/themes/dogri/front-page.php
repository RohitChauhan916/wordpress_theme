<?php get_header();?>
<?php if(get_theme_mod('slider-display-setting') === 'Yes'){?>
<section class="banner">
    <div class="row">
            <div class="carousel carousel-slider">
                <!-- Slider 1 -->
            <?php 
                $slider_one_id = get_theme_mod( 'slider-image-one' );
                $slider_one_data = wp_get_attachment_url( $slider_one_id , 'full' );
                if ($slider_one_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_one')?>">
                    <img src="<?php echo $slider_one_data;?>">
                </a>
            <?php } ?>

            <!-- Slider 2 -->
            <?php 
                $slider_two_id = get_theme_mod( 'slider-image-two' );
                $slider_two_data = wp_get_attachment_url( $slider_two_id , 'full' );
                if ($slider_two_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_two')?>">
                    <img src="<?php echo $slider_two_data;?>">
                </a>
            <?php } ?>

            <!-- Slider 3 -->
            <?php 
                $slider_three_id = get_theme_mod( 'slider-image-three' );
                $slider_three_data = wp_get_attachment_url( $slider_three_id , 'full' );
                if ($slider_three_data){
            ?>
                <a class="carousel-item" href="<?php get_theme_mod('banner_url_three')?>">
                    <img src="<?php echo $slider_three_data;?>">
                </a>
            <?php } ?>
            </div>
    </div>
</section>
<?php } ?>

<!-- section service -->
<section class="service">
    <div class="container">
        <h3>Services</h3>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons">cloud</i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Cloud Service</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons">trending_up</i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Analytics</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card small bg_card">
                    <div class="card-image">
                        <i class="large material-icons">support_agent</i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Tech Support</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section about -->
<section class="about">
    <div class="container">
        <div class="row">
        <div class="col s12 m12 l6">
            <div class="about_para">
                <h3>ABOUT US</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="waves-effect waves-light btn-large btn_color z-depth-3">READ MORE</a>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="img_sec">
                <img class="responsive-img z-depth-1" src="https://demo.phlox.pro/free-business/wp-content/uploads/sites/40/2018/04/young-woman-holding-mobile-phone-in-office-PE9ARDR-768x640.jpg">
            </div>
        </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <h3>Blog</h3>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/office.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                        <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
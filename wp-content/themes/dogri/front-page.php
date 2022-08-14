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
<?php get_footer();?>
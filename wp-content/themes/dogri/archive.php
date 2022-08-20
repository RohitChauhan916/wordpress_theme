<?php get_header();?>
<section class="post">
    <div class="container">
    <div class="row">
    <?php 
        $homeStories = new Wp_Query(array(
            'posts_per_page' => 9,
            'post_type' => 'post',
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
            ));
        while($homeStories->have_posts()){
            $homeStories->the_post(); ?>

            <div class="col s12 m6 l4">
                <a href="<?php the_permalink();?>"><div class="card">
                <?php $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                    $image_title = get_the_title($image_id);
                    $postimg = the_post_thumbnail('post-thumbnail', ['class' => 'responsive-img']);
                    if($postimg){
                    ?>
                    <div class="card-image">
                        <img src="<?php echo $postimg?>" alt="<?php echo $image_title?>">
                    </div>
                    <?php } ?>
                    <div class="card-content post_color">
                        <span class="card-title"><?php echo wp_trim_words( get_the_title(), 3 );?></span>
                        <p><?php echo wp_trim_words(get_the_content(), 5); ?></p>
                    </div>
                </div></a>
            </div>
    <?php } ?>
    </div>

    <!-- pagination -->
    <?php $pagin = the_posts_pagination(); 
        if($pagin){
    ?>
        <div class="pagin">
            <ul class="pagination">
                <?php echo $pagin ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</section>
<?php get_footer();?>
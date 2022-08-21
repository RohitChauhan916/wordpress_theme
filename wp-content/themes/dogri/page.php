<?php 
get_header();

while(have_posts()){
    the_post();
?>
<section class="page">
    <div class="container">
        <div class="upper_cont">
            <div class="row">
                <div class="col s12 m6">
                    <div class="page_title">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="feature_img">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'responsive-img']);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="below_cont">
            <div class="row">
                <div class="s12">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>

</section>


<?php }
get_footer();
?>
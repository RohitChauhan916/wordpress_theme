<footer class="page-footer">
<?php

if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' )|| is_active_sidebar( 'fourth-footer-widget-area' ) ) {?>
  <div class="footer_pad">
  <div class="container">
    <div class="row">
      <!-- first footer -->
      <?php if ( is_active_sidebar( 'first-footer-widget-area' )) : ?>
        <div class="col s12 m6 l3">
          <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
        </div>
        <?php endif; ?>

      <!-- second footer -->
      <?php if ( is_active_sidebar( 'second-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('second-footer-widget-area');?>
      </div>
      <?php endif; ?>

      <!-- third footer -->
      <?php if ( is_active_sidebar( 'third-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('third-footer-widget-area');?>
      </div>
      <?php endif; ?>

      <!-- fourth footer -->
      <?php if ( is_active_sidebar( 'fourth-footer-widget-area' )) : ?>
      <div class="col s12 m6 l3">
        <?php dynamic_sidebar('fourth-footer-widget-area');?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  </div>
  <?php } ?>
  <?php 
    $footer_copy = get_theme_mod('footer_copy');
    if($footer_copy){ ?>
  <div class="footer-copyright">
    <div class="container">
      <?php echo $footer_copy;?>
    </div>
  </div>
  <?php } ?>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<?php wp_footer(); ?>
<script>    
    $(".dropdown-trigger").dropdown();
    $(".dropdown-trigger1").dropdown();

    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  autoplay();
function autoplay() {
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 4500);
}
</script>
</body>
</html>
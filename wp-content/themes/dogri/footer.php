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
    indicators: true,
    duration: 200
  });
  autoplay();
function autoplay() {
    $('.carousel.carousel-slider').carousel('next');
    setTimeout(autoplay, 4500);
}
</script>
</body>
</html>
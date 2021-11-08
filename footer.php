<!-- Footer -->
<section>
    <footer id="footerHomeMade" class="page-footer font-small unique-color-dark mt-5">
      <div class="container">
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
          <a href="https://www.linkedin.com/in/scdev/" style="color:white;"> HomeMade.com</a>
        </div>
      </div>
  </footer>

</body>

<?php wp_footer(); ?>

<script>
  (function($) {
    $(document).ready(function(){
      $('owl-carousel').owlCarousel({
        loop:true,
        margin:25,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            dots:true,
          },
          480:{
            items:3,
            nav:false
          },
          1000:{
            items:5,
            nav:true,
            loop:false
          }
        }
      });
    }) (jQuery);
  })

  $(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar-fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
</script>

<style>
  .navbar-fixed-top.scrolled {background-color: #fff !important;transition: background-color 200ms linear;}
  .navbar-fixed-top.scrolled .nav-link {color: #353535;}
</style>




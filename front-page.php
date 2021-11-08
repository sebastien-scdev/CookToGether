<?php
/*
Template Name: Recettes
*/
?>

<?php get_header(); ?>

<?php
// Appel banner dédiée Home
get_template_part( 'template-parts/home/banner', 'home' );
?>

<?php
// Appel news dédiée Home
get_template_part( 'template-parts/home/recettes', 'home' );
?>

<?php get_footer(); ?>
<?php wp_footer(); ?>


<script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>

<style>
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: white;
}

.card-img-top:hover .overlay {
  opacity: 1;
}

.text {
  color: #353535;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
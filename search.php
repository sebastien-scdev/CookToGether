<?php get_header(); ?>

<div class="container" style="margin-top:100px;">
    <h4 class="text-left mt-5 release">
        <?php 
            $count = $wp_query->found_posts;
            $several = ($count<=1) ? '' : 's'; //pluriel

            if ($count>0) : $output =  $count.' result'.$several.' for your search';
            else : $output = 'Sorry, no result find !';
            endif;
       $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';
       
       echo $output;
        ?>
    </h4>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="card article_found mt-5 mb-3" id="post-<?php the_ID(); ?>">
       <h3>
          <a class="artist" style="font-size:0.6em;" href="<?php the_permalink(); ?>" title="Lire l'article" <?php the_title(); ?>>
             <?php the_title(); ?>
          </a>
       </h3>
       <p class="the_excerpt">
        <?php
            // si on utilise le résumé alors on l'affiche
            if( get_the_excerpt() != '' ) : the_excerpt();

            // sinon on le crée à partir du contenu de l'article
            else : echo the_field('artistes_resume') ;

            endif;
         ?>
        <p/>
     </article>
    <?php 
    endwhile;
    
    else: 
    ?>
    <?php
    // Affiche le contenu du fichier searchform-new.php
    get_template_part( 'searchform', 'new' );
    ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
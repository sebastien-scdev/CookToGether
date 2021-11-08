<?php
/*
Template Name: Tours
*/
?>

<?php wp_head(); ?>
<?php get_header(); ?>

<div class="container mt-7">
    <?php
    $queried_object = get_queried_object();
    $term_id = $queried_object->term_id;

    $args = array(
    'hide_empty' => false,
    'taxonomy' => 'date_cat',
    'orderby' => 'publish_date',
    'parent' => $term_id,
    'order' => 'ASC',
    );
    $categories = get_terms($args); 

if (count($categories) > 0) :
    $count = 0;
    foreach ($categories as $category) :
        $defaultClass = 'col-lg-12';
         ?>

        <div class="<?= $defaultClass ?> date-categories no-padding">
            <h4 class="text-left mt-5 release"> Live </h4>
            <hr>
            <div class="row">
                    <?php
                    $args = [
                        'post_type' => 'date',
                        'tax_query' => [
                            [
                                'taxonomy' => 'date_cat',
                                'field' => 'term_id',
                                'order' => 'ASC',
                                'terms' => $category->term_id
                            ]
                        ]
                    ];
                    $query = new WP_Query($args);

                    $articleHiddenClass = 'd-none';
                    $showMoreArticles = 4;
                    $maxVisiblePosts = 8;
                    $numPostsToFetch = 4;
                    $numCols = 3;
                    if ($count > 2) {
                        $maxVisiblePosts = 8;
                        $numPostsToFetch = 4;
                        $numCols = 3;
                    }
                    $postNum = 0;
                    while ($query->have_posts()) : $query->the_post();

                        echo '<div class="col-lg-' . $numCols . ' col-12 mb-3' . (++$postNum > $maxVisiblePosts ? " {$articleHiddenClass}" : '') . '" data-term-id="' . $category->term_id . '">';
                        echo '<a class="card no-border" href="';
                        echo the_field('artist_link');
                        echo '">';
                        echo '<div class="card-img-top news">';
                        the_post_thumbnail();
                        echo '</div>';
                        echo '<div class="card-body">';
                        echo '<a class="card-body-link" href="';
                        echo the_field('artist_link');
                        echo '">';
                        echo '<a class="artist" href="';
                        echo the_field('artist_link');
                        echo '">';
                        the_title();
                        echo '</a>';
                        echo '<div class="card-text">';
                        echo '<span class="text-date">';
                        echo '<ul class="date-list mt-2">';
                        echo '<li>';
                        echo the_field('date_list');
                        echo '</li>';
                        echo '</ul>';
                        echo '</span>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    endwhile;
                    ?>
                </div>
                <?php
                if ($postNum > $maxVisiblePosts) {
                        echo <<<SCRIPT
                     <script>
                            function showMoreArticles_term_{$category->term_id}(ev) {
                            var hiddenArticlesSelector = '[data-term-id="{$category->term_id}"].{$articleHiddenClass}';
                            var els = $(hiddenArticlesSelector + ':lt({$numPostsToFetch})');
                            jQuery(els).fadeIn();
                            els.removeClass('{$articleHiddenClass}');

                            els = $(hiddenArticlesSelector);
                            if (jQuery(els).size() == 0) {
                                jQuery('.btn-more').fadeOut();
                            }
                        }
                        </script>           
SCRIPT;
                    echo <<<HTML
                        <div class="button text-center">
                            <button class="btn btn-more mt-3" style='clear: both'
                                onclick="showMoreArticles_term_{$category->term_id}(this)">
                                See More Live
                            </button>
                        </div>
HTML;
                }
                  wp_reset_postdata();
                  ?>
        </div>
        <?php $count++;
    endforeach;
endif; ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>

<style>
#footerinfine {background: #353535;width: 100%;bottom: 0;position: absolute;}
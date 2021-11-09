<section>
    <div class="container mt-4">
        <h1 class="text-left mt-5 release"> LES RECETTES <span class="font-italic">by</span> HOME MADE </h1>
        <hr>

        <?php
	$queried_object = get_queried_object();
	$term_id = $queried_object->term_id;

	$args = array(
    'hide_empty' => false,
    'taxonomy' => 'recettes_cat',
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

        <div class="<?= $defaultClass ?> animated fadeInUp news-categories no-padding">
            <div class="row">
                <?php
                    $args = [
                        'post_type' => 'recettes',
                        'posts_per_page' => '100',
                        'tax_query' => [
                            [
                                'taxonomy' => 'recettes_cat',
                                'field' => 'term_id',
                                'order' => 'ASC',
                                'terms' => $category->term_id
                            ]
                        ]
                    ];

                    $query = new WP_Query($args);

                    $articleHiddenClass = 'd-none';
                    $showMoreArticles = 4;
                    $maxVisiblePosts = 4;
                    $numPostsToFetch = 4;
                    $numCols = 3;
                    if ($count > 2) {
                        $maxVisiblePosts = 4;
                        $numPostsToFetch = 4;
                        $numCols = 3;
                    }
                    $postNum = 0;

                    while ($query->have_posts()) : $query->the_post();
                    	
                        echo '<div class="col-lg-' . $numCols . ' col-12 mb-3' . (++$postNum > $maxVisiblePosts ? " {$articleHiddenClass}" : '') . '" data-term-id="' . $category->term_id . '">';
                        echo '<a type="button" class="btn-floating btn-sm orange-gradient"><i class="fa fa-heart" aria-hidden="true"></i>';
                        echo '<a class="card no-border" href="';
                        the_permalink();
                        echo '">';
                        echo '<div class="card-img-top">';
                        the_post_thumbnail();
                        echo '<div class="info">';
    					echo '<div class="card-text">';
                        echo '<span class="text-news">';
                        echo '<p class="subtitle-edition">';
                        $excerpt = get_the_excerpt();
                        $excerptLen = strlen($excerpt);
                        $maxLen = 120;
                        $shorterExcerptLen = $maxLen;
                        // Skip white spaces
                        while ($excerptLen > $shorterExcerptLen) {
                            if (!ctype_space($excerpt[$shorterExcerptLen])) break;
                            ++$shorterExcerptLen;
                        }
                        // Skip non white spaces
                        while ($excerptLen > $shorterExcerptLen) {
                            if (ctype_space($excerpt[$shorterExcerptLen])) break;
                            ++$shorterExcerptLen;
                        }
                        $excerpt = substr($excerpt, 0, $shorterExcerptLen);
                        $excerpt = strip_tags($excerpt);
                        echo $excerpt;
                        if ($shorterExcerptLen > $maxLen) {
                            echo "(...)";
                        }
                        echo '</p>';
                        echo '</span>';
                        echo '</div>';
  						echo '</div>';
						echo '</div>';
                        echo '<div class="card-body">';
                        echo '<a class="card-body-link" href="';
                        the_permalink();
                        echo '">';
						echo '<a class="artist" href="';
                        the_permalink();
                        echo '">';
						the_title();
						echo '</a>';
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
                            <button class="btn btn-newsletter mt-3" style='clear: both'
                                onclick="showMoreArticles_term_{$category->term_id}(this)">
                                Plus de recettes
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
    <section>

    <style>
            .btn-floating {
                position: relative;
                z-index: 1;
                display: inline-block;
                padding: 0;
                margin: 10px;
                overflow: hidden;
                vertical-align: middle;
                cursor: pointer;
                border-radius: 50%;
                -webkit-box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%), 0 4px 15px 0 rgb(0 0 0 / 15%);
                box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%), 0 4px 15px 0 rgb(0 0 0 / 15%);
                -webkit-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out;
                width: 44px;
                height: 44px;
            }

            .waves-effect {
                position: relative;
                overflow: hidden;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-tap-highlight-color: transparent;
            }

            .btn-floating i {
                display: inline-block;
                width: inherit;
                color: #fff;
                text-align: center;
            }

            a.btn-floating.btn-sm.orange-gradient {
                position: absolute;
                bottom: 20%;
                right: 40%;
                z-index: 4;
            }

            @media only screen and (max-device-width: 1200px) and (-webkit-min-device-pixel-ratio: 1) {
                a.btn-floating.btn-sm.orange-gradient {
                    position: absolute;
                    bottom: 25%;
                    right: 36%;
                    z-index: 4;
                }
            }

            @media only screen and (max-device-width: 990px) and (-webkit-min-device-pixel-ratio: 1) {
                a.btn-floating.btn-sm.orange-gradient {
                    position: absolute;
                    bottom: 10%;
                    right: 46%;
                    z-index: 4;
                }
            }

            @media only screen and (max-device-width: 768px) and (-webkit-min-device-pixel-ratio: 1) {
                a.btn-floating.btn-sm.orange-gradient {
                    bottom: 15%;
                }
            }

            @media only screen and (max-device-width: 414px) and (-webkit-min-device-pixel-ratio: 1) {
                a.btn-floating.btn-sm.orange-gradient {
                    bottom: 15%;
                    right: 42%;
                }

                h5.fronttitle {
                    width: fit-content;
                    background-color: #ffffffcc;
                    font-family: 'IBM Plex Sans';
                    line-height: 1;
                    margin-left: 0px;
                    font-size: 2rem;
                    border-radius: 40px;
                }
            }

            .btn-floating:hover {
                -webkit-box-shadow: 0 8px 17px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
                box-shadow: 0 8px 17px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
            }

            .btn-floating.btn-sm i {
                font-size: 1.2rem;
                line-height: 48px;
            }

            .orange-gradient {
                background: linear-gradient(40deg, #fd6900, #ebc046) !important;
            }

            .info {
                position: absolute;
                z-index: 3;
                color: white;
                opacity: 0;
                transform: translateY(0px);
                transition: 0.5s;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                padding: 90px 10px 60px 10px;
            }

            .info:hover {
                opacity: 1;
                transform: translateY(0px);
                background: #fe931db8;
            }
        </style>
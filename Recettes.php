<?php
/*
Template Name: Toutes les recettes
*/
?>
<?php wp_head(); ?>

<?php get_header(); ?>

<section>
    <div class="container mt-7">
        <h4 class="text-left mt-5 release"> Toutes nos recettes </h4>
        <hr>
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 news-display" style="display: contents;">
                <?php
                $args = array(
                    'post_type' => 'recettes',
                    'orderby' => 'title',
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'posts_per_page' => '20',
                );
                // The Query
                $the_query = new WP_Query($args);
                // The Loop
                if ($the_query->have_posts()) { ?>
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>
                        <div class="col-lg-12 mt-3 mb-3">    
                            <div class="release_info_news" style="font-size:2em; text-align:left;display: flex; flex-direction: row;">
                                <?php 
                                $news_artist_information = get_field('news_artist_information');
                                if ($news_artist_information): ?>
                                    <h4 class="artist-title">
                                        <a href="<?= $news_artist_information['news_artist_link']; ?>">
                                            <span class="news-single"><?= $news_artist_information['news_artist_title']; ?>
                                        </span>
                                    </a>   
                                    <br>
                                    <p class="news"><?php the_title(''); ?></p>
                                <?php endif; ?>
                            </h4>
                            
                        </div>
                    </div>
                    <?php if( get_field('news_text_content') ): ?>
                        <div class="col-lg-12 mb-3">
                            <div class="text-news">
                                <?php the_field('news_text_content'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="mt-4"></div>
                    <div class="col-lg-12 mt-3 mb-3">    
                        <div class="release_info_news" style="text-align:left;display: flex; flex-direction: row;">
                            <div class="col-lg-4 col-xs-12 no-padding">
                                <?php 
                                $news_artist_media = get_field('news_artist_media');
                                if ($news_artist_media): ?>
                                    <?= $news_artist_media['news_artist_videobandcamp']; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="text-news">
                                    <?php 
                                    $news_artist_media = get_field('news_artist_media');
                                    if ($news_artist_media): ?>
                                        <?= $news_artist_media['news_artist_text']; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <?php
                    $hero = get_field('hero');
                    if( $hero ): ?>
                        <div id="hero">
                            <img src="<?php echo esc_url( $hero['image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>" />
                            <div class="content">
                                <?php echo $hero['caption']; ?>
                                <a href="<?php echo esc_url( $hero['link']['url'] ); ?>"><?php echo esc_html( $hero['link']['title'] ); ?></a>
                            </div>
                        </div>
                        <style type="text/css">
                            #hero {
                                background-color: <?php echo esc_attr( $hero['color'] ); ?>;
                            }
                        </style>
                    <?php endif; ?>
                    <?php 
                    $news_artist_album = get_field('news_artist_album');
                    if ($news_artist_album): ?>
                        <div class="col-lg-12 mt-3 mb-3">    
                            <div class="release_info_news" style="text-align:left;display: flex; flex-direction: row;">
                                <div class="col-lg-4 col-xs-12 no-padding">
                                    <div class="news-item">
                                       <img src="<?php echo $news_artist_album['news_album']; ?>">
                                   </div>
                               </div>
                               <div class="col-lg-8 col-xs-12">
                                <div class="text-news">
                                    <?php echo $news_artist_album['news_text']; ?>
                                </div>                                                                                
                            </div>
                        </div>
                    </div>
                <?php endif; ?> 
                <?php
                }
                ?>
                <?php
                wp_reset_postdata();
            } else {
                // no posts found
            }
            ?>
            <hr>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>
<?php wp_footer(); ?>
<section>
    <div class="container mt-7">
        <h4 class="text-left mt-5 release"> RECETTES </h4>
        <hr>
        <div class="justify-content-center mb-4">
            <div class="news-display" style="display: contents;">
                <div class="mt-3 mb-3">
                    <div class="release_info_news" style="font-size:2em; text-align:left;">
                        <?php 
                        $news_recettes_information = get_field('news_recettes_information');
                        if ($news_recettes_information): ?>
                        <div class="container-recettes col-lg-12 d-flex" style="padding:0;">
                            <div class="col-lg-8" style="padding:0;">
                                <img class="header-img"
                                    src="<?= $news_recettes_information['news_recette_banner']; ?>" />
                                <div>
                                    <h4 class="artist-title mt-3 mb-4">
                                        <a href="<?= $news_recettes_information['news_recette_link']; ?>">
                                            <span
                                                class="recette-single"><?= $news_recettes_information['news_recette_title']; ?>
                                            </span>
                                            <div class="text-ingredient mt-2">
                                                <?= $news_recettes_information['news_recette_intro']; ?> </div>
                                        </a>
                                    </h4>
                                </div>
                                <?php if( get_field('news_text_content') ): ?>
                                <div class="mb-3">
                                    <div class="text-ingredient">
                                        <?php the_field('news_text_content'); ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-column col-lg-4" style="padding:0;">
                                <div class="information-nutri">
                                    <div class="information-nutri--timer">
                                        <i class="far fa-clock"></i>
                                        <p class="ml-2">temps total :
                                            <b><?= $news_recettes_information['news_recette_timer']; ?></b></p>
                                    </div>
                                    <div class="information-nutri--calories mt-2">
                                        <i class="fas fa-burn"></i>
                                        <p class="ml-2">Apport journalier :
                                            <b><?= $news_recettes_information['news_recette_calorie']; ?></b></p>
                                    </div>
                                </div>
                                <div class="information-ingredient sticky-element--sticked">
                                    <p class="title-ingredient"> Ingrédients</p>
                                    <p class="subtitle-ingredient"> pour
                                        <?= $news_recettes_information['news_recette_portion']; ?> portion(s)</p>
                                    <div class="mt-3">
                                        <?= $news_recettes_information['news_recette_ingredient']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .sticky-element--sticked {
        width: 100%;
        min-height: 200px;
        overflow: auto;
        position: -webkit-sticky;
        position: sticky;
        top: 12%;
    }
</style>
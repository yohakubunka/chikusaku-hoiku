<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/mainvisual'); ?>
    <section id="section_top_search">
        <div class="page-width">

            <div class="top_head">
                <?php get_template_part('images/svg/search-solid'); ?>
                <h1>保育施設を探す</h1>
            </div>


            <div class="background-area">
                <?php get_template_part('images/svg/left-flower'); ?>

                <h2 class="text-center">エリアを選択してください。</h2>
                <div class="area-select">
                    <?php get_template_part('images/svg/map') ?>
                    <?php get_template_part('images/svg/map-sp') ?>

                    <div class="area-select__list">
                        <?php
                        $terms = get_terms('facility_area');
                        foreach ($terms as $term) : ?>
                            <a class="right-brown-arrow h2_text" href="<?= home_url() ?>/facility_list/#<?= $term->name ?>"><?= $term->name ?><?php get_template_part('images/svg/brown-arrow'); ?></a>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= home_url() ?>/facility_list" class="orange-border-button">施設一覧</a>
                </div>

                <?php get_template_part('images/svg/right-weed'); ?>
            </div>

        </div>
    </section>

    <section id="section_top_news">
        <div class="page-width">
            <div class="top_head">
                <?php get_template_part('images/svg/bullhorn-solid'); ?>
                <h1>お知らせ</h1>
            </div>

            <!-- 背景 -->
            <div class="background-area">
                <?php get_template_part('images/svg/left-flower-2'); ?>
                <!-- 背景end -->

                <?php if (have_posts()) : ?>
                    <div class="front-news-area">
                        <?php
                        $new_count = 1;
                        $args = array(
                            'posts_per_page' => 3
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) :
                            setup_postdata($post);
                        ?>
                            <a class="front-news-area__row" href="<?= home_url(); ?>/news?post_num=<?= $new_count ?>#news_count<?= $new_count ?>">
                                <div class="data-category">
                                    <p class="data-category__date"><?= get_the_date(); ?></p>
                                    <p class="data-category__category"><?php $category = get_the_category();
                                                                        echo $category[0]->cat_name; ?></p>
                                </div>
                                <div class="title-icon">
                                    <p class="title-icon__title"><?= get_the_title(); ?></p><?php get_template_part('images/svg/brown-arrow'); ?>
                                </div>
                            </a>
                        <?php
                            $new_count++;
                        endforeach; // ループの終了
                        ?>
                        <a href="<?= home_url() ?>/news" class="orange-border-button">お知らせ一覧</a>
                    </div>
                <?php endif; ?>

                <!-- 背景 -->
                <?php get_template_part('images/svg/right-flower-2'); ?>
            </div>
            <!-- 背景end -->

        </div>
    </section>

    <section>
        <div class="page-width">
            <div class="top_head">
                <?php get_template_part('images/svg/school-solid2'); ?>
                <h1>千種区保育園連絡会について</h1>
            </div>

            <div class="background-area">
                <?php get_template_part('images/svg/left-flower'); ?>
                <div class="two-column">
                    <div class="two-column__left">
                        <p class="h2_text"><?php echo get_theme_mod('top_sec_about_title'); ?></p>
                        <p><?php echo get_theme_mod('top_sec_about_text'); ?></p>
                    </div>
                    <div class="two-column__right">
                        <img src="<?php echo get_theme_mod('top_sec_about_image'); ?>" alt="千種区保育園連絡会のロゴ">
                    </div>
                </div>
                <a href="<?= home_url(); ?>/about" class="orange-border-button">連絡会について</a>
                <?php get_template_part('images/svg/right-weed'); ?>
            </div>

        </div>
    </section>


</main>


<?php get_footer(); ?>
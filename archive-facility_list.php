<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>

<div class="page-width bread-wrap">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<main>
    <section id="facility_list">
        <div class="page-width">

            <div class="background-area">
                <?php get_template_part('images/svg/left-flower'); ?>

                <h2 class="text-center">エリアを選択してください。</h2>
                <div class="area-select">

                    <?php get_template_part('images/svg/map2') ?>
                    <?php get_template_part('images/svg/map-sp2') ?>

                    <div class="area-select__list">
                        <?php
                        $terms = get_terms('facility_area');
                        foreach ($terms as $term) : ?>
                            <a class="right-brown-arrow h2_text" href="#<?= $term->name ?>"><?= $term->name ?><?php get_template_part('images/svg/brown-arrow'); ?></a>
                        <?php endforeach; ?>
                    </div>

                    <?php get_template_part('images/svg/right-weed'); ?>
                </div>
            </div>

            <div class="facility-area">
                <!-- 背景 -->
                <div class="background-area fixweed">
                    <?php get_template_part('images/svg/left-flower-2'); ?>
                    <!-- 背景end -->
                    <?php
                    $taxonomy_name = 'facility_area';
                    $taxonomys = get_terms($taxonomy_name);
                    if (!is_wp_error($taxonomys) && count($taxonomys)) :

                        foreach ($taxonomys as $taxonomy) :
                            $tax_posts = get_posts(array(
                                'posts_per_page' => 15,
                                'post_type' => get_post_type(), 'taxonomy' => $taxonomy_name,
                                'term' => urldecode($taxonomy->slug)
                            ));

                            if ($tax_posts) :
                    ?>
                                <p class="h2_text" id="<?php echo esc_html($taxonomy->name); ?>"><?php echo esc_html($taxonomy->name); ?>エリア<span class="post-count"><?= $taxonomy->count ?>件</span></p>
                                <?php if (!next($taxonomys)) : ?>
                                    <div class="facility-cards lastcard">
                                    <?php else : ?>
                                        <div class="facility-cards ">

                                        <?php endif; ?>
                                        <?php
                                        foreach ($tax_posts as $tax_post) :
                                        ?>
                                            <a class="facility-card" href="<?php echo get_permalink($tax_post->ID); ?>">
                                                <div class="facility-card__terms">

                                                    <?php // 投稿に紐づくタームの一覧を表示
                                                    $taxonomy_slug = 'facility_type';
                                                    $category_terms = wp_get_object_terms($tax_post->ID, $taxonomy_slug);
                                                    if (!empty($category_terms)) {
                                                        if (!is_wp_error($category_terms)) {
                                                            foreach ($category_terms as $category_term) {
                                                                echo '<p class="facility-card__terms--type">' . $category_term->name . '</p>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                    <?php // 投稿に紐づくタームの一覧を表示
                                                    $taxonomy_sluga = 'facility_class';
                                                    $category_termsa = wp_get_object_terms($tax_post->ID, $taxonomy_sluga);
                                                    if (!empty($category_termsa)) {
                                                        if (!is_wp_error($category_termsa)) {
                                                            foreach ($category_termsa as $category_term) {
                                                                echo '<p>' . $category_term->name . '</p>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                                <p class="h2_text"><?php echo get_the_title($tax_post->ID); ?></p>
                                                <?php get_template_part('images/svg/brown-arrow'); ?>
                                            </a>
                                        <?php endforeach; ?>
                                        </div>

                            <?php endif;
                        endforeach;
                    endif; ?>

                            <!-- 背景 -->
                            <?php get_template_part('images/svg/right-flower-2'); ?>
                                    </div>
                                    <!-- 背景end -->
                </div>

    </section>

</main>
<?php get_footer(); ?>
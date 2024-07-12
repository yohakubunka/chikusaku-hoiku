<section id="news-section">
    <div class="page-width">


        <div class="background-area">
            <?php get_template_part('images/svg/left-flower'); ?>

            <div class="news-two-colmn">

                <div class="news-area">
                    <?php $news_count = 1; ?>
                    <!-- トップページのお知らせから遷移してきたときにアコーディオンをオープン状態にするための処理 -->
                    <!-- ゲットパラメータで送られてきたpost_numが入っている、かつ、パラメーターと$news_countが一致したときにopenクラス付与 -->
                    <?php
$post_num_exists = isset($_GET['post_num']);
$post_num = $post_num_exists ? $_GET['post_num'] : null;
?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :  the_post() ?>
                            <?php if (($post_num_exists && $post_num == $news_count) || ($news_count == 1 && !$post_num_exists)) : ?>
                                <div class="accordion news-area__content open" id="news_count<?= $news_count ?>">
                                <?php else : ?>
                                    <div class="accordion news-area__content" id="news_count<?= $news_count ?>">
                                    <?php endif; ?>

                                    <div class="news_head">
                                        <div class="news_head__title-info">
                                            <div class="title-cat">
                                                <p class="title-cat__date"><?= get_the_date(); ?></p>
                                                <?php
                                                $category = get_the_category();
                                                echo '<a class="title-cat__cat" href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name  . "</a>";
                                                ?>
                                            </div>
                                            <p class="h2_text"><?= get_the_title(); ?></p>
                                        </div>
                                        <?php get_template_part('images/svg/accordion-arrow'); ?>
                                    </div>

                                    <div class="accordion_child"><?php the_content(); ?></div>
                                    </div>


                                    <?php $news_count++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                                </div>
                                <div class="side-menu">
                                    <div class="side-menu__category accordion">
                                        <p class="h2_text">カテゴリ―<?php get_template_part('images/svg/ac-arrow-brown'); ?></p>
                                        <?php
                                        // 親カテゴリーのものだけを一覧で取得
                                        $args = array(
                                            'parent' => 0,
                                            'orderby' => 'term_order',
                                            'order' => 'ASC',
                                        );
                                        $categories = get_categories($args);
                                        ?>
                                        <ul class="accordion_child">
                                            <?php foreach ($categories as $category) : ?>
                                                <li>
                                                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?>（<?php echo sprintf('%02d', $category->category_count); ?>）</a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>


                                    <div class="side-menu__archive accordion">
                                        <p class="h2_text">アーカイブ<?php get_template_part('images/svg/ac-arrow-brown'); ?></p>
                                        <ul class="accordion_child">
                                            <?php wp_get_archives('post_type=post&type=monthly&show_post_count=1'); ?>
                                        </ul>

                                    </div>

                                </div>
                </div>
                <?php
                /* ページャーの表示     */
                global $wp_query;
                if (function_exists('pagination')) :
                    pagination($wp_query->max_num_pages, (get_query_var('paged')) ? get_query_var('paged') : 1);  //$wp_query ではなく $the_query ないことに注意！
                endif;
                ?>
                <?php get_template_part('images/svg/right-weed'); ?>
            </div>

        </div>


</section>

<script>
    //accordion
    $(function() {
        $('.accordion').on('click', function() {
            /*クリックでコンテンツを開閉*/
            $(this).find('.accordion_child').slideToggle(350);
            /*矢印の向きを変更*/
            $(this).toggleClass('open', 350);
        });
    });

    $(function() {
        // openクラスがあれば記事の内容を表示
        if ($('.accordion').hasClass('open')) {
            $('.accordion.open').find('.accordion_child').css('display', 'block');
        }
    });
</script>
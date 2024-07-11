<section id="mv-section">
    <?php if (is_home() || is_front_page()) : ?>
        <div class="mainvisual">
            <img class="mainvisual__image xpc" src="<?php echo get_theme_mod('mainvisual'); ?>" alt="メインビジュアル">
            <img class="mainvisual__image xsp" src="<?php echo get_theme_mod('mainvisual_sp'); ?>" alt="メインビジュアル">
            <img class="coara" src="<?= get_template_directory_uri() ?>/images/coara.png" alt="コアラのイラスト">
            <div class="catch-copy">
                <h1 class="catch-copy__top"><?php echo get_theme_mod('mainvisual_text'); ?></h1>
                <p class="h2_text">千種区保育園連絡会</p>
            </div>
        </div>
    <?php elseif (is_post_type_archive('facility_list')) : ?>
        <div class="under_green">
            <h1>施設一覧</h1>
        <?php elseif (is_singular('facility_list')) : ?>
            <div class="under_green">
                <h1>施設情報</h1>
            </div>
        <?php elseif (is_page('about')) : ?>
            <div class="under_green">

                <h1>連絡会について</h1>
            </div>
        <?php elseif (is_archive('news')) : ?>
            <div class="under_green">
                <h1>お知らせ</h1>
            </div>
        <?php elseif (is_page('contact')) : ?>
            <div class="under_green">
                <h1>お問い合わせ</h1>
            </div>
        <?php endif; ?>
</section>
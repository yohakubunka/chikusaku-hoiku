<?php wp_footer(); ?>
<?php $theme_options = get_option('theme_option_name'); ?>
<footer class="footer">
    <div class="page-width footer-wrap">
        <div id="page_top">
            <p><?php get_template_part('images/svg/page-top') ?></p>
        </div>
        <p class="footer__logo logo_text">千種区保育園連絡会</p>
        <div class="two-info">
            <div class="two-info__left">
                <p class="two-info__left--tell h2_text"><?php get_template_part('images/svg/white-phone'); ?><a href="tel:<?= $theme_options['op_1']; ?>"><?= $theme_options['op_1']; ?></a></p>
                <p class="two-info__left--text"><?= $theme_options['op_2']; ?></p>
                <p class="two-info__left--text">受付時間　<?= $theme_options['op_3']; ?></p>
            </div>
            <!-- <div class="two-info__right">
                <p class="two-info__right--tell h2_text"><?php get_template_part('images/svg/white-mail'); ?><a href="<?= home_url() ?>/contact">メールフォーム</a></p>
                <p class="two-info__right--text">24時間受付中</p>
            </div> -->
        </div>
        <nav class="footer__nav">
            <ul class="footer_links">
                <li class="footer_links__item"><a href="<?= home_url() ?>">トップページ</a></li>
                <li class="footer_links__item"><a href="<?= home_url() ?>/facility_list">施設一覧</a></li>
                <li class="footer_links__item"><a href="<?= home_url() ?>/about">連絡会について</a></li>
                <li class="footer_links__item"><a href="<?= home_url() ?>/news">お知らせ</a></li>
                <li class="footer_links__item"><a href="<?= home_url() ?>/contact">お問い合わせ</a></li>
            </ul>
        </nav>
        <p class="copy-text">© 2022 千種区保育園連絡会<br><a href="https://yohaku-bunka.com" target="_blank">PRODUCED BY YOHAKU BUNKA</a></p>
    </div>
</footer>
</body>

</html>
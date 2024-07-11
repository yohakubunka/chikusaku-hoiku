<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width bread-wrap">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>
<?php $theme_options = get_option('theme_option_name'); ?>

<section id="contact-info">
    <div class="page-width">
        <h2 class="text-center">ご質問やご相談を承ります。<br>どうぞお気軽にお問い合わせください。</h2>

        <div class="two-info">
            <div class="two-info__left">
                <p class="two-info__left--tell h2_text"><?php get_template_part('images/svg/green_phone'); ?><a href="tel:<?= $theme_options['op_1']; ?>"><?= $theme_options['op_1']; ?></a></p>
                <p class="two-info__left--text"><?= $theme_options['op_2']; ?></p>
                <p class="two-info__left--text">受付時間<?= $theme_options['op_3']; ?></p>
            </div>
            <!-- <div class="two-info__right">
                <p class="two-info__right--tell h2_text"><?php get_template_part('images/svg/green_mail'); ?>メールフォーム</p>
                <p class="two-info__right--text">24時間受付中</p>
            </div> -->
        </div>
    </div>

</section>

<!-- <section id="contact-form">
    <div class="page-width">
        <h2 class="text-center">お問い合わせフォーム</h2>
        <div class="caution-text">
            <p>入力欄は全て必須項目です。</p>
            <p>「個人情報保護方針」をお読みになり、同意のうえご記入ください。</p>
            <p>ご返信までに2～3日かかることもございますので、お急ぎの方はお電話にてお問い合わせください。</p>
            <p>返信メールをお受け取りいただけるよう、受信設定（迷惑メール設定）等をお確かめください。</p>
        </div>

    </div>
</section> -->

<?php get_footer(); ?>
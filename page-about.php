<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width bread-wrap">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<div class="page-width">

    <section id="about-sec01">
        <div class="background-area">
            <?php get_template_part('images/svg/left-flower'); ?>
            <div class="about-text">
                <h2 class="about-text__head">千種区保育園連絡会とは</h2>
                <p class="about-text__sentence pc"><?= nl2br(get_field('about_sec_top_text')) ?></p>
                <p class="about-text__sentence sp"><?= nl2br(get_field('about_sec_top_text_sp')) ?></p>
                <img src="<?= get_field('about_sec_top_image') ?>" alt="子どもが走っている写真">
            </div>
            <?php get_template_part('images/svg/right-weed'); ?>
        </div>

    </section>

    <section id="about-sec02">
        <h2>事業の主な内容</h2>
        <div class="background-area">
            <?php get_template_part('images/svg/left-flower-2'); ?>

            <div class="two-column">
                <div class="two-column__left">
                    <?php for ($i = 1; $i < 7; $i++) : ?>
                        <p><?= get_field('about_sec_business_text_0' . $i) ?>
                        <?php endfor; ?>
                </div>
                <div class="two-column__right">
                    <img src="<?= get_field('about_sec_business_image') ?>" alt="子どもが遊んでいる写真">
                </div>
            </div>

            <?php get_template_part('images/svg/right-flower-2'); ?>
        </div>
    </section>

    <section id="about-sec03">

        <h2>関連団体</h2>
        <div class="background-area">
            <?php get_template_part('images/svg/left_weed_2'); ?>
            <div class="group-buttons">
                <?php
                $gallery_group = SCF::get('about_sec_group');
                foreach ($gallery_group as $fields) :
                ?>
                    <?php if (!$fields['about_sec_group_link']) :  ?>
                        <a class="comingsoon h2_text group-buttons__button" target="_blank" rel="noopener noreferrer" href=""><?php echo $fields['about_sec_group_text']; ?><?php get_template_part('images/svg/link') ?></a>
                    <?php else : ?>
                        <a class="h2_text group-buttons__button" target="_blank" rel="noopener noreferrer" href="<?php echo $fields['about_sec_group_link']; ?>"><?php echo $fields['about_sec_group_text']; ?><?php get_template_part('images/svg/link') ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php get_template_part('images/svg/right_weed_2'); ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>
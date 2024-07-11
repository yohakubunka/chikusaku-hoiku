<?php get_header(); ?>
<?php get_template_part('template-parts/mainvisual'); ?>
<div class="page-width bread-wrap">
    <?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<section id="single-facility">
    <div class="page-width">

        <div class="background-area">
            <?php get_template_part('images/svg/left-flower'); ?>

            <div class="tag-area">

                <?php
                $facilit_type = get_the_terms(get_the_ID(), 'facility_type');
                foreach ($facilit_type as $area) {
                    echo "<p class='tag-area__type'>" . $area->name . "</p>";
                }
                ?>

                <?php
                $facilit_class = get_the_terms(get_the_ID(), 'facility_class');
                foreach ($facilit_class as $class) {
                    echo "<p class='tag-area__class'>" . $class->name . "</p>";
                }
                ?>

            </div>

            <div class="title-intro">
                <h2><?php the_title(); ?></h2>
                <?php if (get_field('facility_intro')) : ?>
                    <p class="title-intro__text"><?= get_field('facility_intro'); ?></p>
                <?php endif; ?>
            </div>


            <?php if (get_field('facility_image')) : ?>
                <img src="<?= get_field('facility_image') ?>" alt="施設写真">
            <?php endif; ?>


            <?php get_template_part('images/svg/right-weed'); ?>
        </div>

        <div class="facility-info">
            <!-- 背景 -->
            <div class="background-area">
                <?php get_template_part('images/svg/left-flower-2'); ?>
                <!-- 背景end -->
                <?php if (get_field('facility_address')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">住所</p>
                        <p class="facility-info__row--text"><?= get_field('facility_address'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_phone')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">電話番号</p>
                        <p class="facility-info__row--text"><?= get_field('facility_phone'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_fax')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">FAX番号</p>
                        <p class="facility-info__row--text"><?= get_field('facility_fax'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_time')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">保育時間</p>
                        <p class="facility-info__row--text"><?= get_field('facility_time'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_coretime')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">コアタイム</p>
                        <p class="facility-info__row--text"><?= get_field('facility_coretime'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_capacity')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">定員</p>
                        <p class="facility-info__row--text"><?= get_field('facility_capacity'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_age')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">受入年齢</p>
                        <p class="facility-info__row--text accept_age"><?= nl2br(get_field('facility_age')); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_class')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">クラス編成</p>
                        <p class="facility-info__row--text"><?= get_field('facility_class'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_parking')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">駐車場（台数）</p>
                        <p class="facility-info__row--text"><?= get_field('facility_parking'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_playground')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">園庭</p>
                        <p class="facility-info__row--text"><?= get_field('facility_playground'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_park')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">よく行く公園</p>
                        <p class="facility-info__row--text"><?= get_field('facility_park'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_futon')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">布団持参</p>
                        <p class="facility-info__row--text"><?= get_field('facility_futon'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_diapers')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">おむつ対応</p>
                        <p class="facility-info__row--text"><?= get_field('facility_diapers'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_event')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">主な行事</p>
                        <p class="facility-info__row--text"><?= get_field('facility_event'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_parents')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">保護者会</p>
                        <p class="facility-info__row--text"><?= get_field('facility_parents'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_community')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">地域開放</p>
                        <p class="facility-info__row--text"><?= get_field('facility_community'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_fieldtrip')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">見学について</p>
                        <p class="facility-info__row--text"><?= get_field('facility_fieldtrip'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_other')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">その他の事業</p>
                        <p class="facility-info__row--text"><?= get_field('facility_other'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('facility_homepage')) : ?>
                    <div class="facility-info__row">
                        <p class="facility-info__row--head">ホームページ</p>
                        <p class="facility-info__row--text"><?= get_field('facility_homepage'); ?></p>
                    </div>
                <?php endif; ?>

                <?php
                $gallery_group = SCF::get('facility_add_info');
                foreach ($gallery_group as $fields) :
                ?>
                    <?php if ($fields['facility_info_text'] != '' && $fields['facility_info_title'] != '') : ?>
                        <div class="facility-info__row">
                            <p class="facility-info__row--head"><?= $fields['facility_info_title'] ?></p>
                            <p class="facility-info__row--text"><?= $fields['facility_info_text']; ?></p>
                        </div>

                    <?php endif ?>
                <?php endforeach; ?>


                <div class="buttons">
                    <?php if (get_field('facility_phone')) : ?>
                        <a class="orange-border-button-icon" href="tel:<?= get_field('facility_phone'); ?>"><?php get_template_part('images/svg/orange-phone') ?><?= get_field('facility_phone'); ?></a>
                    <?php endif; ?>

                    <?php if (get_field('facility_homepage')) : ?>
                        <a target="_blank" class="orange-border-button-icon" href="<?= get_field('facility_homepage'); ?>"><?php get_template_part('images/svg/desktop-solid') ?>HPを見る</a>
                    <?php endif; ?>
                </div>

                <?php if (get_field('facility_address')) : ?>
                    <div class="google-map">
                        <iframe src="https://maps.google.co.jp/maps?output=embed&q=<?= get_field('facility_address'); ?>&z=16" width="600" height="400" frameborder="0" scrolling="no"></iframe>
                    </div>
                <?php endif; ?>



                <!-- 背景 -->
                <?php get_template_part('images/svg/right-flower-2'); ?>
            </div>
            <!-- 背景end -->
        </div>

    </div>


</section>


<?php get_footer(); ?>
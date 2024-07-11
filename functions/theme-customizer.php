<?php
// メインビジュアル ================================================================================================
function my_theme_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'top_section',
        [
            'title'           => 'トップページメインビジュアル',
            'priority'        => 1,
            'description' => 'トップページのメインビジュアルを編集します',
            //'active_callback' =>
        ]
    );
    $wp_customize->add_setting('mainvisual'); //設定項目を追加
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mainvisual', array(
        'label' => 'メインビジュアル', //設定項目のタイトル
        'section' => 'top_section', //追加するセクションのID
        'settings' => 'mainvisual', //追加する設定項目のID
        'description' => 'メインビジュアルの画像を設定してください', //設定項目の説明
    )));
    $wp_customize->add_setting('mainvisual_sp'); //設定項目を追加
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mainvisual_sp', array(
        'label' => 'メインビジュアル（スマートフォン、タブレット用）', //設定項目のタイトル
        'section' => 'top_section', //追加するセクションのID
        'settings' => 'mainvisual_sp', //追加する設定項目のID
        'description' => 'メインビジュアル（スマートフォン、タブレット用）の画像を設定してください', //設定項目の説明
    )));
    $wp_customize->add_setting('mainvisual_text');
    $wp_customize->add_control(
        "mainvisual_text",
        [
            'settings'    => 'mainvisual_text',
            'label'       => '画像に重なるテキスト',
            'section'     => 'top_section',
            'type'        => 'textarea'
        ]
    );
    // $wp_customize->add_setting('header-logo'); //設定項目を追加
    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-logo', array(
    //     'label' => 'ロゴ', //設定項目のタイトル
    //     'section' => 'top_section', //追加するセクションのID
    //     'settings' => 'header-logo', //追加する設定項目のID
    //     'description' => 'ロゴの画像を設定してください', //設定項目の説明
    // )));
}
add_action('customize_register', 'my_theme_customize_register');
// メインビジュアル ================================================================================================
// メインビジュアル ================================================================================================
function my_theme_customize_about($wp_customize)
{
    $wp_customize->add_section(
        'top_about_section',
        [
            'title'           => '千種区保育園連絡会について',
            'priority'        => 1,
            'description' => '千種区保育連絡会についてセクションを編集します。',
            //'active_callback' =>
        ]
    );
    $wp_customize->add_setting('top_sec_about_title');
    $wp_customize->add_control(
        "top_sec_about_title",
        [
            'settings'    => 'top_sec_about_title',
            'label'       => 'タイトル（改行不可、文字数22文字まで）',
            'section'     => 'top_about_section',
            'type'        => 'textarea'
        ]
    );
    $wp_customize->add_setting('top_sec_about_text');
    $wp_customize->add_control(
        "top_sec_about_text",
        [
            'settings'    => 'top_sec_about_text',
            'label'       => '本文（改行不可、全角120文字まで）',
            'section'     => 'top_about_section',
            'type'        => 'textarea'
        ]
    );
    $wp_customize->add_setting('top_sec_about_image'); //設定項目を追加
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'top_sec_about_image', array(
        'label' => '画像', //設定項目のタイトル
        'section' => 'top_about_section', //追加するセクションのID
        'settings' => 'top_sec_about_image', //追加する設定項目のID
        'description' => '千種区保育連絡会についてセクションの画像を設定してください。推奨比率は16：6です。', //設定項目の説明
    )));
}
add_action('customize_register', 'my_theme_customize_about');

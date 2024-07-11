<?php
// Internet Explorer で開かれた場合はedgeへ開くように通知を出す
$edge_open = true;
if ($edge_open && $_COOKIE['view_ie'] != 'on') {
  if (get_browser_name() == "ie") { ?>
    <script>
      MoveCheck();

      function MoveCheck() {
        if (confirm("ご利用のウェブページはInternet Explorerでの表示を推奨していません。Microsoft Edgeで表示しますか？")) {
          var url = location.href;
          url = "microsoft-edge:" + url;
          window.location.href = url;
        } else {
          alert("Internet Explorerでの表示を続行します。");
        }
      }
    </script>
<?php
    // ページ推移先で通知が出続けないようにクッキーにInternet Explorerで閲覧したフラグを残す
    // クッキーの有効時間 : 1時間
    setcookie('view_ie', 'on', time() + 60 * 60);
  }
}
?>
<!DOCTYPE html>
<html class="fwHtml" <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php seo_description(); ?>">
  <meta name="google-site-verification" content="G5yLVnU5Lki5JjvJtEzSXIgHNhYCbS_MPx04jHEFvjg" />
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WJP7LQ6X31"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-WJP7LQ6X31');
  </script>


  <!-- lottie cdn -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script> -->
  <script>
    (function(d) {
      var config = {
          kitId: 'qfe0qrf',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
</head>
<!-- get template directory uri for Javascript -->
<header class="header" id="head_wrap">
  <div class="inner">
    <div id="mobile-head">
      <div class="logo">
        <a href="<?= home_url() ?>">
          <p class="logo_text">千種区保育園連絡会</p>
        </a>
      </div>
      <div id="nav-toggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <nav id="global-nav">
      <ul>
        <li class="sp"><a href="<?= home_url() ?>"><?php get_template_part('images/svg/flag-solid') ?>トップページ</a></li>
        <li><a href="<?= home_url() ?>/facility_list"><?php get_template_part('images/svg/baby-car') ?>施設一覧</a></li>
        <li><a href="<?= home_url() ?>/about"><?php get_template_part('images/svg/school-solid') ?>連絡会について</a></li>
        <li><a href="<?= home_url() ?>/news"><?php get_template_part('images/svg/megahon') ?>お知らせ</a></li>
        <li><a href="<?= home_url() ?>/contact"><?php get_template_part('images/svg/phone-alt-solid') ?>お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</header>

<body class="body_<?php echo get_page_slug() ?> fwWrap">
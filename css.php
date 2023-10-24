<?php if (is_front_page() || is_page("en")) { ?>
    <!--TOPページ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css?ver=1.0.1" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/vender/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/vender/slick/slick-theme.css">
<?php
}
if (is_page()) {
    ?>
    <!--下層ページ共通-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common_low.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('advantage')) {
    ?>
    <!--私たちの強み-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/advantage.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('research')) {
    ?>
    <!--リサーチ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/research.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/previewer.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/concerns.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('srvtel') || is_page('srvnet') || is_page('srvclt') || is_page('srvhut') || is_page('srvgrp') || is_page('srvmal') || is_page('srvkep') || is_page('srvmcall')) {
    ?>
    <!--電話調査-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/srvtel.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('research')) {
    ?>
    <!--リサーチ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/research.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/concerns.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('company')) {
    ?>
    <!--会社情報-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('profile') || is_page('en-company')) {
    ?>
    <!--私たちについて-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/profile.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('greeting')) {
    ?>
    <!--代表あいさつ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/greeting.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('insidesales')) {
    ?>
    <!--インサイドセールス-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/insidesales.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('contactcenter')) {
    ?>
    <!--コールセンター　CRM-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/contactcenter.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('healthycompany') || is_page('privacypolicy') || is_page('security') || is_page('info_security') || is_page('environmentpolicy')) {
    ?>
    <!--個人情報保護方針/個人情報の利用目的等/情報セキュリティ基本方針/健康経営基本方針-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/privacy.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('en-contact') || is_page('en-contact_confirm') || is_page('en-contact_thanks') || is_page('en-contact_error')) {
    ?>
    <!--【英語】その他に関するお問い合わせ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_page('contact')) {
    ?>
    <!--お問い合わせ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css?ver=1.0.1" rel="stylesheet">
<?php
}
if (is_404()) {
    ?>
    <!--エラーページ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/error.css?ver=1.0.1" rel="stylesheet">
<?php } ?>

<?php if (is_page('contact') || page_is_ancestor_of('contact')) : ?>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css?ver=1.0.1" rel="stylesheet">
<?php endif; ?>

<?php if (is_page('news') || is_post_type_archive('news') || is_tax('news_cate') || is_singular('news')) : ?>
    <!--お知らせ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common_low.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css?ver=1.0.1" rel="stylesheet">
<?php endif; ?>

<?php if (is_page('result') || is_post_type_archive('result') || is_tax('result_cate') || is_singular('result')) : ?>
    <!--導入事例-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common_low.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/result.css?ver=1.0.1" rel="stylesheet">
<?php endif; ?>

<?php if (is_page('resolution_navi')) : ?>
    <!--お客様解決ナビ-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common_low.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/resolution_navi.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/popup.css?ver=1.0.1" rel="stylesheet">
<?php endif; ?>


<?php if (is_page('philosophy')) : ?>
    <!--理念・ビジョン-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common_low.css?ver=1.0.1" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/philosophy.css?ver=1.0.1" rel="stylesheet">
<?php endif; ?>


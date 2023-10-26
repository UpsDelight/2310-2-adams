<?php if (is_front_page() || is_page("en")) { ?>
    <!--TOPページ-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top/galaxy.js"></script>
<?php
}
if (is_page('advantage')) {
    ?>
    <!--私たちの強み-->
<?php
}
if (is_page('research')) {
    ?>
    <!--リサーチ-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/faq.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/previewer.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/concerns_tab.js"></script>
<?php
}
if (is_page('profile')) {
    ?>
    <!--電話調査-->
<?php
}
if (is_page('srvtel') || is_page('srvnet') || is_page('srvclt') || is_page('srvhut') || is_page('srvgrp') || is_page('srvmal') || is_page('srvkep') || is_page('srvmcall')) {
    ?>
    <!--電話調査-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/srvtel/index.js"></script>
<?php
}
if (is_page('srvnet')) {
    ?>
    <!--インターネット調査-->
<?php
}
if (is_page('srvclt')) {
    ?>
    <!--CLT-->

<?php
}
if (is_page('srvhut')) {
    ?>
    <!--ホームユーステスト-->
<?php
}
if (is_page('srvgrp')) {
    ?>
    <!--グループインタビュー-->
<?php
}
if (is_page('srvmal')) {
    ?>
    <!--郵送調査-->
<?php
}
if (is_page('srvkep')) {
    ?>
    <!--訪問留置き調査-->
<?php
}
if (is_page('research')) {
    ?>
    <!--リサーチ-->
<?php
}
if (is_page('contactcenter') || is_page('insidesales')) {
    ?>
    <!--リサーチ-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/faq.js"></script>
<?php
}
if (is_404()) {
    ?>
    <!--エラーページ-->

<?php } ?>

<?php if (is_page('resolution_navi')) : ?>
    <!--お客様解決ナビ-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/faq.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popup.js"></script>
<?php endif; ?>

<?php if (is_page('survey_monitor')) : ?>
    <!--調査モニターのご案内-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/survey-monitor/index.js"></script>
<?php endif; ?>

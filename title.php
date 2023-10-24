<?php if (is_front_page()) : ?>
    <!--TOPページ-->
    <title>アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('advantage')) : ?>
    <!--私たちの強み-->
    <title>私たちの強み｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('research')) : ?>
    <!--リサーチ-->
    <title>リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvtel')) : ?>
    <!--電話調査-->
    <title>電話調査｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvnet')) : ?>
    <!--インターネット調査-->
    <title>インターネット調査｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvclt')) : ?>
    <!--CLT-->
    <title>CLT(会場調査)｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvhut')) : ?>
    <!--ホームユーステスト-->
    <title>ホームユーステスト｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvgrp')) : ?>
    <!--グループインタビュー-->
    <title>グループインタビュー｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvmal')) : ?>
    <!--郵送調査-->
    <title>郵送調査｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvkep')) : ?>
    <!--訪問留置き調査-->
    <title>訪問留置き調査｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srvmcall')) : ?>
    <!--訪問留置き調査-->
    <title>ミステリーコール｜リサーチ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('insidesales')) : ?>
    <!--訪問留置き調査-->
    <title>インサイドセールス｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('contactcenter')) : ?>
    <!--訪問留置き調査-->
    <title>コンタクトセンター｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('company')) : ?>
    <!--訪問留置き調査-->
    <title>会社情報｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('profile')) : ?>
    <!--訪問留置き調査-->
    <title>私たちについて｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('greeting')) : ?>
    <!--訪問留置き調査-->
    <title>代表あいさつ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('news') || is_post_type_archive('news')) : ?>
    <!--お知らせ-->
    <title>お知らせ | アダムスコミュニケーション</title>
<?php endif; ?>
<?php $wp_object = get_queried_object(); ?>
<?php if (is_tax('news_cate')) : ?>
    <!--お知らせ-->
    <title><?php echo $wp_object->name; ?> | お知らせ | アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_singular('news')) : ?>
    <!--お知らせ-->
    <title><?php echo $wp_object->post_title; ?> | お知らせ | アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('contact')) : ?>
    <!--お問い合わせ-->
    <title>お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('srv') || is_page('srv_error') || is_page('srv_confirm') || is_page('srv_thanks')) : ?>
    <!--調査に関するお問い合わせ-->
    <title>調査に関するお問い合わせ｜お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('insidesales_contact') || is_page('insidesales_contact_error') || is_page('insidesales_contact_confirm') || is_page('insidesales_contact_thanks')) : ?>
    <!--インサイドセールスに関するお問い合わせ-->
    <title>インサイドセールスに関するお問い合わせ｜お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('contactcenter_contact') || is_page('contactcenter_contact_error') || is_page('contactcenter_contact_confirm') || is_page('contactcenter_contact_thanks')) : ?>
    <!--コンタクトセンターに関するお問い合わせ-->
    <title>コンタクトセンターに関するお問い合わせ｜お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('monitor') || is_page('monitor_error') || is_page('monitor_confirm') || is_page('monitor_thanks')) : ?>
    <!--モニターに関するお問い合わせ-->
    <title>モニターに関するお問い合わせ｜お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('other') || is_page('other_error') || is_page('other_confirm') || is_page('other_thanks')) : ?>
    <!--その他に関するお問い合わせ-->
    <title>その他に関するお問い合わせ｜お問い合わせ｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('privacypolicy')) : ?>
    <!--個人情報保護方針-->
    <title>個人情報保護方針｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('security')) : ?>
    <!--個人情報の利用目的等-->
    <title>個人情報の利用目的等｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('info_security')) : ?>
    <!--情報セキュリティ基本方針-->
    <title>情報セキュリティ基本方針｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('healthycompany')) : ?>
    <!--健康経営基本方針-->
    <title>健康経営基本方針｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('environmentpolicy')) : ?>
    <!--グループ環境経営基本方針-->
    <title>グループ環境経営基本方針｜アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('en')) : ?>
    <!--Adams Communication-->
    <title>Adams Communication</title>
<?php endif; ?>
<?php if (is_page('en-research')) : ?>
    <!--Research-->
    <title>Research｜Adams Communication</title>
<?php endif; ?>
<?php if (is_page('en-advantage')) : ?>
    <!--Advantage-->
    <title>Our Advantage｜Adams Communication</title>
<?php endif; ?>
<?php if (is_page('en-company')) : ?>
    <!--Company-->
    <title>Company｜Adams Communication</title>
<?php endif; ?>
<?php if (is_page('en-contact') || is_page('en-contact_error') || is_page('en-contact_confirm') || is_page('en-contact_thanks')) : ?>
    <!--Company-->
    <title>Contact us｜Adams Communication</title>
<?php endif; ?>
<?php if (is_404()) : ?>
    <!--エラーページ-->
    <title>404 | エラーページ</title>
<?php endif; ?>
<?php if (is_page('result') || is_post_type_archive('result')) : ?>
    <!--お知らせ-->
    <title>導入事例 | アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_tax('result_cate')) : ?>
    <!--導入事例-->
    <title><?php echo $wp_object->name; ?> | 導入事例 | アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_singular('result')) : ?>
    <!--導入事例-->
    <title><?php echo $wp_object->post_title; ?> | 導入事例 | アダムスコミュニケーション</title>
<?php endif; ?>

<?php if (is_page('resolution_navi')) : ?>
    <!--お客様解決ナビ-->
    <title>お客様解決ナビ  | 導入事例 | アダムスコミュニケーション</title>
<?php endif; ?>
<?php if (is_page('philosophy')) : ?>
    <!--理念・ビジョン-->
    <title>理念・ビジョン｜アダムスコミュニケーション</title>
<?php endif; ?>
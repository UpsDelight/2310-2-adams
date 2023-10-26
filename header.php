<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.aaa.co.jp/">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/common/ogp.png">
    <meta property="og:site_name" content="アダムスコミュニケーション">
    <?php include("meta.php"); ?>
    <?php include("title.php"); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" type="image/png" sizes="180x180">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon.png">
    <!--favicon-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--google fontの読み込みが早くなる-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--google fontの読み込みが早くなる-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?ver=1.0.1" rel="stylesheet">
    <!--sassコーディングの場合-->
    <?php include("css.php"); ?>
    <!--wp自動生成↓↓-->
    <?php wp_head(); ?>
    <!--wp自動生成↑↑-->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4X2NLGFP2M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4X2NLGFP2M');
    </script>
</head>

<body>
    <div id="wrapper" class="<?php echo is_page("resolution_navi") || is_page("contactcenter") || is_page("insidesales") || is_page("research") ? "c_page_bg_01" : ""; ?>">
        <div class="nav_mask"></div>
        <!-- ↓↓ header ↓↓ -->
        <header id="header" class="header">
            <div class="header_container first">
                <div class="l">
                    <h1 class="h1 header_logo">
                        <a href="<?php echo home_url('/'); ?>" class="nav_link opacity_hover">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header_logo.png" alt="ADAMS COMMUNICATIONS">
                        </a>
                    </h1>
                </div>

                <div class="r md_none">
                    <div class="header_info">
                        <!-- <a href="" class="nav_link opacity_hover project_story">
                            <icon-image><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_note.svg" alt="icon note">
                            </icon-image>
                            <span class="text">プロジェクトストーリー</span>
                        </a> -->
                        <a href="<?php echo home_url('/en'); ?>" class="nav_link opacity_hover language">
                            <icon-image><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_global.svg" alt="icon note">
                            </icon-image>
                            <span class="text">English</span>
                        </a>
                        <a href="https://www3.aaa.co.jp/monitorpanel/login.aspx" target="_blank" rel="noopener noreferrer" class="nav_link opacity_hover user">
                            <icon-image><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_user.svg" alt="icon note">
                            </icon-image>
                            <span class="text">モニター募集・ログイン</span>
                        </a>
                    </div>
                </div>

                <div class="r md_block">
                    <div class="header_info">
                        <a href="<?php echo home_url('/contact'); ?>" class="nav_link nav_link_inquiry nav_link_inquiry_hidden">お問い合わせ</a>

                        <div class="nav_toggler"></div>
                    </div>
                </div>

            </div>

            <div class="second js_nav_sp">
                <nav class="nav">

                    <ul class="navbar navbar_menu menu">
                        <li class="menu_item">
                            <a href="<?php echo home_url('/contactcenter'); ?>" class="nav_link opacity_hover call_center">
                                <icon-image>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_headphone.svg" alt="コンタクトセンター">
                                </icon-image>
                                <span class="text">コンタクトセンター</span>
                            </a>
                        </li>

                        <li class="menu_item has_drop_menu research">
                            <div class="nav_link_inline">
                                <a href="<?php echo home_url('/research'); ?>" class="nav_link opacity_hover">
                                    <icon-image>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_news.svg" alt="リサーチ">
                                    </icon-image>
                                    <span class="text">リサーチ</span>
                                </a>
                                <span class="md_block icon_plus icon_plus__white js_open_target" data-target="#research_menu"></span>
                            </div>
                            <div class="drop_menu research_menu_pc" id="research_menu">
                                <ul class="drop_menu_lists">
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvtel'); ?>" class="nav_link opacity_hover">電話調査</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvnet'); ?>" class="nav_link opacity_hover">インターネット調査</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvhut'); ?>" class="nav_link opacity_hover">ホームユーステスト</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvmal'); ?>" class="nav_link opacity_hover">郵送調査</a>
                                    </li>
                                    <!-- <li class="drop_menu_item">
                                        <a href="<?php //echo home_url('/research/srvkep'); 
                                                    ?>" class="nav_link opacity_hover">訪問留置き調査</a>
                                    </li> -->
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvclt'); ?>" class="nav_link opacity_hover">CLT(会場調査)</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvgrp'); ?>" class="nav_link opacity_hover">グループインタビュー</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url('/research/srvmcall'); ?>" class="nav_link opacity_hover">ミステリーコール</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu_item">
                            <a href="<?php echo home_url('/insidesales'); ?>" class="nav_link opacity_hover inside_sales">
                                <icon-image>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_signal.svg" alt="インサイドセールス">
                                </icon-image>
                                <span class="text">インサイドセールス</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar_submenu">
                        <!-- <li class="navbar_submenu_item">
                            <a href="<?php echo home_url('/advantage'); ?>" class="nav_link opacity_hover">私たちの強み</a>
                        </li> -->
                        <li class="navbar_submenu_item">
                            <a href="<?php echo home_url('/result/'); ?>" class="nav_link opacity_hover">導入事例</a>
                        </li>
                        <li class="navbar_submenu_item has_drop_menu other_bottom_line_color">
                            <div class="nav_link_inline">
                                <a href="<?php echo home_url('company'); ?>" class="nav_link opacity_hover">会社情報</a>
                                <span class="md_block icon_plus icon_plus__dark js_open_target" data-target="#profile_menu"></span>
                            </div>
                            <div class="drop_menu normal_menu" id="profile_menu">
                                <ul class="drop_menu_lists">
                                    <li class="drop_menu_item">
                                        <a href="<?php echo is_page('profile') ? "#target_1" : home_url('/company/profile/#target_1'); ?>" class="nav_link opacity_hover <?php echo is_page('profile') ? "js_scroll_to" : "ok" ?>">会社概要</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo is_page('profile') ? "#target_2" : home_url('/company/profile/#target_2'); ?>" class="nav_link opacity_hover <?php echo is_page('profile') ? "js_scroll_to" : "ok" ?>">所在地</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo is_page('profile') ? "#target_3" : home_url('/company/profile/#target_3'); ?>" class="nav_link opacity_hover <?php echo is_page('profile') ? "js_scroll_to" : "ok" ?>">沿革</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url("/company/greeting/") ?>" class="nav_link opacity_hover">代表あいさつ</a>
                                    </li>
                                    <li class="drop_menu_item">
                                        <a href="<?php echo home_url("/company/philosophy/") ?>" class="nav_link opacity_hover">理念・ビジョン</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="navbar_submenu_item">
                            <a href="https://recruit.aaa.co.jp/" class="nav_link nav_link_blank opacity_hover" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_checkbox_blank_line.png" alt="blank icon">採用情報</a>
                        </li>
                        <!-- <li class="navbar_submenu_item md_block">
                            <a href="#" class="nav_link">プロジェクトストーリー</a>
                        </li> -->
                        <li class="navbar_submenu_item md_block">
                            <a href="https://www3.aaa.co.jp/monitorpanel/login.aspx" target="_blank" rel="noopener noreferrer" class="nav_link">モニター募集・ログイン</a>
                        </li>
                    </ul>

                    <a href="<?php echo home_url("/contact/") ?>" class="nav_link opacity_hover inquiry">お問い合わせ</a>
                    <div class="md_block">
                        <a href="<?php echo home_url("/en/") ?>" class="nav_link language">
                            <span class="icon_image">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_global.svg" alt="icon note">
                            </span>
                            <span class="text">English</span>
                        </a>
                    </div>
                </nav>
            </div>

        </header>


        <?php if (is_page('contactcenter')) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp color2">
                <a href="<?php echo home_url('contact/contactcenter_contact'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>コンタクトセンターに<br>間するお問い合わせ</span>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url('/lp-contactcenter/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>医療・ヘルスケア製品の<br class="sp_none">サポート事例</span>
                </a>
                <a href="<?php echo home_url('/resolution_navi/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color4">
                    <span>お客様解決ナビ</span>
                </a>

                <!-- <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>資料・事例<br>ダウンロード</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>サービス検索</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover">
                    <span>お客様<br>課題解決ナビ</span>
                </a> -->
            </div>

        <?php elseif (is_page('insidesales')) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp color3">
                <a href="<?php echo home_url('contact/insidesales_contact'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>インサイドセールスに<br>関するお問い合わせ</span>
                </a>
                <a href="<?php echo home_url('/resolution_navi/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color4">
                    <span>お客様解決ナビ</span>
                </a>
                <!-- <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>資料・事例<br>ダウンロード</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>サービス検索</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover">
                    <span>お客様<br>課題解決ナビ</span>
                </a> -->
            </div>
        <?php elseif (
            is_page('research')
            || is_page('srvtel')
            || is_page('srvnet')
            || is_page('srvhut')
            || is_page('srvmal')
            || is_page('srvkep')
            || is_page('srvclt')
            || is_page('srvgrp')
            || is_page('srvmcall')
        ) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp">
                <a href="<?php echo home_url('/contact/srv/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>調査に関する<br>お問い合わせ</span>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url('/lp-cssurveys/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>顧客満足度調査の<br>資料ダウンロード</span>
                </a>
                <a href="<?php echo is_page('research') ? "#concerns" : home_url('/research/#concerns'); ?>" class="<?php echo is_page('research') ? "js_scroll_to" : "ok" ?> nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>サービス検索</span>
                </a>
                <a href="<?php echo home_url('/resolution_navi/'); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color4">
                    <span>お客様解決ナビ</span>
                </a>
            </div>

        <?php elseif (is_page('survey_monitor')) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp">
                <a href="<?php echo home_url("/resolution_navi/") ?>" class="nav_link customer_problem_solving_navigation left opacity_hover color5">
                    <span>お客様<br>課題解決ナビ</span>
                </a>
                <a href="#about" class="nav_link section_navigation opacity_hover">
                    <span>アンケートについて</span>
                </a>
                <a href="#reward" class="nav_link section_navigation opacity_hover">
                    <span>謝礼について</span>
                </a>
                <a href="#faq" class="nav_link section_navigation opacity_hover">
                    <span>よくあるご質問</span>
                </a>
                <a href="#monrle" class="nav_link section_navigation opacity_hover">
                    <span>モニター登録</span>
                </a>
            </div>

        <?php elseif (is_archive('result') || is_tax('result') || is_singular('result')) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp">
                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url("/lp-cssurveys/"); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active none_active">
                    <span>顧客満足度調査の<br>資料ダウンロード</span>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url("/lp-contactcenter/"); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color2">
                    <span>医療・ヘルスケア製品の<br class="sp_none">サポート事例</span>
                </a>
                <a href="<?php echo home_url("/resolution_navi/"); ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color4">
                    <span>お客様解決ナビ</span>
                </a>
            </div>

        <?php elseif (is_front_page()) : ?>
            <div class="follow_page_scroll follow_page_scroll_sp">
                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url("/lp-cssurveys/") ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>顧客満足度調査の<br>資料ダウンロード</span>
                </a>

                <a target="_blank" rel="noopener noreferrer" href="<?php echo home_url("/lp-contactcenter/") ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color2">
                    <span>医療・ヘルスケア製品の<br class="sp_none">サポート事例</span>
                </a>
            </div>
            <div class="follow_page_scroll follow_page_scroll_circle">
                <a href="<?php echo home_url("/resolution_navi/") ?>" class="nav_link top_solving_navigation opacity_hover">
                    <span-icon><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_group_1958.png" alt="解決ナビ"></span-icon>
                    お客様<br>解決ナビ
                </a>
            </div>

        <?php else : ?>
            <!-- <div class="follow_page_scroll">
                <a href="<?php //echo home_url('/contact/srv'); 
                                ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>調査の<br>お問い合わせ</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>資料・事例<br>ダウンロード</span>
                </a>
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover none_active">
                    <span>サービス検索</span>
                </a> 
                <a href="#" class="nav_link customer_problem_solving_navigation opacity_hover">
                    <span>お客様<br>課題解決ナビ</span>
                </a>
            </div> -->
            <?php if (!is_page("resolution_navi")) : ?>
                <div class="follow_page_scroll follow_page_scroll_sp">
                    <a href="<?php echo home_url("/resolution_navi/") ?>" class="nav_link customer_problem_solving_navigation opacity_hover none_active color4">
                        <span>お客様解決ナビ</span>
                    </a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
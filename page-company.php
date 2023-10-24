<?php get_header(); ?>
<!-- ↓↓ main ↓↓ -->
<main>
    <!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common_low/img_mv_mask.png" alt="fake background">
        </figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl ani fadein">
                <span class="ttl_en">Company</span>
                <span class="ttl_jp">会社情報</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb ani fadein">
        <ul class="breadcrumb_links">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url() ?>">トップ</a></li>
            <li class="breadcrumb_link">会社情報</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <div class="container">
        <div class="ani fadein">
            <div class="company_lists">
                <a href="<?php echo home_url("/company/profile/#target_1") ?>" class="nav_link opacity_hover item">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_building_line.png" alt="Company">
                    </div>
                    <div class="text">
                        <p class="en">Company</p>
                        <p class="jp">会社概要</p>
                    </div>

                    <div class="arrow_left">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_right_fill.png" alt="arrow right icon">
                    </div>
                </a>

                <a href="<?php echo home_url("/company/profile/#target_2") ?>" class="nav_link opacity_hover item">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_map_line.png" alt="Address">
                    </div>
                    <div class="text">
                        <p class="en">Address</p>
                        <p class="jp">所在地</p>
                    </div>

                    <div class="arrow_left">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_right_fill.png" alt="arrow right icon">
                    </div>
                </a>
                <a href="<?php echo home_url("/company/profile/#target_3") ?>" class="nav_link opacity_hover item">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_time_line.png" alt="History">
                    </div>
                    <div class="text">
                        <p class="en">History</p>
                        <p class="jp">沿革</p>
                    </div>

                    <div class="arrow_left">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_right_fill.png" alt="arrow right icon">
                    </div>
                </a>
                <a href="<?php echo home_url("/company/greeting/") ?>" class="nav_link opacity_hover item">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_message_line.png" alt="message icon">
                    </div>
                    <div class="text">
                        <p class="en">Message</p>
                        <p class="jp">代表あいさつ</p>
                    </div>

                    <div class="arrow_left">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_right_fill.png" alt="arrow right icon">
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>
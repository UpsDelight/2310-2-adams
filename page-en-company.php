<?php get_header("en"); ?>
<!-- ↓↓ main ↓↓ -->
<main>
    <!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/common_low/img_mv_mask.png" alt="fake background">
        </figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl ani fadein">
                <span class="ttl_en">about Adams Communications</span>
                <span class="ttl_jp">Company</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb ani fadein">
        <ul class="breadcrumb_links">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url("/en") ?>">TOP</a></li>
            <li class="breadcrumb_link">Company</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <div class="container">

        <!--<div class="scroll_to ani fadein">
            <div class="scroll_to_section">
                <div class="item js_scroll_to opacity_hover" data-target-id="#target_1">
                    <span class="text">Company Profile</span>
                    <img class="icon_arrow_down" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_down_fill.png" alt="icon down">
                </div>
                <div class="item js_scroll_to opacity_hover" data-target-id="#target_2">
                    <span class="text">所在地</span>
                    <img class="icon_arrow_down" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_down_fill.png" alt="icon down">
                </div>
                <div class="item js_scroll_to opacity_hover" data-target-id="#target_3">
                    <span class="text">沿革</span>
                    <img class="icon_arrow_down" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_arrow_down_fill.png" alt="icon down">
                </div>
            </div>
        </div>-->

        <section class="profile ani fadein" id="target_1">
            <h3 class="c_low_ttl01">Company Profile</h3>

            <div class="table table_primary profile_table">
                <dl class="tr">
                    <dt class="th">Company Name</dt>
                    <dd class="td">
                        <p class="text_desc">
                            Adams Communications Co., Ltd.
                        </p>
                    </dd>
                </dl>

                <dl class="tr multi_line">
                    <dt class="th">Board members</dt>
                    <dd class="td">
                        <table class="table_blabla">
                            <tr>
                                <td class="ord_1">President</td>
                                <td class="ord_2">Mikio</td>
                                <td class="ord_3">Hiyama</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Senior Managing Director</td>
                                <td class="ord_2">Kazuhiro</td>
                                <td class="ord_3">Aizawa</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Managing Director</td>
                                <td class="ord_2">Masayuki</td>
                                <td class="ord_3">Haijima</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Managing Director</td>
                                <td class="ord_2">Tetsuya</td>
                                <td class="ord_3">Yoda</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Director</td>
                                <td class="ord_2">Kazuhiko</td>
                                <td class="ord_3">Toriya</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Director</td>
                                <td class="ord_2">Yuji</td>
                                <td class="ord_3">Anan</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Director</td>
                                <td class="ord_2">Masahiro</td>
                                <td class="ord_3">Takahashi</td>
                            </tr>
                            <tr>
                                <td class="ord_1">Auditor</td>
                                <td class="ord_2">Takashi</td>
                                <td class="ord_3">Ameda</td>
                            </tr>
                        </table>
                    </dd>
                </dl>

                <dl class="tr one_line">
                    <dt class="th">Establishment</dt>
                    <dd class="td">
                        <p class="text_desc">
                            Established in 1979
                        </p>
                    </dd>
                </dl>

                <dl class="tr multi_line">
                    <dt class="th">Main Business Activities</dt>
                    <dd class="td">
                        <p class="text_desc">
                            Social Research, Marketing Research
                            <br>Sale of office automation equipment, computers, peripheral equipment and software
                            <br>Dispatch of temporary staff for information processing support services, development and sales
                        </p>
                    </dd>
                </dl>
                <dl class="tr one_line">
                    <dt class="th">Capital</dt>
                    <dd class="td">
                        <p class="text_desc">
                            87.7 million yen
                        </p>
                    </dd>
                </dl>
                <dl class="tr one_line">
                    <dt class="th">Number of employees</dt>
                    <dd class="td">
                        <p class="text_desc">
                            120
                        </p>
                    </dd>
                </dl>
                <dl class="tr multi_line">
                    <dt class="th">Group Companies</dt>
                    <dd class="td">
                        <p class="text_desc">
                            CREO Co., Ltd.
                            <br>Brigh-E Co., Ltd.
                        </p>
                    </dd>
                </dl>

            </div>
        </section>

        <!-- ↓↓ certification registration ↓↓ -->
        <section class="certification ani fadein">
            <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                Certification
            </h4>
            <!--<p class="text_lead">
                プライバシーマーク（Ｐマーク）認定
            </p>-->
            <div class="omg privacy_mark">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr one_line">
                            <dt class="th">PrivacyMark</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    12390053(07)
                                </p>
                            </dd>
                        </dl>
                        <!--<dl class="tr multi_line">
                            <dt class="th">付与機関</dt>
                            <dd class="td">
                                <p class="text_desc has_gray_text">
                                    JIPDEC
                                    <br><span class="gray_text">（一般財団法人日本情報経済社会推進協会）</span>
                                </p>
                            </dd>
                        </dl>-->
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_privacy_mask.png" alt="mask background">
                </div>
            </div>


            <!--<p class="text_lead">
                情報セキュリティ管理規格　<br class="sp_block">ISO 27001認証
            </p>-->
            <div class="omg iso_27001">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr">
                            <dt class="th">Information Security Management System</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    ISO/IEC 27001:2013(JIS Q27001:2014)
                                </p>
                            </dd>
                        </dl>
                        <!--<dl class="tr">
                            <dt class="th">認証登録番号</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    IS 505613
                                </p>
                            </dd>
                        </dl>
                        <dl class="tr multi_line">
                            <dt class="th">認定機関</dt>
                            <dd class="td">
                                <p class="text_desc has_gray_text">
                                    ANAB
                                    <br><span class="gray_text">（米国規格協会―米国品質協会による認定機関）</span>
                                </p>
                                <p class="text_desc has_gray_text">
                                    ISMS-AC
                                    <br><span class="gray_text">(一般社団法人情報マネジメントシステム認定センター）</span>
                                </p>
                            </dd>
                        </dl>-->
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_iso_27001.png" alt="情報セキュリティ管理規格　ISO 27001認証">
                </div>
            </div>


        </section>
        <!-- ↑↑ certification registration ↑↑ -->

        <!-- ↓↓ member organizations ↓↓ -->
        <section class="member ani fadein">
            <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                Membership
            </h4>
            <p class="text_desc">
                Japan Marketing Research Association
                <br>Japan Marketing Association
                <br>ESOMAR
            </p>
        </section>
        <!-- ↑↑ member organizations ↑↑ -->

    </div>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer('en'); ?>
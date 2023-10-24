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
                <span class="ttl_en">About us</span>
                <span class="ttl_jp">私たちについて</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb ani fadein">
        <ul class="breadcrumb_links">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url() ?>">トップ</a></li>
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url() ?>/company">会社情報</a></li>
            <li class="breadcrumb_link">私たちについて</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
    <div class="container">

        <div class="scroll_to ani fadein">
            <div class="scroll_to_section">
                <div class="item js_scroll_to opacity_hover" data-target-id="#target_1">
                    <span class="text">会社概要</span>
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
        </div>

        <section class=" profile ani fadein" id="target_1">
            <h3 class="c_low_ttl01">会社概要</h3>

            <div class="table table_primary profile_table">
                <dl class="tr">
                    <dt class="th">社名</dt>
                    <dd class="td">
                        <p class="text_desc">
                            株式会社 アダムスコミュニケーション
                            <br>Adams Communications Co., Ltd.
                        </p>
                    </dd>
                </dl>

                <dl class="tr multi_line">
                    <dt class="th">役員</dt>
                    <dd class="td">
                        <table class="table_blabla">
                            <tr>
                                <td class="ord_1">代表取締役社長</td>
                                <td class="ord_2">桧山</td>
                                <td class="ord_3">幹夫</td>
                            </tr>
                            <tr>
                                <td class="ord_1">専務取締役</td>
                                <td class="ord_2">相澤</td>
                                <td class="ord_3">和弘</td>
                            </tr>
                            <tr>
                                <td class="ord_1">常務取締役</td>
                                <td class="ord_2">拝島</td>
                                <td class="ord_3">正貫</td>
                            </tr>
                            <tr>
                                <td class="ord_1">常務取締役</td>
                                <td class="ord_2">依田</td>
                                <td class="ord_3">哲也</td>
                            </tr>
                            <tr>
                                <td class="ord_1">取締役</td>
                                <td class="ord_2">鳥屋</td>
                                <td class="ord_3">和彦</td>
                            </tr>
                            <tr>
                                <td class="ord_1">取締役</td>
                                <td class="ord_2">阿南</td>
                                <td class="ord_3">祐治</td>
                            </tr>
                            <tr>
                                <td class="ord_1">取締役</td>
                                <td class="ord_2">高橋</td>
                                <td class="ord_3">雅弘</td>
                            </tr>
                            <tr>
                                <td class="ord_1">監査役</td>
                                <td class="ord_2">雨田</td>
                                <td class="ord_3">高志</td>
                            </tr>
                        </table>
                        <!-- <p class="text_desc text_flex">
                            <span class="ord_1">代表取締役社長</span>
                            <span class="ord_2">桧山</span>
                            <span class="ord_3">幹夫</span>
                        </p> -->
                    </dd>
                </dl>

                <dl class="tr one_line">
                    <dt class="th">設立</dt>
                    <dd class="td">
                        <p class="text_desc">
                            昭和54年（1979年）
                        </p>
                    </dd>
                </dl>

                <dl class="tr multi_line">
                    <dt class="th">事業内容</dt>
                    <dd class="td">
                        <p class="text_desc">
                            社会調査、市場調査
                            <br>OA機器及びコンピュータ機器用品、ソフトウェアの販売
                            <br>情報処理サービス関連業のサポートサービス、開発、販売に関する要員派遣
                            <br>一般労働者派遣事業（派13-307336）　有料職業紹介事業（13-ユ-308290）
                        </p>
                        <a class="nav_link nav_link_cyan nav_link_underline has_icon_blank" href="<?php echo get_template_directory_uri(); ?>/assets/pdf/dispatch-margin-rate-20210601.pdf" target="_blank" rel="noopener noreferrer">派遣マージン率はこちら <img class="icon_blank" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_blank_line.png" alt="icon blank"></a>
                    </dd>
                </dl>
                <dl class="tr one_line">
                    <dt class="th">資本金</dt>
                    <dd class="td">
                        <p class="text_desc">
                            87,700,000円
                        </p>
                    </dd>
                </dl>
                <dl class="tr one_line">
                    <dt class="th">社員数</dt>
                    <dd class="td">
                        <p class="text_desc">
                            120名
                        </p>
                    </dd>
                </dl>
                <dl class="tr multi_line">
                    <dt class="th">グループ企業</dt>
                    <dd class="td">
                        <p class="text_desc">
                            株式会社　クレオ
                            <br>株式会社　ブライエ
                        </p>
                    </dd>
                </dl>

            </div>
        </section>

        <!-- ↓↓ certification registration ↓↓ -->
        <section class="certification ani fadein">
            <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                認証登録
            </h4>
            <p class="text_lead">
                プライバシーマーク（Ｐマーク）認定
            </p>
            <div class="omg privacy_mark">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr one_line">
                            <dt class="th">認証登録番号</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    12390053号
                                </p>
                            </dd>
                        </dl>
                        <dl class="tr multi_line">
                            <dt class="th">付与機関</dt>
                            <dd class="td">
                                <p class="text_desc has_gray_text">
                                    JIPDEC
                                    <br><span class="gray_text">（一般財団法人日本情報経済社会推進協会）</span>
                                </p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_privacy_mask.png" alt="mask background">
                </div>
            </div>


            <p class="text_lead">
                情報セキュリティ管理規格　<br class="sp_block">ISO 27001認証
            </p>
            <div class="omg iso_27001">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr">
                            <dt class="th">適用規格</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    ISO/IEC 27001:2013(JIS Q 27001:2014)
                                </p>
                            </dd>
                        </dl>
                        <dl class="tr">
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
                                    <br><span class="gray_text">（一般社団法人情報マネジメントシステム認定センター）</span>
                                </p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_iso_27001.png" alt="情報セキュリティ管理規格　ISO 27001認証">
                </div>
            </div>


            <p class="text_lead">
                環境マネジメントシステム規格　<br class="sp_block">ISO 14001 認証
            </p>
            <div class="omg iso_14001">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr">
                            <dt class="th">適用規格</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    ISO 14001:2015(JIS Q 14001:2015)
                                </p>
                            </dd>
                        </dl>
                        <dl class="tr">
                            <dt class="th">登録証番号</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    JQA-EM7810
                                </p>
                            </dd>
                        </dl>
                        <dl class="tr">
                            <dt class="th">認定機関</dt>
                            <dd class="td">
                                <p class="text_desc">
                                    一般財団法人日本品質保証機構
                                </p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_iso_14001.jpg" alt=" 環境マネジメントシステム規格　ISO 14001 認証">
                </div>
            </div>

            <p class="text_lead">健康経営優良法人2022</p>

            <div class="omg iso_27001 iso_27001_none">
                <div class="l">
                    <div class="table table_secondary">
                        <dl class="tr multi_line">
                            <dt class="th">認定機関</dt>
                            <dd class="td">
                                <p class="text_desc">経済産業省</p>
                                <!-- <p class="text_desc has_gray_text">
                                    ANAB
                                    <br><span class="gray_text">（米国規格協会―米国品質協会による認定機関）</span>
                                </p>
                                <p class="text_desc has_gray_text">
                                    ISMS-AC
                                    <br><span class="gray_text">(一般社団法人情報マネジメントシステム認定センター）</span>
                                </p> -->
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="r">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/company/profile/img_iso_27001_2.jpg" alt="情報セキュリティ管理規格　ISO 27001認証">
                </div>
            </div>

            <a class="nav_link nav_link_cyan nav_link_underline has_icon_blank" href="https://www.meti.go.jp/policy/mono_info_service/healthcare/kenkoukeiei_yuryouhouzin.html" target="_blank" rel="noopener noreferrer">健康経営優良法人についてはこちら<img class="icon_blank" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon/icon_blank_line.png" alt="派遣マージン率はこちら">
            </a>
        </section>
        <!-- ↑↑ certification registration ↑↑ -->

        <!-- ↓↓ member organizations ↓↓ -->
        <section class="member ani fadein">
            <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                加盟団体
            </h4>
            <p class="text_desc">
                一般社団法人　日本マーケティング・リサーチ協会（JMRA）
                <br>一般社団法人　日本コールセンター協会（CCAJ）
                <br>ESOMAR（ヨーロッパ世論・市場調査協会）
            </p>
        </section>
        <!-- ↑↑ member organizations ↑↑ -->

        <!-- ↓↓ location ↓↓ -->
        <section class="location" id="target_2">
            <h3 class="c_low_ttl01 ani fadein">所在地</h3>

            <div class="ani fadein">
                <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                    本社
                </h4>
                <p class="text_desc sp_none">
                    東京都品川区南大井6-20-14 イーストスクエア大森4階　TEL：<span class="phone_underline">03-3768-7501</span>（代表）
                </p>
                <p class="text_desc sp_block">
                    東京都品川区南大井6-20-14 イーストスクエア大森4階　TEL：<a class="nav_link phone_underline" href="tel:0337687501">03-3768-7501</a>（代表）
                </p>
                <div class="map_img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.525933646376!2d139.72992891561043!3d35.59009114257172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601861d2acf06d17%3A0x730b9dbbcfb03b1a!2z44ix44Ki44OA44Og44K544Kz44Of44Ol44OL44Kx44O844K344On44Oz!5e0!3m2!1sja!2sjp!4v1678085568378!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="ani fadein">
                <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                    青森コンタクトセンター・<br class="sp_block">青森事務所
                </h4>
                <p class="text_desc sp_none">
                    青森県青森市松原1-1-3　TEL：<span class="phone_underline">017-734-5500</span>
                </p>
                <p class="text_desc sp_block">
                    青森県青森市松原1-1-3　TEL：<a href="tel:0177345500" class="phone_underline">017-734-5500</a>
                </p>
                <div class="map_img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.288250542098!2d140.75698361571472!3d40.821631838837675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9b9eff38678493%3A0x845645174b293c94!2zKOagqinjgqLjg4Djg6DjgrnjgrPjg5_jg6Xjg4vjgrHjg7zjgrfjg6fjg7Mg6Z2S5qOu44Kz44Oz44K_44Kv44OI44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1678085595464!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="ani fadein">
                <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                    杉並コンタクトセンター・<br class="sp_block">東京事務所
                </h4>
                <p class="text_desc sp_none">
                    東京都杉並区上高井戸1-8-17 ブライトコアビル新館6階　TEL：<span class="phone_underline">03-6847-5757</span>
                </p>
                <p class="text_desc sp_block">
                    東京都杉並区上高井戸1-8-17 ブライトコアビル新館6階　TEL：<a href="tel:0368475757" class="phone_underline">03-6847-5757</a>
                </p>
                <div class="map_img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.224634959912!2d139.61377451568256!3d35.67147043811373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f1bcdbb20b6f%3A0xf7ae3cdbba87c535!2zKOagqikg44Ki44OA44Og44K544Kz44Of44Ol44OL44Kx44O844K344On44OzIOadseS6rOS6i-WLmeaJgA!5e0!3m2!1sja!2sjp!4v1678088318105!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="ani fadein">
                <h4 class="c_low_ttl02 c_low_ttl02_with_dots">
                    大森コンタクトセンター
                </h4>
                <p class="text_desc sp_none">
                    東京都品川区南大井6-25-3 いちご大森ビル8階　TEL：<span class="phone_underline">03-5767-7588</span>
                </p>
                <p class="text_desc sp_block">
                    東京都品川区南大井6-25-3 いちご大森ビル8階　TEL：<a href="tel:0357677588" class="phone_underline">03-5767-7588</a>
                </p>
                <div class="map_img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6489.138523614795!2d139.730916!3d35.589022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60186032a13aaaab%3A0x355f27c093e771ae!2z44GE44Gh44GU5aSn5qOu44OT44Or!5e0!3m2!1sja!2sus!4v1678090787292!5m2!1sja!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </section>
        <!-- ↑↑ location ↑↑ -->

        <!-- ↓↓ history ↓↓ -->
        <section class="history ani fadein" id="target_3">
            <h3 class="c_low_ttl01">沿革</h3>

            <div class="ani fadein">
                <p class="timeline">
                    <span class="year">1979年</span>
                    <span class="month">7月</span>
                    <span class="detail">
                        東京都中央区築地に会社設立
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">1989年</span>
                    <span class="month">2月</span>
                    <span class="detail">
                        資本金1,000万円に増資
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">1994年</span>
                    <span class="month">4月</span>
                    <span class="detail">
                        一般社団法人　日本マーケティング・リサーチ協会（JMRA）加盟正会員
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">1997年</span>
                    <span class="month">7月</span>
                    <span class="detail">
                        CATIシステム（コンピュータによる電話調査システム）を導入
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">1998年</span>
                    <span class="month">7月</span>
                    <span class="detail">
                        資本金3,000万円に増資
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">2001年</span>
                    <span class="month">6月</span>
                    <span class="detail">
                        米国ハリスインタラクティブ社と提携・合弁事業化
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">2003年</span>
                    <span class="month">6月</span>
                    <span class="detail">
                        資本金8,770万円に増資
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">2005年</span>
                    <span class="month">6月</span>
                    <span class="detail">
                        ハリスインタラクティブ社より独立
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">2015年</span>
                    <span class="month">1月</span>
                    <span class="detail">
                        株式会社クリエイトラボの子会社となる
                    </span>
                </p>
                <p class="timeline">
                    <span class="year">2017年</span>
                    <span class="month">4月</span>
                    <span class="detail">
                        株式会社セールスゲイトと合併
                    </span>
                </p>
            </div>
        </section>
        <!-- ↑↑ history ↑↑ -->


    </div>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>
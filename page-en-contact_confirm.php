<?php get_header("en"); ?>
<main>
<!-- ↓↓ mv low ↓↓ -->
    <section class="mv_low">
        <figure class="mv_low_bg"></figure>
        <div class="mv_low_container">
            <h2 class="mv_low_ttl">
                <span class="ttl_en">about Business</span>
                <span class="ttl_jp">Contact Us - Confirm</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->
    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb">
        <ul class="breadcrumb_links">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url('/'); ?>">TOP</a></li>
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            <li class="breadcrumb_link">Contact Us - Confirm</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->
	<!-- ↓↓ form content ↓↓ -->
    <section class="form_area">
        <div class="form_area_content">
            <div class="container">

                <h3 class="c_low_ttl02">To those who want to contact us</h3>
                <p class="text_desc">Please check your input details.</p>
            </div>
        </div>
		<?php echo do_shortcode('[mwform_formkey key="201"]'); ?>
        <!--<div class="form_area_context">

            <form action="" class="form">

                <div class="container">
                    <div class="your_inquiry">
                        <h3 class="c_low_ttl02">問い合わせ内容を入力してください</h3>

                        <div class="form_group">
                            <div class="label_2d ">
                                <div class="label">お問い合わせの内容 <span class="required">＊</span></div>
                                <div class="input">
                                    <textarea rows="9" placeholder="（例）各種サポートに関してご相談できますか？" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your_contact">
                        <h3 class="c_low_ttl02">ご連絡先を入力してください</h3>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">お名前<span class="required">＊</span></div>
                                <div class="input">
                                    <input type="text" placeholder="（例）山田　太郎">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">お名前（ふりがな）<span class="required">＊</span></div>
                                <div class="input">
                                    <input type="text" placeholder="（例）やまだ　たろう">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">メールアドレス<span class="required">＊</span></div>
                                <div class="input">
                                    <input type="email" placeholder="（例）info@aaa.co.jp">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">確認のメールアドレス<span class="required">＊</span></div>
                                <div class="input">
                                    <input type="email" placeholder="（例）info@aaa.co.jp">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">貴社名</div>
                                <div class="input">
                                    <input type="text" placeholder="（例）株式会社アダムスコミュニケーション">
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">部署名</div>
                                <div class="input">
                                    <input type="text" placeholder="（例）営業部">
                                </div>
                            </div>
                        </div>


                        <div class="form_group">
                            <div class="label_2d address_group">
                                <div class="label">住所</div>
                                <div class="input">
                                    〒
                                    <input type="text" placeholder="（例）〒140-0013">
                                </div>
                            </div>
                            <div class="label_2d">
                                <div class="label"></div>
                                <div class="input">
                                    <input type="text" placeholder="（例）東京都品川区南大井6-20-14">
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <div class="label_2d">
                                <div class="label">電話番号</div>
                                <div class="input">
                                    <input type="text" placeholder="（例）03-3768-7501">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form_res">
                        <p class="text_desc text_center">
                            「 <a href="#" class="nav_link about_privacy">個人情報の取り扱いについて</a>」を必ずお読みいただき、
                            <br class="sp_none">同意のうえ、チェックを入れてから次に進んでください。
                        </p>

                        <label for="checkbox_accepted" class="accept_res">
                            <input type="checkbox" id="checkbox_accepted">
                            <span class="accept_res_text text_desc">お客様の個人情報<br class="sp_block">取り扱いについて同意する。</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="form_submit opacity_hover">入力内容の確認画面へ</button>
            </form>


        </div>-->


    </section>
    <!-- ↑↑ form content ↑↑ -->
</main>
<?php get_footer('en'); ?>
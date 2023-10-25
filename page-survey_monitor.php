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
                <span class="ttl_en">Monitor</span>
                <span class="ttl_jp">調査モニターのご案内</span>
            </h2>
        </div>
    </section>
    <!-- ↑↑ mv low ↑↑ -->

    <!-- ↓↓ breadcrumb ↓↓ -->
    <div class="breadcrumb ani fadein">
        <ul class="breadcrumb_links">
            <li class="breadcrumb_link"><a class="link" href="<?php echo home_url() ?>">トップ</a></li>
            <li class="breadcrumb_link">調査モニターのご案内</li>
        </ul>
    </div>
    <!-- ↑↑ breadcrumb ↑↑ -->

    <!-- survey monitor intro -->
    <section class="survey-monitor-intro survey-monitor-intro--layout">
        <div class="survey-monitor-intro__inner container">
            <h2 class="survey-monitor-intro__title">
                調査モニターご登録のご案内
            </h2>
            <div class="survey-monitor-intro__wrap">
                <p class="survey-monitor-intro__text">
                    私ども株式会社アダムスコミュ二ケーションは、1979年設立以来マーケティングリサーチ、世論調査を通して消費者（調査対象者）の態度や意見、実態等を統計情報として取扱い、顧客である企業や公共機関等に提供している、市場調査専門会社です。<br>
                    <br>
                    その際の個人情報の保護については、国内法及びマーケティングリサーチ業界の国際的行動規範である「ICC/ESOMAR国際綱領」、社団法人日本マーケティング・リサーチ協会の「マーケティング・リサーチ綱領」を遵守しております。<br>
                    現在私どもでは「アダムスモニターパネル」のメンバーにご登録いただける方を募集しております。<br>
                    ご登録いただきました方には、インターネット調査を主体として、その他の電話、郵送などの方法での調査にご協力をお願いする場合もあります。<br>
                    <br>
                    ご協力いただきました際には、謝礼としてポイント（グリーンスタンプ株式会社の運営する「My GreenStamp」）を基本とし、調査によってはQUOカード、図書カード、商品券などの謝礼を用意しております。（但し、謝礼額・謝礼の種類はその都度異なります）
                </p>
                <div class="survey-monitor-intro__img">
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_survey-monitor-intro01.jpg")); ?>" alt="パソコンのイラスト">
                </div>
            </div>
        </div>
    </section>

    <!-- survey -->
    <section class="survey">
        <div class="survey__inner container">
            <div class="survey__title-box">
                <div class="survey__icon icon">
                    <span class="icon__circle"></span>
                    <span class="icon__circle"></span>
                    <span class="icon__circle"></span>
                </div>
                <h2 class="survey__title">
                    モニターアンケートの概要
                </h2>
            </div>

            <!-- 1. アンケートについて -->
            <section class="survey__about survey-about">
                <div class="survey-about__inner">
                    <h3 class="survey-about__title survey-sec-title">
                        <span class="survey-sec-title__num">1.</span>アンケートについて
                    </h3>
                    <p class="survey-about__text">
                        アンケートの種類は主に下記となります。アンケートは各種テーマが発生する都度、不定期に行います。
                    </p>
                    <ul class="survey-about__items">
                        <li class="survey-about__item survey-about-item">
                            <div class="survey-about-item__wrap">
                                <div class="survey-about-item__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_about-survey01.png")); ?>" alt="パソコンのアイコン">
                                </div>
                                <h4 class="survey-about-item__heading">
                                    インターネットアンケート
                                </h4>
                            </div>
                            <dl class="survey-about-item__dl">
                                <dt class="survey-about-item__dt">
                                    アンケートの方法
                                </dt>
                                <dd class="survey-about-item__dd">
                                    パソコンでインターネットにアクセスでき、インターネットモニターとしてご登録されている方が対象となります。<br>
                                    アンケート実施のメールをご登録いただきましたメールアドレスへ送信いたします。<br>
                                    メールを受信後、メールに記載されていますURL(アンケートサイト)へアクセスしてご協力ください。
                                </dd>
                                <dt class="survey-about-item__dt">
                                    実施内容
                                </dt>
                                <dd class="survey-about-item__dd">
                                    アンケートの実施が決定しましたら、事務局より、事前にご登録いただいた会員様のメールアドレスへアンケート実施のメールを送信いたします。<br>
                                    送信されるメールの内容は下記の通りとなっております。<br>
                                    ・アンケートのテーマや内容<br>
                                    ・アンケートのサイトのURLアドレス<br>
                                    ・アンケート回答可能期間、締め切り等について<br>
                                    アンケートにご協力可能でしたら、アンケート実施のメールを受信後、メールに記載されているURL（アンケートサイト）にアクセスして、アンケートにご回答下さい。<br>
                                    なお、アンケート回答期間中でしたら、アンケートサイトは24時間アクセスが可能です。<br>
                                    会員様のご都合の良いお時間にアクセスしてください。
                                </dd>
                            </dl>
                        </li>
                        <li class="survey-about__item survey-about-item">
                            <div class="survey-about-item__wrap">
                                <div class="survey-about-item__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_about-survey02.png")); ?>" alt="電話のアイコン">
                                </div>
                                <h4 class="survey-about-item__heading">
                                    電話アンケート
                                </h4>
                            </div>
                            <dl class="survey-about-item__dl">
                                <dt class="survey-about-item__dt">
                                    アンケートの方法
                                </dt>
                                <dd class="survey-about-item__dd">
                                    電話モニターとしてご登録されている方が対象となります。<br>
                                    直接、当社の電話調査員がお電話して、その時点でご協力可能な場合のみ、アンケートを開始いたします。<br>
                                    事前に調査ご協力確認のためのメールやお電話はいたしません。ご理解をお願いいたします
                                </dd>
                                <dt class="survey-about-item__dt">
                                    実施内容
                                </dt>
                                <dd class="survey-about-item__dd">
                                    当社の電話調査員が、会員様がご登録された電話番号へ直接お電話して、アンケートへのご協力を依頼いたします。<br>
                                    ご協力可能でしたら、そのまま電話でのアンケートにご回答していただくようお願いいたします。
                                </dd>
                            </dl>
                        </li>
                        <li class="survey-about__item survey-about-item">
                            <div class="survey-about-item__wrap">
                                <div class="survey-about-item__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_about-survey03.png")); ?>" alt="メールのアイコン">
                                </div>
                                <h4 class="survey-about-item__heading">
                                    郵送アンケートなど上記以外のアンケート
                                </h4>
                            </div>
                            <dl class="survey-about-item__dl">
                                <dt class="survey-about-item__dt">
                                    アンケートの方法
                                </dt>
                                <dd class="survey-about-item__dd">
                                    事前にその旨をメールあるいは電話にて通知し、ご協力をお願いすることがあります。
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- 2. アンケートの謝礼について -->
            <section class="survey__reward survey-reward">
                <div class="survey-reward__inner">
                    <h3 class="survey-reward__title survey-sec-title">
                        <span class="survey-sec-title__num">2.</span>アンケートの謝礼について
                    </h3>
                    <div class="survey-reward__wrap">
                        <div class="survey-reward__img">
                            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_my-green-stamp01.jpg")); ?>" alt="マイ グリーンスタンプ">
                        </div>
                        <p class="survey-reward__text">
                            アンケートにお答えいただくたびに、My GreenStampのポイント、またはその他の規定の謝礼を提供いたします。<br>
                            My GreenStampのポイントはお好きな商品やサービスと交換することができます。<br>
                            詳しくは、<span class="survey-reward__link">My GreenStamp</span>のホームページをご覧ください。<br>
                            なお、謝礼の発行履歴は、会員マイページへログインされますと、会員様ご自身で確認することができます。
                        </p>
                    </div>
                    <ul class="survey-reward__notes">
                        <li class="survey-reward__note">
                            ※ My GreenStampのポイントお渡しは原則、ご回答いただいた日の翌月の10日頃となります。　ただし月末のアンケートの場合は、ポイント申請の締日の関係で翌々月10日頃のお渡しとなる場合があります。
                        </li>
                        <li class="survey-reward__note">
                            ※ My GreenStampのポイント残高は、My GreenStamp 会員ページへログインしてご確認できます。
                        </li>
                    </ul>
                    <details class="survey-reward__mgs-accordion mgs-accordion">
                        <summary class="mgs-accordion__summary">
                            My GreenStampへのメンバー登録について案内
                        </summary>
                        <div class="mgs-accordion__wrap">
                            <p class="mgs-accordion__text">
                                当社は、グリーンスタンプ株式会社の運営する「My GreenStamp（旧J-Point）」と提携しております。<br>
                                会員の方が当社のアンケートにご協力いただいた場合、当社がお渡しする謝礼は、主に「My GreenStamp」のポイントとなっております。<br>
                                <br>
                                このため、当社が謝礼のポイントをお渡しできるようにするために、会員の方が「My GreenStamp」へメンバー登録されている必要があります。<br>
                                アダムスモニターパネルへの入会の手続きにおいて、当社が入会希望者ご本人のための「My GreenStamp」への登録手続きを行うことについて、ご同意いただけない場合はアダムスモニターパネルへの入会登録はできません。
                            </p>
                            <div class="mgs-accordion__img">
                                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_my-green-stamp02.png")); ?>" alt="Loyalty program">
                            </div>
                        </div>
                        <p class="msg-accordion__text">
                            「My GreenStamp」へメンバー登録するために、当社はグリーンスタンプ株式会社に対して、下記のご登録者の登録情報を提供致します。<br>
                            <br>
                            ①住所　②氏名　③生年月日　④連絡先電話番号　⑤Eメールアドレス　⑥My GreenStamp ID　⑦My GreenStampパスワード<br>
                            <br>
                            なお、「My GreenStamp」へのメンバー登録によって、ご登録者に金銭的負担が発生することはありません。<br>
                            また、後日「My GreenStamp」を退会されますと、謝礼のポイントの発行ができなくなりますので、そのような場合はアダムスモニターパネルから退会させていただくことがあります。
                        </p>
                    </details>
                    <div class="survey-reward__btn c_btn_link ani fadein">
                        <a href="https://www3.aaa.co.jp/monitorpanel/login.aspx" class="link" target="_blank">
                            アダムスモニターに今すぐ登録
                        </a>
                    </div>
                </div>
            </section>

            <!-- 3. よくあるご質問 -->
            <section class="survey__faq survey-faq">
                <div class="survey-faq__inner">
                    <h3 class="survey-faq__title survey-sec-title">
                        <span class="survey-sec-title__num">3.</span>よくあるご質問
                    </h3>
                </div>
            </section>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>
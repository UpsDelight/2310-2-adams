<?php get_header(); ?>
<?php
$register_url = 'https://www3.aaa.co.jp/index.aspx';
$login_url = 'https://www3.aaa.co.jp/monitorpanel/login.aspx';
$pw_reset_url = 'https://www3.aaa.co.jp/monitorpanel/password.aspx';
$contact_other_url = home_url('/contact/other');
$my_green_stamp_url = 'https://www.mygreenstamp.jp/mgs/member/index';
?>

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
                調査モニター<span class="wbr">ご登録のご案内</span>
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
    <section class="survey survey--layout">
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
                                    <span class="survey-about-item__margin">
                                        ・アンケートのテーマや内容<br>
                                        ・アンケートのサイトのURLアドレス<br>
                                        ・アンケート回答可能期間、締め切り等について<br>
                                    </span>
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
                                <dd class="survey-about-item__dd--tel">
                                    電話モニターとしてご登録されている方が対象となります。<br>
                                    直接、当社の電話調査員がお電話して、その時点でご協力可能な場合のみ、アンケートを開始いたします。<br>
                                    事前に調査ご協力確認のためのメールやお電話はいたしません。ご理解をお願いいたします
                                </dd>
                                <dt class="survey-about-item__dt">
                                    実施内容
                                </dt>
                                <dd class="survey-about-item__dd--tel">
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
                                <dd class="survey-about-item__dd--other">
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
                            アンケートにお答えいただくたびに、<span class="wbr">My GreenStamp</span>のポイント、またはその他の規定の謝礼を提供いたします。<br>
                            My GreenStampのポイントはお好きな商品やサービスと交換することができます。<br>
                            詳しくは、<a href="<?= $my_green_stamp_url ?>" class="survey-reward__link" target="_blank">My GreenStamp</a>のホームページをご覧ください。<br>
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
                    <details class="survey-reward__mgs-accordion mgs-accordion" open>
                        <summary class="mgs-accordion__summary">
                            <div class="mgs-accordion__summary-text">
                                My GreenStampへの<span class="wbr">メンバー登録について案内</span>
                            </div>
                            <span class="mgs-accordion__toggle"></span>
                        </summary>
                        <div class="mgs-accordion__wrap">
                            <div class="mgs-accordion__img">
                                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/survey_monitor/img_my-green-stamp02.png")); ?>" alt="Loyalty program">
                            </div>
                            <p class="mgs-accordion__text">
                                当社は、グリーンスタンプ株式会社の運営する「My GreenStamp（旧J-Point）」と提携しております。<br>
                                会員の方が当社のアンケートにご協力いただいた場合、当社がお渡しする謝礼は、主に「My GreenStamp」のポイントとなっております。<br>
                                <br>
                                このため、当社が謝礼のポイントをお渡しできるようにするために、会員の方が「My GreenStamp」へメンバー登録されている必要があります。<br>
                                アダムスモニターパネルへの入会の手続きにおいて、当社が入会希望者ご本人のための「My GreenStamp」への登録手続きを行うことについて、ご同意いただけない場合はアダムスモニターパネルへの入会登録はできません。
                            </p>
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
                        <a href="<?= $login_url ?>" class="link" target="_blank">
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
                    <nav class="survey-faq__nav" aria-label="navigation-faq">
                        <?php $faq_nav_items = [
                            ['id' => 'nav-faq-00', 'text' => '会員登録について'],
                            ['id' => 'nav-faq-01', 'text' => '会員IDとパスワードについて'],
                            ['id' => 'nav-faq-02', 'text' => 'アンケートについて'],
                            ['id' => 'nav-faq-03', 'text' => 'My GreenStampについて'],
                            ['id' => 'nav-faq-04', 'text' => '友達紹介システムについて'],
                            ['id' => 'nav-faq-05', 'text' => '退会について'],
                            ['id' => 'nav-faq-06', 'text' => '個人情報の管理について'],
                        ] ?>
                        <ul class="survey-faq__nav-items">
                            <?php foreach ($faq_nav_items as $faq_nav_item) : ?>
                                <li class="survey-faq__nav-item">
                                    <a href="#<?= $faq_nav_item['id'] ?>" class="survey-faq__nav-item-link">
                                        <?= $faq_nav_item['text']  ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <?php $faq_groups = [
                        [
                            'heading' => 'アダムスモニターパネルの会員登録について',
                            'faq_qa_items' => [
                                ['question' => '会員登録は無料ですか？', 'answer' => 'はい。無料です。<br>入会金、年会費等も一切ありません。'],
                                ['question' => '会員になるための条件はありますか？', 'answer' => '株式会社アダムスコミュニケーションが実施するインターネット・電話によるアンケート にご協力いただける、日本国内に住む満15歳以上（中学校卒業以上）の方で、ご自身または同居される家族の方が、広告代理店、市場調査会社、マスコミ関係のいずれにも勤務していないことが条件になります。<br><br>詳しくは、アダムスモニターパネル規約（第三条　入会資格）をご確認ください。'],
                                ['question' => '会員登録の手続きはどこから始めるのですか？', 'answer' => 'アダムスモニターパネルの会員登録ページより登録してください。<br>⇒ <a class="faq-group__a-link" href="' . $register_url . '" target="_blank">会員登録はこちらから</a>'],
                                ['question' => '会員登録のプロフィール入力画面で、Eメールアドレスの欄に、フリーメールのアドレスを入力できますか？', 'answer' => 'できます。'],
                                ['question' => '会員登録のプロフィール入力画面で、Eメールアドレスの欄に、会社や家族など複数の人間で使用している<span class="wbr">Eメールのアドレスを入力できますか？</span>', 'answer' => 'できません。<br>必ず会員登録されるご本人だけが使用しているパソコン用のEメールアドレスを入力してください。'],
                            ]
                        ],
                        [
                            'heading' => '会員IDとパスワードについて',
                            'faq_qa_items' => [
                                ['question' => '会員IDを忘れてしまった場合は、どうすれば良いのですか？', 'answer' => '会員IDは会員本登録が完了した後にお送りするEメールに記載されております。<br>紛失して会員IDが確認できない場合は、アダムスモニターパネル事務局へEメール（氏名・生年月日・住所をお書き添えください）、またはお電話でお問い合わせください。<br>⇒ <a class="faq-group__a-link" href="' . $contact_other_url . '">お問い合わせはこちらから</a>'],
                                ['question' => 'パスワードを忘れてしまった場合は、どうすれば良いのですか？', 'answer' => 'step1.ログイン画面の「パスワードを忘れた方」をクリックします。<br><br>step2.ご登録頂いている必要項目を入力して送信してください。<br><br>step3.パスワード再発行ページへのリンクが記されたメールが届きます。<br>※しばらく経ってもメールが届かない場合は事務局へご連絡ください。<br><br>step4.パスワード再発行ページへのリンクよりアクセスし、必要項目を入力しパスワードを再設定してください。<br><br>⇒ <a class="faq-group__a-link" href="' . $pw_reset_url . '" target="_blank">パスワードを忘れた方</a>'],
                                ['question' => 'パスワードの変更はできますか？', 'answer' => '会員マイページの会員情報画面にある[登録情報を変更する]をクリックします。<br>ログインしていない場合は、モニターIDと現在のパスワードでログインしてください。<br>パスワードを変更する画面が表示されますので、そちらより変更してください。'],
                                ['question' => '後からメールアドレスの変更はできますか？', 'answer' => '会員マイページの「お問い合わせフォーム」へ変更後のメールアドレスをご記入のうえお送りください。事務局にて登録変更を行います。'],
                                ['question' => '会員ログインページからログインしようとするとエラーになりますが、どうすれば良いのですか？', 'answer' => '会員IDとパスワードが正しく入力されていない可能性があります。<br>パスワードは、ご自身が登録しているパスワードと完全に同じになるように、大文字と小文字を区別して入力する必要があります。<br>また、会員ID、パスワード共に半角で入力する必要があります。<br>解決できない場合は、アダムスモニターパネル事務局へEメール、またはお電話でお問合せください。<br>⇒ <a class="faq-group__a-link" href="' . $contact_other_url . '">お問い合わせはこちらから</a>'],
                            ]
                        ],
                        [
                            'heading' => 'アンケートについて',
                            'faq_qa_items' => [
                                ['question' => 'アダムスモニターパネルでは、どのようなアンケートを行っているのですか？', 'answer' => '商品やサービスの利用、生活スタイルなどに関する様々な事柄に関して、アンケートでお聞きしております。<br>現在、当社が募集しておりますモニターの種類は、電話モニター（電話を使うアンケート）、インターネットモニター（パソコンを使うアンケート）になります。<br>また、座談会形式の調査、郵送調査、会場調査等にご協力をお願いすることもあります。'],
                                ['question' => 'アンケートは月に何回あるのですか？', 'answer' => 'アンケートの内容によってお答えして頂く対象者の条件が異なりますので、実施回数については一概に申し上げられません。'],
                                ['question' => 'アンケートに答えるとどのような謝礼がもらえるのですか？', 'answer' => 'アンケートの内容によって謝礼が異なります。謝礼の内容はアンケートのご回答前にモニター様へお伝え致します。謝礼の種類は様々ですが、一例として、My GreenStampポイント、図書カード、商品券等、がございます。モニター様が謝礼の種類をご指定することはできません。'],
                                ['question' => 'アンケートに回答するために商品を買わなければいけないことがあるのですか？', 'answer' => 'そのようなことは一切ございませんので、ご安心ください。'],
                                ['question' => 'アンケートへ回答したことが原因で、セールスや勧誘を受けるかもしれないのが心配なのですが？', 'answer' => 'そのようなことは一切ございませんので、ご安心ください。'],
                            ]
                        ],
                        [
                            'heading' => 'My GreenStampについて',
                            'faq_qa_items' => [
                                ['question' => 'My GreenStampとは何ですか？', 'answer' => 'My GreenStampは、グリーンスタンプ(株)が運営する会員制のポイントサービスです。アンケートの謝礼として、My GreenStampのポイントをプレゼントしております。<br>・My GreenStampは、ポイントを一定量貯めることにより、景品、マイレージ等との交換や、現金との換金ができるとてもお得なサービスです。<br><br>・バッグ、アクセサリーや家電、キッチン用品まで、1,300品を越える豊富な品揃えの中から、お好きな景品と交換できます。<br>・当社のアンケートに回答すると、謝礼としてポイントや謝礼品がもらえます。<br>・多くのMy GreenStampスポンサー（ニッセン、楽天、ジャパネットたかた・・・など）からのショッピングや、資料の請求などでも、ポイントをもらうことができます。<br><br>たくさんポイントを貯めて、いろいろな景品をゲットしましょう！<br><br>詳しくは、<a class="faq-group__a-link" href="' . $my_green_stamp_url . '" target="_blank">My GreenStampのホームページ</a>をご覧ください。'],
                                ['question' => 'My GreenStampの入会は自分で手続きを行わないといけないのですか？', 'answer' => 'アダムスモニターパネルへの入会時に、グリーンスタンプ(株)が運営しているMy GreenStampへ自動的に入会手続きが行われます。<br>ただし既にMy GreenStampまたは旧J-Pointへ入会済みの方については、アダムスモニターパネルご登録フォームの入力の際に、登録画面のMy GreenStamp ID欄へお持ちのMy GreenStamp（または旧J-Point） IDを入力していただきますと新規入会とはならずに、入力いただいたIDに対してアンケートの謝礼分のMy GreenStampポイントをお振込み致します。'],
                                ['question' => '謝礼として受け取ったMy GreenStampのポイントの履歴は、どのように確認するのですか？', 'answer' => '会員マイページへログインしていただき、トップページにアクセスしていただくことにより、過去1年間の謝礼履歴を確認することができます。<br>⇒ <a class="faq-group__a-link" href="' . $login_url . '" target="_blank">会員ログインページはこちらから</a>'],
                                ['question' => 'アンケートに答えた後は、いつMy GreenStampのポイントをもらえるのですか？', 'answer' => '通常は、ご協力日の翌月10日頃にMy GreenStampポイントを発行致します。月末にご協力いただいた場合は、ポイント申請締日の関係で翌々月10日の発行となる場合があります。'],
                                ['question' => 'My GreenStampのポイントが貯まったので景品と交換したいのですが、アダムスモニターパネルで交換して<span class="wbr">もらえるのですか？</span>', 'answer' => '申し訳ございませんが、アダムスモニターパネルでは、My GreenStampのポイントの発行依頼をしておりますが、景品等との交換は行っておりません。<br>景品交換の手続き、ポイント残高のお問合せ、My GreenStampメンバーのID・パスワードのお問合せ方法につきましては、恐れ入りますがMy GreenStampのホームページをご確認ください。<br>詳しくは、<a class="faq-group__a-link" href="' . $my_green_stamp_url . '" target="_blank">My GreenStampのホームページ</a>をご覧ください。'],
                            ]
                        ],
                        [
                            'heading' => '友達紹介システムについて',
                            'faq_qa_items' => [
                                ['question' => '友達紹介システムとは何ですか？', 'answer' => '友達紹介システムとは、既に会員になられている方が、他の方をアダムスモニターパネルへ紹介してその方が会員となった場合、紹介者へ謝礼としてポイントを差し上げるシステムのことです。'],
                                ['question' => '誰を紹介しても友達紹介システムの謝礼をもらえるのですか？', 'answer' => '紹介者と同居されているご家族の方は対象となりません。左記以外の方をご紹介して会員になっていただいた場合は謝礼を差し上げております。'],
                                ['question' => '友達紹介システムで謝礼を受け取るには、どのようにしたらよいのですか？', 'answer' => '会員登録を完了した時に、事務局からお送りするメールの本文に記載されております「お友達紹介URL」をコピーして、紹介したいお友達にメール等で送信して下さい。<br>「お友達紹介URL」を受け取ったお友達が、そのURLをクリックすると会員登録処理が開始されます。<br>紹介された方が会員登録を完了した時点で、紹介者へ謝礼をお渡しするための処理を開始いたします。'],
                                ['question' => 'せっかく「お友達紹介URL」を友達へメールで送ったのに、友達はそのURLをクリックしないで通常の会員登録画面から会員登録してしまいました。この場合、友達紹介システムの謝礼をもらえますか？', 'answer' => '「お友達紹介URL」を受け取った方が、そのURLをクリックしないで会員登録をした場合、友達紹介システムは適用されません。ご質問のケースでは、残念ながら謝礼を受け取れないことになります。'],
                                ['question' => '会員であるAさんが、友達のBさんへ「お友達紹介URL」を送り、さらにBさんがそのURLをCさんへ送った場合、<span class="wbr">Cさんが会員になったら謝礼は誰がもらえるのですか？</span>', 'answer' => '最初にURLをお送りになった会員の方（ご質問のケースでは、Aさん）が謝礼を受け取ります。'],
                            ]
                        ],
                        [
                            'heading' => 'アダムスモニターパネルからの退会について',
                            'faq_qa_items' => [
                                ['question' => '退会したいのですが、どうすれば良いのですか？', 'answer' => '以下の会員ログインページからログインした後に、マイページの中の「会員情報」にアクセスしていただき、ページ中の「退会する」をクリックするとその時点で退会となります。<br>⇒ <a class="faq-group__a-link" href="' . $login_url . '" target="_blank">会員ログインページはこちらから</a>'],
                            ]
                        ],
                        [
                            'heading' => '個人情報の管理について',
                            'faq_qa_items' => [
                                ['question' => '会員登録した際の個人情報やアンケートの回答結果は、安全に管理されていますか？', 'answer' => '当社では以下の個人情報管理のための対応を取っております。<br><br>1.インターネット経由でアクセスできる個人情報ページに全て、SSLを設定しています。<br>2.SSLは信頼できるインターネット情報の暗号化技術です。<br>3.社内でアダムスモニターパネルの情報にアクセスできる担当者を限定しています。<br>4.当社では、マーケティングリサーチ業界が規定する個人情報保護ガイドラインを遵守すると同時に、プライバシーマークの認定を受けております。'],
                            ]
                        ],
                    ] ?>
                    <ul class="survey-faq__groups">
                        <?php foreach ($faq_groups as $i => $faq_group) : ?>
                            <li id="nav-faq-0<?= $i ?>" class="survey-faq__group faq-group">
                                <h4 class="faq-group__heading">
                                    <?= $faq_group['heading'] ?>
                                </h4>
                                <?php foreach ($faq_group['faq_qa_items'] as $j => $faq_qa_item) : ?>
                                    <?php $is_open = ($i == 0) && ($j == 0); ?>
                                    <details class="faq-group__accordion" <?= $is_open ? ' open' : '' ?>>
                                        <summary class="faq-group__summary">
                                            <div class="faq-group__wrap--q">
                                                <p class="faq-group__q">Q.</p>
                                                <p class="faq-group__q-text"><?= $faq_qa_item['question'] ?></p>
                                                <span class="faq-group__q-toggle"></span>
                                            </div>
                                        </summary>
                                        <div class="faq-group__wrap--a">
                                            <p class="faq-group__a">A.</p>
                                            <p class="faq-group__a-text"><?= $faq_qa_item['answer'] ?></p>
                                        </div>
                                    </details>
                                <?php endforeach; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="survey-faq__btn c_btn_link ani fadein">
                        <a href="<?= $login_url ?>" class="link" target="_blank">
                            アダムスモニターに今すぐ登録
                        </a>
                    </div>
                </div>
            </section>

            <!-- 4. アダムスモニターパネル規約 -->
            <section class="survey__monrle survey-monrle">
                <div class="survey-monrle__inner">
                    <h3 class="survey-monrle__title survey-sec-title">
                        <span class="survey-sec-title__num">4.</span>アダムスモニターパネル規約
                    </h3>
                    <div class="survey-monrle__scroll scroll">
                        <?php $scroll_contents_monrle = [
                            [
                                'content_heading' => '第一条　総則',
                                'content_items' => [
                                    "本規約は、株式会社アダムスコミュニケーション（以下「当社」といいます）が、当社が主催する登録会員制アンケートモニター組織（以下「アダムスモニターパネル」といいます）へ入会した会員に対して、市場調査または世論調査等を目的としたアンケートを行う時の、当社と会員の契約条件を定めるものです。",
                                    "当社と会員の双方は本規約を承認し、遵守するものとします。",
                                    "アダムスモニターパネルの運営は、アダムスモニターパネル事務局が行うものとします。",
                                    "当社は、会員の事前の承諾を得ることなく、また、予告なしに本規約、およびアダムスモニターパネルの名称を変更できるものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第二条　アンケート',
                                'content_items' => [
                                    "当社は、当社が必要と認める時に、会員に対してアンケートを依頼するものとし、会員はできる限り当該アンケートに協力するものとします。",
                                    "当社は、調査事業を遂行する目的で、アンケートの回答情報を会員本人の承諾なく第三者へ開示・提供することがあります。<br>
                                    但し、第三者へ開示・提供するアンケートの回答情報には、氏名、住所、電話番号、メールアドレス等の会員本人を特定できる情報を含まないものとします。",
                                    "会員は、アンケートの回答を行うにあたり、当社が定める方法に従うものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第三条　入会資格',
                                'content_items' => [
                                    "下記のすべての条件を満たす方は、所定の登録手続きを行うことにより、アダムスモニターパネルへ入会することができるものとします。<br>
                                    a. 当社が実施するアンケートにご協力いただく意思のある方。<br>
                                    b. 日本国内に居住している満15歳以上で中学校卒業以上の方。<br>
                                    c. 広告代理店、市場調査会社、マスコミ関係のいずれにも勤務していない方。（ご家族の方が左記に該当している場合も含みます。）<br>
                                    d. 既にアダムスモニターパネルの会員として登録されていない方。<br>
                                    e. 本規約を承諾された方。",
                                    "未成年の方は、その親権者の同意を得たうえで登録手続きを行うものとします。",
                                    "当社は、会員として承認することを不適当と判断した場合、入会の承認を行わないことができるものとします。<br>
                                    また、入会後であっても本規約の第八条に定める会員資格の取消事由に該当した場合は、入会を取り消すことができるものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第四条　入会登録および登録期間',
                                'content_items' => [
                                    "アダムスモニターパネルへの入会希望者は、入会するにあたって登録手続きを行う必要があります。",
                                    "アダムスモニターパネルへの入会希望者は、登録手続きにおいて、登録情報のすべての項目について、事実に基づき正確に申告するものとします。",
                                    "会員の登録期間は限定しないものとします。<br>
                                    但し、会員自らの意思で退会した場合、および、会員が、第八条3項に該当する理由によって退会となった場合は、その時点において、当該会員の登録は抹消されるものとします。",
                                    "アダムスモニターパネルへの入会希望者は、アダムスモニターパネルへ入会する際に、グリーンスタンプ株式会社が運営する会員制のポイントサービスである、My GreenStamp（旧J-Point）へ自動的に入会することを了承するものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第五条　登録情報の取り扱い',
                                'content_items' => [
                                    "当社は、会員の登録情報を管理・保有するものとします。",
                                    "会員は、住所、電話番号、メールアドレス等の登録情報に変更が生じた場合、速やかに登録情報の変更手続きを行うものとします。",
                                    "当社は、電話、メール、その他の方法によって、会員に対して必要に応じて随時、登録情報の内容確認の実施、または登録情報の更新手続きの依頼を行うことがあります。<br>
                                    会員は、当社から登録情報の更新手続きの依頼があった場合、所定の期間内に更新手続きを行うものとします。",
                                    "当社は、会員の登録情報について、当社の定める個人情報保護方針に基づいて取り扱いを行うものとします。",
                                ]
                            ],
                            [
                                'content_heading' => '第六条　個人情報',
                                'content_items' => [
                                    "当社は、会員の個人情報を以下の目的のみに利用します。ただし、当社は、予め会員に通知して、以下の目的と相応の関連を持つと判断される範囲内において、利用目的を変更できるものとします。<br>
                                    a. 当社のアンケートによる回答情報の取得のため。<br>
                                    b. 会員の登録情報の確認や更新手続きの依頼、その他会員登録手続のため。<br>
                                    c. 会員への謝礼送付のため。<br>
                                    d. このほか、この会員規約上の義務を履行しまたは権利を行使するため。",
                                    "当社は、会員より取得した個人情報を、以下の場合を除き、第三者へ提供しないものとします。<br>
                                    a. 当該会員の事前の承諾を得て提供する場合。<br>
                                    b. 会員個人を特定できない方法にて提供する場合。<br>
                                    c. 法令に基づき提供する場合。<br>
                                    d. 第4項に掲げる業務を、委託業者へ委託する場合。",
                                    "当社は、当該会員からの個人情報の利用目的の通知、開示、訂正等（内容の訂正､追加､または削除）、利用停止等(利用の停止､消去､および第三者への提供の停止)の求めに、遅滞なく対応するものとします。",
                                    "当社は、会員との連絡業務などアダムスモニターパネルの目的を達成するために必要な業務を委託業者に委託し、会員の事前の承諾を得ることなく、会員の個人情報を委託業者に開示することができるものとします。<br>
                                    この場合、当社は、十分な個人情報の保護水準を満たしている委託業者を選定するものとします。",
                                    "個人情報に関するお問い合わせは、下記の「個人情報相談窓口」までお願いします。<br>
                                    「個人情報相談窓口」<br>
                                    株式会社アダムスコミュニケーション　個人情報保護管理者　清水宏一<br>
                                    住所：東京都杉並区上高井戸1-8-17　ブライトコアビル新館6階<br>
                                    電話：0120-373-548<br>
                                    privacy@kir338815.kir.jp"
                                ]
                            ],
                            [
                                'content_heading' => '第七条　会員IDおよびパスワードの管理',
                                'content_items' => [
                                    "会員登録後に本サイトを利用する際には、当社が交付する会員IDと、会員が設定したパスワードを使用するものとします。 会員IDは、会員期間中を通じて変更することができません。 パスワードは、会員が本サイトの会員情報変更画面を使用して変更することができます。",
                                    "会員は、会員IDとパスワードの管理および使用について、一切の責任を負うものとします。 万一、会員の管理不十分、または第三者による不正使用等による問題が発生した場合でも、当社は一切責任を負わないものとします。",
                                    "会員IDとパスワードは、会員本人のみが使用できるものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第八条　退会および会員資格の取り消し',
                                'content_items' => [
                                    "会員は、いつでもアダムスモニターパネルの退会を申請することができるものとします。",
                                    "会員がアダムスモニターパネルからの退会を希望する場合は、所定の手続きにより退会申請を行うものとします。当社が退会申請を受理した時点で退会となります。",
                                    "当社は、以下のいずれかの事由が生じた場合、会員の承諾の有無に関わらず、いつでも会員資格を取り消し、退会とすることができるものとします。
                                    a. 当社が定めた所定の期間内に、会員が必要な登録情報の更新手続きを行わず、当社が会員として不適当と判断した場合。<br>
                                    b. 当社へ申し出がされていない状態で一定回数以上、電話、電子メール等で連絡が取れなくなった場合。<br>
                                    c. 会員本人若しくはご家族が広告代理店・市場調査会社・マスコミ関係に勤務することになった場合。<br>
                                    d. その他、本規約の第十条に定める禁止事項に該当する行為があった場合。<br>
                                    e. その他、当社が不適当と判断した場合。",
                                    "当社は、会員の退会後、退会者からの問合せ対応を行うため、当該退会者の登録情報を一定期間保有します。その後、登録情報は全て消去します。"
                                ]
                            ],
                            [
                                'content_heading' => '第九条　アンケートの回答に対する謝礼',
                                'content_items' => [
                                    "当社は、会員の承諾を得て無償で実施する場合を除いて、アンケートの回答に対する謝礼として、My GreenStamp（旧J-Point）のポイント、金券、景品等を提供するものとします。",
                                    "当社は、各アンケートの回答に対する謝礼の内容および提供時期について、各アンケートを依頼する時に、対象の会員へ通知するものとします。",
                                    "アンケートの回答内容が、明らかに不誠実・不適切なものと当社が判断した場合、または、公序良俗に反していた場合、当社は当該アンケートについての謝礼を提供しないことができるものとします。",
                                    "登録情報（住所、氏名、電話番号、メールアドレスなど）の不備が原因で、会員が謝礼を受取れなかった場合、当社は一切の責任を負わないものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第十条　禁止事項',
                                'content_items' => [
                                    "会員の以下に該当する、またはその恐れのある行為は禁止します。<br>
                                    a. 法令に違反する行為。<br>
                                    b. 公序良俗に反する行為。<br>
                                    c. 当社及び第三者の著作権を侵害する行為。<br>
                                    d. アダムスモニターパネルの運営を妨害する行為。<br>
                                    e. アダムスモニターパネルに登録されている他の会員に対して不利益を及ぼす行為。<br>
                                    f. 当社が運営するサーバーに対して不正なアクセス、ハッキングを行う行為。<br>
                                    g. 会員ID・パスワードの他人への譲渡、貸与、名義変更、売買などの行為。<br>
                                    h. アダムスモニターパネルへ重複して会員登録し、複数の会員IDを取得または使用する行為。<br>
                                    i. 入会時に虚偽の内容で登録手続きを行う行為。<br>
                                    j. 当社が行うアンケートに対して虚偽の回答を行う行為。<br>
                                    k. 第十一条に定める会員の守秘義務に違反する行為。<br>
                                    l. アダムスモニターパネルのアンケートに関して知りえた情報を、当社の許可無く使用して行うすべての行為。<br>
                                    m. その他、当社が不適当と判断する行為。"
                                ]
                            ],
                            [
                                'content_heading' => '第十一条　守秘義務',
                                'content_items' => [
                                    "会員は、アンケート回答の有無にかかわらず、アダムスモニターパネルのアンケートのテーマや内容に関する情報について、第三者へ知らせてはならないものとします。",
                                    "守秘義務は、アダムスモニターパネル退会後および会員資格の取り消し後においても消滅しないものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第十二条　回答情報の著作権',
                                'content_items' => [
                                    "アンケートの回答情報について、その著作権および、その他一切の権利は、全て当社が有するものとし、会員は、当社及び第三者に対して、著作者人格権を行使しないものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第十三条　損害賠償の請求',
                                'content_items' => [
                                    "会員が本規約のいずれかに違反し、当社あるいは第三者に損害を与えた場合、当社は当該会員に対して損害賠償の請求を行うことができるものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第十四条　免責',
                                'content_items' => [
                                    "当社は、アダムスモニターパネルの活動の変更、中断、中止に起因して会員が蒙った不利益または損害について、一切責任を負わないものとします。",
                                    "当社は、本サイトの情報等について、本規約施行のときにおける一般的な不正アクセス防止手段を講じても回避することのできない第三者の不正アクセス等によって生じた損害につき、一切責任を負わないものとします。",
                                    "会員が登録と異なるメールアドレスを使用して受発信を行った場合、当該会員に不利益、損害が発生しても、当社はその責任を負わないものとします。"
                                ]
                            ],
                            [
                                'content_heading' => '第十五条　活動内容の変更、中断、および中止',
                                'content_items' => [
                                    "当社は、下記のいずれかに該当する事態が発生した場合、会員の事前の承諾を得ることなく、アダムスモニターパネルの活動内容を中断する場合があります。<br>
                                    a. アダムスモニターパネルの運用に関連するシステムの定期保守、更新ならびに緊急の場合。<br>
                                    b. 火災、停電、天災等の不可抗力により、活動の継続が困難になった場合。<br>
                                    c. その他不測の事態により、当社が活動の継続が困難と判断した場合。",
                                    "当社は、一定の予告期間をもって、会員の事前の承諾を得ることなく、アダムスモニターパネルの活動内容の一部または、全部を変更する場合があります。",
                                    "当社は、一定の予告期間をもって、会員の事前の承諾を得ることなく、アダムスモニターパネルの活動を中止する場合があります。",
                                    "アダムスモニターパネルの活動を中止する場合、会員の登録情報は当社が責任をもって廃棄します。"
                                ]
                            ],
                            [
                                'content_heading' => '第十六条　専属的合意管轄裁判所',
                                'content_items' => [
                                    "当社と会員の間で本規約に関連して生じた紛争については、東京地方裁判所を第一審の専属的合意管轄裁判所とします。"
                                ]
                            ],
                        ] ?>
                        <ul class="scroll__contents">
                            <?php foreach ($scroll_contents_monrle as $scroll_content) : ?>
                                <li class="scroll__content">
                                    <p class="scroll__content-heading">
                                        <?= $scroll_content['content_heading'] ?>
                                    </p>
                                    <ol class="scroll__content-items">
                                        <?php foreach ($scroll_content['content_items'] as $content_item) : ?>
                                            <li class="scroll__content-item">
                                                <?= $content_item  ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </li>
                                <?php if ($scroll_content == end($scroll_contents_monrle)) : ?>
                                    <li class="scroll__content">
                                        <p class="scroll__content-text--last">
                                        （制定）平成15年4月1日<br>
                                        （改訂）令和3年2月10日
                                        </p>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- 5. モニター個人情報保護方針 -->
            <section class="survey__privacy survey-privacy">
                <div class="survey-privacy__inner">
                    <h3 class="survey-privacy__title survey-sec-title">
                        <span class="survey-sec-title__num">5.</span>モニター個人情報保護方針
                    </h3>
                    <div class="survey-privacy__scroll scroll">
                        <ul class="scroll__contents">
                            <li class="scroll__content">
                                <p class="scroll__content-text">
                                    本モニターパネルでは、(株)アダムスコミュニケーションの個人情報保護方針に基づき、個人情報の収集、利用、提供について次のとおり実行いたします。
                                </p>
                                <?php $scroll_content_items_privacy = [
                                    "個人情報の取得は、常に利用目的を明確に定め、適法、かつ公正な手段によって行います。",
                                    "個人情報の利用は、ご本人(調査対象者)の同意を得た利用目的の範囲内で行います。又、特定された利用目的の達成に必要な範囲を超えて利用する場合は、あらかじめご本人の同意を得て行います。",
                                    "個人情報の第三者への提供は、原則として行わないこととしていますが、提供する場合は、あらかじめご本人の同意を得て行います。",
                                    "個人情報は、利用目的の達成に必要な範囲内で、正確、かつ最新の状態で管理いたします。",
                                    "(株)アダムスコミュニケーションは、個人情報の漏洩、滅失、又はき損を防止し是正するために、組織的、人的、物理的、及び技術的な安全管理措置を講じます。",
                                    "(株)アダムスコミュニケーションが個人情報を取り扱うにあたっては、個人情報の取り扱いに関する法令や国が定める指針、及び当社加盟の社団法人日本マーケティング・リサーチ協会が定める「マーケティング・リサーチ綱領」「マーケティング・リサーチ産業　個人情報保護ガイドライン」、マーケティング・リサーチ業界の国際的行動規範である「ICC／ESOMAR国際綱領」、その他の規範を遵守いたします。",
                                    "(株)アダムスコミュニケーションは、個人情報保護方針を実践するために規程等を含む個人情報保護マネジメントシステムを策定し運用しておりますが、全ての従業者に対する教育、及び監査などを定期的に行い、個人情報保護マネジメントシステムの継続的な見直しと改善を実行いたします。",
                                    "開示対象個人情報のご本人、又はその代理人からの利用目的の通知、開示、訂正等(内容の訂正、追加、又は削除)、利用停止等(利用の停止､消去､及び第三者への提供の停止)の求めに遅滞なく対応いたします。",
                                    "(株)アダムスコミュニケーションは、全ての従業者が、この個人情報保護方針の趣旨と個人情報の取り扱い手順を十分理解した上で、細心の注意を払って日常業務にあたり、個人情報の保護に努めます。"
                                ] ?>
                                <ol class="scroll__content-items">
                                    <?php foreach ($scroll_content_items_privacy as $content_item) : ?>
                                        <li class="scroll__content-item">
                                            <?= $content_item  ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                                <p class="scroll__content-text--last">
                                    なお当事務局は、モニター個人に関する情報を取り扱う管理責任者を置き、その管理責任者に適切な管理を行わせております。
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="survey-privacy__btn c_btn_link ani fadein">
                        <a href="<?= $login_url ?>" class="link" target="_blank">
                            アダムスモニターに今すぐ登録
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>
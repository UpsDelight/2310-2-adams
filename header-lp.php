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
    
    <?php if(is_page('lp-contactcenter/thanks')){ ?>
      <meta property="og:title" content="資料ダウンロードありがとうございます｜医療・ヘルスケア業界向け製品・ソリューション利用者向けサポートコールセンター事例">
      <meta name="description" content="">
      <title>資料ダウンロードありがとうございます｜医療・ヘルスケア業界向け製品・ソリューション利用者向けサポートコールセンター事例</title>
    <?php } ?>
    <?php if(is_page('lp-contactcenter')){ ?>
      <meta property="og:title" content="医療・ヘルスケア業界向け製品・ソリューション利用者向けサポートコールセンター事例">
      <meta name="description" content="">
      <title>医療・ヘルスケア業界向け製品・ソリューション利用者向けサポートコールセンター事例</title>
    <?php } ?>

    <?php if(is_page('lp-cssurveys/thanks')){ ?>
      <meta property="og:title" content="資料ダウンロードありがとうございます｜Actionableな（改善活動に利用しやすい）顧客満足度調査とは">
      <meta name="description" content="">
      <title>資料ダウンロードありがとうございます｜Actionableな（改善活動に利用しやすい）顧客満足度調査とは</title>
    <?php } ?>
    <?php if(is_page('lp-cssurveys')){ ?>
      <meta property="og:title" content="Actionableな（改善活動に利用しやすい）顧客満足度調査とは">
      <meta name="description" content="">
      <title>Actionableな（改善活動に利用しやすい）顧客満足度調査とは</title>
    <?php } ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" type="image/png" sizes="180x180">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon.png">
    <!--favicon-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--google fontの読み込みが早くなる-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--google fontの読み込みが早くなる-->
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!--sassコーディングの場合-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lp.css" rel="stylesheet">
    <!--wp自動生成↓↓-->
    <?php wp_head(); ?>
    <!--wp自動生成↑↑-->

    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4X2NLGFP2M"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-4X2NLGFP2M');
	</script>
</head>

<body>
    <div id="wrapper">
        <div class="nav_mask"></div>
        <!-- ↓↓ header ↓↓ -->
        <header class="header <?php if(is_page('lp-cssurveys') || is_page('lp-cssurveys/error') || is_page('lp-cssurveys/thanks')) { echo 'header_blue';} ?>">
        <div class="header__inner">
          <h1 class="header__logo">
      
            <a href="<?php if(is_page('lp-cssurveys') || is_page('lp-cssurveys/error') || is_page('lp-cssurveys/thanks')){ echo home_url('/lp-cssurveys');}?><?php if(is_page('lp-contactcenter') || is_page('lp-contactcenter/error') || is_page('lp-contactcenter/thanks')){ echo home_url('/lp-contactcenter');}?>"
              ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lp/common/img_logo.svg" alt="ラクセミ"
            /></a>
          </h1>
          <?php if(!is_page('lp-contactcenter/thanks') && !is_page('lp-cssurveys/thanks')){ ?>
          <div class="header__btn header__btn_js">
            <a class="c__btn">資料ダウンロードはこちら</a>
          </div>
          <?php } ?>
          <!--menu-->
        </div>
      </header> 
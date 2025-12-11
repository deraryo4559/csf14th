<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bureau.css" type="text/css" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/path-to-your/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/path-to-your/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


  <?php
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css', array(), '6.1.2');
  wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', array(), '1.0');
  wp_enqueue_script('jquery');
  wp_enqueue_script('food-science-main', get_template_directory_uri() . '/assets/js/main.js');
  wp_head();
  ?>
</head>
<header class="header" id="header"  style="top: 0px;">
  <div class="header_logo">
    <a href="<?php echo home_url(); ?>"></a>
    <div class="logo-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/common/CSF_Logo_header4.png');"></div>
    <h2 class="logo-title">
      <?php echo bloginfo('description'); ?>
    </h2>
  </div>

  <div class="header_nav">
    <div class="header_menu js-menu-icon"><span></span></div>
    <div class="gnav js-menu">
      <?php
      $args = [
        'menu' => 'global-navigation',
        'menu_class' => '',
        'container' => false,
      ];
      wp_nav_menu($args)
      ?>
    </div>
  </div>
</header>

<body>
  <main>
    <section id="dp-frame" class="dp-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/top-bg.png');">
      <div class="rect-left-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/top.png');"></div>
      <div class="dp-top-header">
        <h2 class="dp-top-title">局紹介</h2>
        <h2 class="dp-top-subtitle">department</h2>
      </div>
      <div class="rect-right-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/top.png');"></div>
    </section>

    <section id="dp-frame" class="dp-single dp-kouhou">
      <div class="dp-single-top">
        <div class="dp-single-top-sentence">
          <h1 class="dp-single-header">広報局</h1>
          <h2 class="dp-single-subtitle">自分のデザインでCSFの魅力を伝える局</h2>
          <p>日常的な仕事はSNSを通してCSFの活動を伝えています。<br>
            イベントではチラシ、コンテンツ紹介、広報ブースなどを作成します。<br>
            昨期の文化祭はインスタレーションで団体を表現しました。<br>
            広報局は発信した情報がそのまま外からのイメージになる、<br>
            言わば団体の顔とも言える局です。</p>
        </div>
        <div class="dp-single-top-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/kouhou1.png');"></div>
      </div>
      <div class="dp-single-bottom">
        <div class="dp-single-bottom-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/kouhou2.png');"></div>
        <div class="dp-single-bottom-rect-img2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/kouhou3.png');"></div>
      </div>
    </section>

    <section id="dp-frame" class="dp-single dp-sousei">
    <div class="dp-single-top">
        <div class="dp-single-top-sentence">
          <h1 class="dp-single-header">地方創生局</h1>
          <h2 class="dp-single-subtitle">廃校活用を通して地域活性化を発信する局</h2>
          <p>“廃校を通して都市と地方のかけ橋となる”という団体理念を実践する局です。<br>
            ツキイチ廃校という名前で地方の廃校を取材し、それを元に記事を作り発信します。<br>
            また、廃校を用いた宿泊施設への合宿の企画など、団体内へ向けての活動も行います。<br>
            試行錯誤と挑戦を繰り返し、地域の活性化や地方との繋がりを楽しんでいます。</p>
        </div>
        <div class="dp-single-top-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/sousei1.png');"></div>
      </div>
      <div class="dp-single-bottom">
        <div class="dp-single-bottom-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/sousei2.png');"></div>
        <div class="dp-single-bottom-rect-img2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/sousei3.png');"></div>
      </div>
    </section>
    <section id="dp-frame" class="dp-single dp-unei">
    <div class="dp-single-top">
        <div class="dp-single-top-sentence">
          <h1 class="dp-single-header">運営局</h1>
          <h2 class="dp-single-subtitle">理想のイベントを創るための中心となる局</h2>
          <p>イベントの中心となり、盛り上げる局です。<br>
            下の写真にあるオーケストラの方々など、<br>
            外部の団体、アーティストに出演のオファーをします。<br>
            他の大学の部活、サークルや学生団体からプロのアーティストや地域の飲食店との関わりが多く、<br>
            イベントを創り上げることを実感できます。</p>
        </div>
        <div class="dp-single-top-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/unei1.png');"></div>
      </div>
      <div class="dp-single-bottom">
        <div class="dp-single-bottom-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/unei2.png');"></div>
        <div class="dp-single-bottom-rect-img2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/unei3.png');"></div>
      </div>
    </section>
    <section id="dp-frame" class="dp-single dp-syogai">
    <div class="dp-single-top">
        <div class="dp-single-top-sentence">
          <h1 class="dp-single-header">渉外局</h1>
          <h2 class="dp-single-subtitle">団体が活動するための縁の下の力持ちである局</h2>
          <p>イベントに向けての協賛の依頼や団体を運営していくための資金を集める局です。<br>
            この局がなければまず団体は成り立たないとても重要な局です。<br>
            企業の方と電話やメールのやり取りをし、<br>
            実際に協賛を頂けることにやりがいを感じています。<br>
            さらに、この団体の活動に興味を持って頂ける喜びもあります。</p>
        </div>
        <div class="dp-single-top-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/syogai1.png');"></div>
      </div>
      <div class="dp-single-bottom">
        <div class="dp-single-bottom-rect-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/syogai2.png');"></div>
        <div class="dp-single-bottom-rect-img2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/department/syogai3.png');"></div>
      </div>
    </section>
  </main>

  <script>
    $(function() {
	var headerHeight = $('header').outerHeight(),
		startPos = 0;
	$(window).on('load scroll', function() {
		var scrollPos = $(this).scrollTop();
		if ( scrollPos > startPos && scrollPos > headerHeight ) {
			$('header').css('top', '-' + headerHeight + 'px');
		} else {
			$('header').css('top', '0');
		}
		startPos = scrollPos;
	});
});
  </script>
  
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_footer(); ?>
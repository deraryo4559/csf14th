<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/concept.css" type="text/css" />
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
    <section id="concept1">
      <div class="concept1-inner">
        <div class="concept1-header"><h2>1. 学生団体って？</h2></div>
        <div class="concept1-content">
          <p>
              <span class="concept_blue">学生団体</span>は大学などの学生コミュニティ内で<br>
              形成される組織で、さまざまな目的や<br>
              関心ごとに基づいて活動する集団です。<br>
              これらの団体は、学生が<span class="concept_blue">自己成長</span>や<span class="concept_blue">社会貢献</span>を促進し、<br>
              興味や才能を発揮する場を提供することを<br>目指しています。
          </p>
        </div>
      </div>
      <div class="concept1-rect-left-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/family.png');"></div>
      <div class="concept1-rect-right-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/hatena3.png'"></div>
      <div class="concept1-rect-right-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/triangle2.png');"></div>
    </section>
    <section id="concept2">
      <div class="concept2-inner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept3.png');">
        <div class="concept2-header"><h2>2. CSFとは!?</h2></div>
        <div class="concept2-content">
          <p>廃校文化祭実行委員会CSFとは、<br>
          <span class="concept_blue">『廃校を通して都市と地方の架け橋』</span><br>
          を理念としている学生団体です。<br>
          毎年池袋の廃校<span class="concept_blue">みらい館大明</span>で<br>
          <span class="concept_blue">校境なき文化祭</span>を開催します。<br>
          CSFは廃校を通した地域の活性化<br>
          について考えるきっかけを提供する<br>
          活動をしています。
          </p>
        </div>
      </div>
      <div class="concept2-rect-left-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/hatena3.png"></div>
      <div class="concept2-rect-right-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/grandpa2.png');"></div>
    </section>
    <section id="concept3">
      <div class="concept3-inner">
        <div class="concept3-header"><h2>3. 代表あいさつ</h2></div>
        <div class="concept3-content">
          <div class="concept3-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/ozeki.png');"></div>
          <div class="concept3-sentence">
            <p>
                こんにちは!!CSF代表の<span class="concept_blue">小瀬木</span>です。<br>
                HPをご覧いただき、ありがとうございます。<br>
                <br>
                廃校活用という分野が<br>
                もっと多くの人々が<span class="concept_blue">廃校の面白さ</span>に<br>
                触れ合えるよう私たちは日々活動を行っています。<br>
                <br>
                <span class="concept_blue">廃校</span>を用いてイベントを企画する、<br>
                こんな楽しさに満ちあふれた<br>
                団体は他にはありません。<br>
                <br>
                <span class="concept_blue">「東京に廃校！？」</span>と気になった皆さま、<br>
                入団希望のお問い合わせ、<br>
                <span class="concept_blue">文化祭のご来場</span>お待ちしております!!
            </p>
            <h3>CSF第14期代表　 小瀬木 遼</h3>
          </div>
        </div>
      </div>
      <div class="concept3-rect-left-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/square3.png');"></div>
      <div class="concept3-rect-right-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/gold.png');"></div>
    </section>
    <section id="concept4">
      <div class="concept4-inner">
        <div class="concept4-header"><h2>4. 校境なき文化祭</h2></div>
        <div class="concept4-content">
          <div class="concept4-container img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_1.png');"></div>
          <div class="concept4-container sentence" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_2.png');"></div>
          <div class="concept4-container img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_3.png');"></div>
          <div class="concept4-container sentence" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_4.png');"></div>
          <div class="concept4-container img-big" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_5.png');"></div>
          <div class="concept4-container sentence" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_6.png');"></div>
          <div class="concept4-container img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_7.png');"></div>
          <div class="concept4-container sentence" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_8_2.png');"></div>
          <div class="concept4-container img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/concept4_9.png');"></div>
        </div>
      </div>
      <div class="concept4-rect-left-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/ghost2.png');"></div>
      <div class="concept4-rect-right-bottom" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/dress.png');"></div>
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
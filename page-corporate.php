<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/corporate.css" type="text/css" />
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
        'order' => 'ASC', // 昇順（あ → ん）
        'orderby' => 'meta_value', // カスタムフィールドで並べ替える
        'meta_key' => 'furigana', // カスタムフィールドのフィールド名
      ];
      wp_nav_menu($args)
      ?>
    </div>
  </div>
</header>

<body>
  <main>
    <section id="corporate-header">
      <div class="corporate-header-inner">
        <h1>企業の皆様へ</h1>
      </div>
      <div class="corporate-container-inner">
        <h2>はじめに</h2>
        <p>この度は、2024年6月16日開催の紫陽祭の開催にあたり、多くの企業の皆様からの多大なるご協賛をいただきました。<br>
          ご協賛いただきました協賛品につきましては、紫陽祭の各種イベント景品や来場者ノベルティとして活用させていただきます。<br>
          この場をお借りいたしまして、廃校文化祭実行委員会CSF一同厚く御礼申し上げます。</p>
      </div>
      <div class="corporate-name-inner">
        <p>学生団体廃校文化祭実行委員会CSF</p>
        <p>14期代表　小瀬木遼</p>
        <p>14期渉外局長　林凌平</p>
      </div>
    </section>
    <section id="corporate-logo">
      <div class="corporate-logo-header">
        <h2>2024年紫陽祭 協賛企業一覧（五十音順）</h2>
      </div>
      <div class="corporate-logo-inner">
      <?php
      // スポンサー投稿タイプのアイキャッチ画像を取得して表示する関数
      function display_sponsor_logos() {
          // スポンサー投稿タイプの投稿を取得
          $args = array(
              'category_name' => 'sponsor',
              'posts_per_page' => -1, // 全てのスポンサー投稿を取得
              'meta_key' => 'furigana', // カスタムフィールドのフィールド名
              'orderby' => 'meta_value', // カスタムフィールドの値で並べ替え
              'order' => 'ASC' // 昇順で並べ替え
          );
          $sponsor_query = new WP_Query($args);

          // 投稿がある場合
          if ($sponsor_query->have_posts()) {
            echo '<div class="logo-container">';
            while ($sponsor_query->have_posts()) {
                $sponsor_query->the_post();
                // アイキャッチ画像のURLを取得
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if ($thumbnail_url) {
                    // 投稿のURLを取得
                    $post_url = get_permalink();
                    echo '<a href="' . esc_url($post_url) . '" class="logo-card">';
                    echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                    echo '</a>';
                }
            }
            echo '</div>';
            // 投稿データをリセット
            wp_reset_postdata();
          } else {
              echo 'スポンサーが見つかりませんでした。';
          }
      }
      ?>
        <?php display_sponsor_logos(); ?>
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
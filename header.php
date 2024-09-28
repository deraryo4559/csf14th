<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/path-to-your/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/path-to-your/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <meta name="google-site-verification" content="HafGomjfniOgSEYOeM84-KOw1Yr2jsdrDWoVck09kdo" />


  <?php
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css', array(), '6.1.2');
  wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', array(), '1.0');
  wp_enqueue_script('jquery');
  wp_enqueue_script('food-science-main', get_template_directory_uri() . '/assets/js/main.js');
  wp_head();
  ?>
</head>
<header class="header" id="header">
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
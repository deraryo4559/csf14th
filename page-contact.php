<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" type="text/css" />
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

  <script>
    // 送信完了フラグ: form submit時にtrueになる
    let submitted = false;
    
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

    // フォーム送信時にsubmittedをtrueに設定
    $('form').on('submit', function() {
      submitted = true;
    });

    const onloadFrame = () => {
      // 送信完了の場合に指定ページに遷移させる
      if (submitted) {
        window.location = "<?php echo get_permalink(get_page_by_path('contact/thanks')); ?>";
      }
    };
  </script>
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
  <div class="section">
      <div class="section_inner">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>"<?php post_class('post'); ?>>
          <header class="section_header">
            <h1 class="heading heading-primary"><?php the_title(); ?></h1>
          </header>
          <div class="post_content">
            <div class="content">
              <?php the_post_thumbnail('medium'); ?>
              <?php the_content(); ?>
          </div>
        </article>
        <?php endwhile; ?>
      <?php endif; ?>
      <p style="text-align: center; margin: 40px auto">
        お気軽にお問い合わせください。
      </p>
      <form
        class="c-form"
        action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd2i8UguoxKP61etBpYxvJeltDUXjpC6fUFLBEvBudp_hD6uA/formResponse"
        method="POST"
        target="hidden-iframe"
        onsubmit="submitted = true;"
      >
        <div class="c-form__item">
          <label class="c-form__label" for="field-option">お問い合わせの種類<span class="c-form__required">必須</span></label>
          <div class="c-form__radio-group">
            <input class="c-form__radio-input" id="option1" name="entry.1376946857" type="radio" value="ご協賛に関するお問い合わせ" required="required">
            <label class="c-form__radio-label" for="option1">ご協賛に関するお問い合わせ</label>
            <input class="c-form__radio-input" id="option2" name="entry.1376946857" type="radio" value="その他のお問い合わせ" required="required">
            <label class="c-form__radio-label" for="option2">その他のお問い合わせ</label>
          </div>
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-theme">件名<span class="c-form__required">必須</span></label>
          <input class="c-form__input" name="entry.2039365324" id="field-theme" placeholder="件名" type="text" required="required">
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-message">お問い合わせ内容<span class="c-form__required">必須</span></label>
          <textarea class="c-form__input" name="entry.141200493" id="field-message" placeholder="お問い合わせ内容" required="required"></textarea>
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-name">氏名<span class="c-form__required">必須</span></label>
          <input class="c-form__input" name="entry.1239520887" id="field-name" placeholder="株式会社 山田" type="text" required="required">
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-mail">メールアドレス<span class="c-form__required">必須</span></label>
          <input class="c-form__input" name="entry.1097643981" id="field-mail" placeholder="sample@gmail.com" type="email" required="required">
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-adress">住所</label>
          <input class="c-form__input" name="entry.1988994468" id="field-adress" placeholder="株式会社 山田" type="text">
        </div>
        <div class="c-form__item">
          <label class="c-form__label" for="field-number">電話番号</label>
          <input class="c-form__input" name="entry.275651095" id="field-number" placeholder="電話番号" type="text">
        </div>
        <div class="c-form__item">
            <label class="c-form__label agree__label" for="field-agree">
            <a href="<?php echo get_permalink(get_page_by_path('privacypolicy')); ?>" target="_blank">当団体プライバシーポリシー</a>に同意頂ける場合は「同意する」にチェックを付け「入力内容の確認」ボタンをクリックしてください。
            <span class="c-form__required">必須</span>
            </label>
            <div class="c-form__radio-group">
            <input class="c-form__radio-input" id="agree" name="entry.1253721909" type="radio" value="同意する" required="required">
            <label class="c-form__radio-label" for="agree">同意する</label>
          </div>
        </div>
        <div class="c-form__submit">
          <button type="submit">送信する</button>
        </div>
      </form>
      <iframe
        name="hidden_iframe"
        id="hidden_iframe"
        style="display: none"
        onload="onloadFrame();"
      ></iframe>
      </div>
    </div>
  </main>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_footer(); ?>
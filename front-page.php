<?php get_header(); ?>
<body>
  <?php if(is_home()): ?>
  <section class="kv">
    <div class="kv_inner">
      <!-- 新しいdivを追加してa, b, cを縦に並べる -->
      <h1 class="kv_title"><span class="c">C</span><span class="s">S</span><span class="f">F</span></h1>
      <p class="kv_subtitle">廃校を通して<br>　　都市と地方の架け橋となる</p>
    </div>
    <div class="kv_frame">
      <div class="kv-frame-wrapper">
        <section class="kv_frame_sns">
          <?php
          $args = [
              'menu' => 'kv_frame_sns',
              'menu-class' => '',
              'container' => false,
          ];
          wp_nav_menu($args);
          ?>
        </section>
      </div>
    </div>
  </section>
  
  <?php endif; ?>


  <section class="section section-concept">
    <div class="section_inner">
      <div class="section_headerWrapper">
        <header class="concept_header">
          <h2 class="">1. 学生団体って？</h2>
        </header>
        <div class="concept_body">
          <p>
            <span class="concept_blue">学生団体</span>は大学などの学生コミュニティ内で<br>
            形成される組織で、さまざまな目的や<br>
            関心ごとに基づいて活動する集団です。<br>
            これらの団体は、学生が<span class="concept_blue">自己成長</span>や<span class="concept_blue">社会貢献</span>を促進し、<br>
            興味や才能を発揮する場を提供することを<br>目指しています。
        </p>
          <div class="section_btn">
            <a href="<?php echo get_permalink(26); ?>" class="sc_btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="concept_frame">
      <a href="<?php echo get_permalink(26); ?>#concept1" class="concept_frame_title">1. 学生団体って</a>
      <a href="<?php echo get_permalink(26); ?>#concept2" class="concept_frame_title">2. CSFとは</a>
      <a href="<?php echo get_permalink(26); ?>#concept3" class="concept_frame_title">3. 14期代表挨拶</a>
      <a href="<?php echo get_permalink(26); ?>#concept4" class="concept_frame_title">4. 校境なき文化祭</a>
    </div>
    <div class="concept-rect-right-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/hatena3.png');"></div>
  </section>

  <section class="section section-bureau" id="bureau">
    <div class="section_bureau-inner">
      <div class="bureau-content">
        <div class="bureau-single kouhou">
          <div class="bureau-header"><h2>広報局</h2></div>
          <div class="bureau-body"><p>自分のデザインで<br>廃校の魅力を伝える局</p></div>
          <div class="square-icon"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="bureau-single tihousousei">
          <div class="bureau-header"><h2>地方創生局</h2></div>
          <div class="bureau-body"><p>廃校という唯一性を<br>生かし理念を実践していく局</p></div>
          <div class="square-icon"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="bureau-single unei">
          <div class="bureau-header"><h2>運営局</h2></div>
          <div class="bureau-body"><p>理想のイベントを創る<br>ための中心となる局</p></div>
          <div class="square-icon"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="bureau-single syogai">
          <div class="bureau-header"><h2>渉外局</h2></div>
          <div class="bureau-body"><p>団体が活動するための<br>縁の下の力持ち局</p></div>
          <div class="square-icon"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
      </div>
      <div class="bureau-rect-left-top"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/grandpa.png');"></div>
      <div class="bureau-rect-left-bottom"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/instrument.png');"></div>
      <div class="bureau-rect-right-bottom"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/concept/ghost.png');"></div>
    </div>
  </section>
  
  <section class="section-news">
    <div class="section_news-inner">
    <div class="center-line"></div>
      <div class="news-header"><h1>NEWS</h1></div>
      <div class="news-content">
        <div class="topic-content news-box">
          <div class="topic-header"><h2>TOPIC</h2></div>
          <div class="ruled-lines">
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic1'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic2'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic3'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic4'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic5'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic6'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic7'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'topic8'); ?></div>
          </div>
            <?php
              $topic = get_term_by('slug', 'topic', 'category');
              $topic_link = get_term_link($topic, 'category');
            ?>
            <div class="news-btn-container"><a href="<?php echo esc_url($topic_link); ?>" class="news_btn">Read More</a></div>
        </div>
        <div class="event-content news-box">
          <div class="event-header"><h2>EVENT</h2></div>
          <div class="ruled-lines">
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event1'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event2'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event3'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event4'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event5'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event6'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event7'); ?></div>
            <div class="ruled-line"><?php get_template_part('template-parts/index', 'event8'); ?></div>
          </div>
          <?php
          $event = get_term_by('slug', 'event', 'category');
          $event_link = get_term_link($event, 'category');
          ?>
          <div class="news-btn-container"><a href="<?php echo esc_url($event_link); ?>" class="news_btn">Read More</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-funding">
    <div class="section_funding-innner">
      <div class="funding-header">クラウドファンディングを<br class="funding-indent">募集しています！！</div>
      <div class="funding-img"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/common/group2.jpg');"></div>
      <div class="funding-content">
        <div class="bar-header">
          <p>只今の寄付金</p>
          <p>目標金額</p>
        </div>
        <div class="funding-bar">
          <div style="width:38%"></div>
        </div>
        <div class="bar-footer">
          <p>￥116,000</p>
          <p>￥300,000</p>
        </div>
      </div>
      <a class="funding-link" href="https://for-good.net/project/1001016" target="_blank" rel="noopener noreferrer">クラウドファンディング詳細はこちら
      <i class="fa-solid fa-link"></i>
      </a>
    </div>
  </section>

<?php get_template_part('template-parts/breadcrumb'); ?>
<?php get_footer(); ?>
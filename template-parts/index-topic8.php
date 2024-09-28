<div class="article">
    <?php
    $args_topic = array(
        'post_type' => 'post',
        'category_name' => 'topic', // "topic"カテゴリーの投稿のみを取得
        'posts_per_page' => 1, // 1つの投稿のみを表示
        'offset' => 7 // 最新の投稿から(ここの数字分)スキップして、指定された番号の最新の投稿を取得
    );
    $query_topic = new WP_Query($args_topic);
    if($query_topic->have_posts()) :
        $query_topic->the_post(); // ループ開始の代わりに単一の投稿のデータをロード
        ?>
        <section class="section-article">
            <div class="section_inner">
                <header class="section_header">
                    <?php
                    $topic = get_term_by('slug', 'topic', 'category');
                    $topic_link = get_term_link($topic, 'category');
                    ?>
                </header>
                <div class="section_body">
                    <div class="cardList cardList-1row">
                        <div class="card">
                        <div class="card_body">
                                <?php if (has_tag('sousei')) : ?>
                                    <div class="card_tag_sousei">地方創生局</div>
                                <?php endif; ?>
                                <?php if (has_tag('kouhou')) : ?>
                                    <div class="card_tag_kouhou">広報局</div>
                                <?php endif; ?>
                                <?php if (has_tag('syogai')) : ?>
                                    <div class="card_tag_syogai">渉外局</div>
                                <?php endif; ?>
                                <?php if (has_tag('unei')) : ?>
                                    <div class="card_tag_unei">運営局</div>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="">
                                    <time datetime="<?php the_time('c'); ?>" class="">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</div>

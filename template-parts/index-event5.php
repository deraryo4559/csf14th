<div class="article">
    <?php
    $args_event = array(
        'post_type' => 'post',
        'category_name' => 'event',
        'posts_per_page' => 1,
        'offset' => 4
    );
    $query_event = new WP_Query($args_event);
    if ($query_event->have_posts()) :
        $query_event->the_post();
        ?>
        <section class="section-article">
            <div class="section_inner">
                <header class="section_header">
                    <!-- カテゴリーやタグに関連する情報を表示するコードがここに来る -->
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
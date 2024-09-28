<footer class="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/common/footer3.png');">
    <div class="footer_inner">
        <div class="footer_info">
            <div class="footer_logo">
                <div class="footer-logo-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/common/csf_logo2.png');"></div>
                <div class="footer-logo-name"><span class="logo-sup">学生団体</span>
                廃校文化祭実行委員会
                <span class="logo-sub">Closed School Festival</span></div>
            </div>
        </div>
    </div>
    <!-- アクセス部分の追加 -->
    <section class="section-access">
        <div class="access-body">
            <div class="addres-inner">
                <h2 class="section-access-header">ACCESS</h2>
                <div class="addres-core">
                    <div class="access-logo"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="access-addres">
                        〒171-0014<br>東京都豊島区池袋3丁目30-8
                    </div>
                </div>
            </div>
        </div>
        <div class="access-map">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.469103783442!2d139.704458!3d35.73563!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a772681ea9%3A0xfd7d62a3e02d3a!2z44G_44KJ44GE6aSo5aSn5piO!5e0!3m2!1sja!2sjp!4v1710431930938!5m2!1sja!2sjp" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</footer>
<div class="pageTop js-toTop">
    <a href="#"><i class="fas fa-arrow-up"></i><span>TOP PAGE</span></a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php
wp_enqueue_style( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
wp_enqueue_script( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
wp_enqueue_script( 'food-science-home', get_template_directory_uri() . '/assets/js/home.js');
wp_enqueue_script( 'scroll-header.js', get_template_directory_uri() . '/assets/js/scroll_header.js');
?>
<?php wp_footer(); ?>
</body <?php body_class(); ?>>
<?php wp_body_open (); ?>
</html>

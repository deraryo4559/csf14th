<?php
/**
 * <title>タグを出力する
 */

add_theme_support('title-tag');

/**
 * <title>の区切り文字を変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separartor)
{
    $separartor = '|';
    return $separartor;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * 年表示
 */
function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * Contact Formの整形機能をOffに
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}
?>


<?php

/**
 * サムネイル画像を使用する
 */
add_theme_support('post-thumbnails');

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/**
 * フィルターフックを使う関数 add_filter
 */

add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = "|";
    return $separator;
}

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/*
*body_classからarchiveクラスを削除
*/
add_filter('body_class', 'remove_body_class');
function remove_body_class($wp_classes)
{
    foreach ($wp_classes as $key => $value) {
        if ($value == 'archive') unset($wp_classes[$key]); // archiveクラス
    }
    return $wp_classes;
}

/**
 * コメントフォームの各項目を削除
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields($args)
{
    $args['author'] = '';
    $args['email'] = '';
    $args['url'] = '';
    return $args;
}

/**
 * カスタムメニューaタグにクラス名を追加する
 */

function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');

/*
js.css読み込み
*/
function add_files()
{
    // wp_enqueue_style('reset.css', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('bootstrap.css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null, false);
    if (is_front_page()) {
        wp_enqueue_style('swiper.bundle.css', 'https://unpkg.com/swiper/swiper-bundle.css', array(), null, false);
        wp_enqueue_style('swiper.min.css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null, false);
        wp_enqueue_style('aos.css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, false);
        wp_enqueue_style('swiper.css', get_template_directory_uri() . '/css/swiper.css', array(), null, false);
    }

    wp_enqueue_style('googlefonts1', 'https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200&display=swap', array(), null, false);
    wp_enqueue_style('styles.css', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('responsive.css', get_template_directory_uri() . '/css/responsive.css');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
    wp_enqueue_script('swiper.bundle.js', 'https://unpkg.com/swiper/swiper-bundle.js', array(), null, true);
    wp_enqueue_script('swiper.bundle.min.js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('AOS.js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    wp_enqueue_script('swiper.js', get_template_directory_uri() . '/js/swiper.js', array(), null, true);
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_files');

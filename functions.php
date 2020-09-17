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

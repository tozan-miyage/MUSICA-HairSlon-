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

<?php

$depth = 0;
$main_menu = get_nav_menu_items_by_location('main-menu', array());
foreach ($main_menu as $key => $menu) :
    $url = str_replace($this_url, "", $menu->url);
    if ($menu->ID == $main_menu[$key + 1]->menu_item_parent && $depth == 0) :
        $depth++;
?>

        <li class="dropdown">
            <a href="#">
                <?= $menu->title; ?><i class="ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
            <?php
        else :
            ?>
                <li><a href="<?= $url; ?>" class="btn-scroll"><?= $menu->title; ?></a></li>
            <?php
        endif;
        if ($main_menu[$key + 1]->menu_item_parent == 0 && $depth > 0) :
            $depth--;
            ?>
            </ul>
        </li>
<?php
        endif;
    endforeach;
?>
</ul>

<?php
// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
        wp_enqueue_script('popper_js', get_stylesheet_directory_uri() . '/js/popper.js');
        wp_enqueue_script('bootstrap4_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
        wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js');
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js');
    }
}
add_action('wp_enqueue_scripts', 'remove_default_jquery');

?>
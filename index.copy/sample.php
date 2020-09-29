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
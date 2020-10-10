<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="#">SAMPLE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    $args = array(
        'menu' => 'main_menu', //カスタムメニューで設定した名前
        'menu_class' => 'navbar-nav justify-content-around', //クラス名を追加
        'container' => 'div', //ul要素を何で囲むか指定
        'container_class' => 'collapse navbar-collapse justify-content-around', //囲んだ要素のクラス名を指定
        'container_id' => 'navbarNav' //囲んだ要素のIDを指定
    );
    wp_nav_menu($args);
    ?>
</nav>
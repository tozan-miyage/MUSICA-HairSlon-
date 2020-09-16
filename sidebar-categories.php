<aside class="archive">
    <h3 class="archive_title">Categories</h2>
        <ul class="archive_list">
            <?php
            $args = array(
                'title_li' => '',
            );
            wp_list_categories($args);
            ?>
            <!-- <li><a href="#">お知らせ</a></li>
        <li><a href="#">コラム</a></li> -->
        </ul>
</aside>
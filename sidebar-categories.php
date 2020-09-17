<aside class="archive">
    <h3 class="archive_title">Categories</h2>
        <ul class="archive_list">
            <?php
            $args = array(
                'title_li' => '',
            );
            wp_list_categories($args);
            ?>

        </ul>
</aside>
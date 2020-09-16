<aside class="archive">
    <h3 class="archive_title">Archives</h2>
        <ul class="archive_list">
            <?php
            $args = array(
                'type' => 'monthly',
            );
            wp_get_archives($args);
            ?>
        </ul>
</aside>
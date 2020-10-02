<footer class="footer">
    <div class="container-fluid p-0">
        <section id="CONTACT">
            <div class="row">
                <div class="col">
                    <?php if (is_home()) : ?> <h2>CONTACT</h2>
                    <?php endif; ?>
                    <?php get_template_part('template_parts/contact'); ?>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="row">
                <div class="col">
                    <p>copyright 2020 MUSICA</p>
                </div>
            </div>
        </section>
</footer>

<!-- function.phpで<script>を読み込み -->
<?php
wp_footer();
?>
</body>

</html>
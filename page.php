<?php
if (is_page('contact')) {
    remove_filter('the_content', 'wpautop');
}

?>
<?php get_header(); ?>
<section id="index_header">
    <div class="container-fluid p-0">
        <div class="row index_header ">
            <div class="col">
                <h2 class="index_title"><?php wp_title(); ?></h2>
                <p class="m-0"><?php get_template_part('template_parts/breadcrumb'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="index_content">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <main class="main">
                            <div class="container">
                                <div class="content page_php_content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </main>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
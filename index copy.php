<?php get_header(); ?>

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="index_header">
                    <?php if (is_month()) : ?>
                        <h2 class="main_title"><?php the_time('Y年m月'); ?></h2>
                    <?php else : ?>
                        <h2 class="main_title"><?php wp_title(''); ?></h2>
                    <?php endif; ?>
                    <p class="m-0"><a href="<?php echo home_url(); ?>" class="home_link">&lt; Home</a> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part('template-parts/loop', 'news'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <div class="col-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives') ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
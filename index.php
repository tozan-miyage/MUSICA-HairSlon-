<?php get_header(); ?>
<section id="index_header">
    <div class="container-fluid p-0">
        <div class="row index_header ">
            <div class="col">
                <?php if (is_month()) : ?>
                    <h1 class="index_title"><?php the_time('Y年m月'); ?></h2>
                    <?php else : ?>
                        <h2 class="index_title"><?php $title = wp_title(''); ?></h2>
                        <p class="index_title">-What&#39;s new-</p>
                    <?php endif; ?>
                    <p class="m-0"><a href="<?php echo home_url(); ?>" class="home_link">&lt; Home</a></p>
            </div>
        </div>
    </div>
</section>
<section id="index_content">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                            <div class="blog_card">
                                <div class="blog_img">
                                    <?php the_post_thumbnail(array(600, 400)) ?>
                                </div>
                                <div class="blog_content">
                                    <h2 class="article_title"><?php the_title(); ?></h2>
                                    <div class="d-flex">
                                        <p class="mr-2"> <?php the_modified_date(); ?> </p>
                                        <span class="mr-1">|</span>
                                        <p class="mr-2"> <?php the_category(); ?> </p>
                                    </div>
                                    <hr>
                                    <p class=""><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>">
                                        <div id="a_tag" class="read_more">
                                            <p class="read_more_p">READ MORE</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="col-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php get_header(); ?>
<section id="index_header">
    <div class="container-fluid p-0">
        <div class="row index_header ">
            <div class="col">
                <?php if (is_month()) : ?>
                    <h1 class="index_title"><?php the_time('Y年m月'); ?></h2>
                    <?php else : ?>
                        <h2 class="index_title"><?php $title = wp_title(''); ?></h2>

                    <?php endif; ?>
                    <p class="m-0"><?php get_template_part('template_parts/breadcrumb'); ?></p>
            </div>
        </div>
    </div>
</section>
<section id="index_content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                            <div class="blog_card">
                                <div class="blog_img">
                                    <?php the_post_thumbnail(array(600, 400)) ?>
                                </div>
                                <div class="blog_content">
                                    <h2 class="article_title"><?php the_title(); ?></h2>
                                    <hr>
                                    <p class=""><?php the_excerpt(); ?></p>
                                    <div id="post-<?php the_ID(); ?>" <?php post_class('services_menu_table'); ?>>
                                        <table>
                                            <tr>
                                                <th>menu</th>
                                                <th>price</th>
                                            </tr>
                                            <?php $fields = get_fields(); ?>
                                            <?php if ($fields) : ?>
                                                <?php foreach ($fields as $name => $value) : ?>
                                                    <?php if ($value !== "") : ?>
                                                        <tr>
                                                            <td><?php echo $name; ?></td>
                                                            <td><?php echo $value; ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
            </div>
            <!-- <div class="col-3"> -->
            <?php  //get_sidebar('categories'); 
            ?>
            <?php //get_sidebar('archives'); 
            ?>
            <!-- </div> -->
        </div>
    </div>
</section>
<?php get_footer(); ?>
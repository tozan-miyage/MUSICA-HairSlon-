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

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-5 p-0">
                <table class="services_menu_table">
                    <tr>
                        <th>menu</th>
                        <th>price</th>
                    </tr>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </table>
            </div>
            <div class="col-7 p-0 caption ">
                <h2 class="pl-5"><?php wp_title(); ?></h2>
                <div class="caption_photo">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
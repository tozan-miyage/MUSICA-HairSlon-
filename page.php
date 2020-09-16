<?php get_header(); ?>

<section id="index_header">
    <div class="container-fluid">
        <div class="row index_header">
            <div class="col">
                <h1 class="index_title"><?php wp_title(); ?></h1>
                <p class="m-0"><a href="<?php echo home_url(); ?>" class="home_link">&lt; Home</a> </p>
            </div>
        </div>
    </div>
</section>
<section id="index_content">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <article class="article">
                    <div class="blog_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg" alt="">
                    </div>
                    <div class="blog_content">
                        <h2 class="article_title">CREATIVE HAIR CUTTING SALOON</h2>
                        <p>July 31, 2014 | Author: Harry Panchal | No Comments</p>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>

                        <div id="a_tag" class="read_more">
                            <p><label for="a_tag"><a href="#">READ MORE</a></label></p>
                        </div>

                    </div>
                </article>
            </div>
            <div class="col-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
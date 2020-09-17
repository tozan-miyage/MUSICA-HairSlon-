<?php get_header(); ?>
<section id="index_header">
    <div class="container-fluid p-0">
        <div class="row index_header ">
            <div class="col">
                <h2 class="index_title">Not find the page</h2>
                <p class="m-0"><?php get_template_part('template_parts/breadcrumb'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="index_content">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="main">
                    <div class="error404">
                        <p>お探しのページが見つかりませんでした。</p>
                        <p>申し訳ございませんが、<a class="back_home" href="<?= home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
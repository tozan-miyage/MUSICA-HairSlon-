<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HairSalonSample</title>

    <!-- function.phpでlinkを読み込み -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ヘッダー -->
    <header id="header">
        <section id="navigation">
            <?php get_template_part('template_parts/navbar'); ?>
        </section>
    </header>
    <!-- ヘッダーend -->
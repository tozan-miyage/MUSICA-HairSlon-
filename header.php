<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?//php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- fontawasome -->
    <?/*php
    wp_enqueue_style('font-awasome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    */?>
    <!-- Swiper-->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?//php echo get_template_directory_uri(); ?>/css/swiper.css"> -->
    <!-- GoogleFonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200&display=swap" rel="stylesheet"> -->
    <!-- AOS Animate On Scroll Library-->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?//php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?//php echo get_template_directory_uri(); ?>/css/responsive.css"> -->
    <!-- <title>MUSICA</title> -->
    <?php
    wp_head(); ?>

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
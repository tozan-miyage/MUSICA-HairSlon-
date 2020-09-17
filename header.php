<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- fontawasome -->
    <?php
    wp_enqueue_style('font-awasome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    ?>
    <!-- Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200&display=swap" rel="stylesheet">
    <!-- AOS Animate On Scroll Library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

    <!-- <title>MUSICA</title> -->
    <?php
    wp_enqueue_script('jquery');
    wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ヘッダー -->
    <header>
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navigation_bar">
                            <p id="MUSICA">MUSICA</p>
                            <ul class="links">
                                <li class="link_to_section"><a>THE SALON</a></li>
                                <li class="link_to_section"><a>MEET OUR TEAM</a></li>
                                <li class="link_to_section"><a href="#OUR_SERVICES">OUR SERVICES</a></li>
                                <li class="link_to_section"><a>PORTFOLIO<a></li>
                                <li class="link_to_section"><a>PROMOTIONS</a></li>
                                <li class="link_to_section"><a>VIDEO</a></li>
                                <li class="link_to_section"><a href="<?php echo get_permalink(48); ?>">BLOG</a></li>
                                <li class="link_to_section"><a>CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- ヘッダーend -->
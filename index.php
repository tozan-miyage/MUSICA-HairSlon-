<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
    <!-- GoogleFonts -->
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200&display=swap" rel="stylesheet">
    <!-- AOS Animate On Scroll Library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <title>MUSICA</title>
</head>

<body>
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
                                <li class="link_to_section"><a>BLOG</a></li>
                                <li class="link_to_section"><a>CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- ヘッダーend -->
    <!-- メイン -->
    <main>
        <!-- top_image -->
        <section id="top_image">
            <div class="container-fluid">
                <div class="row">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/stock-photo-ombre-bob-short-hairstyle-beautiful-hair-coloring-woman-trendy-haircuts-blond-model-with-short-794117503.jpg" alt=""></div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/stock-photo-portrait-of-beautiful-senior-woman-in-front-of-white-background-1036351342.jpg" alt="">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top_image end -->
        <!-- the_salon -->
        <section id="the_salon">
            <div class="container">
                <div class="row">
                    <div class="col d-flex">
                        <div class="salon_name_box">
                            <h1 class="big_name">THE<br>MUSICA<br>SALON</h1>
                        </div>
                        <div class="concept_of_salon">
                            <p class="sentence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                                luctus est eget congue. Nam auctor nisi est, nec
                                tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa
                                consequat sem, ut laoreet nisi erat et
                                lectus.Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non
                                congue aliquam, mauris massa
                                consequat sem, ut laoreet nisi erat et lectus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- the_salon end -->
        <!-- salon_image -->
        <section id="salon_image">
            <div class="container">
                <div class="row pt-50">
                    <div class="col salon_photo_left" data-aos="fade-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg" alt="">
                    </div>
                    <div class="col salon_photo_right">
                        <div class="" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/stock-photo-situation-in-a-hair-salon-88781662.jpg" alt="">
                        </div>
                        <div class="" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/stock-photo-woman-standing-with-hands-folded-in-her-salon-professional-hairdresser-with-all-the-hairdressing-716104408.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- salon_image end -->
        <!-- meet_our_team -->
        <section id="meet_our_team">
            <div class="container">
                <div class="row">
                    <div class="col-4 p-0 pr-5 caption">
                        <h2>MEET OUR<br>EXPERT STYULIStS</h2>
                        <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                            luctus est eget congue. Nam auctor nisi est, nec
                            tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa
                            consequat sem, ut laoreet nisi erat et
                            lectus.Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non
                            congue aliquam, mauris massa
                            consequat sem, ut laoreet nisi erat et lectus.</p>
                    </div>
                    <div class="col-8 p-0">
                        <div class="swiper-container2">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper d-flex ml-2 justify-content-between ">
                                <!-- Slides -->
                                <div class="swiper-slide flex-column">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/stylist1.jpg" alt="">
                                    </div>
                                    <h3>SARA ANDERSON</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                                        luctus est eget congue. Nam auctor nisi est, nec
                                        tempus lacus viverra nec.</p>
                                </div>
                                <div class="swiper-slide flex-column">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/stylist2.jpg" alt="">
                                    </div>
                                    <h3>SARA ANDERSON</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                                        luctus est eget congue. Nam auctor nisi est, nec
                                        tempus lacus viverra nec. </p>
                                </div>
                                <div class="swiper-slide flex-column">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/stylist3.jpg" alt="">
                                    </div>
                                    <h3>SARA ANDERSON</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                                        luctus est eget congue. Nam auctor nisi est, nec
                                        tempus lacus viverra nec. </p>
                                </div>
                                <!-- <div class="swiper-slide"><img
                                        src=""
                                        alt=""></div>
                                <div class="swiper-slide">
                                    <img src=""
                                        alt="">
                                </div> -->
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div> -->

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- meet_our_team end -->
        <!-- OUR_SERVICES -->
        <section id="OUR_SERVICES">
            <div class="container">
                <div class="row">
                    <div class="col our_services">
                        <h2>OUR SERVICES</h2>
                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                            luctus est eget congue. Nam auctor nisi est, nec
                            tempus lacus viverra nec. </P>
                    </div>
                </div>
            </div>
        </section>
        <!-- OUR_SERVICES end -->

        <section id="cutting">
            <div class="container">
                <div class="row">
                    <div class="col-7 p-0 caption">
                        <h2>CUTTING</h2>
                        <div class="caption_photo" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cutting.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-5 p-0">
                        <table class="services_menu_table">
                            <tr>
                                <th>CUT</th>
                                <th>WOMEN</th>
                                <th>MEN</th>
                            </tr>
                            <tr>
                                <td>Stylist</td>
                                <td>$80</td>
                                <td>$70</td>
                            </tr>
                            <tr>
                                <td>Senior Stylist</td>
                                <td>$90</td>
                                <td>$80</td>
                            </tr>
                            <tr>
                                <td>Master Stylist</td>
                                <td>$110</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>Celebrity Stylist</td>
                                <td>$POA</td>
                                <td>$POA</td>
                            </tr>
                            <tr>
                                <td>Style Menu</td>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td>Style Menu</td>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td>Style Menu</td>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td>Style Menu</td>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td>Style Menu</td>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </section>

        <section id="section_name">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- メインend -->
    <footer>
        <section id="section_name">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>

    <!-- AOS Animate On Scroll Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
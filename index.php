<?php get_header(); ?>

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
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_model1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_model2.jpg" alt=""></div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_model3.jpg" alt="">
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
                        <h1 class="big_name"><a href="<?php echo home_url(); ?>">HAIR<br>SALON<br>MUSICA</a></h1>
                    </div>
                    <div class="concept_of_salon">
                        <p class="sentence"><?php bloginfo('description'); ?><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_dresser1risize.jpg" alt="">
                    </div>
                    <div class="" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Hiar_salon3.jpg" alt="">
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
                    <div class="caption_photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_cut1.jpg" alt="">
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
    <section id="color">
        <div class="container">
            <div class="row">
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
                <div class="col-7 p-0 caption ">
                    <h2 class="pl-5">COLOR</h2>
                    <div class="caption_photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_color1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="STYLE">
        <div class="container">
            <div class="row">
                <div class="col-7 p-0 caption">
                    <h2>STYLE</h2>
                    <div class="caption_photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hair_salon2resize.jpg" alt="">
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
    <!-- OUR_SERVICES end -->
    <!-- APPOINTMENT -->
    <section id="appointment">
        <div class="form_area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="caption_appointment">
                            <h2>MAKE AN APPOINTMENT</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec.</p>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-8 appointment_left">
                            <div class="input_caption">
                                <p>Name</p>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="input_caption">
                                <p>Email</p>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="input_caption">
                                <p>Phone number</p>
                                <input type="tel" id="tel" name="tel">
                            </div>
                            <div class="input_caption">
                                <p>Date</p>
                                <input type="date" id="date" name="date">
                            </div class="input_caption">
                            <div class="input_caption">
                                <p>Time</p>
                                <input type="time" id="time" name="time">
                            </div>
                        </div>
                        <div class="col-4 appointment_right">
                            <div class="input_caption">
                                <p>Description</p>
                                <textarea id="description" name="description"></textarea>
                            </div>
                            <div>
                                <input type="submit" value="submit" class="form_submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- APPOINTMENT end -->
    <!-- EXPRESSION OF EXCELLENCE -->
    <section id="expression_of_excellence">
        <div class="container-field">
            <div class="row">
                <div class="col p-0 expression_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hair_style2copy.jpg" alt="">
                    <div class="expression_caption">
                        <h2>EXPRESSION OF<br>EXCELLENCE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros. Integer scelerisque lorem id massa accumsan, ut faucibus ante suscipit. Nunc tincidunt et ligula vitae pharetra.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EXPRESSION OF EXCELLENCE end -->
    <!-- PROMOTIONS AND SPECIALS -->
    <section id="promotions_and_specials">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="promotions_slide">
                        <h2 class="promotions_h2">PROMOTIONS AND SPECIALS</h2>
                        <!-- Slider main container -->
                        <div class="swiper-container3">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="promotions_caption">
                                        <h3>HAPPY HAIR</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, </p>
                                        <!-- If we need navigation buttons -->
                                        <div class="swiper_button_area">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                    <div class="promotions_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/hair_styling2.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="promotions_caption">
                                        <h3>HAPPY COLOR</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, </p>
                                        <!-- If we need navigation buttons -->
                                        <div class="swiper_button_area">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                    <div class="promotions_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/hair_styling1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- PROMOTIONS AND SPECIALS end-->
    <!-- video -->
    <section id="VIDEO">
        <div class="container">
            <div class="row">
                <div class="col-8 video_iframe">
                    <iframe width="100%" height="410px" src="https://www.youtube.com/embed/vZHf3ZVJhUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-4">
                    <div class="video_caption">
                        <h2>SHOWREEL</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros. Integer scelerisque lorem id massa accumsan, ut faucibus ante suscipit. Nunc tincidunt et ligula vitae pharetra.</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- video end -->
    <!-- testmonials -->
    <section id="testmonials">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="testmonials_h2">TESTIMONIALS</h2>

                    <div class="swiper-container3">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="swiper_container4_slide">
                                    <div class="customer_voice">
                                        <h3>customer_name</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="swiper_container4_slide">
                                    <div class="customer_voice">
                                        <h3>customer_name2</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper_container4_slide">
                                    <div class="customer_voice">
                                        <h3>customer_name3</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem,</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testmonials end -->
    <!-- CONTACT -->
    <section id="CONTACT">
        <div class="container-fluid">
            <h2>CONTACT</h2>
            <div class="row">
                <div class="col-7 d-flex">
                    <div class="google_map">
                    </div>
                    <div class="contact_address">
                        <p>okinawa</p>
                        <p>itoman-nishizaki</p>
                        <p>Phone 090-9876-5432</p>
                        <p>Email sample@gmail.co.jp</p>
                    </div>
                </div>
                <div class="col-5">
                    <form action="" method="post">
                        <div class="container">
                            <div class="contact_form">
                                <div class="row">
                                    <!-- <div class="col-12 contact_top m-0 p-0 d-flex"> -->
                                    <div class="contact_caption col-6">
                                        <input type="text" class="" id="contact_name" name="name" placeholder="Name">
                                    </div>
                                    <div class="contact_caption col-6">
                                        <input type="email" id="contact_email" name="email" placeholder="Email">
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="row">
                                    <!-- <div class="col-12 contact_top m-0 p-0"> -->
                                    <div class="contact_caption col-6">
                                        <input type="tel" id="contact_tel" name="tel" placeholder="Tel">
                                    </div>
                                    <div class="contact_caption col-6">
                                        <input type="text" id="contact_campany_name" name="campany_name" placeholder="Campany name">
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="row">
                                    <!-- <div class="col-12 contact_down m-0 p-0"> -->
                                    <div class="contact_caption_description col-12">
                                        <textarea id="contact_description" name="description" placeholder="description"></textarea>
                                    </div>
                                    <div class="contact_caption_description col-12">
                                        <input class="contact_submit" type="submit" value="submit" class="form_submit">
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT end -->
</main>
<!-- メインend -->

<?php get_footer(); ?>
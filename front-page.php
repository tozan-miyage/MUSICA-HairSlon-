<?php get_header(); ?>

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
            <div class="row">
                <div class="salon_image_photo d-flex">
                    <div class="col-6 salon_photo_left" data-aos="fade-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg" alt="">
                    </div>
                    <div class="col-6 salon_photo_right">
                        <div class="right_photos" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_dresser1risize.jpg" alt="">
                        </div>
                        <div class="right_photos" data-aos="fade-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Hiar_salon3.jpg" alt="">
                        </div>
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
                    <h2>MEET OUR<br>EXPERT STYLISTS</h2>
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
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'staff',
                                'posts_per_page' => 3,
                            );
                            $staff_query = new WP_Query($args);
                            ?>
                            <?php if ($staff_query->have_posts()) : ?>
                                <?php while ($staff_query->have_posts()) : ?>
                                    <?php $staff_query->the_post(); ?>
                                    <div class="swiper-slide flex-column staff_info">
                                        <div>
                                            <?php the_post_thumbnail(array(194, 235)) ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p class=""><?php the_content(); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

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
            <?php
            $args = array(
                'post_type' => 'post',
                'post_per_page' => 3,
                'category_name' => 'service'
            );
            $service_query = new WP_Query($args);
            ?>
            <?php if ($service_query->have_posts()) : ?>
                <?php while ($service_query->have_posts()) : ?>
                    <?php $service_query->the_post(); ?>
                    <div class="row">
                        <div class="col-7 p-0 caption">
                            <h2><?php the_title(); ?></h2>
                            <div class="caption_photo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="col-5 p-0">
                            <div id="post-<?php the_ID(); ?>" <?php post_class('services_menu_table'); ?>>
                                <?php the_content(); ?>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
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
                    <div class="col p-0">
                        <div class="caption_appointment">
                            <h2>MAKE AN APPOINTMENT</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec.</p>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row appointment_area">
                        <div class="col appointment_left">
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
                            <div class="input_caption">
                                <p>Description</p>
                                <textarea id="description" name="description"></textarea>

                            </div>
                            <div class="input_caption">
                                <!-- <p>submit</p> -->
                                <input type="submit" value="submit" class="form_submit">
                            </div>
                        </div>
                        <!-- <div class="col-4 appointment_right"> -->
                        <!-- <div class="input_caption">
                                <p>Description</p>
                                <textarea id="description" name="description"></textarea>
                                <input type="submit" value="submit" class="form_submit">
                            </div> -->
                        <!-- </div> -->
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
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_per_page' => '3',
                                    'category_name' => 'promotion',
                                );
                                $promotion_query = new WP_Query($args);
                                ?>
                                <?php if ($promotion_query->have_posts()) : ?>
                                    <?php while ($promotion_query->have_posts()) : ?>
                                        <?php $promotion_query->the_post(); ?>
                                        <div class="swiper-slide">
                                            <div class="promotions_caption">
                                                <h3>
                                                    <?php the_title(); ?>
                                                </h3>
                                                <?php the_content(); ?>
                                                <!-- If we need navigation buttons -->
                                                <div class="swiper_button_area">
                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-button-next"></div>
                                                </div>
                                            </div>
                                            <div class="promotions_img">
                                                <?php the_post_thumbnail(array(500, 300)); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                                <!-- Slides -->

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
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'category_name' => 'testimonials',
                            );
                            $testimonials_query = new WP_Query($args);
                            ?>
                            <?php if ($testimonials_query->have_posts()) : ?>
                                <?php while ($testimonials_query->have_posts()) : ?>
                                    <?php $testimonials_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <div class="swiper_container4_slide">
                                            <div class="customer_voice">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

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



    <!-- CONTACT end -->
</main>
<!-- メインend -->

<?php get_footer(); ?>
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
                <div class="col-12 col-md-4 salon_name_box">
                    <h1 class="big_name"><a href="<?php echo home_url(); ?>">HAIR SALON MUSICA</a></h1>
                </div>
                <div class="col-12 col-md-8 concept_of_salon">
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
            <div class="row salon_image_photo">
                <div class="col-12 col-lg-6 salon_photo_left" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/guilherme-petri-PtOfbGkU3uI-unsplash.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6 row-cols-sm-1 salon_photo_right">
                    <div class="right_photos" data-aos="fade-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_hair_dresser1risize.jpg" alt="">
                    </div>
                    <div class="right_photos" data-aos="fade-left">
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
                <div class="col-12 col-lg-4 meet_our_team_caption">
                    <h2>MEET OUR<br>EXPERT STYLISTS</h2>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                        luctus est eget congue. Nam auctor nisi est, nec
                        tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa
                        consequat sem, ut laoreet nisi erat et
                        lectus.Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non
                        congue aliquam, mauris massa
                        consequat sem, ut laoreet nisi erat et lectus.</p>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="swiper-container2 container p-0">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper m-0 row">
                            <!-- Slides -->
                            <?php
                            $args = array(
                                'post_type' => 'staff',
                                // 'category_name' => 'staff',
                                'posts_per_page' => 3,
                            );
                            $staff_query = new WP_Query($args);
                            ?>
                            <?php if ($staff_query->have_posts()) : ?>
                                <?php while ($staff_query->have_posts()) : ?>
                                    <?php $staff_query->the_post(); ?>
                                    <div class="swiper-slide flex-column staff_info col-12 col-sm-4">
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
                <div class="col our_services_caption">
                    <h2>OUR SERVICES</h2>
                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar
                        luctus est eget congue. Nam auctor nisi est, nec
                        tempus lacus viverra nec. </P>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR_SERVICES end -->

    <section id="servises">
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'service',
                'post_per_page' => 3,
            );
            $service_query = new WP_Query($args);
            $post_index = 0;
            ?>
            <?php if ($service_query->have_posts()) : ?>
                <?php while ($service_query->have_posts()) : ?>
                    <?php $service_query->the_post(); ?>
                    <div class="row service_row">
                        <div class="col-12 col-md-7 p-0 service_caption">
                            <h2 class="ml-5"><?php the_title(); ?></h2>
                            <div class="caption_photo">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 p-0">
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
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </section>

    <!-- OUR_SERVICES end -->
    <!-- APPOINTMENT -->
    <section id="appointment">
        <div class="form_area">
            <div class="container">
                <div class="row">
                    <div class="col caption_appointment">
                        <h2 class="ml-3">MAKE AN APPOINTMENT</h2>
                        <p class="ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec.</p>
                    </div>
                </div>

                <a href="<?php echo get_page_link(143); ?>" class="">
                    <div class="appointment_btn mt-3">
                        <p class="">ご予約はコチラから</p>
                    </div>
                </a>

            </div>
    </section>
    <!-- APPOINTMENT end -->
    <!-- EXPRESSION OF EXCELLENCE -->
    <section id="expression_of_excellence">
        <div class="container-field">
            <div class="row expression">
                <div class="col-12 expression_caption">
                    <h2>EXPRESSION OF<br>EXCELLENCE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, </p>
                </div>
                <div class="col-12 expression_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hair_style2copy.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- EXPRESSION OF EXCELLENCE end -->
    <!-- PROMOTIONS AND SPECIALS -->
    <section id="promotions">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="promotions_slide">
                        <h2 class="promotions_h2">PROMOTIONS AND SPECIALS</h2>
                        <!-- Slider main container -->
                        <div class="swiper-container3">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper container">
                                <!-- Slides -->
                                <?php
                                $args = array(
                                    'post_type' => 'promotion',
                                    'post_per_page' => '3',
                                );
                                $promotion_query = new WP_Query($args);
                                ?>
                                <?php if ($promotion_query->have_posts()) : ?>
                                    <?php while ($promotion_query->have_posts()) : ?>
                                        <?php $promotion_query->the_post(); ?>
                                        <div class="swiper-slide row">
                                            <div class="promotions_caption col-12 col-md-5">
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
                                            <div class="promotions_img col-12 col-md-7 p-0">
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
    </section>
    <!-- PROMOTIONS AND SPECIALS end-->
    <!-- video -->
    <section id="VIDEO">
        <div class="container">
            <div class="row video_row">
                <div class="col-12 col-md-8 video_iframe">
                    <iframe width="100%" height="410px" src="https://www.youtube.com/embed/vZHf3ZVJhUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-4 video_caption">
                    <!-- <div class="video_caption"> -->
                    <h2>SHOWREEL</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec. Nullam cursus, neque non congue aliquam, mauris massa consequat sem, ut laoreet nisi erat et lectus. Nullam non neque eros. Pellentesque nec vulputate eros. Integer scelerisque lorem id massa accumsan, ut faucibus ante suscipit. Nunc tincidunt et ligula vitae pharetra.</p>
                    <!-- </div> -->
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
                                'post_type' => 'testmonial',
                                'posts_per_page' => 5,
                            );
                            $testimonials_query = new WP_Query($args);
                            ?>
                            <?php if ($testimonials_query->have_posts()) : ?>
                                <?php while ($testimonials_query->have_posts()) : ?>
                                    <?php $testimonials_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <div class="customer_voice">
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_content(); ?>
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
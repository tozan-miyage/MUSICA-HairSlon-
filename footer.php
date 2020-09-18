<footer>
    <section id="CONTACT">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php if (is_home()) : ?> <h2>CONTACT</h2>
                    <?php endif; ?>
                    <?php get_template_part('template_parts/contact'); ?>
                </div>
            </div>
    </section>
    <section id="footer">
        <div class="row">
            <div class="col footer">
                <p>copyright 2020 MUSICA</p>
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

<?php
wp_footer();
?>
</body>

</html>
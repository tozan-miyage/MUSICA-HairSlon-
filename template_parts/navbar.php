<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="#">MUSICA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav justify-content-around">
            <li class="link_to_section nav-item active">
                <a class="nav-link" href="#the_salon">THE SALON<span class="sr-only">(current)</span></a>
            </li>
            <li class="link_to_section nav-item">
                <a class="nav-link" href="#meet_our_team">MEET OUR TEAM</a>
            </li>
            <li class="link_to_section nav-item">
                <a class="nav-link" href="#OUR_SERVICES">OUR SERVICES</a>
            </li>
            <li class="link_to_section nav-item">
                <a class="nav-link" href="#promotions">PROMOTIONS</a>
            </li>
            <li class="link_to_section nav-item"><a class="nav-link" href="#VIDEO">VIDEO</a></li>
            <?php
            $category_id = get_cat_ID('blog');
            $category_link = get_category_link($category_id);
            ?>
            <li class="link_to_section nav-item"><a class="nav-link" href="<?php echo esc_url($category_link); ?>">BLOG</a></li>
            <li class="link_to_section nav-item"><a class="nav-link" href="<?php echo get_permalink(58); ?>">CONTACT</a></li>
            <li class="link_to_section nav-item"><a class="nav-link" href="#">PORTFOLIO</a></li>
        </ul>
    </div>
</nav>
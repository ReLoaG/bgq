<header class="header">
    <div class="inner-content">
        <div class="logo">
            <a href="<?php echo get_permalink(2) ?>">
                <img src="  <?php
                    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
                    echo $image[0];
                ?>" alt="site logo">
            </a>
        </div>
        <div class="top-menu">
            <input id="toggle" type="checkbox">

            <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->

            <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
            <label class="toggle-container" for="toggle">
                <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
                <span class="button button-toggle"></span>
            </label>
            <nav class="nav">
                <?php
                $menuParameters = array(
                    'theme_location'    => 'primary_navigation',
                    'container'         => false,
                    'echo'              => false,
                    'items_wrap'        => '%3$s',
                    'depth'             => 0,
                );

                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
            </nav>
        </div>
        <div class="lang">
            <ul>
                <?php pll_the_languages();?>
            </ul>
        </div>
    </div>
</header>
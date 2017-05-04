<header class="header">
    <div class="inner-content">
        <div class="logo">
            <img src="  <?php
                $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
                echo $image[0];
            ?>" alt="site logo">
        </div>
        <div class="top-menu">
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
            ?>
        </div>
        <div class="lang">
                <span>
                    Укр
                </span>
        </div>
    </div>
</header>
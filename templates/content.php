<section class="post-list">
    <div class="inner-content">
        <a href="<?php the_permalink(); ?>" class="link-block">
            <div class="post-list-item">
                <div class="post-thumb">
                    <?php the_post_thumbnail('custom-size') ?>
                </div>
                <div class="main-content">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="excerpt">
                        <?php echo get_excerpt(); ?>
                    </div>
                </div>
                <time class="updated" datetime="<?= get_post_time('c', true); ?>">
                    <div class="the-day">
                        <?= get_the_date('j'); ?>
                    </div>
                    <div class="the-month">
                        <?= get_the_date('F'); ?>
                    </div>
                </time>
            </div>
        </a>
    </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <div class="post-wrapper">
          <div class="inner-content">
              <header>
                  <div class="back-link">
                      <a href="http://bqg.dev:8888/новини/"> Новини </a>
                  </div>
                  <div class="post-thumb">
                      <?php the_post_thumbnail() ?>
                  </div>
                  <div  class="entry-title">
                      <h1><?php the_title(); ?></h1>
                  </div>
                  <?php get_template_part('templates/entry-meta'); ?>
              </header>
              <div class="entry-content">
                  <?php the_content(); ?>
              </div>
              <div class="bottom">
                  <div class="social-share">
                      <?php echo wpfai_social(); ?>
                  </div>
                  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
              </div>
          </div>
      </div>
  </article>
<?php endwhile; ?>

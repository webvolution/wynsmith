<?php get_header(); ?>
  <section>
    <div id="content_body" class="blog">
      <h1>Blog</h1>

      <div class="row">
        <div class="medium-9 columns">
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <article>
                <h1><?php the_title(); ?></h1> - <h2><?php the_date() ?></h2>
                <?php the_excerpt(); ?>
                <a class="more-link"
                   href="<?php the_permalink(); ?>"><?php _e('Continue reading'); ?> <?php the_title(); ?> ></a>
              </article>
            <?php endwhile; ?>

            <div
              class="page-link"><?= posts_nav_link('<span class="page-link-spacer">&bull;</span>', '< Newer posts  ', '  Older posts >') ?></div>
          <?php endif; ?>
        </div>
        <div class="medium-3 columns">
          <aside class="blog_sidebar">
            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
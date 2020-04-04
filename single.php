<?php get_header(); ?>

<main>
  <?php while(have_posts()):the_post(); ?>
  <div id="post-<?php the_ID(); ?>">
    <h1>
      <?php the_title(); ?>
    </h1>
    <p class="post-meta">
      <span class="post-date"><?php the_time('Y年n月j日'); ?></span>
    </p>
    <?php the_content(); ?>
    <?php
      $args = array(
        'before' => '<div class="pager">page:',
        'after' => '</div>',
        'link_before' => '<span>',
        'link_after' => '</span>',
      );
      wp_link_pages($args); ?>

    <div class="author">
      <?php the_author(); ?>
    </div>
    <div class="author-description">
      <?php echo get_the_author_meta('description'); ?>
    </div>

  </div>
  <?php endwhile; ?>

  <br><br>


  <div class="navigation">
    <? if(get_next_post()): ?>
      <div class="next-page">次の記事：<?php next_post_link('%link'); ?></div>
    <?php
    endif;

    if(get_previous_post()):
    ?>
      <div class="prev-page">前の記事：<?php previous_post_link('%link'); ?></div>
    <?php
    endif;
    ?>
  </div>

  <?php comments_template(); ?>
  
</main>

<?php get_footer(); ?>
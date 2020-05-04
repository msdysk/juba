<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <?php while(have_posts()):the_post(); ?>
      <div class="contents-container">
        <div class="single-article-title">
          <h2><?php the_title(); ?></h2>
        </div>
        
        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail(array(680,680));
          }
        ?>
  
        <div class="single-content"><?php the_content(); ?></div>
        
        <?php
        $args = array(
          'before' => '<div class="pager">ページ:',
          'after' => '</div>',
          'link_before' => '<span>',
          'link_after' => '</span>',
        );
        wp_link_pages($args); ?>
      </div>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
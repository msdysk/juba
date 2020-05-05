<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <?php while(have_posts()):the_post(); ?>
      <div class="contents-container">
        <div class="single-article-title">
          <h2><?php the_title(); ?></h2>
        </div>
        
        <div class="contents-thumbnail-pc">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail(array(680,680));
              }
            ?>
          </div>
          <div class="contents-thumbnail-sp">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail(array(300,300));
              }
            ?>
          </div>
  
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
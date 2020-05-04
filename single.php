<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <div class="main-container">
      <?php while(have_posts()):the_post(); ?>
        <div class="contents-container">
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail(array(680,680));
            }
          ?>
          <div class="single-article-title">
            <h2><?php the_title(); ?></h2>
          </div>
          
          <div>
            <span class="post-date"><?php the_time('Y年n月j日'); ?> <?php the_time('G:i'); ?></span>
          </div>

          <div>
            <span class="category-label">カテゴリー：</span><span class="post-categories"><?php the_category(','); ?></span>
            <span><?php the_tags('<span class="post-tag">','</span><span class="post-tag">','</span>'); ?></span>
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

          <div class="navigation">
            <? if(get_next_post()): ?>
              <div class="next-page">次の記事：<?php next_post_link('%link'); ?></div>
              <?php
                endif;
                if(get_previous_post()):
              ?>
              <div class="prev-page">前の記事：<?php previous_post_link('%link'); ?></div>
            <?php endif; ?>
          </div>

          <?php comments_template(); ?>
        </div>
      <?php endwhile; ?>

      <div class="sidebar-container"><?php get_sidebar(); ?></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
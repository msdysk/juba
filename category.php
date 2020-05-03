<?php get_header(); ?>

<main>
  <div class="main-wrapper">
    <h1 class="header"><?php single_cat_title(); ?></h1>
    <div class="main-container">
      <div class="contents-container">
        <?php if(have_posts()): ?>
          <ul class="post-flex-list">
          <?php while(have_posts()) : the_post(); ?>
            <li>
              <div class="post-item">
                <div class="post-thumbnail">
                  <?php 
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail(array(300, 200));;
                    } else {
                  ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no_image.png" alt="thumbnail">
                  <?php } ?>
                </div>
                <div class="post_title">
                  <h2>
                    <a href="<?php the_permalink(); ?>">
                    <?php
                      if(mb_strlen($post->post_title, 'UTF-8') > 30){
                        $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title.'…';
                      }else{
                        echo $post->post_title;
                      }
                    ?></a></h2>
                </div>
                <div class="post-exerpt">
                  <?php the_excerpt(); ?>
                </div>
                <div class="post-meta">
                  <div><span class="category-label">カテゴリー：</span><span class="post-categories"><?php the_category(','); ?></span></div>
                  <div class="post-tags">
                    <?php the_tags('<span class="post-tag">','</span><span class="post-tag">','</span>'); ?>
                  </div>
                  <div>
                    <span class="post-date"><?php the_time('Y年n月j日'); ?> <?php the_time('G:i'); ?></span>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; //投稿の繰り返し ?>
          </ul>
          <?php else: ?>
          <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事はありませんでした</p>
          </div>
        <?php endif; ?>
        <div><?php the_posts_pagination(); ?></div>
      </div>
      <div class="sidebar-container"><?php get_sidebar(); ?></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
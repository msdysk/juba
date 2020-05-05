<p><h3>コメント</h3></p>
<ol class="comment-list">
<?php if( have_comments() ){ ?>
  <?php wp_list_comments(); ?>
</ol>
<?php } ?>

<div class="comment-form">
  <?php 
    $comment_args = array(
      'title_reply' => 'コメントを残す',
      'label_submit' => 'コメントを送信する',
    );    
    comment_form($comment_args); ?>
</div>

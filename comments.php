<ol class="comment-list">
  <?php wp_list_comments(); ?>
</ol>

<div class="comment-form">
  <?php 
    $comment_args = array(
      'title_reply' => 'コメントはこちらから',
      'label_submit' => 'コメントを送信する',
    );    
    comment_form($comment_args); ?>
</div>

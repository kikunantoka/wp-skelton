<ol class="commets-list">
  <?php wp_list_comments( 'avatar_size=55' ); ?>
</ol>
<?php $args = array(
'title_reply' => 'Leave a Reply',
'label_submit' => 'Submit Comment',
);
comment_form( $args ); ?>

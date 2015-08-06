<?php get_header(); ?>
<div class="container">
  <div class="row">
    <main>
      <div class="eight columns">
        <?php
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
							<p class="post-meta">
								<span class="date"><?php echo get_the_date(); ?></span>
								<span class="tags"><?php the_tags( ' Tags: ', ', ', '<br />' ); ?> </span>
								<!-- <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span> -->
							</p>

							<?php the_content('続きを読む &raquo;'); ?>

						</div>
					<?php
					endwhile; // 繰り返し処理終了
				else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h2>No Posts</h2>
							<p>Not found finded posts</p>
						</div>
				<?php
				endif;
				?>

        <!-- <div class="post">
          <h2><a href="#">Post title</a></h2>
          <p class="date">2015.08.04</p>
          <p class="tags">Tags: <a href="#">hoge</a>, <a href="#">foo</a>, <a href="#">bar</a></p>
          <p>
            <img src="images/sample.jpg" alt="sample" class="u-max-full-width">
          </p>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos harum corporis enim quasi dolorum ipsam excepturi itaque temporibus aliquid consequuntur doloremque recusandae rerum quisquam quo, cumque facere voluptatum iusto iure.
          </p>
        </div> -->

        <!-- pager -->
        <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
        <div class="navigation">
        <div class="alignleft"><?php next_posts_link('« PREV'); ?></div>
        <div class="alignright"><?php previous_posts_link('NEXT »'); ?></div>
        </div>
        <?php endif; ?>
        <!-- /pager -->

      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

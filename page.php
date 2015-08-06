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
							<?php the_content(); ?>

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
      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

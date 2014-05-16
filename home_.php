<?php get_header(); ?>

	<div class="content-area view-grid">
		<div class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="featured-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
				</article>
			<?php endwhile; ?>

		<?php else : ?>
			<p>No posts</p>
		<?php endif; ?>

		</div><!-- .site-content -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
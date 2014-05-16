<?php get_header(); ?>

	<div class="content-area view-grid">

		<?php if ( have_posts() ) : ?>

		<div class="site-content" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="featured-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
				</article>
			<?php endwhile; ?>
			<nav class="posts-nav">
				<span class="nav-previous"><?php previous_posts_link( '&larr; Newer photos' ); ?></span>
				<span class="nav-next"><?php next_posts_link( 'Older photos &rarr;' ); ?></span>
			</nav>
		</div><!-- .site-content -->
		
		<?php else : ?>
			<p>No posts</p>
		<?php endif; ?>

	</div><!-- .content-area -->

<?php get_footer(); ?>
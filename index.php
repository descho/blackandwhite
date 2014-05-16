<?php get_header(); ?>

	<div class="content-area">
		<div class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="featured-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="post-date">Posted on <time><?php the_time( 'd.m.Y' ); ?></time></p>
					<hr>
				</article>
			<?php endwhile; ?>

		<?php else : ?>
			<p>No posts</p>
		<?php endif; ?>

		</div><!-- .site-content -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
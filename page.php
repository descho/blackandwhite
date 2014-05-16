<?php get_header(); ?>

	<div class="content-area">
		<div class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<hr>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					
				</article><!-- #post -->

			<?php endwhile; ?>

		</div><!-- .site-content -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
<?php get_header(); ?>

	<div class="content-area">
		<div class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="featured-image"><?php the_post_thumbnail(); ?></div>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<p class="post-date">Posted on <time><?php the_time( 'm.d.Y' ); ?></time></p>
	 				<nav class="post-nav">
						<span class="nav-previous"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link' ) . '</span>' ); ?></span>
						<span class="nav-next"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&rarr;', 'Previous post link' ) . '</span>' ); ?></span>
					</nav>
				</article>
			<?php endwhile; ?>

		</div><!-- .site-content -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
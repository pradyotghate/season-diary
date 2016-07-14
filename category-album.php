<?php get_header(); ?>

<div class="image-post-list"> 
	<?php $i = 0;
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>

			<div class="row">
				<img src="<?php the_post_thumbnail_url(); ?>" class="main-image">
			</div>

		<?php endwhile; ?>

		<div class="post-list-nav">
			<?php if ( get_next_posts_link() || get_previous_posts_link() ) :

				if( get_next_posts_link() ): 
					echo get_next_posts_link( '<span class="nav-button">&lsaquo;</span>' );
				else : _e( '<span class="nav-button">&lsaquo;</span>' );
				endif;

				if( get_previous_posts_link() ): 
					echo get_previous_posts_link( '<span class="nav-button">&rsaquo;</span>' );
				else : _e( '<span class="nav-button">&rsaquo;</span>' );
				endif;

			endif; ?>
		</div>

	<?php 
	else : _e( 'Sorry, no posts matched your criteria.' );
	endif; ?>
</div>

<div class="footer">
	<?php get_footer(); ?>
</div>
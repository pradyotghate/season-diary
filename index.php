<?php get_header(); ?>

<div class="text-post-list"> 
	<?php if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>

			<div class="text-one-post">
			<div class="text-post-title"> <?php echo "<a href=\""; the_permalink(); echo "\">"; the_title(); ?> </a> </div>
			<div class="text-post-date"> <?php the_date(); ?> </div>
				<?php if(has_post_thumbnail()) : ?>
					<div class="text-post-image" > <img src="<?php the_post_thumbnail_url(); ?>" class="text-post-image"></div>
				<?php endif; ?>
				<div class="text-post-text"> <?php the_content( '...continue reading' ); ?></div>
				<div class="text-post-tags"> <?php the_tags( '<div class="tag">', '', '</div>' ); ?></div>
			</div>
			
		<?php endwhile; ?>

		<?php if ( get_next_posts_link() || get_previous_posts_link() ) : ?>
			<div class="post-list-nav">
				<?php if( get_next_posts_link() ): 
					echo get_next_posts_link( '<span class="nav-button">&lsaquo;</span>' );
				else : _e( '<span class="nav-button">&lsaquo;</span>' );
				endif;
				if( get_previous_posts_link() ): 
					echo get_previous_posts_link( '<span class="nav-button">&rsaquo;</span>' );
				else : _e( '<span class="nav-button">&rsaquo;</span>' );
				endif; ?>
			</div>
		<?php endif; ?>

	<?php 
	else : _e( 'Sorry, no posts matched your criteria.' );
	endif; ?>
</div>

<?php get_footer(); ?>
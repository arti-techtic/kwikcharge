<?php get_header(); ?>
<?php
		if( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				the_title();
				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
		endif;
			?>
<?php get_footer(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 5/7/2017
 * Time: 10:48 AM
 * Template Name: Page - Full width
 */

get_header(); ?>

	<div id="primary" class="medium-12 large-12 columns content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
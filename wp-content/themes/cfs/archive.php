<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cornerstone_Furnished_Solutions
 */

get_header(); ?>
<div class="content-offset">
<!-- FEATURE IMAGE -->
<section class="blog-feature-img" data-type="background" data-speed="2">
  <h1 class="page-title">Blog</h1>
</section>

	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">
				<?php
				if ( have_posts() ) : ?>
					<h1 class="blog-result-text"><?php printf( esc_html__( 'Results for: %s', 'cfs' ), '<span>' . get_search_query() . '</span>' ); ?> <?php single_tag_title(); ?></h1>

					<?php
					/* Start the Loop */

					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</main> <!-- #content -->

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>

		</div>	<!-- #primary -->
	</div>	<!-- .container -->
</div> <!-- .content-offset -->


<?php

get_footer();




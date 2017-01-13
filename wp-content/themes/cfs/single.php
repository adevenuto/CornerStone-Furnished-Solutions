<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cornerstone_Furnished_Solutions
 */

get_header(); ?>
	<div class="content-offset">

      <div class="container">
        <div class="row" id="primary">
          <main class="col-sm-8" id="content">
          	<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content-single', get_post_format() );

								the_post_navigation();

								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endwhile; // End of the loop.
							?>
          </main>
          <!-- SIDEBAR -->
          <aside class="col-sm-4">
          	<?php get_sidebar(); ?>
        	<aside>
        </div>
      </div>

  </div>

<?php

get_footer();

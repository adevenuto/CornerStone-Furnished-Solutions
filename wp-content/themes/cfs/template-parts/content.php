<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cornerstone_Furnished_Solutions
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div id="post-details">
        <div class ="post-comments-badge">
          <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0,1,'%') ?></a>
        </div>
        <i class="fa fa-user"></i><?php the_author(); ?>
        <i class="fa fa-clock-o"></i><time><?php  the_date(); ?></time>
        <i class="fa fa-tags"></i><?php the_tags('',', ',''); ?>
      </div>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<?php if(has_post_thumbnail() ) { ?> <!-- check if thumbnail is present -->
		<div class="post-image">
	    <?php the_post_thumbnail(); ?>
	  </div> <!-- post-image -->
  <?php } ?>

  <div class="post-excerpt">
    <?php the_excerpt() ?>
  </div>

</article><!-- #post-## -->


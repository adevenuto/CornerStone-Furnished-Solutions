<?php
/**
 * @package Bootstrap to WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>

    <div id="post-details">
      <div class="post-comments-badge">
        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>
      </div><!-- post-comments-badge -->
      <i class="fa fa-user"></i> <?php the_author(); ?>
      <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
      <i class="fa fa-folder-open"></i> <?php the_category(', ') ?>
      <i class="fa fa-tags"></i> <?php the_tags(); ?>
    </div><!-- post-details -->

    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php if ( has_post_thumbnail() ) { ?> <!-- check for feature image -->
  <div class="post-image">
    <?php the_post_thumbnail(); ?>
  </div><!-- post-image -->
  <?php } ?>

  <div class="post-body">
    <?php the_content(); ?>
  </div><!-- post-body -->

</article><!-- #post-## -->
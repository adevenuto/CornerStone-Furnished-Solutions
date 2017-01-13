<?php
/*
Template Name: Orlando Page
 */
/* Custom Fields */
$lofts_at_sodo_desc = get_post_meta(126, 'lofts_at_sodo_desc', true);
$skyhouse_orlando_desc = get_post_meta(126, 'skyhouse_orlando_desc', true);
$steelhouse_orlando_desc = get_post_meta(126, 'steelhouse_orlando_desc', true);
?>
<?php get_header(); ?>

<div class="content-offset">

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">Lofts at SoDo</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/lofts-at-sodo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/orlando/sodo1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">100 W. Grant St, Orlando, FL 32806</h3>
            <h3 class="locations-description"><?php echo truncate($lofts_at_sodo_desc, 350); ?><a href="/lofts-at-sodo" class="more-info">more</a></h3>
            <a href="/lofts-at-sodo" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
        <div class="hr-locations"></div>
      </div>
    </div>
  </div>

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">SkyHouse Orlando</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/skyhouse-orlando"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/orlando/skyhouseOrlando5.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">335 North Magnolia Ave. Orlando, FL 32801</h3>
            <h3 class="locations-description"><?php echo truncate($skyhouse_orlando_desc, 350); ?><a href="/skyhouse-orlando" class="more-info">more</a></h3>
            <a href="/skyhouse-orlando" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
        <div class="hr-locations"></div>
      </div>
    </div>
  </div>

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">SteelHouse Orlando</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/steelhouse-orlando"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/orlando/steelhouse1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">750 N Orange Ave, Orlando, FL 32801</h3>
            <h3 class="locations-description"><?php echo truncate($steelhouse_orlando_desc, 350); ?><a href="/steelhouse-orlando" class="more-info">more</a></h3>
            <a href="/steelhouse-orlando" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- content-offset -->

<?php get_footer(); ?>
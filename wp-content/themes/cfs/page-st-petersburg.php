<?php
/*
Template Name: St Petersburg Page
 */
/* Custom Fields */
$aura_4th_desc = get_post_meta(130, 'aura_4th_desc', true);
$azure_desc = get_post_meta(130, 'azure_desc', true);
$elan_gateway_desc = get_post_meta(130, 'elan_gateway_desc', true);
$fusion_1560_desc = get_post_meta(130, 'fusion_1560_desc', true);
?>
<?php get_header(); ?>

<div class="content-offset">

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">Aura@4th</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/aura-at-4th"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">10980 Oak St NE, St. Petersburg, FL 33716</h3>
            <h3 class="locations-description"><?php echo truncate($aura_4th_desc, 350); ?><a href="/aura-at-4th" class="more-info">more</a></h3>
            <a href="/aura-at-4th" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Azure</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/azure-apartments"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/azure4.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">540 Trinity Ln, St. Petersburg, FL 33716</h3>
            <h3 class="locations-description"><?php echo truncate($azure_desc, 350); ?><a href="/azure-apartments" class="more-info">more</a></h3>
            <a href="/azure" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Fusion 1560</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/fusion-1560"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/fusion1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">1560 Central Ave, St. Petersburg, FL 33705</h3>
            <h3 class="locations-description"><?php echo truncate($fusion_1560_desc, 350); ?><a href="/fusion-1560" class="more-info">more</a></h3>
            <a href="/fusion-1560" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Elan Gateway</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/elan-gateway"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/elan6.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">11800 Doctor M.L.K. Jr St N, St. Petersburg, FL 33716</h3>
            <h3 class="locations-description"><?php echo truncate($elan_gateway_desc, 350); ?><a href="/elan-gateway" class="more-info">more</a></h3>
            <a href="/elan-gateway" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- content-offset -->

<?php get_footer(); ?>
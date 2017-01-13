<?php
/*
Template Name: Jacksonville Page
 */
/* Custom Fields */
$arelia_james_desc = get_post_meta(128, 'arelia_james_desc', true);
$citigate_apartments_desc = get_post_meta(128, 'citigate_apartments_desc', true);
$coventry_park_desc = get_post_meta(128, 'coventry_park_desc', true);
$lost_lake_desc = get_post_meta(128, 'lost_lake_desc', true);
$sorrel_desc = get_post_meta(128, 'sorrel_desc', true);
$terraces_at_town_center_desc = get_post_meta(128, 'terraces_at_town_center_desc', true);
?>
<?php get_header(); ?>

<div class="content-offset">

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">Citigate Apartments</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/citigate-apartments"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate2.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">8451 Gate Pkwy W, Jacksonville, FL 32216</h3>
            <h3 class="locations-description"><?php echo truncate($citigate_apartments_desc, 350); ?><a href="/citigate-apartments" class="more-info">more</a></h3>
            <a href="/citigate-apartments" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Arelia James Island</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/arelia-james-island"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/arelia5.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">10880 Angelfish Way, Jacksonville, FL 32256</h3>
            <h3 class="locations-description"><?php echo truncate($arelia_james_desc, 350); ?><a href="/arelia-james-island" class="more-info">more</a></h3>
            <a href="/arelia-james-island" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Lost Lake Apts</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/lost-lake-apartments"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake6.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">8681 AC Skinner Parkway, Jacksonville, FL 32256</h3>
            <h3 class="locations-description"><?php echo truncate($lost_lake_desc, 350); ?><a href="/lost-lake-apartments" class="more-info">more</a></h3>
            <a href="/lost-lake-apartments" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Conventry Park Apts</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/coventry-park-apartments"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/coventry3.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">6650 Corporate Center Pkwy, Jacksonville, FL 32216</h3>
            <h3 class="locations-description"><?php echo truncate($coventry_park_desc, 350); ?><a href="/coventry-park-apartments" class="more-info">more</a></h3>
            <a href="/coventry-park-apartments" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Terraces at Town Center</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/terraces-at-town-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/terraces4.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">5140 Gate Parkway N, Jacksonville, FL 32256</h3>
            <h3 class="locations-description"><?php echo truncate($terraces_at_town_center_desc, 350); ?><a href="/terraces-at-town-center" class="more-info">more</a></h3>
            <a href="/terraces-at-town-center" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Sorrel Luxury Apartments</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/sorrel-luxury-apartments"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/sorrel6.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">12001 Abess Blvd, Jacksonville, FL 32225</h3>
            <h3 class="locations-description"><?php echo truncate($sorrel_desc,350); ?><a href="/sorrel-luxury-apartments" class="more-info">more</a></h3>
            <a href="/sorrel-luxury-apartments" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</div></div><!-- content-offset -->

<?php get_footer(); ?>
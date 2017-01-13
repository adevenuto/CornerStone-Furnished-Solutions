<?php
/*
Template Name: Tampa Page
 */
/* Custom Fields */
$bell_channelside_desc = get_post_meta(124, 'bell_channelside_desc', true);
$broadstone_desc = get_post_meta(124, 'broadstone_desc', true);
$crosstown_walk_desc = get_post_meta(124, 'crosstown_walk_desc', true);
$links_at_pebble_creek_desc = get_post_meta(124, 'links_at_pebble_creek_desc', true);
$millennium_desc = get_post_meta(124, 'millennium_desc', true);
$modera_desc = get_post_meta(124, 'modera_desc', true);
$pierhouse_channelside_desc = get_post_meta(124, 'pierhouse_channelside_desc', true);
$skyhouse_tampa_desc = get_post_meta(124, 'skyhouse_tampa_desc', true);
$verela_westshore_desc = get_post_meta(124, 'verela_westshore_desc', true);
?>
<?php get_header(); ?>

<div class="content-offset">

  <div class="container locations-container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <h1 class="locations-header">Millennium Westshore</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/millennium-westshore"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/Millennium5.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6">
          <div class="locations-info">
            <h3 class="locations-address">4400 W Spruce St, Tampa, FL 33607</h3>
            <h3 class="locations-description"><?php echo truncate($millennium_desc, 350); ?><a href="/millennium-westshore" class="more-info">more</a></h3>
            <a href="/millennium-westshore" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Pierhouse at Channelside</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/pierhouse"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/pierhouse5.jpeg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">1226 E Cumberland Ave, Tampa, FL 33602</h3>
            <h3 class="locations-description"><?php echo truncate($pierhouse_channelside_desc,350); ?><a href="/pierhouse" class="more-info">more</a></h3>
            <a href="/pierhouse" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Modera Westshore</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/modera"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">4504 W Spruce St, Tampa, FL 33607</h3>
            <h3 class="locations-description"><?php echo truncate($modera_desc,350); ?><a href="/modera" class="more-info">more</a></h3>
            <a href="/modera" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Bell Channelside</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/bell-channelside"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/bell-channelside1.png" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">1120 E Twiggs St, Tampa, FL 33602</h3>
            <h3 class="locations-description"><?php echo truncate($bell_channelside_desc, 350); ?><a href="/bell-channelside" class="more-info">more</a></h3>
            <a href="/bell-channelside" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">SkyHouse Tampa</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/skyhouse-tampa"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/SkyHouse1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">112 N 12th St, Tampa, FL 33602</h3>
            <h3 class="locations-description"><?php echo truncate($skyhouse_tampa_desc,350); ?><a href="/skyhouse-tampa" class="more-info">more</a></h3>
            <a href="/skyhouse-tampa" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Crosstown Walk</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/crosstown"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown2show.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">10151, Iris Crosstown Dr, Tampa, FL 33619</h3>
            <h3 class="locations-description"><?php echo truncate($crosstown_walk_desc,350); ?><a href="/crosstown" class="more-info">more</a></h3>
            <a href="/crosstown" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Links at Pebble Creek</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/links"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/links2.png" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">18940, Pebble Links Cir, Tampa, FL 33647</h3>
            <h3 class="locations-description"><?php echo truncate($links_at_pebble_creek_desc,350); ?><a href="/links" class="more-info">more</a></h3>
            <a href="/links" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Broadstone at Citrus Village</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/broadstone"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/broadstone2.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">7940 Citrus Garden Dr, Tampa, FL 33625</h3>
            <h3 class="locations-description"><?php echo truncate($broadstone_desc,350); ?><a href="/broadstone" class="more-info">more</a></h3>
            <a href="/broadstone" class="locations-button details-button">Details</a>
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
        <h1 class="locations-header">Varela Westshore</h1>
        <div class="col-md-6 thumbnail thumbnail-show">
          <a href="/varela"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/varela6show.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-6 no-padding">
          <div class="locations-info">
            <h3 class="locations-address">1701 N Lois Ave, Tampa, FL 33607</h3>
            <h3 class="locations-description"><?php echo truncate($verela_westshore_desc, 350); ?><a href="/varela" class="more-info">more</a></h3>
            <a href="/varela" class="locations-button details-button">Details</a>
            <a href="/contact" class="locations-button quote-button">Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- content-offset -->

<?php get_footer(); ?>
<?php
/*
Template Name: Modera Page
 */
/* Custom Fields */
?>
<?php get_header(); ?>

<div class="content-offset">
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5 thumbnail thumbnail-show">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-7">
          <script>
            var myLatLng = {lat: 27.959097, lng: -82.520991};
              function initAutocomplete() {
                var map = new google.maps.Map(document.getElementById('map'), {
                  center: myLatLng,
                  zoom: 13,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  styles: [
                            {
                              "stylers": [
                                { "saturation": 1 },
                                { "lightness": -22 }
                              ]
                            },
                            {
                              featureType: 'road',
                              elementType: 'geometry',
                              stylers: [
                                { color: '#000000' },
                                { weight: .2 }
                              ]
                            }
                          ]
                });
                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: 'Modera Westshore'
                });
                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function() {
                  searchBox.setBounds(map.getBounds());
                });
                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function() {
                  var places = searchBox.getPlaces();
                  if (places.length == 0) {
                    return;
                  }
                  // Clear out the old markers.
                  markers.forEach(function(marker) {
                    marker.setMap(null);
                  });
                  markers = [];
                  // For each place, get the icon, name and location.
                  var bounds = new google.maps.LatLngBounds();
                  places.forEach(function(place) {
                    var icon = {
                      url: place.icon,
                      size: new google.maps.Size(71, 71),
                      origin: new google.maps.Point(0, 0),
                      anchor: new google.maps.Point(17, 34),
                      scaledSize: new google.maps.Size(25, 25)
                    };
                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                      map: map,
                      icon: icon,
                      title: place.name,
                      position: place.geometry.location
                    }));
                    if (place.geometry.viewport) {
                      // Only geocodes have viewport.
                      bounds.union(place.geometry.viewport);
                    } else {
                      bounds.extend(place.geometry.location);
                    }
                  });
                map.fitBounds(bounds);
              });
            }
          </script>
          <input id="pac-input" class="controls" type="text" placeholder="Search Box">
          <div id="map"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPRPve2YDL_YEhNWuBG1fK5RJlp6a-_HI&libraries=places&callback=initAutocomplete"
          async defer>
          </script>
        </div>
      </div>
    </div>
  </div>
  <!-- /////////////////////////////////// -->
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <h1 class="location-name-show">Modera Westshore</h1>
        <div class="col-md-12 padding-zero">
          <h3 class="location-address-show">4504 W Spruce St, Tampa, FL 33607</h3>
        </div>
        <h3 class="location-description-show"><?php the_content() ?></h3>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-home"></span>Apartment Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Granite counters in kitchen and baths</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Energy Star stainless steel appliances</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Microwave, dishwasher, garbage disposal, and icemaker</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Undermount sinks and tile backsplash in kitchen</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Washer and dryer in each apartment</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Ceiling fans, and 9 ft. ceilings</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Upgraded lighting</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Walk-in closets</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Private terraces with fabulous views</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Keyless entry system</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>USB outlets</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Intrusion alarms</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Wood style floors</li>
        </ul>
      </div>
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-users"></span>Commmunity Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Electric car charging stations</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Elite fitness studio</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Resort style saltwater swimming pool with private sun deck</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Undermount sinks and tile backsplash in kitchen</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Resident lounge with billiards and gaming capabilities</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Business Lounge with WiFi and private conference room</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Garden courtyard with duel fireplace</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Valet trash/recycling services</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Controlled access garage</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Solid concrete construction</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Enclosed air conditioned hallways with elevators</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Bicycle storage with storage units</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <h2 class='text-left featured-posts'></span>Tampa’s Westshore Neighborhood</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-shopping-bag icons"></span> Upscale shopping including 2 regional malls <a href="http://westshoreplaza.com/">Westshore Plaza</a>  and <a href="http://www.shopinternationalplaza.com/">International Plaza &amp; Bay Street</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-plane icons"></span> Top-rated <a href="http://www.tampaairport.com/">Tampa International Airport</a> is located within 5 to 7 minutes from any Westshore Business District location</li>
          <li class="articles-show"><span class="fa fa-fw fa-location-arrow icons"></span>Just 10min from downtown, and <a href="http://www.tampaconventioncenter.com/">Tampa’s Convention Center</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-sun-o icons"></span> Beautiful panoramic views, and <a href="http://www.visittampabay.com/play/tampa-beaches/">beaches</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-graduation-cap icons"></span> Multitude of <a href="http://www.greatschools.org/florida/tampa/">school</a> options for families with children</li>
          <li class="articles-show"><span class="fa fa-fw fa-h-square icons"></span> Superior <a href="http://memorialhospitaltampa.com/">health care</a>, just around the corner</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top-20">
  <div class="row">

      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera9.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera9.jpg" class="img-responsive-show"></a>
          </a>

        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera10.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera10.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera15.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera15.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera13.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera13.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera12.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera12.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera8.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/modera8.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>

  </div>
</div>
<?php get_template_part( 'partial/links-container-tampa' ); ?>


</div><!-- content-offset -->

<?php get_footer(); ?>
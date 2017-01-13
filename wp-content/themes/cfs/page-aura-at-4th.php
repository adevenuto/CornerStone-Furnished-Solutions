<?php
/*
Template Name: Aura at 4th Page
 */
/* Custom Fields */
?>
<?php get_header(); ?>

<div class="content-offset">
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5 thumbnail thumbnail-show">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura1.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-7">
          <script>
            var myLatLng = {lat: 27.871933, lng: -82.631652};
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
                  title: 'Aura @4th'
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
        <h1 class="location-name-show">Aura @ 4th</h1>
        <div class="col-md-12 padding-zero">
          <h3 class="location-address-show">10980 Oak St NE, St. Petersburg, FL 33716</h3>
        </div>
        <h3 class="location-description-show"><?php the_content()?></h3>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-home"></span>Apartment Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>High-speed internet ready</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Oversized stainless steel kitchen sinks and tile backsplashes</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Breakfast bar and kitchen islands with pendant lighting</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Private patios and balconies with additional storage in select units</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Spacious walk-in closets</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Energy-efficient washer and dryers</li>
        </ul>
      </div>
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-users"></span>Commmunity Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>24-hour controlled access gated community</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Garages and covered bicycle storage</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Complimentary Wi-Fi at the clubhouse and surrounding areas</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Bark park (breed and size restrictions may apply)</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Resort-style pool</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Picnic areas with charcoal grilling stations</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <h2 class='text-left featured-posts'></span>St. Petersburg's Gandy Community</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-shopping-bag icons"></span> Upscale <a href="http://www.simon.com/mall/tyrone-square">Shopping</a>, fun and entertainment</li>
          <li class="articles-show"><span class="fa fa-fw fa-plane icons"></span> Top-rated <a href="http://www.fly2pie.com/">St. Pete-Clearwater International Airport</a> is located within 12 minutes from Aura@4th Apartments</li>
          <li class="articles-show"><span class="fa fa-fw fa-location-arrow icons"></span> Located just 20min from downtown St. Petersburg, downtown Tampa bay, and <a href="http://www.tampaconventioncenter.com/">Tampa Bay Convention Center</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-sun-o icons"></span> Beautiful panoramic views, and <a href="http://www.visitflorida.com/en-us/cities/clearwater-beach.html">beaches</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-graduation-cap icons"></span> Multitude of <a href="http://www.greatschools.org/florida/st.-petersburg/">school</a> options for families with children</li>
          <li class="articles-show"><span class="fa fa-fw fa-h-square icons"></span> Superior <a href="http://stpetegeneral.com/">health care</a>, just around the corner</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top-20">
  <div class="row">

      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura2.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura2.jpg" class="img-responsive-show"></a>
          </a>

        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura3.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura3.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura4.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura4.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura5.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura5.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura6.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura6.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura7.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/st_petersburg/aura7.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>

  </div>
</div>
<?php get_template_part( 'partial/links-container-st-petersburg' ); ?>


</div><!-- content-offset -->

<?php get_footer(); ?>
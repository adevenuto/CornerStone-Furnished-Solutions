<?php
/*
Template Name: Crosstown Walk Page
 */
/* Custom Fields */
?>
<?php get_header(); ?>

<div class="content-offset">
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5 thumbnail thumbnail-show">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown2show.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-7">
          <script>
            var myLatLng = {lat: 27.939230, lng: -82.336440};
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
                  title: 'Crosstown Walk'
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
        <h1 class="location-name-show">Crosstown Walk</h1>
        <div class="col-md-12 padding-zero">
          <h3 class="location-address-show">10151, Iris Crosstown Dr, Tampa, FL 33619</h3>
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
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Nine-Foot Ceilings</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Gourmet Kitchens with General Electric Appliances</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>High Speed Internet Ready</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Washers and Dryers Included in Each Unit</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Double Stainless Steel Sinks</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Breakfast Bars</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Kitchen Islands</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Separate Dining Areas</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Storage</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Private Patios</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Track Lighting in Dining Areas</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Under-Counter Lighting in Kitchens</li>
        </ul>
      </div>
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-users"></span>Commmunity Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Health and Wellness Center and Spa</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Executive Business Center</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Strength Training and Cardio Areas</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Clubhouse, Poolside and Spa Wi-Fi Access</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Picnic Areas with Grills</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Bark Park</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Pet Friendly</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Resort-Style Pool with Cabana, Gas Grilling Area</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Garage Space</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Recycling Area</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>24-Hour Controlled Access Entry Gates</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <h2 class='text-left featured-posts'></span>Tampa’s Brandon Community</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-shopping-bag icons"></span> Upscale <a href="https://www.westfield.com/brandon">Shopping</a>, fun and entertainment</li>
          <li class="articles-show"><span class="fa fa-fw fa-plane icons"></span> A short 15min drive from <a href="http://www.tampaairport.com/">Tampa International Airport</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-location-arrow icons"></span> Just 10min from downtown, and <a href="http://www.tampaconventioncenter.com/">Tampa’s Convention Center</a></li>
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
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown1.jpeg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown1.jpeg" class="img-responsive-show"></a>
          </a>

        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown2.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown2.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown4.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown4.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown3.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown3.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown5.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown5.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown6.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/tampa/crosstown6.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>

  </div>
</div>
<?php get_template_part( 'partial/links-container-tampa' ); ?>


</div><!-- content-offset -->

<?php get_footer(); ?>
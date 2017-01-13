<?php
/*
Template Name: Lost Lake Apartments Page
 */
/* Custom Fields */
?>
<?php get_header(); ?>

<div class="content-offset">
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5 thumbnail thumbnail-show">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake6.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-7">
          <script>
            var myLatLng = {lat: 30.247755, lng: -81.556532};
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
                  title: 'Lost Lake Apartments'
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
        <h1 class="location-name-show">Lost Lake Apts</h1>
        <div class="col-md-12 padding-zero">
          <h3 class="location-address-show">8681 AC Skinner Parkway, Jacksonville, FL 32256</h3>
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
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>36" Oversized Tubs</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Balconies*</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Full Sized Washer & Dryer</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Air Conditioning</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Double Paned Windows</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Walk In Pantry</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Large Closets</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Island Kitchens with Pendant Lighting</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Garbage Disposal</li>
        </ul>
      </div>
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-users"></span>Commmunity Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Basketball Court </li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Fitness Center</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Outdoor Urban Lounge with Fireplace</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Saturday Continental Breakfast</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Theatre Room with Surround Sound</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Sun Yoga</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Beach Style Pool with Cabanas</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Valet Towel Service at Pool/Fitness Center</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Dog Wash Station</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <h2 class='text-left featured-posts'></span>Jacksonville's Bay Meadows Community</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-shopping-bag icons"></span> Upscale <a href="http://www.marketsattowncenter.com/">Shopping</a>, fun and entertainment</li>
          <li class="articles-show"><span class="fa fa-fw fa-plane icons"></span> A short 20min drive from <a href="http://www.flyjax.com/Home.aspx">Jacksonville International Airport</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-location-arrow icons"></span> Just 20min from downtown, and <a href="http://jaxevents.com/venues/prime-f-osborn-iii-convention-center/">Jacksonville's Convention Center</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-sun-o icons"></span> Beautiful panoramic views, and <a href="http://www.visitjacksonville.com/things-to-do/water-activities/beach-activities/">beaches</a></li>
          <li class="articles-show"><span class="fa fa-fw fa-graduation-cap icons"></span> Multitude of <a href="http://www.greatschools.org/florida/jacksonville/">school</a> options for families with children</li>
          <li class="articles-show"><span class="fa fa-fw fa-h-square icons"></span> Superior <a href="http://memorialhospitaljax.com/">health care</a>, just around the corner</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container margin-top-20">
  <div class="row">

      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake7.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake7.jpg" class="img-responsive-show"></a>
          </a>

        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake5.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake5.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake1.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake1.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake2.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake2.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake3.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake3.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake4.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/lostlake4.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>

  </div>
</div>
<?php get_template_part( 'partial/links-container-jacksonville' ); ?>


</div><!-- content-offset -->

<?php get_footer(); ?>
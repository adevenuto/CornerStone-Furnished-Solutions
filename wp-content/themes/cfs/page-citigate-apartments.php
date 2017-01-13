<?php
/*
Template Name: Citigate Apartments Page
 */
/* Custom Fields */
?>
<?php get_header(); ?>

<div class="content-offset">
  <div class="container margin-bottom-20">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5 thumbnail thumbnail-show">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate2.jpg" class="img-responsive-show"></a>
        </div>
        <div class="col-md-7">
          <script>
            var myLatLng = {lat: 30.254720, lng: -81.567865};
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
                  title: 'Citigate Apartments'
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
        <h1 class="location-name-show">Citigate Apartments</h1>
        <div class="col-md-12 padding-zero">
          <h3 class="location-address-show">8451 Gate Pkwy W, Jacksonville, FL 32216</h3>
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
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Full-sized washer & dryer in every residence</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Kenmore stainless steel appliances</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Crown molding in kitchen, dining & living spaces</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Polished chrome and brushed nickel fixtures</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Ceramic tile floors in kitchen, baths, and foyers</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>2″ wood grain blinds</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Pre-wired for intrusion system</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Pre-wired for surround sound and an alarm system</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Spacious private terrace or balcony</li>
        </ul>
      </div>
      <div class="col-md-6 amenities">
        <h2 class='text-left featured-posts'><span class="fa fa-fw fa-users"></span>Commmunity Amenities</h2>
        <ul>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Controlled Access Gates</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Swimming Pool with Dive-in Theatre, Poolside Cabanas, and Fire Lounge</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Indoor Theatre</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Cyber Café</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Citiclub with Billiards and Catering Kitchen</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Lakeside Pavilion with iPod Docks</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Bocce Ball Court</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Bark Park</li>
          <li class="articles-show"><span class="fa fa-fw fa-plus icons"></span>Attached Garages and Storage Rooms</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <h2 class='text-left featured-posts'></span>Jacksonville's Secret Cove Community</h2>
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
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate1.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate1.jpg" class="img-responsive-show"></a>
          </a>

        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate3.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate3.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate4.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate4.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate5.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate5.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate6.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate6.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-xs-6 margin-bottom-30">
        <div class="thumbnail">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate7.jpg" class="fancybox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/jacksonville/citigate7.jpg" class="img-responsive-show"></a>
          </a>
        </div>
      </div>

  </div>
</div>
<?php get_template_part( 'partial/links-container-jacksonville' ); ?>


</div><!-- content-offset -->

<?php get_footer(); ?>
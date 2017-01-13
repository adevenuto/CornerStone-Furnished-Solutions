<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<!-- CAROUSEL -->
    <div class="content-offset">
      <div id="carousel-example-generic" class="carousel slide page" data-ride="carousel" data-interval="7000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
          <li data-target="#carousel-example-generic" data-slide-to="7"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <!-- Slide Banner 1 -->
          <div class="item active">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/SkyHouse1.1.png" alt="...">
            <div class="carousel-caption">
              SkyHouse Tampa/Orlando
            </div>
            <div class="slide1-banner banner-1 slide1-style">
              <h4>"Furnished Housing made Easy"</h4>
            </div>
          </div>
          <!-- Slide Banner 2 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/broadstoneCollage.png" alt="...">
            <div class="carousel-caption">
              Broadstone Citrus Village, Tampa
            </div>
            <div class="slide2-banner slide2-style banner-2">
              <h4>"Whats included?...Everything!"</h4>
            </div>
          </div>
          <!-- Slide Banner 3 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/fusionMix.png" alt="...">
            <div class="carousel-caption">
              Fusion 1560, St. Petersburg
            </div>
            <div class="slide3-banner slide3-style banner-3">
              <h4>Fully equipped with all the comforts of home.</h4>
            </div>
          </div>
          <!-- Slide Banner 4 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/arelia7.png" alt="...">
            <div class="carousel-caption">
              Arelia Apartments, Jacksonville
            </div>
            <div class="slide4-banner slide4-style banner-4">
              <h4>"Relax and enjoy your stay, we'll take care of the rest"</h4>
            </div>
          </div>
          <!-- Slide Banner 5 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/SoDo.png" alt="...">
            <div class="carousel-caption">
              Lofts at SoDo, Orlando
            </div>
            <div class="slide5-banner slide5-style banner-5">
              <h4>"The Finest Properties"</h4>
            </div>
          </div>
          <!-- Slide Banner 6 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/citigate7.png" alt="...">
            <div class="carousel-caption">
              Citigate Apartments, Jacksonville
            </div>
            <div class="slide6-banner slide6-style banner-6">
              <h4>"We Treat Every Guest As If they’re Our Only Guest, Every Time"</h4>
            </div>
          </div>
          <!-- Slide Banner 7 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/pierhouse8.png" alt="...">
            <div class="carousel-caption">
              Pierhouse At Channelside, Tampa
            </div>
            <div class="slide7-banner slide7-style banner-7">
              <h4><a href="/contact">Request a Quote</a><i class="fa fa-suitcase" aria-hidden="true"></i></h4>
            </div>
          </div>
          <!-- Slide Banner 8 -->
          <div class="item">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/carousel/bell-channelside-furnished-apartments.png" alt="...">
            <div class="carousel-caption">
              Bell Channelside, Tampa Florida
            </div>
            <div class="slide8-banner">
              <div class="link1 slide8-style"><a href="properties/tampa">Tampa</a></div>
              <div class="link2 slide8-style"><a href="properties/jacksonville">Jacksonville</a></div>
              <div class="link3 slide8-style"><a href="properties/orlando">Orlando</a></div>
              <div class="link4 slide8-style"><a href="properties/st_petersburg">St. Petersburg</a></div>
            </div>
          </div>
        </div>
        <!-- CONTROLS -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon fa fa-angle-left nav-control-arrows" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon fa fa-angle-right nav-control-arrows" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- COMPANY INFORMATION -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class='border-left-accent'><span class="drop-caps">W</span><?php the_content()?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- FEATURED LISTINGS HEADER -->
    <div class="featured-listings-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Featured Listings</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- FEATURED LISTINGS -->
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/bell-channelside">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/bell-channelside1.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Bell Channelside
                    </div>
                    <div class="location-link">
                      <a href="/bell-channelside">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    South Tampa
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Bell Channelside
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/citigate-apartments">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/citigate2.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header">
                      Citigate Apartments
                    </div>
                    <div class="location-link">
                      <a href="/citigate-apartments">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    Jacksonville
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Citigate
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/steelhouse-orlando">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/steelhouse1.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Steelhouse
                    </div>
                    <div class="location-link">
                      <a href="/steelhouse-orlando">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    Orlando
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  SteelHouse
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/millennium-westshore">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/Millennium5.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Millennium
                    </div>
                    <div class="location-link">
                      <a href="/millennium-westshore">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    Tampa
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Millennium
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/links-at-pebble-creek">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/links2.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Links at Pebble Creek
                    </div>
                    <div class="location-link">
                      <a href="/links-at-pebble-creek">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    Wesley Chapel
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Links at Pebble Creek
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/fusion-1560">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/fuzion4.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Fusion 1560
                    </div>
                    <div class="location-link">
                      <a href="/fusion-1560">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    St. Petersburg
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Fusion 1560
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/varela-westshore">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/varela1.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Varela
                    </div>
                    <div class="location-link">
                      <a href="/varela-westshore">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    South Tampa
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Verela
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30">
            <a href="/pierhouse">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/peirhouse1.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Pierhouse
                    </div>
                    <div class="location-link">
                      <a href="/pierhouse">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    South Tampa
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Pierhouse
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-xs-6 -webkit-box single-col margin-bottom-30" id="featureListingCenter">
            <a href="/lofts-at-sodo">
              <div class="thumbnail">
                <div class="overlay">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/featuredProperties/sodo1.png" class="img-responsive border-1px-black-radius-3">
                  <div class="effect">
                    <div class="overlay-header overlay-header-after-visible">
                      Lofts at SoDo
                    </div>
                    <div class="location-link">
                      <a href="/lofts-at-sodo">View Building</a>
                    </div>
                  </div>
                  <div class="locationCity">
                    Orlando
                  </div>
                </div>
                <div class="location-name-mobile-show">
                  Lofts at SoDo
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- CITY LINKS -->
    <section>
      <div class="container-fluid banner">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-3 column top">
              <h3 class="text-center location-banner">Tampa</h3><span class="fa fa-fw fa-chevron-down"></span>
              <div class="divider"></div>
              <div class="banner-dropdown layer4">
                <ul>
                  <a href="/bell-channelside"><li class="border-top border-bottom">Bell Channelside</li></a>
                  <a href="/pierhouse"><li class="border-bottom">Pierhouse at Channelside</li></a>
                  <a href="/skyhouse-tampa"><li class="border-bottom">Skyhouse Channelside</li></a>
                  <a href="/millennium-westshore"><li class="border-bottom">Millenium Westshore</li></a>
                  <a href="/modera"><li class="border-bottom">Modera Westshore</li></a>
                  <a href="/varela-westshore"><li class="border-bottom">Varela Westshore</li></a>
                  <a href="/links-at-pebble-creek"><li class="border-bottom">Links at Pebble Creek</li></a>
                  <a href="/crosstown-walk"><li class="border-bottom">Crosstown Walk</li></a>
                  <a href="/broadstone-at-citrus-village"><li class="border-bottom border-radius-bottom">Broadstone at Citrus Village</li></a>
                </ul>
              </div>
            </div>
            <div class="col-md-3 column middle-top">
              <h3 class="text-center location-banner">Jacksonville</h3><span class="fa fa-fw fa-chevron-down"></span>
              <div class="divider"></div>
              <div class="banner-dropdown layer3">
                <ul>
                  <a href="/citigate-apartments"><li class="border-top border-bottom">Citigate Apts</li></a>
                  <a href="/arelia-james-island"><li class="border-bottom">Arelia James Island Apts</li></a>
                  <a href="/lost-lake-apartments"><li class="border-bottom">Lost Lake Apts</li></a>
                  <a href="/coventry-park-apartments"><li class="border-bottom">Coventry Park</li></a>
                  <a href="/terraces-at-town-center"><li class="border-bottom">Terraces at Town center</li></a>
                  <a href="/sorrel-luxury-apartments"><li class="border-bottom border-radius-bottom">Sorrel Luxury Apts</li></a>
                </ul>
              </div>
            </div>
            <div class="col-md-3 column middle-bottom">
              <h3 class="text-center location-banner">Orlando</h3><span class="fa fa-fw fa-chevron-down"></span>
              <div class="divider"></div>
              <div class="banner-dropdown layer2">
                <ul>
                  <a href="/steelhouse-orlando"><li class="border-top">SteelHouse Orlando</li></a>
                  <a href="/skyhouse-orlando"><li class="border-top border-bottom">SkyHouse Orlando</li></a>
                  <a href="/lofts-at-sodo"><li class="border-bottom border-radius-bottom">Lofts at SoDo</li></a>
                </ul>
              </div>
            </div>
            <div class="col-md-3 column bottom">
              <h3 class="text-center location-banner">St. Petersburg</h3><span class="fa fa-fw fa-chevron-down"></span>
              <div class="divider"></div>
              <div class="banner-dropdown layer1">
                <ul>
                  <a href="/azure-apartments"><li class="border-top border-bottom">Azure</li></a>
                  <a href="/aura-at-4th"><li class="border-bottom">Aura@4th</li></a>
                  <a href="/fusion-1560"><li class="border-bottom">Fusion 1560</li></a>
                  <a href="/elan-gateway"><li class="border-bottom border-radius-bottom">Elan Gateway</li></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CALL TO ACTION -->
    <section>
      <div id="sunrise">
        <div id="cta-section">
          <p>Experience Florida</p>
          <h4>With Cornerstone Furnished Solutions</h4>
          <div id="cta-button">
            <a href="/contact">Contact Us</a>
          </div>
        </div>
      </div>
    </section>
    <!-- EASY STEPS -->
    <section>
      <h1 id="easySectionHeader">WE MAKE IT EASY!</h1>
      <div class="container-fluid easySteps">
        <div row="row">
          <div class="col-md-12 stepsContainer">
            <div class="col-md-8 col-md-offset-2 stepContainer">
              <div class="step">
                <p>1</p>
              </div>
              <div class="contactMethodContainer">
                <div class="stepText stepOne"><p>Contact Us</p></div>
                <a href="/contact-us">
                  <div class="contactMethods">
                    <span class="fa fa-file-text-o" aria-hidden="true"></span>
                    <p id="quote-text">QUOTE</p>
                  </div>
                </a>
                <a href="mailto:kelly@cfs-worldwide.com">
                  <div class="contactMethods">
                    <span class="fa fa-fw fa-envelope-o"></span>
                    <p id="email-text">EMAIL</p>
                  </div>
                </a>
                <a href="tel:+1-813-263-7705">
                  <div class="contactMethods" id="floatRight">
                    <span class="fa fa-fw fa-phone"></span>
                    <p id="phone-text">PHONE</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-8 col-md-offset-2 stepContainer">
              <div class="step">
                <p>2</p>
              </div>
              <div class="stepText stepTwoToFour"><p>We’ll help you <br class="br"> select your <br>  perfect furnished apartment</p></div>
            </div>
            <div class="col-md-8 col-md-offset-2 stepContainer">
              <div class="step">
                <p>3</p>
              </div>
              <div class="stepText stepTwoToFour"><p>Complete our <br> reservation form</p></div>
            </div>
            <div class="col-md-8 col-md-offset-2 stepContainer">
              <div class="step">
                <p>4</p>
              </div>
              <div class="stepText stepTwoToFour"><p>Move into <br class="br"> your beautifully <br> furnished apartment home</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- RECENT BLOGS/SELLING POINTS -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-6 featured-posts-container">
              <h2 class='text-left featured-posts'><span class="fa fa-fw fa-newspaper-o"></span>Featured Posts</h2>
              <ul class="padding-start-zero">
              <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=6');
              ?>
              <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                  <li class="featured-post-links">
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_limit(60, '...'); ?></a>
                  </li>

              <?php endwhile; ?>
              </ul>
            </div>
            <div class="col-md-6 bullet-points">
              <div>
                <h2>The Finest In Short-Term Housing</h2>
                <ul>
                  <li><span class="fa fa-fw fa-plus icons"></span>Over 3 decades of experience</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>Fully Equipped Kitchens with Full-size appliances</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>One Comprehensive Monthly Statement</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>Flexible lease terms</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>All major credit cards accepted</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>Competitive Pricing</li>
                  <li><span class="fa fa-fw fa-plus icons"></span>Unsurpassed Customer Service</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>



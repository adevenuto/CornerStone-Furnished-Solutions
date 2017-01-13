<?php
/*
Template Name: About Us Page
 */
?>
<?php get_header(); ?>

<!-- ABOUT -->
<div id="about-page-background-image"></div>
<div class="content-offset">
  <div class="container-fluid">
    <div class="row">
      <div class="about-page-header-container about-page-header">
        <h4>Why Choose Cornerstone</h4>
      </div>
    <div id="triangle-down-male"></div>
  </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="about-page-body-container">
        <div class="col-xs-6" id="triangle-down-left-female"></div>
        <div class="col-xs-6" id="triangle-down-right-female"></div>
        <div class="col-md-12 about-page-body-text-container">
          <p><?php the_content() ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-page-affiliation-image">
          <img src="<?php bloginfo("template_directory")?>/assets/img/chpa.png" alt="CHPA Logo" class="img-responsive chpa">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="customer-logo-container-header-container">
          <div class="about-page-header-container">
          <h4>Over the years we have had the opportunity to work with many wonderful individuals and companies, including:</h4>
          </div>
          <div id="triangle-down-male"></div>
        </div>
        <div class="col-xs-6" id="triangle-down-left-female"></div>
        <div class="col-xs-6" id="triangle-down-right-female"></div>
        <div class="col-md-12 customer-logo-container">
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers1.png" alt="Shriners Hospitals" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers2.png" alt="New York Yankees" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers3.png" alt="Sports Illustrated" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers4.png" alt="ABC News" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers5.png" alt="Price Waterhouse Coopers" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers6.png" alt="Deloitte & Touche" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers7.png" alt="Tampabay buccaneers" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers8.png" alt="Microsoft" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers9.png" alt="Booz Allen Hamilton" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers10.png" alt="Florida Hospital" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers11.png" alt="Bloomin Brands" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-3"><img src="<?php bloginfo("template_directory")?>/assets/img/customerlogos/customers12.png" alt="Laser Spine Institute" class="img-responsive"/></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-page-header-container">
          <div id="triangle-down-2"></div>
          <h4>Our philosophy is, and has always been, to treat every guest as if they’re our only guest, <i>every time</i>.  Very simply, we will provide you with the finest accommodations at the very best price and customer care that is unsurpassed.</h4>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part( 'partial/links-container-partial' ); ?>
</div>

<?php get_footer(); ?>
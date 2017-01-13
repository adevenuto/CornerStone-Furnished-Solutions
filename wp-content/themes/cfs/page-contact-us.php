<?php
/*
Template Name: Contact Us Page
 */
?>
<?php get_header(); ?>
<div id="small-dot-background-pattern"></div>
<div class="content-offset">
  <div class="container" id="contact-form-page">
    <div class="row">
      <div class="col-md-12">

        <div class="col-md-7" id="contact-form-container">
          <h1>Cornerstone Furnished Solutions</h1>
          <h5>After submitting your furnished housing request, you will receive detailed information for your desired location along with our all-inclusive price quote for your fully furnished apartment.</h5>
          <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
        </div>
        <div class="col-md-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>

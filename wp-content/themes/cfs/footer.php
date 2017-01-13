<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cornerstone_Furnished_Solutions
 */

?>



<?php wp_footer(); ?>
<!-- FOOTER -->
<section>
  <footer id="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 footer-nav">
          <ul class="nav">
            <li class="footer-nav-li"><a href="/">Featured Suites</a></li>
            <li class="footer-nav-li"><a href="/faqs-page">FAQ's</a></li>
            <li class="footer-nav-li"><a href="/blog">Blogs</a></li>
          </ul>
        </div>
        <div class="col-sm-3 footer-nav">
          <ul class="nav">
            <li class="footer-nav-li"><a href="/whats-included">Whats Included</a></li>
            <li class="footer-nav-li"><a href="/about-us">About</a></li>
            <li class="footer-nav-li"><a href="/contact-us">Request a Quote</a></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="list-inline">
            <li><a href="https://twitter.com/CFS_Worldwide"><i class="fa fa-fw fa-twitter-square"></i></a></li>
            <li><a href="https://www.facebook.com/CornerstoneFurnishedSolutions"><i class="fa fa-fw fa-facebook-square"></i></a></li>
            <li><a href="https://plus.google.com/+Cornerstonefurnishedsolutions"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
            <li><a href="https://www.linkedin.com/company/cornerstone-furnished-solutions"><i class="fa fa-fw fa-linkedin-square"></i></a></li>
          </ul>
          <div>
            <h4 class='footer-contact-info' id="phone-number"><a href="tel:+1-813-263-7705">813.263.7705</a><span class="fa fa-fw fa-phone"></span></h4>
            <h4 class='footer-contact-info' id='address'>13014 N Dale Mabry Hwy #232,<br/>Tampa, FL 33618</h4>
            <h5 class='footer-contact-info' id='mail_to'><a href="mailto:kelly@cfs-worldwide.com">kelly@cfs-worldwide.com</a><span class="fa fa-fw fa-envelope-o"></span></h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 footer-b-left">&copy <?php the_date('Y'); ?> <a href="/">Cornerstone Furnished Solutions</a></div>
        <div class="col-sm-2 footer-b-right"><a href="index.html"><img src="<?php bloginfo('stylesheet_directory')?>/assets/img/cornerstone1.png" width="95" height="45" alt="Cornerstone Furnished Solutions Logo"></a></div>
      </div>
    </div>
  </footer>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>

=== Easy Testimonials ===
Contributors: richardgabriel, ghuger
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=V7HR8DP4EJSYN
Tags: testimonials, testimonial widget, testimonial feed, random testimonials
Requires at least: 3.1
Tested up to: 4.6
Stable tag: 2.0.13
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easy Testimonials is a simple-to-use plugin for adding Testimonials to your WordPress Theme, using a shortcode or a widget.

== Description ==

Easy Testimonials is an easy-to-use plugin that allows users to add Testimonials to the sidebar, as a widget, or to embed testimonials into a Page or Post using the shortcode.  Easy Testimonials also allows you to insert a list of all Testimonials or output a Random Testimonial. Easy Testimonials allows you to include an image with each testimonial - this is a great feature for adding a photo of the testimonial author.  Easy Testimonials uses schema.org compliant markup so that your testimonials appear correctly in search results!

= Easy Testimonials is a great plugin for: =
* Adding Random Testimonials to Your Sidebar
* Adding Random Testimonials to Your Page
* Outputting a List of Testimonials
* Outputting a Fading or Sliding Testimonial Widget
* Able To Use Multiple Testimonial Themes on the Same Page!
* Responsive Themes!
* Displaying an Image with a Testimonial
* Displaying a Testimonial with a Rating
* Displaying Testimonials using Schema.org compliant markup
* Options Allow You to Link Your Testimonials to a Page, Such As a Product Page
* Testimonial Categories Allow You To Easily Organize Testimonials!
* Easy-to-use interface allows you to manage, edit, create, and delete Testimonials with no new knowledge!

= Pro Features include: =
* Collect Testimonials: Front-End Testimonial Form Allows Customers to Submit Testimonials on your Website!
* Multiple Testimonial Forms: use multiple forms to send to specific Testimonial Categories!
* Testimonial Form Spam Prevention: support for Really Simple Captcha and ReCaptcha included!
* Designer Themes: 75+ professionally designed themes for front end display!
* Advanced Transitions: including scrolling, flipping, and tiling!
* Custom Typography Settings: perfectly blend your testimonials into your website with a huge selection of fonts, colors, and sizes, including Google fonts!

Easy Testimonials allows you to set the URL of the View More Link, to display the Testimonial Image, control meta field display, and more!  Controlling the URL of the Testimonials view more link enables you to direct visitors to the product info page that the testimonial is about.  Showing an Image next to a Testimonial is a great tool for social proofing!

Easy Testimonials allows display of custom excerpted Testimonials.  Display custom excerpts in your widgets that draw your visitors into your Testimonial archive!

Collecting Testimonials can be a tedious job - fortunately, in the Pro version of Easy Testimonials, adding a form to your website for users to submit Testimonials is a breeze!  Users can even upload an image with their Testimonial!  Easy Testimonials integrates with Really Simple Captcha and ReCaptcha to prevent spam testimonial submissions.

Easy Testimonials is the easiest way to start adding your customer testimonials, right now!  Click the Download button now to get started.  Easy Testimonials will inherit the styling from your Theme - just install and get to work adding your testimonials!

= Premium Support =

The GoldPlugins team does not provide direct support for Easy Testimonials on the WordPress.org forums. One on one email support is available to people who have purchased Easy Testimonials Pro only. Easy Testimonials Pro also includes tons of extra themes and advanced features including a Testimonial Collection Form, so you should [upgrade today!](https://goldplugins.com/our-plugins/easy-testimonials-details/upgrade-to-easy-testimonials-pro/ "Upgrade to Easy Testimonials Pro")

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the contents of `/easy_testimonials/` to the `/wp-content/plugins/` directory
2. Activate Easy Testimonials through the 'Plugins' menu in WordPress
3. Visit [here](https://goldplugins.com/documentation/easy-testimonials-documentation/ "Easy Testimonials Pro Documentation") for information on how to configure the plugin.

### Adding a New Testimonial

Adding a New Testimonial is easy! There are 3 ways to start adding a new testimonial

**How to Add a New Testimonial**

1.  Click on "+ New" -> Testimonial, from the Admin Bar *or*
2.  Click on "Add New Testimonial" from the Menu Bar in the WordPress Admin *or*
3.  Click on "Add New Testimonial" from the top of the list of Testimonials, if you're viewing them all.

**New Testimonial Content**

You have a few things to pay attention to:

-   **Testimonial Title:** this content can be displayed above your Testimonial.
-   **Testimonial Body:** this is the content of your Testimonial. This will be output and displayed about the Testimonial Information fields.
-   **Client Name:** This field is displayed first, below the Testimonial Body. The field title is just an example use - of course you don't have to put the client name here.
-   **Position / Location / Other:** This field is displayed second, below the Client Name. The field title is just an example use - you can put whatever you want here.
-   **Location / Product Reviewed / Other:**This field is optional and is displayed third, below Position / Location / Other. The field title is just an example of how it can be used - typically this item is used for the Item the Testimonial is being left about and will match the itemReviewed Schema.
-   **Rating:** This field is displayed in different locations, depending on your theme, and represents the out of 5 rating for the item reviewed. If you are collecting ratings with your Testimonials, place them in this field.
-   **Featured Image:** This image is shown to the left of the testimonial, as a 50px by 50px thumbnail by default.
-   **Testimonial Category:** This field is useful for grouping and organizing your Testimonials. This can be useful if you want to display Testimonials about a certain topic as a group.

### Editing a Testimonial

**This is as easy as adding a New Testimonial!**

1.  Click on "Testimonials" in the Admin Menu.
2.  Hover over the Testimonial you want to Edit and click "Edit".
3.  Change the fields to the desired content and click "Update".

### Deleting a Testimonial

**This is as easy as adding a New Testimonial!**

1.  Click on "Testimonials" in the Admin Menu.
2.  Hover over the Testimonial you want to Delete and click "Delete".

**You can also change the Status of a Testimonial, if you want to keep it on file.**

### Controlling Testimonial Theme via Shortcode

-   To select a theme via the Shortcode, use the following shortcode syntax: [testimonials theme='card_style-maroon']
-   To get the full list of Themes available to your version of Easy Testimonials, we recommend using the Shortcode Generator.

### Outputting Random Testimonials

-   To output a Random Testimonial, place the following shortcode in the desired area of the Page or Post Content:
     [random_testimonial]
-   To display more than one Random Testimonial, use the following shortcode, where count is the number of testimonials you want displayed.
     [random_testimonial count='3']
-   To display the title above the Random Testimonial and use excerpts (short versions of the Testimonial), use the following shortcode: 
     [random_testimonial show_title='1' use_excerpt='1']
-   To output Random Testimonials from a specific Category, with images, use the following shortcode: 
     [random_testimonial category='the_category_slug' show_thumbs='1']
-   To display the rating along with the random testimonial, use the following shortcode:
     [random_testimonial show_rating='stars']

    Possible values for show_rating are `show_rating=before`, for the rating to appear before the testimonial content, `show_rating=after`, for the rating to appear after the testimonial content, and `show_rating=stars`, to show the rating in stars format.
	
-   By default, the View More Testimonials link is displayed with Random Testimonials.  To hide this link, use the following shortcode: [random_testimonial hide_view_more=1]

### Output a List of Testimonials

-   To output a list of all the Testimonials, place the following shortcode in the desired area of the Page or Post Content:
     [testimonials]
-   To output a list of the 5 most recent Testimonials, use the following shortcode: 
     [testimonials count='5' order='DESC' orderby='date']

    Acceptable attributes for `'order'` are `'ASC'` and `'DESC'`.

    Acceptable attributes for `'orderby'` are `'none'`,`'ID'`,`'author'`,`'title'`,`'name'`,`'date'`,`'modified'`,`'parent'`, and `'rand'`

-   To display the title above the list of Testimonials and use excerpts (short versions of the Testimonial), use the following shortcode: 
     [testimonials show_title='1' use_excerpt='1']
-   To output Testimonials from a specific Category, with images, use the following shortcode: 
     [testimonials category='the_category_slug' show_thumbs='1']
-   To display the rating along with the testimonials, use the following shortcode:
     [testimonials show_rating='stars']

    Possible values for show_rating are `show_rating=before`, for the rating to appear before the testimonial content, `show_rating=after`, for the rating to appear after the testimonial content, and `show_rating=stars`, to show the rating in stars format.

-   To paginate the list of Testimonials, use the following shortcode: [testimonials paginate='1' testimonials_per_page='5']

-   By default, the View More Testimonials link is not displayed in the List of Testimonials.  To display this link, use the following shortcode: [testimonials hide_view_more=0]

### Output a Grid of Testimonials

-	To output a grid of all the Testimonials, place the following shortcode in the desired area of the Page or Post Content:
	[testimonials_grid]
-	To output a grid of the 5 most recent Testimonials, use the following shortcode:
	[testimonials_grid count='5' order='DESC' orderby='date']
	
	Acceptable attributes for `order` are `ASC` and `DESC`.
	Acceptable attributes for `orderby` are `none`,`ID`,`author`,`title`,`name`,`date`,`modified`,`parent`, and `rand`

-	To display the title above the grid of Testimonials and use excerpts (short versions of the Testimonial), use the following shortcode: 
	[testimonials_grid show_title='1' use_excerpt='1']

-	To output Testimonials from a specific Category, with images, use the following shortcode: 
	[testimonials_grid category='the_category_slug' show_thumbs='1']

-	To display the rating along with the testimonials, use the following shortcode:
	[testimonials_grid show_rating='stars']

	Possible values for show_rating are `show_rating=before`, for the rating to appear before the testimonial content, `show_rating=after`, for the rating to appear after the testimonial content, and `show_rating=stars`, to show the rating in stars format.

-	To paginate the grid of Testimonials, use the following shortcode:
	[testimonials_grid paginate='1' testimonials_per_page='5']
	
-	To ouput a grid of 4 specific testimonials by ID, use the following shortcode (update the values for ID to match the IDs of the desired testimonials.):
	[testimonials_grid ids=5,7,3,4]

-	To output a grid of Testimonials with 3 columns, spaced 3% apart, and each cell of the grid 25% wide, use the following shortcode:
	[testimonials_grid cols='3' grid_spacing="3%" cell_width="25%"]

-	To output a grid of Testimonials with 3 columns, spaced 3% apart, and each cell of the grid with the same height as others in it's row:
	[testimonials_grid cols='3' grid_spacing="3%" equal_height_rows="true"]
	
-   By default, the View More Testimonials link is displayed with the Grid of Testimonials.  To hide this link, use the following shortcode: [testimonials_grid hide_view_more=1]

### Output a Random Testimonial in the Sidebar

-   To output a Random Testimonial in the Sidebar, use the Widgets section of your WordPress Theme, accessible via the Appearance Menu in the WordPress Admin.
-   You can show more than one random testimonial by placing a number in the Count field.
-   You can choose a Category to pick the testimonial from, with the Category drop-down.
-   You can show the Date of the Testimonial by checking Show Testimonial Date.
-   You can show the Rating of the Testimonial by picking an option from the Show Rating drop-down.
-   You can show the Testimonial Title above the Testimonial by checking Show Testimonial Title. **Note: The Title Field on the Widget is displayed above the Widget, if your theme supports Widget Titles - this is different than the Testimonial Title.**

### Outputting a Testimonial Slider

-   **NOTE:** You can view live examples [here](https://goldplugins.com/documentation/easy-testimonials-documentation/easy-testimonials-examples/ "Example Testimonial Sliders").
-   Easy Testimonials Supports Cycle2! To output a sliding widget, use the following shortcode:
     [testimonials_cycle]
-   The same properties as the list of testimonials, such as Showing the Title and controlling the Count, also apply. To output a Testimonial Cycle using excerpts, from a specific category, with images, use the following shortcode: 
     [testimonials_cycle category='the-category-slug' use_excerpt='1' show_thumbs='1']
-   To show a randomly ordered Testimonial Cycle, use the following shortcode: 
     [testimonials_cycle random='true']
-   To show a sliding Testimonial Cycle, with 10 seconds between each transition, use the following shortcode: 
     [testimonials_cycle timer='10000' transition='scrollHorz']
-	To show a sliding Testimonial Cycle, with Previous and Next buttons, use the following shortcode:
	 [testimonials_cycle prev_next='1']
-	To show a sliding Testimonial Cycle, that only transitions when Prev or Next is clicked, use the following shortcode:
	 [testimonials_cycle paused='1' prev_next='1']
-	To show a sliding Testimonial Cycle, that pauses transitions when the mouse is hovering over the slideshow, use the following shortcode:
	 [testimonials_cycle pause_on_hover='1']

    To pick from our full list of available transitions, we recommend using the Shortcode Generator.

-   To show a sliding Testimonial Cycle, using the 5 most recent Testimonials ordered chronologically, use the following shortcode: 
     [testimonials_cycle count='5' order='DESC' orderby='date']

    Acceptable attributes for `'order'` are `'ASC'` and `'DESC'`.

    Acceptable attributes for `'orderby'` are `'none'`,`'ID'`,`'author'`,`'title'`,`'name'`,`'date'`,`'modified'`,`'parent'`, and `'rand'`

-   To show a Testimonial Cycle that automatically changes height to match the Testimonial body, use the following shortcode: 
     [testimonials_cycle auto_height='container']
-	To show a Testimonial Cycle that sets the slideshow height to the height of tallest Testimonial, use the following shortcode:
	 [testimonials_cycle auto_height='calc']
-   To show a Testimonial Cycle with 3 Testimonials per Slide and Pager Icons below the Slider, use the following shortcode: 
     [testimoanials_cycle pager='1' testimonials_per_slide='3']
	 
-   By default, the View More Testimonials link is displayed with the Testimonials Cycle.  To hide this link, use the following shortcode: [testimonials_cycle hide_view_more=1]

### Outputting a Testimonial Slider in the Sidebar

-   To output a Testimonial Cycle in the Sidebar, use the Widgets section of your WordPress Theme, accessible via the Appearance Menu in the WordPress Admin.
-   You can control how many testimonials are shown by placing a number in the Count field - make sure you have at least 2, if you want them to Cycle!
-   You can show the Date of the Testimonial by checking Show Testimonial Date.
-   You can control the number of Testimonials Per Slide by using the Testimonials Per Slide input.
-   You can show clickable pager icons below the Testimonial slideshow by checking Show Pager Icons.
-   You can Randomize the order of the Slideshow by checking Random Testimonial Order.
-   You can limit the length of the Testimonial to just the Excerpt by checking Use Testimonial Excerpt.
-   You can show the Testimonial Title above the Testimonial by checking Show Testimonial Title. **Note: The Title Field on the Widget is displayed above the Widget, if your theme supports Widget Titles - this is different than the Testimonial Title.**
-   You can control the time between transitions using the Timer field - every 1000 equals 1 second.
-   You can choose a Category to pick the testimonial from, with the Category drop-down.
-   You can show the Rating of the Testimonial by picking an option from the Show Rating drop-down.

### Front End Testimonial Submission

-   **NOTE:** This feature requires the [Pro version of Easy Testimonials](https://goldplugins.com/our-plugins/easy-testimonials-details/ "Easy Testimonials Pro").
-   To display the Testimonial Submission Form, use the following shortcode: 
     [submit_testimonial]
-   To display the Testimonial Submission Form and have it submit directly to a category, use the following shortcode: 
     [submit_testimonial submit_to_category="desired-category-slug"]
-   Any submissions will be added to your Testimonials list, on the back end, as pending Testimonials. Only Testimonials that you choose to publish will be displayed publicly.
-   Captcha support is enabled with the installation of the [Really Simple Captcha plugin](https://wordpress.org/plugins/really-simple-captcha/ "Really Simple Captcha").
-   Front End Image Submission is enabled via a checkbox on the Submission Form Options tab.
-   Labels, descriptions, and visibility of fields can be controlled via the Submission Form Options screen.

### Using Filters to Customize Output

We provide the following filters to developers for customizing output even further:

-   `easy_t_random_testimonials_html` -- random testimonials filter
-   `easy_t_single_testimonial_html` -- single testimonial filter
-   `easy_t_testimonials_html` -- all testimonials list filter
-   `easy_t_testimonials_cyle_html` -- testimonials cycle filter
-   `easy_t_submission_form` -- testimonial submission form
-	`easy_t_get_single_testimonial_html` -- single testimonial html filter, all output functions use this to build each testimonials html
-   `easy_t_get_pagination_link_template` -- pagination link template filter, use this to modify the display of the previous, next, and page number links in paged testimonials

### Outputting a Count of your Testimonials

-   To display a numerical Count of your Testimonials, use the following shortcode where you want the Number to appear: 
     [testimonials_count]
-   To display a numerical Count of your pending Testimonials from a specific category, use the following shortcode: 
     [testimonials_count status='pending' category='gold-plugins']
-   Supported parameters for `status` are `publish`,`pending`,`draft`,`future`,`private`,`trash`,`any`. For example, the following shortcode will display a count of all Testimonials, excluding those in the Trash: 
     [testimonials_count status='any']
-   **Note:** this Shortcode only displays the numerical count -- you will need to add any words yourself. For example, "There are currently [testimonials_count] Testimonials on your website!"

### Outputting an Aggregate Rating of all Testimonials on your Site

-   To display aggregate rating of your Testimonials, use the following shortcode where you want the schema.org markup to appear: 
     [testimonials_count show_aggregate_rating='1']
-   **Note:** This will use the Global Item Reviewed option, from your plugin's settings tabs.

### Outputting a Testimonials Search Form

-   To display a form that Searches your Testimonials, use the following shortcode:
     [easy_t_search_testimonials]

### Options

-   To control the destination of the "View More" link, set the path in the Testimonials View More Link field.
-   To display any Featured Images that you have attached to your Testimonials, check the box next to Show Testimonial Image.
-   To display any Testimonial Information above the content, check the box next to Show Testimonial Info Above Testimonial.
-   To add any Custom CSS, to further modify the output of the plugin, input the CSS in the textarea labeled Custom CSS. You do not need to include the opening or closing <style> tags, treat it like you're inside a CSS file.
-   To pick a global theme, use our Themes tab to browse the available choices.
-   To control the display of the Testimonial Submission Form, use the Submission Form Options tab.
-   To customize the appearance of your Testimonials, use the Display Options tab.
-   To Show Testimonials in Public Search, use the Show in Search checkbox on the Basic Settings Page.
-   To change your Registered Shortcodes, in case of conflict with theme or other plugins, use the Shortcode Options section on the Basic Settings screen.

== Frequently Asked Questions ==

= Help!  I need more information! =

OK!  We have a great page with some helpful information [here](https://goldplugins.com/documentation/easy-testimonials-documentation/ "Easy Testimonials Pro Documentation").

= I Updated, and my formatting changed! =

Yikes!  Before 1.7.2, we were not respecting the content filter when outputting testimonials.  So, you may have to update the CSS of paragraph tags inside .testimonial_body.  For more information, contact us via our website or support forum.

= Hey!  How do I allow my visitors to submit testimonials? =

Great question!  With the Pro version of the plugin, you can do this with our front end form that is output with a shortcode!  Testimonials will show up as pending on the Dashboard, for admin moderation.  Visit [here](https://goldplugins.com/our-plugins/easy-testimonials-details/ "Easy Testimonials Pro") to purchase the Pro version.

= Urk! When I Activate Easy Testimonials, I start having trouble with my Cycle2 powered JavaScript! =

Oh no!  Check the box that is labeled "Disable Cycle2 Output".  This will cease including our JavaScript.

= Yo!  Your plugin is great - I would really like to change the size of the images that are output.  How do I do it? =

Another good question!  With the Pro version of the plugin, you can do this by controlling the Testimonial Image Size drop down menu on the Settings screen.  Depending on your website, using bigger images may require CSS changes to be made.  Visit [here](https://goldplugins.com/our-plugins/easy-testimonials-details/ "Easy Testimonials Pro") to purchase the Pro version.

= Eek!  I love everything about this plugin... but, I don't know how to use it inside my Template Files!  What do I do? =

Don't worry!  WordPress has a great function, ```do_shortcode()```, that will allow you to use our shortcodes inside your theme files.  For example, to output a Random Testimonial in a Theme file, you would do this: ```<?php echo do_shortcode('[random_testimonial count="1"'); ?>```

= Arg!  When using the testimonial Cycle widget, I get weird overlapping text.  What gives? =

You need to update your CSS.  Try something like ```blockquote.easy_testimonial{ background-color: white; }```

= Ack!  This Testimonials Plugin is too easy to use! Will you make it more complicated? =

Never!  Easy is in our name!  If by complicated you mean new and easy to use features, there are definitely some on the horizon!

= Yikes!  I'm getting a ton of spam! =

Never fear, Captcha support is here!  Go install and activate the plugin Really Simple Captcha.  Once done, make sure you have the "Enable Captcha on Submission Form" box checked on your settings, and you should be good to go!

= Help!  I'm having issues getting the Slider to work on my site! =

Never fear, the "Use Cycle Fix" option is here!  Try checking this option and fully refreshing the page (to make sure any and all caches have cleared) -- hopefully everything is working now!

= Blech!  Some of my testimonials are too tall and the text is cut off by the bottom of the slider!  What gives?! =

Ok!  We have the solution to adjust the height to display all of your testimonial!  Use the attribute ```container='1'``` in your shortcode and the javascript will adjust the height to match the content on each transition.

= Hiyo!  My customers are submitting testimonials but no images are showing up.  What gives? =

As a security precaution, our plugin only allows users to upload images of the following file types: PNG, JPG, or GIF.  If they attempt to upload a different file type, or choose not to upload an image, then no image will be attached to the Testimonial.

= What's Going On?!  When I use the [testimonials] shortcode, I'm not seeing anything that looks right! =

Sometimes, your theme or other plugins have shortcodes in the same namespace as ours.  In case you suspect this is happening, use the Shortcode Options on the Basic Settings screen to change our shortcodes -- typically adding easy_ to our shortcodes will fix the problem!

= Hey! How do I change the Width of my Testimonials?! =

Easy!  Just add the attribute width=500px or width=33% (be sure to use the full value, ie 500px, or 33% - otherwise it won't work!)  If not set, Testimonials will size to their container.

== Screenshots ==

1. This is the Add New Testimonial Page.
2. This is the List of Testimonials - from here you can Edit or Delete a Testimonial.
3. This is the Basic Settings Page.
4. This is the Display Options Settings Page.
5. This is the Themes Selection Page.
6. This is the Submission Form Settings Page.
7. This is the Shortcode Generator.
8. This is the Import & Export Testimonials Page.
9. This is the Help & Instructions Page.
10. This is the Random Testimonial Widget.
11. This is the Testimonial Cycle Widget.
12. This is the Testimonial List Widget.
13. This is the Single Testimonial Widget.
14. This is the Testimonial Grid Widget.

== Changelog ==
= 2.0.13 =
* Update Admin UI to work when other plugins or themes have enqueued jQueryUI on every admin screen.
* Update content filtering to have better compatibility with other shortcodes inside testimonials.
* Update for compatibility with PageBuilder by Site Origin.
* Allow all image sizes to work in Free version.


* [View Changelog](https://goldplugins.com/documentation/easy-testimonials-documentation/easy-testimonials-changelog/ "View Changelog")

== Upgrade Notice ==

**2.0.13** Important Update Available!
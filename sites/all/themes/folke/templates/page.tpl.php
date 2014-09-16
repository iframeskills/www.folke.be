<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header class="<?php print $classes; ?>">
  <section class="header l-grid-wrapper l-grid-wrapper--nogutter">
    <div class="l-grid l-main-width-limiter">
      <section class="header__logo l-grid__item one-whole tablet-one-third">
        <a href="/">
          <h1>Folke</h1>
        </a>
      </section>
      <section class="align-right l-grid__item mobile-hidden tablet-two-thirds">
        <nav class="header__menu clearfix">
          <a href="/contact" class="header__menu__item">Contact</a> | 
          <a href="https://www.facebook.com/pages/Folke/117325435058994"><img  src="/sites/all/themes/folke/img/facebook.png" alt="Facebook" width="35" height="34"></a>
        </nav>
        <div class="header__phone"><a href="tel:+32052481290">+32 (0) 52 / 48 12 90</a></div>
      </section>
    </div>
  </section>
  <nav class="submenu clearfix">
    <?php print render($page['menu']) ?>
    <a href="#" id="pull" class="tablet-hidden desk-hidden">Menu</a>
  </nav>
</header>
<section class="main-content clearfix <?php print $classes; ?>" style="background: white; position:relative;">
	<?php if ($is_front == 1){ 

    print views_embed_view('front_sticky', 'block'); ?>
		<section class="l-main-width-limiter " style="padding: 1em 0;">
			<div class="l-grid-wrapper ">
  			<div class="l-grid">
  				<?php print views_embed_view('front', 'block'); ?>
  			</div>
  		</div>
		</section>
	<?php 
    } else { 
		  print render($page['content']); 
    }  
	?>
</section>
<footer class="footer <?php print $classes; ?>">
<div class="l-grid-wrapper l-grid-wrapper--nogutter">
    <div class="l-grid l-main-width-limiter">
        <div class="l-grid__item one-whole tablet-one-half desk-one-quarter">
            <div class="divider__block">
                 <?php print render($page['footer_first']) ?>
             </div>
        </div>
        <div class="l-grid__item one-whole tablet-one-half desk-one-quarter">
             <div class="divider__block">
                <?php print render($page['footer_second']) ?>
            </div>
        </div>
        <div class="l-grid__item one-whole tablet-one-half desk-one-quarter">
            <div class="divider__block">
                <?php print render($page['footer_third']) ?>
                </div>
        </div>
        <div class="l-grid__item one-whole tablet-one-half desk-one-quarter">
            <div class="divider__block divider__block--last">
                <?php print render($page['footer_fourth']) ?>
            </div>
        </div>
    </div>
</div>
<?php print render($page['footer']) ?>
</footer>

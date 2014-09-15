<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
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
          <a href="/contact" class="header__menu__item">Contact</a>
        </nav>
        <div class="header__phone"><a href="tel:+32052481290">+32 (0) 52 / 48 12 90</a></div>
      </section>
    </div>
  </section>
  <nav class="submenu clearfix">
  <?php echo $content; ?>
  <a href="#" id="pull" class="tablet-hidden desk-hidden">Menu</a>
  </nav>
</header>
<!-- HEADER END -->
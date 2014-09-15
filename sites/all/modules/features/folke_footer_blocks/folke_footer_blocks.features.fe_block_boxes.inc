<?php
/**
 * @file
 * folke_footer_blocks.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function folke_footer_blocks_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'First Column in the footer';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'footer_column_1';
  $fe_block_boxes->body = '<ul class="divider__block divider__block--first"><li><h3>Sitemap</h3></li><li><a href="#">Home</a></li><li><a href="#">Over folke</a></li><li><a href="#">Contact</a></li></ul>';

  $export['footer_column_1'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Second column in the footer';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'footer_column_2';
  $fe_block_boxes->body = '<ul class="divider__block"><li><h3>Webshop</h3></li><li><a href="#">Home</a></li><li><a href="#">Over folke</a></li><li><a href="#">Contact</a></li><li><a href="#">Home</a></li><li><a href="#">Over folke</a></li><li><a href="#">Contact</a></li></ul>';

  $export['footer_column_2'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Third column in the footer';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'footer_column_3';
  $fe_block_boxes->body = '<div class="divider__block"><h3>Openingsuren</h3><p>Ma. t.e.m vrij: <br /> 8:30 - 12:00 en 13:00 - 17:00 <br /> Gesloten op zaterdag en zondag</p><h3>Mijn Gegevens</h3><ul><li><a href="#">Winkelmandje</a></li><li><a href="#">Login</a></li></ul></div>';

  $export['footer_column_3'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Fourth footer column';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'footer_column_4';
  $fe_block_boxes->body = '<div class="divider__block divider__block--last"><h3>Contacteer Ons</h3><p>Schurhovenveld 4361 <br /> 3800 Sint-Ttruiden <br /> Tel +32 (0) 11 / 782 698 <br /> Tel +32 (0) 11 / 363 670 <br /> Fax +32 (0) 11 / 832 536 <br /> <a class="contact-link" href="#">info@folke.be</a></p><h3>Volg ons op</h3></div>';

  $export['footer_column_4'] = $fe_block_boxes;

  return $export;
}

<?php
/**
 * @file
 * folke_footer_blocks.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function folke_footer_blocks_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['block-footer_column_1'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'footer_column_1',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'folke' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'folke',
        'weight' => -11,
      ),
    ),
    'title' => 'Footer Column 1',
    'visibility' => 0,
  );

  $export['block-footer_column_2'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'footer_column_2',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'folke' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'folke',
        'weight' => -10,
      ),
    ),
    'title' => 'Footer Column 2',
    'visibility' => 0,
  );

  $export['block-footer_column_3'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'footer_column_3',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'folke' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'folke',
        'weight' => -9,
      ),
    ),
    'title' => 'Footer Column 3',
    'visibility' => 0,
  );

  $export['block-footer_column_4'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'footer_column_4',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'folke' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'folke',
        'weight' => -8,
      ),
    ),
    'title' => 'Footer Column \'',
    'visibility' => 0,
  );

  return $export;
}

<?php

/**
 * @file
 * Template overrides and (pre-)process hooks for the Folke base theme.
 */


/**
 * Implements hook_preprocess_html_tag().
 */

function folke_preprocess_html_tag(&$vars)
{
    /* first bring base url to scope */
    global $base_url;

    $theme_js_path = '/' . drupal_get_path('theme', 'folke') . '/js';
    drupal_add_js($theme_js_path . '/lib/require.js');

    //add data-main attribute to our require.js script tag, pointing to the js/dpp.js file
    if (isset($vars['element']['#attributes']['src'])) {
        $attributes =& $vars['element']['#attributes'];

        $pattern = "#{$theme_js_path}/lib/require\.js#";

        if (preg_match($pattern, $attributes['src'])) {
            $attributes['data-main'] = $base_url . $theme_js_path . '/folke';
        }
    }
}

/*
function topcold_css_alter(&$css)
{
    unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
    unset($css[drupal_get_path('module', 'system') . '/system.messages.css']);
    unset($css[drupal_get_path('module', 'comment') . '/comment.css']);
    unset($css[drupal_get_path('module', 'field') . '/theme/field.css']);
    unset($css[drupal_get_path('module', 'node') . '/node.css']);
    unset($css[drupal_get_path('module', 'search') . '/search.css']);
    unset($css[drupal_get_path('module', 'user') . '/user.css']);
    unset($css[drupal_get_path('module', 'views') . '/css/views.css']);
    unset($css[drupal_get_path('module', 'ctools') . '/css/ctools.css']);
    unset($css[drupal_get_path('module', 'toolbar') . '/toolbar.css']);
}


function topcold_js_alter(&$js)
{
    unset($js[drupal_get_path('module', 'panels') . '/js/panels.js']);
    unset($js[drupal_get_path('module', 'views') . '/js/views.js']);
    unset($js[drupal_get_path('module', 'views') . '/js/ajax_view.js']);
    unset($js[drupal_get_path('module', 'views') . '/js/base.js']);
    unset($js[drupal_get_path('module', 'toolbar') . '/toolbar.js']);
}
*/



function folke_preprocess_region(&$vars)
{
    $vars['theme_hook_suggestions'][] = 'region__' . $vars['region'];
}


/*
function folke_menu_link__main_menu($vars)
{
    $element = $vars['element'];

    //checking for level :
    $level = 1;
    if (isset($element['level'])) {
        $level = $element['level'];
    }

    switch ($level) {
        case 1:
            if (!empty($element['#below'])) {
                $output = '<li class="m-table__cell submenu__item submenu__item--extra">';

            } else {
                $output = '<li class="m-table__cell"> ';
            }
            if (!empty($element['#below'])) {
                $output .= '<span class="submenu__item__label">' . $element['#title'] . ' </span>';
                $output .= '<span class="m-arrow m-arrow--down--blue"></span></a>';
                $output .= '<div class="submenu__item__hover">
							<ul class="submenu__item__hover__wrapper m-table l-main-width-limiter">';
                foreach (element_children($element['#below']) as $child_id) {
                    $element['#below'][$child_id]['level'] = 2;
                }
                $output .= drupal_render($element['#below']);
                $output .= '</ul>
						</div>';

            } else {
                $output .= '<a href="'.$element['#href'].'" class="submenu__item"> <span class="submenu__item__label">' . $element['#title'] . ' </span></a>';
            }
            $output .= '</li>';
            return $output;

        case 2:

            $first = '';
            if( $element['#attributes']['class'][0] == 'first' ){ $first.= 'divider__block--first'; }

            $output = '';
            $output .= '<li class="m-table__cell">
									<ul class="divider__block '. $first .'"> ';
            foreach (element_children($element['#below']) as $child_id) {
                $element['#below'][$child_id]['level'] = 3;
            }
            $output .= drupal_render($element['#below']);

            $output .= ' </ul>
								</li>';
            return $output;

        case 3:
            $output = '';
            $output .= '<li><h3>' . $element['#title'] . '</h3></li>';

            foreach (element_children($element['#below']) as $child_id) {
                $element['#below'][$child_id]['level'] = 4;
            }
            $output .= drupal_render($element['#below']);
            return $output;
        case 4:
            return '<li><a href="' . $element['#href'] . '">' . $element['#title'] . '</a ></li> ';

    }

}


function folke_menu_tree__main_menu($var)
{
    return $var['tree'];
}
*/

function folke_preprocess_node(&$variables, $hook) {
    if( $variables['is_front']){
        $variables['theme_hook_suggestions'][]='node__front';
    } ;

}

function folke_node_view_alter(&$build) {
    if ($build['#node']->type == 'page') {
        unset($build['links']['node']['#links']['node-readmore']);
    }
}
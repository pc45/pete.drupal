<?php

/**
 * @file
 * template.php
 */

/**
 *
 * add bootstrap image class to images
 */

function pete_subtheme_preprocess_image(&$vars) {
  $vars['attributes']['class'][] = 'img-responsive';
  // http://getbootstrap.com/css/#overview-responsive-images
}

function pete_subtheme_preprocess_html(&$variables) {
  $variables['attributes_array']['id'] = 'page-top';
}

/**
 * Overrides theme_menu_tree().
 * Add 'navbar-right' class to Primary menu
 */

function pete_subtheme_menu_tree__primary(&$variables) {
  return '<ul class="nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}
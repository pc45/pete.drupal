<?php

/**
 * @file
 * template.php
 */

/**
 *
 * add bootstrap image class to images
 */

function pete_subtheme_preprocess_image_style(&$vars) {
  $vars['attributes']['class'][] = 'img-responsive';
  // http://getbootstrap.com/css/#overview-responsive-images
}

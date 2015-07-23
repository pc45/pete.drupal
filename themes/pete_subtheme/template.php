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
  $vars['attributes']['class'][] = 'img-thumbnail';
  // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}

<?php

/**
 * Implements hook_drush_command().
 */
function drupalers_drush_command() {

  $items['drush-demo-command'] = array(
    'description' => 'Demonstrate how Drush commands work.',
    'aliases' => array('ddc'),
    'arguments'   => array(
      'start'     => "start",
      'stop'      => "stop",
    ),
  );

  return $items;
}


/**
 * Callback for the drush-demo-command command
 */
function drush_drupalers_drush_demo_command($init_id, $final_id) {
  demo_drush_print_statement($init_id, $final_id);
}

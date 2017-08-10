<?php
/*
 * Footer Section
*/
$this->sections[] = array(
  'title' => esc_html__('Auto Updater', 'adios'),
  'desc' => esc_html__('Change the auto update section configuration.', 'adios'),
  'icon' => 'el-icon-cog',
  'fields' => array(
    array(
      'id'    =>'envato_username',
      'type'  => 'text',
      'title' => esc_html__('Envato Username', 'adios'),
    ),
    array(
      'id'    =>'envato_apikey',
      'type'  => 'text',
      'title' => esc_html__('Envato API Key', 'adios'),
    ),
  ), // #fields
);


<?php
/*
 * Advanced
*/
$this->sections[] = array(
  'title' => esc_html__('Shop', 'adios'),
  'desc' => esc_html__('Change shop theme options.', 'adios'),
  'fields' => array(
    array(
      'id'        => 'shop-post-per-page',
      'type'      => 'text',
      'title'     => esc_html__('Post Per Page', 'adios'),
      'subtitle'  => '',
      'placeholder' => 8,
      'default'   => '',
    ),

  ), // #fields
);

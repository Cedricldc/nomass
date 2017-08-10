<?php
/**
 * Customizer Section
 */

$this->sections[] = array(
  'title' => esc_html__('Fonts', 'adios'),
  'desc' => esc_html__('Check child sections to style properly the correct area of the theme.', 'adios'),
  'icon' => 'el-icon-cog',
  'fields' => array(

  ), // #fields
);
/**
* Pagination Section
*/
$this->sections[] = array(
  'title' => esc_html__('Heading', 'adios'),
  'desc' => esc_html__('Configure heading styles.', 'adios'),
  'subsection' => true,
  'fields' => array(
    array(
      'id' => 'font-heading',
      'type' => 'typography',
      'title' => esc_html__('Post Title', 'adios'),
      'font-size'=> false,
      'line-height'=> false,
      'text-align' => false,
      'color' => false,
      'output' => array('h1,h2,h3,h4,h5,h6, .page-title h2'),
    ),
  ),
);

$this->sections[] = array(
  'title' => esc_html__('Body', 'adios'),
  'desc' => esc_html__('Configure body styles.', 'adios'),
  'subsection' => true,
  'fields' => array(
    array(
      'id' => 'font-body',
      'type' => 'typography',
      'title' => esc_html__('Body', 'adios'),
      'font-size'=> true,
      'line-height'=> true,
      'text-align' => false,
      'color' => false,
      'output' => array('body'),
    ),
  ),
);


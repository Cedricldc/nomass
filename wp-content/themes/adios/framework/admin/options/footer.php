<?php
/*
 * Footer Section
*/
$this->sections[] = array(
  'title' => esc_html__('Footer', 'adios'),
  'desc' => esc_html__('Change the footer section configuration.', 'adios'),
  'icon' => 'el-icon-cog',
  'fields' => array(

    array(
      'id' => 'footer-enable-switch',
      'type' => 'switch',
      'title' => esc_html__('Enable Footer', 'adios'),
      'options' => array(
        '1' => 'On',
        '0' => 'Off',
      ),
      'default' => '1',
      'subtitle' => esc_html__('If on, this layout part will be displayed.', 'adios'),
    ),
    array(
      'id'        => 'footer-template',
      'type'      => 'select',
      'compiler'  => true,
      'title'     => esc_html__('Footer Template', 'adios'),
      'subtitle'  => esc_html__('Select footer layout.', 'adios'),
      'options'   => array(
        'default'     => esc_html__('Footer With Social Only', 'adios'),
        'alternative' => esc_html__('Footer With Social and Widgets', 'adios'),
      ),
      'default'   => 'default',
    ),
    array(
      'id'        => 'footer-sidebar-1',
      'type'      => 'select',
      'title'     => esc_html__('Footer Sidebar 1', 'adios'),
      'subtitle'  => esc_html__('Select custom sidebar', 'adios'),
      'options'   => adios_get_custom_sidebars_list(),
      'default'   => '',
      'required'  => array('footer-template', 'equals', array('alternative')),
    ),
    array(
      'id'        => 'footer-sidebar-2',
      'type'      => 'select',
      'title'     => esc_html__('Footer Sidebar 2', 'adios'),
      'subtitle'  => esc_html__('Select custom sidebar', 'adios'),
      'options'   => adios_get_custom_sidebars_list(),
      'default'   => '',
      'required'  => array('footer-template', 'equals', array('alternative')),
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 class="highlight-redux">'.esc_html__('Footer Logo Module & Social Module', 'adios').'</h2>'
    ),
    array(
      'id'       =>'footer-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => esc_html__('Logo', 'adios'),
      'subtitle' => esc_html__('Upload the logo that will be displayed in the footer.', 'adios'),
    ),
    array(
      'id'      => 'footer-logo-width',
      'type'    => 'text',
      'title'   => esc_html__('Logo Width', 'adios'),
      'default' => '',
      'desc'    => esc_html__('Optional : Enter the logo width in pixel for e.g 150px.', 'adios')
    ),
    array(
      'id'      => 'footer-logo-height',
      'type'    => 'text',
      'title'   => esc_html__('Logo Height', 'adios'),
      'default' => '',
      'desc'    => esc_html__('Optional : Enter the logo width in pixel for e.g 150px.', 'adios')
    ),
    array(
      'id'=>'footer-enable-social-icons',
      'type' => 'switch',
      'title' => esc_html__('Show social icons', 'adios'),
      'subtitle'=> esc_html__('If on, social icons will be displayed.', 'adios'),
      'options' => array(
        '1' => 'On',
        '0' => 'Off',
      ),
      'default' => '1',
    ),
    array(
      'id'       => 'footer-social-icons-category',
      'type'     => 'select',
      'title'    => esc_html__('Social Icons Category', 'adios'),
      'subtitle' => esc_html__('Select desired category', 'adios'),
      'options'  => adios_get_terms_assoc('social-site-category'),
      'default'  => '',
    ),
    array(
      'id' => 'random-number',
      'type' => 'info',
      'desc' => '<h2 class="highlight-redux">'.esc_html__('Copyright Configuration', 'adios').'</h2>'
    ),
    array(
      'id'    =>'footer-copyright-text',
      'type'  => 'text',
      'title' => esc_html__('Copyright Text', 'adios'),
    ),
  ), // #fields
);

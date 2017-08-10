<?php
/*
 * Title Wrapper Section
*/
$sections[] = array(
  'title' => esc_html__('Title Wrapper', 'adios'),
  'desc' => esc_html__('Change the title wrapper section configuration.', 'adios'),
  'icon' => 'el-icon-cog',
  'fields' => array(

    array(
      'id'       => 'title-wrapper-enable-local',
      'type'     => 'button_set',
      'title'    => esc_html__('Enable Title Wrapper', 'adios'),
      'subtitle' => esc_html__('If on, this layout part will be displayed.', 'adios'),
      'options' => array(
        '1' => 'On',
        ''  => 'Default',
        '0' => 'Off',
      ),
      'default' => '',
    ),
    array(
      'id'       => 'title-wrapper-template-local',
      'type'     => 'select',
      'title'    => esc_html__('Template', 'adios'),
      'subtitle' => esc_html__('Choose template for title wrapper.', 'adios'),
      'options'  => array(
        'default'     => esc_html__('Default','adios'),
        'alternative' => esc_html__('Alternative','adios'),
      ),
      'default' => '',
      'validate' => '',
    ),
    array(
      'id'       => 'title-wrapper-full-width-local',
      'type'     => 'button_set',
      'title'    => esc_html__('Full Width', 'adios'),
      'subtitle' => esc_html__('If on, full width will be enabled.', 'adios'),
      'options' => array(
        '1' => 'On',
        ''  => 'Default',
        '0' => 'Off',
      ),
      'required'  => array('title-wrapper-template-local', 'equals', array('alternative')),
      'default' => '',
    ),
    array(
      'id'               =>'title-wrapper-background-local',
      'type'             => 'background',
      'background-color' => false,
      'title'            => esc_html__('Background', 'adios'),
      'subtitle'         => esc_html__('Title wrapper background, color and other options.', 'adios'),
      'output' => array(
        'background' => '.top-baner .bg'
      )
    ),
    array(
      'id'    =>'title-wrapper-text-color-local',
      'type'  => 'color',
      'title' => esc_html__('Color', 'adios'),
      'output' => array('color' => '.sub-title .h5, .title-style-1 .h1', 'background' => '.sub-title:before')
    ),
    array(
      'id'    =>'title-wrapper-subtitle-local',
      'type'  => 'text',
      'title' => esc_html__('Subtitle', 'adios'),
    ),

  ), // #fields
);

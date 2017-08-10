<?php
/**
 * Header file
 *
 * @package adios
 * @since 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <?php adios_loader('general-loader-logo', get_template_directory_uri().'/img/logo.png'); ?>
  <?php adios_header_template(adios_get_opt('header-template')); ?>
  <?php adios_title_wrapper_template(adios_get_opt('title-wrapper-template')); ?>

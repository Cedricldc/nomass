<?php
/**
 *
 * RS Special Text
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function rs_special_text( $atts, $content = '', $id = '' ) {

  extract( shortcode_atts( array(
    'id'             => '',
    'class'          => '',
    'font'           => 'default',
    'tag'            => 'h1',
    'font_size'      => '',
    'font_weight'    => '300',
    'font_style'     => '',
    'margin_top'     => '',
    'line_height'    => '',
    'css'            => '',
    'align'          => '',
    'margin_bottom'  => '',
    'font_color'     => '',
    'transform'      => '',
    'letter_spacing' => ''

  ), $atts ) );

  $id        = ( $id ) ? ' id="'. esc_attr($id) .'"' : '';
  $class     = ( $class ) ? ' '. sanitize_html_classes($class) : '';
  $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), '', $atts );
  $css_class = ( $css_class ) ? ' '.sanitize_html_classes($css_class):'';
  $customize = ($font || $font_color || $letter_spacing || $transform || $font_style || $font_weight || $font_size || $margin_top || $margin_bottom ) ? true:false;
  $output = '';
  if(strpos($font, 'google') !== false) {
    $font_weight_type = ($font_style == 'italic' && $font_weight ) ? $font_weight.$font_style:$font_weight;
    $ifont_name  = str_replace('google_web_font_', '', $font);
    $font_name  = str_replace(' ', '+', $ifont_name);
    $output .=  "<link href='http://fonts.googleapis.com/css?family=".esc_attr($font_name).":".esc_attr($font_weight_type).", 400, 300, 600' rel='stylesheet' type='text/css'>";
  } else {
    $ifont_name = $font;
  }

  if( $customize ) {

    $uniqid       = time().'-'.mt_rand();
    $custom_style = '';

    $custom_style .=  '.custom-font-properties-'.$uniqid.'{';
    $custom_style .=  ($font) ? 'font-family:'.$ifont_name.', san-serif;':'';
    $custom_style .=  ($font_size) ? 'font-size:'.$font_size.';':'';
    $custom_style .=  ($line_height) ? 'line-height:'.$line_height.';':'';
    $custom_style .=  ($align) ? 'text-align:'.$align.';':'';
    $custom_style .=  ($font_weight) ? 'font-weight:'.$font_weight.';':'';
    $custom_style .=  ($font_style) ? 'font-style:'.$font_style.';':'';
    $custom_style .=  ($transform) ? 'text-transform:'.$transform.';':'';
    $custom_style .=  ($font_color) ? 'color:'.$font_color.' !important;':'';
    $custom_style .=  ($margin_top) ? 'margin-top:'.$margin_top.';':'';
    $custom_style .=  ($letter_spacing) ? 'letter-spacing:'.$letter_spacing.';':'';
    $custom_style .=  ($margin_bottom) ? 'margin-bottom:'.$margin_bottom.';':'';

    $custom_style .= '}';

    adios_add_inline_style( $custom_style );

    $uniqid_class = ' custom-font-properties-'. $uniqid;

  }

  $output .= '<'.esc_html($tag).' '.$id.' class="'.$class.'special-text'.$css_class.sanitize_html_classes($uniqid_class).'">';
  $output .= do_shortcode(wp_kses_data($content));
  $output .=  '</'.esc_html($tag).'>';

  return $output;
}

add_shortcode('rs_special_text', 'rs_special_text');

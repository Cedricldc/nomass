<?php
/**
 * Portfolio Single Page
 *
 * @package adios
 * @since 1.0
 *
 */
get_header();

global $post;
$terms = wp_get_post_terms(get_the_ID(), 'portfolio-category');
$term_name = array();
if (count($terms) > 0):
  foreach ($terms as $term):
    $term_name[] = $term->name;
  endforeach;
endif;
$img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
if(isset($img_src[0]) && !empty($img_src)):
?>

<div class="top-baner">
  <div class="block-bg top-image">
    <div class="bg-wrap">
      <div class="bg" style="background-image:url(<?php echo esc_url($img_src[0]); ?>);"></div>
      <div class="white-mobile-layer"></div>
    </div>
    <div class="title-style-1 vertical-align">
      <div class="sub-title">
        <h5 class="h5"><?php echo implode(', ', $term_name); ?></h5>
      </div>
      <h1 class="h1"><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="content">
  <?php
    while ( have_posts() ) : the_post();
      get_template_part('templates/portfolio/project-details');
    endwhile;
    get_template_part('templates/portfolio/project-gallery');
    get_template_part('templates/portfolio/project-pagination');
  ?>
</div>
<?php
get_footer();


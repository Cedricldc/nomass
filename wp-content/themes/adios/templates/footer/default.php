<?php
/**
 * Part of footer file ( default style )
 *
 * @package adios
 * @since 1.0
 */
?>
<div class="main-footer">
  <section class="section section-bg padd-xs">
    <div class="inner-footer">
      <div class="container">
        <?php adios_logo('footer-logo', get_template_directory_uri().'/img/logo.png', 'footer-logo'); ?>
        <div class="folow-icon">
          <?php adios_social_links('%s', adios_get_opt('footer-social-icons-category')); ?>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="copyright">
    <span><?php echo wp_kses_data(adios_get_opt('footer-copyright-text')); ?></span>
    </div>
  </footer>
</div>

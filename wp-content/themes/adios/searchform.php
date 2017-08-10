<?php
/**
 *
 * Search form.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search">
  <input type="text" placeholder="Search" required>
  <div class="serch-link">
    <i class="icon-search"></i>
    <input class="search-field" type="search" id="s" name="s" value="">
    <input type="submit" value="">
  </div>
</form>

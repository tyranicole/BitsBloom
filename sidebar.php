<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package BitsBloom
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

  <!-- mailchimp form -->
  <?php
      if( function_exists( 'mc4wp_form' ) ) {
        mc4wp_form( 4 );
      };
  ?>

  <div class="ad2">
    <img src="" alt="ad">
  </div>
</div><!-- #secondary -->

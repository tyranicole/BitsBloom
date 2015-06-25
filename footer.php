<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BitsBloom
 */
?>

	</div><!-- #content -->

  <div id="footer-sidebar1">
      <?php
      if(is_active_sidebar('footer-sidebar-1')){
      dynamic_sidebar('footer-sidebar-1');
      }
      ?>

      <ul class="social">
        <li><a href="https://www.facebook.com/bitsbloom" target="_blank"><i class="fa fa-facebook" target="_blank"></i></a></li>
        <li><a href="https://twitter.com/bitsbloom" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://instagram.com/bitsbloom/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.pinterest.com/bitsbloom/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="mailto:contact@bitsbloom.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
    </ul>

    <div class="footer-statement">
      <img src="<?php bloginfo('template_directory'); ?>/images/bitsbloom-logo-white-type.png" />
      <h2>Published with <i class="fa fa-heart"></i> in NYC.</h2>
    </div>
  </div>

</div><!-- #page -->

<script>
$('#searchTrigger').click(function() {
  $('#searchform').slideToggle('fast');
});

var catClass = $('article').prop('class');
$('#moreOn').prop('class', catClass);

</script>
<?php wp_footer(); ?>

</body>
</html>

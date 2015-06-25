<?php
/**
 * @package BitsBloom
 */
?>

<a href="<?php echo get_permalink(); ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
	<div class="image" style="background:url('<?php echo $url ?>') no-repeat center center">

	</div>

	<div class="body">
		<header class="entry-header">
			<?php echo get_the_category_list(); ?>
			<li class="tag">
			<?php
				$count = 0;
				$posttags = get_the_tags();
				if ($posttags) {
				foreach($posttags as $tag) {
				$count++;
				if ($count <= 1 ) {
				echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a> ';
				}
				}
				}
			?>
			</li>

			<?php the_title( sprintf( '<h1 class="entry-title full-width"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>


			<?php if ( 'post' == get_post_type() ) : ?>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content post-content">
			<?php echo get_excerpt(95); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'bitsbloom' ),
					'after'  => '</div>',
				) );
			?>

		<div class="author">
			<div class="left">
				<span class="author-avatar">  <? echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?></span>
			</div>
			<div class="right">
			<span class="author-name"><?php the_author(); ?></span>
			<div class="entry-meta">
				<?//php bitsbloom_posted_on(); ?>
				<?php the_date(); ?>
			</div><!-- .entry-meta -->
			</div>
		</div>


		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<!-- <?php bitsbloom_entry_footer(); ?>-->
		</footer><!-- .entry-footer -->
	</div> <!-- body -->

</article><!-- #post-## -->
</a>
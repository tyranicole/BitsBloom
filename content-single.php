<?php
/**
 * @package BitsBloom
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

	<span class="categories single-cats clearfix">	<?php echo get_the_category_list(); ?>
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
	</span>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="image-holder">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
	<div class="image" style="background:url('<?php echo $url ?>') no-repeat center center"></div>
	<span class="image-caption">
		<?php the_field('image-caption'); ?>
	</span>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bitsbloom' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php// bitsbloom_entry_footer(); ?>

		<div class="author-profile">
			<div class="image-name">
				<span class="author-avatar">  <? echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?></span>
				<span class="author-name"><?php the_author(); ?></span>
			</div>

			<div class="author-bio">
				<?php the_author_description(); ?>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

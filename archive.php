<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BitsBloom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main categories" class="site-main" role="main">

		<?php if (is_category('fashion')) : ?>
			<?php
				echo get_new_royalslider(4);
			?>

		<?php elseif (is_category('beauty')) : ?>
			<?php
				echo get_new_royalslider(5)
			?>

		<?php elseif (is_category('lifestyle')) : ?>
			<?php
				echo get_new_royalslider(6)
			?>

		<?php elseif (is_category('bits-talk')) : ?>
			<?php
				echo get_new_royalslider(7)
			?>
			<?php else : ?>
				<?php
				echo get_new_royalslider(1)
				 ?>
			<?php endif; ?>

		<div class="wrapper center">
			<article class="latest-stories">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>




	<section class="sidebar sidebar-archive">
				<?php get_sidebar(); ?>
	</section>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
	// ads area

	var ad1Img = "http://placehold.it/728x90'"; //size 728x90
	var ad3Img = "http://placehold.it/300x600"; //size 300x600

	$('article.latest-stories article:nth-child(2)').after("<img class='latest-stories-ad' src='" + ad1Img +"'>" );

  $('.ad2 img').prop('src', ad3Img);
	</script>



	<style>
		div.wrapper .sidebar {
			margin-top: 445px;
		}

		section.sidebar aside.widget_recent_entries {
			display: none;
		}


		div.wrapper article.latest-stories article:first-child, div.wrapper article.latest-stories article:nth-child(2), div.wrapper article.latest-stories article:nth-child(3), div.wrapper article.latest-stories article:nth-child(4), div.wrapper article.latest-stories article:nth-child(5) {
			width: 69.8%;
		}

/*		div.wrapper article.latest-stories article:first-child, div.wrapper article.latest-stories article:nth-child(2) {
			width: 90vw;
		}*/




		.latest-stories-ad {
			width: 70%;
			max-width: 70%;
		}



	@media (max-width: 768px) {
	  div.wrapper article.latest-stories article:first-child, div.wrapper article.latest-stories article:nth-child(2), div.wrapper article.latest-stories article:nth-child(3), div.wrapper article.latest-stories article:nth-child(4), div.wrapper article.latest-stories article:nth-child(5) {
			width: 100%;

		}
	}


	</style>
<?php get_footer(); ?>

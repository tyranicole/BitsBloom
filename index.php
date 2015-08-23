<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BitsBloom
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				echo get_new_royalslider(1);
			?>

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
			</article>


			<section class="sidebar">
				<?php get_sidebar(); ?>
			</section>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<script>
	//ads area

	//replace here with your ad.
	var ad1Img = "http://placehold.it/728x90"; // size 728x90
  var ad2Img = "http://placehold.it/300x250"; // size 300x250

  $('article.latest-stories article:nth-child(2)').after("<img class='latest-stories-ad' src='" + ad1Img +"'>" );
  $('.ad2 img').prop('src', ad2Img);

</script>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package BitsBloom
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

<!-- 			<?php the_post_navigation(); ?>-->

  <section id="comments">
    <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>
  </section>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->


    <section id="moreOn">

			<aside>
        <?php $category = get_the_category();
          $firstCategory = $category[0]->cat_ID;
          $categoryName = $category[0]->cat_name;
        ?>

        <h2>More on <?php echo $categoryName ?></h2>

				<?php query_posts('cat=' . $firstCategory . '&showposts=3'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<a href="<?php echo get_permalink(); ?>">
          <li>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
					<div class="image" style="background:url('<?php echo $url ?>') no-repeat center center"></div>

          <?php echo get_the_category_list(); ?>
          <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				  </li>
          </a>

				<?php endwhile; endif; ?>
			</aside>
		</section>



	</div><!-- #primary -->

<?php get_footer(); ?>


<style>

	.entry-content {
      padding-top: 50px;
      padding-left: 0px;
      max-width: 70%;
      font-family: 'Open Sans';

    }

  p {
    font-size: 17px;
  }

  .post-navigation {
    display: none;
  }

  .author {
    padding-top: 35px;
  }

  .entry-title {margin:0 0 10px 0;}
  .content-area article span.categories ul {
    margin:15px 0 0 0px;
  }


.entry-header {
  margin-top: 50px;
}

  @media only screen and (max-width: 500px) { /* Change to whatever media query you require */
      .entry-content {
        padding-top: 50px;
        padding-left: 0px;
        max-width: 100%;
        font-family: 'Open Sans';
        padding-rigth: 25px;
        padding-left: 25px;
      }

      .entry-title {
        padding-left: 20px;
      }

      .author-profile {
        max-width: 100%;
        margin-right: 25px;
        margin-left: 25px;
      }

      section#comments {
        max-width: 100%;
        padding-left: 25px;
        padding-right: 25px;
      }
    }


</style>
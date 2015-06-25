<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: about
 * @package BitsBloom
 */

get_header(); ?>

<section id="about-page">
  <div class="about-header">

    <div class="content">
      <h1>
          BitsBloom is the online destination for millennial women passionate about all things tech.
      </h1>
    </div>

  </div>

  <div class="statement">
    <p>
      The site serves as a platform for career information and resources all while highlighting female techprenuers who are launching, innovating and intersecting technology with lifestyle, social good and more.
    </p>

    <p>
      BitsBloom strives to lead the conversation on women who are closing the gender gap in the field of technology. More and more women are breaking boundaries and using technology to reshape their industries, communities and the world around them. BitsBloom is here to celebrate these women and inspire future female tech leaders though informative and compelling multimedia content.
    </p>
  </div>

  <div class="sections">
    <h2>Sections</h2>

    <ul>
      <li>
        <h3>
        <img src="<?php bloginfo('template_directory'); ?>/images/section-title-bitstalk.png" />
        </h3>

        <p>
          BitsTalk is an interview series featuring influential women who serve as a source of inspiration. Each interview is an opportunity for Bitsbloom readers to tap into the power of career savvy women and learn from their stories.
        </p>
      </li>

      <li>
        <h3>
          <img src="<?php bloginfo('template_directory'); ?>/images/section-title-bitstalk.png" />
        </h3>
        <p>
          BitsBulletin is the site's calendar listing. This section will highlight various events and career opportunities within the tech scene.
        </p>
      </li>

      <li>
        <h3>
          <img src="<?php bloginfo('template_directory'); ?>/images/section-title-sections.png" />
        </h3>

        <p>
          As technology continues to impact our daily lives, many millennial women are launching and turning to tech companies that intersect with various industries.  Amongst the industries taking center stage are fashion, beauty and lifestyle. This can be seen with everything from wearable tech to health & fitness tracking.
        </p>

        <p>
          The Style, Beauty & Living section provides information on companies and techprenuers intersecting within these areas all while providing content for emerging women in tech.
        </p>

      </li>


    </ul>
  </div>
</section>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
		<!-- hero -->
		<section class="hero-banner innerPG" style="<?php if ( has_post_thumbnail() ) { ?>background-image: url(<?php echo get_template_directory_uri (); ?>/assets/images/overlay.png), url(<?php the_post_thumbnail_url();} ?>)">
	      <div class="banner-content">
	        <div class="container text-center">
	          <h1><?php the_title(); ?></h1>
	        </div>
	      </div>
	    </section>
	    <!-- / hero -->

		<main id="main" class="site-main main-content" role="main">	
			<div class="container m-content ptb30">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
          		<?php endwhile; endif; ?>
			</div>	
		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

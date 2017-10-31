<?php
/**
* Template Name: contact
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


	<section id="primary" class="content-area col-sm-12">
	<main id="main" class="site-main" role="main">
		<section class="contact">
			<div class="container">
				<h3>GET IN TOUCH WITH US</h3>
				<div class="row">
					<div class="col-md-7">
						<?php echo do_shortcode( '[contact-form-7 id="94" title="Contact form 1"]' ); ?>
					</div>	
					<div class="col-md-5">
						<div class="contact-content">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
          		<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
					
			</div>
			
		</section>
	</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

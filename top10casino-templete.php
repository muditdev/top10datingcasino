<?php
/**
* Template Name: top10casino
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

	<article>
      <div class="article-content">
        <div class="container">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>
          	<?php endwhile; endif; ?>
        </div>
      </div>
    </article>

	<section id="primary" class="content-area col-sm-12">
	<main id="main" class="site-main" role="main">
		<section class="resultsTable">
	      <div class="container">
	        <div class="rt-content">
        	<!-- start loop -->
            <?php $temp_query = clone $wp_query; ?>
            <?php query_posts( 'category_name=casino' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- Do special_cat stuff... -->
	          <div class="row ratingRow">
	            <div class="col-sm-3">
	              <div class="siteImg">
	                <img style="width: 140px; height: 140px; object-fit: cover;" src="<?php the_post_thumbnail_url(); ?>">
	              </div>
	            </div>
	            <div class="col-sm-4">
	              <div class="intro">
	                <div class="int-head">
	                  #<?php echo $wp_query->current_post +1; ?> 
					  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	                </div>
	                <?php the_excerpt(); ?>
	              </div>
	            </div>
	            <div class="col-sm-2">
	              <div class="score">
	                <h3><?php echo get_post_meta($post->ID, 'rating', true); ?></h3>
	                <!-- <div class="t5rating">
	                    <span class="fa fa-star active"></span>
	                    <span class="fa fa-star active"></span>
	                    <span class="fa fa-star active"></span>
	                    <span class="fa fa-star active"></span>
	                    <span class="fa fa-star active"></span>
	                 </div> -->
	              </div>
	            </div>
	            <div class="col-sm-3">

	              <div class="visitLinks">
	                <a href="javascript:void(0)" target="_blank" class="btn btn-visit">
	                  Go to website
	                  </a>
	                <br>
	                <a href="<?php the_permalink() ?>" class="readRBtn">
	                    Read Review
	                  </a>
	              </div>
	            </div>
	          </div>
	         <?php endwhile; ?>
             <?php $wp_query = clone $temp_query; ?>
             <!-- end loop -->
	        </div>
	        <!--table-responsive -->
	      </div>
	      
	    </section>

                    
	</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

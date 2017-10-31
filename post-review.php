<?php

/*

 * Template Name: Review Post

 * Template Post Type: post, page, product

 */

get_header(); ?>
    <!-- hero -->
    <section class="hero-banner innerPG bannerPost" >
        <div class="banner-content">
          <div class="container text-center">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
      <!-- / hero -->

    <main id="main" class="site-main main-content" role="main"> 
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="resultsTable">
        <div class="container">
          <div class="rt-content">
          <!-- start loop -->
         
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
         <!--          <br>
                  <a href="<?php the_permalink() ?>" class="readRBtn">
                      Read Review
                    </a> -->
                </div>
              </div>
            </div>
             <!-- end loop -->
          </div>
          <!--table-responsive -->
        </div>
        
      </section>

      <article class="reviewArticle">
        <div class="article-content">
          <div class="container">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
     
      <?php endwhile; endif; ?> 
    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
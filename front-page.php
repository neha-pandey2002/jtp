<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>

				
				 <!--------------------------------------------------------------slider section------------------------------------------------------------------------------------------------------------------>
jhasgdhgdjhsjhdgjh
          
                      <div class="container-fluid slider-section">
                          <div class="row">
                            <?php echo do_shortcode('[smartslider3 slider=4]');?>
                          </div>
                      </div>
                      <div class="img-down"><img src="<?php the_field('img_1'); ?>" /></div>



<!---------------------------------------------------ABOUT US Content--------------------------------------------------------------------------------------->>


                  <!--Professional Services-->    
          <div class="content-page">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 about-shadow-area">
                          <?php 
                $the_query = new WP_Query( 'page_id=176' );
                while ($the_query -> have_posts()) : $the_query -> the_post();
                $content = get_the_content();
              ?>
                          <h1><?php the_title(); ?></h1>
                            <div class="home-content">
                              <?php echo substr($content, 0,1500); ?>
                            </div>
                            <div class="thumb-left"><?php the_post_thumbnail('full'); ?></div>
                            <?php 
                            wp_reset_postdata();
                          endwhile;?>
                        </div>
                      
                    </div>
                </div>
            </div>


    

<!---------------------------------------------------------------------------------------Vision Statement------------------------------------------------------------------------------------>


<div class="gallery-area bground-img-gallery  ">
  <div class="white-back2">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <h2 class="section-heading">Vision Statement!</h2>
                    <p> "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled<br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled"</p>
                    <button class="gallery-btn">Browse Gallery</button>
                  </div>
                </div>
              </div>    
            </div>
           </div>



<!---------------------------------------------------------------------------------------Our Staff------------------------------------------------------------------------------------>



                      <div class="our-staff">
                          <div class="container">
                               <h1> Our Staff </h1>
                               <div class="row staff-area">

                                  <div class="col-md-4 staff-img ">
                                    <img src="<?php echo the_field('our-staff-img-1'); ?>" />
                                  </div>
                                  <div class="col-md-8 staff-img staff-area">
                                    <h3 class="heading-staff">What is Lorem Ipsum?What is Lorem Ipsum?</h3>
                                    <p><?php echo the_field('our-staff-cnt-1'); ?></p>
                                  </div>
                                </div>


                                   <div class="row staff-area">

                                  <div class="col-md-4 staff-img">
                                    <img src="<?php echo the_field('our-staff-img-2'); ?>" />
                                  </div>
                                  <div class="col-md-8 staff-img">
                                    <h3 class="heading-staff">What is Lorem Ipsum?What is Lorem Ipsum?</h3>
                                    <p><?php echo the_field('our-staff-cnt-2'); ?></p>
                                  </div>
                                </div>

                                  <div class="row staff-area">

                                  <div class="col-md-4 staff-img">
                                    <img src="<?php echo the_field('our-staff-img-3'); ?>" />
                                  </div>
                                  <div class="col-md-8 staff-img">
                                    <h3 class="heading-staff">What is Lorem Ipsum?What is Lorem Ipsum?</h3>
                                    <p><?php echo the_field('our-staff-cnt-3'); ?></p>
                                  </div>
                                </div>
                              

                              </div>
                            </div>



<!---------------------------------------------------------------------------------------Enquiry Form------------------------------------------------------------------------------------>

                              
                 <div class="container-fluid">
                     <div class="row bground-img-enquiry ">

                     <div class="white-back3">
                        <div class="row">
                          <div class="col-md-4">
                           <h1 class="contact-heading"> Contact partisan protective services  Contact partisan protective services </h1>
                           </div>
                            <div class="col-md-8 enquiry-frm">
                               <div class="address-area">
                                   <h3 class="adderss-text">Unit 18 garling roadWhat is Lorem Ipsum? <br>kings park nsw 2250What is Lorem Ipsum?<br>kings park nsw 2250What is Lorem Ipsum?<br>kings park nsw 2250What is Lorem Ipsum?</h3>
                                   <?php echo do_shortcode( '[contact-form-7 id="543" title="Enquiry Form"]' ); ?>
                               </div>
                           </div>
                       </div>
                     </div>
                    </div>
                  </div>

                        






            
          

						<?php
						wp_link_pages(
							array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>

           <!--  <h1 class="entry-title"><?php// the_title(); ?></h1> -->
          </header><!-- .entry-header -->
          

<!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/main-top.jpg" alt=""/> -->


          <div class="entry-content1">
            <?php //the_content(); ?>
            <!--------------------hero area---------------------->
                <div class="container-fluid">
                	
                	<div class="top-img">



                <!--------------------------------------------------------------------over image category sectio--------------------------------------------------------->

<div class="over-img-area">
	 <div class="container-fluid">
	 
	 	<div class="col-md-4 cat">
		<div class="Online-Shopping">
	 			<a href="#"><h3 class="hding-over">Online Shopping</h3></a>
	 		</div>
	 	</div>

         
     <div class="col-md-4 cat">  
	 		<div class="gift">
	 			<a href="#"><h3 class="hding-over">Gift Ideas / Hampers</h3></a>
	 		</div>
    </div>

    	<div class="col-md-4 cat">
       <div class="catering">
	 			<a href="#"><h3 class="hding-over">Catering Services</h3></a>
	 		</div>
	 	</div>

	
	 </div>
	</div>
                		
                	</div>
                </div>
              </div>
               




              

      

<!--------------------------------------------------------------------Content home page(after main hero area------------------------------------------>

<div class="cnt-area">
	<div class="container-fluid">
	    <span><?php echo the_field('homecontent',17); ?></span>
   </div>
 </div>



<!-------------------------slider specials-------------------------------------------------------------------------------------------->

<!---------------------------------light slider counting ------------------------------------------------------>

<div class="special-area">
	<div class="container-fluid">
		<div class="row">
			<!------------------------text are---------------------->
			<div class="col-md-4 col-xs-12 cnt-area-special">
				<h3 class="small-hding">
					Specials
				</h3>
				<p class="p-tg">Chicken Salad</p>
				<h2 class="txt-hding">
				Our Freashly made <br>Chicken Salad <br>Is Now Available.</h2>

				</div>

				<!--------------slider area----------------------->
     
    



  <!--Slider Section(CD)-->
                            <div class="col-md-8 col-xs-12 slider-light">
                               <div class="item">
                               	<div class="col-md-12">
			                             
			                               <ul id="content-slider" class="content-slider">        <!--to call custom post in light slider-->
			                                  <?php  

			                                      $args = array( 'post_type' => 'specials', 'posts_per_page' => -1, 'order' => 'ASC', );
			                                      $loop = new WP_Query( $args );
			                                      while ( $loop->have_posts() ) : $loop->the_post();
			                                      $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			                                  ?>
			                        <li>
																		 <div class="col-md-4 child1">

			           	                          <!--  <strong><span class="ttl-prdct"><?php// echo the_title() ; ?></span></strong></br> -->
			           	                      
			           	                           <?php the_content();?>
			           	                            <a class="lrn-more" href="<?php get_the_permalink(); ?>">Learn More</a></br>
			                                   </div>

                                      <div class="col-md-8 parent1">
			                                   	<!-- to call images-->
			                                        <img src="<?php echo $feat_image ; ?>"/>
			                                           </div>
			                                    <!--to call content and title-->
			                                  
			                            
			                        </li>  

			                              <?php endwhile; ?>
                                </ul> 
			                 </div>
			                
			                </div>
			              </div>
			            </div>
			          </div>
			          </div>
			              
			         
			        




			         <!--------------------------------------------- Products Round----------------------------------------------------------------------->

                  <div class="product-round-area">
                  	<div class="container Products-Round">

                  		<div class="col-md-4 product-1">
                  			<h1 class="heading-number">01</h1>    <!----------heading------------------>
                  			 <span class="product-ttl"><?php echo the_field('product-1-title',17);?></span> <br> <!-----title-------->
                  			 <span class="product-cnt"><?php echo the_field('product-1-content',17);?></span> <br>   
                  			 	<a class="lrn-more" href="<?php echo the_permalink(); ?>">Learn More</a></br>
                  			 </div>

                  			 <div class="col-md-8 product-1">
                  			    <img src="<?php echo the_field('product-1-image',17);?>">
                  			 </div>
                  			 </div>

                      <div class="container Products-Round">
														<div class="col-md-8 product-1">
                  			    <img src="<?php echo the_field('product-2-image',17);?>">
                  			 </div>
                  			
                  			<div class="col-md-4 product-1">
                  			<h1 class="heading-number">02</h1>    <!----------heading------------------>
                  			 <span class="product-ttl"><?php echo the_field('product-2-title',17);?></span> <br> <!-----title-------->
                  			 <span class="product-cnt"><?php echo the_field('product-2-content',17);?></span> <br>   
                  			 	<a class="lrn-more" href="<?php echo the_permalink(); ?>">Learn More</a></br>
                  			 </div>
                  			</div>



                  			<div class="container Products-Round">

                  		<div class="col-md-4 product-1">
                  			<h1 class="heading-number">03</h1>    <!----------heading------------------>
                  			 <span class="product-ttl"><?php echo the_field('product-3-title',17);?></span> <br> <!-----title-------->
                  			 <span class="product-cnt"><?php echo the_field('product-3-content',17);?></span> <br>   
                  			 	<a class="lrn-more" href="<?php echo the_permalink(); ?>">Learn More</a></br>
                  			 </div>

                  			 <div class="col-md-8 product-1">
                  			    <img src="<?php echo the_field('product-3-image',17);?>">
                  			 </div>
                  			 </div>



                      <div class="container Products-Round">
														<div class="col-md-8 product-1">
                  			    <img src="<?php echo the_field('product-4-image',17);?>">
                  			 </div>
                  			
                  			<div class="col-md-4 product-1">
                  			<h1 class="heading-number">04</h1>    <!----------heading------------------>
                  			 <span class="product-ttl"><?php echo the_field('product-4-title',17);?></span> <br> <!-----title-------->
                  			 <span class="product-cnt"><?php echo the_field('product-4-content',17);?></span> <br>   
                  			 	<a class="lrn-more" href="<?php echo the_permalink(); ?>">Learn More</a></br>
                  			 </div>
                  			</div>



                  			<div class="container Products-Round">

                  		<div class="col-md-4 product-1">
                  			<h1 class="heading-number">05</h1>    <!----------heading------------------>
                  			 <span class="product-ttl"><?php echo the_field('product-5-title',17);?></span> <br> <!-----title-------->
                  			 <span class="product-cnt"><?php echo the_field('product-5-content',17);?></span> <br>   
                  			 	<a class="lrn-more" href="<?php echo the_permalink(); ?>">Learn More</a></br>
                  			 </div>

                  			 <div class="col-md-8 product-1">
                  			    <img src="<?php echo the_field('product-5-image',17);?>">
                  			 </div>
                  			 </div>


                  			
                  		</div>


													


			         

<!------------------------------------------------------------------------------------------------------cook with us---------------------------------------------------------------------------------------------------------------------->
			    
																		<div class="cook-with-us">
																			<div class="container-fluid">
																				<div class="row">

																					<div class="col-md-4 cook-img">
																						<img src="<?php echo the_field('img-apple',17);?>">
																					</div>

																					<div class="col-md-8 cook-cnt">
																						<h1 class="cook-hding">Cook With Us!<br>
																							Find Cooking recipies and<br>
																							fresh ingredients <a href="#">here!</a>	</h1>
																							</div>

																					</div>
																				</div>
																			</div>



<!---------------------------------------------------------------------------------------------------------------------bottom slider---------------------------------------------------------------------------------------------------------------------->
																					<div class="slider-area-footer">
																						<div class="container-fluid">
																							<div class="col-md-6 foll-area">
																							<h2 class="follow"> Follow us on <a href="#"> Instagram</a> and <a href="#">Facebook</a></h2>
																						</div>
																							<div class="col-md-6 email-area">
																						<h2 class="email">@cronullagourmetgrocer</h2>
																							</div>
																							<div class="slider-ft">
																					<?php echo do_shortcode( '[sp_wpcarousel id="120"]' ); ?>
																				</div>
																			</div>
																		</div>


<!---------------------------------------------------------------------------------------------------------------------bottom slider---------------------------------------------------------------------------------------------------------------------->


























<!------------------------------------------------slider end----------------------------------------------->








            
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
	                                        <div class="newsletter-area">
																						<div class="container-fluid">
																							<h1 class="news-hding">Want to join the family?<br> Sign up for our invitation newsletter !</h1>
																							<?php get_sidebar('Secondary',17);?>
																						</div>
																					</div>

<?php get_footer(); ?>

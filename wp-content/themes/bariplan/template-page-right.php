<?php
/**
 * Template Name: bariplan Page Right Sidebar
 */

get_header();		

get_template_part( 'includes/header' , 'page-title' ); ?>
			<!-- BLOG AREA START -->
			<div class="bariplan-blog-area">
				<div class="container">				
					<div class="row">
										
						<?php if ( is_active_sidebar( 'sidebar-4' ) ) {?>	
							
							<div class="col-lg-8 col-md-6  col-sm-12 col-xs-12  page-right-template blog-lr">
								<?php if (have_posts() ) : 

									 while ( have_posts() ) : the_post();
										
											global $post; 
											
											 get_template_part( 'template-parts/content' , 'page' ); 
											
										endwhile; ; 									
															
								 endif; ?>
									
							</div>							
							<div class="col-lg-4 col-md-6  col-xs-12  sidebar-right content-widget">
								<div class="blog-left-side widget">								
									<?php dynamic_sidebar( 'sidebar-4' ); ?>
								</div>
							</div>
						<?php }else{ ?>
						
							<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12  page-right-template  blog-lr">
								<?php if (have_posts() ) : 

									 while ( have_posts() ) : the_post();
										
											global $post; 
											
											 get_template_part( 'template-parts/content' , 'page' ); 
											
										endwhile; ; 									
															
								 endif; ?>
									
							</div>
						<?php } ?>


					</div>	
				</div>
			</div>
			<!-- END BLOG AREA START -->
						
<?php
	get_footer();		

<?php
/**
 * Template Name: bariplan Blog Left Sidebar 2column
 * @since Layers 1.0.0
 */

get_header();
get_template_part( 'includes/header' , 'page-title' ); ?>

			<!-- BLOG AREA START -->
			<div class="bariplan-blog-area bariplan-blog-archive">
				<div class="container">				
					<div class="row">										

						<?php get_sidebar( 'left' ); 
							$page = ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );
							$paged = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : $page );
							$wp_query = new WP_Query( array(
								'post_type' => 'post',
								'paged'     => $paged,
								'page'      => $paged,
							) );
						if ( $wp_query->have_posts() ) : ?>
													
							<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 bgimgload">
								<div class="row blog-messonary">								
								<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();							
									global $post;
									get_template_part( 'template-parts/content' , 'list-column' ); 
									endwhile; ?>								
								</div>
								
								<!-- START PAGINATION -->
								<div class="row">
									<div class="col-md-12">
										
										<?php bariplan_pagination();?>

									</div>
								</div>
								<!-- END START PAGINATION -->								
							</div>
						<?php endif; ?>
																					

					</div>
				</div>
			</div>
			<!-- END BLOG AREA START -->
<?php 
get_footer();
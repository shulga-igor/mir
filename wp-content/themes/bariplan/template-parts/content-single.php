<?php 
/*
single details page

*/
 global $bariplan_opt;
?>							
		<div class="bariplan-single-blog-details">
			<?php if(has_post_thumbnail()){?>
				<div class="bariplan-single-blog--thumb">
					<?php the_post_thumbnail('bariplan-blog-single', array( 'class' => 'img-fluid')); ?>
				</div>									
			<?php } ?>
			<div class="bariplan-single-blog-details-inner">	
				<div class="bariplan-single-blog-title">
					<h2><?php the_title(); ?></h2>	
				</div>
				<!-- BLOG POST META  -->		
				<?php bariplan_blog_singlepost_meta();?>

				

				<div class="bariplan-single-blog-content">
					<div class="single-blog-content">
					<?php the_content();
					if ( '' != get_the_content() ) { ?>					
						<div class="page-list-single">						
							<?php 
							/**
							* Display In-Post Pagination
							*/
							wp_link_pages( array(
								'link_before'   => '<span>',
								'link_after'    => '</span>',
								'before'        => '<p class="inner-post-pagination"><span>' . esc_html__('Pages:', 'bariplan'),
								'after'     => '</p>'
							)); ?>					
												
						</div>
					<?php } ?>
					</div>
				</div>
			

				<?php if( 'post' == get_post_type() ) { ?>	
				
				
					<?php if (!empty($bariplan_opt['bariplan_blog_socialsharesh_hide']) && $bariplan_opt['bariplan_blog_socialsharesh_hide']==true){?>
						
						<div class="bariplan-blog-social">
							<div class="bariplan-single-icon">
								<?php
								if( function_exists('twr_sitepage_sharing') ){						
									twr_sitepage_sharing();
								}
								?>
							</div>
						</div>					
						
					<?php }else{
						
					}} ?> 	
			</div>
		</div>

	<?php comments_template();
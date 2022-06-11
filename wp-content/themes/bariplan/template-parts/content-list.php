<?php
/**
 * Template part for displaying archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bariplan
 */

?>
<!-- ARCHIVE QUERY -->
	<div class="col-md-12 col-sm-12 col-xs-12">

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="bariplan-single-blog bariplan-lt">					
				
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="bariplan-blog-thumb">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('bariplan-blog-single', array( 'class' => 'img-fluid')); ?> </a>
					</div>									
				<?php } ?>
				
				<div class="em-blog-content-area">
				
					<!-- BLOG TITLE -->
					<div class="blog-page-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
						
					<!-- BLOG POST META  -->
					<?php bariplan_blog_post_meta();?>			
					
					<!-- BLOG TITLE AND CONTENT -->
					<div class="blog-inner">
						<div class="blog-content">
						
							<p><?php echo wp_trim_words( get_the_content(), 33, ' ' ); ?></p>
						</div>
					</div>
					<!-- blog Button -->
					<?php bariplan_blog_btn();?>
					
				</div>			
			</div>
		</div> <!--  END SINGLE BLOG -->
	</div><!-- #post-## -->

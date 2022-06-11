			<div class=" blog_style_adn_2">				
				<div class="blog_wrap blogcar_<?php echo $unic_id;?>">
				
					<?php while ($posts->have_posts()) : $posts->the_post(); 											
					?>
						<!-- single blog -->
						<div class="<?php echo $witr_gutter_column; ?>   col-md-12 col-xs-12 col-sm-12 " >
							<div class="single_blog_adn witr_ablog_7_a all_blog_color">

								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="witr_ablog_7">
										<?php if(has_post_thumbnail()){?>	
											<div class="witr_ablog_thumb bariplan-blog-thumb_adn ">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('bariplan-blog-default'); ?> </a>
											</div>											
										<?php } ?>	
										<div class="witr_ablog_content">
											<div class="witr_ablog_inner">
											<div class="witr_blog_metan">
											<?php
												foreach ( $witrshowdata['witr_post_meta'] as $element ) {						
													if( $element=="aa"){?>
														<span><i class="icofont-tags"></i><?php the_category(', ');?></span>
													<?php }?>
													<?php if( $element=="a"){?>
														<span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-male"></i> <?php the_author(); ?> </a></span>
													<?php }?>
													<?php if( $element=="d"){?>
														<span><a href="#"><i class="far fa-calendar-plus"></i></a> <?php the_time(esc_html__('d M Y','bariplan')); ?></span>
													<?php }?>
													<?php if( $element=="c"){?>
														<span>
														<?php if ( comments_open() || get_comments_number() ) {?>
															<a href="<?php comments_link(); ?>"><i class="icofont-comment"></i>
																<?php comments_number( esc_html__('0','bariplan'), esc_html__('1 ','bariplan'), esc_html__('% ','bariplan') );?>
															</a>						
														<?php }else{?>
															<span><i class="icofont-comment"></i> <?php echo esc_html__('Comments Off','bariplan'); ?></span>
															<span><i class="icofont-comment"></i> <?php echo esc_html__('Comments Off','bariplan'); ?></span>
														<?php } ?>														
														
														
														</span>
													<?php }?>
														
												<?php }	?>	
												</div>

												
											
												<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?></a></h2>	
													<!-- content -->
													<?php if(! empty( $witrshowdata['witr_show_content'] )){?>
														<?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
													<?php } ?>											
													<?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
														<div class="learn_more_adn">
														  <a class="learn_btn adnbtn2" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?> </a>
														</div>
													<?php } ?>
																								
											</div>
										</div>
									
									</div>

								</div> <!--  END SINGLE BLOG -->	
							</div>
						</div>
					<?php endwhile; ?>	
					<?php wp_reset_query(); ?>

					
				</div>
			</div>					
					

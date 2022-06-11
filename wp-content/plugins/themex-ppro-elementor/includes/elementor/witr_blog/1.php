 <div class=" bgimgload">	
    <div class="row">
        <?php
            while($posts->have_posts()):$posts->the_post();
        ?>

            <div class="witr_nth_child col-lg-<?php if( !empty( $witrshowdata['witr_column_grid'] ) ){echo $witrshowdata['witr_column_grid'];}?>  col-md-6 col-sm-8 grid-item   <?php echo $witr_gutter_column; ?>">
                <div class="blog-part all_blog_color">
                    <div class="blog_part_inner">
                        <div class="witr_blog_imags">
                            <!-- image -->
                            <?php if(has_post_thumbnail()){?>
                                <div class="blog-img">
                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('bariplan-blog-default'); ?> </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="wblog-content blog-content-2 all_blog_color">
                        <!--  post meta -->
                        <?php /*
                            foreach ( $witrshowdata['witr_post_meta'] as $element ) {
                                    if( $element=="aa"){?>
                                        <span><i class="icofont-tags"></i><?php the_category(', ');?></span>
                                    <?php }?>
                                    <?php if( $element=="a"){?>
                                        <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="icofont-user-male"></i> <?php the_author(); ?> </a></span>
                                    <?php }?>
                                    <?php if( $element=="d"){?>
                                        <span><a href="#"><i class="icofont-ui-clock"></i></a> <?php the_time(esc_html__('d M Y','bariplan')); ?></span>
                                    <?php }?>
                                    <?php if( $element=="c"){?>
                                        <span>
                                        <?php if ( comments_open() || get_comments_number() ) {?>
                                            <a href="<?php comments_link(); ?>"><i class="icofont-comment"></i>
                                                <?php comments_number( esc_html__('0','bariplan'), esc_html__('1 ','bariplan'), esc_html__('% ','bariplan') );?>
                                            </a>
                                        <?php }else{?>
                                            <span><i class="icofont-comment"></i><?php echo esc_html__('Comments Off','bariplan'); ?></span>
                                            <span><i class="icofont-comment"></i><?php echo esc_html__('Comments Off','bariplan'); ?></span>
                                        <?php } ?>


                                        </span>
                                    <?php }?>

                            <?php }*/	?>
                            <!-- title -->
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo wp_trim_words( get_the_title(), $witr_title_length, '' );?>
                                </a>
                            </h2>
                            <!-- content -->
                            <?php if(! empty( $witrshowdata['witr_show_content'] )){?>
                                <?php echo '<p>'.wp_trim_words( get_the_content(), $witr_content_length, '' ).'</p>';?>
                            <?php } ?>
                            <div class="blog-percent">
                                <div class="percent-top">
                                    <span>11%</span>
                                    <span>131795 грн</span>
                                </div>
                                <div class="percent-line">
                                    <div class="per" style="width: 21%;">
                                        <span>Зібрано</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-btn-group">
                                <?php if(! empty( $witrshowdata['witr_blog_button'] )){?>
                                    <a class="dtbtn" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button']; ?></a>
                                <?php } ?>
                                <?php if(! empty( $witrshowdata['witr_blog_button_2'] )){?>
                                    <a class="witr_btn" href="<?php the_permalink(); ?>"><?php echo $witrshowdata['witr_blog_button_2']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div><!-- blog part -->
            </div>
        <?php endwhile;
         wp_reset_query(); wp_reset_postdata();
        ?>

        <div class="blog-btn-bottom">
            <a class="btn-white" href="<?php the_permalink(); ?>">Всі проекти</a>
        </div>
    </div>
</div>
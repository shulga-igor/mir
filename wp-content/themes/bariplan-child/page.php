<?php
/**
 * Standard blog single page
 *
 */

get_header();		

get_template_part( 'includes/header' , 'page-title' ); ?>
        <!-- BLOG AREA START -->
        <div class="bariplan-blog-area bariplan-page-template ">

            <?php
            while ( have_posts() ) : the_post();
                    global $post;
                     get_template_part( 'template-parts/content' , 'page' );
             endwhile;
             ?>


        </div>
        <!-- END BLOG AREA START -->
<?php

get_footer();		

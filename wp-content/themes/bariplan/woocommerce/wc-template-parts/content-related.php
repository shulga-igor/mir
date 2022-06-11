<?php 
$column = wc_get_loop_prop( 'columns' );
switch ($column) {
    case '4':
        $col = '3';
        $image_size = 'bariplan_300x320';
        break;
    case '3':
        $col = '4';
        $image_size = 'bariplan_270x320';
        break;		
    case '2':
        $col = '6';
        $image_size = 'full';
        break;	
    default:
        $col = '4';
        $image_size = 'bariplan_270x320';
        break;
}
?>

<div <?php wc_product_class( 'col-md-12' ); ?>>



			<!-- product item --> 	 			
				<div class="tbd_product">
					<div class="tbd_product_inner">
						<!-- image --> 
						<!-- sale -->
						<div class="tbd_product_thumb">							
							<div class="tbd_sale_price"> 
								<?php woocommerce_show_product_loop_sale_flash();?>
							</div>
							
							
							<a href="<?php the_permalink();?>" class="thumbnail_link"><?php the_post_thumbnail($image_size, array( 'class' => 'img-fluid')) ?></a>
							
							<!--  icon -->				
							<?php
							if(function_exists('bariplan_product_icons_grid')){							
								bariplan_product_icons_grid();
							} ?>
							<!-- end icon -->	
						</div>	

					</div>
					<!-- title and meta -->
					<div class="tbd_product_content">
						<div class="tbd_product_content_inner">
							<div class="tbd_product_title tbd_fload_right">
									<?php
										/**
										 * Hook: woocommerce_shop_loop_item_title.
										 *
										 * @hooked woocommerce_template_loop_product_title - 10
										 */
										 woocommerce_template_loop_product_link_open();
											do_action( 'woocommerce_shop_loop_item_title');
										woocommerce_template_loop_product_link_close();
									?>
							</div>
							<div class="tbd_price_opt clearfix">
							<?php 
							
							woocommerce_template_loop_price();
							woocommerce_template_loop_rating();
							
							?>	
								
							</div>
						</div>
					</div>				
				</div>




</div>
<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_Shape extends Widget_Base {

    public function get_name() {
        return 'witr_section_Shape';
    }
    
    public function get_title() {
        return esc_html__( ' Shape Box', 'bariplan' );
    }

    public function get_icon() {
        return 'bariplan_icon eicon-slider-push';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === shape start === */
			$this->start_controls_section(
				'witr_field_display_image',
				[
					'label' => esc_html__( 'Shape Options', 'bariplan' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* counter style check  witr_style_counter */
				$this->add_control(
					'witr_style_counter',
					[
						'label' => esc_html__( 'Counter style', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'description' => esc_html__( 'select your counter style from here', 'bariplan' ),
						'options' => [
							'1' => esc_html__( 'Shape Box Style', 'bariplan' ),
							'2' => esc_html__( 'Shape Image style', 'bariplan' ),
						],
						'default' => '1',
					]
				);
				/* text */
				$this->add_control(
					'witr_shape_title',
					[
						'label' => esc_html__( 'Text', 'bariplan' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'default' => esc_html__( 'bariplan', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your text here', 'bariplan' ),							
						'description' => esc_html__( 'Not use text, remove the text from field', 'bariplan' ),
						'condition' => [
							'witr_style_counter' => ['1'],
						],						
					]
				);
				
				/* SHOW IMAGE witr_show_image witr_image_image */
				$this->add_control(
					'witr_show_image',
					[
						'label' => esc_html__( 'Show Image', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'yes',
						'condition' => [
							'witr_style_counter' => ['2'],
						],						
					]
				);	
				/* witr_image_image */
				$this->add_control(
					'witr_image_image',
					[
						'label' => esc_html__( 'Choose Single Image', 'bariplan' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' =>'',
						],
						'condition' => [
							'witr_show_image' => 'yes',
							'witr_style_counter' => ['2'],
						],							
					]
				);
					/*  witr_zindex_height */
					$this->add_responsive_control(
						'witr_zindex_height',
						[
							'label' => esc_html__( 'Z-Index', 'astute' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'size_units' => [ 'px' ],
							'range' => [
								'px' => [
									'min' => -1,
									'max' => 9999,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_item_inner' => 'z-index: {{SIZE}};',
							],
						]
					);				
				/* witr_show_animate */
				$this->add_control(
					'witr_show_animate',
					[
						'label' => esc_html__( 'Show Animation', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'no',
						'separator'=>'before',
						'condition' => [
							'witr_show_image' => 'yes',
							'witr_style_counter' => ['2'],
						],						
					]
				);				
				

	
				/* witr_slides_to_show */ 		
				$this->add_control(
					'adt',
					[
						'label' => esc_html__( 'animation-duration', 'bariplan' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 100,
						'step' => 1,
						'default' => 5,
					]
				);				
				/* image_infinite */
				$this->add_control(
					'atf',
					[
						'label' => esc_html__( 'animation-timing-function', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'linear',
						'options' => [
							'ease' => esc_html__( 'ease', 'bariplan' ),
							'linear' => esc_html__( 'linear', 'bariplan' ),
							'ease-in' => esc_html__( 'ease-in', 'bariplan' ),
							'ease-out' => esc_html__( 'ease-out', 'bariplan' ),
							'ease-in-out' => esc_html__( 'ease-in-out', 'bariplan' ),
						],
					]
				);
				/*  witr_c_slidestoScroll */			
				$this->add_control(
					'ad',
					[
						'label' => esc_html__( 'animation-delay', 'bariplan' ),
						'type' => Controls_Manager::NUMBER,
						'separator' => 'before',					
						'min' => 1,
						'max' => 50,
						'step' => 1,
						'default' => 1,
					]
				);				
				/* witr_c_autoplay */
				$this->add_control(
					'aic',
					[
						'label' => esc_html__( 'animation-iteration-count', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'infinite',
						'options' => [
							'infinite' => esc_html__( 'infinite', 'bariplan' ),
							'1' => esc_html__( '1', 'bariplan' ),
							'2' => esc_html__( '2', 'bariplan' ),
							'3' => esc_html__( '3', 'bariplan' ),
							'4' => esc_html__( '4', 'bariplan' ),
							'5' => esc_html__( '5', 'bariplan' ),
							'6' => esc_html__( '6', 'bariplan' ),
						],
					]
				);					
				/* witr_c_arrows */
				$this->add_control(
					'adi',
					[
						'label' => esc_html__( 'animation-direction', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'alternate',
						'options' => [
							'alternate' => esc_html__( 'alternate', 'bariplan' ),
							'alternate-reverse' => esc_html__( 'alternate-reverse', 'bariplan' ),
							'normal' => esc_html__( 'normal', 'bariplan' ),
							'reverse' => esc_html__( 'reverse', 'bariplan' ),
						],
					]
				);	
				/* witr_c_arrows */
				$this->add_control(
					'aps',
					[
						'label' => esc_html__( 'animation-play-state', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'running',
						'options' => [
							'running' => esc_html__( 'running', 'bariplan' ),
							'paused' => esc_html__( 'paused', 'bariplan' ),
						],
					]
				);	
				
				/* move */
				$this->add_control(
					'anall',
					[
						'label' => esc_html__( 'Animation-name', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'separator'=>'before',
						'default' => 'witr_movelr_box45',
						'options' => [
							'none' => esc_html__( 'None', 'bariplan' ),
							'witr_movelr_box45' => esc_html__( 'witr_movelr_box45', 'bariplan' ),
							'witr_movelr_box90' => esc_html__( 'witr_movelr_box90', 'bariplan' ),
							'witr_movelr_box180' => esc_html__( 'witr_movelr_box180', 'bariplan' ),
							'witr_movelr_box360' => esc_html__( 'witr_movelr_box360', 'bariplan' ),							
							'witr_movetb_box45' => esc_html__( 'witr_movetb_box45', 'bariplan' ),
							'witr_movetb_box90' => esc_html__( 'witr_movetb_box90', 'bariplan' ),
							'witr_movetb_box180' => esc_html__( 'witr_movetb_box180', 'bariplan' ),
							'witr_movetb_box360' => esc_html__( 'witr_movetb_box360', 'bariplan' ),							
							'witr_rotate_360' => esc_html__( 'witr_rotate_360', 'bariplan' ),
							'witr_rotate_180' => esc_html__( 'witr_rotate_180', 'bariplan' ),
							'witr_rotate_90' => esc_html__( 'witr_rotate_90', 'bariplan' ),
							'witr_rotate_45' => esc_html__( 'witr_rotate_45', 'bariplan' ),

						],
					]
				);
				
			
			$this->end_controls_section();
			/* === end witr_image ===  */			
						
			
			
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
		

			/*=== start witr Arrow style ====*/

			$this->start_controls_section(
				'witr_style_option_arrow',
				[
					'label' => esc_html__( 'Witr Shape Options', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,				
				]
			);		 


					/* witr_posimg_style */
					$this->add_responsive_control(
						'witr_posimg_style',
						[
							'label' => esc_html__( 'Position', 'bariplan' ),
							'type' => Controls_Manager::SELECT,
							'separator'=>'before',
							'options' => [
								'' => esc_html__( 'Default', 'bariplan' ),
								'relative' => esc_html__( 'relative', 'bariplan' ),
								'inherit' => esc_html__( 'inherit', 'bariplan' ),
								'fixed' => esc_html__( 'fixed', 'bariplan' ),
							],							
							'selectors' => [
								'{{WRAPPER}} .witr_shape_item_inner' => 'position: {{VALUE}};',
							],							
						]
					);
			
					/*  icon width */
					$this->add_responsive_control(
						'witr_icon2_width',
						[
							'label' => esc_html__( 'width', 'astute' ),
							'type' => Controls_Manager::SLIDER,
							'default' => [
								'unit' => '%',
							],
							'tablet_default' => [
								'unit' => '%',
							],
							'mobile_default' => [
								'unit' => '%',
							],					
							'size_units' => [ '%', 'px', 'em' ],
							'range' => [
								'%' => [
									'min' => 0,
									'max' => 1920,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .witr_shape_item img' => 'width: {{SIZE}}{{UNIT}};',
							],
						]
					);
				/*  image Max width */
				$this->add_responsive_control(
					'witr_image_maxwidth',
					[
						'label' => esc_html__( 'Max width', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'default' => [
							'unit' => '%',
						],
						'tablet_default' => [
							'unit' => '%',
						],
						'mobile_default' => [
							'unit' => '%',
						],					
						'size_units' => [ '%', 'px', 'em' ],
						'range' => [
							'%' => [
								'min' => 0,
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .witr_shape_item img' => 'max-width: {{SIZE}}{{UNIT}};',
						],
					]
				);					
					
					
					/*  icon height */
					$this->add_responsive_control(
						'witr_icon2_height',
						[
							'label' => esc_html__( 'Height', 'astute' ),
							'type' => Controls_Manager::SLIDER,
							'separator'=>'before',
							'size_units' => [ 'px', '%', 'em' ],
							'range' => [
								'px' => [
									'min' => 6,
									'max' => 2000,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .witr_shape_box' => 'height: {{SIZE}}{{UNIT}};',
							],
						]
					);
					/*  Rotate */
					$this->add_responsive_control(
						'witr_rotate_img',
						[
							'label' => esc_html__( 'Image Rotate', 'bariplan' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => [ 'deg' ],
							'default' => [
								'size' => 0,
								'unit' => 'deg',
							],
							'tablet_default' => [
								'unit' => 'deg',
							],
							'mobile_default' => [
								'unit' => 'deg',
							],
							'selectors' => [
								'{{WRAPPER}} .single_img_ani img,{{WRAPPER}} .witr_shape_image img' => 'transform: rotate({{SIZE}}{{UNIT}});',
							],
							'condition' => [
								'witr_style_counter' => ['2'],
							],							
						]
					);					
						/* Arrow background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_arrow_background',
								'label' => esc_html__( 'Shape Background', 'bariplan' ),
								'types' => ['classic','gradient','video'],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box',
							]
						);						
						/* witr_arrowborder_style */
						$this->add_group_control(
							Group_Control_Border::get_type(),
							[
								'name' => 'witr_arrowborder_style',
								'label' => esc_html__( 'Shape Border', 'bariplan' ),
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .single_img_ani img',
							]
						);
						
						/* border_radius */
						$this->add_control(
							'witr_border_arrow_radius',
							[
								'label' => esc_html__( 'Shape Border Radius', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_box,{{WRAPPER}} .single_img_ani img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
						$this->add_control(
							'witr_thovers_color',
							[
								'label' => esc_html__( 'Text Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_PRIMARY,
								],					
								'selectors' => [
									'{{WRAPPER}} .witr_shape_box_text' => 'color: {{VALUE}}',
								],
							]
						);
						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_ttpys_color',
								'label' => esc_html__( 'Text Typography', 'bariplan' ),
								'global' => [
									'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
								],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .witr_shape_box_text',
							]
						);		
	

						$this->add_control(
							'witr_h_tb',
							[
								'label' => __( 'Select one time 2 style ex- top & left, If you need', 'bariplan' ),
								'type' => Controls_Manager::HEADING,
								'separator' => 'before',
							]
						);						
						/* witr_top */
						$this->add_responsive_control(
							'witr_top',
							[
								'label' => esc_html__( 'Top', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'top: {{SIZE}}{{UNIT}};',
								],
							]
						);
						
						/* witr_left */
						$this->add_responsive_control(
							'witr_left',
							[
								'label' => esc_html__( 'Left', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'left: {{SIZE}}{{UNIT}};',
								],
							]
						);
		
						/* witr_right */
						$this->add_responsive_control(
							'witr_right',
							[
								'label' => esc_html__( 'Right', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -1000,
										'max' => 5000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);
						/* witr_right */
						$this->add_responsive_control(
							'witr_bottom',
							[
								'label' => esc_html__( 'Bottom', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -5000,
										'max' => 5000,
									],
									'%' => [
										'min' => -5000,
										'max' => 5000,
									],
								],
								'selectors' => [
									'{{WRAPPER}} .witr_shape_item_inner' => 'bottom: {{SIZE}}{{UNIT}};',
								],
							]
						);					
					



			 $this->end_controls_section();
			/*=== end  witr Arrow style ====*/
			

		



    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
$adt=$atf=$ad=$aic=$adi=$aps=$arrows=$dots=$res1=$res2=$res3=$unic_id="";

		if(! empty($witrshowdata['adt'])){
			$slidestoShow=$witrshowdata['adt'];
		}
		if(! empty($witrshowdata['atf'])){
			$infinite=$witrshowdata['atf'];
		}
		if(! empty($witrshowdata['witr_c_autoplay'])){
			$autoplay=$witrshowdata['witr_c_autoplay'];
		}
		if(! empty($witrshowdata['witr_c_autoplaySpeed'])){
			$autoplayspeed=$witrshowdata['witr_c_autoplaySpeed'];
		}
		if(! empty($witrshowdata['witr_c_speed'])){
			$speed=$witrshowdata['witr_c_speed'];
		}
		if(! empty($witrshowdata['witr_c_slidestoScroll'])){
			$slidestoscroll=$witrshowdata['witr_c_slidestoScroll'];
		}
		if(! empty($witrshowdata['witr_c_arrows'])){
			$arrows=$witrshowdata['witr_c_arrows'];
		}
		if(! empty($witrshowdata['witr_c_dots'])){
			$dots=$witrshowdata['witr_c_dots'];
		}
		if(! empty($witrshowdata['witr_c_res1'])){
			$res1=$witrshowdata['witr_c_res1'];
		}
		if(! empty($witrshowdata['witr_c_res2'])){
			$res2=$witrshowdata['witr_c_res2'];
		}
		if(! empty($witrshowdata['witr_c_res3'])){
			$res3=$witrshowdata['witr_c_res3'];
		}
		if(! empty($witrshowdata['witr_unicid_c'])){
			$unic_id=$witrshowdata['witr_unicid_c'];	
		}
		


		switch ( $witrshowdata['witr_style_counter'] ) {	
	
		case '2':		
	?>
			
	<div class="witr_shape_item">
		<div class="witr_shape_item_inner">
		<div class="witr_shape_image <?php if($witrshowdata['witr_show_animate']=='yes'){ ?> single_img_ani <?php } ?>" style="animation: <?php echo $witrshowdata['anall'];?>  <?php echo $witrshowdata['adt'];?>s  <?php echo $witrshowdata['atf'];?>  <?php echo $witrshowdata['ad'];?>s  <?php echo $witrshowdata['aic'];?>  <?php echo $witrshowdata['adi'];?>  <?php echo $witrshowdata['aps'];?>;">
			<!-- image -->
			<?php if(isset($witrshowdata['witr_image_image']['url']) && ! empty($witrshowdata['witr_image_image']['url'])){?>
				<img src="<?php echo $witrshowdata['witr_image_image']['url'];?>" alt="" />
			<?php } ?>
	
		</div>
		</div>
	</div>
			

		
		<?php
		break;
		
		default:
		?>
			<div class="witr_shape_item">
				<div class="witr_shape_item_inner" style="animation: <?php echo $witrshowdata['anall'];?>  <?php echo $witrshowdata['adt'];?>s  <?php echo $witrshowdata['atf'];?>  <?php echo $witrshowdata['ad'];?>s  <?php echo $witrshowdata['aic'];?>  <?php echo $witrshowdata['adi'];?>  <?php echo $witrshowdata['aps'];?>;">
					<div class="witr_shape_box">	
						<!-- text -->
						<?php if(isset($witrshowdata['witr_shape_title']) && ! empty($witrshowdata['witr_shape_title'])){?>
							<div class="witr_shape_box_text">	
								<?php echo $witrshowdata['witr_shape_title'];?>
							</div>
						<?php } ?>					
					</div>
				</div>
			</div>	
			
		<?php
		break;

		
		} 				
	


    } /* function end */



}
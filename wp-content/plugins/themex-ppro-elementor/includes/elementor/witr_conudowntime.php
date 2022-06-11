<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_Countdown extends Widget_Base {

    public function get_name() {
        return 'witr_section_countdown';
    }
    
    public function get_title() {
        return esc_html__( ' Countdown Time', 'bariplan' );
    }

    public function get_icon() {
        return 'bariplan_icon eicon-countdown';
    }
	public function get_style_depends() {
        return [ 'wcountdown' ];
    }		
	public function get_script_depends() {
        return [ 'countdownjs' ];
    }	
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_countdown start === */
			$this->start_controls_section(
				'witr_field_display_countdown',
				[
					'label' => esc_html__( 'Countdown Options', 'bariplan' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
				
				/* countdown title witr_countdown_year */	
					$this->add_control(
						'witr_countdown_year',
						[
							'label' => esc_html__( 'Year', 'bariplan' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use year, your countdown not work*', 'bariplan' ),
							'default' => esc_html__( '2022', 'bariplan' ),
							'placeholder' => esc_attr__( 'Type your year here*', 'bariplan' ),						
						]
					);
					/* countdown time witr_countdown_month */	
					$this->add_control(
						'witr_countdown_month',
						[
							'label' => esc_html__( 'Month', 'bariplan' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use month, your countdown not work*', 'bariplan' ),
							'default' => esc_html__( '12', 'bariplan' ),
							'placeholder' => esc_attr__( 'Type your month here*', 'bariplan' ),						
						]
					);
						/* countdown time witr_countdown_day */	
					$this->add_control(
						'witr_countdown_day',
						[
							'label' => esc_html__( 'Day', 'bariplan' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Not use day, your countdown not work*', 'bariplan' ),
							'default' => esc_html__( '30', 'bariplan' ),
							'placeholder' => esc_attr__( 'Type your day here*', 'bariplan' ),						
						]
					);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_alignd',
					[
						'label' => esc_html__( 'Text Align', 'bariplan' ),
						'type' => Controls_Manager::CHOOSE,					
						'options' => [
							'left' => [
								'title' => esc_html__( 'Left', 'bariplan' ),
								'icon' => 'eicon-text-align-left',
							],
							'center' => [
								'title' => esc_html__( 'Center', 'bariplan' ),
								'icon' => 'eicon-text-align-center',
							],
							'right' => [
								'title' => esc_html__( 'Right', 'bariplan' ),
								'icon' => 'eicon-text-align-right',
							],
							'justify' => [
								'title' => esc_html__( 'Justified', 'bariplan' ),
								'icon' => 'eicon-text-align-justify',
							],
						],
						'prefix_class' => 'bariplan-star-rating%s--align-',
						'selectors' => [
							'{{WRAPPER}} .counterdowns' => 'text-align: {{VALUE}}',
						],
					]
				);	

				/* witr_show_button witr_button witr_button_link	
				$this->add_control(
					'witr_show_button',
					[
						'label' => esc_html__( 'Show Text button', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);				
				$this->add_control(
					'witr_button',
					[
						'label' => esc_html__( 'Button Text', 'bariplan' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'explore more', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'bariplan' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);

			  witr_button_link 
				$this->add_control(
					'witr_button_link',
					[
						'label' => esc_html__( 'Button Link', 'bariplan' ),
						'type' => Controls_Manager::URL,
						'description' =>esc_html__('Insert button link. It hidden when field blank.','bariplan'),
						'placeholder' => esc_attr__( 'https://your_site.com', 'bariplan' ),
						'show_external' => true,
						'default' => [
							'url' => '#',
							'is_external' => true,
							'nofollow' => true,
						],	
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);*/

					
					
			/* countdown style check  witr_style_countdown */
				$this->add_control(
					'witr_style_countdown',
					[
						'label' => esc_html__( 'When you set year, month and day. that time countdown not work properly. completed set, please reload, then work fine', 'bariplan' ),
						'type' => Controls_Manager::HEADING,						
					]
				);						
					

			$this->end_controls_section();
			/*=== end  witr countdown style ====*/
					
			

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_option_number',
				[
					'label' => esc_html__( 'Number Color Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);		 
				/* color */
				$this->add_control(
					'witr_number_color',
					[
						'label' => esc_html__( 'Color', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'global' => [
							'default' => Global_Colors::COLOR_SECONDARY,
						],						
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'color: {{VALUE}}',
						],
					]
				);
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_ttpy_number',
						'label' => esc_html__( 'Typography', 'bariplan' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
						],
						'selector' => '{{WRAPPER}} span.time-counts',
					]
				);		
				
				/* title margin */
				$this->add_responsive_control(
					'witr_number_margin',
					[
						'label' => __( 'Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* title padding */
				$this->add_responsive_control(
					'witr_number_padding',
					[
						'label' => __( 'Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.time-counts' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/			
			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_option_title',
				[
					'label' => esc_html__( 'Number Title Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);		 
				/* color */
				$this->add_control(
					'witr_title_color',
					[
						'label' => esc_html__( 'Color', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'global' => [
							'default' => Global_Colors::COLOR_PRIMARY,
						],						
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'color: {{VALUE}}',
						],
					]
				);
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_ttpy_color',
						'label' => esc_html__( 'Typography', 'bariplan' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
						],
						'selector' => '{{WRAPPER}} .counterdowns p',
					]
				);		
				
				/* title margin */
				$this->add_responsive_control(
					'witr_title_margin',
					[
						'label' => __( 'Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* title padding */
				$this->add_responsive_control(
					'witr_title_padding',
					[
						'label' => __( 'Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .counterdowns p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			
			/*=== start witr Group style ====*/

			$this->start_controls_section(
				'witr_style_option_group',
				[
					'label' => esc_html__( 'Box Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,					
				]
			);
				/*  background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_icons_background',
						'label' => esc_html__( 'Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns',
					]
				);
				/*  icon width */
				$this->add_responsive_control(
					'witr_group_width',
					[
						'label' => esc_html__( 'width', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%'],
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 6,
								'max' => 5000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  icon height */
				$this->add_responsive_control(
					'witr_group_height',
					[
						'label' => esc_html__( 'Height', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%'],
						'separator'=>'before',
						'range' => [
							'px' => [
								'min' => 1,
								'max' => 5000,
							],
							'%' => [
								'min' => 1,
								'max' => 5000,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_text_align',
					[
						'label' => esc_html__( 'Text Align', 'bariplan' ),
						'type' => Controls_Manager::CHOOSE,					
						'options' => [
							'left' => [
								'title' => esc_html__( 'Left', 'bariplan' ),
								'icon' => 'eicon-text-align-left',
							],
							'center' => [
								'title' => esc_html__( 'Center', 'bariplan' ),
								'icon' => 'eicon-text-align-center',
							],
							'right' => [
								'title' => esc_html__( 'Right', 'bariplan' ),
								'icon' => 'eicon-text-align-right',
							],
							'justify' => [
								'title' => esc_html__( 'Justified', 'bariplan' ),
								'icon' => 'eicon-text-align-justify',
							],
						],
						'prefix_class' => 'bariplan-star-rating%s--align-',
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'text-align: {{VALUE}}',
						],
					]
				);

					/* witr_border_style */
					$this->add_control(
						'witr_border_btn_style',
						[
							'label' => esc_html__( 'Border Style', 'bariplan' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'default' => esc_html__( 'Default', 'bariplan' ),
								'none' => esc_html__( 'none', 'bariplan' ),
								'solid' => esc_html__( 'Solid', 'bariplan' ),
								'double' => esc_html__( 'Double', 'bariplan' ),
								'dotted' => esc_html__( 'Dotted', 'bariplan' ),
								'dashed' => esc_html__( 'Dashed', 'bariplan' ),
							],
							'default' => 'default',
							'selectors' => [
								'{{WRAPPER}} span.cdowns' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_btn',
						[
							'label' => esc_html__( 'Border', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} span.cdowns' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_border_btn_color',
						[
							'label' => esc_html__( 'Border Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} span.cdowns' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);				
				/* border_radius */
				$this->add_control(
					'witr_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			
	
				/* group margin */
				$this->add_responsive_control(
					'witr_group_margin',
					[
						'label' => __( 'Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* group padding */
				$this->add_responsive_control(
					'witr_group_padding',
					[
						'label' => __( 'Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} span.cdowns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
			 
			 $this->end_controls_section();
			/*=== end  witr group style ====*/			
			

			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_dotcolorbefore',
				[
					'label' => esc_html__( 'Dot Before Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);	


				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'Show/Hide Dot', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);
				$this->add_control(
					'witr_style_countdown12',
					[
						'label' => esc_html__( 'When you set off,that time countdown not work properly. so when set off, then save document and, please reload it, then work fine', 'bariplan' ),
						'type' => Controls_Manager::HEADING,						
					]
				);						
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_dot_background',
						'separator'=>'before',
						'label' => esc_html__( 'Background', 'bariplan' ),						
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns::before',
					]
				);
						/* witr_top */
						$this->add_responsive_control(
							'witr_top1',
							[
								'label' => esc_html__( 'Top', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px'],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} span.cdowns::before' => 'top: {{SIZE}}{{UNIT}};',
								],
							]
						);
						
						/* witr_left */
						$this->add_responsive_control(
							'witr_left1',
							[
								'label' => esc_html__( 'Left', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%' ],
								'range' => [
									'px' => [
										'min' => -500,
										'max' => 500,
									],
									
								],
								'selectors' => [
									'{{WRAPPER}} span.cdowns::before' => 'right: {{SIZE}}{{UNIT}};',
								],
							]
						);					
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			/*=== start witr_title style ====*/

			$this->start_controls_section(
				'witr_style_dotcolorafter',
				[
					'label' => esc_html__( 'Dot After Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
				]
			);	


				$this->add_control(
					'witr_show_icon2',
					[
						'label' => esc_html__( 'Show/Hide Dot', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'separator'=>'before',
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);
				$this->add_control(
					'witr_style_countdown13',
					[
						'label' => esc_html__( 'When you set off,that time countdown not work properly. so when set off, then save document and, please reload it, then work fine', 'bariplan' ),
						'type' => Controls_Manager::HEADING,						
					]
				);					
				/* Icon background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_dot_background2',
						'separator'=>'before',
						'label' => esc_html__( 'Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} span.cdowns::after',
					]
				);
				/* witr_top */
				$this->add_responsive_control(
					'witr_top',
					[
						'label' => esc_html__( 'Top', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px'],
						'range' => [
							'px' => [
								'min' => -500,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns::after' => 'top: {{SIZE}}{{UNIT}};',
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
								'min' => -500,
								'max' => 500,
							],
							
						],
						'selectors' => [
							'{{WRAPPER}} span.cdowns::after' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);				
			 $this->end_controls_section();
			/*=== end  witr_title style ====*/					
			
			
			
			
			
			
			
			
    } /*==function end==*/

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	

		

		?>
				<div class="counterdowns">
					<div class="witr_countdown">	
						<div class="timer">
							<div class="timer_section  <?php if($witrshowdata['witr_show_icon'] =='yes'){echo ""; }else{echo "dotnoneb";}?>  <?php if($witrshowdata['witr_show_icon2'] =='yes'){echo ""; }else{echo "dotnonea";}?>">
								<?php if(isset($witrshowdata['witr_countdown_year']) && ! empty($witrshowdata['witr_countdown_year'])){?>						
										<div class="autob" data-countdown="<?php echo $witrshowdata['witr_countdown_year']; ?>/<?php echo $witrshowdata['witr_countdown_month']; ?>/<?php echo $witrshowdata['witr_countdown_day']; ?>"></div>						
								<?php } ?>								
								
							</div>									
						</div>									
					</div>
				</div>			
		
		
		<script type='text/javascript'>
			jQuery(function($){

			/*---------------------
			 countdown
			--------------------- */
				$('[data-countdown]').each(function() {
				  var $this = $(this), finalDate = $(this).data('countdown');
				  $this.countdown(finalDate, function(event) {
					$this.html(event.strftime('<span class="cdowns days"><span class="time-counts">%-D</span> <p>Days</p></span> <span class="cdowns hour"><span class="time-counts">%-H</span> <p>Hour</p></span> <span class="cdowns minutes"><span class="time-counts">%M</span> <p>Min</p></span> <span class="cdowns second"> <span><span class="time-counts">%S</span> <p>Sec</p></span>'));
				  });
				});							
			
			
			});
		</script>	
<?php
	
	
	

    } /* function end */
	
	


}
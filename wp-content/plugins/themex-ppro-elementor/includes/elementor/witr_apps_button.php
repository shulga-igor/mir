<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_App_Button extends Widget_Base {

    public function get_name() {
        return 'witr_section_app_button';
    }
    
    public function get_title() {
        return esc_html__( ' Apps Button', 'bariplan' );
    }
	public function get_style_depends() {
        return [ 'wbtnapp' ];
    }
    public function get_icon() {
        return 'bariplan_icon eicon-button';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === witr_button start === */
			$this->start_controls_section(
				'witr_field_display_button',
				[
					'label' => esc_html__( ' App Button Options', 'bariplan' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
			/* witr_align */					
			$this->add_responsive_control(
				'witr_align',
				[
					'label' => esc_html__( ' Alignment', 'bariplan' ),
					'type' => Controls_Manager::CHOOSE,
					'separator' => 'before',					
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
					'prefix_class' => 'w_apps_button_image%s--align-',
					'selectors' => [
						'{{WRAPPER}}' => 'text-align: {{VALUE}}',
					],
				]
			);			
	
			/* show image witr_show_image witr_image_link */
			$this->add_control(
				'witr_show_image',
				[
					'label' => esc_html__( 'Show Button Image', 'bariplan' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bariplan' ),
					'label_off' => esc_html__( 'Hide', 'bariplan' ),
					'return_value' => 'yes',
					'default' => 'no',								
				]
			);				
			
			$this->add_control(
				'witr_button_image',
				[
					'label' => esc_html__( 'Choose Button Image', 'bariplan' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'',
					],
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			/*  witr_image_link */	
			$this->add_control(
				'witr_image_link',
				[
					'label' => esc_html__( 'Image Link', 'bariplan' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert image link. It hidden when field blank.','bariplan'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'bariplan' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
					],	
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);			
			
			
			/*  witr_button_image2 witr_image_link2 */				
			$this->add_control(
				'witr_button_image2',
				[
					'label' => esc_html__( 'Choose Button Image', 'bariplan' ),
					'type' => Controls_Manager::MEDIA,
					'default' => [
						'url' =>'#',
					],
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			/*  witr_image_link2 */	
			$this->add_control(
				'witr_image_link2',
				[
					'label' => esc_html__( 'Image Link2', 'bariplan' ),
					'type' => Controls_Manager::URL,
					'description' =>esc_html__('Insert image link. It hidden when field blank.','bariplan'),
					'placeholder' => esc_attr__( 'https://your_site.com', 'bariplan' ),
					'show_external' => true,
					'default' => [
						'url' => '#',
					],	
					'condition' => [
						'witr_show_image' => 'yes',
					],							
				]
			);
			
				/* SHOW BUTTON witr_show_button witr_button witr_button_link	*/
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
						'default' => esc_html__( 'Android App On', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'bariplan' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);
				$this->add_control(
					'witr_button2',
					[
						'label' => esc_html__( 'Button Text', 'bariplan' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'Google Play', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'bariplan' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);
				/*  witr_button_link */	
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
						],	
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);	
				$this->add_control(
					'witr_button3',
					[
						'label' => esc_html__( 'Button2 Text', 'bariplan' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'separator' => 'before',
						'default' => esc_html__( 'Available On The', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'bariplan' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],						
					]
				);
				$this->add_control(
					'witr_button4',
					[
						'label' => esc_html__( 'Button2 Text', 'bariplan' ),
						'label_block' =>true,
						'type' => Controls_Manager::TEXT,
						'default' => esc_html__( 'App Store', 'bariplan' ),
						'placeholder' => esc_attr__( 'Type your button text here', 'bariplan' ),
						'condition' => [
							'witr_show_button' => 'yes',
						],						
					]
				);
				
				/*  witr_button_link2 */	
				$this->add_control(
					'witr_button_link2',
					[
						'label' => esc_html__( 'Button2 Link', 'bariplan' ),
						'type' => Controls_Manager::URL,
						'description' =>esc_html__('Insert button link. It hidden when field blank.','bariplan'),
						'placeholder' => esc_attr__( 'https://your_site.com', 'bariplan' ),
						'show_external' => true,
						'default' => [
							'url' => '#',
						],	
						'condition' => [
							'witr_show_button' => 'yes',
						],							
					]
				);	
				
				
				/* witr_show_icon witr_button_icon witr_button_icon2	*/
				$this->add_control(
					'witr_show_icon',
					[
						'label' => esc_html__( 'show_icon', 'bariplan' ),
						'type' => Controls_Manager::SWITCHER,
						'separator' => 'before',
						'label_on' => esc_html__( 'Show', 'bariplan' ),
						'label_off' => esc_html__( 'Hide', 'bariplan' ),
						'return_value' => 'yes',
						'default' => 'yes',
						'condition' => [
						'witr_show_button' => 'yes',
						],					
					]
				);				
					$this->add_control(
						'witr_button_icon',
						[
							'label' => esc_html__( 'Icon', 'bariplan' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'bariplan' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'icofont-google-plus-play',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
								'witr_show_button' => 'yes',
							],							
						]
					);
					$this->add_control(
						'witr_button_icon2',
						[
							'label' => esc_html__( 'Icon2', 'bariplan' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'bariplan' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fab fa-apple',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
								'witr_show_button' => 'yes',
							],							
						]
					);
					
					
			$this->end_controls_section();
			/* === end witr_button ===  */			

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			

		/*=== start witr_image style ====*/
		$this->start_controls_section(
			'witr_style_image_Option',
			[
				'label' => esc_html__( 'Button Images option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
						'witr_show_image' => 'yes',
				],
			]
		);		 
			
			
				/*  image width */
				$this->add_responsive_control(
					'witr_image_width',
					[
						'label' => esc_html__( 'width', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'separator'=>'before',
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 25,
								'max' => 1920,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'width: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  image height */
				$this->add_responsive_control(
					'witr_image_height',
					[
						'label' => esc_html__( 'Height', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'%' => [
								'min' => 25,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'height: {{SIZE}}{{UNIT}};',
						],
					]			
				);

				/* image margin */
				$this->add_responsive_control(
					'witr_image_margin',
					[
						'label' => esc_html__( 'Image Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* image padding */
				$this->add_responsive_control(
					'witr_image_padding',
					[
						'label' => esc_html__( 'Image Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .w_apps_button_image a img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
		 
		 $this->end_controls_section();
		/*=== end  witr_image style ====*/			
			
			
			
			/*=== start witr button style ====*/

			$this->start_controls_section(
				'witr_style_option_button',
				[
					'label' => esc_html__( 'Button Color Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_show_button' => 'yes',
					],					
				]
			);		 

				/*=== start button_tabs style ====*/
				$this->start_controls_tabs( 'button_colors' );
				
					/*=== start button_normal style ====*/
					$this->start_controls_tab(
						'witr_button_colors_normal',
						[
							'label' => esc_html__( 'Normal', 'bariplan' ),
						]
					);
					
					
						/* Icon Color */
						$this->add_control(
							'witr_primary_color',
							[
								'label' => esc_html__( 'Icon Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} span.ibariplan' => 'color: {{VALUE}}',
								],
								
							]
						);				
						/*  icon font size */
						$this->add_responsive_control(
							'witr_icon_size',
							[
								'label' => esc_html__( 'Icon Size', 'bariplan' ),
								'type' => Controls_Manager::SLIDER,
								'size_units' => [ 'px', '%', 'em' ],
								'range' => [
									'px' => [
										'min' => 6,
										'max' => 500,
									],
								],
								'selectors' => [
									'{{WRAPPER}} span.ibariplan' => 'font-size: {{SIZE}}{{UNIT}};',
								],
							]
						);					
						/* icon margin */
						$this->add_responsive_control(
							'witr_icon_margin',
							[
								'label' => esc_html__( 'Icon Margin', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.ibariplan' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* icon padding 
						$this->add_responsive_control(
							'witr_icon_padding',
							[
								'label' => esc_html__( 'Icon Padding', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.ibariplan' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);*/					

						/* Title color */
						$this->add_control(
							'witr_button_color',
							[
								'label' => esc_html__( 'Title Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'color: {{VALUE}}',
								],
							]
						);				

						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_button_typography',
								'label' => esc_html__( 'Typography', 'bariplan' ),
								'selector' => '{{WRAPPER}} span.spaninner span.smalltext',
							]
						);	
						/* Title margin */
						$this->add_responsive_control(
							'witr_title_margin',
							[
								'label' => esc_html__( 'Title Margin', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* Title padding */
						$this->add_responsive_control(
							'witr_title_padding',
							[
								'label' => esc_html__( 'Title Padding', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.smalltext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);						
						/* Title2 color */
						$this->add_control(
							'witr_button2_color',
							[
								'label' => esc_html__( 'Title2 Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'global' => [
									'default' => Global_Colors::COLOR_PRIMARY,
								],								
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'color: {{VALUE}}',
								],
							]
						);				

						/* typograohy color */			
						$this->add_group_control(
							Group_Control_Typography::get_type(),
							[
								'name' => 'witr_button2_typography',
								'label' => esc_html__( 'Typography', 'bariplan' ),
								'global' => [
									'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
								],
								'selector' => '{{WRAPPER}} span.spaninner span.largetext',
							]
						);
						/* Title2 margin */
						$this->add_responsive_control(
							'witr_title2_margin',
							[
								'label' => esc_html__( 'Title2 Margin', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* Title2 padding */
						$this->add_responsive_control(
							'witr_title2_padding',
							[
								'label' => esc_html__( 'Title2 Padding', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} span.spaninner span.largetext' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);						
						
						/* witr_border_style */
						$this->add_control(
							'witr_border_btn_style',
							[
								'label' => esc_html__( 'Border Style', 'bariplan' ),
								'type' => Controls_Manager::SELECT,
								'separator'=>'before',
								'options' => [
									'none' => esc_html__( 'none', 'bariplan' ),
									'solid' => esc_html__( 'Solid', 'bariplan' ),
									'double' => esc_html__( 'Double', 'bariplan' ),
									'dotted' => esc_html__( 'Dotted', 'bariplan' ),
									'dashed' => esc_html__( 'Dashed', 'bariplan' ),
								],
								'default' => ' ',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-style: {{VALUE}}',
								],
							]
						);
						
						/* witr border */
						$this->add_control(
							'witr_borde_btn',
							[
								'label' => esc_html__( 'Border', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'condition' =>[
									'witr_border_btn_style' => ['solid','double','dotted','dashed']
								],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								
							]
						);
						/* border_color */
						$this->add_control(
							'witr_border_btn_color',
							[
								'label' => esc_html__( 'Border Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'condition' =>[
									'witr_border_btn_style' => ['solid','double','dotted','dashed']
								],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-color: {{VALUE}}',
								],
								
							]
						);
						/* border_radius */
						$this->add_control(
							'witr_border_btn_radius',
							[
								'label' => esc_html__( 'Border Radius', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* Button background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_background',
								'label' => esc_html__( 'button Background', 'bariplan' ),
								'types' => ['classic','gradient'],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .w_apps_button a',
							]
						);						
						/* button margin */
						$this->add_responsive_control(
							'witr_button_margin',
							[
								'label' => esc_html__( 'Margin', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);
						/* button padding */
						$this->add_responsive_control(
							'witr_button_padding',
							[
								'label' => esc_html__( 'Padding', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
							]
						);					
					

					$this->end_controls_tab();
					/*=== end button normal style ====*/
				
						/*=== start button hover style ====*/
						$this->start_controls_tab(
							'witr_button_colors_hover',
							[
								'label' => esc_html__( 'Button Hover', 'bariplan' ),
								
							]
						);

						/* Icon Hover Color */
						$this->add_control(
							'witr_icon_color',
							[
								'label' => esc_html__( 'Icon Hover Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'default' => '',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.ibariplan' => 'color: {{VALUE}}',
								],
								
							]
						);						
						/* Title color */
						$this->add_control(
							'witr_thover_color',
							[
								'label' => esc_html__( 'Title Hover Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.spaninner span.smalltext' => 'color: {{VALUE}}',
								],
							]
						);					
						/* Title2 color */
						$this->add_control(
							'witr_hover2_color',
							[
								'label' => esc_html__( 'Title2 Hover Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover span.spaninner span.largetext' => 'color: {{VALUE}}',
								],
							]
						);					
												
						/* border_hover_color */
						$this->add_control(
							'witr_borderh_btn_color',
							[
								'label' => esc_html__( 'Border Hover Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a:hover' => 'border-color: {{VALUE}}',
								],
							]
						);					
						/* Button Hover background */
						$this->add_group_control(
							Group_Control_Background::get_type(),
							[
								'name' => 'witr_button_hover_background',
								'label' => esc_html__( 'button Hover Background', 'bariplan' ),
								'types' => ['classic','gradient'],
								'separator'=>'before',
								'selector' => '{{WRAPPER}} .w_apps_button a:hover',
							]
						);						
						
						$this->end_controls_tab();
						/*=== end button hover style ====*/
						
				$this->end_controls_tabs();
				/*=== end button_tabs style ====*/			
			 
			 $this->end_controls_section();
			/*=== end  witr button style ====*/				
			
			
			/*=== start witr_Active Button style ====*/
			$this->start_controls_section(
				'witr_sbutton',
				[
					'label' => esc_html__( 'Active Button Option', 'bariplan' ),
					'tab' => Controls_Manager::TAB_STYLE,
					'condition' => [
						'witr_show_button' => 'yes',
					],					
					
				]
			);	

				/* Button background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_button_active_background',
						'label' => esc_html__( 'Button Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'separator'=>'before',
						'selector' => '{{WRAPPER}} .w_apps_button a.active',
					]
				);
				/* Button Color */
				$this->add_control(
					'witr_abutton_color',
					[
						'label' => esc_html__( 'Active Text Color', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',						
						'default' => '',
						'selectors' => [
							'{{WRAPPER}} span.ibariplan.active, {{WRAPPER}} span.spaninner.active' => 'color: {{VALUE}}',
						],
						
					]
				);
						/* border_color */
						$this->add_control(
							'witr_aborder_btn_color',
							[
								'label' => esc_html__( 'Active Border Color', 'bariplan' ),
								'type' => Controls_Manager::COLOR,
								'separator'=>'before',
								'selectors' => [
									'{{WRAPPER}} .w_apps_button a.active' => 'border-color: {{VALUE}}',
								],
							]
						);				
			
			$this->end_controls_section();
			/* === end witr_Active Button ===  */			
			
			
			
			
			
			
			
			
    } /*==function end==*/

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		
		$target_btn = ! empty($witrshowdata['witr_button_link']['is_external']) ? ' target="_blank"' : '';
		$nofollow_btn = ! empty($witrshowdata['witr_button_link']['nofollow']) ? ' rel="nofollow"' : '';
		$target_btnb = ! empty($witrshowdata['witr_button_link2']['is_external']) ? ' target="_blank"' : '';
		$nofollow_btnb = ! empty($witrshowdata['witr_button_link2']['nofollow']) ? ' rel="nofollow"' : '';	 		
		$target_img = ! empty($witrshowdata['witr_image_link']['is_external']) ? ' target="_blank"' : '';
		$nofollow_img = ! empty($witrshowdata['witr_image_link']['nofollow']) ? ' rel="nofollow"' : '';
		$target_imgt = ! empty($witrshowdata['witr_image_link2']['is_external']) ? ' target="_blank"' : '';
		$nofollow_imgt = ! empty($witrshowdata['witr_image_link2']['nofollow']) ? ' rel="nofollow"' : '';		
		 
			?>
				<?php if($witrshowdata['witr_show_image']=='yes'){?>				
				<div class="w_apps_image_area">	
					<!-- image -->
					<?php if( ! empty($witrshowdata['witr_image_link']['url'])){?>
						<div class="w_apps_button_image"><a href="<?php echo $witrshowdata['witr_image_link'] ['url'];?>"<?php echo $target_img,$nofollow_img?>>
							<img src="<?php echo $witrshowdata['witr_button_image']['url'];?>" alt="" /></a>
						</div>
					<?php } ?>
					<!-- image 2 -->
					<?php if( ! empty($witrshowdata['witr_image_link2']['url'])){?>
						<div class="w_apps_button_image"><a href="<?php echo $witrshowdata['witr_image_link2'] ['url'];?>"<?php echo $target_imgt,$nofollow_imgt?>>
							<img src="<?php echo $witrshowdata['witr_button_image2']['url'];?>" alt="" /></a>
						</div>
					<?php } ?>
				</div>
				<?php } ?>
					<!-- button -->
				<?php if($witrshowdata['witr_show_button']=='yes'){?>	
				<div class="w_apps_button_area">	
					<?php if( ! empty($witrshowdata['witr_button_link']['url'])){?>
						<div class="w_apps_button"><a class="active" href="<?php echo $witrshowdata['witr_button_link'] ['url'];?>"<?php echo $target_btn,$nofollow_btn?>>
							<!-- icon -->
							<span class="ibariplan active"><i class="<?php echo esc_attr( $witrshowdata['witr_button_icon']['value']);?>"></i></span>							
							<!-- end icon -->							
							<span class="spaninner active">
								<span class="smalltext"><?php echo $witrshowdata['witr_button'];?></span>
								<span class="largetext"><?php echo $witrshowdata['witr_button2'];?></span>
							</span></a>
						</div>
					<?php }?>
					
					<!-- button 2 -->
					<?php if( ! empty($witrshowdata['witr_button_link2']['url'])){?>
						<div class="w_apps_button"><a href="<?php echo $witrshowdata['witr_button_link2'] ['url'];?>"<?php echo $target_btnb,$nofollow_btnb?>>
							<!-- icon -->
							<span class="ibariplan"><i class="<?php echo esc_attr( $witrshowdata['witr_button_icon2']['value']);?>"></i></span>					
							<!-- end icon -->
							<span class="spaninner">
								<span class="smalltext"><?php echo $witrshowdata['witr_button3'];?></span>
								<span class="largetext"><?php echo $witrshowdata['witr_button4'];?></span>
							</span></a>
						</div>
					<?php }?>
				</div>	
				<?php } ?>
			<?php 
			

    } /* function end */
	
	
	


}
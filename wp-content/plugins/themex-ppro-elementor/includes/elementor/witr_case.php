<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_Case extends Widget_Base {

    public function get_name() {
        return 'witr_section_case';
    }
  
    public function get_title() {
        return esc_html__( 'Case Study', 'bariplan' );
    }

    public function get_icon() {
        return 'bariplan_icon eicon-featured-image';
    }
    public function get_style_depends() {
        return [ 'wcase' ];
    }	
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

			/* === w_case start === */
			$this->start_controls_section(
				'witr_field_display_case',
				[
					'label' => esc_html__( ' Case Study Options', 'bariplan' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);	

				/* style check  witr_style_feature */
				$this->add_control(
					'witr_style_case',
					[
						'label' => esc_html__( 'Case style', 'bariplan' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'1' => esc_html__( 'style 1', 'bariplan' ),
							'2' => esc_html__( 'style 2', 'bariplan' ),
						],
						'default' => '1',
					]
				);		
			
					/* Box Position */				
					$this->add_control(
						'witr_text_ltc',
						[
							'label' => esc_html__( 'Box Position', 'bariplan' ),
							'type' => Controls_Manager::CHOOSE,
							'options' => [
								'left' => [
									'title' => esc_html__( 'Left', 'bariplan' ),
									'icon' => 'eicon-h-align-left',
								],
								'center' => [
									'title' => esc_html__( 'Center', 'bariplan' ),
									'icon' => 'eicon-v-align-top',
								],
								'right' => [
									'title' => esc_html__( 'Right', 'bariplan' ),
									'icon' => 'eicon-h-align-right',
								],
							],
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .witr_content_casem' => 'text-align: {{VALUE}}',
							],							
						]
					);
					/* witr_image */
					$this->add_control(
						'witr_case_image',
						[
							'label' => esc_html__( 'Choose Image', 'bariplan' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],							
						]
					);					
					/* witr_case_title */	
					$this->add_control(
						'witr_case_title',
						[
							'label' => esc_html__( 'Bottom Title', 'bariplan' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use title, remove the text from field', 'bariplan' ),
							'default' => esc_html__( 'Creative Idea Buildup', 'bariplan' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your case title here', 'bariplan' ),						
						]
					);
					/* witr_service_title_link */	
					$this->add_control(
						'witr_case_title_link',
						[
							'label' => esc_html__( 'Title Link', 'bariplan' ),
							'type' => Controls_Manager::URL,
							'description' =>esc_html__('Insert Title link here.','bariplan'),
							'placeholder' => esc_attr__( 'https://your-link.com', 'bariplan' ),
							'show_external' => true,
							
						]
					);					
					/* witr_case_content	*/
					$this->add_control(
						'witr_case_content',
						[
							'label' => esc_html__( ' Top Title', 'bariplan' ),
							'type' => Controls_Manager::TEXTAREA,
							'description' => esc_html__( 'Not use content text, remove the text from field', 'bariplan' ),
							'default' => esc_html__( 'DEVELOPMENT', 'bariplan' ),
							'separator'=>'before',
							'placeholder' => esc_attr__( 'Type your content here', 'bariplan' ),
						]
					);										

					/* witr_show_button */
					$this->add_control(
						'witr_show_button',
						[
							'label' => esc_html__( 'Show Button', 'bariplan' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'bariplan' ),
							'label_off' => esc_html__( 'Hide', 'bariplan' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',							
						]
					);
					
				/* witr_case_button	*/
					$this->add_control(
						'witr_case_button',
						[
							'label' => esc_html__( 'Button text', 'bariplan' ),
							'label_block' =>true,
							'type' => Controls_Manager::TEXT,
							'description' =>esc_html__('Insert button text. It hidden when field blank.','bariplan'),							
							'default' => esc_html__( 'Read More', 'bariplan' ),
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
							'description' =>esc_html__('Insert button link here.','bariplan'),
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
				/* witr_show_icon witr_icon_item */
					$this->add_control(
						'witr_show_icon',
						[
							'label' => esc_html__( 'Show Icon', 'bariplan' ),
							'type' => Controls_Manager::SWITCHER,								
							'label_on' => esc_html__( 'Show', 'bariplan' ),
							'label_off' => esc_html__( 'Hide', 'bariplan' ),
							'separator'=>'before',
							'return_value' => 'yes',
							'default' => 'yes',							
						]
					);				
					/* witr_icon_item */					
					$this->add_control(
						'witr_icon_item',
						[
							'label' => esc_html__( 'Icon', 'bariplan' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field And Not use Icon,Click On The Hide Option', 'bariplan' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'fas fa-arrow-circle-right',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_show_icon' => 'yes',
							],							
						]
					);		
		
					
			$this->end_controls_section();
			/* === end w_case ===  */

			
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/			
		/*=== start Single Box style ====*/
		$this->start_controls_section(
			'section_single_caseo',
			[
				'label' => esc_html__( 'Box Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);
			/* heading2 */
			$this->add_control(
				'witr_bvalheadeingf2_color',
				[
					'label' => esc_html__( 'Image Overlay color', 'bariplan' ),
					'type' => Controls_Manager::HEADING,
					'default' =>'heading',
					'separator'=>'before',					
				]
			);				
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_bvbgfh2_background',
					'label' => esc_html__( 'Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_case_image::before',					
				]
			);		
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_shadowsbox',
						'label' => esc_html__( 'Box Shadow', 'bariplan' ),
						'selector' => '{{WRAPPER}} .all_case_color',
					]
				);						
				/* box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_case_color' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);	
				/* box padding */
				$this->add_responsive_control(
					'witr_box_paddingei',
					[
						'label' => esc_html__( ' Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .all_case_color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],						
					]
				);				
			
		

		$this->end_controls_section();
		/*=== start Single Box style ====*/		

		/*=== start witr content style ====*/
		$this->start_controls_section(
			'witr_style_option_content',
			[
				'label' => esc_html__( 'Top Title Color Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_content_color',
				[
					'label' => esc_html__( 'Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_SECONDARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_case_color p' => 'color: {{VALUE}}',
					],
				]
			);

			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_content_typography',
					'label' => esc_html__( 'Typography', 'bariplan' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
					],
					'selector' => '{{WRAPPER}} .all_case_color p',
				]
			);		

			/* content margin */
			$this->add_responsive_control(
				'witr_content_margin',
				[
					'label' => esc_html__( 'Margin', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_case_color p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* content padding */
			$this->add_responsive_control(
				'witr_content_padding',
				[
					'label' => esc_html__( 'Padding', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_case_color p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr content style ====*/
		
		

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Bottom Title Color Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_title_color',
				[
					'label' => esc_html__( 'Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .all_case_color h3,{{WRAPPER}} .all_case_color h3 a' => 'color: {{VALUE}}',
					],
				]
			);
			/* hover color */
			$this->add_control(
				'witr_title_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_case_color h3:hover,{{WRAPPER}} .all_case_color h3 a:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_case_color h3,{{WRAPPER}} .all_case_color h3 a',
				]
			);		
			
			/* title margin */
			$this->add_responsive_control(
				'witr_title_margin',
				[
					'label' => esc_html__( 'Margin', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_case_color h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* title padding */
			$this->add_responsive_control(
				'witr_title_padding',
				[
					'label' => esc_html__( 'Padding', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .all_case_color h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/

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
					/* color */
					$this->add_control(
						'witr_button_color',
						[
							'label' => esc_html__( 'Text Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_ACCENT,
							],							
							'separator'=>'before',
							'selectors' => [
								'{{WRAPPER}} .witr_case_btnb a' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_case_btnb a',
						]
					);
					/* typograohy color */			
					$this->add_group_control(
						Group_Control_Typography::get_type(),
						[
							'name' => 'witr_button_typography',
							'label' => esc_html__( 'Typography', 'bariplan' ),
							'global' => [
								'default' => Global_Typography::TYPOGRAPHY_ACCENT,
							],
							'selector' => '{{WRAPPER}} .witr_case_btnb a',
						]
					);	
	
					/* witr_border_style */
					$this->add_control(
						'witr_border_btn_style',
						[
							'label' => esc_html__( 'Border Style', 'bariplan' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'none' => esc_html__( 'none', 'bariplan' ),
								'solid' => esc_html__( 'Solid', 'bariplan' ),
								'double' => esc_html__( 'Double', 'bariplan' ),
								'dotted' => esc_html__( 'Dotted', 'bariplan' ),
								'dashed' => esc_html__( 'Dashed', 'bariplan' ),
								'default' => esc_html__( 'Default', 'bariplan' ),
							],
							'default' => 'default',
							'selectors' => [
								'{{WRAPPER}} .witr_case_btnb a' => 'border-style: {{VALUE}}',
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
								'{{WRAPPER}} .witr_case_btnb a' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_case_btnb a' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);
					/* border_radius */
					$this->add_control(
						'witr_border_btn_radius',
						[
							'label' => esc_html__( 'Border Radius', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'size_units' => [ 'px', '%' ],
							'selectors' => [
								'{{WRAPPER}} .witr_case_btnb a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_btn_style' => ['solid','double','dotted','dashed','default'],
							],							
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
								'{{WRAPPER}} .witr_case_btnb a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
								'{{WRAPPER}} .witr_case_btnb a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

					/* hover_color */
					$this->add_control(
						'witr_button_hover_color',
						[
							'label' => esc_html__( 'Text Hover Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'separator'=>'before',
							
							'selectors' => [
								'{{WRAPPER}} .witr_case_btnb a:hover' => 'color: {{VALUE}}',
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
							'selector' => '{{WRAPPER}} .witr_case_btnb a:hover',
						]
					);
					/* witr_hoverborder_style */
					$this->add_group_control(
						Group_Control_Border::get_type(),
						[
							'name' => 'witr_hoverborder_style',
							'label' => esc_html__( 'Button Hover Border', 'bariplan' ),
							'selector' => '{{WRAPPER}} .witr_case_btnb a:hover',
						]
					);
					
					
					
					$this->end_controls_tab();
					/*=== end button hover style ====*/
			$this->end_controls_tabs();
			/*=== end button_tabs style ====*/			
		 $this->end_controls_section();
		/*=== end  witr button style ====*/		


		/*=== start Text Box style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Text Box Color Optiton', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		
		
				/* box background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box_background',
						'label' => esc_html__( 'box Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_content_casem',
					]
				);
				/* Box background heading 2 */
				$this->add_responsive_control(
					'witr_box2_hover',
					[
						'label' => esc_html__( 'Background Hover', 'bariplan' ),
						'type' => Controls_Manager::HEADING,
					]
				);				
				/* box background hover */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_box2_hover_background',
						'label' => esc_html__( 'box2 Hover Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .witr_content_casem:hover',
					]
				);				
				/* border_radius */
				$this->add_control(
					'witr_borderc_radius',
					[
						'label' => esc_html__( 'Border Radius', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_casem' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_box_cdshadowsbox',
						'label' => esc_html__( 'Box Shadow', 'bariplan' ),
						'selector' => '{{WRAPPER}} .witr_content_casem',
					]
				);							
				/* Box margin */
				$this->add_responsive_control(
					'witr_boxc_margin',
					[
						'label' => esc_html__( ' Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_casem' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_boxc_padding',
					[
						'label' => esc_html__( ' Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_content_casem' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
					
				
			$this->end_controls_section();
			/* === end single Feature ===  */			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();
		$target = ! empty($witrshowdata['witr_case_title_link']['is_external']) ? ' target="_blank"' : '';
		$nofollow = ! empty($witrshowdata['witr_case_title_link']['nofollow']) ? ' rel="nofollow"' : '';		
		$target_btn = ! empty($witrshowdata['witr_button_link']['is_external']) ? ' target="_blank"' : '';
		$nofollow_btn = ! empty($witrshowdata['witr_button_link']['nofollow']) ? ' rel="nofollow"' : '';		

	switch ( $witrshowdata['witr_style_case'] ) {
		case '2':
		?>

		<div class="witr_case all_case_color witr_case2">
			<div class="witr_case_image">
				<?php if(isset($witrshowdata['witr_case_image']['url']) && ! empty($witrshowdata['witr_case_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_case_image']['url'];?>" alt="" />
				<?php } ?>
			</div>			
			<div class="witr_content_casem">
				<div class="witr_content_casei">
					<!-- content -->
					<?php if(isset($witrshowdata['witr_case_content']) && ! empty($witrshowdata['witr_case_content'])){?>
						<p><?php echo $witrshowdata['witr_case_content']; ?> </p>		
					<?php } ?>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_case_title']) && ! empty($witrshowdata['witr_case_title'])){?>
					<?php if($witrshowdata['witr_case_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_case_title_link'] ['url'];?>"<?php echo $target,$nofollow?>><?php echo $witrshowdata['witr_case_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_case_title']; ?> </h3>
					<?php }	?>
					<?php } ?>
				</div>
				<!-- button -->
				<?php if(isset($witrshowdata['witr_case_button']) && ! empty($witrshowdata['witr_case_button'])){?>
					<div class="witr_case_btnb">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url'];?>"<?php echo $target_btn,$nofollow_btn?>><?php echo $witrshowdata['witr_case_button']; ?>
							<!-- icon -->
							<?php if( ! empty($witrshowdata['witr_icon_item'])){?>
								<i class="<?php echo esc_attr( $witrshowdata['witr_icon_item']['value']);?>"></i>
							<?php } ?>													
						</a>
					</div>
				<?php } ?>
			</div>	
			
		</div> 
					
		
		
		<?php 	
			
		break;
		default:
		?>
		<div class="witr_case all_case_color ">
			<div class="witr_case_image">
				<?php if(isset($witrshowdata['witr_case_image']['url']) && ! empty($witrshowdata['witr_case_image']['url'])){?>
					<img src="<?php echo $witrshowdata['witr_case_image']['url'];?>" alt="" />
				<?php } ?>
			</div>			
			<div class="witr_content_casem">
				<div class="witr_content_casei">
					<!-- content -->
					<?php if(isset($witrshowdata['witr_case_content']) && ! empty($witrshowdata['witr_case_content'])){?>
						<p><?php echo $witrshowdata['witr_case_content']; ?> </p>		
					<?php } ?>
					<!-- title -->
					<?php if(isset($witrshowdata['witr_case_title']) && ! empty($witrshowdata['witr_case_title'])){?>
					<?php if($witrshowdata['witr_case_title_link'] ['url']){?> 
						<h3><a href="<?php echo $witrshowdata['witr_case_title_link'] ['url'];?>"<?php echo $target,$nofollow?>><?php echo $witrshowdata['witr_case_title']; ?></a></h3>
					<?php }else{ ?>
					<h3><?php echo $witrshowdata['witr_case_title']; ?> </h3>
					<?php }	?>
					<?php } ?>					
				</div>
				<!-- button -->
				<?php if(isset($witrshowdata['witr_case_button']) && ! empty($witrshowdata['witr_case_button'])){?>
					<div class="witr_case_btnb">
						<a href="<?php echo $witrshowdata['witr_button_link'] ['url'];?>"<?php echo $target_btn,$nofollow_btn?>><?php echo $witrshowdata['witr_case_button']; ?>
							<!-- icon -->
							<?php if( ! empty($witrshowdata['witr_icon_item'])){?>
								<i class="<?php echo esc_attr( $witrshowdata['witr_icon_item']['value']);?>"></i>
							<?php } ?>						
						</a>
					</div>
				<?php } ?>
			</div>	
			
		</div> 
		<?php 		
		break;
		
	} 
		

    } /* function end */
	


}
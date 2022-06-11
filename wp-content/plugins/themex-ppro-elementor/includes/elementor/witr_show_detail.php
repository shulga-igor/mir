<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_Show_Detail extends Widget_Base {

    public function get_name() {
        return 'witr_section_show';
    }
    
    public function get_title() {
        return esc_html__( ' Show Detail', 'bariplan' );
    }
    public function get_style_depends() {
        return ['wshowdtails'];
    }
    public function get_icon() {
        return 'bariplan_icon eicon-table-of-contents';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {
		
			
			

			/* === w_show start === */
			$this->start_controls_section(
				'witr_field_display_show',
				[
					'label' => esc_html__( 'Details and List', 'bariplan' ),
					'tab' => Controls_Manager::TAB_CONTENT,
				]
			);
			
				/* witr_service_image */
				$this->add_control(
					'witr_top_image',
					[
						'label' => esc_html__( 'Choose Image', 'bariplan' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],							
					]
				);
							
				/* witr_show_title */	
				$this->add_control(
					'witr_show_title',
					[
						'label' => esc_html__( 'Title', 'bariplan' ),
						'type' => Controls_Manager::TEXTAREA,
						'description' => esc_html__( 'Not use title, remove the text from field', 'bariplan' ),
						'default' => esc_html__( 'Type Your Title Here', 'bariplan' ),
						'separator'=>'before',
						'placeholder' => esc_attr__( 'Type your show title here', 'bariplan' ),						
					]
				);
				/* title_link */	
				$this->add_control(
					'title_link',
					[
						'label' => esc_html__( 'Title Link', 'bariplan' ),
						'type' => Controls_Manager::URL,
						'description' =>esc_html__('Insert Title link here.','bariplan'),
						'placeholder' => esc_attr__( 'https://your_site.com', 'bariplan' ),
						'show_external' => true,							
					]
				);					
				/* witr_service2_list */
				$this->add_control(
					'witr_show_list',
					[
						'label' => esc_html__( 'Show List Items ', 'bariplan' ),
						'type' => Controls_Manager::TEXTAREA,
						'separator' => 'before',
						'description' => esc_html__( 'use list from here, must be use the stcructure ex <ul><li><a href="#">example list 1</a></li><li><a href="#">example list 2</a></li></ul> OR TEXT USE EX-<ul><li><p>Text List</p></li></ul> OR TEXT USE EX-<ul><li><span>Text List</span></li></ul> OR TEXT USE EX-<ul><li>Text List</li></ul> when icon use ex <ul><li><i class="icofont-tick-mark"></i></li><li><i class="icofont-tick-mark"></i></li></ul> ', 'bariplan' ),
						'default' => '<ul><li><p>Available in 6 Mega Pixel</p></li><li><p>60 Metres of Night Vision</p></li><li><p>100 Degree Viewing Angle</p></li></ul>',
						'placeholder' => esc_attr__( 'Type your List Item here', 'bariplan' ),						
					]
				);
				/* witr_brand_title */	
				$this->add_control(
					'witr_brand_title',
					[
						'label' => esc_html__( 'Brand Name', 'bariplan' ),
						'type' => Controls_Manager::TEXT,
						'description' => esc_html__( 'Not use title, remove the text from field', 'bariplan' ),
						'default' => esc_html__( 'BRAND', 'bariplan' ),
						'separator'=>'before',
						'placeholder' => esc_attr__( 'Type your Brand Name here', 'bariplan' ),						
					]
				);				
				/* witr_bottom_image */
				$this->add_control(
					'witr_bottom_image',
					[
						'label' => esc_html__( 'Brand Image', 'bariplan' ),
						'type' => Controls_Manager::MEDIA,
						'default' => [
							'url' =>'',
						],							
					]
				);

								
		
					
			$this->end_controls_section();
			/* === end w_show ===  */

			
	   /*=============================================================================================================================
										START TO STYLE
		=============================================================================================*/			

		/*=== start single Feature style ====*/
		$this->start_controls_section(
			'witr_style_ss_option',
			[
				'label' => esc_html__( 'Single Box', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]
		);		
				/* witr_text_align */					
				$this->add_responsive_control(
					'witr_box_align',
					[
						'label' => esc_html__( 'Text Align', 'bariplan' ),
						'type' => Controls_Manager::CHOOSE,
						'default' => 'Left',
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
							'{{WRAPPER}} .all_show_color' => 'text-align: {{VALUE}}',
						],
					]
				);		
			/* box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_box_background',
					'label' => esc_html__( 'box Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .all_show_color',
				]
			);
				/* box shadow color */	
				$this->add_group_control(
					Group_Control_Box_Shadow::get_type(),
					[
						'name' => 'witr_boxl_shadow',
						'label' => esc_html__( 'Box Shadow', 'bariplan' ),
						'selector' => '{{WRAPPER}} .all_show_color',
					]
				);			
			
				/* witr_border_style */
				$this->add_control(
					'witr_border_box_style',
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
							'{{WRAPPER}} .all_show_color' => 'border-style: {{VALUE}}',
						],
					]
				);		
				/* witr border */
				$this->add_control(
					'witr_borde_box',
					[
						'label' => esc_html__( 'Border', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'selectors' => [
							'{{WRAPPER}} .all_show_color' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_border_box_style' => ['solid','double','dotted','dashed','default'],
						],
					]							
					
				);
				/* border_color */
				$this->add_control(
					'witr_border_box_color',
					[
						'label' => esc_html__( 'Border Color', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						
						'selectors' => [
							'{{WRAPPER}} .all_show_color' => 'border-color: {{VALUE}}',
						],
						'condition' => [
							'witr_border_box_style' => ['solid','double','dotted','dashed','default'],
						],
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
							'{{WRAPPER}} .all_show_color' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);	
					
				/* Box margin */
				$this->add_responsive_control(
					'witr_box_margin',
					[
						'label' => esc_html__( ' Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* Box padding */
				$this->add_responsive_control(
					'witr_box_padding',
					[
						'label' => esc_html__( ' Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				
			$this->end_controls_section();
			/* === end single Feature ===  */		
		
		

		/*=== start witr_title style ====*/
		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Title Color Option', 'bariplan' ),
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
						'{{WRAPPER}} .all_show_color h2 a,{{WRAPPER}} .all_show_color h2' => 'color: {{VALUE}}',
					],
				]
			);
				/* title background */
				$this->add_group_control(
					Group_Control_Background::get_type(),
					[
						'name' => 'witr_title_background',
						'label' => esc_html__( 'Icon Background', 'bariplan' ),
						'types' => ['classic','gradient'],
						'selector' => '{{WRAPPER}} .all_show_color h2 a,{{WRAPPER}} .all_show_color h2',
					]
				);			
			/* hover color */
			$this->add_control(
				'witr_title_hover_color',
				[
					'label' => esc_html__( 'Hover Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .all_show_color h2 a:hover,{{WRAPPER}} .all_show_color h2:hover' => 'color: {{VALUE}}',
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
					'selector' => '{{WRAPPER}} .all_show_color h2 a,{{WRAPPER}} .all_show_color h2',
				]
			);		
				/* border_radius */
				$this->add_control(
					'witr_title_radius',
					[
						'label' => esc_html__( 'Border Radius', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .all_show_color h2 a,{{WRAPPER}} .all_show_color h2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
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
						'{{WRAPPER}} .all_show_color h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .all_show_color h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/
		
			
		/*=== start witr List content style ====*/		
		 $this->start_controls_section(
			'witr_option_list_content',
			[
				'label' => esc_html__( 'List Text Color Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,				
			]		 
		 );
		 		

				/* list text color */
				$this->add_control(
					'witr_list_color',
					[
						'label' => esc_html__( ' Text', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						'separator'=>'before',
						'global' => [
							'default' => Global_Colors::COLOR_TEXT,
						],						
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box ul li a,{{WRAPPER}} .witr_ip_text_box ul li p,{{WRAPPER}} .witr_ip_text_box ul li span,{{WRAPPER}} .witr_ip_text_box ul li,{{WRAPPER}} .witr_company_brand span' => 'color: {{VALUE}}',
						],
					]
				);
				/* list text color */
				$this->add_control(
					'witr_list_hover_color',
					[
						'label' => esc_html__( ' Text Hover', 'bariplan' ),
						'type' => Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box ul li a:hover,{{WRAPPER}} .witr_ip_text_box ul li p:hover,{{WRAPPER}} .witr_ip_text_box ul li span:hover,{{WRAPPER}} .witr_ip_text_box ul li:hover,{{WRAPPER}} .witr_company_brand span:hover' => 'color: {{VALUE}}',
						],
					]
				);
				
				/* typograohy color */			
				$this->add_group_control(
					Group_Control_Typography::get_type(),
					[
						'name' => 'witr_list_color',
						'label' => esc_html__( 'Typography', 'bariplan' ),
						'global' => [
							'default' => Global_Typography::TYPOGRAPHY_TEXT,
						],
						'selector' => '{{WRAPPER}} .witr_ip_text_box ul li a,{{WRAPPER}} .witr_ip_text_box ul li p,{{WRAPPER}} .witr_ip_text_box ul li span,{{WRAPPER}} .witr_ip_text_box ul li,{{WRAPPER}} .witr_company_brand span',
					]
				);						
				
				/* margin */
				$this->add_responsive_control(
					'witr_list_margin',
					[
						'label' => esc_html__( 'Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box ul li a,{{WRAPPER}} .witr_ip_text_box ul li p,{{WRAPPER}} .witr_ip_text_box ul li span,{{WRAPPER}} .witr_ip_text_box ul li,{{WRAPPER}} .witr_company_brand span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/* padding */
				$this->add_responsive_control(
					'witr_list_padding',
					[
						'label' => esc_html__( 'Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_ip_text_box ul li a,{{WRAPPER}} .witr_ip_text_box ul li p,{{WRAPPER}} .witr_ip_text_box ul li span,{{WRAPPER}} .witr_ip_text_box ul li,{{WRAPPER}} .witr_company_brand span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);


		$this->end_controls_section();

		/*=== end witr_list style ====*/

			

    } /* function end */

	
	
	
    protected function render( $instance = [] ) {

        $witrshowdata   = $this->get_settings_for_display();	
		$target = ! empty($witrshowdata['title_link']['is_external']) ? ' target="_blank"' : '';
		$nofollow = ! empty($witrshowdata['title_link']['nofollow']) ? ' rel="nofollow"' : '';


		?>
		
			<div class=" all_show_color">
				<div class="witr_Single_iplist ">
					<div class="witr_Single_ipimg">
						<!-- image -->
						<?php if( ! empty($witrshowdata['witr_top_image']['url'])){?>
							<img src="<?php echo $witrshowdata['witr_top_image']['url'];?>" alt="" />
						<?php } ?>					
					</div>
					<div class="witr_ip_text_box">
						<!-- title -->
						<?php if( ! empty($witrshowdata['witr_show_title'])){?>
						<?php if($witrshowdata['title_link'] ['url']){?> 
							<h2><a href="<?php echo $witrshowdata['title_link'] ['url'];?>"<?php echo $target,$nofollow?>><?php echo $witrshowdata['witr_show_title']; ?></a></h2>
						<?php }else{ ?>
						<h2><?php echo $witrshowdata['witr_show_title']; ?> </h2>
						<?php }	?>
						<?php } ?>
						<!-- show list -->
						<?php if( ! empty($witrshowdata['witr_show_list'])){?>
							<?php echo $witrshowdata['witr_show_list']; ?>
						<?php }?>
						<div class="witr_company_brand">
							<?php if( ! empty($witrshowdata['witr_brand_title'])){?>
								<span><?php echo $witrshowdata['witr_brand_title']; ?></span>
							<?php }?>						
							<!-- image bottom -->
							<?php if( ! empty($witrshowdata['witr_bottom_image']['url'])){?>
								<img src="<?php echo $witrshowdata['witr_bottom_image']['url'];?>" alt="" />
							<?php } ?>
						</div>						
					</div>
				</div>
				
						
				
			</div>		

		<?php		

    } 
	



}
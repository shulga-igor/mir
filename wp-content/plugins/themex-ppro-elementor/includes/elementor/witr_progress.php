<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_progress extends Widget_Base {

    public function get_name() {
        return 'witr_progress_section';
    }
    
    public function get_title() {
        return esc_html__( ' Progress Bar', 'bariplan' );
    }
	public function get_style_depends() {
	return ['wprogress'];
	}
    public function get_icon() {
        return 'bariplan_icon eicon-skill-bar';
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'witr_post_progress_option',
            [
                'label' => esc_html__( ' Progress Options', 'bariplan' ),
            ]
        );
		
		
		
			/* witr_style_progress */
			$this->add_control(
				'witr_style_progress',
				[
					'label' => esc_html__( 'Progress style', 'bariplan' ),
					'type' => Controls_Manager::SELECT,
					'default' => '2',					
					'options' => [
						'1' => esc_html__( 'Style 1', 'bariplan' ),
						'2' => esc_html__( 'Style 2', 'bariplan' ),						
						'3' => esc_html__( 'Style 3', 'bariplan' ),
						'4' => esc_html__( 'Style 4', 'bariplan' ),
						'5' => esc_html__( 'Style 5', 'bariplan' ),
						'6' => esc_html__( 'Style 6', 'bariplan' ),
						'7' => esc_html__( 'Style 7', 'bariplan' ),
						'8' => esc_html__( 'Style 8', 'bariplan' ),
						'9' => esc_html__( 'Style 9', 'bariplan' ),
						'10' => esc_html__( 'Style 10', 'bariplan' ),
						'11' => esc_html__( 'Style 11', 'bariplan' ),
						'12' => esc_html__( 'Style 12', 'bariplan' ),
						'13' => esc_html__( 'Style 13', 'bariplan' ),
					],
				]
			);		
		

			/*  witr_progress_title */	
			$this->add_control(
				'witr_progress_title',
				[
					'label' => esc_html__( 'Progress Bar Title', 'bariplan' ),
					'type' => Controls_Manager::TEXTAREA,
					'description' => esc_html__( 'Not use title, remove the text from field', 'bariplan' ),
					'default' => esc_html__( 'My Skill', 'bariplan' ),
					'placeholder' => esc_attr__( 'Type your progress title here', 'bariplan' ),						
				]
			);
			/*  witr_skill */				
			$this->add_control(
				'witr_skill',
				[
					'label' => esc_html__( 'Progress Bar value', 'bariplan' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 30,
				]
			);
			
			/*  witr_duration */				
			$this->add_control(
				'witr_duration',
				[
					'label' => esc_html__( 'Progress Duration Time', 'bariplan' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 0.1,
					'max' => 100,
					'step' => 0.1,
					'default' => 1.5,
				]
			);
			/*  witr_delay */				
			$this->add_control(
				'witr_delay',
				[
					'label' => esc_html__( 'Progress delay Time', 'bariplan' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 0.1,
					'max' => 100,
					'step' => 0.1,
					'default' => .20,
				]
			);
		
		
				

        $this->end_controls_section();

		/*=== end_controls_section ===*/
		

	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/
		
		
		/*=== start Box style ====*/

		$this->start_controls_section(
			'witr_style_option_box',
			[
				'label' => esc_html__( 'Progress Bar Color Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		
		
		
			/* Heading For Ground */
			$this->add_control(
				'witr_box_color',
				[
					'label' => esc_html__( 'For Ground Option', 'bariplan' ),
					'type' => Controls_Manager::HEADING,					
				]
			);		
			/* Box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_box_background',
					'label' => esc_html__( 'Box Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .progress-bar',					
				]
			);
			/* witr_border_style */
			$this->add_control(
				'witr_border_bar_style',
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
						'{{WRAPPER}} .progress' => 'border-style: {{VALUE}}',
					],
					'condition' => [
						'witr_style_progress' =>['13'],
					],					
				]
			);		
			/* witr border */
			$this->add_control(
				'witr_borde_bar',
				[
					'label' => esc_html__( 'Border', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'selectors' => [
						'{{WRAPPER}} .progress' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'condition' => [
						'witr_border_bar_style' => ['solid','double','dotted','dashed','default'],
						'witr_style_progress' =>['13'],
					],
				]							
				
			);
			/* border_color */
			$this->add_control(
				'witr_barbo_color',
				[
					'label' => esc_html__( 'Border Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .progress' => 'border-color: {{VALUE}}',
					],
					'condition' => [
						'witr_border_bar_style' => ['solid','double','dotted','dashed','default'],
						'witr_style_progress' =>['13'],
					],
				]
			);
			
			/* box_radius */
			$this->add_control(
				'witr_box_radius',
				[
					'label' => esc_html__( 'Border Radius', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
				/*  progress height */
				$this->add_responsive_control(
					'witr_progress_height',
					[
						'label' => esc_html__( 'Progress Bar Height', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 500,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .progress' => 'height: {{SIZE}}{{UNIT}};',
						],
					]
				);			
			
			/* Heading Background Ground */
			$this->add_control(
				'witr_box2_color',
				[
					'label' => esc_html__( 'Background Ground Option', 'bariplan' ),
					'separator'=>'before',
					'type' => Controls_Manager::HEADING,					
				]
			);		
			/* Box background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_box2_background',
					'label' => esc_html__( 'Box Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .progress',					
				]
			);		
			/* box_radius */
			$this->add_control(
				'witr_box2_radius',
				[
					'label' => esc_html__( 'Border Radius', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			
		
		
        $this->end_controls_section();

		/*=== end Box section ===*/		
		
		
			
		/*=== start witr_title style ====*/

		$this->start_controls_section(
			'witr_style_option_title',
			[
				'label' => esc_html__( 'Progress Bar Title Color Option', 'bariplan' ),
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
						'{{WRAPPER}} .witr_label' => 'color: {{VALUE}}',
					],
				]
			);
			/* Title background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_title_background',
					'label' => esc_html__( 'Title Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_label',					
				]
			);			
			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_valuet_color',
					'label' => esc_html__( 'Typography', 'bariplan' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_label',
				]
			);
				/*  title top */
				$this->add_responsive_control(
					'witr_title_top',
					[
						'label' => esc_html__( 'Title Top', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 100,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_label' => 'top: {{SIZE}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
						'{{WRAPPER}} .witr_label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_title style ====*/

		
		/*=== start witr_value style ====*/

		$this->start_controls_section(
			'witr_style_option_value',
			[
				'label' => esc_html__( 'Progress Bar value Color Option', 'bariplan' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);		 
			/* color */
			$this->add_control(
				'witr_value_color',
				[
					'label' => esc_html__( 'Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_PRIMARY,
					],					
					'separator'=>'before',
					'selectors' => [
						'{{WRAPPER}} .witr_percent' => 'color: {{VALUE}}',
					],
				]
			);

			/* typograohy color */			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'witr_valuen_color',
					'label' => esc_html__( 'Typography', 'bariplan' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
					],
					'selector' => '{{WRAPPER}} .witr_percent',
				]
			);		
			/* value background */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_value_background',
					'label' => esc_html__( 'value Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_percent',
					'condition' => [
						'witr_style_progress' =>['1','2','3','4','5','7','8','10','11','12','13'],
					],					
				]
			);
			/* Border Right Color 5 */
			$this->add_control(
				'witr_valuebor_color',
				[
					'label' => esc_html__( 'Border Right Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_percent:after' => 'border-right-color: {{VALUE}}',
					],
					'condition' => [
						'witr_style_progress' =>['5'],
					],					
				]
			);

			/* Heading */
			$this->add_control(
				'witr_vaheading7_color',
				[
					'label' => esc_html__( 'Change The value Background, For this, Border Top Color Must Be Change', 'bariplan' ),
					'type' => Controls_Manager::HEADING,
					'condition' => [
						'witr_style_progress' =>['7'],
					],					
				]
			);
			/* Border top Color 7 */
			$this->add_control(
				'witr_valuebor7_color',
				[
					'label' => esc_html__( 'Border Top Color', 'bariplan' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .witr_percent:after' => 'border-top-color: {{VALUE}}',
					],
					'condition' => [
						'witr_style_progress' =>['7'],
					],					
				]
			);
			
			/* Heading */
			$this->add_control(
				'witr_vaheading_color',
				[
					'label' => esc_html__( 'Change The value Background, For this, Border Right Color Must Be Change', 'bariplan' ),
					'type' => Controls_Manager::HEADING,
					'condition' => [
						'witr_style_progress' =>['5'],
					],					
				]
			);

			/* value background 6 */
			$this->add_group_control(
				Group_Control_Background::get_type(),
				[
					'name' => 'witr_value6_background',
					'label' => esc_html__( 'value Background', 'bariplan' ),
					'types' => ['classic','gradient'],
					'selector' => '{{WRAPPER}} .witr_percent:after',
					'condition' => [
						'witr_style_progress' =>['6','9'],
					],					
				]
			);
			
				/* witr_border_style */
				$this->add_group_control(
					Group_Control_Border::get_type(),
					[
						'name' => 'witr_value_border',
						'label' => esc_html__( 'Border', 'bariplan' ),
						'selector' => '{{WRAPPER}} .witr_percent',
					'condition' => [
						'witr_style_progress' =>['1','2','3','4','8','10','11','12','13'],
					],						
					]
				);
				/* value_radius */
				$this->add_control(
					'witr_valuer_radius',
					[
						'label' => esc_html__( 'Border Radius', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_percent,{{WRAPPER}} .witr_percent:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
					]
				);
				/*  progress top */
				$this->add_responsive_control(
					'witr_progress_top',
					[
						'label' => esc_html__( 'Progress Value Top', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => -100,
								'max' => 100,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_percent' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);
				/*  progress right */
				$this->add_responsive_control(
					'witr_progress_right',
					[
						'label' => esc_html__( 'Progress Value Right', 'bariplan' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 550,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .witr_percent' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

				
			/* value margin */
			$this->add_responsive_control(
				'witr_value_margin',
				[
					'label' => esc_html__( ' Margin', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_percent' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
			/* value padding */
			$this->add_responsive_control(
				'witr_value_padding',
				[
					'label' => esc_html__( ' Padding', 'bariplan' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .witr_percent' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		 
		 $this->end_controls_section();
		/*=== end  witr_value style ====*/		
		
		
		




		

    } /* function end */

    protected function render( $instance = [] ) {

        $witrshowdata = $this->get_settings_for_display();

		
	switch ( $witrshowdata['witr_style_progress'] ) {
		
		case '13':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title2">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style2 witr_progress-style13">
			    <div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;		
		case '12':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="progress witr_progress-style4">
				<div class="progress-bar progress-bar-striped progress-bar-animated " style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
						<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
					<?php }?>
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>			  
			</div>				
		</div>				
		<?php 
		break;
		
		case '11':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title10">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style10">
				<div class="progress-bar progress-bar-striped wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>			  
			</div>				
		</div>				
		<?php 
		break;
		
		case '10':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title10">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style10">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '9':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title9">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style9">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '8':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="progress witr_progress-style8">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
						<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
					<?php }?>
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '7':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title7">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style7">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '6':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title6">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style6">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '5':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title5">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style5">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '4':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="progress witr_progress-style4">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
						<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
					<?php }?>
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '3':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="progress witr_progress-style3">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
						<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
					<?php }?>
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		case '2':
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title2">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>		
			<div class="progress witr_progress-style2">
			    <div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
			    </div>
			</div>				
		</div>				
		<?php 
		break;
		
		default:
		?>
		<div class="witr_single_progress all_color_bar">
			<div class="witr_title1">
				<?php if(isset($witrshowdata['witr_progress_title']) && ! empty($witrshowdata['witr_progress_title'])){?>
					<span class="witr_label"><?php echo $witrshowdata['witr_progress_title']; ?> </span>	
				<?php }?>
			</div>
			<div class="progress witr_progress-style1">
				<div class="progress-bar wow fadeInLeft animated" data-wow-duration="<?php echo $witrshowdata['witr_duration']; ?>s" data-wow-delay="<?php echo $witrshowdata['witr_delay']; ?>s" style="width:<?php echo $witrshowdata['witr_skill']; ?>%">
					<span class="witr_percent"><?php echo $witrshowdata['witr_skill']; ?>%</span>					
				</div>
			</div>		
		</div>
		<?php		
		break;
		
	}
	/* switch end */
	?>


        
	<?php
  
	}  /* end function */





}
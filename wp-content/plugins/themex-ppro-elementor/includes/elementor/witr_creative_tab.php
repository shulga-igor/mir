<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Mls_Creative_Tab extends Widget_Base {

    public function get_name() {
        return 'witr_ac_TAB';
    }

    public function get_title() {
        return esc_html__( 'Tab Creative ', 'bariplan' );
    }

    public function get_icon() {
        return 'bariplan_icon eicon-tabs';
    }
    public function get_style_depends() {
        return ['wcreativetab'];
    }
    public function get_categories() {
        return [ 'witr_tname' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'tab_content',
            [
                'label' => esc_html__( ' Creative Tab', 'bariplan' ),
            ]
        );
		
		
            $repeater = new Repeater();

                    
                    $repeater->add_control(
                        'tab_title',
                        [
                            'label'       => esc_html__( 'Title', 'bariplan' ),
                            'type'        => Controls_Manager::TEXT,
                            'default'     => esc_html__( 'Tab Title' , 'bariplan' )
                        ]
                    );

                    $repeater->add_control(
                        'witr_icon_Showt',
                        [
							'label' => esc_html__( 'Icon Show/Hide ', 'bariplan' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'bariplan' ),
							'label_off' => esc_html__( 'Hide', 'bariplan' ),
							'return_value' => 'yes',
							'default' => 'yes',
							'separator'=>'before',
                        ]
                    );
					$repeater->add_control(
                        'witr_icon_item',
                        [
							'label' => esc_html__( 'Icon', 'bariplan' ),
							'type' => Controls_Manager::ICONS,
							'description' => esc_html__( 'Change icon here, For this, click on the library field', 'bariplan' ),
							'fa4compatibility' => 'icon',
							'default' => [
								'value' => 'icofont-check',
								'library' => 'fa-solid',
							],
							'condition' => [
								'witr_icon_Showt' => 'yes',
							],	
                        ]
                    );
					$repeater->add_control(
                        'witr_show_custom',
                        [
							'label' => esc_html__( 'Show custom Icon', 'bariplan' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'bariplan' ),
							'label_off' => esc_html__( 'Hide', 'bariplan' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',	
                        ]
                    );
					$repeater->add_control(
                        'witr_tab_custom',
                        [
							'label' => esc_html__( 'Custom Icon Name', 'bariplan' ),
							'type' => Controls_Manager::TEXT,
							'description' => esc_html__( 'Type Icofont - https://icofont.com/icons or Themify Icon -https://themify.me/themify-icons or Fontawesome Icon - https://fontawesome.com/cheatsheet name here', 'bariplan' ),
							'default' => esc_html__( 'icofont-adjust', 'bariplan' ),
							'placeholder' => esc_attr__( 'Type your Custom Icon Name here', 'bariplan' ),
							'condition' => [
								'witr_show_custom' => 'yes',
							],
                        ]
                    );
					$repeater->add_control(
                        'witr_show_image',
                        [
							'label' => esc_html__( 'Show Image', 'bariplan' ),
							'type' => Controls_Manager::SWITCHER,
							'label_on' => esc_html__( 'Show', 'bariplan' ),
							'label_off' => esc_html__( 'Hide', 'bariplan' ),
							'return_value' => 'yes',
							'default' => 'no',
							'separator'=>'before',
                        ]
                    );
					$repeater->add_control(
                        'witr_tab_image',
                        [
							'label' => esc_html__( 'Choose Image', 'bariplan' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' =>'',
							],
							'condition' => [
								'witr_show_image' => 'yes',
							],
                        ]
                    );
					$repeater->add_control(
                        'witr_template_link',
                        [
                            'label'   => esc_html__( 'Select Conten Source', 'bariplan' ),
                            'type'    => Controls_Manager::SELECT,
							'separator'=>'before',
                            'default' => 'custom',
                            'options' => [
                                'custom'    => esc_html__( 'Custom', 'bariplan' ),
                                "elementor" => esc_html__( 'Elementor Template', 'bariplan' ),
                            ],
                        ]
                    );
					$repeater->add_control(
                        'tab_content',
                        [
                            'label'      => esc_html__( 'Tab Content', 'bariplan' ),
                            'type'       => Controls_Manager::WYSIWYG,
							'separator'=>'before',
                            'default'    => esc_html__( 'Tab Content', 'bariplan' ),
                            'condition' => [
                                'witr_template_link' =>'custom',
                            ],
                        ]
                    );
					$repeater->add_control(
                        'template_id',
                        [
                            'label'       => esc_html__( 'Tab Template', 'bariplan' ),
                            'type'        => Controls_Manager::SELECT,
                            'default'     => '0',
                            'options'     => twr_html_template_at(),
                            'condition'   => [
                                'witr_template_link' => "elementor"
                            ],
                        ]
                    );
					


		
		
		
            // Tab One Repeater
            $this->add_control(
                'txbd_tab_list',
                [
                    'label' => esc_html__( 'Witr Tab Items', 'bariplan' ),
                    'type' => Controls_Manager::REPEATER,
                    'fields'  => $repeater->get_controls(),
                    'default' => [
                        [
                            'tab_title'   => esc_html__('Tab Title One','bariplan'),
                            'tab_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu ad minim veniam, quis nostrud exercitation.','bariplan'),
                        ],
                        [
                            'tab_title'   => esc_html__('Tab Title Two','bariplan'),
                            'tab_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu ad minim veniam, quis nostrud exercitation.','bariplan'),
                        ],
                        [
                            'tab_title'   => esc_html__('Tab Title Three','bariplan'),
                            'tab_content' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu ad minim veniam, quis nostrud exercitation.','bariplan'),
                        ],
                    ],
					
					

                    'title_field' => '{{{ tab_title }}}',
                ]
            );
            $this->add_control(
                'tx_tab_cactive',
                [
                    'label' => esc_html__( 'Active Current Tab ', 'bariplan' ),
                    'type' => Controls_Manager::TEXT,
					'separator'=>'before',
					'description' => esc_html__( 'Must Be use selected menu Number. ex- 1, Not use 0. ', 'bariplan' ),
                    'default' =>1,
                    
                ]
            );

        $this->end_controls_section();

		
		
		
	   /*===========================================================================================
										START TO STYLE
		=============================================================================================*/		
        // Style tab section
        $this->start_controls_section(
            'bariplan_button_style_section',
            [
                'label' => esc_html__( 'Witr Tab Area Color Option', 'bariplan' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );								
				/* witr_align */					
				$this->add_responsive_control(
					'witr_align_iteam',
					[
						'label' => __( 'Witr Alignment', 'bariplan' ),
						'type' => Controls_Manager::CHOOSE,
						'separator' => 'before',
						'options' => [
							'left' => [
								'title' => __( 'Left', 'bariplan' ),
								'icon' => 'eicon-text-align-left',
							],
							'center' => [
								'title' => __( 'Center', 'bariplan' ),
								'icon' => 'eicon-text-align-center',
							],
							'right' => [
								'title' => __( 'Right', 'bariplan' ),
								'icon' => 'eicon-text-align-right',
							],
							'justify' => [
								'title' => __( 'Justified', 'bariplan' ),
								'icon' => 'eicon-text-align-justify',
							],
						],
						'prefix_class' => 'bariplan-star-rating%s--align-',
						'selectors' => [
							'{{WRAPPER}} .witr_taba_style1 .nav-tabs .nav-item' => 'text-align: {{VALUE}}',
						],
					]
				);
					/* witr_posit_style */
					$this->add_control(
						'witr_posit_style',
						[
							'label' => esc_html__( 'Item Position', 'bariplan' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'space-around' => esc_html__( 'space-around', 'bariplan' ),
								'space-between' => esc_html__( 'space-between', 'bariplan' ),
								'flex-start' => esc_html__( 'flex-start', 'bariplan' ),	
								'center' => esc_html__( 'center', 'bariplan' ),	
								'flex-end' => esc_html__( 'flex-end', 'bariplan' ),	
								'initial' => esc_html__( 'initial', 'bariplan' ),	
								'inherit' => esc_html__( 'inherit', 'bariplan' ),	
							],
							'default' => 'space-around',
							'selectors' => [
								'{{WRAPPER}} .nav-tabs' => 'justify-content: {{VALUE}};',
							],
						]
					);		
					/* witr_background */
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'tbar_background',
                            'label' => esc_html__( 'Background', 'bariplan' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .witr_adv_tab_menu',
                        ]
                    );					
					/* witr_border_style */
					$this->add_control(
						'witr_tbar_style',
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
								'{{WRAPPER}} .witr_adv_tab_menu' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_thover',
						[
							'label' => esc_html__( 'Border', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} .witr_adv_tab_menu' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_tbar_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_tbar_color',
						[
							'label' => esc_html__( 'Border Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .witr_adv_tab_menu' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_tbar_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);						

				/* border_radius */
				$this->add_control(
					'witr_tbar_radius',
					[
						'label' => esc_html__( 'Border Radius', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%' ],
						'selectors' => [
							'{{WRAPPER}} .witr_adv_tab_menu' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],
						'condition' => [
							'witr_tbar_style' => ['solid','double','dotted','dashed','default'],
						],								
					]
				);
				/*  margin */
				$this->add_responsive_control(
					'witr_tbar_margin',
					[
						'label' => esc_html__( 'Margin', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_adv_tab_menu' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],								
					]
				);
				/*  padding */
				$this->add_responsive_control(
					'witr_tbar_padding',
					[
						'label' => esc_html__( 'Padding', 'bariplan' ),
						'type' => Controls_Manager::DIMENSIONS,
						'size_units' => [ 'px', '%', 'em' ],
						'selectors' => [
							'{{WRAPPER}} .witr_adv_tab_menu' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
						],								
					]
				);						
						
        $this->end_controls_section();

        // tab Menu style  start
        $this->start_controls_section(
            'bariplan_tab_menu_style',
            [
                'label'     => esc_html__( 'Witr Tab Menu Text Color', 'bariplan' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs('bariplan_tab_menu_style_tabs');

                // Tab Normal Start
                $this->start_controls_tab(
                    'tab_menu_style_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'bariplan' ),
                    ]
                );
				
					/*=========== tab_icon_heading =====================*/
					$this->add_control(
						'tab_icon_heading',
						[
							'label'     => esc_html__( 'Icon Color Option', 'bariplan' ),
							'type'      => Controls_Manager::HEADING,
							'separator' => 'before',
						]
					);
					/* witr_posi_style */
					$this->add_control(
						'witr_posi_style',
						[
							'label' => esc_html__( 'Position', 'bariplan' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								' ' => esc_html__( 'Select Option', 'bariplan' ),
								'none' => esc_html__( 'Top', 'bariplan' ),
								'left' => esc_html__( 'Left', 'bariplan' ),
								'right' => esc_html__( 'Right', 'bariplan' ),	
							],
							'default' => 'left',
							'selectors' => [
								'{{WRAPPER}} .nav-tabs span' => 'float: {{VALUE}}',
							],
						]
					);					
					$this->add_control(
						'tab_icon_color',
						[
							'label'     => esc_html__( 'Color', 'bariplan' ),
							'type'      => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs i' => 'color: {{VALUE}};',
							],
						]
					);					
					/*  icon font size */
					$this->add_responsive_control(
						'tab_icon_size',
						[
							'label' => esc_html__( ' Size', 'bariplan' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => [ 'px', 'rem', 'em' ],
							'range' => [
								'px' => [
									'min' => 0,
									'max' => 500,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .nav-tabs i' => 'font-size: {{SIZE}}{{UNIT}};',
							],
						]
					);
					/* witr_top */
					$this->add_responsive_control(
						'witr_topta',
						[
							'label' => esc_html__( 'Top/Bottom Spacing', 'bariplan' ),
							'type' => Controls_Manager::SLIDER,
							'size_units' => [ 'px', '%', 'em' ],
							'range' => [
								'px' => [
									'min' => -150,
									'max' => 150,
								],
								'%' => [
									'min' => -150,
									'max' => 150,
								],
								'em' => [
									'min' => -150,
									'max' => 150,
								],
							],
							'selectors' => [
								'{{WRAPPER}} .nav-tabs i,{{WRAPPER}} .nav-tabs img' => 'top: {{SIZE}}{{UNIT}};',
							],
						]
					);					
						/* iconh margin */
						$this->add_responsive_control(
							'witr_iconh_margin',
							[
								'label' => esc_html__( ' Margin', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .nav-tabs span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],								
							]
						);
						/* iconh padding */
						$this->add_responsive_control(
							'witr_iconh_padding',
							[
								'label' => esc_html__( ' Padding', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%', 'em' ],
								'selectors' => [
									'{{WRAPPER}} .nav-tabs span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],								
							]
						);				
				
				
				
				
					/*=========== tab_Title_heading =====================*/
					$this->add_control(
						'tab_Title_heading',
						[
							'label'     => esc_html__( 'Title Color Option', 'bariplan' ),
							'type'      => Controls_Manager::HEADING,
							'separator' => 'before',
						]
					);
					/* witr_menu color */
                    $this->add_control(
                        'tab_menu_color',
                        [
                            'label'     => esc_html__( ' Color', 'bariplan' ),
                            'type'      => Controls_Manager::COLOR,
							'global' => [
								'default' => Global_Colors::COLOR_PRIMARY,
							],							
                            'selectors' => [
                                '{{WRAPPER}} .nav-tabs .nav-link' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
					/* witr_typography */
                    $this->add_group_control(
                        Group_Control_Typography::get_type(),
                        [
                            'name' => 'menu_typography',
                            'label' => esc_html__( ' Typography', 'bariplan' ),
							'global' => [
								'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
							],
                            'selector' => '{{WRAPPER}} .nav-link strong',
                           
                        ]
                    );
					
					/* tab_title_padding */
                    $this->add_responsive_control(
                        'tab_title_padding',
                        [
                            'label' => esc_html__( ' Padding', 'bariplan' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .nav-link strong' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            
                        ]
                    );
					/* tab_title_margin */
                    $this->add_responsive_control(
                        'tab_title_margin',
                        [
                            'label' => esc_html__( ' Margin', 'bariplan' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .nav-link strong' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            
                        ]
                    );					
					
					
					/* tab_box_heading */
					$this->add_control(
						'tab_box_heading',
						[
							'label'     => esc_html__( 'Box Color Option', 'bariplan' ),
							'type'      => Controls_Manager::HEADING,
							'separator' => 'before',
						]
					);					

					/* witr_background */
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'background',
                            'label' => esc_html__( 'Background', 'bariplan' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link',
                        ]
                    );
					
					/* witr_border_style */
					$this->add_control(
						'witr_border_Tabm_style',
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
								'{{WRAPPER}} .nav-tabs .nav-link' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_Tabm',
						[
							'label' => esc_html__( 'Border', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_Tabm_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_border_Tabm_color',
						[
							'label' => esc_html__( 'Border Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_Tabm_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);						

						/* border_radius */
						$this->add_control(
							'witr_border_Tabm_radius',
							[
								'label' => esc_html__( 'Border Radius', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .nav-tabs .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_Tabm_style' => ['solid','double','dotted','dashed','default'],
								],								
							]
						);
					/* menu_box_shadow */
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'menu_boxt_shadow',
                            'label' => esc_html__( 'Box Shadow', 'bariplan' ),
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link',
                        ]
                    );
					/* tab_menu_margin */
                    $this->add_responsive_control(
                        'tab_menu_margin',
                        [
                            'label' => esc_html__( ' Margin', 'bariplan' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .nav-tabs .nav-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            
                        ]
                    );					
					/* tab_menu_padding */
                    $this->add_responsive_control(
                        'tab_menu_padding',
                        [
                            'label' => esc_html__( ' Padding', 'bariplan' ),
                            'type' => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors' => [
                                '{{WRAPPER}} .nav-tabs .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            
                        ]
                    );

					
					
                $this->end_controls_tab();
				// Tab Title Normal tab End
				
                // Tab Title Hover tab Start
                $this->start_controls_tab(
                    'tab_menu_style_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'bariplan' ),
                    ]
                );									
					/* witr_menu_hover_color */
                    $this->add_control(
                        'tab_menu_hover_color',
                        [
                            'label'     => esc_html__( 'Title & Icon Hover Color', 'bariplan' ),
                            'type'      => Controls_Manager::COLOR,
							'separator' =>'before',
                            'selectors' => [
                                '{{WRAPPER}} .nav-tabs .nav-link:hover,{{WRAPPER}} .nav-tabs .nav-item:hover i' => 'color: {{VALUE}};',
                            ],
						
                        ]
                    );					
					
					/* witr_background_hover */
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'background_hover',
                            'label' => esc_html__( 'Background Hover', 'bariplan' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link:hover',
                        ]
                    );					
					
					
					/* witr_border_style */
					$this->add_control(
						'witr_border_hover_style',
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
								'{{WRAPPER}} .nav-tabs .nav-link:hover' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_hover',
						[
							'label' => esc_html__( 'Border', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link:hover' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_hover_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_border_hover_color',
						[
							'label' => esc_html__( 'Border Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link:hover' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_hover_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);						

						/* border_radius */
						$this->add_control(
							'witr_border_hover_radius',
							[
								'label' => esc_html__( 'Border Radius', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .nav-tabs .nav-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_hover_style' => ['solid','double','dotted','dashed','default'],
								],								
							]
						);
					/* menu_box_shadow */
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'menu_box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'bariplan' ),
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link:hover',
                        ]
                    );				
				
                $this->end_controls_tab();
				// Tab Title Normal tab End
				
				

                // Tab Title Active tab Start
                $this->start_controls_tab(
                    'tab_menu_style_active_tab',
                    [
                        'label' => esc_html__( 'Active', 'bariplan' ),
                    ]
                );
					/* Item Color */
                    $this->add_control(
                        'tab_menu_active_color',
                        [
                            'label'     => esc_html__( 'Title & Icon Color', 'bariplan' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .nav-tabs .nav-link.active,{{WRAPPER}} .nav-tabs .active i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
					/* activebackground */
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name' => 'activebackground',
                            'label' => esc_html__( 'Background', 'bariplan' ),
                            'types' => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link.active',
                        ]
                    );
					
					
					/* witr_border_style */
					$this->add_control(
						'witr_border_active_style',
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
								'{{WRAPPER}} .nav-tabs .nav-link.active' => 'border-style: {{VALUE}}',
							],
						]
					);		
					/* witr border */
					$this->add_control(
						'witr_borde_active',
						[
							'label' => esc_html__( 'Border', 'bariplan' ),
							'type' => Controls_Manager::DIMENSIONS,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link.active' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
							],
							'condition' => [
								'witr_border_active_style' => ['solid','double','dotted','dashed','default'],
							],
						]							
						
					);
					/* border_color */
					$this->add_control(
						'witr_border_active_color',
						[
							'label' => esc_html__( 'Border Color', 'bariplan' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .nav-tabs .nav-link.active' => 'border-color: {{VALUE}}',
							],
							'condition' => [
								'witr_border_active_style' => ['solid','double','dotted','dashed','default'],
							],
						]
					);						

						/* border_radius */
						$this->add_control(
							'witr_border_active_radius',
							[
								'label' => esc_html__( 'Border Radius', 'bariplan' ),
								'type' => Controls_Manager::DIMENSIONS,
								'size_units' => [ 'px', '%' ],
								'selectors' => [
									'{{WRAPPER}} .nav-tabs .nav-link.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
								],
								'condition' => [
									'witr_border_active_style' => ['solid','double','dotted','dashed','default'],
								],								
							]
						);
					/* active_box_shadow */
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name' => 'menu_active_box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'bariplan' ),
                            'selector' => '{{WRAPPER}} .nav-tabs .nav-link.active',
                            'separator' => 'before',
                        ]
                    );					
					

                $this->end_controls_tab(); 

            $this->end_controls_tabs();
           
        $this->end_controls_section();
		// Title style tab end



        /* Content style tab start */
        $this->start_controls_section(
            'bariplan_tab_content_style',
            [
                'label' => esc_html__( 'Witr Tab Content', 'bariplan' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


				/* Color */
            $this->add_control(
                'tab_content_color',
                [
                    'label' => esc_html__( 'Color', 'bariplan' ),
                    'type' => Controls_Manager::COLOR,
					'global' => [
						'default' => Global_Colors::COLOR_TEXT,
					],					
                    'selectors' => [
                        '{{WRAPPER}} .tab-content' => 'color: {{VALUE}};',
                    ],
                    'separator' => 'before',
                ]
            );
			/* Typography */
            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'content_typography',
                    'label' => esc_html__( 'Typography', 'bariplan' ),
					'global' => [
						'default' => Global_Typography::TYPOGRAPHY_TEXT,
					],
                    'selector' => '{{WRAPPER}} .tab-content',
                ]
            );
			/* Background */
            $this->add_group_control(
                Group_Control_Background::get_type(),
                [
                    'name' => 'contentbackground',
                    'label' => esc_html__( 'Background', 'bariplan' ),
                    'types' => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .tab-content',
                ]
            );
            /* Border */
            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'tab_content_border',
                    'label' => esc_html__( 'Border', 'bariplan' ),
                    'selector' => '{{WRAPPER}} .tab-content',
                ]
            );			
			/* Radius */
            $this->add_responsive_control(
                'tab_content_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'bariplan' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .tab-content' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                ]
            );			
			/* Padding */
            $this->add_responsive_control(
                'tab_content_padding',
                [
                    'label' => esc_html__( 'Padding', 'bariplan' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .tab-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
			/* Margin */
            $this->add_responsive_control(
                'tab_content_margin',
                [
                    'label' => esc_html__( 'Margin', 'bariplan' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .witr_adv_tab_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );


			

        $this->end_controls_section(); // Content style tabs end

    }

    protected function render( $instance = [] ) {

        $witrshowdata           = $this->get_settings_for_display();
				
		$tx_count_t     = $witrshowdata['tx_tab_cactive'];
		$witrshowdata     = $witrshowdata['txbd_tab_list'];
		$id = $this->get_id();
		   
?>
		
		<div class="witr_adv_tab_area witr_taba_style1 tab_all_colora">
			<!-- Nav tabs -->
			<div class="witr_adv_tab_menu">
				<ul class="nav nav-tabs">
					<?php 
					 $i=0;
					foreach ( $witrshowdata as $witr_aitem ) { 
					 $i++;
					 if( $i == $tx_count_t ){ $witr_active_tab = 'active'; } else{ $witr_active_tab = ''; }
					?>
					<!-- menu 1 -->
					<li class="nav-item">
						<a class="nav-link epo-<?php echo $witr_aitem['_id'];?>  <?php echo $witr_active_tab; ?>" data-toggle="tab" href="#tx_tab_<?php echo $id.$i;?>">
							
							<span class="witr_tab_icona">
								<!-- icon -->
								<?php if( $witr_aitem['witr_icon_Showt']=='yes' ) {?>
								<i class="<?php echo esc_attr( $witr_aitem['witr_icon_item']['value']);?>"></i>									
								<?php } ?>								
								<!-- end icon -->
							
								<!-- custom icon -->
								<?php if( $witr_aitem['witr_show_custom']=='yes'){?>
									<?php if(isset($witr_aitem['witr_tab_custom']) && ! empty($witr_aitem['witr_tab_custom'])){?>					
										<i class="<?php echo $witr_aitem['witr_tab_custom']; ?>"></i>
									<?php } ?>					
								<?php } ?>					
								<!-- image -->
								<?php if( $witr_aitem['witr_show_image']=='yes'){?>
									<?php if(isset($witr_aitem['witr_tab_image']['url']) && ! empty($witr_aitem['witr_tab_image']['url'])){?>
										<img src="<?php echo $witr_aitem['witr_tab_image']['url'];?>" alt="" />
									<?php } ?>								
								<?php } ?>								
							
							
							</span>
								
							<strong><?php echo $witr_aitem['tab_title'];?></strong>
						</a>
					</li>	
					<?php } ?>
				</ul>
			</div>
			<!-- Tab panes -->
			<div class="witr_adv_tab_content">
				<div class="tab-content">
					<?php 	
					 $i=0;	
						foreach ( $witrshowdata as $witr_aitem ) {
					$i++;
					 if( $i == $tx_count_t ){ $witr_active_tab = 'active show'; } else{ $witr_active_tab = ''; }
					?>
					<div class="tab-pane fade epo-<?php echo $witr_aitem['_id'];?>  <?php echo $witr_active_tab; ?>" id="tx_tab_<?php echo $id.$i;?>">			
						<?php 
							if ( $witr_aitem['witr_template_link'] == 'custom' && !empty( $witr_aitem['tab_content'] ) ) {
								echo wp_kses_post( $witr_aitem['tab_content'] );
							} elseif ( $witr_aitem['witr_template_link'] == "elementor" && !empty( $witr_aitem['template_id'] )) {
								echo Plugin::instance()->frontend->get_builder_content_for_display( $witr_aitem['template_id'] );
							}
						?>														
					</div>	
					<?php } ?>	
				</div>	
			</div>	
		</div>				
		<?php


    } /* end function */


}
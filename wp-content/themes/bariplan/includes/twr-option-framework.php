<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "bariplan_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'bariplan Theme Options', 'bariplan' ),
        'page_title'           => esc_html__( 'bariplan Theme Options', 'bariplan' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Genarel Option', 'bariplan'),
        'id'        => 'wellgoption',
        'icon'      => 'el-icon-cog',
		 'fields'    => array(
				array(
					'id'          => 'dfgfdgdf',
					'type'        => 'info', 
					'title'       => esc_html__('Welcome Our Theme Option', 'bariplan'),
				),				
		 )
    ) );
	

Redux::setSection( $opt_name, array(
	'title'     => esc_html__('Global Color Option', 'bariplan'),
	'id'        => 'main_logo_id',
	'customizer_width' => '400px',
	'icon'      => 'el-icon-cog',
	 'fields'    => array(
			array(
				'id'          => 'bariplan_nnotice_typography',
				'type'        => 'info', 
				'title'       => esc_html__('Welcome Our Global Color Option', 'bariplan'),
			),
			array(
				'id'          => 'bariplan_nnoticec_typography',
				'type'        => 'info', 
				'title'       => esc_html__('Note: you can change theme color 2 ways. One Global Option. if you set any color from here, it will show everywhere and second option is Every Section. you need to go every section area. there you can find the color option and you need change the color there.', 'bariplan'),
			),				
	 )
) );

/*========================
bariplan Typography FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Global Typography', 'bariplan'),
        'id'         => 'bariplan_tyfo_page',  
        'icon'       => 'el el-circle-arrow-right',
		'subsection' => true,
        'fields'    => array(				
				array(
					'id'          => 'bariplan_gbody_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Body Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,					
					'output'      => array('
						body,p						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'bariplan_gheading_all_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Heading Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,										
					'output'      => array('
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a			
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'font-style' => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'bariplan_gmenu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Menu Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,
					'output'      => array('
						.bariplan_menu > ul > li > a,.bariplan_menu ul .sub-menu li a						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'bariplan_gbtn_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Global Button Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'text-align'   => false,
					'color'   => false,
					'font-size'   => false,
					'output'      => array('
						button,a.btn,a.dtbtn,.btn,.learn_btn,.witr_feature_btn_f a,.witr_feature_btn_3d a,.feature_btn a,.witr_ser_btnb a,.service-btn > a,.witr_btn,.witr_bbtn,.witr_gbtn,.witr_gbbtn,.bariplan_button a,.witr_sbtn_s8 a					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),				
								
            ),
    ) );
	
	
	/*  global color */			
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Global Color', 'bariplan'),
        'id'         => 'twr_title_option',  
		'subsection' => true,
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
                array(								
                    'id'        => 'twr_global_colorlink',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Link Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						a
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorlink_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Link Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						a:hover					
					'
					)
                ),				
                array(								
                    'id'        => 'twr_global_colortext',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Content Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					
						body,p,
						.blog-left-side .widget a,
						.twr_product_sidebar a,
						.footer-menu ul li a
					
					'
					)
                ),
				array(								
                    'id'        => 'twr_global_colortitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						h1,
						h2,
						h3,
						h4,
						h5,
						h6,
						h1 a,
						h2 a,
						h3 a,
						h4 a,
						h5 a,
						h6 a,
						.twr_product_sidebar .product_list_widget li a,
						.mini_shop_content a i,
						.twr_mini_cart .woocommerce ul.cart_list li a, .twr_mini_cart .woocommerce ul.product_list_widget li a
					
					'
					)
                ),	
				array(								
                    'id'        => 'twr_global_colormenu',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Menu Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.bariplan_menu > ul > li > a,
						.bariplan_menu ul .sub-menu li a
					
					'
					)
                ),			
		
                array(								
                    'id'        => 'twr_global_colort_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Main Color, Title & Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
.twr_pretwr_loader_pre .twr_animation .twr_text_pre, .twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before,
.blog-left-side .widget ul li a:hover,
.blog-left-side .widget ul li:hover::before,
.widget_categories ul li:hover:before,
.widget_archive ul li:hover:before,
.widget_categories ul li a:hover,
.widget_archive ul li a:hover,
.r-post-content h3:hover,
.r-post-content h3 a:hover,
.bariplan_menu > ul > li.current > a,
.bariplan_menu > ul > li:hover > a,
.creative_header_menu > ul > li:hover > a,
.bariplan_menu ul .sub-menu li:hover > a,
.bariplan_menu ul .sub-menu .sub-menu li:hover > a,
.bariplan_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
.bariplan_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,
.bariplan_nav_area.prefix .bariplan_menu > ul > li.current > a,
.prefix .right_close_class .right_sideber_menu i,
.right_close_class .right_sideber_menu i,
.btn.btn-bordered,
.breadcumb-inner li a:hover,
.bariplan-blog-meta-left i,
.not-found-inner h2,
.footer-top-address h2 span ,
.footer-top-inner h2 span,
.recent-post-text h4 a:hover ,
.footer-middle .recent-post-text > h4 a:hover,
.copy-right-text a,
.copy-right-text a:hover,
.footer-menu ul li a:hover,
.creative_header_icon i,
.top_crmenu_i_list li a i,
.blog-content h2 a:hover,
.bariplan-blog-meta-left a:hover,
.bariplan-blog-meta-left span:hover,
.bariplan-blog-meta-left i ,
.blog-page-title h2 a:hover,
.footer-middle .mc4wp-form-fields button:hover,
.tutor-star-rating-group,
.tutor-course-loop-meta>div i,
.tutor-course-filter-wrapper>div:first-child label:hover,
.tutor-wrap nav.course-enrolled-nav ul li.active a,
.witr_ser_btnb a:hover,
.tbd_product_title h2 a:hover,
.tbd_item_info a:hover,
.woocommerce-info::before ,
.woocommerce div.product p.price, 
.woocommerce div.product span.price,
.woocommerce div.product .stock,
.woocommerce table.witr_product_cart tbody tr td a.witr_cart_delete,
.woocommerce-message::before,
.woocommerce-MyAccount-content a,
.tbd_product_title h2:hover,
.tbd_product_title h3:hover,
.twr_mini_cart span.woocommerce-Price-amount.amount,
.woocommerce div.product p.price,
.woocommerce div.product span.price	,
.woocommerce .twr_product_sidebar span.woocommerce-Price-amount.amount,
.reply_date span.span_right,
a#cancel-comment-reply-link,


.pluincss-color,
.prot_content h3 a:hover,
.witr_taba_style1 .nav-tabs .nav-link,
.banner-content a.witr_btns2,
.w_apps_button a,
span.time-counts,
.counterdowns p,
.apartment_text h1,
.witr_apartment_form form select,
.witr_apartment_form .const_btn,
.witr_content_casei p,
.witr_case_btnb a,
.bariplan_content p span,
.bariplan_content h5 span,
.bariplan_content h2 span,
.bariplan_content h3 span,
.a_active i,
.witr_bbtn,
.witr_gbbtn,
.witr_vbbtn i,
.witr_vbbgbtn i,
.wblog-content h5 > a:hover,
.wblog-content span i:hover,
.witr_blog_metan span i,
.witr_blog_con span i,
.witr_blog_con h2 a:hover,
.witr_post_Author .nameAuthor,
.witr_blog_con6 span i:hover,
.witr_blog_con6 h2 a:hover,
.witr_post_Author6 .nameAuthor:hover,
.witr_post_Author6 .comment:hover,
.witr_singleBlog:hover .learn_btn,
.witr_blog_area11 .learn_btn,
.wbutton_right_icon a,
.blog-page-title_adn a:hover,
.blog-content_adn h2 a:hover,
.bariplan-blog-meta-left_adn a:hover,
.bariplan-blog-meta-left_adn span:hover,
.bariplan-blog-meta-left_adn i,
.learn_btn:hover,
.learn_btn i,
.witr_banner_content h1 span,
.witr_banner_content h2 span,
.witr_banner_content a i,
.witr_banner_content form button,
.banner-content h1 span,
.banner-content h2 span,
.banner-content h3 span,
.butn,
.banner-content.content-4 ul li a i,
.banner-content input,
.send_message input.wpcf7-submit:hover,
.mean-container .mean-nav ul li a:hover,
.slider_btn .witr_btn.active,
.witr_section_title_inner h2,
.witr_section_title_inner p span a,
.witr_section_title_inner p span,
.witr_section_title_inner h1 span,
.witr_section_title_inner h2 span,
.witr_section_title_inner h3 span,
.witr_text_widget_inner h1,
.witr_text_widget_inner h1 span,
.witr_text_widget_inner h2 span,
.em_crating i.active,
 .witr_ns_part i,
 .witr_test_name i,
 .execllent_star h3,
 .em_testi_content:before,
.em_testi_content:after,
 .em_testi_title span,
 .test_q_icon i,
.title_and_sub h6,
  .witr_team_content h5:hover, 
  .witr_team_content h5 a:hover,
 .witr_team_content span,
 .em-team-content-socials a,
 .team-style-2 .em-content-button a,
 .busi_singleTeam h5:hover,
 .witr_socials_3d a:hover,
 .witr_team_top ul li a,
  .witr_bottom_icon a,
  .team_o_icons ul li a,
  .team_single_title h1,
  .post_team_icon_8 ul li a,
  .bariplan_single_event:hover .event_page_title h2 a,
 .witr_swiper_content h1 span,
.witr_swiper_content h2 span,
.witr_swiper_content h3 span,
.swiper-button-prev:hover,
.swiper-button-next:hover,
.witr_ds_content_inner h1 span,
.witr_ds_content_inner h2 span,
.witr_ds_content_inner h3 span, 
 .witr_feed_icons span:hover,
 .width_height_link_02 .service-item i,
.width_height_link_0.service-item i,
.witr_service_btn_3d  a:hover, 
 .witr_service2_7 .witr_ser_btnb a i,
 .witr_service2_icont i,
 .em-service-title h3 span,
 .service-btna a:hover,
 .width_height_link_0 .em-service-icon i,
.em-service-title h3 a:hover,
 .witr_sstyle_9:hover .service-btn > a,
.witr_service_10 .service-btn a,
 .service_list_op ul li a:hover,
.witr_service_s_12.service-item h2,
 .witr_service_12  .wirt_detail_title h3 a:hover,
.wirt_detailb_icon i,
.wbutton_top_service_icon a,
.witr_servicetwo_text a,
.witr_service2_icon_bottom i,
 .witr_single_socials ul li a i:hover,
  .witr_progress-style10 .witr_percent,
 .witr_progress-style10 .progress-bar-success .witr_percent,
 .witr_progress-style10 .progress-bar-info .witr_percent,
 .witr_progress-style10 .progress-bar-warning .witr_percent,
 .witr_progress-style10 .progress-bar-danger .witr_percent,
 .witr_pricing_icon i,
 .pricing-part a.btn:hover,
 .witr_pslide .witr_pslide_custom a span,
 .ps1 .witr_content_pslide_text h3:hover,
.ps1 .witr_content_pslide_text a:hover, 
.ps3.ps1 .witr_content_pslide_text a:hover, 
.witr_pslide3 .witr_pslide_custom a span,
.portfolio_readmore_btn > a,
.em-slider-title span,
.em-button-button-area a,
a.em-active-button:hover,
.witr_modal_menu i,
.departmentList ul li a:hover,
.departmentList .discover_more:hover,
.ab_videoArea i,
.wittr_footermenu_w_list ul li a:hover,
.witr_counter_number_inn h3,
.witr_counter_number_inn span,
.witr_content_couses h4,
.witr_content_couses h3 a:hover,
.witr_couses_btnb a,
.witr_circal_r h6 span,
.bariplan-single-event_adn:hover .event-page-title_adn a,
.bariplan_event_abs h2 a:hover,
.span_text span i,
.width_height_link_02 .sub-item i,
.width_height_link_0.sub-item i,
.feature_btn a,
.sub-item.sub-item-3 i,
.sub-item.sub-item-6 i,
.witr_feature_btn_f a,
.witr_cfeature9 .sub-item i,
.medi_featureDetail .discover_more:hover,
.box i,
.em-service2.witr_sstyle_9:hover .em-service-icon i,
.witr_counter_icon i,
.service-btn > a,
.em-feature:hover .feature_btn a,
.witr_section_title_inner h2,
.singleService h2,
.witr_feature_12.sub-item i,
.witr_feature_13 .sub-item h2,
.em-feature:hover .em_feature-icon i,
.feature_active .all_feature_color h2,
.feature_topicon_post i,
.car_feature_btn_icon a i,
.learn_btn,
.wblog-content > a,
.feature_btn a,
.medi_featureDetail .discover_more i
					
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorpostmeta',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Post Meta Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '					
						.bariplan-blog-meta-left a, .bariplan-blog-meta-left span,
						.wblog-content span,.wblog-content span a,.wblog-content span a i,.witr_blog_metan span, .witr_blog_metan span a, .witr_blog_con span, .witr_blog_con span a
					'
					)
                ),					
                array(								
                    'id'        => 'twr_global_colorbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Global Background Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '
.mc4wp-form-fields button,					
.mini_shop_content a span.count,
.defaultsearch button,
.tagcloud a:hover,
table#wp-calendar td#today,
.wp-block-button__link,
.post-password-form input[type=submit] ,
.mean-container .mean-nav ,
.mean-container .mean-bar,
a.dtbtn,
.em-quearys-menu i ,
.btn,
.btn:hover,
.btn:focus,
.btn.btn-bordered:hover,
.readmore a:hover,
.right_side_menu_icon .right_sideber_menu i,
.bariplan-single-icon-inner a:hover,
.paginations a:hover, .paginations a.current, .page-numbers span.current,
.tutor-pagination-wrap a:hover,
.tutor-pagination-wrap span.page-numbers.current,
.commment_title h3:before,
.comment_bariplan_btn,
.footer-social-icon a i,
.footer-middle .mc4wp-form-fields button,
.bariplan-description-area .social-icons a:hover,
.witr_shortcode_inner,
.tutor-course-loop-level,
.txw  span.tutor-text-avatar,
.tutor-course-archive-results-wrap strong ,
#scrollUp,
.bariplan-header-top,
.top-right-menu ul .sub-menu,
.em_creative_header:before,
.em_creative_header:after,
.creative_header_button:before,
.creative_header_button .dtbtn,
.creative_header_button > a:hover,
.em_slider_social a,
.em_slider_social a:hover,
.top_crmenu_l ul,
.top_crt_style,
.em_slider_social a,
.em_slider_social a:hover,
.thb_product_car a.added_to_cart:hover:before,
.woocommerce span.tbd_sale_inner,
.woocommerce span.onsale.onsingle_sale.tbd_sale_inner,
.tbd_product .thb_product_car a:hover,
.woocommerce div.product form.cart .button,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
nav.woocommerce-MyAccount-navigation ul li.is-active,
.woocommerce .witr_product_cart .coupon input[type="hidden"],
.woocommerce .witr_product_cart .coupon button,
.woocommerce .witr_product_cart button.button:disabled,
.woocommerce .witr_product_cart button.button:disabled[disabled],
.woocommerce .witr_cart_to_cross a.checkout-button.alt,
.woocommerce .witr_checkout_form button.button.alt,
.woocommerce  a.button.wc-backward,
.tbd_product .thb_product_car a:hover,
.witr_cart_to_cross .cart_totals > h2,
.witr_checkout_form .witr_ck_blling h3, 
.witr_checkout_form h3#order_review_heading,
h2.woocommerce-order-details__title,
.woocommerce-column__title,
.content-widget .widget_price_filter .ui-slider .ui-slider-range,
.content-widget .widget_price_filter .ui-slider .ui-slider-handle,
.content-widget .widget_price_filter .ui-slider .ui-slider-handle,
.widget_product_search button,
.bariplan-single-icon-inner a:hover,
.commment_title h3:before,
.bariplan_btn,
.readmore a:hover,
ul.tx_product_tab.nav li a.active,
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a.checkout,
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a:hover,
.woocommerce-account .woocommerce button.button,
.woocommerce-account .woocommerce a.button,
.woocommerce .widget_price_filter .price_slider_amount .button,
.tx_menuc_btn .tx_mc_btn,
.bariplan-single-icon a:hover,

.pluginbgcolor,
.product_tl_nav ul li:hover, .product_tl_nav ul li.ema_product_item,
.witr_taba_style1 .nav-tabs .nav-item.show .nav-link,
.witr_taba_style1 .nav-tabs .nav-link.active,
.witr_btn,
.show_cart_cbtn:hover,
 .witr_bbtn:hover,
.witr_vbtn,
.witr_vbbtn:hover,
.wblog-content > a:hover,
.witr_blog_area8 .learn_btn,
.witr_post_meta9 span,
.witr_blog_area10 .learn_btn:hover,
.witr_blog_area10 .learn_btn i,
.witr_top_category span ul li a,
.witr_blog_area11 .learn_btn:hover,
.witr_blog_area13 .learn_btn:hover,
.blog_add_icon a,
.busi_singleBlog:hover .wbutton_right_icon a::before,
.readmore_adn a:hover,
.witr_butn,
.service-btn > a:hover,
.witr_banner_content a i:hover,
.banner-content a i,
.butn::before,
.banner-content.content-4 ul li a:hover i,
.banner-content button,
.witr_ac_style:focus,
.witr_ac_style:hover,
.active .witr_ac_style,
.witr_about_btn a,
 .slick-prev, .slick-next,
.slick-prev.slick-disabled,
.slick-next.slick-disabled,
.slick-dots li.slick-active button, 
.send_message input.wpcf7-submit,
.tx_svd_icon,
.slider_btn .witr_btn.active:hover,
.witr_video_btn i,
.witr_video_btn i::after,
.bariplan_slider_icon ul li a i,
.play-overlay a,
.play-overlay a::before,
.video-item a,
.video-item a::before,
.witr_bar_inner,
.title_in:before,
 .title_in:after,
.title_btn a,
.witr_hd_timeline_inner:before,
.witr_dslborder,
.witr_hd_sicon_inner,
.middle_border_divider,
.testomonial_2part .slick-slide.slick-current.slick-active .bottom_single_testi,
 .team_overlay_icon a,
 .team-social ul li a:hover,
 .team-back-wraper,
 .busi_TMHover::before,
 .busi_TMHover::after,
 .busiTS a:hover,
 .back_view .con_TMS a:hover,
 .witr_bottom_icon a:hover,
 .witr_team_s11 span,
 .front_view .con_TMS a:hover,
 .front_view .con_TMS13_icon.con_TMS a,
 .team_s14_image::after,
 .team_o_icon ul li a:hover,
 .all_color_team:hover .team_o_icons::before,
 .team_o_icons ul li a:hover,
 .witr_single_team_s,
 .single_team_list ul li i,
 .single_team_list ul li a i,
 .single_team_list ul li i:hover,
 .single_team_list ul li a i:hover,
 .team_single_btn a,
 .team_single_btn a:hover,
.team_top_icon ul li a,
 .team_bottom_icon a,
 .post_team_icon_8 ul li a:hover,
 .post_team_icon_9,
 .post_team10_area .team_o_icons ul li a:hover,
.tab_item .nav-pills li .nav-link.active,
 .bariplan-tab li a.active,
 .bariplan-tab li a:hover,
.witr_swiper_area .swiper-pagination-progressbar .swiper-pagination-progressbar-fill,
.witr_swiper_area .swiper-scrollbar-drag,
 .single_image_line,
 .witr_tx_ovei_title,
.witr_service_7 .service-btn > a::before,
.witr_service_7 .service-btn > a::after,
.service-item i,
.witr_service_front_3d,
.witr_service2_box,
.witr_service3_btn a,
.witr_service2_7 .witr_ser_btnb a,
.pluse_btn span,
 .witr_sn_button a,
.em-service2 .em-service-icon i,
.witr_sstyle_9::before,
.witr_service_10::before,
.witr_service_10 .service-btn a:hover,
.poly_text_box:hover .service_icon_box::before,
.witr_service2:hover .witr_service2_icon_bottom::before,
.witr_service2:hover .wbutton_top_service_icon a::before,
.wirt_detail_texti,
.wirt_detailb_icon i:hover,
.medi_singleService:before,
.witr_sbtn_s8 a i,
.witr_11_btn.witr_sbtn_s8 a,
.pluse_btn_slick span,
.Screenshots .dnSlide-main .dnSlide-btn,
 .progress-bar,
.witr_process_icon i,
.witr_back_process,
.witr_process_icon2 i,
.pricing-part strong,
.pricing-part a.btn,
.pricing_style_2 .pricing-part h5,
.pricing_style_4 .witr_p_middle_inner,
.pricing_top_box,
.witr_ribon_text h3,
.pricing_style_7.pricing-part h4,
.witr_pslide_custom a span,
.witr_pslide3 .witr_single_pslide:hover .witr_pslide_custom a span,
.portfolio_nav ul li:hover,
.portfolio_nav ul li.current_menu_item,
.gallery_load_button a:hover,
 .picon a,
.portfolio_readmore_btn > a:hover,
.pstyle_1 .picon a:hover,
.positi_3.pprotfolio4,
a.em-active-button,
.em-button-button-area a:hover,
.witr_nivideo_btns i:hover,
.em-nivo-slider-wrapper .nivo-directionNav a:hover,
.em-nivo-slider-wrapper .nivo-controlNav a:hover,
.em-nivo-slider-wrapper .nivo-controlNav a.active,
.ab_videoArea,
.sub-item i,
.sub-item.sub-item-3:hover i,
.sub-item.sub-item-6:hover i,
.witr_feature_back_3d,
.witr_feature_btn_f a:hover,
.witr_cfeature9 .sub-item:hover i,
.witr_cfeature9 .sub-item i::after,
.witr_cfeature9 .sub-item .feature_btn a,
.witr_feature2:hover,
.witr_feature_13.sub-border-2:hover .sub-item span,
.witr_feature_13 .sub-item:hover::before,
.em-feature:hover .feature_inner_box,
.em_feature-icon i,
.wcr_feature_10 .feature_btn a::before,
.wcr_feature_11:hover .car_feature_btn_icon a i,
.medi_singleFeature:before,
.witr_icon_adn a,
.event_date,
.event_date_list,
.witr_event_btn a,
.witr_category .tevbt, 
.witr_event_6 .bariplan_event_date,
.style7_day span,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a,
.nav-tabs .nav-link:hover,
.witr_taba_style1 .nav-tabs .nav-item.show .nav-link,
 .witr_taba_style1 .nav-tabs .nav-link.active,
.witr_couses_btnb a:hover,
.give-btn,
.couses_box_position .witr_content_couses h4,
.couses_bar_percent .progress-bar,
.witr_single_counter:hover,
.witr_counter_6 .wirt_new_iner,
.single_counter:hover,
span.cdowns::before,
span.cdowns::after,
.witr_apartment_form .const_btn:hover,
.witr_apartment_form  .btn,
.witr_case_btnb a:hover,
.bariplan_button a,
.feature_btn a:hover,
.bariplan_video_inner i,
.w_apps_button a:hover
',


					'border-color' => '
					
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a.checkout,					
.twr_mini_cart .woocommerce.widget_shopping_cart .buttons a:hover,				
.paginations a:hover,
.paginations a.current,
.page-numbers span.current,					
.bariplan-description-area .social-icons a:hover,					
ul.tx_product_tab.nav li a.active,					
.woocommerce form .form-row.woocommerce-invalid .select2-container, 
.woocommerce form .form-row.woocommerce-invalid select,	
.readmore a:hover,					
.bariplan-single-icon-inner a:hover,
.sticky,
.tag-sticky-2 .bariplan-single-blog,
.blog-left-side h2.widget-title::before,
.tx_menuc_btn .tx_mc_btn,
.bariplan-single-icon a:hover,
.em_slider_social a,

.pluginbdcolor,
.product_tl_nav ul li:hover, .product_tl_nav ul li.ema_product_item,
.w_apps_button a,
.witr_case_btnb a:hover,
.witr_single_counter:hover,
.single_counter:hover:before,
.single_counter:hover:after,
.single_counter:hover,
.witr_couses_btnb a:hover,
.service-btn > a,
.give-btn,
.sub-item.sub-item-3 i,
.witr_cfeature8 .sub-item span::before,
.em-button-button-area a:hover,
.em-nivo-slider-wrapper .nivo-directionNav a:hover,
.portfolio_nav ul li:hover,
.portfolio_nav ul li.current_menu_item,
.gallery_load_button a:hover,
.portfolio_readmore_btn > a:hover,
.pricing-part a.btn,
.witr_progress-style10 .witr_percent,
.witr_progress-style10 .progress-bar-success .witr_percent,
.witr_progress-style10 .progress-bar-info .witr_percent,
.witr_progress-style10 .progress-bar-warning .witr_percent,
.witr_progress-style10 .progress-bar-danger .witr_percent,
.witr_progress-style13.progress,
.witr_sstyle_9:hover .service-btn > a,
.team-social ul li a:hover,
.busiTS a,
.busiTS a:hover,
.back_view .con_TMS a:hover,
.front_view .con_TMS a:hover,
.team_o_icon ul li a:hover,
.team_o_icons ul li a:hover,
.witr_testi_s_11:hover,
.witr_bar_innerc::before,
.witr_bar_innerc::after,
.slick-dots li button,
.slider_btn .witr_btn.active,
.slider_btn .witr_btn.active:hover,
.witr_butn,
.butn,
.feature_btn a,
.banner-content.content-4 ul li a i,
.banner-content input,
.wblog-content > a,
.witr_blog_area13 .learn_btn:hover,
.readmore_adn a:hover,
.witr_bbtn,
.witr_bbtn:hover,
.witr_vbbtn,
.witr_vbbtn:hover					
					
					',
					'border-left-color' => '
nav.woocommerce-MyAccount-navigation ul li.is-active:after,
.plugibbdtopcss,
.team_s14_image::before					
					',
					'border-right-color' => '
.plugibbdtopcss,					
.team_s14_image::after					
					',
					'border-bottom-color' => '
.plugibbdtopcss,					
.witr_feature_12.sub-item,
.tab_item ul li a,
.witr_background_test,
.witr_testi_main				
					',
					'border-top-color' => '

.woocommerce-message, .woocommerce-info,
.plugibbdtopcss,
.wirt_s2_s9 .witr_service2_box,
.team_s14_image::before,
.witr_background_test,
.witr_testi_main					
					'
					)
                ),
                array(								
                    'id'        => 'twr_global_colorbg_hover',
                    'type'      => 'color',
					'desc'      => esc_html__('Some of button set brand color, when you select global background color on this button. that that time, you need select another hover background color. if you need select another background, That time set background color from here.', 'bariplan'),
                    'title'     => esc_html__('Global Background Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '
.mc4wp-form-fields button:hover,					
a.dtbtn:hover, .witr_btn:hover, .bariplan_button a:hover,
.comment_bariplan_btn:hover,
.defaultsearch button:hover,
.footer-social-icon a i:hover,
.bariplan-description-area .social-icons a,
.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,
.woocommerce  a.button.wc-backward:hover,
.woocommerce .witr_checkout_form button.button.alt:hover,
.woocommerce-account .woocommerce button.button:hover,
.woocommerce-account .woocommerce a.button:hover,
.woocommerce .witr_product_cart .coupon button.button:hover,
.tx_menuc_btn .tx_mc_btn:hover,
.em_slider_social a:hover,

.pluginbdfghcss,
 .witr_btn:hover,
.witr_vbtn:hover,
.witr_blog_area10 .learn_btn:hover i,
 .witr_butn:hover,
 .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus,
.bariplan_slider_icon ul li a i:hover,
 .front_view .con_TMS13_icon.con_TMS a:hover,
 .team_single_btn a:hover,
 .team_top_icon ul li a:hover,
 .team_bottom_icon a:hover,
.tab_area .tab_content a:hover,
.singleSS:hover .SIBG_1::before,
 .witr_service_10:hover .SIBG_1::before,
.witr_sn_button a:hover,
.witr_sbtn_s8 a,
.pricing_style_6.pricing-part strong,
.witr_pslide_custom a span:hover,
.witr_pslide4.witr_pslide3 .witr_pslide_custom a span:hover,
.picon a:hover,
.witr_nivideo_btns i,
.witr_nivideo_btns i::after,
.witr_feature_front_3d,
.witr_feature2,
.witr_feature_13.sub-border-2 .sub-item span,
.witr_feature_13.sub-border-2:hover .sub-item i,
 .witr_event_btn a:hover,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a:hover,
.couses_box_position:hover .witr_content_couses h4,
.bariplan_button a:hover
							
					',
					'border-color' => '
a.dtbtn:hover, .witr_btn:hover, .bariplan_button a:hover,
.comment_bariplan_btn:hover,
.defaultsearch button:hover,
.footer-social-icon a i:hover,
.mc4wp-form-fields button:hover,
.bariplan-description-area .social-icons a,
.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,
.woocommerce  a.button.wc-backward:hover,
.woocommerce .witr_checkout_form button.button.alt:hover,
.woocommerce-account .woocommerce button.button:hover,
.woocommerce-account .woocommerce a.button:hover,
.woocommerce .witr_product_cart .coupon button.button:hover,
.tx_menuc_btn .tx_mc_btn:hover,

.pluginbdfghcss,
 .witr_btn:hover,
.witr_vbtn:hover,
.witr_blog_area10 .learn_btn:hover i,
 .witr_butn:hover,
 .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus,
.bariplan_slider_icon ul li a i:hover,
 .front_view .con_TMS13_icon.con_TMS a:hover,
 .team_single_btn a:hover,
 .team_top_icon ul li a:hover,
 .team_bottom_icon a:hover,
.tab_area .tab_content a:hover,
.singleSS:hover .SIBG_1::before,
 .witr_service_10:hover .SIBG_1::before,
.witr_sn_button a:hover,
.witr_sbtn_s8 a,
.pricing_style_6.pricing-part strong,
.witr_pslide_custom a span:hover,
.witr_pslide4.witr_pslide3 .witr_pslide_custom a span:hover,
.picon a:hover,
.witr_nivideo_btns i,
.witr_nivideo_btns i::after,
.witr_feature_front_3d,
.witr_feature2,
.witr_feature_13.sub-border-2 .sub-item span,
.witr_feature_13.sub-border-2:hover .sub-item i,
 .witr_event_btn a:hover,
.witr_event_style_8.witr_event_style_7 .witr_event_btn a:hover,
.couses_box_position:hover .witr_content_couses h4,
.bariplan_button a:hover			
					'
					)
                ),

                array(								
                    'id'        => 'twr_global_bgoverlay_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Global Overlay BG Color', 'bariplan'),
					'default'   => array(
						'color'     => '',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
.plugin_overlaycss,
.witr_blog_area11 .learn_btn,
.blog-page-title_adn2 h2,
.slick-dots li button,
 .witr_team_section:before,
 .team-sec:before,
 .witr_team_sec_3:before,
 .em-team-content-socials a:hover,
 .em-team:hover .em-team-content-waraper,
 .witr_back_img:after,
 .witr_team_thumb4::before,
 .team_o_icons ul li a,
.SIBG_1::before,
.witr_back_service2,
.witr_service2_icont i,
.witr_service_10 .service-btn a,
.medi_singleService:after,
.prot_content,
.em_port_content,
.pstyle2 .prot_content,
.pstyle2.pstyle3 .prot_content_inner,
.ab_videoArea i::after,
.witr_slug_feature .witr_feture_back_con_slugf,
.witr_slug_front_contentf,
.medi_singleFeature:hover .medi_featureThumb:after,
.witr_event_6 .bariplan_event_date,
.couses_box_position::before,
.witr_case_image::before,
.witr_single_team:after					
					'
					)
                ),					

				
            ),
    ) );	

	
/*========================
END bariplan global color  FIELD
=========================*/
	
	/* preloader option */
	    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Preloader Option', 'bariplan'),
        'id'        => 'preloderoption',
        'icon'      => 'el-icon-cog',
		 'fields'    => array(
			array(
				'id'      => 'twr_is_preloader',
				'type'    => 'switch',
				'title'   => esc_html__( 'Preloader', 'bariplan' ),
				'on'      => esc_html__( 'ON', 'bariplan' ),
				'off'     => esc_html__( 'OFF', 'bariplan' ),
				'default' => true,
			),

			array(
				'required' => array( 'twr_is_preloader', '=', '1' ),
				'id'       => 'twr_preloader_style',
				'type'     => 'select',
				'title'    => esc_html__( 'Preloader Style', 'bariplan' ),
				'default'   => '1',
				'options'  => array(
					'1'  => esc_html__( 'Text Preloader Style', 'bariplan' ),
					'2' => esc_html__( 'Image Preloader Style', 'bariplan' )
				)
			),

			/**
			 * Text Preloader
			 */
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),
				'id'       => 'preloader_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Preloader Logo Text', 'bariplan' ),
				'default'  => get_bloginfo( 'name' )
			),

			array(
				'required'  => array( 'twr_preloader_style', '=', '1' ),			
				'title'     => esc_html__( 'Loading Text Color', 'bariplan' ),
				'id'        => 'preloader_color',
				'type'      => 'color',
				'output'    => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre, .twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before' ),
			),

			array(
				'required'  => array( 'twr_preloader_style', '=', '1' ),			
				'title'     => esc_html__( 'Backend Shadow Color', 'bariplan' ),
				'id'        => 'preloader_shadow_color',
				'type'      => 'color_rgba',
				'output'    => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre' ),
			),
			array(
				'required'      => array( 'twr_preloader_style', '=', '1' ),			
				'title'         => esc_html__( 'Loading Logo Typography', 'bariplan' ),
				'id'            => 'preloader_typo',
				'type'          => 'typography',
				'text-align'    => false,
				'color'         => false,
				'output'        => array( '.twr_pretwr_loader_pre .twr_animation .twr_text_pre,.twr_pretwr_loader_pre .twr_animation .twr_text_pre .twr_textletter_pre:before' ),
			),
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),
				'id'       => 'pre_preloader_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Loding Text', 'bariplan' ),
				'default'  => esc_html__( 'Please Wait For Loading', 'bariplan' )
			),			
			array(
				'required' => array( 'twr_preloader_style', '=', '1' ),			
				'title'         => esc_html__( 'Loading Text Typography', 'bariplan' ),
				'id'            => 'preloader_small_typo',
				'type'          => 'typography',
				'text-align'    => false,
				'output'        => array( '.twr_pretwr_loader_pre p' ),
			),
			array(
				'required' => array( 'twr_preloader_style', '=', '2' ),
				'id'       => 'pre_preloader_image',
				'type'     => 'media',
				'desc'     => esc_html__( 'Insert gif image for the better look', 'bariplan' ),
				'title'    => esc_html__( 'Preloader image', 'bariplan' ),
				'compiler' => true,
				'default'  => array(
					'url' =>''
				)
			),
		)
    ) );
	
	
		
	
	//total header area
     Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu area', 'bariplan'),
        'id'        => 'bariplan_header_area',
        'desc'      => esc_html__('Header options', 'bariplan'),
        'icon'      => 'el-icon-tasks',      
        'fields'    => array(
		
             array(
                    'id'        => 'bariplan_header_display_none_hide',
					'desc'      => esc_html__('All Menu OFF/ON section', 'bariplan'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header Hide', 'bariplan'),
                    'default'   => false,
                ),
             array(
                    'id'        => 'bariplan_header_posi_top',
					'desc'      => esc_html__('All Menu Position  OFF/ON section', 'bariplan'),
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header absolute', 'bariplan'),
                    'default'   => false,
                ),
				array(
                    'id'        => 'bariplan_header_posi_top2',
					'desc'      => esc_html__('Top 2 and Main Menu Position  OFF/ON section', 'bariplan'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Top 2 and Main Menu Header absolute', 'bariplan'),
                    'default'   => false,
                ),				
				array(
                    'id'        => 'bariplan_header_posi_top3',
					'desc'      => esc_html__('Main Menu Position  OFF/ON section', 'bariplan'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Main Header absolute', 'bariplan'),
                    'default'   => false,
                ),					
             array(
                    'id'        => 'bariplan_header_display_social_hide',
					'desc'      => esc_html__('Body Social icon OFF/ON section', 'bariplan'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Body Social ON/OFF', 'bariplan'),
                    'default'   => false,
                ),						

				
            )
        ));	
	
     //Header Top 1
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 1', 'bariplan'),
        'id'        => 'bariplan_header_top',
        'desc'      => esc_html__('Insert header top info', 'bariplan'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'bariplan_header_top_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style everywhere. But If you want to show header top style of your choose post and page. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 1 OFF/ON option. Please select OFF/ON from there.', 'bariplan'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top', 'bariplan'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'bariplan_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 1 Header layout', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','bariplan'),
                        'htopt_box' => esc_html__('Box Layout','bariplan'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','bariplan'),
                        'htopt_full' => esc_html__('Full Layout','bariplan'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'twr_top_right_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top Header Style', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_l11' => esc_html__('Select Top Menu','bariplan'),
                        'h_top_l1' => esc_html__(' 1 Left Address and Right Icon','bariplan'),
                        'h_top_l3' => esc_html__(' 2 Left Icon and Right Address','bariplan'),
                        'h_top_l2' => esc_html__(' 3 Left Address,Middle Welcome and Right Icon','bariplan'),
                        'h_top_l4' => esc_html__(' 4 Left Icon,Middle Welcome and Right Address','bariplan'),
                        'h_top_l5' => esc_html__(' 5 Left Address and Right Side Menu','bariplan'),
                        'h_top_l6' => esc_html__(' 6 Left Side Menu and Right Address','bariplan'),
                        'h_top_l7' => esc_html__(' 7 Left Address, Middle Social & Right Login','bariplan'),
                        'h_top_l8' => esc_html__(' 8 Left Opening Hours, Middle Social and Right login','bariplan'),
                        'h_top_l9' => esc_html__(' 9 Left Opening Hours, Middle Social and Right Search','bariplan'),
                        'h_top_20' => esc_html__(' 10 Left Address Right Search','bariplan'),
                        'h_top_21' => esc_html__(' 11 Left Address Right Text','bariplan'),
                        'h_top_22' => esc_html__(' 12 Right Address Left Text','bariplan'),
                        'h_top_23' => esc_html__(' 13 Left Address, Icon and Right Menu','bariplan'),
                        'h_top_24' => esc_html__(' 14 Center Address','bariplan'),
                    ),
                    'default'   => 'h_top_l1'
                ),				
				array(
                    'id'       => 'bariplan_header_top_i1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-home"></i> go https://icofont.com/icons. Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-home"></i>', 'bariplan'),
                ),
				array(
                    'id'       => 'bariplan_header_top_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 1', 'bariplan'),
                    'desc' => esc_html__('Insert Your Text', 'bariplan'),
					'default'	=> esc_html__('1st Floor New World.', 'bariplan'),
                ),
				array(
                    'id'       => 'bariplan_header_top_i3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'bariplan'),
					'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-envelope"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-envelope"></i>', 'bariplan'),
                ),				
                array(
                    'id'       => 'bariplan_header_top_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 2', 'bariplan'),
                    'desc' => esc_html__('Insert Your Text', 'bariplan'),
					'default'	=> esc_html__('demo@example.com', 'bariplan'),					
                ),
				array(
                    'id'       => 'bariplan_header_top_i2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-ui-call"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-ui-call"></i>', 'bariplan'),
                ),				
                array(
                    'id'       => 'bariplan_header_top_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Text Name 3', 'bariplan'),
                    'desc' => esc_html__('Insert Your Phone Number Text', 'bariplan'),
					'default'	=> esc_html__('+998556778345', 'bariplan'),					
                ),
				array(
                    'id'       => 'bariplan_header_top_i4',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Message Icon', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-ui-love"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-ui-love"></i>', 'bariplan'),
                ),				
                array(
                    'id'       => 'bariplan_header_top_wellcome',
                    'type'     => 'textarea',
                    'title'    => esc_html__('Text Message', 'bariplan'),
                    'desc' => esc_html__('Insert text support - span,a,br,strong,b,em and h2 html tag', 'bariplan'),
					'default'	=> esc_html__('welcome visit our site', 'bariplan'),					
                ),
				array(
                    'id'       => 'bariplan_header_top_i5',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-clock-time"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-clock-time"></i>', 'bariplan'),
                ),					
                array(
                    'id'       => 'bariplan_header_top_opening',
                    'type'     => 'text',
                    'title'    => esc_html__('Opening Text', 'bariplan'),
                    'desc' => esc_html__('Insert Text', 'bariplan'),
					'default'	=> esc_html__('Open hours: 9.00-24.00 Mon-Sat', 'bariplan'),					
                ),				
                array(								
                    'id'        => 'bariplan_header_top_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Top Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p span i, .top-address p a i
					')
                ),				
                array(								
                    'id'        => 'bariplan_header_top_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span
					')
                ),
                array(								
                    'id'        => 'bariplan_header_top_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('All Icon Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i:hover,
								.top-address p span i:hover
					')
                ),
                array(								
                    'id'        => 'bariplan_header_top_well_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p'
					)
                ),
				array(								
                    'id'        => 'bariplan_header_top_wella_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a,.top-address p a'
					)
                ),
				array(								
                    'id'        => 'bariplan_header_hover_Link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Text Message Link Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-welcome p a:hover,.top-welcomet p a:hover,.top-address p a:hover'
					)
                ),				
                array(								
                    'id'        => 'bariplan_hoeder_top_bg_color11',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.bariplan-header-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
				array(
					'id'       => 'top_menu_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('HeaderTop Menu Section Gradient BG Color', 'bariplan'),
					'desc'     => esc_html__('Set Gradient From here.', 'bariplan'),
					'validate' => 'color',			
					'default'  => array(
					'from' => '',
					'to'   => '',
					)
				),
				 array( 
					'id'       => 'top_header_border',
					'type'     => 'border',
					'title'    => __('Header Border Option', 'bariplan'),
					'subtitle' => __('Only color validation can be done on this field type', 'bariplan'),
					'output'   => array('.bariplan-header-top'),
					'desc'     => __('This is the description field, again good for additional info.', 'bariplan'),
					'default'  => array(
						'border-color'  => '', 
						'border-style'  => 'solid', 
						'border-top'    => '', 
						'border-right'  => '', 
						'border-bottom' => '', 
						'border-left'   => ''
					)
				),


				
				array(
					'id'             => 'bariplan_header_top_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.bariplan-header-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );



     //Header Top 2
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Section 2', 'bariplan'),
        'id'        => 'bariplan_header_toptwo',
        'desc'      => esc_html__('Insert header top info', 'bariplan'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
             array(
                    'id'        => 'bariplan_header_top_two_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top style 2 everywhere. But If you want to show header top style 2 your choose page and post. That time, Please don\'t ON the option. For this go to your page or post below, there you can see a Top Menu 2 OFF/ON option. Please select OFF/ON from there.', 'bariplan'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top style 2', 'bariplan'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'bariplan_box_layouttwo',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header layout', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
						'htops_box' => esc_html__('Select Layout','bariplan'),
                        'htopt_box' => esc_html__('Box Layout','bariplan'),
                        'htopt_boxi' => esc_html__('Box Inner Layout','bariplan'),
                        'htopt_full' => esc_html__('Full Layout','bariplan'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'twr_top_two_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Top 2 Header Style', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'h_top_1' => esc_html__('Select Top Menu','bariplan'),
                        'h_top_2' => esc_html__('1. Left Logo,Middle Address And Right Button','bariplan'),
                        'h_top_3' => esc_html__('2. Left Logo,Middle Address And Right Top Menu','bariplan'),
                        'h_top_4' => esc_html__('3. Left Logo,Middle Address And Right Social Icon','bariplan'),
                        'h_top_5' => esc_html__('4. Left Social Icon,Middle Logo And Right Address','bariplan'),
                        'h_top_6' => esc_html__('5. Left Logo And Right Address','bariplan'),
                        'h_top_7' => esc_html__('6. Left Logo,Middle Address And Right Button','bariplan'),
                        'h_top_8' => esc_html__('7. Left Logo,Middle Address And Right Mini shop','bariplan'),
						'h_top_9' => esc_html__('8. Left Social Icon and Menu,Middle Logo And Right Address','bariplan'),
                    ),
                    'default'   => 'h_top_2'
                ),					
				array(
                    'id'       => 'bariplan_header_top_ci1',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 1', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-google-map"></i> go https://icofont.com/icons . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-google-map"></i>', 'bariplan'),
                ),				
				array(
                    'id'       => 'bariplan_header_top_roadtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 1', 'bariplan'),
                    'desc' => esc_html__('Insert Text Here', 'bariplan'),
					'default'	=> esc_html__('Location', 'bariplan'),
                ),				
				array(
                    'id'       => 'bariplan_header_top_roadtwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 1', 'bariplan'),
                    'desc' => esc_html__('Insert Text Here', 'bariplan'),
					'default'	=> esc_html__('1st Floor.', 'bariplan'),
                ),
				array(
                    'id'       => 'bariplan_header_top_ci2',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 2', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-envelope"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-envelope"></i>', 'bariplan'),
                ),					
                array(
                    'id'       => 'bariplan_header_top_emailtwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 2', 'bariplan'),
                    'desc' => esc_html__('insert info', 'bariplan'),
					'default'	=> esc_html__(' Email', 'bariplan'),					
                ),					
                array(
                    'id'       => 'bariplan_header_top_emailtwo',
                    'type'     => 'text',
                    'title'    => esc_html__(' Sub Title 2 ', 'bariplan'),
                    'desc' => esc_html__('Iinsert info', 'bariplan'),
					'default'	=> esc_html__('demo@example.com', 'bariplan'),					
                ),
				array(
                    'id'       => 'bariplan_header_top_ci3',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon 3', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-ui-call"></i> . Not use the field, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-ui-call"></i>', 'bariplan'),
                ),					
                array(
                    'id'       => 'bariplan_header_top_mobiletwot',
                    'type'     => 'text',
                    'title'    => esc_html__('Title 3', 'bariplan'),
                    'desc' => esc_html__('insert info', 'bariplan'),
					'default'	=> esc_html__('Phone', 'bariplan'),					
                ),					
                array(
                    'id'       => 'bariplan_header_top_mobiletwo',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title 3', 'bariplan'),
                    'desc' => esc_html__('insert info', 'bariplan'),
					'default'	=> esc_html__('+998556778345', 'bariplan'),					
                ),
                array(
                    'id'       => 'bariplan_header_buttonc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'bariplan'),
                    'desc' => esc_html__('Insert text here, Not use the button, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('Get a Quote', 'bariplan'),					
                ),
                array(
                    'id'       => 'bariplan_header_button_urlc1',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'bariplan'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/ and Not use the link, remove the link from field', 'bariplan'),
					'default'	=>'#',					
                ),			
                array(								
                    'id'        => 'bariplan_header_top_icon_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Top Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.creative_header_icon i,.top-address p span i,.top-address p a i
					')
                ),				
				array(
					'id'          => 'bariplan_title_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Title Typography style', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > h3
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
				array(
					'id'          => 'bariplan_suptitle_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Title Typography style', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.creative_header_address_text > p,.creative_header_address_text > p > a,.top_crmenu_l li a,.cr_top_addess p span,.cr_top_addess p a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),				
                array(								
                    'id'        => 'bariplan_header_opening_bg_colortwo',
                    'type'      => 'color',
                    'title'     => esc_html__('Angle BG Section Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.em_creative_header::before,.creative_header_button::before,.em_creative_header::after',
					)
                ),				
                array(								
                    'id'        => 'bariplan_hoeder_top_bg_colortwo',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top 2 Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.em_creative_header,.top_crt_style
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'bariplan_header_top_section_spacingtwo',
					'type'           => 'spacing',
					'output'         => array('.em_creative_header,.top_crt_style'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );		
	







	
	
     //Header Logo
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Logo', 'bariplan'),
        'id'        => 'bariplan_header_logo',
        'desc'      => esc_html__('Header Logo', 'bariplan'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array( 
                array(
                    'id'        => 'bariplan_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Default Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here.ex: - it is work in default menu.', 'bariplan'),
                ),
                array(
                    'id'        => 'bariplan_onepage_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('One Page Menu Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex:- it is work in one page menu', 'bariplan'),
                ),
                array(
                    'id'        => 'bariplan_ts_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Transparent Menu Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'bariplan'),
                ),
                array(
                    'id'        => 'bariplan_mobile_top_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Mobile Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 1801x48px.', 'bariplan'),
                ),				
                array(
                    'id'        => 'bariplan_logo_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Height', 'bariplan'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set height ex-100px', 'bariplan'),
                ),	
                array(
                    'id'        => 'bariplan_logo_widget',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Width', 'bariplan'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set Width ex-100px', 'bariplan'),
                ),
                array(
                    'id'        => 'bariplan_line_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Massing your logo spacing to Menu ', 'bariplan'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-15px', 'bariplan'),
					'default'   =>'',
                ),
                array(
                    'id'       => 'bariplan_mobile_image_logo',
                    'type'     => 'text',
					'mode'      => false,
                    'title'    => esc_html__('Mobile Text Logo', 'bariplan'),
                    'desc' => esc_html__('Insert text ex: - "bariplan", Must be use "" for logo text ', 'bariplan'),
					'default'	=> esc_html__('"MENU"', 'bariplan'),	
                ),
				array(								
                    'id'        => 'bariplan_mobilebg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container .mean-bar,.mean-container .mean-nav',
					)
                ),
				array(								
                    'id'        => 'bariplan_mobileicon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container a.meanmenu-reveal span',
						'color' => '.mean-container a.meanmenu-reveal,.mean-container .mean-bar::before,.meanmenu-reveal.meanclose:hover'
					)
                ),					
				
            ),
    ) );

     //Header Menu
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu', 'bariplan'),
        'id'        => 'bariplan_menu',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(
                array(
                    'id'        => 'bariplan_main_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header Menu layout', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htops_box' => esc_html__('Select Layout','bariplan'),
                        'hmenul_box' => esc_html__('Box Layout','bariplan'),
                        'hmenul_boxi' => esc_html__('Box Inner Layout','bariplan'),
                        'hmenu_full' => esc_html__('Full Layout','bariplan'),
                    ),
                    'default'   => 'htops_box'
                ),				
                array(
                    'id'        => 'bariplan_main_menu_layout',
					'desc'      => esc_html__('This option work only, when you select  - 1 and 1-1  style menu', 'bariplan'),					
                    'type'      => 'select',
                    'title'     => esc_html__('Logo Position', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'm_menu_1' => esc_html__('Logo Left Style','bariplan'),
                        'm_menu_2' => esc_html__('Logo Right Style','bariplan'),
                        'm_menu_3' => esc_html__('Logo Top Style','bariplan'),
                    ),
                    'default'   => 'm_menu_1'
                ),
				
                array(
                    'id'        => 'twr_defaulth_menu_layout',
					'desc'      => esc_html__('If you select menu from here. It will be showing everywhere and if you want to show different menu different page or post, that time, please don\'t select menu style from here. For this go to your page or post below, there you can see a menu option. Please select menu style from there and when you set the 3,4,6,1-1,8,9,10,12,13,14,20,21,22,24 menu that time please set On the top menu.', 'bariplan'),						
                    'type'      => 'select',
                    'title'     => esc_html__('Select Default Menu For All Page', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
						'111' => esc_html__( 'Select Menu Style From Here', 'bariplan' ),				
						'1' => esc_html__( '1 Header Default Menu', 'bariplan' ),													
						'2' => esc_html__( '2 Header Transparent Menu', 'bariplan' ),
						'3' => esc_html__( '3 Header Transparent With Sticky Menu', 'bariplan' ),		
						'4' => esc_html__( '4 Header One Page Menu', 'bariplan' ),
						'5' => esc_html__( '5 Header One Page Transparent Menu', 'bariplan' ),				
						'6' => esc_html__( '6 Header One Page Transparent With Sticky  Menu', 'bariplan' ),
						'7' => esc_html__( '1-1 Header Default with Sticky Menu', 'bariplan' ),							
						'8' => esc_html__( '8 Header Menu With Search', 'bariplan' ),
						'9' => esc_html__( '9 Header Menu With Social Icon and Button', 'bariplan' ),
						'10' => esc_html__( '10 Header Menu With Button', 'bariplan' ),
						'11' => esc_html__( '11 Header Menu With Button headroom Menu', 'bariplan' ),
						'12' => esc_html__( '12 Header Menu With Search and no Logo', 'bariplan' ),
						'13' => esc_html__( '13 Header Transparent Sticky No logo Menu', 'bariplan' ),					
						'14' => esc_html__( '14 Header One Page With Search Menu', 'bariplan' ),
						'15' => esc_html__( '15 Header Mini Shop Menu', 'bariplan' ),										
						'16' => esc_html__( '16 Header Hamburgers Menu', 'bariplan' ),										
						'17' => esc_html__( '17 Header Box Style Menu', 'bariplan' ),
						'18' => esc_html__( '18 No Logo,Search, Mini Shop Button', 'bariplan' ),
						'19' => esc_html__( '19 Left Logo,Right Search, Mini Shop Button', 'bariplan' ),
						'20' => esc_html__( '20 Left Logo,Right Search,Popup Menu,Button', 'bariplan' ),
						'21' => esc_html__( '21 No Logo,Right Search,Popup Menu,Button', 'bariplan' ),
						'22' => esc_html__( '22 left Logo,Center Menu,Search And Right Address', 'bariplan' ),
						'23' => esc_html__( '23 Header Popup Menu', 'bariplan' ),			
						'24' => esc_html__( '24 No Logo,One Page Menu,Button', 'bariplan' ),			
						'25' => esc_html__( '25 Header Menu Hide', 'bariplan' ),							
                    ),
                    'default'   => '111'
                ),	
                array(
                    'id'       => 'bariplan_header_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'bariplan'),
                    'desc' => esc_html__('Insert text here, Not use the button, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('Buy Now', 'bariplan'),					
                ),
                array(
                    'id'       => 'bariplan_header_button_url',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'bariplan'),
                    'desc' => esc_html__('Insert url ex: - https://your_site.com/  and  Not use the link, remove the link from field', 'bariplan'),
					'default'	=>'#',					
                ),
				array(
                    'id'       => 'main_menu_icon',
                    'type'     => 'text',
                    'title'    => esc_html__('Set Icon', 'bariplan'),
                    'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-ui-call"></i> go https://icofont.com/icons . Not use the field, remove the text from field and and This option work only, when you select - 22 style menu', 'bariplan'),
					'default'	=> esc_html__('<i class="icofont-ui-call"></i>', 'bariplan'),
                ),					
                array(
                    'id'       => 'main_menu_top_title',
                    'type'     => 'text',
                    'title'    => esc_html__('Title', 'bariplan'),
                    'desc' => esc_html__('insert title here and This option work only, when you select  - 22 style menu', 'bariplan'),
					'default'	=> esc_html__('Phone', 'bariplan'),					
                ),					
                array(
                    'id'       => 'main_menu_number',
                    'type'     => 'text',
                    'title'    => esc_html__('Sub Title', 'bariplan'),
                    'desc' => esc_html__('insert sub title here and This option work only, when you select  - 22 style menu', 'bariplan'),
					'default'	=> esc_html__('+998556778345', 'bariplan'),					
                ),				
					
			
				array(
					'id'          => 'bariplan_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Main Menu Color & Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.bariplan_menu > ul > li > a,
						.heading_style_2 .bariplan_menu > ul > li > a,
						.heading_style_3 .bariplan_menu > ul > li > a,
						.heading_style_4 .bariplan_menu > ul > li > a,
						.witr_search_wh .em-header-quearys .em-quearys-menu i,
						.right_sideber_menu i ,
						.main_menu_header_icon i,
						.main_menu_header_address_text h3,
						.main_menu_header_address_text h4 a,
						.heading_style_5 .bariplan_menu > ul > li > a,
						.mini_shop_content a i
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
                array(								
                    'id'        => 'bariplan_menu_texts_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Hover Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.bariplan_menu > ul > li:hover > a,.bariplan_menu > ul > li.current > a,.right_sideber_menu i:hover,.witr_search_wh .em-header-quearys .em-quearys-menu i:hover,.main_menu_header_address_text h4 a:hover,.bariplan_menu ul .sub-menu li:hover > a,.bariplan_menu ul .sub-menu .sub-menu li:hover > a,.bariplan_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,.bariplan_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,.bariplan_menu ul .sub-menu li:hover:before',
					
					'background-color' => '.bariplan_menu > ul > li > a::before,.bariplan_menu > ul > li.current:hover > a::before,.bariplan_menu > ul > li.current > a:before'
					)
                ),																
                array(								
                    'id'        => 'bariplan_menu_sticky_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.bariplan_nav_area.prefix .bariplan_menu > ul > li > a,.hmenu_box_style.hbg2 .bariplan_menu > ul > li > a,.hbg2 .bariplan_menu > ul > li > a,.bariplan_nav_area.prefix .right_sideber_menu i,.witr_search_wh .prefix  .em-header-quearys .em-quearys-menu i,.bariplan_nav_area.prefix .bariplan_menu > ul > li.current > a
					',
					'background-color' => '
					.bariplan_nav_area.prefix .bariplan_menu > ul > li > a::before,
					.hbg2 .bariplan_menu > ul > li > a::before
					
					'
					)
                ),					
                array(								
                    'id'        => 'bariplan_menu_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Current Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.bariplan_nav_area.prefix .bariplan_menu > ul > li.current > a,
					.hbg2 .bariplan_menu > ul > li.current > a
					',
					'background-color' => '
						.bariplan_nav_area.prefix .bariplan_menu > ul > li.current > a::before					
					'
					)
                ),
                array(								
                    'id'        => 'bariplan_menu_bg_sticky_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Main Menu Sticky BG Color', 'bariplan'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => .7
					),
					'output'    => array(
					'background-color' => '
					.bariplan_nav_area.prefix,
					.hbg2
					'
					)
                ),				
				array(
					'id'          => 'bariplan_sub_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Menu Color & Typography', 'bariplan'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.bariplan_menu ul .sub-menu li a,.bariplan_menu ul .sub-menu li:before
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
				
                array(								
                    'id'        => 'bariplan_submenu_hover_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Menu Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.bariplan_menu ul .sub-menu li:hover > a,
						.bariplan_menu ul .sub-menu .sub-menu li:hover > a,
						.bariplan_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.bariplan_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a,	
						.bariplan_menu ul .sub-menu li:hover:before	
						
						'
					)
                ),
                array(								
                    'id'        => 'bariplan_submenu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Sub Menu BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.bariplan_menu ul .sub-menu
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),				
               array(								
                    'id'        => 'bariplan_Button_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
					)
                ),
                array(								
                    'id'        => 'bariplan_Button_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.mini_shop_content a span.count',
					'border-color' => '.em-quearys-form'
					)
                ),
				array(
					'id'       => 'button_bg_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('Menu Button Gradient BG Color', 'bariplan'),
					'desc'     => esc_html__('Set Gradient From here.', 'bariplan'),
					'validate' => 'color',			
					'default'  => array(
					'from' => '',
					'to'   => '',
					)
				),		
              array(								
                    'id'        => 'bariplan_Buttonht_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Hover Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
                array(								
                    'id'        => 'bariplan_Buttonhtb_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button Hover BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
				array(
					'id'       => 'button_bgh_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('Menu Button Hover Gradient BG Color', 'bariplan'),
					'desc'     => esc_html__('Set Gradient From here.', 'bariplan'),
					'validate' => 'color',			
					'default'  => array(
					'from' => '',
					'to'   => '',
					)
				),				
                array(								
                    'id'        => 'bariplan_menu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Main Menu Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.bariplan_nav_area,.transprent-menu .bariplan_nav_area,.hmenu_box_style,.mini_shop_content a i
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),				
				 array( 
					'id'       => 'main_header_border',
					'type'     => 'border',
					'title'    => __('Section Border Option', 'bariplan'),
					'subtitle' => __('Only color validation can be done on this field type', 'bariplan'),
					'output'   => array('.bariplan_nav_area'),
					'desc'     => __('This is the description field, again good for additional info.', 'bariplan'),
					'default'  => array(
						'border-color'  => '', 
						'border-style'  => 'solid', 
						'border-top'    => '', 
						'border-right'  => '', 
						'border-bottom' => '', 
						'border-left'   => ''
					)
				),				
				array(
					'id'             => 'menu_spacing',
					'type'           => 'spacing',
					'output'         => array('.bariplan_nav_area,.trp_nav_area,.transprent-menu .bariplan_nav_area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
					
            ),
    ) );

/*========================
END bariplan HEADER FIELD
=========================*/


/*========================
bariplan BREADCRUMB FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Breadcrumb Area', 'bariplan'),
        'id'         => 'bariplan_bread_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
    array(
     'id'   => 'info_normal',
     'type' => 'info',
     'desc' => esc_html__('Notice:- If you want to more breadcrumb control. Please see every page bottom area. We Added More Field Here','bariplan')
    ),
	array(
		'id'        => 'bariplan_breadcr_style',
		'type'      => 'select',
		'title'     => esc_html__('Select Breadcrumb Style', 'bariplan'),
		'customizer_only'   => false,
		'options'   => array(
			'0' => esc_html__('Select style ','bariplan'),
			'1' => esc_html__('Style 1 ','bariplan'),
			'2' => esc_html__('Style 2 ','bariplan'),
			'3' => esc_html__('Breadcrumb None ','bariplan'),
		),
		'default'   =>'1'
	),
	array(
		'id'        => 'bpage_text_align',
		'type'      => 'select',
		'title'     => esc_html__('Breadcrumb Text Align Style', 'bariplan'),
		'desc'       => esc_html__( 'this option work only, when select Breadcrumb Style 1', 'bariplan' ),		
		'customizer_only'   => false,
		'options'   => array(
			'text-left' => esc_html__( 'Align Left', 'bariplan' ),
			'text-center'   => esc_html__( 'Align Middle', 'bariplan' ),
			'text-right'     => esc_html__( 'Alige Right', 'bariplan' ),
		),
		'default'   =>'text-center'
	),		
	array(
		'id'        => 'bpage_text_transform',
		'type'      => 'select',
		'title'     => esc_html__('Breadcrumb Text Transform Style', 'bariplan'),
		'customizer_only'   => false,
		'options'   => array(
			'lcase' => esc_html__( 'Transform lowercase', 'bariplan' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'bariplan' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'bariplan' ),
		),
		'default'   =>'ccase'
	),		
	
	array(
		'id'        => 'bariplan_breadcrumb_bg',
		'type'      => 'background',
		'output'    => array('.breadcumb-area,.breadcumb-blog-area'),
		'title'     => esc_html__('Breadcrumb Background', 'bariplan'),
		'subtitle'  => esc_html__('Breadcrumb background with image, color.', 'bariplan'),
		'default'  => array(
			'background-color' => '',
		)
	),
	array(								
		'id'        => 'bariplan_brdov_text_color',
		'type'      => 'color_rgba',
		'title'     => esc_html__('Breadcumb Overlay', 'bariplan'),
		'default'   => array(
			'color'     => '',
			'alpha'     => 1
		),
    'options'       => array(
        'show_input'                => true,
        'show_initial'              => true,
        'show_alpha'                => true,
        'show_palette'              => true,
        'show_palette_only'         => false,
        'show_selection_palette'    => true,
        'max_palette_size'          => 10,
        'allow_empty'               => true,
        'clickout_fires_change'     => false,
        'choose_text'               => 'Choose',
        'cancel_text'               => 'Cancel',
        'show_buttons'              => true,
        'use_extended_classes'      => true,
        'palette'                   => null, 
        'input_text'                => 'Select Color'
    ), 		
		'output'    => array(
		'background-color' => '
		.breadcumb-area::before,
		.breadcumb-blog-area::before
		'
		)
	),
	array(
			'id'       => 'bariplan_breadcumb_overlay_gr',
			'type'     => 'color_gradient',
			'title'    => esc_html__('Breadcumb Overlay Gradient BG Color', 'bariplan'),
			'desc'     => esc_html__('Set Gradient From here.', 'bariplan'),
			'validate' => 'color',			
			'default'  => array(
			'from' => '',
			'to'   => '',
			)
		),	
	array(
			'id'        => 'bariplan_bread_titleh',			
			'type'      => 'switch',
			'title'     => esc_html__('Title ON/OFF Option', 'bariplan'),
			'default'   => false,
	),
    array(
     'id'          => 'bariplan_bread_title_page_color',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Title Style', 'bariplan'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .brpt h2,.breadcumb-inner h2,.brpt.brptsize h2    
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),

	 array(
			'id'        => 'bariplan_bread_menuhide',			
			'type'      => 'switch',
			'title'     => esc_html__('Breadcrumb Menu Hide Option', 'bariplan'),
			'desc'           => esc_html__('When Set ON, That time menu Will Hide and When Set False, That time menu Will Show', 'bariplan'),
			'default'   => false,
	),
	array(
		'id'       => 'bariplan_current_position',
		'type'     => 'text',
		'title'    => esc_html__('Change Text Currently Here', 'bariplan'),
		'desc' => esc_html__('Change your You Are Currently Here text . Not use the field, remove the text from field. It will Show Default', 'bariplan'),
		'default'	=> esc_html__('You Are Currently Here!', 'bariplan'),
	),
	array(
		'id'       => 'bariplan_breadhome_textc',
		'type'     => 'text',
		'title'    => esc_html__('Chnage text Home', 'bariplan'),
		'desc' => esc_html__('Change your Home Here text . Not use the field, remove the text from field. It will Show Default', 'bariplan'),
		'default'	=> esc_html__('Home', 'bariplan'),
	),
	array(
		'id'       => 'bariplan_breadbar_textc',
		'type'     => 'text',
		'title'    => esc_html__('Change Icon or bar', 'bariplan'),
		'desc' => esc_html__('insert icofont icon here. ex - <i class="icofont-thin-right"></i> go https://icofont.com/icons . Not use the field, remove the text from field.. It will Show Default', 'bariplan'),
		'default'	=> esc_html__('-', 'bariplan'),
	),		
    array(
     'id'          => 'bariplan_breadcrumb_typography',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Text And Font style', 'bariplan'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .breadcumb-inner ul,     
      .breadcumb-inner ul span a,     
      .breadcumb-inner li,
      .breadcumb-inner li a,.witr_breadcumb_shop ul li span a     
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),
	array(        
		'id'        => 'bariplan_bread_current_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Current Text Color', 'bariplan'),
		'default'  => '',
		'output'    => array(
			'color' => '.breadcumb-inner ul span.current,.witr_breadcumb_shop ul li span'
		)
	), 
    array(
     'id'             => 'spacing',
     'type'           => 'spacing',
     'output'         => array('.breadcumb-area,.breadcumb-area.breadcumb_st2,.breadcumb-blog-area'),
     'mode'           => 'padding',
     'units'          => array('em', 'px'),
     'units_extended' => 'false',
     'title'          => esc_html__('Padding Option', 'bariplan'),
     'subtitle'       => esc_html__('Allow your users to choose the spacing or margin they want.', 'bariplan'),
     'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
     'default'            => array(
      'padding-top'     => '', 
      'padding-right'   => '', 
      'padding-bottom'  => '', 
      'padding-left'    => '',
      'units'          => 'px', 
     )
    ),  
	
        
            ),
    ) );
	
if( class_exists( 'WooCommerce' ) ) {

    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Shop Breadcumb', 'bariplan'),
        'id'         => 'bariplan_bredshop_page',  
        'icon'       => 'el-icon-picture',
		'subsection' => true,
        'fields'    => array(
			array(
			 'id'   => 'info_normshop',
			 'type' => 'info',
			 'desc' => esc_html__('Notice:- All breadcrumb Field working in shop area. if you want to change shop breadcrumb bg image, Please change here','bariplan')
			),		
			array(
				'id'        => 'bariplan_shopbread_bg',
				'type'      => 'background',
				'output'    => array('.breadcumb-area.breadcumb_st2.msope_bgarea,.breadcumb-area.msope_bgarea'),
				'title'     => esc_html__('Shop Background Image', 'bariplan'),
				'default'  => array(
					'background-color' => '',
				)
			),					
				
		),		
    ) );	
}		
	
/*========================
END bariplan BREADCRUMB FIELD
=========================*/


/*========================
bariplan BLOG FIELD
=========================*/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Area', 'bariplan' ),
        'id'          => 'bariplan_blog_section_area',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
				array(
                    'id'       => 'bariplan_blog_btn_text',
                    'type'     => 'text',
                    'title'    => esc_html__('Blog Button', 'bariplan'),
                    'desc' => esc_html__('insert button text here. Not use the Button, remove the text from field', 'bariplan'),
					'default'	=> esc_html__('Details', 'bariplan'),
                ),			
                array(
                    'id'        => 'bariplan_blog_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.bariplan-single-blog'),
                    'title'     => esc_html__('Blog Item BG Color', 'bariplan'),
                    'subtitle'  => esc_html__('BG color', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),

                array(								
                    'id'        => 'bariplan_blog_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6,					
						.single-blog-content h1, .single-blog-content h2, .single-blog-content h3, .single-blog-content h4, .single-blog-content h5, .single-blog-content h6,
						.blog-content h2 a,.blog-left-side .widget h2,.blog-page-title a,.bariplan-single-blog-title h2					
					')
                ),	
                array(								
                    'id'        => 'bariplan_blog_title_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.blog-content h2 a:hover,
					.blog-page-title h2 a:hover
					')
                ),
                array(								
                    'id'        => 'bariplan_blog_textc',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					 .blog-content p,
					 .single-blog-content p,
					 .single-blog-content ul
					')
                ),				
                array(								
                    'id'        => 'bariplan_blog_postcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Post Meta Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.bariplan-blog-meta-left a, .bariplan-blog-meta-left span
					')
                ),
                array(								
                    'id'        => 'bariplan_blog_metaiconcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Meta Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.bariplan-blog-meta-left i
					')
                ),
				array(								
                    'id'        => 'bariplan_blog_bctext',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Button Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.readmore a
					')
                ),
				array(								
                    'id'        => 'bariplan_blog_bhctext',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Button Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.readmore a:hover
					')
                ),				
                array(
                    'id'        => 'bariplan_blog_btnbgcolor',
                    'type'      => 'background',
                    'output'    => array('.readmore a'),
                    'title'     => esc_html__('Button BG Color', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),				
				array(
					'id'       => 'bariplan_blog_bbbtnbgcolor',
					'type'     => 'border',
                    'output'    => array('.readmore a:hover,.blog-left-side h2.widget-title::before'),
                    'title'     => esc_html__('Button Border Color', 'bariplan'),
					'default'  =>'',
                ),
                array(
                    'id'        => 'bariplan_blog_bhbtnbgcolor',
                    'type'      => 'background',
                    'output'    => array('.readmore a:hover'),
                    'title'     => esc_html__('Button Hover BG Color', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),	
				array(
					'id'       => 'bariplan_blog_bbhbtnbgcolor',
					'type'     => 'border',
                    'output'    => array('.readmore a:hover'),
                    'title'     => esc_html__('Button Hover Border Color', 'bariplan'),
					'default'  =>'',
                ),	


				array(								
                    'id'        => 'bariplan_blog_social_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.bariplan-single-icon-inner a:hover,.bariplan_btn:hover',
					'border-color' => '.bariplan-single-icon-inner a:hover,.bariplan_btn:hover',
					)
                ),
				
				array(								
                    'id'        => 'bariplan_blog_pagina_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.paginations a',
					'border-color' => '.paginations a',
					)
                ),				
				
				array(								
                    'id'        => 'bariplan_blog_pagina_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					'border-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					)
                ),
				array(
                    'id'        => 'bariplan_blog_post_meta',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Post Meta Hide/Show', 'bariplan'),
                    'default'   => false,
                ),					
				array(
                    'id'        => 'bariplan_blog_socialsharesh_hide',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Single Social share Show/Hide', 'bariplan'),
                    'default'   => true,
                ),												
            )
    ) );

    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Blog Sidebar', 'bariplan'),
        'id'         => 'bariplan_blogsidebar_page',  
        'icon'       => 'el-icon-picture',
		'subsection' => true,
        'fields'    => array(
				
                array(
                    'id'        => 'bariplan_blog_widget_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.blog-left-side.widget > div'),
                    'title'     => esc_html__('Blog Sidebar BG Color', 'bariplan'),
                    'subtitle'  => esc_html__('BG color', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
				 array(	
                    'id'        => 'bariplan_sidebar_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.blog-left-side .widget h2'
					)
                ),
                array(								
                    'id'        => 'bariplan_sidebar_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li,
							.blog-left-side .widget ul li a,
							.blog-left-side .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text,
							.blog-left-side .widget a,
							.blog-left-side .widget p,
							.blog-left-side .widget .tagcloud a,
							.widget.widget_categories select
						')
                ),	
                array(								
                    'id'        => 'bariplan_sidebar_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li a:hover,
							.blog-left-side .widget ul li:hover::before,
							.blog-left-side .widget a:hover,
							.blog-left-side .widget .tagcloud a:hover
						')
                ),
                array(								
                    'id'        => 'bariplan_blog_link',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Link Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget a,
							.single-blog-content a,
							.blog-content a						
						')
                ),
                array(								
                    'id'        => 'bariplan_blog_link_hover',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Link Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget a:hover,
							.single-blog-content a:hover,
							.blog-content a:hover
						')
                ),					
                array(								
                    'id'        => 'bariplan_blog_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon & Title bar Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.bariplan-single-icon-inner a,.reply_date span.span_right,.bariplan_btn',
					'border-color' => '.bariplan-single-icon-inner a,.bariplan_btn',
					'background' => '.blog-left-side .widget h2::before,.commment_title h3::before,table#wp-calendar td#today,.footer-middle .widget h2::before',
					)
                ),				
				
		),		
    ) );	
		
/*========================
END bariplan BLOG FIELD
=========================*/
	 
/*========================
bariplan 404 FIELD
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('404 Area', 'bariplan'),
        'id'         => 'bariplan_error_page',  
        'desc'       => esc_html__('Use this section to upload background images, select background color', 'bariplan'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
                array(
                    'id'        => 'bariplan_background_404',
                    'type'      => 'background',
                    'output'    => array('.not-found-area'),
                    'title'     => esc_html__('404 Page Background Color', 'bariplan'),
                    'subtitle'  => esc_html__('404 background with image, color.', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'bariplan_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner h2,.not-found-inner'
					)
                ),	
                array(								
                    'id'        => 'bariplan_sub_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner p,.not-found-inner strong'
					)
                ),
                array(								
                    'id'        => 'bariplan_not_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Return Link Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner a'
					)
                ),					
                array(
                    'id'        => '404_info',
                    'type'      => 'editor',
                    'title'     => esc_html__('404 Information', 'bariplan'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'bariplan'),
                    'default'   => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'bariplan'),
					'desc'      => esc_html__('Please use title this way. example- <h2>404</h2> and text <p>your text</p>', 'bariplan'),
                ), 
				array(
					'id'             => 'bariplan_notfound_spacing',
					'type'           => 'spacing',
					'output'         => array('.not-found-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),

				
            ),
    ) );


/*========================
END bariplan NOT FOUND FIELD
=========================*/	 
/*========================
bariplan Shop FIELD
=========================*/
if( class_exists( 'WooCommerce' ) ) {

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Shop Area', 'bariplan'),
        'id'         => 'bariplan_woocom_page',  
        'desc'       => esc_html__('Set your shop style option here', 'bariplan'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
			   /* Title And Price box color area */
                array(								
                    'id'        => 'bariplan_woocommerce_count',
                    'type'      => 'color',
                    'title'     => esc_html__('Showing Count Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .woocommerce-result-count, .nice-select span.current,.nice-select .option'
					)
                ),				   
			   
               array(
                    'id'        => 'bariplan_background_woocommerce',
                    'type'      => 'background',
                    'output'    => array('.tbd_product_content'),
                    'title'     => esc_html__('Background Color', 'bariplan'),
                    'subtitle'  => esc_html__('background, color.', 'bariplan'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'bariplan_woocommerce_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product_title h2,.woocommerce div.product .product_title,.tbd_product_title h3,.woocommerce .twr_product_sidebar ul.product_list_widget li a'
					)
                ),
                array(								
                    'id'        => 'bariplan_woocommerce_htitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product_title h2:hover,.woocommerce div.product .product_title:hover,.tbd_product_title h3:hover,..woocommerce .twr_product_sidebar ul.product_list_widget li a:hover'
					)
                ),				
                array(								
                    'id'        => 'bariplan_price_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins,.woocommerce div.product .stock,.woocommerce .twr_product_sidebar span.woocommerce-Price-amount.amount'
					)
                ),
				array(								
                    'id'        => 'bariplan_price_star_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Rating Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .products .star-rating, .woocommerce .star-rating'
					)
                ),					 
                array(								
                    'id'        => 'bariplan_product_iconc',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product .thb_product_car a'
					)
                ),
				array(								
                    'id'        => 'bariplan_product_iconch',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before'
					)
                ),
                array(								
                    'id'        => 'bariplan_product_iconc_bg',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.tbd_product .thb_product_car a',					
					'border-color' => '.tbd_product .thb_product_car a'
					
					)
                ),
				array(								
                    'id'        => 'bariplan_product_iconc_hbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Product Icon BG Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button',					
					'border-color' => '.tbd_product .thb_product_car a:hover,.thb_product_car a.added_to_cart:hover:before,.twr_product_sidebar .tagcloud a:hover,.widget_product_search button,'
					
					)
                ),				
				
				
				
                array(								
                    'id'        => 'bariplan_Button_color_wooco',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled], .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.bariplan_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active,
					ul.tx_product_tab.nav li a'
					)
                ),
              array(								
                    'id'        => 'bariplan_Buttonht_woocommerce',
                    'type'      => 'color',
                    'title'     => esc_html__('Button Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover,.woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.bariplan_btn:hover,.paginations a:hover, .paginations a.current, .page-numbers span.current'
					)
                ),				
                array(								
                    'id'        => 'bariplan_Button_bgw',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],  .woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward,  .woocommerce input.button,.woocommerce div.product form.cart .button,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',
					
					'border-left-color' => 'nav.woocommerce-MyAccount-navigation ul li.is-active:after',
					'border-color' => '.woocommerce .witr_product_cart button.button:disabled, .woocommerce .witr_product_cart button.button:disabled[disabled],.woocommerce .witr_cart_to_cross a.checkout-button.alt, .woocommerce .witr_checkout_form button.button.alt, .woocommerce a.button.wc-backward, .woocommerce input.button,.woocommerce div.product form.cart .button,.bariplan_btn,.witr_cart_to_cross .cart_totals > h2,.witr_checkout_form .witr_ck_blling h3, .witr_checkout_form h3#order_review_heading, h2.woocommerce-order-details__title,.woocommerce-column__title,nav.woocommerce-MyAccount-navigation ul li.is-active',
					
					)
                ),

                array(								
                    'id'        => 'bariplan_Buttonhtb_bgwh',
                    'type'      => 'color',
                    'title'     => esc_html__('Button BG Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					
					'background-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.bariplan_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover,.paginations a.current, .page-numbers span.current',
					
					'border-color' => '.woocommerce .witr_cart_to_cross a.checkout-button.alt:hover, .woocommerce a.button.wc-backward:hover, .woocommerce .witr_checkout_form button.button.alt:hover, .woocommerce input.button:hover,.woocommerce div.product form.cart .button,.bariplan_btn:hover,ul.tx_product_tab.nav li a.active,.paginations a:hover, .paginations a.current, .page-numbers span.current'
					
					)
                ),	
	
                array(								
                    'id'        => 'bariplan_Button_color_sale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner '
					)
                ),			
                array(								
                    'id'        => 'bariplan_Button_bgsale',
                    'type'      => 'color',
                    'title'     => esc_html__('Sale Button BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' =>'.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner',
					'border-color' => '.woocommerce span.tbd_sale_inner,.woocommerce span.onsale.onsingle_sale.tbd_sale_inner'
					)
                ),
                array(								
                    'id'        => 'bariplan_swoocommerce_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.twr_product_sidebar h2.widget-title'
					)
                ),
                array(								
                    'id'        => 'bariplan_swoocommerce_bgtitle',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.twr_product_sidebar h2.widget-title'
					)
                ),
				array(								
                    'id'        => 'bariplan_swoocommerce_textc',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .twr_product_sidebar li a,.woocommerce .twr_product_sidebar li span.count,.twr_product_sidebar p,.twr_product_sidebar .tagcloud a'
					)
                ),								
				array(								
                    'id'        => 'bariplan_swoocommerce_barc',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Filter Bar color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.woocommerce .widget_price_filter .price_slider_amount .button,.content-widget .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .price_slider_amount .button'
					)
                ),
				array(								
                    'id'        => 'bariplan_swoocommerce_rangc',
                    'type'      => 'color',
                    'title'     => esc_html__('Price Filter Rang Circle color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.content-widget .widget_price_filter .ui-slider .ui-slider-handle, .content-widget .widget_price_filter .ui-slider .ui-slider-handle'
					)
                ),
				array(								
                    'id'        => 'bariplan_swoocommerce_fpricec',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Filter Price color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.woocommerce .twr_product_sidebar .price_label'
					)
                ),				
				array(								
                    'id'        => 'bariplan_swoocommerce_bgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.twr_product_sidebar > div'
					)
                ),					
				array(
					'id'             => 'w_sectionshop_spacing',
					'type'           => 'spacing',
					'output'         => array('.sec_padding'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Shop Area Padding Option', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				
				
					
				
				
            ),		
    ) );


	
}	
/*========================
END bariplan Shop FIELD
=========================*/	
/*========================
bariplan social FIELD
=========================*/	
    //footer social section
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Social Icon Section', 'bariplan' ),
        'id'         => 'bariplan_social_icons_sec',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
	
                array(
                    'id'       => 'bariplan_social_icons',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Insert Social Icons', 'bariplan'),
                    'subtitle' => esc_html__('Enter social links', 'bariplan'),
                    'desc'     => esc_html__('Drag/drop to re-arrange', 'bariplan'),
                    'mode'     => 'text',
					'label'    => true,
                    'options'  => array(        
                        'facebook'     => '',
                        'twitter'      => '',
                        'instagram'    => '',
                        'tumblr'       => '',
                        'pinterest'    => '',
                        'google-plus'  => '',
                        'linkedin'     => '',
                        'behance'      => '',
                        'dribbble'     => '',
                        'youtube'      => '',
                        'vimeo'        => '',
                        'apple'          => '',
                   
                    ),
					'default' => array(
						'facebook'     => esc_url('#'),
						'twitter'     => esc_url('#'),
						'instagram'	=> esc_url('#'),
						'tumblr'     => '',
						'pinterest'     => '',
						'google-plus'   => '',
						'linkedin'     => '',
						'behance'     => '',
						'dribbble'     => '',
						'youtube'     => '',
						'vimeo'     => '',
						'apple'     => '',
					
					),
                ),			
                array(								
                    'id'        => 'bariplan_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i',
					)
                ),
                array(								
                    'id'        => 'bariplan_social_icon_bgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a',
					'background-color' => '.footer-social-icon a i,.footer-social-icon.htop-menu-s a i,.em_slider_social a,.top_crmenu_i_list li a i',
					)
                ),
                array(								
                    'id'        => 'bariplan_social_icon_thbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover',
					)
                ),					
                array(								
                    'id'        => 'bariplan_social_icon_hbgcolor',
                    'type'      => 'color',
                    'title'     => esc_html__('Social Icon hover BG Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover',
					'background-color' => '.footer-social-icon a i:hover,.footer-social-icon.htop-menu-s a i:hover,.em_slider_social a:hover,.em_slider_social a:hover,.top_crmenu_i_list li a i:hover',
					)
                ),					
                /*array(								
                    'id'        => 'bariplan_social_bg2_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Social Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	*/										
				
            )
    ) );

 
/*========================
bariplan FOOTER FIELD
=========================*/	 
	
      //Footer area
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Area', 'bariplan'),
        'id'        => 'footer_area_id',
        'desc'      => esc_html__('Insert style for top address area', 'bariplan'),
        'icon'      => 'el-icon-cog',
        'fields'    => array(      
				 array(
                    'id'       => 'witr_show_hide_shortcode',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer subscribe Section Show/Hide', 'bariplan'),
                    'default'  => false,
                ),
				array(
                    'id'       => 'bariplan_address_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Address Section Show/Hide', 'bariplan'),
                    'default'  => false,
                ),
				
				array(
                    'id'       => 'bariplan_social_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Footer Logo Section Show/Hide', 'bariplan'),
                    'default'  => false,
                ),
                 array(
                    'id'       => 'bariplan_widget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Widget Section Hide/show', 'bariplan'),
                    'default'  => false,
                ),				
				array(
                    'id'       => 'bariplan_copyright_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Copyright Section Show/Hide', 'bariplan'),	
                    'default'  => false,
                ),
				array(
                    'id'       => 'bariplan_dfaultwidget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Defult Widget Hide', 'bariplan'),
					'desc'      => esc_html__('Not set on, it show default widget', 'bariplan'),	
                    'default'  => false,
                ),
				
                array(
                    'id'        => 'bariplan_footer_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Footer layout', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'footer_box' => esc_html__('Box Layout','bariplan'),
                        'footer_full' => esc_html__('Full Layout','bariplan'),
                    ),
                    'default'   => 'footer_box'
                ),							
								
            )
    ) );
	

/*========================
bariplan footer Section subscribe
=========================*/	 

    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Footer subscribe Section', 'bariplan'),
        'id'         => 'bariplan_shortcode',  
        'desc'       => esc_html__('This section for Title, Content, Shortcode And color Option', 'bariplan'),
        'icon'       => 'el-icon-picture',
		'subsection' => true,
        'fields'    => array(	
				array(
					'title'     => esc_html__( 'Title Text', 'bariplan' ),
					'subtitle'  => esc_html__('HTML tags allowed: br,span', 'bariplan'),
					'id'        => 'witr_title_shortcode',
					'default'   => 'Add your title here',
					'type'      => 'text',
					'desc'       => esc_html__('Please use this way Example ex-<span>Add your text here</span>, <a href="#">text</a>, </br>', 'bariplan'),
				),
                array(
                    'id'        => 'witr_content_shortcode',
                    'type'      => 'textarea',
                    'title'     => esc_html__('Content Text', 'bariplan'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong,span,b', 'bariplan'),
                    'default'   => esc_html__('Lorem ipsum dolor sit met conjectural ', 'bariplan'),
					'desc'       => esc_html__('Please use this way Example ex-<span>text</span>, <a href="#">text</a>, <strong>text</strong>, <em>text</em>, <b>text</b>, </br>', 'bariplan'),
                ),

				/* Shortcode */
				array(
					'title'     => esc_html__( 'Shortcode option', 'bariplan' ),
					'subtitle'  => esc_html__( 'Add your shortcode here.', 'bariplan' ),
					'id'        => 'witr_footre_shortcode',
					'type'      => 'text',
					'desc'       => esc_html__('Please use shortcode this way Example ex-[mc4wp_form id="831"]', 'bariplan'),
				),

				
				array(
				 'id'          => 'bariplan_shortcode_color',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Title Typography', 'bariplan'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content h2'      
				 ),					 
				),				
                array(								
                    'id'        => 'bariplan_shortcode_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.shortcode_content h2:hover'
					)
                ),				
				
				array(
				 'id'          => 'bariplan_short_typo_content',
				 'type'        => 'typography', 
				 'title'       => esc_html__('Content Typography', 'bariplan'),
				 'google'      => true, 
				 'font-backup' => true,
				 'line-height'   => false,
				 'text-align'   => false,
				 'units'       =>'px',
				 'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'bariplan'),
				 'default'     => array(
					  'color'       => '', 
					  'font-style'  => '', 
					  'font-family' => '', 
					  'google'      => true,
					  'font-size'   => '', 
					 ),
				 'output'      => array('
				  .shortcode_content p'      
				 ),					 
				),

				array(
					'id'             => 'bariplan_shortcode_form_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_form'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' shortcode Form Margin', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),
                array(								
                    'id'        => 'bariplan_shortcode_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__(' Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
					.witr_shortcode_inner'
					),
					'default'  => array(
						'background-color' => '',
					)					
                ),										
				array(
					'id'             => 'bariplan_shortcode_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				array(
					'id'             => 'bariplan_shortcode_section_margin',
					'type'           => 'spacing',
					'output'         => array('.witr_shortcode_inner'),
					'mode'           => 'margin',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__(' Box Margin Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing margin they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'margin-top'     => '', 
						'margin-right'   => '', 
						'margin-bottom'  => '', 
						'margin-left'    => '',
						'units'          => 'px', 
					)
				),				


				
            ),
    ) );

	

	 /* footer Address Section */
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Address Section', 'bariplan' ),
        'id'          => 'bariplan_address_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
		
                array(
                    'id'        => 'bariplan_address_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','bariplan'),
                        's_logo_s2' => esc_html__('Show Image Logo','bariplan'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'bariplan_address_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Address Title Text Logo', 'bariplan'),
                    'default'   => esc_html__('bariplan', 'bariplan'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'bariplan'),					
                ),
                array(
                    'id'        => 'bariplan_address_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Address Image Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'bariplan'),
                ),			
                array(
                    'id'       => 'bariplan_address_road',
                    'type'     => 'text',
                    'title'    => esc_html__('Address Area Name', 'bariplan'),
                    'desc' => esc_html__('insert area name ex:- house, road-4.', 'bariplan'),
					'default'	=> esc_html__('1st Floor New World Tower Rang.', 'bariplan'),
                ),		
                array(
                    'id'       => 'bariplan_address_email',
                    'type'     => 'text',
                    'title'    => esc_html__('Email Number', 'bariplan'),
                    'desc' => esc_html__('Insert email number', 'bariplan'),
					'default'	=> esc_html__('demo@example.com', 'bariplan'),					
                ),		
                array(
                    'id'       => 'bariplan_address_mobile',
                    'type'     => 'text',
                    'title'    => esc_html__('Phone Number', 'bariplan'),
                    'desc' => esc_html__('Insert phone number', 'bariplan'),
					'default'	=> esc_html__('+998 556 778 345', 'bariplan'),					
                ),			
                array(								
                    'id'        => 'bariplan_address_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2'
					)
                ),
                array(								
                    'id'        => 'bariplan_address_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Title Text Color 2', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-address h2 span'
					)
                ),				
                array(								
                    'id'        => 'bariplan_address_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top_address_content a,.top_address_content span'
					)
                ),				
                array(								
                    'id'        => 'bariplan_address_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Address Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.top-address-area
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'bariplan_address_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.top-address-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),						
            )
    ) );
    /* footer logo section */
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Footer Logo Section', 'bariplan' ),
        'id'         => 'bariplan_social_section',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'     => array(
                array(
                    'id'        => 'bariplan_social_logo_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Logo Style', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        's_logo_s1' => esc_html__('Show Text Logo','bariplan'),
                        's_logo_s2' => esc_html__('Show Image Logo','bariplan'),
                    ),
                    'default'   => 's_logo_s1'
                ),				
						
                array(
                    'id'        => 'bariplan_social_title_text',
                    'type'      => 'text',
                    'title'     => esc_html__('Footer Title Text Logo', 'bariplan'),
                    'default'   => esc_html__('bariplan', 'bariplan'),
                    'desc'      => esc_html__('Please set this way for different color. ex-  A<span>S</span>T<span>U</span>T<span>E</span>', 'bariplan'),
                ),
                array(
                    'id'        => 'bariplan_social_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Footer Image Logo', 'bariplan'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 220x50px. Notice:- If you upload this logo, Title text logo will be hide ', 'bariplan'),
                ),				
                array(
                    'id'        => 'bariplan_social_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Footer logo section information', 'bariplan'),
                    'default'	=> esc_html__('Lorem ipsum dolor sit amet, consectetur ahkl adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud' , 'bariplan'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),		
                array(								
                    'id'        => 'bariplan_social_title_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2'
					)
                ),
                array(								
                    'id'        => 'bariplan_social_title2_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer logo section Title Text Color 2', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-top-inner h2 span'
					)
                ),				
                array(								
                    'id'        => 'bariplan_social_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Footer log section Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.footer-top-inner p'
					)
                ),								
                array(								
                    'id'        => 'bariplan_social_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Footer logo Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.footer-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'bariplan_social_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),					
				
            )
    ) );
	 /*  footer widget area */
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Widget Section', 'bariplan' ),
        'id'          => 'bariplan_widget_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(								
                    'id'        => 'bariplan_wmb_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Together Widget and Cppyright Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
									.witrfm_area
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
				array(
					'id'       => 'footer_wcs_gr',
					'type'     => 'color_gradient',
					'title'    => esc_html__('Widget and Cppyright Section Gradient BG Color', 'bariplan'),
					'desc'     => esc_html__('Set Gradient From here.', 'bariplan'),
					'validate' => 'color',			
					'default'  => array(
					'from' => '',
					'to'   => '',
					)
				),				
				array(								
					'id'        => 'bariplan_wmbov_bg_color',
					'type'      => 'color_rgba',
					'title'     => esc_html__('Widget and Cppyright Section Overlay', 'bariplan'),
					'default'   => array(
						'color'     => '#00509f',
						'alpha'     => 0
					),
					'output'    => array(
					'background-color' => '
					.witrfm_area:before
					'
					)
				),
				array(
				 'id'   => 'twr_heading_widget_c',
				 'type' => 'info',
				 'desc' => esc_html__('Please set your column Width Below options. total column width - 100%','bariplan')
				),
                array(
                    'id'        => 'bariplan_widget_column_count1',
                    'type'      => 'select',
                    'title'     => esc_html__('Footer Widget 1', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1 =  8.33%','bariplan'),
                        '2' => esc_html__('Column 2 = 16.66%','bariplan'),
                        '3' => esc_html__('Column 3 = 25%','bariplan'),
                        '4' => esc_html__('Column 4 = 33.33%','bariplan'),
                        '6' => esc_html__('Column 6 = 50%','bariplan'),
                        '12' => esc_html__('Column 12 = 100%','bariplan'),
                        'd-none' => esc_html__('Column Hide','bariplan'),
                    ),
                    'default'   =>'4'
                ),
                array(
                    'id'        => 'bariplan_widget_column_count2',
                    'type'      => 'select',
                    'title'     => esc_html__('Footer Widget 2', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1 =  8.33%','bariplan'),
                        '2' => esc_html__('Column 2 = 16.66%','bariplan'),
                        '3' => esc_html__('Column 3 = 25%','bariplan'),
                        '4' => esc_html__('Column 4 = 33.33%','bariplan'),
                        '6' => esc_html__('Column 6 = 50%','bariplan'),
                        '12' => esc_html__('Column 12 = 100%','bariplan'),
                        'd-none' => esc_html__('Column Hide','bariplan'),
                    ),
                    'default'   =>'2'
                ),
                array(
                    'id'        => 'bariplan_widget_column_count3',
                    'type'      => 'select',
                    'title'     => esc_html__('Footer Widget 3', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1 =  8.33%','bariplan'),
                        '2' => esc_html__('Column 2 = 16.66%','bariplan'),
                        '3' => esc_html__('Column 3 = 25%','bariplan'),
                        '4' => esc_html__('Column 4 = 33.33%','bariplan'),
                        '6' => esc_html__('Column 6 = 50%','bariplan'),
                        '12' => esc_html__('Column 12 = 100%','bariplan'),
                        'd-none' => esc_html__('Column Hide','bariplan'),
                    ),
                    'default'   =>'2'
                ),	
                array(
                    'id'        => 'bariplan_widget_column_count4',
                    'type'      => 'select',
                    'title'     => esc_html__('Footer Widget 4', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1 =  8.33%','bariplan'),
                        '2' => esc_html__('Column 2 = 16.66%','bariplan'),
                        '3' => esc_html__('Column 3 = 25%','bariplan'),
                        '4' => esc_html__('Column 4 = 33.33%','bariplan'),
                        '6' => esc_html__('Column 6 = 50%','bariplan'),
                        '12' => esc_html__('Column 12 = 100%','bariplan'),
                        'd-none' => esc_html__('Column Hide','bariplan'),
                    ),
                    'default'   =>'4'
                ),					
				 array(	
                    'id'        => 'bariplan_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Title Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-middle .widget h2'
					)
                ),
                array(								
                    'id'        => 'bariplan_copyright_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p,
							.bariplan-description-area p, 
							.bariplan-description-area .phone a,
							.bariplan-description-area .social-icons a,
							.recent-review-content h3,
							.recent-review-content h3 a,
							.recent-review-content p,
							.footer-middle .bariplan-description-area p,
							.footer-middle .recent-post-text h4 a,
							.footer-middle .recent-post-text .rcomment,
							.witr_sub_table span
							
						')
                ),	
                array(								
                    'id'        => 'bariplan_copyright_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						')
                ),		
				array(								
                    'id'        => 'bariplan_widget_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Widget Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
									.footer-middle
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				array(
					'id'             => 'bariplan_widget_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-middle'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
            )
    ) );	

    //footer copyright text
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Copyright Info', 'bariplan'),
        'id'        => 'bariplan_copyright',
        'desc'      => esc_html__('Insert your copyright style', 'bariplan'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'    => array(
                array(
                    'id'        => 'bariplan_footer_copyright_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Copyright Style Layout', 'bariplan'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'copy_s1' => esc_html__('Copyright Text Style','bariplan'),
                        'copy_s2' => esc_html__('Copyright Text and Right Menu','bariplan'),
                        'copy_s3' => esc_html__('Copyright Text and Left Menu','bariplan'),
                        'copy_s4' => esc_html__('Copyright Text and Social Icon','bariplan'),
                    ),
                    'default'   => 'copy_s2'
                ),
                array(								
                    'id'        => 'bariplan_wftp_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Top Boeder Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
						.footer-bottom:before
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				
                array(
                    'id'        => 'bariplan_copyright_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Copyright information', 'bariplan'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'bariplan'),
                    'default'	=> esc_html__('Copyright &copy; bariplan all rights reserved.', 'bariplan'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),
                array(								
                    'id'        => 'bariplan_copyright_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text p,.footer-menu ul li a'
					)
                ),
                array(								
                    'id'        => 'bariplan_copyright_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Hover Color', 'bariplan'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text a, .footer-menu ul li a:hover'
					)
                ),				
                array(								
                    'id'        => 'bariplan_copyright_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Copyright Section BG Color', 'bariplan'),
                    'default'  => '',
                    'output'    => array('
					.footer-bottom
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),						
				
				array(
					'id'             => 'bariplan_copyright_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-bottom'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'bariplan'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'bariplan'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'bariplan'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				

				
				
				
            ),
    ) );




	
	
			
/* ========================
END bariplan FOOTER FIELD
=========================*/	
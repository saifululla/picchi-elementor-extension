<?php 

class Banner_widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'banner';
    }

	public function get_title() {
        return esc_html__( 'Picchi Banner', 'picchi-elementor-extension' );
    }

	public function get_icon() {
        return 'eicon-code';
    }


	public function get_categories() {

        return [ 'general' ];
    }

    protected function register_controls() {


	$this->start_controls_section(
        'sub-title-content',
        [
            'label' => esc_html__( 'Sub Title', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    // $this->add_control(
    //     'heading_option',
    //     [
    //         'label' => esc_html__( 'Sub Title', 'picchi-elementor-extension' ),
    //         'type' => \Elementor\Controls_Manager::HEADING,
    //         'separator' => 'before',
    //     ]
    // );
  

    $this->add_control(
        'subheading',
        [
            'type' => \Elementor\Controls_Manager::TEXT,
            'label' => esc_html__( 'Sub Heading', 'picchi-elementor-extension' ),
            'label_block' => true,
            'placeholder' => esc_html__( 'Enter your title', 'picchi-elementor-extension' ),
        ]
    );
	$this->add_control(
        'subheading_align',
        [
            'label' => esc_html__( 'Alignment', 'picchi-elementor-extension' ),
            'dynamic' => [
                'active' => true,
            ],
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .welcome-content h4' => 'text-align: {{VALUE}};',
            ],
        ]
    );
    
    $this->end_controls_section();

    $this->start_controls_section(
        'title-content',
        [
            'label' => esc_html__( 'Title Section', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
        'heading',
        [
            'type' => \Elementor\Controls_Manager::TEXT,
            'label' => esc_html__( ' Heading', 'picchi-elementor-extension' ),
            'label_block' => true,
            'placeholder' => esc_html__( 'Enter your title', 'picchi-elementor-extension' ),
        ]
    );
    $this->add_control(
        'heading_align',
        [
            'label' => esc_html__( 'Alignment', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'picchi-elementor-extension' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .welcome-content h4' => 'text-align: {{VALUE}};',
            ],
        ]
    );
    $this->end_controls_section();

    $this->start_controls_section(
        'desc-content',
        [
            'label' => esc_html__( 'Description', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
        'banner_desc',
        [
            'label' => esc_html__( 'Description', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'rows' => 10,
            'default' => esc_html__( 'Default description', 'picchi-elementor-extension' ),
            'placeholder' => esc_html__( 'Type your description here', 'picchi-elementor-extension' ),
        ]
    );
    $this->end_controls_section();

    $this->start_controls_section(
        'btns-content',
        [
            'label' => esc_html__( 'Button 1', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
       // Button 1 Title
		$this->add_control(
			'btn1_title',
			[
				'label' => __( 'Button 1 Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Button 1 Title Here ', 'picchi-extension' ),
			]
        );
        
        // Button 1 Link
		$this->add_control(
			'btn1_link',
			[
				'label' => __( 'Button 1 Link', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Button 1 Linke Here', 'picchi-extension' ),
			]
        );


    $this->end_controls_section();

    $this->start_controls_section(
        'btn2-content',
        [
            'label' => esc_html__( 'Button 2', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
       // Button 1 Title
		$this->add_control(
			'btn2_title',
			[
				'label' => __( 'Button 2 Title', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'separator'=> 'before',
				'placeholder' => __( 'Write Button 2 Title Here ', 'picchi-extension' ),
			]
        );
        
        // Button 2 Link
		$this->add_control(
			'btn2_link',
			[
				'label' => __( 'Button 2 Link', 'picchi-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'Write Button 2 Linke Here', 'picchi-extension' ),
			]
        );
       

    $this->end_controls_section();

// content style tab section

    $this->start_controls_section(
        'subheading_style',
        [
            'label' => esc_html__( 'Sub Heading ', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'subheading_color',
        [
            'label' => esc_html__( 'Sub Heading Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .welcome-content h4 ' => 'color: {{VALUE}}',
            ],
        ]
    );


    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'subheading_typography',
            'selector' => '{{WRAPPER}} .welcome-content h4',
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Text_Shadow::get_type(),
        [
            'name' => 'subheading_shadow',
            'label' => esc_html__( ' Sub Title  Shadow', 'picchi-elementor-extension' ),
            'selector' => '{{WRAPPER}} .welcome-content h4',
        ]
    );


    $this->end_controls_section();

    $this->start_controls_section(
        'heading_style',
        [
            'label' => esc_html__( 'Heading ', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'heading_color',
        [
            'label' => esc_html__( ' Heading Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .welcome-content h2 ' => 'color: {{VALUE}}',
            ],
        ]
    );

  // Title Typography 
  $this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'heading_typography',
        'selector' => '{{WRAPPER}} .welcome-content h2',
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'heading_shadow',
        'label' => esc_html__( '  Title  Shadow', 'picchi-elementor-extension' ),
        'selector' => '{{WRAPPER}} .welcome-content h2',
    ]
);

    $this->end_controls_section();


    // banner descvripom color section
    $this->start_controls_section(
        'desc_style',
        [
            'label' => esc_html__( 'Description ', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'description_color',
        [
            'label' => esc_html__( ' Description Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .welcome-content p ' => 'color: {{VALUE}}',
            ],
        ]
    );

  // Description Typography 
  $this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'desc_typography',
        'selector' => '{{WRAPPER}} .welcome-content p',
    ]
);
$this->add_group_control(
    \Elementor\Group_Control_Text_Shadow::get_type(),
    [
        'name' => 'desc_shadow',
        'label' => esc_html__( 'Description  Shadow', 'picchi-elementor-extension' ),
        'selector' => '{{WRAPPER}} .welcome-content p',
    ]
);

    $this->end_controls_section();


// button one style section
    $this->start_controls_section(
            'btn_bg_style',
            [
                'label' => esc_html__( 'Button 1 Color ', 'picchi-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

    $this->add_control(
        'btn1_heading',
        [
            'label' => __( 'Button ', 'picchi-extension' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before'
        ]
    );
// extra butn
$this->start_controls_tabs(
    'btn1_style_tabs'
);

// Normal Style Tab
$this->start_controls_tab(
    'btn1_style_normal_tab',
    [
        'label' => __( 'Normal', 'picchi-extension' ),
    ]
);

// Button 1 Color
$this->add_control(
    'btn1_color',
    [
        'label' => __( 'Color', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::COLOR,
        // 'scheme' => [
        //     'type' => \Elementor\Scheme_Color::get_type(),
        //     'value' => \Elementor\Scheme_Color::COLOR_1,
        // ],
        'default' => '#fff',
        'selectors' => [
            '{{WRAPPER}} .box-btn' => 'color: {{VALUE}}',
        ],
    ]
);

// Button 1 Background Color
$this->add_control(
    'btn1_background',
    [
        'label' => __( 'Background Color', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::COLOR,
        // 'scheme' => [
        //     'type' => \Elementor\Scheme_Color::get_type(),
        //     'value' => \Elementor\Scheme_Color::COLOR_1,
        // ],
        'default' => 'tomato',
        'selectors' => [
            '{{WRAPPER}} .box-btn' => 'background-color: {{VALUE}}',
        ],
    ]
);

// Button 1 Typography 
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'btn1_typography',
        'label' => __( 'Typography', 'picchi-extension' ),
       
        'selector' => '{{WRAPPER}} .box-btn',
    ]
);
$this->add_control(
    'btn1_margin',
    [
        'label' => esc_html__( 'Margin', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
// Button 1 Padding 
$this->add_control(
    'btn1_padding',
    [
        'label' => __( 'Padding', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// Button 1 Border Radius 
$this->add_control(
    'btn1_border_radius',
    [
        'label' => __( 'Border Radius', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);


$this->end_controls_tab();

// Hover Style Tab
$this->start_controls_tab(
    'btn1_style_hover_tab',
    [
        'label' => __( 'Hover', 'picchi-extension' ),
    ]
);
$this->add_control(
    'hover_animation',
    [
        'label' => esc_html__( 'Hover Animation', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
    ]
);
$this->add_control(
    'entrance_animation',
    [
        'label' => esc_html__( 'Entrance Animation', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::ANIMATION,
        'prefix_class' => 'animated ',
    ]
);
// Button 1 Hover Color
$this->add_control(
    'btn1_hover_color',
    [
        'label' => __( 'Color', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::COLOR,
       
        'default' => '#fff',
        'selectors' => [
            '{{WRAPPER}} .box-btn:hover' => 'color: {{VALUE}}',
        ],
    ]
);

// Button 1 Hover Background Color
$this->add_control(
    'btn1_hover_background',
    [
        'label' => __( 'Background Color', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::COLOR,
        // 'scheme' => [
        //     'type' => \Elementor\Scheme_Color::get_type(),
        //     'value' => \Elementor\Scheme_Color::COLOR_1,
        // ],
        'default' => 'tomato',
        'selectors' => [
            '{{WRAPPER}} .box-btn:hover' => 'background-color: {{VALUE}}',
        ],
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'btn1_hv_typography',
        'label' => __( 'Typography', 'picchi-extension' ),
       
        'selector' => '{{WRAPPER}} .box-btn:hover',
    ]
);

$this->add_control(
    'btn1_hover_margin',
    [
        'label' => esc_html__( 'Margin', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// Button 1 Padding 
$this->add_control(
    'btn1_hv_padding',
    [
        'label' => __( 'Padding', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// Button 1 Border Radius 
$this->add_control(
    'btn1_hv_border_radius',
    [
        'label' => __( 'Border Radius', 'picchi-extension' ),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%', 'em' ],
        'selectors' => [
            '{{WRAPPER}} .box-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();
// butn 2
 $this->start_controls_section(
            'btn2_bg_style',
            [
                'label' => esc_html__( 'Button 2 Color ', 'picchi-elementor-extension' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

    $this->add_control(
        'btn2_heading',
        [
            'label' => __( 'Button ', 'picchi-extension' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before'
        ]
    );

    $this->start_controls_tabs(
        'btn2_style_tabs'
    );
    $this->start_controls_tab(
        'btn2_style_normal_tab',
        [
            'label' => esc_html__( 'Normal', 'picchi-elementor-extension' ),
        ]
    );

    $this->add_control(
        'btn2_color',
        [
            'label' => esc_html__( 'Button Text Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .border-btn' => 'color: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_control(
        'btn2_bg_color',
        [
            'label' => esc_html__( 'Button Border Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .border-btn' => 'border-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'content_typography',
            'selector' => '{{WRAPPER}} .border-btn',
        ]
    );
    $this->add_control(
        'btn2_margin',
        [
            'label' => esc_html__( 'Margin', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->add_control(
        'btn2_padding',
        [
            'label' => esc_html__( 'Padding', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->add_control(
        'btn2_border_redius',
        [
            'label' => esc_html__( 'Border Redius', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    
    $this->end_controls_tab();

    $this->start_controls_tab(
        'btn2_style_hover_tab',
        [
            'label' => esc_html__( 'Hover', 'picchi-elementor-extension' ),
        ]
    );
    $this->add_control(
        'btn2_hover_color',
        [
            'label' => esc_html__( 'Button Text Hover Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'border_popover_toggle',
        [
            'label' => esc_html__( 'Border Color Popover', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            'label_off' => esc_html__( 'Default', 'your-plugin' ),
            'label_on' => esc_html__( 'Custom', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );

    $this->start_popover();
    $this->add_control(
        'border_style',
        [
            'label' => esc_html__( 'Border Style', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'solid',
            'options' => [
                'solid'  => esc_html__( 'Solid', 'picchi-elementor-extension' ),
                'dashed' => esc_html__( 'Dashed', 'picchi-elementor-extension' ),
                'dotted' => esc_html__( 'Dotted', 'picchi-elementor-extension' ),
                'double' => esc_html__( 'Double', 'picchi-elementor-extension' ),
                'none' => esc_html__( 'None', 'picchi-elementor-extension' ),
            ],
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'border-style: {{VALUE}};',
            ],
        ]
    );
    $this->add_control(
        'btn2_br_hover_color',
      
        [
            'label' => esc_html__( 'Button Border Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'border-color: {{VALUE}}',
            ],
            // 'condition' => [
			// 	'border' => '',
			// ],
        ]
    );
    $this->add_control(
        'border_width_hovr',
        [
            'label' => esc_html__( 'Border Width', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
				'{{WRAPPER}} .border-btn:hover'  => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
			'condition' => [
				'border-style' => 'none',
			]
		]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'background',
            'label' => esc_html__( 'Background', 'picchi-elementor-extension' ),
            'types' => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .border-btn:hover',
        ]
    );
    $this->add_control(
        'btn2_bg_hover_color',
      
        [
            'label' => esc_html__( 'Button Background Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    $this->end_popover();

   
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'btn2_hover_typography',
            'selector' => '{{WRAPPER}} .border-btn:hover',
        ]
    );
    $this->add_control(
        'btn2_hover_margin',
        [
            'label' => esc_html__( 'Margin', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->add_control(
        'btn2_hover_padding',
        [
            'label' => esc_html__( 'Padding', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->add_control(
        'btn2_border_hover_redius',
        [
            'label' => esc_html__( 'Border Hover Redius', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .border-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    
    $this->end_controls_tab();


    $this->end_controls_tabs();

// end extra btn

    //   // banner btn 1 color section
    //   $this->start_controls_section(
    //     'btn_bg_style',
    //     [
    //         'label' => esc_html__( 'Button 1 Color ', 'picchi-elementor-extension' ),
    //         'tab' => \Elementor\Controls_Manager::TAB_STYLE,
    //     ]
    // );
    // $this->add_control(
    //     'btn_bg_color',
    //     [
    //         'label' => esc_html__( 'Button Background Color', 'picchi-elementor-extension' ),
    //         'type' => \Elementor\Controls_Manager::COLOR,
    //         'selectors' => [
    //             '{{WRAPPER}} a.box-btn ' => 'background-color: {{VALUE}}',
    //         ],
    //     ]
    // );
    //  // Button 1 Typography 
    //  $this->add_group_control(
    //     \Elementor\Group_Control_Typography::get_type(),
    //     [
    //         'name' => 'btn1_typography',
    //         'label' => __( 'Typography', 'picchi-extension' ),
    //         // 'type' => \Elementor\Controls_Manager::TYPOGRAPHY_1,
    //         'selector' => '{{WRAPPER}} .box-btn',
    //     ]
    // );

    // // Button 1 Padding 
    // $this->add_control(
    //     'btn1_padding',
    //     [
    //         'label' => __( 'Padding', 'picchi-extension' ),
    //         'type' => \Elementor\Controls_Manager::DIMENSIONS,
    //         'size_units' => [ 'px', '%', 'em' ],
    //         'selectors' => [
    //             '{{WRAPPER}} .box-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
    //         ],
    //     ]
    // );
    
    // // Button 1 Border Radius 
    // $this->add_control(
    //     'btn1_border_radius',
    //     [
    //         'label' => __( 'Border Radius', 'picchi-extension' ),
    //         'type' => \Elementor\Controls_Manager::DIMENSIONS,
    //         'size_units' => [ 'px', '%', 'em' ],
    //         'selectors' => [
    //             '{{WRAPPER}} .box-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
    //         ],
    //     ]
    // );

    //  // Button 1 Hover Color
    //  $this->add_control(
    //     'btn1_hover_color',
    //     [
    //         'label' => __( 'Color', 'picchi-extension' ),
    //         'type' => \Elementor\Controls_Manager::COLOR,
    //         // 'scheme' => [
    //         //     'type' => \Elementor\Scheme_Color::get_type(),
    //         //     'value' => \Elementor\Scheme_Color::COLOR_1,
    //         // ],
    //         'default' => '#fff',
    //         'selectors' => [
    //             '{{WRAPPER}} a.box-btn:hover' => 'color: {{VALUE}}',
    //         ],
    //     ]
    // );

    // // Button 1 Hover Background Color
    // $this->add_control(
    //     'btn1_hover_background',
    //     [
    //         'label' => __( 'Background Color', 'picchi-extension' ),
    //         'type' => \Elementor\Controls_Manager::COLOR,
    //         'default' => 'tomato',
    //         'selectors' => [
    //             '{{WRAPPER}} a .box-btn:hover' => 'background-color: {{VALUE}}',
    //         ],
    //     ]
    // );
    // $this->add_control(
    //     'hover_animation',
    //     [
    //         'label' => esc_html__( 'Hover Animation', 'picchi-elementor-extension' ),
    //         'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
    //     ]
    // );

  // Title Typography 
//   $this->add_group_control(
//     \Elementor\Group_Control_Typography::get_type(),
//     [
//         'name' => 'desc_typography',
//         'selector' => '{{WRAPPER}} .welcome-content p',
//     ]
// );

    $this->end_controls_section();

    }


	protected function render() {
        $settings = $this->get_settings_for_display();
        $subheading = $settings['subheading'];
        $heading = $settings['heading'];
        $banner_desc = $settings['banner_desc'];
        $btn1_title = $settings['btn1_title'];
        $btn1_link = $settings['btn1_link'];
        $btn2_title = $settings['btn2_title'];
        $btn2_link = $settings['btn2_link'];
        
      
        
        ?>
        <!-- <div class="col-xl-8 mx-auto"> -->
       
					<div class="welcome-content text-center">
						<h4><?php echo $subheading; ?></h4>
						<h2><?php echo $heading; ?></h2>
						<p><?php echo $banner_desc; ?></p>
						<a href="<?php echo $btn1_link['url']; ?>" class="box-btn" <?php echo $settings['entrance_animation'] ; ?>><?php echo $btn1_title; ?></a>
						<a  href="<?php echo $btn2_link['url']; ?>" class="border-btn"><?php echo $btn2_title; ?></a>
					</div>
				<!-- </div> -->
		</div>
		<?php
    }

	protected function content_template() {}

}
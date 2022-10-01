<?php 

class Button_widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'btn';
    }

	public function get_title() {
        return esc_html__( 'Picchi Button', 'picchi-elementor-extension' );
    }

	public function get_icon() {
        return 'eicon-code';
    }


	public function get_categories() {

        return [ 'general' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'btn_bg_style',
            [
                'label' => esc_html__( 'Button 1 Color ', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
	 // Button 1 Options
     $this->add_control(
        'btn1_heading',
        [
            'label' => __( 'Button 1', 'picchi-extension' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before'
        ]
    );
    
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
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
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
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
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
            'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .box-btn',
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

    // Button 1 Hover Color
    $this->add_control(
        'btn1_hover_color',
        [
            'label' => __( 'Color', 'picchi-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
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
            'scheme' => [
                'type' => \Elementor\Scheme_Color::get_type(),
                'value' => \Elementor\Scheme_Color::COLOR_1,
            ],
            'default' => 'tomato',
            'selectors' => [
                '{{WRAPPER}} .box-btn:hover' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    $this->end_controls_tab();

    $this->end_controls_tabs();

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
    }

	protected function content_template() {}

}
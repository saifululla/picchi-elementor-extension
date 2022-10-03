<?php

class Heading_widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'heading';
    }

	public function get_title() {
        return esc_html__( 'Picchi Heading', 'picchi-elementor-extension' );
    }

	public function get_icon() {
        return 'eicon-code';
    }


	public function get_categories() {

        return [ 'picchi-elementor-extension' ];
    }

    protected function register_controls() {


	$this->start_controls_section(
        'content_section',
        [
            'label' => esc_html__( 'Content', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'sub_title_heading',
        [
            'type' => \Elementor\Controls_Manager::TEXT,
            'label' => esc_html__( 'Sub Title', 'picchi-elementor-extension' ),
            'label_block' => true,
            'default' => esc_html__( 'what we do', 'picchi-elementor-extension' ),
            'placeholder' => esc_html__( 'what we do', 'picchi-elementor-extension' ),
        ]
    );
    $this->add_control(
        'heading_title',
        [
            'type' => \Elementor\Controls_Manager::TEXT,
            'label' => esc_html__( ' Sub Title', 'picchi-elementor-extension' ),
            'label_block' => true,
            'default' => esc_html__( 'about us', 'picchi-elementor-extension' ),
            'placeholder' => esc_html__( 'about us', 'picchi-elementor-extension' ),
        ]
    );
    $this->add_control(
        'heading_desc',
        [
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label' => esc_html__( ' Sub Description', 'picchi-elementor-extension' ),
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'picchi-elementor-extension' ),
           
        ]
    );

    $this->add_control(
        'alignment',
        [
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'label' => esc_html__( 'Alignment', 'picchi-elementor-extension' ),
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
            'selectors' => [
                '{{WRAPPER}} .section-title' => 'text-align:{{VALUE}};',
            ],
        ]
    );

    $this->end_controls_section();


    $this->start_controls_section(
        'heading_style',
        [
            'label' => esc_html__( 'Style', 'picchi-elementor-extension' ),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_control(
        'sub_title_options',
        [
            'label' => esc_html__( 'Sub Title Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );
// sub title
    $this->add_control(
        'sub_title_color',
        [
            'label' => esc_html__( 'Sub Titler Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section-title h4' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'sub_title_typography',
            'selector' => '{{WRAPPER}} .section-title h4',
        ]
    );
// title
$this->add_control(
    'title_options',
    [
        'label' => esc_html__( 'Title Color', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
    $this->add_control(
        'heading_title_color',
        [
            'label' => esc_html__( 'Heading Title Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'title_typography',
            'selector' => '{{WRAPPER}} .section-title h2',
        ]
    );

// sub descriptopm
$this->add_control(
    'heading_descriptopn__options',
    [
        'label' => esc_html__( 'Sub Description Color', 'picchi-elementor-extension' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
    $this->add_control(
        'heading_descriptopn_color',
        [
            'label' => esc_html__( 'Heading Description Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section-title p' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'sub_desc_typography',
            'selector' => '{{WRAPPER}} .section-title p',
        ]
    );

    // divider color section
    $this->add_control(
        'heading_divider__options',
        [
            'label' => esc_html__( 'Divider Background Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );
// divider color
    $this->add_control(
        'heading_divider_bofore_color',
        [
            'label' => esc_html__( 'Before Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'separator' => 'before',
            'selectors' => [
                '{{WRAPPER}} .section-title h2:before ' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'heading_divider_after_color',
        [
            'label' => esc_html__( 'After  Color', 'picchi-elementor-extension' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .section-title h2:after ' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    $this->end_controls_section();
    }
	protected function render() {
        $settings = $this->get_settings_for_display();
        $sub_title_heading = $settings['sub_title_heading'];
        $heading_title = $settings['heading_title'];
        $heading_desc = $settings['heading_desc'];

                 ?>
            <div class="section-title">
						<h4><?php  echo $sub_title_heading ;?></h4>
						<h2><?php  echo $heading_title ;?></h2>
						<p><?php  echo $heading_desc ;?> </p>
			</div>
        <?php
    }

	protected function content_template() {}

}
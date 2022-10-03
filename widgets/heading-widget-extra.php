<?php

class Heading_widget_extra extends \Elementor\Widget_Base {

	public function get_name() {
        return 'extra';
    }

	public function get_title() {
        return esc_html__( 'Picchi Heading extra', 'picchi-elementor-extension' );
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
				'label' => __( 'Content', 'picchi-elementor-extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'sub_title',
			[
				'label'       => __( 'Sub Title', 'picchi-elementor-extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
                'label_block' => true,
				'placeholder' => __( 'Some Dummy Text', 'picchi-elementor-extension' ),
				'default'     => __( 'Elementor Blank Widget', 'picchi-elementor-extension' ),
			]
		);
        $this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'picchi-elementor-extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
				'placeholder' => __( 'Some Dummy Text', 'picchi-elementor-extension' ),
				'default'     => __( 'Elementor Blank Widget', 'picchi-elementor-extension' ),
			]
		);
        $this->add_control(
			'content',
			[
				'label'       => __( 'Content', 'picchi-elementor-extension' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'input_type'  => 'text',
                'dynamic' => [
                    'active' => true,
                ],
                // 'label_block' => true,
				'placeholder' => __( 'Some Dummy Text', 'picchi-elementor-extension' ),
				'default'     => __( 'Elementor Blank Widget', 'picchi-elementor-extension' ),
			]
		);
        $this->add_control(
			'title_tag',
			[
				'label' => esc_html__( 'Title Tag Html', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'H2',
				'options' => [
					'H1'  => esc_html__( 'H1', 'textdomain' ),
					'H2'  => esc_html__( 'H2', 'textdomain' ),
					'H3'  => esc_html__( 'H3', 'textdomain' ),
					'H4'  => esc_html__( 'H4', 'textdomain' ),
					'H5'  => esc_html__( 'H5', 'textdomain' ),
					'H6'  => esc_html__( 'H6', 'textdomain' ),
					'span'  => esc_html__( 'span', 'textdomain' ),
					'p'  => esc_html__( 'p', 'textdomain' ),
					
				],
				'condition' => [
                    'dependent-control-name' => [ 'H1','H2','H3','H4','H5','H6','span','p' ],
                ],
			]
		);
        
		$this->add_control(
			'custom_css',
			[
				'label' => esc_html__( 'Custom css', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::CODE,
				'language' => 'css',
				'rows' => 20,
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Text Style', 'picchi-elementor-extension' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
			'hover_animation',
			[
				'label' => esc_html__( 'Hover Animation', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label'     => __( 'Color', 'picchi-elementor-extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .section-title h4' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'sub_title_content_typography',
				'label'    => __( 'Typography', 'picchi-elementor-extension' ),
				// 'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section-title h4',
			]
		);
        $this->add_control(
			'title_color',
			[
				'label'     => __( 'Color', 'picchi-elementor-extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'title_content_typography',
				'label'    => __( 'Typography', 'picchi-elementor-extension' ),
				// 'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .section-title h2',
			]
		);

        $this->add_control(
			'desc_color',
			[
				'label'     => __( 'Color', 'picchi-elementor-extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .section-title p' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'desc_content_typography',
				'label'    => __( 'Typography', 'picchi-elementor-extension' ),
				// 'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
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
        $settings   = $this->get_settings_for_display(); 
        echo $settings['custom_css'];

		$sub_title = $this->get_settings( 'sub_title' );
		$title = $this->get_settings( 'title' );
		$content = $this->get_settings( 'content' );

		$this->add_render_attribute( 'sub_title', 'class', 'sub_title' );
        $this->add_inline_editing_attributes( 'sub_title' ); // inline editing

		// $this->add_render_attribute( 'title', 'class', 'title' );
        $this->add_inline_editing_attributes( 'title' );

		$this->add_render_attribute( 'content', 'class', 'content' );
		$this->add_inline_editing_attributes( 'content' );


        $elementClass = 'container';
		if ( $settings['hover_animation'] ) {
			$elementClass .= ' elementor-animation-' . $settings['hover_animation'];
		}
        $this->add_render_attribute( 'sub_title', 'class', $elementClass );
        $this->add_render_attribute( 'title', 'class', $elementClass );
        $this->add_render_attribute( 'content', 'class', $elementClass );
		?>
        <div class="section-title">
        <h4 <?php echo $this->get_render_attribute_string( 'sub_title' ) ?>> <?php echo esc_html( $sub_title ); ?></h4> 
        <h2 <?php echo $this->get_render_attribute_string( 'title' ) ?>> <?php echo esc_html( $title ); ?></h2>
         <p <?php echo $this->get_render_attribute_string( 'content' ) ?>> <?php echo esc_html( $content ); ?>
        
        </p>
        </div>
		<?php
    }

	protected function content_template() {
        $this->add_render_attribute( 'sub_title', 'class', 'sub_title' );
        $this->add_render_attribute( 'title', 'class', 'title' );
        $this->add_render_attribute( 'content', 'class', 'content' );

		$this->add_inline_editing_attributes( 'sub_title', 'none' );
		$this->add_inline_editing_attributes( 'title', 'none' );
		$this->add_inline_editing_attributes( 'content', 'none' );
        ?>
        <#
		var elementClass = 'container';
		if ( '' !== settings.hover_animation ) {
			elementClass += ' elementor-animation-' + settings.hover_animation;
		}
		view.addRenderAttribute( 'sub_title', { 'class': elementClass } );
		view.addRenderAttribute( 'title', { 'class': elementClass } );
		view.addRenderAttribute( 'content', { 'class': elementClass } );
		#>
    

		        {{{ settings.custom_css }}}
         <div class="section-title">
        <h4 <?php echo $this->get_render_attribute_string( 'sub_title' ) ?>> {{ settings.sub_title }}</h4>
        <h2 <?php echo $this->get_render_attribute_string( 'title' ) ?>> {{ settings.title }}</h2>
        <p <?php echo $this->get_render_attribute_string( 'content' ) ?>> {{ settings.content }}
    </p>
    </div>
		<?php

    }

}
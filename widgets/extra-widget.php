<?php

class Extra_widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'Extra';
    }

	public function get_title() {
        return esc_html__( 'Picchi Extra', 'picchi-elementor-extension' );
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
			'dummy_text',
			[
				'label'       => __( 'Dummy Text', 'picchi-elementor-extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
				'placeholder' => __( 'Some Dummy Text', 'picchi-elementor-extension' ),
				'default'     => __( 'Elementor Blank Widget', 'picchi-elementor-extension' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'custom_css_filters',
				'selector' => '{{WRAPPER}} .dummy_text',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'picchi-elementor-extension' ),
				'tab'   =>\Elementor\Controls_Manager::TAB_RESPONSIVE,
			]
		);

		$this->add_control(
			'dummy_text',
			[
				'label'       => __( 'Dummy Text', 'picchi-elementor-extension' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
				'placeholder' => __( 'Some Dummy Text', 'picchi-elementor-extension' ),
				'default'     => __( 'Elementor Blank Widget', 'picchi-elementor-extension' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'custom_css_filters',
				'selector' => '{{WRAPPER}} .dummy_text',
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
			'color',
			[
				'label'     => __( 'Color', 'picchi-elementor-extension' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .dummy_text' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Typography', 'picchi-elementor-extension' ),
				// 'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .dummy_text',
			]
		);

		$this->end_controls_section();
    }
	protected function render() {
        $settings   = $this->get_settings_for_display(); //and echo $settings['dummy_text']
		$dummy_text = $this->get_settings( 'dummy_text' );
		$this->add_render_attribute( 'dummy_text', 'class', 'dummy_text' );
		$this->add_inline_editing_attributes( 'dummy_text' );
		?>
        <div <?php echo $this->get_render_attribute_string( 'dummy_text' ) ?>> <?php echo esc_html( $dummy_text ); ?></div>
		<?php
    }

	protected function content_template() {
        $this->add_render_attribute( 'dummy_text', 'class', 'dummy_text' );
		$this->add_inline_editing_attributes( 'dummy_text', 'none' );
		?>
        <div <?php echo $this->get_render_attribute_string( 'dummy_text' ) ?>> {{ settings.dummy_text }}</div>
		<?php
    }

}
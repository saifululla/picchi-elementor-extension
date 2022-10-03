<?php

class About_widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'about';
    }

	public function get_title() {
        return esc_html__( 'Picchi About', 'picchi-elementor-extension' );
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
			'about_heading_options',
			[
				'label' => esc_html__( 'Title', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'about_title',
			[
				'label' => esc_html__( 'Title', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Default title', 'picchi-elementor-extension' ),
				'placeholder' => esc_html__( 'Type your title here', 'picchi-elementor-extension' ),
			]
		);
        $this->add_control(
			'about_desc',
			[
				'label' => esc_html__( 'Descriotion', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Default title', 'picchi-elementor-extension' ),
				'placeholder' => esc_html__( 'Type your title here', 'picchi-elementor-extension' ),
			]
		); 
        $this->add_control(
			'about_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'Default title', 'picchi-elementor-extension' ),
				'placeholder' => esc_html__( 'Type your title here', 'picchi-elementor-extension' ),
			]
		);
        $this->add_control(
			'about_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::URL,
				
			]
		);


        $this->add_control(
			'about_image',
			[
				'label' => esc_html__( 'Choose Image', 'picchi-elementor-extension' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		// reapeter section
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'single_about_icon',
				[
				'label' => esc_html__( 'Icon', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				
				
			]
		);

		$repeater->add_control(
			'single_about_title', [
				'label' => esc_html__( 'Title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'single_about_desc', [
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'plugin-name' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'single_about_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				
			]
		);
		$repeater->add_control(
			'single_about_btn_link',
			[
				'label' => esc_html__( 'Button Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				
			]
		);

		$this->add_control(
			'single_about_list',
			[
				'label' => esc_html__( 'Repeater List', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'plugin-name' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'plugin-name' ),
					],
					[
						'list_title' => esc_html__( 'Title #2', 'plugin-name' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'plugin-name' ),
					],
				],
				'title_field' => '{{{ single_about_title }}}',
			]
		);

		$this->end_controls_section();


    }
	protected function render() {
        $settings = $this->get_settings_for_display();
       $about_title = $settings['about_title'];
       $about_desc = $settings['about_desc'];
       $about_btn_text = $settings['about_btn_text'];
       $about_btn_link = $settings['about_btn_link'];
       $about_image = $settings['about_image'];
          ?>
              <div class="row">
				<div class="col-xl-6">
					<div class="about-text">
						<h4><?php echo $about_title; ?></h4>
						<p><?php echo $about_desc; ?></p>
						<a href="<?php echo $about_btn_link['url']; ?>" class="box-btn"><?php echo $about_btn_text; ?></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-img">
						<img src="<?php echo $about_image['url']; ?>" alt="" />
					</div>
				</div>
			</div>
			<div class="row pt-100">

				<?php
					if($settings['single_about_list']){
						foreach($settings['single_about_list'] as $item){

					
				?>
				<div class="col-xl-4">
					<div class="single-about">
						<i class="<?php echo $item['single_about_icon']['value']; ?>"></i>
						<h4><?php echo $item['single_about_title'] ;?></h4>
						<p><?php echo $item['single_about_desc'] ;?></p>
						<a href="<?php echo $item['single_about_btn_link']['url'] ;?>"><?php echo $item['single_about_btn_text'] ; ?> </a>
					</div>
				</div>
				

				<?php 
					} // Foreach Loop end
				}   // if section end
				?>
				</div>
		
	  
                  
        <?php
    }

	protected function content_template() {}

}
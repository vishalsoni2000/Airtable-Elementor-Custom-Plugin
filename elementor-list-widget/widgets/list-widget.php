<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_List_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve list widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'list';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve list widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'AirTable Block List', 'elementor-list-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve list widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-elementor';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'list', 'lists', 'ordered', 'unordered' ];
	}

	/**
	 * Register list widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'List Content', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		/* Start repeater */

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'text',
			[
				'label' => esc_html__( 'Heading', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Article Block', 'elementor-list-widget' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'bestfor',
			[
				'label' => esc_html__( 'Best for', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'This Article Block is best for what?', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'blockquote',
			[
				'label' => esc_html__( 'Quote', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'This Article Block is best for what?', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'logo',
			[
				'label' => esc_html__( 'Logo', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'placeholder' => esc_html__( 'Set Logo', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'content',
			[
				'label' => esc_html__( 'Content', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => esc_html__( 'Enter your block content', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'featured',
			[
				'label' => esc_html__( 'Featured', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'placeholder' => esc_html__( 'Set Featured Image', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'content_second',
			[
				'label' => esc_html__( 'Desctiption', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => esc_html__( 'Enter your block content', 'elementor-list-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'rating1',
			[
				'label' => esc_html__( 'Rating 1', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5,
				'step' => 0.5,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'rating1text',
			[
				'label' => esc_html__( 'Rating 1 Text', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Rating 1 Text', 'elementor-list-widget' ),
				'label_block' => true
			]
		);

		$repeater->add_control(
			'rating2',
			[
				'label' => esc_html__( 'Rating 2', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5,
				'step' => 0.5,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'rating2text',
			[
				'label' => esc_html__( 'Rating 2 Text', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Rating 2 Text', 'elementor-list-widget' ),
				'label_block' => true
			]
		);
		$repeater->add_control(
			'rating3',
			[
				'label' => esc_html__( 'Rating 3', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5,
				'step' => 0.5,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'rating3text',
			[
				'label' => esc_html__( 'Rating 3 Text', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Rating 3 Text', 'elementor-list-widget' ),
				'label_block' => true
			]
		);
		$repeater->add_control(
			'rating4',
			[
				'label' => esc_html__( 'Rating 4', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 5,
				'step' => 0.5,
				'default' => 1,
			]
		);
		$repeater->add_control(
			'rating4text',
			[
				'label' => esc_html__( 'Rating 4 Text', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Rating 4 Text', 'elementor-list-widget' ),
				'label_block' => true
			]
		);
		/* End repeater */

		$this->add_control(
			'list_items',
			[
				'label' => esc_html__( 'List Items', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),           /* Use our repeater */
				'default' => [
					[
						'text' => esc_html__( 'Article Block #1', 'elementor-list-widget' ),
						'link' => '',
						'content' => ''
					],
					[
						'text' => esc_html__( 'Article Block #2', 'elementor-list-widget' ),
						'link' => '',
						'content' => ''
					],
					[
						'text' => esc_html__( 'Article Block #3', 'elementor-list-widget' ),
						'link' => '',
						'content' => ''
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'marker_section',
			[
				'label' => esc_html__( 'List Marker', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'marker_type',
			[
				'label' => esc_html__( 'Marker Type', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'ordered' => [
						'title' => esc_html__( 'Ordered List', 'elementor-list-widget' ),
						'icon' => 'eicon-editor-list-ol',
					],
					'unordered' => [
						'title' => esc_html__( 'Unordered List', 'elementor-list-widget' ),
						'icon' => 'eicon-editor-list-ul',
					],
					'other' => [
						'title' => esc_html__( 'Custom List', 'elementor-list-widget' ),
						'icon' => 'eicon-edit',
					],
				],
				'default' => 'ordered',
				'toggle' => false,
			]
		);

		$this->add_control(
			'marker_content',
			[
				'label' => esc_html__( 'Custom Marker', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter custom marker', 'elementor-list-widget' ),
				'default' => '🧡',
				'condition' => [
					'marker_type[value]' => 'other',
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text::marker' => 'content: "{{VALUE}}";',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_content_section',
			[
				'label' => esc_html__( 'List Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text' => 'color: {{VALUE}};',
					'{{WRAPPER}} .elementor-list-widget-text > a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'icon_typography',
				'selector' => '{{WRAPPER}} .elementor-list-widget-text, {{WRAPPER}} .elementor-list-widget-text > a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .elementor-list-widget-text',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_marker_section',
			[
				'label' => esc_html__( 'Marker Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'marker_color',
			[
				'label' => esc_html__( 'Color', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-list-widget-text::marker' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'marker_spacing',
			[
				'label' => esc_html__( 'Spacing', 'elementor-list-widget' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'em' => [
						'min' => 0,
						'max' => 10,
					],
					'rem' => [
						'min' => 0,
						'max' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 40,
				],
				'selectors' => [
					// '{{WRAPPER}} .elementor-list-widget' => 'padding-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .elementor-list-widget' => 'padding-inline-start: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$html_tag = [
			'ordered' => 'ol',
			'unordered' => 'ul',
			'other' => 'ul',
		];
		$this->add_render_attribute( 'list', 'class', 'elementor-list-widget' );
		?>
		<<?php echo $html_tag[ $settings['marker_type'] ]; ?> <?php $this->print_render_attribute_string( 'list' ); ?>>
			<?php
			foreach ( $settings['list_items'] as $index => $item ) {
				$repeater_setting_key = $this->get_repeater_setting_key( 'text', 'list_items', $index );
				$this->add_render_attribute( $repeater_setting_key, 'class', 'elementor-list-widget-text' );
				$this->add_inline_editing_attributes( $repeater_setting_key );
				?>
				<li <?php $this->print_render_attribute_string( $repeater_setting_key ); ?>>
					<?php
					$title = $settings['list_items'][$index]['text'];

					$rate1 = $settings['list_items'][$index]['rating1'];
					$rate2 = $settings['list_items'][$index]['rating2'];
					$rate3 = $settings['list_items'][$index]['rating3'];
					$rate4 = $settings['list_items'][$index]['rating4'];

					$rate1text = $settings['list_items'][$index]['rating1text'];
					$rate2text = $settings['list_items'][$index]['rating2text'];
					$rate3text = $settings['list_items'][$index]['rating3text'];
					$rate4text = $settings['list_items'][$index]['rating4text'];

					$link = $settings['list_items'][$index]['link'];
					$content = $settings['list_items'][$index]['content'];
					$content_second = $settings['list_items'][$index]['content_second'];
					$bestfor = $settings['list_items'][$index]['bestfor'];
					$blockquote = $settings['list_items'][$index]['blockquote'];
					$settings = $this->get_settings_for_display();

					// Assuming $rate1, $rate2, $rate3, and $rate4 are string values.
					// You can convert them to numbers using the floatval() function.
					$rate1 = floatval($rate1);
					$rate2 = floatval($rate2);
					$rate3 = floatval($rate3);
					$rate4 = floatval($rate4);

					// Now you can perform the addition and division safely.
					$count_rating = ($rate1 + $rate2 + $rate3 + $rate4) / 10;


					if ( ! empty( $item['link']['url'] ) ) {
						$this->add_link_attributes( "link_{$index}", $item['link'] );
						$linked_title = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( "link_{$index}" ), $title );

						echo '<h1><a href="'.$link.'"> '.$linked_title.'</a></h1>';
						echo $bestfor ;
						foreach ( $settings['list_items'][$index]['logo'] as $image ) {
							echo '<img src="' . esc_attr( $image['url'] ) . '">';
						}
						echo $content ;
						foreach ( $settings['list_items'][$index]['featured'] as $image ) {
							echo '<img src="' . esc_attr( $image['url'] ) . '">';
						}
						echo $content_second ;
					} else {
						echo '<div class="post-container">';
						echo '<div class="post-title"><h1><a href="'.$link.'"> '.$title.'</a></h1></div>';
						echo '<div classs="post-bestfor">'.$bestfor . '</div>';
						echo '<div class="container-box">';
						echo '<div class="post-logo">';
						foreach ( $settings['list_items'][$index]['logo'] as $image ) {
							echo '<img src="' . esc_attr( $image['url'] ) . '">';
						}
						echo '</div>';
						echo '<div class="post-content">'.$content.'</div>' ;

						echo '<div class="starratings">';
						echo '<div class="count-container">';
						echo '<div class="circle percentage-'.$count_rating.'">';
						echo '<span>'.$count_rating.'</span>';
						echo '<span class="outof">Out of 10</span>';
						echo '<div class="percentage-bar"></div>';
						echo '</div>';
						echo '</div>';

						echo '<div class="ratings">';

						echo '<div class="single-listing-rating"><div class="rating-text">'.$rate1text.'</div>';
						echo '<div class="rating">';

						for ($i = 1; $i <= 5; $i++) {
							if ($i <= $rate1) {
								echo '<span class="fa fa-star checked"></span>';
							} else {
								echo '<span class="fa fa-star"></span>';
							}
						}
						echo '</div></div>';

						echo '<div class="single-listing-rating"><div class="rating-text">'.$rate2text.'</div>';
						echo '<div class="rating">';
						for ($i = 1; $i <= 5; $i++) {
							if ($i <= $rate2) {
								echo '<span class="fa fa-star checked"></span>';
							} else {
								echo '<span class="fa fa-star"></span>';
							}
						}
						echo '</div></div>';

						echo '<div class="single-listing-rating"><div class="rating-text">'.$rate3text.'</div>';
						echo '<div class="rating">';
						for ($i = 1; $i <= 5; $i++) {
							if ($i <= $rate3) {
								echo '<span class="fa fa-star checked"></span>';
							} else {
								echo '<span class="fa fa-star"></span>';
							}
						}
						echo '</div></div>';

						echo '<div class="single-listing-rating"><div class="rating-text">'.$rate4text.'</div>';
						echo '<div class="rating">';
						for ($i = 1; $i <= 5; $i++) {
							if ($i <= $rate4) {
								echo '<span class="fa fa-star checked"></span>';
							} else {
								echo '<span class="fa fa-star"></span>';
							}
						}
						echo '</div></div>';

						echo '<div class="read-more"> <a class="readmore" href="'.$link.'">Read More</a></div>';
						echo '</div>';

						echo '</div>';

						echo '</div>';



						echo '<div class="featured-image">';
						foreach ( $settings['list_items'][$index]['featured'] as $image ) {
							echo '<img src="' . esc_attr( $image['url'] ) . '">';
						}
						echo '</div>';

						echo '<div class="blockquote">' . $blockquote . '</div>';

						echo '<div class="post-content-second">'.$content_second.'</div>' ;
						echo '</div>';
					}
					?>
				</li>
				<?php
			}
			?>
		</<?php echo $html_tag[ $settings['marker_type'] ]; ?>>
		<?php
	}

	/**
	 * Render list widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<#
		html_tag = {
			'ordered': 'ol',
			'unordered': 'ul',
			'other': 'ul',
		};
		view.addRenderAttribute( 'list', 'class', 'elementor-list-widget' );
		#>
		<{{{ html_tag[ settings.marker_type ] }}} {{{ view.getRenderAttributeString( 'list' ) }}}>
			<# _.each( settings.list_items, function( item, index ) {
				var repeater_setting_key = view.getRepeaterSettingKey( 'text', 'list_items', index );
				view.addRenderAttribute( repeater_setting_key, 'class', 'elementor-list-widget-text' );
				view.addInlineEditingAttributes( repeater_setting_key );
				#>
				<li {{{ view.getRenderAttributeString( repeater_setting_key ) }}}>
					<#
					    var title = item.text;
						var content = item.content;
						var bestfor = item.bestfor;
						var blockquote = item.blockquote;
						var content_second = item.content_second;
					#>
						<h1>{{{title}}}</h1>
							{{{bestfor}}}
							<# _.each( item.logo, function( image ) { #>
								{{ image.url }}
							<# }); #>
							{{{content}}}
							<# _.each( item.featured, function( image ) { #>
								{{ image.url }}
							<# }); #>
					{{{content_second}}}
					{{{blockquote}}}
				</li>
			<# } ); #>
		</{{{ html_tag[ settings.marker_type ] }}}>
		<?php
	}

}
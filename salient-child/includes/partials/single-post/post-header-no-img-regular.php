<?php
/**
 * Post single no header BG image supplied - regular template
 *
 * @package Salient WordPress Theme
 * @subpackage Partials
 * @version 10.5
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

$nectar_options = get_nectar_theme_options();

$bg                                = get_post_meta( $post->ID, '_nectar_header_bg', true );
$bg_color                          = get_post_meta( $post->ID, '_nectar_header_bg_color', true );
$single_post_header_inherit_fi     = ( ! empty( $nectar_options['blog_post_header_inherit_featured_image'] ) ) ? $nectar_options['blog_post_header_inherit_featured_image'] : '0';
$theme_skin                        = ( ! empty( $nectar_options['theme-skin'] ) ) ? $nectar_options['theme-skin'] : 'original';
$header_format                     = (!empty($nectar_options['header_format'])) ? $nectar_options['header_format'] : 'default';
if($header_format === 'centered-menu-bottom-bar') {
  $theme_skin = 'material';
}
$fullscreen_header                 = ( ! empty( $nectar_options['blog_header_type'] ) && $nectar_options['blog_header_type'] === 'fullscreen' && is_singular( 'post' ) ) ? true : false;
$blog_header_type                  = ( ! empty( $nectar_options['blog_header_type'] ) ) ? $nectar_options['blog_header_type'] : 'default';
$fullscreen_class                  = ( $fullscreen_header === true ) ? 'fullscreen-header full-width-content' : null;
$blog_social_style                 = ( get_option( 'salient_social_button_style' ) ) ? get_option( 'salient_social_button_style' ) : 'fixed';
$remove_single_post_date           = ( ! empty( $nectar_options['blog_remove_single_date'] ) ) ? $nectar_options['blog_remove_single_date'] : '0';
$remove_single_post_author         = ( ! empty( $nectar_options['blog_remove_single_author'] ) ) ? $nectar_options['blog_remove_single_author'] : '0';
$remove_single_post_comment_number = ( ! empty( $nectar_options['blog_remove_single_comment_number'] ) ) ? $nectar_options['blog_remove_single_comment_number'] : '0';
$remove_single_post_nectar_love    = ( ! empty( $nectar_options['blog_remove_single_nectar_love'] ) ) ? $nectar_options['blog_remove_single_nectar_love'] : '0';


if ( get_post_format() !== 'status' && get_post_format() !== 'aside' ) {

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			
			// Determine whether theme option to inherit featured image is in effect.
			$inherit_and_has_featured_img = false;
			if( $single_post_header_inherit_fi === '1' && has_post_thumbnail() ) {
				$inherit_and_has_featured_img = true;
			}
			
			if ( ( empty( $bg ) && empty( $bg_color ) ) && $fullscreen_header != true && $inherit_and_has_featured_img !== true ) { ?>

	  <div class="row heading-title hentry" data-header-style="<?php echo esc_attr( $blog_header_type ); ?>">
		<div class="col span_12 section-title blog-title">
				<?php if ( $blog_header_type === 'default_minimal' && 'post' === get_post_type() ) { ?> 
		  <span class="meta-category">

					<?php
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						$output = null;
						foreach ( $categories as $category ) {
							$output .= '<a class="' . esc_attr( $category->slug ) . '" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'salient' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
						}
						echo trim( $output ); // WPCS: XSS ok.
					}
					?>
			  </span> 

		  <?php } ?>
		  <h1 class="entry-title"><?php the_title(); ?></h1>
		   
			<?php if ( 'post' === get_post_type() ) { 
				
			$blog_social_style = ( get_option( 'salient_social_button_style' ) ) ? get_option( 'salient_social_button_style' ) : 'fixed';
			$using_fixed_salient_social = 'false';
			if( function_exists('nectar_social_sharing_output') && 'default' === $blog_social_style ) {
				$using_fixed_salient_social = 'true';
			} 
			?>
			<div id="single-below-header" data-hide-on-mobile="<?php echo esc_attr($using_fixed_salient_social); ?>">
			  <span class="meta-author vcard author"><span class="fn"><?php echo esc_html__( 'By', 'salient' ); ?> <?php the_author_posts_link(); ?></span></span>
					<?php
					$nectar_u_time          = get_the_time( 'U' );
					$nectar_u_modified_time = get_the_modified_time( 'U' );
					if( $nectar_u_modified_time >= $nectar_u_time + 86400 ) {
					?>
				  <?php if(is_single('7161') || is_single('31198')){?>
				  <!--googleoff: index-->
				  <span class="meta-date date published 0"><?php echo get_the_modified_time( __( 'F jS, Y' , 'salient' ) ); ?></span>
				  <!--googleon: index -->
				  <?php }else{ ?>
				  <span class="meta-date date published 1 1"><?php echo get_the_date(); ?></span>	
				  
				  <?php } ?>
				  <span class="meta-date date updated rich-snippet-hidden"><?php echo get_the_modified_time( __( 'F jS, Y' , 'salient' ) ); ?></span>
					<?php } else { ?>
				  <span class="meta-date date updated"><?php echo get_the_date(); ?></span>
				  <?php } 
					if ( $blog_header_type != 'default_minimal' ) { ?>
				  <span class="meta-category"><?php the_category( ', ' ); ?></span> 
				<?php } else { ?>
				  <span class="meta-comment-count"><a href="<?php comments_link(); ?>"> <?php comments_number( esc_html__( 'No Comments', 'salient' ), esc_html__( 'One Comment ', 'salient' ), esc_html__( '% Comments', 'salient' ) ); ?></a></span>
				<?php } ?>
			</div><!--/single-below-header-->
		<?php } 
		   
			if ( $blog_header_type !== 'default_minimal' && 'post' === get_post_type() ) { ?>
			<div id="single-meta">
	
				<div class="meta-comment-count">
				  <a href="<?php comments_link(); ?>"><i class="icon-default-style steadysets-icon-chat"></i> <?php comments_number( esc_html__( 'No Comments', 'salient' ), esc_html__( 'One Comment ', 'salient' ), esc_html__( '% Comments', 'salient' ) ); ?></a>
				</div>
				
					<?php 

					if ( $blog_social_style != 'fixed' ) {
						
						if( function_exists('nectar_social_sharing_output') ) {
							nectar_social_sharing_output('hover','right');
						}

					}
					?>

			</div><!--/single-meta-->

			<?php } ?>
		</div><!--/section-title-->
		<div> 
			<?php echo do_shortcode(get_field('below_title_ad_banner')); ?>
		</div>
	  </div><!--/row-->
	
	<?php }

endwhile;
endif;

} ?>
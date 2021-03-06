<?php
/**

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package 
 */

/**
 *
 * @uses switch_header_style()
 * @uses switch_admin_header_style()
 * @uses switch_admin_header_image()
 */
function switch_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'switch_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'switch_header_style',
		'admin-head-callback'    => 'switch_admin_header_style',
		'admin-preview-callback' => 'switch_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'switch_custom_header_setup' );

if ( ! function_exists( 'switch_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see switch_custom_header_setup().
 */
function switch_header_style() {
	$header_text_color = get_header_textcolor();

	
	if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	
	?>
	<style type="text/css">
	<?php
		
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; 

if ( ! function_exists( 'switch_admin_header_style' ) ) :
/**
 *
 * @see 
 */
function switch_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; 

if ( ! function_exists( 'switch_admin_header_image' ) ) :
/**
 *
 * @see
 */
function switch_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; 
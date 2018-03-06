<?php
function panoply_content_width() {
$GLOBALS['content_width'] = apply_filters( 'panoply_content_width', 1170 );
}
add_action( 'after_setup_theme', 'panoply_content_width', 0 );
if ( ! function_exists( 'panoply_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function panoply_setup() {
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
     	add_theme_support( 'post-thumbnails' );
		add_image_size( 'panoply-blog-image', 360, 202, true );
		add_image_size( 'panoply-blog-standard', 770, 376, true );	
		add_image_size('panoply-post-thumbnail', 570, 386, true);	
		register_nav_menus( array(
			'primary'      => esc_html__( 'Primary Menu', 'panoply' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * WooCommerce support.
		 */
		add_editor_style( array( 'css/editor-style.css', panoply_fonts_url() ) );
		add_theme_support( 'woocommerce' );
		add_theme_support('panoply-scripts',array('comment-reply' ));

        /**
         * Add theme Support custom logo
         * @since WP 4.5
         * @sin 1.2.1
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 200,
            'width'       => 500,
            'flex-height' => true,
            'flex-width'  => true,
            //'header-text' => array( 'site-title',  'site-description' ), //
        ) );
		// Set up the WordPress core custom background feature.
$args = array(
'default-text-color' => 'f1f1f1',
'wp-head-callback' => 'panoply_header_style',
);
add_theme_support( 'custom-background', $args);
	$defaults = array(
	'default-text-color' => '#fff',
	'width'                  => 1600,
	'height'                 => 71,
	'wp-head-callback'       => 'panoply_header_style',
);
add_theme_support( 'custom-header', $defaults );
		
	}
endif;
function panoply_header_style() {?>
<?php 
$background_color = get_background_color();?>
<style type="text/css">
<?php if ($background_color=='') : ?>
body{background-color:#fff;}
<?php else : ?>
body{background-color:#<?php echo esc_html($background_color); ?>;}
<?php endif; ?>
</style>
<?php $get_header_image=get_header_image();?>
<?php if(!empty($get_header_image)){?>
<style type="text/css">
.header{ background:url(<?php echo esc_url($get_header_image);?>);}
</style>
<?php }else{?>
<style type="text/css">
.header{ background:rgba(255,255,255,0.90;)}
</style>
<?php }?>
<?php $get_header_textcolor=get_header_textcolor();
if(isset($get_header_textcolor)&&$get_header_textcolor!==''){?>
<style type="text/css">
.logo-title{color:#<?php echo esc_html($get_header_textcolor); ?>}
</style>
<?php }?>
<?php } 
add_action( 'after_setup_theme', 'panoply_setup' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function panoply_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'panoply_pingback_header' );

/*
Add google fonts
*/

if ( ! function_exists( 'panoply_fonts_url' ) ) :
	/**
	 * Register default Google fonts
	 */
	function panoply_fonts_url() {
	    $fonts_url = '';

	 	/* Translators: If there are characters in your language that are not
	    * supported by Open Sans, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $open_sans = _x( 'on', 'Open Sans font: on or off', 'panoply' );

	    /* Translators: If there are characters in your language that are not
	    * supported by Raleway, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $raleway = _x( 'on', 'Raleway font: on or off', 'panoply' );

	    if ( 'off' !== $raleway || 'off' !== $open_sans ) {
	        $font_families = array();

	        if ( 'off' !== $raleway ) {
	            $font_families[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	        }

	        if ( 'off' !== $open_sans ) {
	            $font_families[] = 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic';
	        }

	        $query_args = array(
	            'family' => urlencode( implode( '|', $font_families ) ),
	            'subset' => urlencode( 'latin,latin-ext' ),
	        );

	        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	    }

	    return esc_url_raw( $fonts_url );
	}
endif;
function panoply_scripts() {
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'),'',true); 
	wp_enqueue_script('jquery_flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'),'',true);
	wp_enqueue_script('smoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array('jquery'),'',true);
	wp_enqueue_script('jquery_wow', get_template_directory_uri() . '/js/wow.js', array('jquery'),'',true);
	wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'),'',true);
	wp_enqueue_script('jquery_custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),'',true);
	wp_enqueue_script('comment-reply');
	wp_enqueue_style( 'panoply-fonts', panoply_fonts_url());
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('panoply-style', get_stylesheet_uri());
	wp_enqueue_style('panoply-responsive', get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css');
	wp_enqueue_style('owl_carousel', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), '', 'all' );
	wp_enqueue_style('panoply-google-fonts', panoply_fonts_url(), array(), null, 'all' );  
}
add_action('wp_enqueue_scripts', 'panoply_scripts');
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/fontawesome-list.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/panoply-comments.php';
require get_template_directory() . '/inc/panoplypro/class-customize.php';
// Register widget area.
function panoply_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'panoply' ),
		'id'            => 'panoply-right-sidebar',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'panoply' ),
		'before_widget' => '<aside class="widget clearfix wow fadeInUp">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title"><span>',
		'after_title'   => '</span></h5>',
	) );
}
add_action( 'widgets_init', 'panoply_widgets_init' );
?>
<?php

if( !function_exists('ionlogistcservices_setup') ) :
    function ionlogistcservices_setup() {
        // Add support for block styles
        add_theme_support('wp-block-styles');

        // Enquque editor styles
        add_editor_style('editor-style.css');

        // Load additional block styles
        $styled_blocks = ['latest-comments'];

        foreach( $styled_blocks as $block_name ) :
            $args = [
                'handle'=>'ionlogisticservices-'.$block_name,
                'src'=>get_theme_file_uri('/assets/css/blocks/'. $block_name .'.css'),
                'path'=>get_theme_file_path('/assets/css/blocks/'. $block_name .'.css')
            ];

            wp_enqueue_block_style('core/'. $block_name, $args);
        endforeach;

         
    }
endif;

add_action('after_setup_theme', 'ionlogistcservices_setup');

function get_version($file_path) {
    return date("ymd-Gis", filemtime(get_theme_file_path($file_path)));
}

function ionlogistcservices_enqueue_scripts() {
    // create my own version codes
    $app_v  = get_version('/assets/js/app.min.js');
    // $vendor_v = get_version('/assets/js/vendor.min.js');
    $style_v = get_version('/assets/css/style.css');
    $app_style_v = get_version('/assets/css/app.css');

    // wp_enqueue_script('ionlogistcservices-vendor-script', get_theme_file_uri('/assets/js/vendor.min.js'), [], $vendor_v, true);
    wp_enqueue_script('ionlogistcservices-script', get_theme_file_uri('/assets/js/app.min.js'), [], $app_v, true);

    // Register theme stylesheet.
    wp_register_style(
        'ionlogistcservices-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        $style_v
    );

    // Add styles inline.
    wp_add_inline_style( 'ionlogistcservices-style', ionlogistcservices_get_font_face_styles() );

    // Enqueue theme stylesheet.
    wp_enqueue_style('ionlogistcservices-style');
    wp_enqueue_style('ionlogistcservices-app-style', get_theme_file_uri('/assets/css/app.css'), [], $app_style_v);
}
add_action('wp_enqueue_scripts', 'ionlogistcservices_enqueue_scripts');

if ( ! function_exists( 'ionlogistcservices_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions ionlogistcservices_styles() and ionlogistcservices_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function ionlogistcservices_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'ionlogistcservices_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since ION Logistic Services 1.0
	 *
	 * @return void
	 */
	function ionlogistcservices_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'ionlogistcservices_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
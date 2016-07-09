<?php
define( 'PATH', plugins_url( '', __FILE__ ) );
 
function add_custom_admin_themes()
{
	$suffix = is_rtl() ? '-rtl' : '';
 
	wp_admin_css_color(
		'forest-afternoon',
		__( 'Your theme name here' ),
		PATH . "/css/theme-uri.css",
		array( '#color1', '#color2', '#color3' )
	);
}
add_action( 'admin_init', 'add_custom_admin_themes' );

?>
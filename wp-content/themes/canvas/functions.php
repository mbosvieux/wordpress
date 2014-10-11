<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Set path to WooFramework and theme specific functions
$functions_path = get_template_directory() . '/functions/';
$includes_path = get_template_directory() . '/includes/';

// Don't load alt stylesheet from WooFramework
if ( ! function_exists( 'woo_output_alt_stylesheet' ) ) {
	function woo_output_alt_stylesheet () {}
}

// Define the theme-specific key to be sent to PressTrends.
define( 'WOO_PRESSTRENDS_THEMEKEY', 'tnla49pj66y028vef95h2oqhkir0tf3jr' );

// WooFramework
require_once ( $functions_path . 'admin-init.php' );	// Framework Init

if ( get_option( 'woo_woo_tumblog_switch' ) == 'true' ) {
	//Enable Tumblog Functionality and theme is upgraded
	update_option( 'woo_needs_tumblog_upgrade', 'false' );
	update_option( 'tumblog_woo_tumblog_upgraded', 'true' );
	update_option( 'tumblog_woo_tumblog_upgraded_posts_done', 'true' );
	require_once ( $functions_path . 'admin-tumblog-quickpress.php' );  // Tumblog Dashboard Functionality
}

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
				'includes/theme-options.php', 				// Options panel settings and custom settings
				'includes/theme-functions.php', 			// Custom theme functions
				'includes/theme-actions.php', 				// Theme actions & user defined hooks
				'includes/theme-comments.php', 				// Custom comments/pingback loop
				'includes/theme-js.php', 					// Load JavaScript via wp_enqueue_script
				'includes/theme-plugin-integrations.php',	// Plugin integrations
				'includes/sidebar-init.php', 				// Initialize widgetized areas
				'includes/theme-widgets.php',				// Theme widgets
				'includes/theme-advanced.php',				// Advanced Theme Functions
				'includes/theme-shortcodes.php',	 		// Custom theme shortcodes
				'includes/woo-layout/woo-layout.php',		// Layout Manager
				'includes/woo-meta/woo-meta.php',			// Meta Manager
				'includes/woo-hooks/woo-hooks.php'			// Hook Manager
				);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}

// Load WooCommerce functions, if applicable.
if ( is_woocommerce_activated() ) {
	locate_template( 'includes/theme-woocommerce.php', true );
}

/*-----------------------------------------------------------------------------------*/
/* You can add custom functions below */
/*-----------------------------------------------------------------------------------*/


// Début Box Auteur //
function woo_author_box () {
	global $post;
	$author_id=$post->post_author;
 
	// Adjust the arrow, if is_rtl().
	$arrow = '&rarr;';
	if ( is_rtl() ) $arrow = '&larr;';
?>
<aside id="post-author">
	<div class="profile-image"><?php echo get_avatar( $author_id, '80' ); ?></div>
	<div class="profile-content">
		<h4><?php printf( esc_attr__( ' %s', 'woothemes' ), get_the_author_meta( 'display_name', $author_id ) ); ?></h4>
		<?php echo get_the_author_meta( 'description', $author_id ); ?> 
<?php if ( is_singular() ) { ?>
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID', $author_id ) ) ); ?>">
				<br>
				<br>
				<?php printf( __( 'Tous les articles de %s %s', 'woothemes' ), get_the_author_meta( 'display_name', $author_id ), '<span class="meta-nav">' . $arrow . '</span>' ); ?>
			</a>
		<?php } ?>
		
		
	</div>
	<div class="fix"></div>
</aside>
<?php
} // Fin Box Auteur //








// Début Supprimer le libellé de la catégorie courante en conservant l'auteur pour la rubrique Archives//
add_filter('woo_archive_title', 'custom_remove_archive_from_title');
		
#function custom_remove_archive_from_title( $title , $before = '<h1 class="archive_header">', $after='</h1>' ){
#   if (is_author()){
#        $title = explode('|', $title)[1];   
#       return $before . $title . $after;
#   }
#}
// Fin Supprimer le libellé de la catégorie courante en conservant l'auteur pour la rubrique Archives //

/*-----------------------------------------------------------------------------------*/
/* Don't add any code below here or the sky will fall down */
/*-----------------------------------------------------------------------------------*/
?>
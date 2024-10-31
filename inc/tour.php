<?php 

if ( ! defined( 'ABSPATH' ) ) exit;
 
function gwseodash_enqueue_pointer_script_style( $hook_suffix ) {
 
	$enqueue_pointer_script_style = false;
 
	$dismissed_pointers = explode( ',', get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
 
	if( !in_array( 'gwseodash_settings_pointer', $dismissed_pointers ) ) {
		$enqueue_pointer_script_style = true;
 
		add_action( 'admin_print_footer_scripts', 'gwseodash_pointer_print_scripts' );
	}
 
	if( $enqueue_pointer_script_style ) {
		wp_enqueue_style( 'wp-pointer' );
		wp_enqueue_script( 'wp-pointer' );
	}
 
}
add_action( 'admin_enqueue_scripts', 'gwseodash_enqueue_pointer_script_style' );
 
function gwseodash_pointer_print_scripts() {
 
	$pointer_content  = "<h3>Hier ist dein SEO-Dashboard!</h3>";
	$pointer_content .= "<p>Ab jetzt sparst du Zeit und Nerven. Eine Menge davon. Denn deine tägliche SEO-Arbeit findet nun in der WordPress-Werkzeugleiste statt.</p>";
	$pointer_content .= "<p>Damit das klappt, muss die Werkzeugleiste im Frontend sichtbar sein. Setze dazu im WordPress-Backend unter “Benutzer → Dein Profil” den Haken bei “Werkzeugleiste für mich auf der Website anzeigen”</p>";
	?>
 
	<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready( function($) {
		$('#wp-admin-bar-gw-helper-main').pointer({
			content:		'<?php echo $pointer_content; ?>',
			position:		{
								edge:	'top',
								align:	'left'
							},
			pointerWidth:	360,
			close:			function() {
								$.post( ajaxurl, {
										pointer: 'gwseodash_settings_pointer',
										action: 'dismiss-wp-pointer'
								});
							}
		}).pointer('open');
	});
	//]]>
	</script>
 
<?php
}
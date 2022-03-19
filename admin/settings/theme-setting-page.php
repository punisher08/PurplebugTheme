<?php
/**
 * Settings for Enquiry Forms Settings page.
 * 
 * @package 	Wordpress_Comparison_Plugin
 * @subpackage 	Wordpress_Comparison_Plugin/admin
 * @since 		1.2.1.1
 * @author 		Netseek Pty Ltd
 */
?>
<div class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<?php if( isset($_GET['settings-updated']) ) { ?>
		<div id="message" class="updated">
		<p><strong><?php _e('Settings saved.') ?></strong></p>
		</div>
	<?php } ?>

	<form method="post" action="options.php" enctype="multipart/form-data"> 
		<?php
		settings_fields( 'purplebug_setting_option' );
		do_settings_sections( 'purplebug_setting_option' );
		submit_button();
		?>
	</form>
</div>
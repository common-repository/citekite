<?php
/*
Plugin Name: CiteKite Plugin
Description: This should be replaced with your plugin's formal description.
Author: theandystratton
Author URI: http://theandystratton.com
Version: 1.0
*/

class CiteKite_Plugin {

	public function __construct() {
		add_action('wp_head', array($this, 'wp_head'));
		if ( is_admin() ) 
			$this->admin_hooks();
	}
	
	public function admin_hooks() {
		add_action('admin_menu', array($this, 'admin_menu'));
	}
	
	
	public function admin_menu() {
		add_submenu_page('options-general.php', 'CiteKite Settings', 'CiteKite', 'edit_users', 'citekite-settings', array($this, 'settings'));
	}
	
	public function wp_head() {
		$options = get_option('citekite_options');
		if ( $options['enabled'] ) :
?>
<script type="text/javascript">
    var cks = {}; cks.siteId = '<?php echo $options['customer_id'] ? esc_js($options['customer_id']) : ''; ?>';
    (function () {
        var cke = document.createElement('script'); 
        cke.type = 'text/javascript';
        cke.defer = true; cke.src = 'http://bee.citekite.com/';
        var ckc = document.getElementsByTagName('script')[0];
        ckc.parentNode.insertBefore(cke, ckc);
    })();
    cks.hideErrors = <?php echo $options['hide_errors'] != 1 ? 'false' : 'true'; ?>;
    cks.invertColors = <?php echo $options['invert_colors'] != 'true' ? 'false' : 'true'; ?>;
</script>
<?php
		endif;
	}

	public function settings() {
		if ( wp_verify_nonce($_POST['citekite_nonce'], 'citekite_save') ) {
			if ( !isset($_POST['citekite']['hide_errors']) )
				$_POST['citekite']['hide_errors'] = 'false';
			update_option('citekite_options', stripslashes_deep($_POST['citekite']));
			$success = true;
		}
		$options = get_option('citekite_options');
?>
<div class="wrap">
	<h2>CiteKite Settings</h2>
	
	<?php if ( $success ) : ?>
		<div class="message updated"><p>Your settings have been saved.</p></div>
	<?php endif; ?>
	
	<form method="post" action="">
		<?php wp_nonce_field('citekite_save', 'citekite_nonce'); ?>

		<p>
			<label for="citekite_customer_id">
				<strong>Your Customer ID:</strong>
			</label>
			<br>
			<input type="text" id="citekite_customer_id" name="citekite[customer_id]" value="<?php echo esc_attr($options['customer_id']); ?>">
			<br>
			<small>
				You can obtain a Customer ID from <a href="http://citekite.com/Get" target="_blank">http://citekite.com/Get</a>
			</small>
		</p>
		<p>
			<label for="citekite_hide_errors">
				<input type="checkbox" id="citekite_hide_errors" name="citekite[hide_errors]" value="1"<?php
					checked($options['hide_errors'], 1);
				?>> Hide &ldquo;not&rdquo; found message
			</label>
		</p>
		<p>
			<strong>Default color scheme:</strong>
			<br>
			&nbsp;&nbsp;&nbsp;
			<label for="citekite_color_scheme_black">
				<input type="radio" id="citekite_color_scheme_black" name="citekite[invert_colors]" value="false" <?php
					if ( !$options['invert_colors'] )
						$options['invert_colors'] = 'false';
					checked($options['invert_colors'], 'false');
				?>> Black on White
			</label>
			<br>
			&nbsp;&nbsp;&nbsp;
			<label for="citekite_color_scheme_white">
				<input type="radio" id="citekite_color_scheme_white" name="citekite[invert_colors]" value="true" <?php
					checked($options['invert_colors'], 'true');
				?>> White on Black
			</label>
		</p>
		
		<p>
			<label for="citekite_enable">
				<input type="checkbox" id="citekite_enable" name="citekite[enabled]" value="1"<?php
					checked($options['enabled'], 1);
				?>> Enable CiteKite
			</label>
		</p>		
		
		<p>
			<input type="submit" class="button-primary" value="Save Settings &raquo;">
		</p>
</div>
<?php
	}

}
$__citekite = new CiteKite_Plugin;
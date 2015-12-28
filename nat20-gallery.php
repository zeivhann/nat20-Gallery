<?php
	/**
	* Plugin Name: nat20 Gallery
	* Plugin URI: http://cardinalws.com
	* Author: Alex Silcott
	* Author URI: http://cardinalws.com
	* Version: 0.0.1
	* License GPLv2
	* Description: Simple Gallery plugin (REWORKING). You can access this plugins under Settings in the admin panel.
	**/
define('NAT20_GALLERY_URL', WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)));
define('NAT20_GALLERY_PATH', WP_PLUGIN_DIR.'/'.dirname(plugin_basename(__FILE__)));
define('NAT20_GALLERY_VERSION', '1.0');

//

// plugin localization
$plugin_dir = basename(dirname(__FILE__)); 
load_plugin_textdomain('gallery', false, $plugin_dir.'/languages');
$dir = plugin_dir_path(__FILE__);


#### ADMIN OPTIONS ####
function nat20_add_options_page() {
	add_options_page(__('nat20 Gallery', 'gallery'), __('nat20 Gallery', 'gallery'), 'manage_options', 'nat20-gallery', 'galleryContent');
}
add_action('admin_menu', 'nat20_add_options_page');

function galleryContent() {
	?>
	<div class="wrap">
		<div id="icon-options-general" class="icon32"></div>
		<h2>nat20 Gallery</h2>

		<?php
		$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'gallery_tab_1';
		if(isset($_GET['tab']))
			$active_tab = $_GET['tab'];
		?>
		<h2 class="nav-tab-wrapper">
			<a href="?page=nat20-gallery&amp;tab=gallery_tab_1" class="nav-tab <?php echo $active_tab == 'gallery_tab_1' ? 'nav-tab-active' : ''; ?>"><?php _e('Galleries', 'nat20-gallery'); ?></a>
			<a href="?page=nat20-gallery&amp;tab=gallery_tab_2" class="nav-tab <?php echo $active_tab == 'gallery_tab_2' ? 'nav-tab-active' : ''; ?>"><?php _e('Upload Images', 'nat20-gallery'); ?></a>
			<a href="?page=nat20-gallery&amp;tab=gallery_tab_3" class="nav-tab <?php echo $active_tab == 'gallery_tab_3' ? 'nav-tab-active' : ''; ?>"><?php _e('Settings', 'nat20-gallery'); ?></a>
			<a href="?page=nat20-gallery&amp;tab=gallery_tab_4" class="nav-tab <?php echo $active_tab == 'gallery_tab_4' ? 'nav-tab-active' : ''; ?>"><?php _e('Sample Tab 4', 'nat20-gallery'); ?></a>
			<a href="?page=nat20-gallery&amp;tab=gallery_tab_5" class="nav-tab <?php echo $active_tab == 'gallery_tab_5' ? 'nav-tab-active' : ''; ?>"><?php _e('Settings', 'nat20-gallery'); ?></a>
		</h2>
		<br>

		<?php if($active_tab == 'gallery_tab_1') { ?>
			<div id="poststuff" class="ui-sortable meta-box-sortables">
				<div class="postbox">
					<h3><?php _e('Galleries', 'sample'); ?></h3>
					<div class="inside">
						<p><?php include $dir . 'nat20-galleries.php'; ?></p>
					</div>
				</div>

				<h2><b>nat20 Gallery</b> <?php _e('Description', 'sample'); ?></h2>
				<p><em><?php _e('You are using', 'sample'); ?> <b>nat20 Gallery</b> <?php _e('version', 'sample'); ?> <b><?php echo NAT20_GALLERY_VERSION; ?></b>.</em></p>
				<p><?php _e('Create and display galleries.', 'sample'); ?></p>
			</div>
			
			
			
			
		<?php } if($active_tab == 'gallery_tab_2') { ?>
			<div id="poststuff" class="ui-sortable meta-box-sortables">
				<div class="postbox">
					<h3><?php _e('Upload Images', 'sample'); ?></h3>
					<div class="inside">
						<p><?php include $dir . 'nat20-upload.php' ?></p>
					</div>
				</div>
			</div>
			
			
			
		<?php } if($active_tab == 'gallery_tab_3') { ?>
			<div id="poststuff" class="ui-sortable meta-box-sortables">
				<div class="postbox">
					<h3><?php _e('Sample Settings', 'sample'); ?></h3>
					<div class="inside">
						<p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sample'); ?></p>
					</div>
				</div>
			</div>
			
			
		<?php } if($active_tab == 'gallery_tab_4') { ?>
			<div id="poststuff" class="ui-sortable meta-box-sortables">
				<div class="postbox">
					<h3><?php _e('Sample Settings', 'sample'); ?></h3>
					<div class="inside">
						<p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sample'); ?></p>
					</div>
				</div>
			</div>
			
			
		<?php } if($active_tab == 'gallery_tab_5') { ?>
			<div id="poststuff" class="ui-sortable meta-box-sortables">
				<div class="postbox">
					<h3><?php _e('Settings', 'sample'); ?></h3>
					<div class="inside">
						<p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sample'); ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>	
	<?php
}
?>

<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://dontbedarius.com
 * @since             1.0.0
 * @package           Meta_Magic
 *
 * @wordpress-plugin
 * Plugin Name:       MetaMagic
 * Plugin URI:        https://dontbedarius/metamagic
 * Description:       MetaMagic is an innovative WordPress plugin that unlocks the full potential of your content's SEO. With the power of artificial intelligence, it effortlessly generates optimized titles and meta descriptions for your WordPress posts and custom post types. Say goodbye to manual optimization and let MetaMagic work its magic, enhancing your website's visibility and attracting more organic traffic. Experience the genius of AI-driven metadata with MetaMagic, the ultimate SEO companion for your WordPress site.
 * Version:           1.0.0
 * Author:            Dont Be Darius
 * Author URI:        https://dontbedarius.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       meta-magic
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'META_MAGIC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-meta-magic-activator.php
 */
function activate_meta_magic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-meta-magic-activator.php';
	Meta_Magic_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-meta-magic-deactivator.php
 */
function deactivate_meta_magic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-meta-magic-deactivator.php';
	Meta_Magic_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_meta_magic' );
register_deactivation_hook( __FILE__, 'deactivate_meta_magic' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-meta-magic.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_meta_magic() {

	$plugin = new Meta_Magic();
	$plugin->run();

}
run_meta_magic();

<?php
/**
 * Plugin Name:     Special Octo Spoon
 * Plugin URI:      https://wordpress.org
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          pereirinha
 * Author URI:      YOUR SITE HERE
 * Text Domain:     special-octo-spoon
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Special_Octo_Spoon
 */

// Your code starts here.
require_once 'updater.php';

if ( is_admin() ) {
	$config = array(
		'slug'               => plugin_basename( __FILE__ ),
		'proper_folder_name' => 'special-octo-spoon',
		'api_url'            => 'https://api.github.com/repos/pereirinha/special-octo-spoon',
		'raw_url'            => 'https://api.github.com/repos/pereirinha/special-octo-spoon/beta/upgrader',
		'github_url'         => 'https://github.com/pereirinha/special-octo-spoon',
		'zip_url'            => 'https://github.com/pereirinha/special-octo-spoon/zipball/beta/upgrader',
		'sslverify'          => true,
		'requires'           => '5.7.2',
		'tested'             => '5.7.2',
		'readme'             => 'README.md',
	);
	new WP_GitHub_Updater( $config );
}

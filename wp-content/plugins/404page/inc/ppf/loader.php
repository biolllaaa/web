<?php

/**
 * Plugin Foundation Loader
 *
 * Peter's Plugins Foundation 09
 *
 * @package    PPF09
 * @author     Peter Raschendorfer
 * @license    GPL2+
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once ( __DIR__ . '/ppf-class.php' );
require_once ( __DIR__ . '/ppf-subclass.php' );
require_once ( __DIR__ . '/ppf-plugin.php' );
require_once ( __DIR__ . '/ppf-settings.php' );
require_once ( __DIR__ . '/ppf-admin.php' );
require_once ( __DIR__ . '/ppf-plugin-addon.php' );
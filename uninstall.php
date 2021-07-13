<?php
/**
 * PreventXSSVulnerability Uninstall
 *
 * Deletes Settings on uninstalling the Plugin.
 *
 * @package PreventXSSVulnerability/Uninstaller
 * @since 0.2
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'prevent_xss_vulnerability_reflected_settings' );
delete_option( 'prevent_xss_vulnerability_self_xss_settings' );

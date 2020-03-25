<?php
/**
 * Gatekeeper plugin for Craft CMS 3.x
 *
 * Protect your Craft CMS website from access with a universal password. Custom for Cursor.
 *
 * @link      http://cursor.co.uk
 * @copyright Copyright (c) 2020 Cursor
 */

/**
 * Gatekeeper config.php
 *
 * This file exists only as a template for the Gatekeeper settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'gatekeeper.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    "enabled" => true,
    "password" => '',
    "notice" => '',
    "duration" => 3600,
];

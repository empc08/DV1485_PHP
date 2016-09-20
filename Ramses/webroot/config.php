<?php

/**
 * Config file for Ramses. Change settings here to affect installation.
 */

/**
 * Set the error reporting.
 */
error_reporting(-1);            // Report all types of errors
ini_set('display_errors', 1);   // Display all errors
ini_set('output_buffering', 0); // Do not buffer outputs, write directly

/**
 * Define Ramses paths.
 */
define('RAMSES_INSTALL_PATH', __DIR__ . '/..');
define('RAMSES_THEME_PATH', RAMSES_INSTALL_PATH . '/theme/render.php');

/**
 * Include bootstrapping functions.
 */
include(RAMSES_INSTALL_PATH . '/src/bootstrap.php');

/**
 * Start the session.
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

/**
 * Create the Ramses variable.
 */
$ramses = array();

/**
 * Site wide settings.
 */
$ramses['lang'] = 'sv';
$ramses['title_append'] = ' | Ramses en webbtemplate';

/**
 * Theme-related settings.
 */
$ramses['stylesheet'] = 'css/style.css';
$ramses['favicon'] = 'img/favicon.ico';
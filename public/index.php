<?php
/**
 * Main entry point for the application
 */

// Set error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define base path
define('BASE_PATH', dirname(dirname(__FILE__)));
define('PUBLIC_PATH', __DIR__);

// Load configuration
require_once BASE_PATH . '/config/config.php';

// Load application
require_once BASE_PATH . '/src/Application.php';

$app = new Application();
$app->run();
?>

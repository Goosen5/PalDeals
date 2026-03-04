<?php
/**
 * Application Configuration
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'paldeals');

// App Configuration
define('APP_NAME', 'PalDeals');
define('APP_VERSION', '1.0.0');
define('APP_ENV', 'development');

// Session Configuration
session_start();

// Timezone
date_default_timezone_set('UTC');

// Database Connection Function
function getDatabase()
{
    try {
        $dbPath = __DIR__ . '/../data/database.db';
        $pdo = new PDO('sqlite:' . $dbPath);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}

// Security Configuration
require_once __DIR__ . '/security.php';

// User Functions
require_once __DIR__ . '/user_functions.php';

// Register Functions
require_once __DIR__ . '/register_functions.php';
?>

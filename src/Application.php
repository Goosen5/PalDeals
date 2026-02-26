<?php
/**
 * Main Application class
 */

class Application
{
    private $controller;
    private $method;
    private $params = [];

    public function __construct()
    {
        // Route handling logic here
    }

    public function run()
    {
        $this->getUrl();
        
        // Default routing
        if (isset($_GET['page'])) {
            $page = htmlspecialchars($_GET['page']);
            // Route to controller based on page parameter
            $this->route($page);
        } else {
            $this->loadDefaultPage();
        }
    }

    private function getUrl()
    {
        // Parse URL for routing
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $this->params = explode('/', $url);
        }
    }

    private function route($page)
    {
        // Basic routing logic - load view based on page
        $viewPath = BASE_PATH . '/src/Views/' . $page . '.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo '<h2>404 - Page not found</h2>';
        }
    }

    private function loadDefaultPage()
    {
        // Load home page
        $viewPath = BASE_PATH . '/src/Views/home.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        }
    }
}
?>

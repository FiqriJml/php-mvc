<?php

if (isset($_GET['route'])) {
    switch ($_GET['route']) {
        case 'users':
            require_once 'controllers/UserController.php';
            $controller = new UserController();
            $controller->index();
            break;
        default:
            echo '404 - Page Not Found';
            break;
    }
} else {
    echo "<h1>Welcome to the homepage!</h1>";
    echo "<p><a href='?route=users'>Go to User List</a></p>"; // Link to the UserController index
}
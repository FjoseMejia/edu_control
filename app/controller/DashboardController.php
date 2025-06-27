<?php
namespace Klassroom\controller;
require_once __DIR__ . '/../../config/app.php';


class DashboardController {
    public function index() {
        session_start();
        if (!isset($_SESSION[APP_SESSION_NAME])) {
            $_SESSION["message"]= "Debes Iniciar Sesión";
            header("Location: " . APP_URL);
            exit;
        }
        require __DIR__ . '/../view/dashboard.php';
    }    
}

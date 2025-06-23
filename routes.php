<?php

use EduControl\controller\AuthController;

return [
    '' => fn() => (new AuthController())->showLogin(),
    'login' => fn() => (new AuthController())->showLogin(),
    'login-post' => fn() => (new AuthController())->login($_POST),

    // Puedes agregar más:
    // 'dashboard' => fn() => (new DashboardController())->index(),
];

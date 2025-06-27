<?php

use Klasroom\controller\AuthController;
use Klasroom\controller\DashboardController;

return [
    '' => fn() => (new AuthController())->showLogin(),
    'login' => fn() => (new AuthController())->showLogin(),
    'login-post' => fn() => (new AuthController())->login($_POST),
    'dashboard' => fn()=> (new DashboardController())->index()
];

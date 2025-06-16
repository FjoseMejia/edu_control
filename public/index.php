<?php
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}

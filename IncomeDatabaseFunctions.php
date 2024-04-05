<?php
require_once 'dbFuncs.php';

// Start session
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: Login.php");
    exit(); // Stop further execution
}
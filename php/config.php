<?php

// Database Credentials
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'test1');
define('DB_USERNAME', 'user1');
define('DB_PASSWORD', 'password');

// Email Credentials
define('SMTP_HOST', 'smtp.office365.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'eswar.0511@outlook.com');
define('SMTP_PASSWORD', 'Eswar@0511');
define('SMTP_FROM', 'eswar.0511@outlook.com');
define('SMTP_SECURE', 'STARTTLS');
define('SMTP_FROM_NAME', 'ddd');

// Global Variables
define('MAX_LOGIN_ATTEMPTS_PER_HOUR', 5);
define('MAX_EMAIL_VERIFICATION_REQUESTS_PER_DAY', 3);
define('MAX_PASSWORD_RESET_REQUESTS_PER_DAY', 3);
define('PASSWORD_RESET_REQUEST_EXPIRY_TIME', 60 * 60);
define('CSRF_TOKEN_SECRET', '12345678');
define('VALIDATE_EMAIL_ENDPOINT', 'http://localhost/SecureAuthSystem-main/validate'); #Do not include trailing /
define('RESET_PASSWORD_ENDPOINT', 'http://localhost/SecureAuthSystem-main/resetpassword'); #Do not include trailing /

// Code we want to run on every page/script
date_default_timezone_set('UTC');
//error_reporting(0);
session_set_cookie_params(['samesite' => 'Strict']);
session_start();

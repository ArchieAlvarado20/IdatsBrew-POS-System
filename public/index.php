<?php
session_start(); // ready to go!

$now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    // this session has worn out its welcome; kill it and start a brand new one
    session_unset();
    session_destroy();
    session_start();
}
// either new or old, it should live at most for another hour
$_SESSION['discard_after'] = $now + 3600;

define("ABSPATH", true);
date_default_timezone_set("Asia/Manila");
require_once '../admin/core/init.php';

$controller = $_GET['pg'] ?? "login-admin";
$controller = strtolower($controller);

if(file_exists("../admin/controller/".$controller. ".php")){
    require "../admin/controller/".$controller. ".php";
}else{
    echo "Controller Not Found";
}



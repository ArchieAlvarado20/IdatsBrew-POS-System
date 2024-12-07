<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'denied';

require view_path('auth/denied-cashier');
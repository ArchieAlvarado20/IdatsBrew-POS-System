<?php
$tab = $_GET['pg'] ?? 'user';
$error = [];

$_SESSION['discard_after'] = $now + 3600;
require view_path('pos/pos');


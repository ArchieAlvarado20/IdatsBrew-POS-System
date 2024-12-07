<?php
$tab = $_GET['pg'] ?? 'user';
$error = [];
$saleClass = new Sales;
$today = date("y,m,d");
$daily_sales = $saleClass->query("select sum(total) as total from vw_sales where sdate = '$today' && status = 'Sold'");
require view_path('dashboard/sale');

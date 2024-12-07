<?php
$tab = $_GET['pg'] ?? 'user';
$error = [];
$saleClass = new Sales;
$today = date("y,m,d");
//$cancels = $saleClass->query("select count(*) as count from tblcart where sdate = '$today' && status = 'Cancelled'");
$cancels = $saleClass->query("select sum(qty) as count from vw_sales where sdate = '$today' && category = '2' && status = 'Sold'");

require view_path('dashboard/cancelled');

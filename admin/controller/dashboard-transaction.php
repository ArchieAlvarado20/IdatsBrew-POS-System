<?php
$tab = $_GET['pg'] ?? 'user';
$error = [];
$saleClass = new Sales;
$today = date("y,m,d");
//$transaction = $saleClass->query("select trans_count as count from tblcart where sdate = '$today' && status = 'Sold' order by trans_count desc limit 1");
$transaction = $saleClass->query("select sum(qty) as count from vw_sales where sdate = '$today' && category = '1' && status = 'Sold'");
require view_path('dashboard/transaction');

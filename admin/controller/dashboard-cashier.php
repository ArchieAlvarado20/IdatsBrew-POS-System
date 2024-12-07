<?php
$tab = $_GET['pg'] ?? 'user';
$error = [];
$saleClass = new Sales;
$today = date("y,m,d");
$cashiers_duty =  $saleClass->query("select user_id as cashier from vw_sales where sdate = '$today' && status = 'Sold' order by id desc limit 1");
require view_path('dashboard/cashier');
    
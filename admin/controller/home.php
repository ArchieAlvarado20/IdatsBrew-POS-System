<?php
date_default_timezone_set("Asia/Manila");
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'home';

$today = date('Y-m-d');

//product
$countClass  = new Product();
$counts = $countClass->query("SELECT COUNT(*) AS count FROM tblproduct");



//stocks

$stocks = $countClass->query("select COUNT(*) AS count FROM tblproduct where category = 0");
$criticals = $countClass->query("select sum(status = 1) as critical from tblproduct where category = 0");
$full_stocks = $countClass->query("select sum(status = 0) as full_stock from tblproduct where category = 0");

//user account
$users = new User;
$admins = $users->query("select sum(role = 'admin') as admin from tblusers");
$cashiers = $users->query("select sum(role = 'cashier') as cashier from tblusers");

//daily sales
$saleClass = new Sales();
$cashier =  $saleClass->query("select * from vw_sales where sdate = '$today' && status = 'Sold' order by id desc limit 1");

//coffee and lemon sales
$coffee = $saleClass->query("select sum(total) as count from vw_sales where sdate = '$today' && category = '2' && status = 'Sold'");
$lemon = $saleClass->query("select sum(total) as count from vw_sales where sdate = '$today' && category = '1' && status = 'Sold'");

//last month sales
// $month_sales = $saleClass->query("SELECT SUM(total) AS total_month FROM vw_sales WHERE MONTH(sdate) = MONTH(CURDATE() - INTERVAL 1 MONTH)");
// $transaction_month = "";
// $transaction_month = $saleClass->query("select trans_count as count from tblcart where MONTH(sdate) = MONTH(CURDATE() - INTERVAL 1 MONTH) && status = 'Sold' order by trans_count desc limit 1");
// $cancel = $saleClass->query("select count(*) as count from tblcart where MONTH(sdate) = MONTH(CURDATE() - INTERVAL 1 MONTH) && status = 'Cancelled'");

//charts
$donuts = $saleClass->query("select description as month , view as total from tblproduct where category != 4 order by view desc limit 5");
foreach($donuts as $data){
    $month[] = $data['month'];
    $total[] = $data['total'];
}
$bar = $saleClass->query("select monthname(sdate) as months ,sum(total) as totals from vw_sales where status = 'Sold' group by month(sdate)");
if(!empty($bar)){
    foreach($bar as $data){
    $months[] = $data['months'];
    $totals[] = $data['totals'];
    }
}else{
    $months[] = ""; 
    $totals[] = "";
}

$bar1 = $saleClass->query("select monthname(stock_at) as months ,sum(total) as totals from vw_stock where status = 'Stock-in' group by month(stock_at)");
if(!empty($bar1)){
    foreach($bar as $data){
    $months1[] = $data['months']; 
    $totals1[] = $data['totals'];
    }
}else{
    $months1[] = ""; 
    $totals1[] = "";
}


$bar = $saleClass->query("select monthname(stock_at) as months,sum(total) as cost from vw_stock where status = 'Stock-in' group by month(stock_at)");
if(!empty($bar)){   
    foreach($bar as $data){
    $cost[] = $data['cost'];
    }
}else{
    $cost[] = "";
}

$line = $saleClass->query("select dayname(sdate) as days, sum(total) as totals ,sum(total_raw) as cost from vw_sales where status = 'Sold' group by day(sdate)");
 foreach($line as $data){
    $days[] = $data['days'];
    $totalDay[] = $data['totals'];
    $costDay[] = $data['cost'];
    }

$crit = $saleClass->query("SELECT COUNT(*) AS count FROM tblproduct where category = 0 AND status = 1");
    
if(Auth::access('admin')){
    require view_path('home');
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied-cashier');
}




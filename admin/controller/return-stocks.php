<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category';
    $saleClass = new Sales();
    $sales = $saleClass->query("select * from vw_cancel where status = 'Return' && category = 0 order by id desc");
     $cashierClass = new User;
    $cashier = $cashierClass->query("select * from tblusers where role = 'cashier'");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $start = $_POST['start'];
    $end = $_POST['end'];
    $filter = $_POST['filter'] ?? null;
    $cashier1 = $_POST['cashier'] ?? null;
    if($cashier1){
        $sales = $saleClass->query("select * from vw_cancel where (sdate between '$start' and '$end' ) && category = 0 and cancel_request like '$cashier1' order by id desc");
    }else{
        $sales = $saleClass->query("select * from vw_cancel where (sdate between '$start' and '$end' ) && category = 0 order by id desc");
    }
}
require view_path('stocks/return-stocks');
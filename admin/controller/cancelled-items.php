<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category';
    $saleClass = new Sales();
    $sales = $saleClass->query("select * from vw_cancel where status = 'Cancelled' order by id desc");
     $cashierClass = new User;
    $cashier = $cashierClass->query("select * from tblusers where role = 'cashier'");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $start = $_POST['start'];
    $end = $_POST['end'];
    $filter = $_POST['filter'] ?? null;
    $cashier1 = $_POST['cashier'] ?? null;
    if($cashier1){
        $sales = $saleClass->query("select * from vw_cancel where (date between '$start' and '$end' ) and cancel_request like '$cashier1' order by id desc");
    }else{
        $sales = $saleClass->query("select * from vw_cancel where (date between '$start' and '$end' ) order by id desc");
    }
}
require view_path('sales/cancelled-items');
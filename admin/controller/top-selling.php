<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category';
    $saleClass = new Product();
    $sales = $saleClass->query("select * from tblproduct where category != 4 order by view desc limit 5");

require view_path('sales/top-selling');
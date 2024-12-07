<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'dashboard';

    $productClass = new Product();
    $products = $productClass->query("select * from tblproduct where category in(1,2,3) order by id desc");

if(Auth::access('')){
    require view_path('product/product');  
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied');
}


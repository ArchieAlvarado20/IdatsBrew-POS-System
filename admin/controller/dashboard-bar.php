<?php
$saleClass = new Sales;

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

$bar = $saleClass->query("select monthname(sdate) as months,sum(total) as cost from vw_sales where status = 'Raw' group by months");
if(!empty($bar)){   
    foreach($bar as $data){
    $cost[] = $data['cost'];
    }
}else{
    $cost[] = "";
}
require view_path('dashboard/bar');

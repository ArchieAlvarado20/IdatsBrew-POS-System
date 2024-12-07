<?php
$saleClass = new Sales;

$line = $saleClass->query("select dayname(sdate) as days, sum(total) as totals ,sum(total_raw) as cost from vw_sales where status = 'sold' group by day(sdate) limit 7");
 foreach($line as $data){
    $days[] = $data['days'];
    $totalDay[] = $data['totals'];
    $costDay[] = $data['cost'];
    }

    
require view_path('dashboard/line');

<?php
error_reporting(0);
// make is suitable for SSE
header("Cache-Control: no-store");
header("Content-Type: text/event-stream");
//header("Content-Type: application/json");

$p = "";
        foreach($daily_sales as $sale){
                 $sales = $sale['total'] ?? 0;
                
                // $data = ['sales' => $sales];

               $n =  json_encode($sales);

                if(strcmp($p, $n) !== 0){
                    // here data will shown on change
                    echo "data:" . $n . "\n\n";
                    $p = $n;
                }

                // this will show data even the loading is not completed
                ob_end_flush();
                flush();

                // sleep process for 1 sec
                sleep(1);
        }
      
 
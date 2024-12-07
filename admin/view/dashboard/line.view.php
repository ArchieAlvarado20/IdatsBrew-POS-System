<?php
error_reporting(0);
// make is suitable for SSE
header("Cache-Control: no-store");
header("Content-Type: text/event-stream");

$p = "";
                    foreach($line as $data){
                    $days[] = $data['days'];
                    $totalDay[] = $data['totals'];
                    $costDay[] = $data['cost'];


                    $n =  json_encode(array($days,$totalDay,$costDay));

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
               




           
        

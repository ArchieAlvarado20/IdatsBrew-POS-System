<?php
error_reporting(0);
// make is suitable for SSE
header("Cache-Control: no-store");
header("Content-Type: text/event-stream");

$p = "";
                $n =  json_encode($months);

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
        

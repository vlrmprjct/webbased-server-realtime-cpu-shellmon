<?php
    exec('ps aux', $processes);
    foreach($processes as $process)
    {
        $cols = split(' ', ereg_replace(' +', ' ', $process));
        if (strpos($cols[2], '.') > -1)
        {
            $cpuUsage += floatval($cols[2]);
        }
    }
    print($cpuUsage);
?>

<?php

//$stat1 = file('/proc/stat');
//sleep(1);
//$stat2 = file('/proc/stat');
//$info1 = explode(" ", preg_replace("!cpu +!", "", $stat1[0]));
//$info2 = explode(" ", preg_replace("!cpu +!", "", $stat2[0]));
//$dif = array();
//$dif['user'] = $info2[0] - $info1[0];
//$dif['nice'] = $info2[1] - $info1[1];
//$dif['sys'] = $info2[2] - $info1[2];
//$dif['idle'] = $info2[3] - $info1[3];
//$total = array_sum($dif);
//$cpu = array();
//foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
//
//echo "IDLE :" . $cpu['idle'];
//echo "CPU  :" . $cpu['user'];
//print_r(file('/proc/stat'));
//
?>

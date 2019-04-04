<?php
/**
 * Created by PhpStorm.
 * User: snabweb
 * Date: 004 04.04.19
 * Time: 15:59
 */
//make analog of var_dump
function debugMe($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

$m = [
    [4, 1, 7],
    [8, 3, 2],
    [2, 9, 5]
];
//check this out
debugMe($m);
// i make function print to monitor array $m in table style
function drawArr($arr){
    echo "<table border='1'>";
    foreach($arr as $mass => $items):
        echo "<tr>";
        foreach($items as $key => $value):
            echo "<td style='padding: 10px;'>$value</td>";
        endforeach;
        echo "</tr>";
    endforeach;
    echo "</table>";
}
echo "Array before<br>";
drawArr($m);

